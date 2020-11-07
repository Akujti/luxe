<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use File;
use Str;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [
            'page_1_1_text_1' => $request['page_1_1_text_1'],
            'page_1_1_text_2' => $request['page_1_1_text_2'],
            'page_1_1_text_3' => $request['page_1_1_text_3'],
            'page_1_1_text_4' => $request['page_1_1_text_4'],
            // 'page_2_1_text_1' => $request['page_2_1_text_1'],
            // 'page_2_1_text_2' => $request['page_2_1_text_2'],
            'page_2_2_text_1' => $request['page_2_2_text_1'],
            'page_2_2_text_2' => $request['page_2_2_text_2'],
            'page_2_2_text_5' => $request['page_2_2_text_5'],
            'page_2_2_text_3' => $request['page_2_2_text_3'],
            'page_2_2_text_4' => $request['page_2_2_text_4'],
            // 'page_3_1_text_1' => $request['page_3_1_text_1'],
            // 'page_3_1_text_2' => $request['page_3_1_text_2'],
            'page_3_2_text_1' => $request['page_3_2_text_1'],
            'page_3_2_text_2' => $request['page_3_2_text_2'],
            'page_3_2_text_3' => $request['page_3_2_text_3'],
            'page_3_2_text_4' => $request['page_3_2_text_4'],
            'page_3_2_text_5' => $request['page_3_2_text_5'],
            'page_3_2_text_6' => $request['page_3_2_text_6'],
            'page_3_2_text_7' => $request['page_3_2_text_7'],
            'page_3_2_text_8' => $request['page_3_2_text_8'],
            'page_3_2_text_9' => $request['page_3_2_text_9'],
            'page_4_1_img_1' => $request['page_4_1_img_1'],

            // 'page_4_1_text_1' => $request['page_4_1_text_1'],
            // 'page_4_1_text_2' => $request['page_4_1_text_2'],
            // 'page_4_1_text_3' => $request['page_4_1_text_3']
        ];
        if ($_POST['action'] == 'Save') {
            $data_json = json_encode($data);
            $file = time() . '_file.json';
            $destinationPath = public_path() . "/upload/json/";
            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            File::put($destinationPath . $file, $data_json);
            return response()->download($destinationPath . $file);
        } else {

            $pdf = PDF::loadView('testPDF', $data);
            return $pdf->download('Home Selling Guide.pdf');
        }
    }



    public function generate_data($data)
    {

        $pdf = PDF::loadView('testPDF', $data);

        return $pdf->download('Home Selling Guide.pdf');
    }

    public function uploadimage(Request $request){
        $imageName = Str::uuid() . '.' .request()->file('file')->getClientOriginalExtension();
        $request->file('file')->move(public_path('uploadedimages'), $imageName);
        return $imageName;
    }
}
