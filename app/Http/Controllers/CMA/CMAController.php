<?php

namespace App\Http\Controllers\CMA;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CMA\CmaReport;
use App\Models\CMA\CmaReportListing;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PDF;
use QuickChart;

class CMAController extends Controller
{
    public function index()
    {
        $rows = CmaReport::where('user_id', auth()->id())->latest()->get();
        return view('cma.index', compact('rows'));
    }

    public function search()
    {
        return view('cma.search');
    }

    public function show()
    {
        return view('cma.show');
    }

    public function averageSalePrice()
    {
        return view('cma.average-sales-price');
    }

    public function propertyTaxes()
    {
        return view('cma.property-taxes');
    }

    public function finishPage()
    {
        return view('cma.finish-page');
    }

    public function showReport(CmaReport $report)
    {
        return view('cma.show-report', compact('report'));
    }

    public function create(Request $req)
    {
        $row = CmaReport::create([
            'user_id' => auth()->id(),
            'address' => $req->listing_id
        ]);

        $listings = explode(',', $req->listings_id);

        foreach ($listings as $listing) {
            $res = $this->getListingData($listing);
            CmaReportListing::create(['cma_report_id' => $row->id, 'listing_id' => $listing, 'data' => ($res)]);
        }

        $this->generatePdf($row->id);

        return response()->json($row->id);
    }

    public function delete($id)
    {
        $row = CmaReport::find($id)->delete();

        return redirect()->back();
    }

