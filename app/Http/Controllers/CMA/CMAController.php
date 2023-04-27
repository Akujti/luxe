<?php

namespace App\Http\Controllers\CMA;

use App\Http\Controllers\Controller;

class CMAController extends Controller
{
    public function index()
    {
        return view('cma.index');
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
}
