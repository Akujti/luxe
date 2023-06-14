<?php

namespace App\Http\Controllers\CMA;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CMA\CmaReport;
use App\Models\CMA\CmaReportListing;

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

    public function create(Request $req) {
        $row = CmaReport::create([
            'user_id' => auth()->id(),
            'address' => $req->listing_id
        ]);

        $listings = explode(',', $req->listings_id);

        foreach($listings as $listing) {
            CmaReportListing::create(['cma_report_id' => $row->id, 'listing_id' => $listing]);
        }


        return true;
    }

    public function delete($id) {
        $row = CmaReport::find($id)->delete();

        return redirect()->back();
    }
}
