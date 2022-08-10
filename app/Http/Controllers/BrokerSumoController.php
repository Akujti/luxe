<?php

namespace App\Http\Controllers;

use App\Imports\AgentImport;
use App\Models\AgentTransaction;
use App\Models\BrokersumoAgent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use NumberFormatter;

class BrokerSumoController extends Controller
{
    public function index()
    {
        // $this->updateAgentsTransactions();
        // $results = DB::select(DB::raw("SELECT * FROM agents_transactions
        // INNER JOIN (SELECT agent_name, MAX(total_points) AS Maxtotal_points FROM agents_transactions GROUP BY agent_name) 
        // toptotal_points ON agents_transactions.agent_name = toptotal_points.agent_name
        // AND agents_transactions.total_points = toptotal_points.maxtotal_points
        // ORDER BY total_points DESC"));
        $results = BrokersumoAgent::orderBy(
            'sales_volumes',
            'DESC'
        )->paginate(50);
        return view('admin.broker-sumo.index', compact('results'));
    }

    public function store(Request $request)
    {
        $path1 = $request->file('sheet')->store('temp');
        $path = storage_path('app') . '/' . $path1;
        $result = Excel::toArray(AgentImport::class, $path);
        for ($i = 1; $i < count($result[0]) - 2; $i++) {
            BrokersumoAgent::updateOrCreate(
                ['agent_name' => $result[0][$i][0]],
                [
                    'agent_name' => $result[0][$i][0],
                    'sales_volumes' => $this->getAmount($result[0][$i][7]),
                ]
            );
        }
        return redirect()->route('admin.broker-sumo.index')->with('message', 'Success');
    }

    public function setYearlyTotalSales(Request $request)
    {
        $path1 = $request->file('sheet')->store('temp');
        $path = storage_path('app') . '/' . $path1;
        $result = Excel::toArray(AgentImport::class, $path);
        for ($i = 1; $i < count($result[0]) - 2; $i++) {
            BrokersumoAgent::updateOrCreate(
                ['agent_name' => $result[0][$i][0]],
                [
                    'agent_name' => $result[0][$i][0],
                    'deals' => $result[0][$i][6],
                    'yearly_sales_volumes' => $this->getAmount($result[0][$i][7]),
                ]
            );
        }
        return redirect()->route('admin.broker-sumo.index')->with('message', 'Success');
    }

    private function getAmount($money)
    {
        $cleanString = preg_replace('/([^0-9\.,])/i', '', $money);
        $onlyNumbersString = preg_replace('/([^0-9])/i', '', $money);

        $separatorsCountToBeErased = strlen($cleanString) - strlen($onlyNumbersString) - 1;

        $stringWithCommaOrDot = preg_replace('/([,\.])/', '', $cleanString, $separatorsCountToBeErased);
        $removedThousandSeparator = preg_replace('/(\.|,)(?=[0-9]{3,}$)/', '',  $stringWithCommaOrDot);

        return (float) str_replace(',', '.', $removedThousandSeparator);
    }

    public function leaderboard_sales()
    {
        $results = BrokersumoAgent::orderBy(
            'yearly_sales_volumes',
            'DESC'
        )->paginate(50);
        return view('pages.brokersumo.sales', compact('results'));
    }

    public function leaderboard_units()
    {
        $results = BrokersumoAgent::orderBy(
            'deals',
            'DESC'
        )->paginate(50);
        return view('pages.brokersumo.units', compact('results'));
    }

