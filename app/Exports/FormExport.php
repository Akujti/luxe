<?php

namespace App\Exports;

use App\Models\FormSubmit;
use Illuminate\Database\Query\Builder;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;

class FormExport implements FromView
{
    private $title;

    public function __construct(String $title)
    {
        $this->title = $title;
    }

    public function view(): \Illuminate\Contracts\View\View
    {
        return view('excel.export', [
            'rows' => FormSubmit::where('form_title', 'like', $this->title)->get()
        ]);
    }
}
