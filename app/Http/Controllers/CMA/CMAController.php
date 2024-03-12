<?php

namespace App\Http\Controllers\CMA;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CMA\CmaReport;
use App\Models\CMA\CmaReportListing;
use Illuminate\Support\Facades\Storage;
use PDF;

class CMAController extends Controller
{
    public function index()
    {
        $rows = CmaReport::where('user_id', auth()->id())->get();
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

    public function showReport()
    {
        return view('cma.show-report');
    }

    public function create(Request $req)
    {
        $row = CmaReport::create([
            'user_id' => auth()->id(),
            'address' => $req->listing_id
        ]);

        $listings = explode(',', $req->listings_id);

        foreach ($listings as $listing) {
            CmaReportListing::create(['cma_report_id' => $row->id, 'listing_id' => $listing]);
        }


        return true;
    }

    public function delete($id)
    {
        $row = CmaReport::find($id)->delete();

        return redirect()->back();
    }

    public function generatePdf()
    {
        $data = ['mapImage' =>
            'https://maps.googleapis.com/maps/api/staticmap?' .
            '&markers=size:mid%7Ccolor:0xC6A467%7CSan+Francisco,CA%7COakland,CA' .
            '&format=jpg&size=1000x400&scale=2' .
            '&style=feature:poi|element:labels|visibility:off' .
            '&style=feature:administrative|element:labels|visibility:off' .
            '&style=feature:landscape|element:labels|visibility:off' .
            '&style=feature:transit|element:labels|visibility:off' .
            '&style=feature:water|element:labels|visibility:off' .
            '&style=saturation:-100&key=AIzaSyCbvYCR-b_MzBtqFgpY_OJU5oCxrQWwrSI'];
        $pdf = PDF::loadView('cma.pdf.luxe-cma', $data);
        return $pdf->download('LUXE CMA Report.pdf');
    }
}