    public function updateAgentsTransactions()
    {
        try {
            $brokersumos = $this->zoho_get_brokersumo_data();
            return  $brokersumos;
            $startdate = date('Y-m-d', strtotime("1 Jan 2000"));
            $enddate = date('Y-m-d');
            if (!empty($brokersumos)) {
                AgentTransaction::truncate();
                foreach ($brokersumos as $brokersumo) {
                    if (!empty($brokersumo[13])) {
                        $newdate = $brokersumo[13];
                        $bkdate = str_replace(" 00:00:00", '', $newdate);
                        $bkdate = str_replace(",", '', $bkdate);
                        $bkdate = date('Y-m-d', strtotime($bkdate));
                        if (!empty($brokersumo[9]) && !empty($brokersumo[23]) && ($brokersumo[20] == "Listing" || $brokersumo[20] == "Selling" || $brokersumo[20] == "Dual" || $brokersumo[20] == "Rental" || $brokersumo[20] == "Referral") && ($brokersumo[23] == "Closed") && ($bkdate >= $startdate && $bkdate <= $enddate)) {
                            $listing_current = 1;
                            $current_gross = intval($brokersumo[4]);

                            $sales_price = intval($brokersumo[18]);
                            $main_db = $this->search_brokersumo_user_by_full_name($brokersumo[9], $current_gross, $brokersumo[23], $brokersumo[20], $sales_price);

                            if ($main_db == 'no') {
                                if ($brokersumo[20] == "Listing") {
                                    $new_points = 10;
                                } elseif ($brokersumo[20] == "Selling") {
                                    $new_points = 10;
                                } elseif ($brokersumo[20] == "Dual") {
                                    $sales_price = $sales_price * 2;
                                    $new_points = 20;
                                } elseif ($brokersumo[20] == "Referral") {
                                    $new_points = 0;
                                } else {
                                    $new_points = 5;
                                }
                                $data = array(
                                    'agent_name' => empty($brokersumo[9]) ? null : $brokersumo[9],
                                    'agent_gross' => $current_gross,
                                    'agent_net' => empty($brokersumo[5]) ? null : $brokersumo[5],
                                    'agent_office' => empty($brokersumo[1]) ? null : $brokersumo[1],
                                    'company_name' => empty($brokersumo[16]) ? null : $brokersumo[16],
                                    'sales_price' => empty($brokersumo[18]) ? null : $brokersumo[18],
                                    'transaction_id' => empty($brokersumo[8]) ? null : $brokersumo[8],
                                    'brokerage_gross_commission' => empty($brokersumo[12]) ? null : $brokersumo[12],
                                    'lead_source' => empty($brokersumo[2]) ? null : $brokersumo[2],
                                    'address' => empty($brokersumo[10]) ? null : $brokersumo[10],
                                    'transaction_type' => empty($brokersumo[20]) ? null : $brokersumo[20],
                                    'net_amount_due_to_brokerage' => empty($brokersumo[24]) ? null : $brokersumo[24],
                                    'sales_date' => empty($brokersumo[13]) ? null : $brokersumo[13],
                                    'listing_percent' => empty($brokersumo[0]) ? null : $brokersumo[0],
                                    'listing_flat_fee' => empty($brokersumo[17]) ? null : $brokersumo[17],
                                    'selling_percent' => empty($brokersumo[6]) ? null : $brokersumo[6],
                                    'selling_flat_fee' => empty($brokersumo[14]) ? null : $brokersumo[14],
                                    'mls' => empty($brokersumo[11]) ? null : $brokersumo[11],
                                    'transaction_status' => empty($brokersumo[23]) ? null : $brokersumo[23],
                                    'escrow_agent' => empty($brokersumo[7]) ? null : $brokersumo[7],
                                    'escrow' => empty($brokersumo[19]) ? null : $brokersumo[19],
                                    'commission_type' => empty($brokersumo[3]) ? null : $brokersumo[3],
                                    'closing_fees' => empty($brokersumo[22]) ? null : $brokersumo[22],
                                    'credits' => empty($brokersumo[21]) ? null : $brokersumo[21],
                                    'debits' => empty($brokersumo[15]) ? null : $brokersumo[15],
                                    'total_points' => $new_points,
                                    'new_point' => $new_points,
                                    'total_listing' => $listing_current,
                                    'total_amounts' => $sales_price,
                                );
                                AgentTransaction::create($data);
                            }
                        }
                    }
                }
            }
            Log::info('Brokersumo cron job success');
        } catch (\Throwable $th) {
            Log::error($th);
        }
    }

