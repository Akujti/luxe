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

            'page_2_2_text_1' => $request['page_2_2_text_1'],
            'page_2_2_text_2' => $request['page_2_2_text_2'],
            'page_2_2_text_5' => $request['page_2_2_text_5'],
            'page_2_2_text_3' => $request['page_2_2_text_3'],
            'page_2_2_text_4' => $request['page_2_2_text_4'],

            'page_3_2_text_1' => $request['page_3_2_text_1'],
            'page_3_2_text_2' => $request['page_3_2_text_2'],
            'page_3_2_text_3' => $request['page_3_2_text_3'],
            'page_3_2_text_4' => $request['page_3_2_text_4'],
            'page_3_2_text_5' => $request['page_3_2_text_5'],
            'page_3_2_text_6' => $request['page_3_2_text_6'],
            'page_3_2_text_7' => $request['page_3_2_text_7'],
            'page_3_2_text_8' => $request['page_3_2_text_8'],
            'page_3_2_text_9' => $request['page_3_2_text_9'],

            'page_4_2_text_1' => $request['page_4_2_text_1'],
            'page_4_2_text_2' => $request['page_4_2_text_2'],
            'page_4_2_text_3' => $request['page_4_2_text_3'],
            'page_4_2_text_4' => $request['page_4_2_text_4'],
            'page_4_2_text_5' => $request['page_4_2_text_5'],
            'page_4_2_text_6' => $request['page_4_2_text_6'],
            'page_4_2_text_7' => $request['page_4_2_text_7'],
            'page_4_2_text_8' => $request['page_4_2_text_8'],
            'page_4_2_text_9' => $request['page_4_2_text_9'],
            'page_4_2_text_10' => $request['page_4_2_text_10'],
            'page_4_2_text_11' => $request['page_4_2_text_11'],
            'page_4_2_text_12' => $request['page_4_2_text_12'],
            'page_4_2_text_13' => $request['page_4_2_text_13'],

            'page_5_2_text_1' => $request['page_5_2_text_1'],
            'page_5_2_text_2' => $request['page_5_2_text_2'],
            'page_5_2_text_3' => $request['page_5_2_text_3'],
            'page_5_2_text_4' => $request['page_5_2_text_4'],

            'page_6_2_text_1' => $request['page_6_2_text_1'],
            'page_6_2_text_2' => $request['page_6_2_text_2'],
            'page_6_2_text_3' => $request['page_6_2_text_3'],
            'page_6_2_text_4' => $request['page_6_2_text_4'],
            'page_6_2_text_5' => $request['page_6_2_text_5'],

            'page_7_2_text_1' => $request['page_7_2_text_1'],
            'page_7_2_text_2' => $request['page_7_2_text_2'],
            'page_7_2_text_3' => $request['page_7_2_text_3'],
            'page_7_2_text_4' => $request['page_7_2_text_4'],
            'page_7_2_text_5' => $request['page_7_2_text_5'],
            'page_7_2_text_6' => $request['page_7_2_text_6'],
            'page_7_2_text_7' => $request['page_7_2_text_7'],
            'page_7_2_text_8' => $request['page_7_2_text_8'],
            'page_7_2_text_9' => $request['page_7_2_text_9'],

            'page_8_2_text_1' => $request['page_8_2_text_1'],
            'page_8_2_text_2' => $request['page_8_2_text_2'],
            'page_8_2_text_3' => $request['page_8_2_text_3'],
            'page_8_2_text_4' => $request['page_8_2_text_4'],
            'page_8_2_text_5' => $request['page_8_2_text_5'],
            'page_8_2_text_6' => $request['page_8_2_text_6'],

            'page_9_2_text_1' => $request['page_9_2_text_1'],
            'page_9_2_text_2' => $request['page_9_2_text_2'],
            'page_9_2_text_3' => $request['page_9_2_text_3'],
            'page_9_2_text_4' => $request['page_9_2_text_4'],
            'page_9_2_text_5' => $request['page_9_2_text_5'],

            'page_10_1_text_1' => $request['page_10_1_text_1'],
            'page_10_1_text_2' => $request['page_10_1_text_2'],

            'page_10_2_text_1' => $request['page_10_2_text_1'],
            'page_10_2_text_2' => $request['page_10_2_text_2'],
            'page_10_2_text_3' => $request['page_10_2_text_3'],
            'page_10_2_text_4' => $request['page_10_2_text_4'],
            'page_10_2_text_5' => $request['page_10_2_text_5'],

            'page_11_1_text_1' => $request['page_11_1_text_1'],
            'page_11_1_text_2' => $request['page_11_1_text_2'],
            'page_11_1_text_3' => $request['page_11_1_text_3'],

            'page_11_2_text_1' => $request['page_11_2_text_1'],
            'page_11_2_text_2' => $request['page_11_2_text_2'],
            'page_11_2_text_3' => $request['page_11_2_text_3'],
            'page_11_2_text_4' => $request['page_11_2_text_4'],
            'page_11_2_text_5' => $request['page_11_2_text_5'],
            'page_11_2_text_6' => $request['page_11_2_text_6'],

            'page_12_2_text_1' => $request['page_12_2_text_1'],
            'page_12_2_text_2' => $request['page_12_2_text_2'],
            'page_12_2_text_3' => $request['page_12_2_text_3'],
            'page_12_2_text_4' => $request['page_12_2_text_4'],
            'page_12_2_text_5' => $request['page_12_2_text_5'],
            'page_12_2_text_6' => $request['page_12_2_text_6'],
            'page_12_2_text_7' => $request['page_12_2_text_7'],
            'page_12_2_text_8' => $request['page_12_2_text_8'],
            'page_12_2_text_9' => $request['page_12_2_text_9'],
            'page_12_2_text_10' => $request['page_12_2_text_10'],
            'page_12_2_text_11' => $request['page_12_2_text_11'],
            'page_12_2_text_12' => $request['page_12_2_text_12'],
            'page_12_2_text_13' => $request['page_12_2_text_13'],

            'page_13_2_text_1' => $request['page_13_2_text_1'],
            'page_13_2_text_2' => $request['page_13_2_text_2'],
            'page_13_2_text_3' => $request['page_13_2_text_3'],
            'page_13_2_text_4' => $request['page_13_2_text_4'],
            'page_13_2_text_5' => $request['page_13_2_text_5'],
            'page_13_2_text_6' => $request['page_13_2_text_6'],

            'page_15_2_text_1' => $request['page_15_2_text_1'],
            'page_15_2_text_2' => $request['page_15_2_text_2'],
            'page_15_2_text_3' => $request['page_15_2_text_3'],
            'page_15_2_text_4' => $request['page_15_2_text_4'],
            'page_15_2_text_5' => $request['page_15_2_text_5'],

            'page_16_2_text_1' => $request['page_16_2_text_1'],
            'page_16_2_text_2' => $request['page_16_2_text_2'],
            'page_16_2_text_3' => $request['page_16_2_text_3'],
            'page_16_2_text_4' => $request['page_16_2_text_4'],
            'page_16_2_text_5' => $request['page_16_2_text_5'],
            'page_16_2_text_6' => $request['page_16_2_text_6'],
            'page_16_2_text_7' => $request['page_16_2_text_7'],
            'page_16_2_text_8' => $request['page_16_2_text_8'],
            'page_16_2_text_9' => $request['page_16_2_text_9'],
            'page_16_2_text_10' => $request['page_16_2_text_10'],
            'page_16_2_text_11' => $request['page_16_2_text_11'],
            'page_16_2_text_12' => $request['page_16_2_text_12'],
            'page_16_2_text_13' => $request['page_16_2_text_13'],
            'page_16_2_text_14' => $request['page_16_2_text_14'],
            'page_16_2_text_15' => $request['page_16_2_text_15'],
            'page_16_2_text_16' => $request['page_16_2_text_16'],
            'page_16_2_text_17' => $request['page_16_2_text_17'],
            'page_16_2_text_18' => $request['page_16_2_text_18'],
            'page_16_2_text_19' => $request['page_16_2_text_19'],
            'page_16_2_text_20' => $request['page_16_2_text_20'],

            'page_17_2_text_1' => $request['page_17_2_text_1'],
            'page_17_2_text_2' => $request['page_17_2_text_2'],
            'page_17_2_text_3' => $request['page_17_2_text_3'],
            'page_17_2_text_4' => $request['page_17_2_text_4'],
            'page_17_2_text_5' => $request['page_17_2_text_5'],
            'page_17_2_text_6' => $request['page_17_2_text_6'],
            'page_17_2_text_7' => $request['page_17_2_text_7'],
            'page_17_2_text_8' => $request['page_17_2_text_8'],
            'page_17_2_text_9' => $request['page_17_2_text_9'],
            'page_17_2_text_10' => $request['page_17_2_text_10'],
            'page_17_2_text_11' => $request['page_17_2_text_11'],
            'page_17_2_text_12' => $request['page_17_2_text_12'],
            'page_17_2_text_13' => $request['page_17_2_text_13'],
            'page_17_2_text_14' => $request['page_17_2_text_14'],
            'page_17_2_text_15' => $request['page_17_2_text_15'],
            'page_17_2_text_16' => $request['page_17_2_text_16'],
            'page_17_2_text_17' => $request['page_17_2_text_17'],
            'page_17_2_text_18' => $request['page_17_2_text_18'],
            'page_17_2_text_19' => $request['page_17_2_text_19'],
            'page_17_2_text_20' => $request['page_17_2_text_20'],
            'page_17_2_text_21' => $request['page_17_2_text_21'],
            'page_17_2_text_22' => $request['page_17_2_text_22'],
            'page_17_2_text_23' => $request['page_17_2_text_23'],
            'page_17_2_text_24' => $request['page_17_2_text_24'],

            'page_18_2_text_1' => $request['page_18_2_text_1'],
            'page_18_2_text_2' => $request['page_18_2_text_2'],
            'page_18_2_text_3' => $request['page_18_2_text_3'],
            'page_18_2_text_4' => $request['page_18_2_text_4'],
            'page_18_2_text_5' => $request['page_18_2_text_5'],
            'page_18_2_text_6' => $request['page_18_2_text_6'],

            'page_2_1_img_1' => $request['page_2_1_img_1'],
            'page_3_1_img_1' => $request['page_3_1_img_1'],
            'page_4_1_img_1' => $request['page_4_1_img_1'],
            'page_5_1_img_1' => $request['page_5_1_img_1'],
            'page_6_1_img_1' => $request['page_6_1_img_1'],
            'page_7_1_1_img_1' => $request['page_7_1_1_img_1'],
            'page_7_1_2_img_1' => $request['page_7_1_2_img_1'],
            'page_7_1_3_img_1' => $request['page_7_1_3_img_1'],
            'page_9_1_img_1' => $request['page_9_1_img_1'],
            'page_10_1_img_1' => $request['page_10_1_img_1'],
            'page_10_1_img_2' => $request['page_10_1_img_2'],
            'page_11_1_img_1' => $request['page_11_1_img_1'],
            'page_11_1_img_2' => $request['page_11_1_img_2'],
            'page_11_1_img_3' => $request['page_11_1_img_3'],
            'page_11_1_img_4' => $request['page_11_1_img_4'],
            'page_11_1_img_5' => $request['page_11_1_img_5'],
            'page_11_1_img_6' => $request['page_11_1_img_6'],
            'page_11_1_img_7' => $request['page_11_1_img_7'],
            'page_12_img_1' => $request['page_12_img_1'],
            'page_13_img_1' => $request['page_13_img_1'],
            'page_14_img_1' => $request['page_14_img_1'],
            'page_15_img_1' => $request['page_15_img_1'],
            'page_16_img_1' => $request['page_16_img_1'],
            'page_16_2_img_1' => $request['page_16_2_img_1'],
            'page_16_2_img_2' => $request['page_16_2_img_2'],
            'page_16_2_img_3' => $request['page_16_2_img_3'],
            'page_16_2_img_4' => $request['page_16_2_img_4'],
            'page_17_img_1' => $request['page_17_img_1'],
            'page_17_2_img_1' => $request['page_17_2_img_1'],
            'page_17_2_img_2' => $request['page_17_2_img_2'],
            'page_17_2_img_3' => $request['page_17_2_img_3'],
            'page_17_2_img_4' => $request['page_17_2_img_4'],
            'page_18_img_1' => $request['page_18_img_1'],
            'page_19_img_1' => $request['page_19_img_1'],
            'page_19_img_2' => $request['page_19_img_2'],
            'page_19_img_3' => $request['page_19_img_3'],
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
    
    public function fsbo_index(Request $request)
    {
        $data = [
            'page_5_text_1' => $request['page_5_text_1'],
            'page_5_text_2' => $request['page_5_text_2'],
            'page_5_text_3' => $request['page_5_text_3'],
            'page_5_img_1' => $request['page_5_img_1'],
            'page_6_text_1' => $request['page_6_text_1'],
            'page_6_text_2' => $request['page_6_text_2'],
            'page_6_text_3' => $request['page_6_text_3'],
            'page_6_text_4' => $request['page_6_text_4'],
            'page_6_text_5' => $request['page_6_text_5'],
            'page_6_text_6' => $request['page_6_text_6'],
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
            $pdf = PDF::loadView('fsbo-booklet', $data);
            return $pdf->download('FSBO Booklet.pdf');
        }
    }



    public function generate_data($data)
    {

        $pdf = PDF::loadView('testPDF', $data);

        return $pdf->download('Home Selling Guide.pdf');
    }

    public function uploadimage(Request $request)
    {
        $imageName = Str::uuid() . '.' . request()->file('file')->getClientOriginalExtension();
        $request->file('file')->move(public_path('uploadedimages'), $imageName);
        return $imageName;
    }
}
