<?php

namespace App\Http\Controllers;

use App\Exports\FormExport;
use App\Models\FormSubmit;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

class FormSubmitController extends Controller
{
    public function index()
    {
        $submissions = FormSubmit::latest()->get();
        return view('pages.form-submits.index', compact('submissions'));
    }

    public function show(FormSubmit $formSubmit)
    {
        $details = json_decode($formSubmit->details);
        return view('pages.template-submits.show', compact('details'));
    }

    public function update(Request $request, FormSubmit $formSubmit)
    {
        $formSubmit->status = 1;
        $formSubmit->save();
        return back()->with('message', 'Submission Updated');
    }

    public function getCsv()
    {
        return \Maatwebsite\Excel\Facades\Excel::download(new FormExport(\request()->title), 'Form Submissions.xlsx');
    }

    public function deleteSubmissions(Request $request)
    {
        FormSubmit::where('form_title', $request->title)->delete();
        return back()->with('message', 'Submissions Deleted');
    }

    //    public function getCsv()
    //    {
    //
    //        $fileName = 'export.csv';
    //        $submissions = FormSubmit::where('form_title', 'like', request()->title ?? '')->get();
    //
    //        $headers = array(
    //            "Content-type"        => "text/csv",
    //            "Content-Disposition" => "attachment; filename=$fileName",
    //            "Pragma"              => "no-cache",
    //            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
    //            "Expires"             => "0"
    //        );
    //
    //        $columns = array('Form Title', 'Agent Name', 'Agent Email', 'Approved', 'Fields');
    //
    //        $callback = function () use ($submissions, $columns) {
    //            $file = fopen('php://output', 'w');
    //            fputcsv($file, $columns, ';');
    //            foreach ($submissions as $submission) {
    //                $fields = [];
    //                $fields['form_title']  = $submission->form_title;
    //                $fields['agent_name']  = $submission->agent_name;
    //                $fields['agent_email'] = $submission->agent_email;
    //                $fields['status'] = $submission->status;
    //                foreach (json_decode(html_entity_decode($submission->details), true) as $key => $detail) {
    //                    $fields[$key] = ucwords(str_replace('_', ' ', $key)) . ' - ' . $detail;
    //                }
    //                fputcsv($file, $fields, ';');
    //            }
    //            fclose($file);
    //        };
    //        return response()->stream($callback, 200, $headers);
    //    }
}