    function zoho_get_brokersumo_data()
    {
        $get_access = $this->generate_zoho_access_token();
        $access_token = $get_access['access_token'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://analyticsapi.zoho.com/api/marketing@luxeknows.com/Transactions Agents/Transactions Agents?ZOHO_ACTION=EXPORT&ZOHO_OUTPUT_FORMAT=JSON&ZOHO_ERROR_FORMAT=JSON&ZOHO_API_VERSION=1.0',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Zoho-oauthtoken ' . $access_token,
                'Cookie: 5d7cd6c1d0=aa2afc90d509cb4372ffedf72ae2a269; CSRF_TOKEN=00047462-4c0e-4ebe-8005-184fdaf700e9; JSESSIONID=C37CD6DCEB95CE8AE1249806B0ADFD30; _zcsr_tmp=00047462-4c0e-4ebe-8005-184fdaf700e9'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);

        return $response['response']['result']['rows'];
    }

    function generate_zoho_access_token()
    {
        $json_data_array = array(
            'refresh_token' => '1000.d88bdca3f16f5564b2922f2bd5b726f7.cc9cfc2ac629ee26b287bc2c03333f4e',
            'client_id' => '1000.XRFHC9HI4A537TV3L45D959HGE0VYK',
            'client_secret' => '64595f554db4dfee4b1cae77b57aeccdb32f51e8eb',
            'grant_type' => 'refresh_token'
        );
        $content = $json_data_array;
        $url     = 'https://accounts.zoho.com/oauth/v2/token';
        $status1 = $this->post_api_data($url, $content);
        $response      = json_decode($status1, true);

        return $response;
    }

    function post_api_data($url, $content)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $content);

        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

    function search_brokersumo_user_by_full_name($display_name, $current_gross, $status, $types, $total_amounts)
    {
        $user_data = AgentTransaction::where('agent_name',  $display_name)->first();

        if ($user_data) {
            $total_pointsa = $user_data['total_points'];
            $new_points = $user_data['new_point'];
            $total_listing = $user_data['total_listing'];
            $transaction_type = $user_data['transaction_type'];
            $data_arrays = $user_data['data_arrays'];
            $old_amounts = $user_data['total_amounts'];


            $data_arrays = json_decode($data_arrays, true);

            if (!empty($data_arrays)) {
                $data_arrays = array();
                $data_arrays[] = array(
                    'total_point' => $total_pointsa,
                    'current_type' => $types
                );
            } else {
                $data_arrays[] = array(
                    'total_point' => $total_pointsa,
                    'current_type' => $types
                );
            }
            if ($types == "Listing") {
                $total_points = $total_pointsa + 10;
                $new_point = 10;
            } elseif ($types == "Selling") {
                $total_points = $total_pointsa + 10;
                $new_point = 10;
            } elseif ($types == "Dual") {
                $total_points = $total_pointsa + 20;
                $new_points = 20;
            } elseif ($types == "Referral") {
                $total_points = $total_pointsa;
                $new_points = 0;
            } else {
                $total_points = $total_pointsa + 5;
                $new_points = 5;
            }

            // if ($types == "Referral") {
            //     $total_listing = $total_listing;
            // } else {
            $total_listing = $total_listing + 1;
            // }
            //        }
            $new_total = $total_amounts + intval($old_amounts);
            if ($types == 'Dual') {
                $total_listing = $total_listing;
                $new_total = 2 * $total_amounts + intval($old_amounts);
            }

            $data_arrays = json_encode($data_arrays);

            $user_data->update(['agent_gross' => $current_gross, 'total_points' => $total_points, 'new_point' => $new_points, 'total_listing' => $total_listing, 'data_arrays' => $data_arrays, 'total_amounts' => $new_total]);
            $user_data->save();
            return 'yes';
        } else {
            return 'no';
        }
    }
}