    public function generatePdf($id)
    {
        $report = CmaReport::findOrFail($id);

        if ($report->path)
            return Storage::disk('public')->download($report->path, 'CMA Report.pdf');

        $listings = $report->listings;
        $config = [
            'type' => 'bar',
            'data' => [
                'datasets' => [
                    [
                        'label' => 'Dataset 1',
                        'data' => [],
                        'backgroundColor' => 'rgba(198, 164, 103, 0.48)',
                        'borderColor' => '#C6A467',
                        'borderWidth' => 2,
                        'fill' => false,
                        'spanGaps' => false,
                        'lineTension' => 0.4,
                        'pointRadius' => 3,
                        'pointHoverRadius' => 3,
                        'pointStyle' => 'circle',
                        'borderDash' => [0, 0],
                        'barPercentage' => 0.9,
                        'categoryPercentage' => 0.8,
                        'type' => 'bar',
                        'hidden' => false,
                        'xAxisID' => 'X1'
                    ]
                ],
                'labels' => []
            ],
            'options' => [
                'title' => [
                    'display' => false,
                    'position' => 'top',
                    'fontSize' => 12,
                    'fontFamily' => 'sans-serif',
                    'fontColor' => '#666666',
                    'fontStyle' => 'bold',
                    'padding' => 10,
                    'lineHeight' => 1.2,
                    'text' => 'Chart title'
                ],
                'layout' => [
                    'padding' => [],
                    'left' => 0,
                    'right' => 0,
                    'top' => 0,
                    'bottom' => 0
                ],
                'legend' => [
                    'display' => false,
                    'position' => 'top',
                    'align' => 'center',
                    'fullWidth' => true,
                    'reverse' => false,
                    'labels' => [
                        'fontSize' => 12,
                        'fontFamily' => 'sans-serif',
                        'fontColor' => '#666666',
                        'fontStyle' => 'normal',
                        'padding' => 10
                    ]
                ],
                'scales' => [
                    'xAxes' => [
                        [
                            'id' => 'X1',
                            'ticks' => [
                                'beginAtZero' => true,
                                'display' => true,
                                'fontSize' => 20,
                                'fontFamily' => 'sans-serif',
                                'fontColor' => '#666666',
                                'fontStyle' => 'normal',
                                'padding' => 10,
                                'stepSize' => 350,
                                'minRotation' => 0,
                                'maxRotation' => 20,
                                'mirror' => false,
                                'reverse' => false
                            ],
                            'display' => true,
                            'position' => 'bottom',
                            'type' => 'category',
                            'stacked' => false,
                            'offset' => true,
                            'time' => [
                                'unit' => false,
                                'stepSize' => 1,
                                'displayFormats' => [
                                    'millisecond' => 'h:mm:ss.SSS a',
                                    'second' => 'h:mm:ss a',
                                    'minute' => 'h:mm a',
                                    'hour' => 'hA',
                                    'day' => 'MMM D',
                                    'week' => 'll',
                                    'month' => 'MMM YYYY',
                                    'quarter' => '[Q]Q - YYYY',
                                    'year' => 'YYYY'
                                ]
                            ],
                            'distribution' => 'linear',
                            'gridLines' => [
                                'display' => true,
                                'color' => 'rgba(0, 0, 0, 0.1)',
                                'borderDash' => [0, 0],
                                'lineWidth' => 1,
                                'drawBorder' => true,
                                'drawOnChartArea' => true,
                                'drawTicks' => false,
                                'tickMarkLength' => 10,
                                'zeroLineWidth' => 1,
                                'zeroLineColor' => 'rgba(0, 0, 0, 0.25)',
                                'zeroLineBorderDash' => [0, 0]
                            ],
                            'angleLines' => [
                                'display' => true,
                                'color' => 'rgba(0, 0, 0, 0.1)',
                                'borderDash' => [0, 0],
                                'lineWidth' => 1
                            ],
                            'pointLabels' => [
                                'display' => true,
                                'fontColor' => '#666',
                                'fontSize' => 10,
                                'fontStyle' => 'normal'
                            ],
                            'scaleLabel' => [
                                'display' => false,
                                'labelString' => 'Axis label',
                                'lineHeight' => 1.2,
                                'fontColor' => '#666666',
                                'fontFamily' => 'sans-serif',
                                'fontSize' => 12,
                                'fontStyle' => 'normal',
                                'padding' => 4
                            ]
                        ]
                    ],
                    'yAxes' => [
                        [
                            'id' => 'Y1',
                            'position' => 'right',
                            'ticks' => [
                                'beginAtZero' => true,
                                'display' => true,
                                'fontSize' => 20,
                                'fontFamily' => 'sans-serif',
                                'fontColor' => '#666666',
                                'fontStyle' => 'normal',
                                'padding' => 10,
                                'min' => 100,
                                'stepSize' => 200,
                                'minRotation' => 0,
                                'maxRotation' => 20,
                                'mirror' => false,
                                'reverse' => false
                            ],
                            'display' => true,
                            'type' => 'linear',
                            'stacked' => false,
                            'offset' => false,
                            'time' => [
                                'unit' => false,
                                'stepSize' => 1,
                                'displayFormats' => [
                                    'millisecond' => 'h:mm:ss.SSS a',
                                    'second' => 'h:mm:ss a',
                                    'minute' => 'h:mm a',
                                    'hour' => 'hA',
                                    'day' => 'MMM D',
                                    'week' => 'll',
                                    'month' => 'MMM YYYY',
                                    'quarter' => '[Q]Q - YYYY',
                                    'year' => 'YYYY'
                                ]
                            ],
                            'distribution' => 'linear',
                            'gridLines' => [
                                'display' => true,
                                'color' => 'rgba(0, 0, 0, 0.1)',
                                'borderDash' => [2, 2],
                                'lineWidth' => 1,
                                'drawBorder' => true,
                                'drawOnChartArea' => true,
                                'drawTicks' => false,
                                'tickMarkLength' => 0,
                                'zeroLineWidth' => 1,
                                'zeroLineColor' => 'rgba(0, 0, 0, 0.25)',
                                'zeroLineBorderDash' => [0, 0]
                            ],
                            'angleLines' => [
                                'display' => true,
                                'color' => 'rgba(0, 0, 0, 0.1)',
                                'borderDash' => [0, 0],
                                'lineWidth' => 1
                            ],
                            'pointLabels' => [
                                'display' => true,
                                'fontColor' => '#666',
                                'fontSize' => 10,
                                'fontStyle' => 'normal'
                            ],
                            'scaleLabel' => [
                                'display' => true,
                                'labelString' => '$ / SqFt',
                                'lineHeight' => 1.2,
                                'fontColor' => '#666666',
                                'fontFamily' => 'sans-serif',
                                'fontSize' => 20,
                                'fontStyle' => 'normal',
                                'padding' => 4
                            ]
                        ]
                    ]
                ],
                'plugins' => [
                    'datalabels' => [
                        'display' => false,
                        'align' => 'center',
                        'anchor' => 'end',
                        'backgroundColor' => '#eee',
                        'borderColor' => '#ddd',
                        'borderRadius' => 6,
                        'borderWidth' => 1,
                        'padding' => 4,
                        'color' => '#666666',
                        'font' => [
                            'family' => 'sans-serif',
                            'size' => 10,
                            'style' => 'normal'
                        ]
                    ],
                    'datalabelsZAxis' => [
                        'enabled' => false
                    ],
                    'googleSheets' => [],
                    'airtable' => [],
                    'tickFormat' => '$0,0.0'
                ],
                'cutoutPercentage' => 50,
                'rotation' => -1.5707963267948966,
                'circumference' => 6.283185307179586,
                'startAngle' => -1.5707963267948966
            ]
        ];
        $config_2 = [
            "type" => "bar",
            "data" => [
                "datasets" => [
                    [
                        "label" => "Original Price",
                        "data" => [],
                        "backgroundColor" => "rgba(198, 164, 103, 0.48)",
                        "borderColor" => "#C6A467",
                        "borderWidth" => 2,
                        "fill" => false,
                        "spanGaps" => false,
                        "lineTension" => 0.4,
                        "pointRadius" => 3,
                        "pointHoverRadius" => 3,
                        "pointStyle" => "circle",
                        "borderDash" => [0, 0],
                        "barPercentage" => 0.9,
                        "categoryPercentage" => 0.8,
                        "type" => "bar",
                        "hidden" => false,
                        "xAxisID" => "X1",
                    ],
                    [
                        "fill" => false,
                        "spanGaps" => false,
                        "lineTension" => 0.4,
                        "pointRadius" => 3,
                        "pointHoverRadius" => 3,
                        "pointStyle" => "circle",
                        "borderDash" => [0, 0],
                        "barPercentage" => 0.9,
                        "categoryPercentage" => 0.8,
                        "data" => [],
                        "type" => "bar",
                        "label" => "Sold price",
                        "borderColor" => "#0d0701",
                        "backgroundColor" => "rgba(9, 4, 0, 0.08)",
                        "borderWidth" => 1,
                        "hidden" => false,
                        "yAxisID" => "Y1",
                    ],
                ],
                "labels" => [],
            ],
            "options" => [
                "annotation" => [
                    "annotations" => [],
                ],
                "scales" => [
                    "xAxes" => [
                        [
                            "id" => "X1",
                            "ticks" => [
                                "beginAtZero" => true,
                                "display" => true,
                                "fontSize" => 20,
                                "fontFamily" => "sans-serif",
                                "fontColor" => "#666666",
                                "fontStyle" => "normal",
                                "padding" => 10,
                                "stepSize" => 350,
                                "minRotation" => 0,
                                "maxRotation" => 20,
                                "mirror" => false,
                                "reverse" => false,
                            ],
                            "display" => true,
                            "position" => "bottom",
                            "type" => "category",
                            "stacked" => true,
                            "offset" => true,
                            "time" => [
                                "unit" => false,
                                "stepSize" => 1,
                                "displayFormats" => [
                                    "millisecond" => "h:mm:ss.SSS a",
                                    "second" => "h:mm:ss a",
                                    "minute" => "h:mm a",
                                    "hour" => "hA",
                                    "day" => "MMM D",
                                    "week" => "ll",
                                    "month" => "MMM YYYY",
                                    "quarter" => "[Q]Q - YYYY",
                                    "year" => "YYYY",
                                ],
                            ],
                            "distribution" => "linear",
                            "gridLines" => [
                                "display" => true,
                                "color" => "rgba(0, 0, 0, 0.1)",
                                "borderDash" => [0, 0],
                                "lineWidth" => 1,
                                "drawBorder" => true,
                                "drawOnChartArea" => true,
                                "drawTicks" => false,
                                "tickMarkLength" => 10,
                                "zeroLineWidth" => 1,
                                "zeroLineColor" => "rgba(0, 0, 0, 0.25)",
                                "zeroLineBorderDash" => [0, 0],
                            ],
                            "angleLines" => [
                                "display" => true,
                                "color" => "rgba(0, 0, 0, 0.1)",
                                "borderDash" => [0, 0],
                                "lineWidth" => 1,
                            ],
                            "pointLabels" => [
                                "display" => true,
                                "fontColor" => "#666",
                                "fontSize" => 10,
                                "fontStyle" => "normal",
                            ],
                            "scaleLabel" => [
                                "display" => false,
                                "labelString" => "Axis label",
                                "lineHeight" => 1.2,
                                "fontColor" => "#666666",
                                "fontFamily" => "sans-serif",
                                "fontSize" => 12,
                                "fontStyle" => "normal",
                                "padding" => 4,
                            ],
                        ],
                    ],
                    "yAxes" => [
                        [
                            "id" => "Y1",
                            "position" => "right",
                            "ticks" => [
                                "beginAtZero" => true,
                                "display" => true,
                                "fontSize" => 20,
                                "fontFamily" => "sans-serif",
                                "fontColor" => "#666666",
                                "fontStyle" => "normal",
                                "padding" => 10,
                                "min" => 100,
                                "stepSize" => 400,
                                "minRotation" => 0,
                                "maxRotation" => 20,
                                "mirror" => false,
                                "reverse" => false,
                            ],
                            "display" => true,
                            "type" => "linear",
                            "stacked" => false,
                            "offset" => false,
                            "time" => [
                                "unit" => false,
                                "stepSize" => 1,
                                "displayFormats" => [
                                    "millisecond" => "h:mm:ss.SSS a",
                                    "second" => "h:mm:ss a",
                                    "minute" => "h:mm a",
                                    "hour" => "hA",
                                    "day" => "MMM D",
                                    "week" => "ll",
                                    "month" => "MMM YYYY",
                                    "quarter" => "[Q]Q - YYYY",
                                    "year" => "YYYY",
                                ],
                            ],
                            "distribution" => "linear",
                            "gridLines" => [
                                "display" => true,
                                "color" => "rgba(0, 0, 0, 0.1)",
                                "borderDash" => [2, 2],
                                "lineWidth" => 1,
                                "drawBorder" => true,
                                "drawOnChartArea" => true,
                                "drawTicks" => false,
                                "tickMarkLength" => 0,
                                "zeroLineWidth" => 1,
                                "zeroLineColor" => "rgba(0, 0, 0, 0.25)",
                                "zeroLineBorderDash" => [0, 0],
                            ],
                            "angleLines" => [
                                "display" => true,
                                "color" => "rgba(0, 0, 0, 0.1)",
                                "borderDash" => [0, 0],
                                "lineWidth" => 1,
                            ],
                            "pointLabels" => [
                                "display" => true,
                                "fontColor" => "#666",
                                "fontSize" => 10,
                                "fontStyle" => "normal",
                            ],
                        ],
                    ],
                ],
                "plugins" => [
                    "datalabels" => [
                        "display" => false,
                        "align" => "center",
                        "anchor" => "end",
                        "backgroundColor" => "#eee",
                        "borderColor" => "#ddd",
                        "borderRadius" => 6,
                        "borderWidth" => 1,
                        "padding" => 4,
                        "color" => "#666666",
                        "font" => [
                            "family" => "sans-serif",
                            "size" => 10,
                            "style" => "normal",
                        ],
                    ],
                    "datalabelsZAxis" => ["enabled" => false],
                    "googleSheets" => [],
                    "airtable" => [],
                    "tickFormat" => "$0,0.0",
                ],
                "cutoutPercentage" => 50,
                "rotation" => -1.5707963267948966,
                "circumference" => 6.283185307179586,
                "startAngle" => -1.5707963267948966,
            ],
        ];

        $avg_days_on_market = 0;
        $avg_days_on_market_counter = 0;

        $avg_days_on_market_pending = 0;
        $avg_days_on_market_pending_counter = 0;

        $avg_days_on_market_active = 0;
        $avg_days_on_market_active_counter = 0;

        $total_percentage = 0;
        $total_percentage_count = 0;

        $price_per_sqft = 0;
        $price_per_sqft_counter = 0;

        $price_all = 0;
        $price_all_counter = 0;

        $price_per_sqft_all = 0;
        $price_per_sqft_all_counter = 0;

        $price_active = 0;
        $price_active_counter = 0;

        $price_pending = 0;
        $price_pending_counter = 0;

        $price_sold = 0;
        $price_sold_counter = 0;

        $price_per_sqft_active = 0;
        $price_per_sqft_active_counter = 0;

        $price_per_sqft_pending = 0;
        $price_per_sqft_pending_counter = 0;

        $counter = 1;
        foreach ($listings as $listing) {
            $listing->order = $counter++;
            $data = $listing->data;
            if ($data['MlsStatus'] == 'Active') {
                $listing->status = 'A';
                $listing->status_color = 'circle-gray';
                if ($data['MIAMIRE_RATIO_CurrentPrice_By_SQFT']) {
                    $price_per_sqft_all += $data['MIAMIRE_RATIO_CurrentPrice_By_SQFT'];
                    $price_per_sqft_all_counter++;

                    $price_per_sqft_active += $data['MIAMIRE_RATIO_CurrentPrice_By_SQFT'];
                    $price_per_sqft_active_counter++;
                }
                if ($data['ListPrice']) {
                    $price_all += $data['ListPrice'];
                    $price_all_counter++;

                    $price_active += $data['ListPrice'];
                    $price_active_counter++;
                }
                if ($data['DaysOnMarket']) {
                    $avg_days_on_market_active_counter++;
                    $avg_days_on_market_active += $data['DaysOnMarket'];
                }
            }
            if ($data['MlsStatus'] == 'Pending') {
                $listing->status = 'P';
                $listing->status_color = 'circle-gray';
                if ($data['MIAMIRE_RATIO_CurrentPrice_By_SQFT']) {
                    $price_per_sqft_all += $data['MIAMIRE_RATIO_CurrentPrice_By_SQFT'];
                    $price_per_sqft_all_counter++;

                    $price_per_sqft_pending += $data['MIAMIRE_RATIO_CurrentPrice_By_SQFT'];
                    $price_per_sqft_pending_counter++;
                }
                if ($data['ListPrice']) {
                    $price_all += $data['ListPrice'];
                    $price_all_counter++;

                    $price_pending += $data['ListPrice'];
                    $price_pending_counter++;
                }
                if ($data['DaysOnMarket']) {
                    $avg_days_on_market_pending_counter++;
                    $avg_days_on_market_pending += $data['DaysOnMarket'];
                }
            }
            if ($data['MlsStatus'] == 'Closed') {
                $listing->status = 'S';
                $listing->status_color = 'circle-theme';
                if ($data['ListPrice']) {
                    $price_all += $data['ListPrice'];
                    $price_all_counter++;

                    $price_sold += $data['ListPrice'];
                    $price_sold_counter++;
                }
                if ($data['MIAMIRE_RATIO_CurrentPrice_By_SQFT']) {
                    $price_per_sqft_all += $data['MIAMIRE_RATIO_CurrentPrice_By_SQFT'];
                    $price_per_sqft_all_counter++;

                    $price_per_sqft += $data['MIAMIRE_RATIO_CurrentPrice_By_SQFT'];
                    $price_per_sqft_counter++;
                }

                $config['data']['datasets'][0]['data'][] = $data['MIAMIRE_RATIO_CurrentPrice_By_SQFT'];
                $config['data']['labels'][] = $listing->order;

                $config_2['data']['datasets'][0]['data'][] = $data['ListPrice'];
                $config_2['data']['datasets'][1]['data'][] = $data['ClosePrice'];
                $config_2['data']['labels'][] = $listing->order;

                $config_2['options']['annotation']['annotations'][] = [
                    "type" => "line",
                    "mode" => "vertical",
                    "scaleID" => "X1",
                    "value" => $listing->order,
                    "borderWidth" => 0.00001,
                    "label" => [
                        "position" => "bottom",
                        "enabled" => true,
                        "content" => ($data['DaysOnMarket'] ?? '-') . " Days",
                        "fontSize" => 15,
                    ],
                ];
                if ($data['DaysOnMarket']) {
                    $avg_days_on_market_counter++;
                    $avg_days_on_market += $data['DaysOnMarket'];
                }
                if ($data['ClosePrice'] && $data['ListPrice']) {
                    $total_percentage += ($data['ClosePrice'] / $data['ListPrice']) * 100;
                    $total_percentage_count++;
                }
            }
        }

        $avg_days_on_market = $avg_days_on_market_counter > 0 ? round($avg_days_on_market / $avg_days_on_market_counter) : 0;
        $avg_days_on_market_pending = $avg_days_on_market_pending_counter > 0 ? round($avg_days_on_market_pending / $avg_days_on_market_pending_counter) : 0;
        $avg_days_on_market_active = $avg_days_on_market_active_counter > 0 ? round($avg_days_on_market_active / $avg_days_on_market_active_counter) : 0;

        $avg_price_percentage = $total_percentage_count > 0 ? round($total_percentage / $total_percentage_count, 2) : 0;

        $avg_price_per_sqft = $price_per_sqft_counter > 0 ? round($price_per_sqft / $price_per_sqft_counter) : 0;
        $avg_price_per_sqft_active = $price_per_sqft_active_counter > 0 ? round($price_per_sqft_active / $price_per_sqft_active_counter) : 0;
        $avg_price_per_sqft_pending = $price_per_sqft_pending_counter > 0 ? round($price_per_sqft_pending / $price_per_sqft_pending_counter) : 0;
        $avg_price_per_sqft_all = $price_per_sqft_all_counter > 0 ? round($price_per_sqft_all / $price_per_sqft_all_counter) : 0;

        $avg_price_active = $price_active_counter > 0 ? round($price_active / $price_active_counter) : 0;
        $avg_price_pending = $price_pending_counter > 0 ? round($price_pending / $price_pending_counter) : 0;
        $avg_price_sold = $price_sold_counter > 0 ? round($price_sold / $price_sold_counter) : 0;
        $avg_price_all = $price_all_counter > 0 ? round($price_all / $price_all_counter) : 0;

        $chart = new QuickChart(array(
            'width' => 600,
            'height' => 300
        ));

        $chart->setConfig(json_encode($config));
        $addresses = array_map(function ($listing) {
            return $listing['data'] ? $listing['data']['UnparsedAddress'] : '';
        }, $listings->toArray());

        $result = implode('|', $addresses);
        $data = [
            'listings' => $listings,
            'avg_days_on_market' => $avg_days_on_market,
            'avg_days_on_market_pending' => $avg_days_on_market_pending,
            'avg_days_on_market_active' => $avg_days_on_market_active,
            'avg_price_percentage' => $avg_price_percentage,
            'avg_price_per_sqft' => number_format($avg_price_per_sqft),
            'avg_price_all' => number_format($avg_price_all),
            'avg_price_per_sqft_all' => number_format($avg_price_per_sqft_all),
            'price_sold_counter' => $price_sold_counter,
            'avg_price_sold' => number_format($avg_price_sold),
            'avg_price_pending' => number_format($avg_price_pending),
            'avg_price_per_sqft_pending' => number_format($avg_price_per_sqft_pending),
            'price_active_counter' => $price_active_counter,
            'price_pending_counter' => $price_pending_counter,
            'avg_price_active' => number_format($avg_price_active),
            'avg_price_per_sqft_active' => number_format($avg_price_per_sqft_active),
            'mapImage' =>
            'https://maps.googleapis.com/maps/api/staticmap?' .
                '&markers=size:mid%7Ccolor:0xC6A467|' . urlencode($result) .
                '&format=jpg&size=1000x400&scale=2' .
                '&style=feature:poi|element:labels|visibility:off' .
                '&style=feature:administrative|element:labels|visibility:off' .
                '&style=feature:landscape|element:labels|visibility:off' .
                '&style=feature:transit|element:labels|visibility:off' .
                '&style=feature:water|element:labels|visibility:off' .
                '&style=saturation:-100&key=AIzaSyCbvYCR-b_MzBtqFgpY_OJU5oCxrQWwrSI'
        ];

        $chart->setConfig(json_encode($config));
        $imageUrl = $chart->getUrl();
        $chart->setConfig(json_encode($config_2));
        $imageUrl_2 = $chart->getUrl();
        $savePath = public_path('images');

        try {
            file_put_contents($savePath . '/cma/google_map.jpg', file_get_contents($data['mapImage']));
            file_put_contents($savePath . '/cma/chart.png', file_get_contents($imageUrl));
            file_put_contents($savePath . '/cma/chart_2.png', file_get_contents($imageUrl_2));
        } catch (\Throwable $th) {
        }

        $pdf = PDF::loadView('cma.pdf.luxe-cma', $data);
        $pdfContent = $pdf->output();
        $filename = 'cma/reports/' . Str::random(12) . '.pdf';
        Storage::disk('public')->put($filename, $pdfContent);
        $report->update(['path' => $filename]);
        return Storage::disk('public')->download($filename, 'CMA Report.pdf');
    }

    public function getListingData($id)
    {
        $cmaApiCredentails = [
            'apiLink' => env('CMA_API_URL', 'https://api.bridgedataoutput.com/api/v2/'),
            'serverToken' => env('CMA_SERVER_TOKEN'),
            'browserToken' => env('CMA_BROWSER_TOKEN'),
            'dataset' => env('CMA_DATASET'),
            'clientId' => env('CMA_CLIENT_ID'),
            'clientSecret' => env('CMA_CLIENT_SECRET'),
        ];

        $url = $cmaApiCredentails['apiLink'] . $cmaApiCredentails['dataset'] . '/listings/' . $id . '?access_token=' . $cmaApiCredentails['serverToken'];
        $res = Http::get($url);
        return $res->json()['bundle'];
    }
}
