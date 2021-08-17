<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use File;
use Str;
use Dompdf\Dompdf;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $headers = [
        'Content-Type' => 'application/jpg',
    ];

    public function image($file)
    {
        $pdf = new \Spatie\PdfToImage\Pdf($file);
        $filePath = 'imageConvert/' . Str::random(10) . time() . '.jpg';
        $pdf->saveImage($filePath);
        return $filePath;
    }

    // Door Hangers

    public function door_hanger_template_1(Request $request)
    {
        $data = [
            "text_1" => $request['text_1'],
            "text_2" => $request['text_2'],
            "text_3" => $request['text_3'],
            "text_4" => $request['text_4'],
            "text_5" => $request['text_5'],
            "text_6" => $request['text_6'],
            "text_7" => $request['text_7'],
            "text_8" => $request['text_8'],
            "text_9" => $request['text_9'],
            "text_10" => $request['text_10'],
            "text_11" => $request['text_11'],
            "text_12" => $request['text_12'],
            "text_13" => $request['text_13'],
            "text_14" => $request['text_14'],
            "text_15" => $request['text_15'],
            "text_16" => $request['text_16'],
            "text_17" => $request['text_17'],
            "text_18" => $request['text_18'],
            "text_19" => $request['text_19'],
            "text_20" => $request['text_20'],
            "text_21" => $request['text_21'],
            "text_22" => $request['text_22'],
            "text_23" => $request['text_23'],
            "text_24" => $request['text_24'],
            "text_25" => $request['text_25'],
            "text_26" => $request['text_26'],
            "text_27" => $request['text_27'],

            "img_1" => $request['img_1_input'],
            "img_2" => $request['img_2_input'],
            "img_3" => $request['img_3_input'],
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
            $pdf = PDF::loadView('door-hangers.template1.pdf', $data);
            return $pdf->download('Door Hanger Template 1.pdf');
        }
    }

    //Flyers

    public function flyer_template_4(Request $request)
    {
        $data = [
            "text_1" => $request['text_1'],
            "text_2" => $request['text_2'],
            "text_3" => $request['text_3'],
            "text_4" => $request['text_4'],
            "text_5" => $request['text_5'],
            "text_6" => $request['text_6'],
            "text_7" => $request['text_7'],
            "text_8" => $request['text_8'],
            "text_9" => $request['text_9'],
            "text_10" => $request['text_10'],
            "text_11" => $request['text_11'],

            "img_1" => $request['img_1_input'],
            "img_2" => $request['img_2_input'],
            "img_3" => $request['img_3_input'],
            "img_5" => $request['img_5_input'],
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
            $pdf = PDF::loadView('flyers.template4.pdf', $data);
            return $pdf->download('Flyer Template 4.pdf');
        }
    }

    public function flyer_template_3(Request $request)
    {
        $data = [
            "text_1" => $request['text_1'],
            "text_2" => $request['text_2'],
            "text_3" => $request['text_3'],
            "text_4" => $request['text_4'],
            "text_5" => $request['text_5'],
            "text_6" => $request['text_6'],
            "text_7" => $request['text_7'],
            "text_8" => $request['text_8'],
            "text_9" => $request['text_9'],
            "text_10" => $request['text_10'],

            "img_1" => $request['img_1_input'],
            "img_2" => $request['img_2_input'],
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
            $pdf = PDF::loadView('flyers.template3.pdf', $data);
            return $pdf->download('Flyer Template 3.pdf');
        }
    }

    public function flyer_template_2(Request $request)
    {
        $data = [
            'text_1' => $request['text_1'],
            'text_2' => $request['text_2'],
            'text_3' => $request['text_3'],
            'text_4' => $request['text_4'],
            'text_5' => $request['text_5'],
            'text_6' => $request['text_6'],
            'text_7' => $request['text_7'],
            'text_8' => $request['text_8'],
            'text_9' => $request['text_9'],
            'text_10' => $request['text_10'],
            'text_11' => $request['text_11'],
            'text_12' => $request['text_12'],
            'text_13' => $request['text_13'],
            'text_14' => $request['text_14'],
            'text_15' => $request['text_15'],
            'text_16' => $request['text_16'],
            'text_17' => $request['text_17'],
            'text_18' => $request['text_18'],
            'text_19' => $request['text_19'],

            'img_1_input' => $request['img_1_input'],
            'img_2_input' => $request['img_2_input'],
            'img_3_input' => $request['img_3_input'],
            'img_4_input' => $request['img_4_input'],
            'img_5_input' => $request['img_5_input'],
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
            $pdf = PDF::loadView('flyers.template2.pdf', $data);
            return $pdf->download('Flyer Template 2.pdf');
        }
    }

    public function flyer_template_1(Request $request)
    {
        $data = [
            'text_1' => $request['text_1'],
            'text_2' => $request['text_2'],
            'text_3' => $request['text_3'],
            'text_4' => $request['text_4'],
            'text_5' => $request['text_5'],
            'text_6' => $request['text_6'],
            'text_7' => $request['text_7'],
            'text_8' => $request['text_8'],
            'text_9' => $request['text_9'],
            'text_10' => $request['text_10'],
            'text_11' => $request['text_11'],
            'text_12' => $request['text_12'],
            'text_13' => $request['text_13'],
            'text_14' => $request['text_14'],
            'text_15' => $request['text_15'],
            'text_16' => $request['text_16'],
            'text_17' => $request['text_17'],
            'text_18' => $request['text_18'],
            'text_19' => $request['text_19'],

            'img_1_input' => $request['img_1_input'],
            'img_2_input' => $request['img_2_input'],
            'img_3_input' => $request['img_3_input'],
            'img_4_input' => $request['img_4_input'],
            'img_5_input' => $request['img_5_input'],
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
            $pdf = PDF::loadView('flyers.template1.pdf', $data);
            return $pdf->download('Flyer Template 1.pdf');
        }
    }

    // Emails //

    public function email_template_2(Request $request)
    {
        $data = [
            'text_1' => $request['text_1'],
            'text_2' => $request['text_2'],
            'text_3' => $request['text_3'],
            'text_4' => $request['text_4'],
            'text_5' => $request['text_5'],
            'text_6' => $request['text_6'],
            'text_7' => $request['text_7'],
            'text_8' => $request['text_8'],
            'text_9' => $request['text_9'],
            'text_10' => $request['text_10'],
            'text_11' => $request['text_11'],
            'text_12' => $request['text_12'],
            'text_13' => $request['text_13'],
            'text_14' => $request['text_14'],
            'text_15' => $request['text_15'],
            'text_16' => $request['text_16'],
            'text_17' => $request['text_17'],
            'text_18' => $request['text_18'],
            'text_19' => $request['text_19'],
            'text_20' => $request['text_20'],
            'text_21' => $request['text_21'],
            'text_22' => $request['text_22'],
            'text_23' => $request['text_23'],

            'img_1_input' => $request['img_1_input'],
            'img_2_input' => $request['img_2_input'],
            'img_3_input' => $request['img_3_input'],
            'img_4_input' => $request['img_4_input'],
            'img_5_input' => $request['img_5_input'],
            'img_6_input' => $request['img_6_input'],
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
            $pdf = PDF::loadView('emails.template2.pdf', $data);
            return $pdf->download('Email Blast Template 2.pdf');
        }
    }

    public function email_template_1(Request $request)
    {
        $data = [
            'text_1' => $request['text_1'],
            'text_2' => $request['text_2'],
            'text_3' => $request['text_3'],
            'text_4' => $request['text_4'],
            'text_5' => $request['text_5'],
            'text_6' => $request['text_6'],
            'text_7' => $request['text_7'],
            'text_8' => $request['text_8'],
            'text_9' => $request['text_9'],
            'text_10' => $request['text_10'],
            'text_11' => $request['text_11'],
            'text_12' => $request['text_12'],
            'text_13' => $request['text_13'],
            'text_14' => $request['text_14'],
            'text_15' => $request['text_15'],
            'text_16' => $request['text_16'],
            'text_17' => $request['text_17'],
            'text_18' => $request['text_18'],
            'text_19' => $request['text_19'],
            'text_20' => $request['text_20'],
            'text_21' => $request['text_21'],
            'text_22' => $request['text_22'],
            'text_23' => $request['text_23'],
            'text_24' => $request['text_24'],
            'text_25' => $request['text_25'],
            'text_26' => $request['text_26'],
            'text_27' => $request['text_27'],
            'text_28' => $request['text_28'],

            'img_1_input' => $request['img_1_input'],
            'img_2_input' => $request['img_2_input'],
            'img_3_input' => $request['img_3_input'],
            'img_4_input' => $request['img_4_input'],
            'img_5_input' => $request['img_5_input'],
            'img_6_input' => $request['img_6_input'],
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
            $pdf = PDF::loadView('emails.template1.pdf', $data);
            return $pdf->download('Email Blast Template 1.pdf');
        }
    }

    //

    public function theme_just_listed_story(Request $request)
    {
        $data = [
            'page_1_text_11' => $request['page_1_text_11'],
            'page_1_text_12' => $request['page_1_text_12'],
            'page_1_text_13' => $request['page_1_text_13'],
            'page_1_text_1' => $request['page_1_text_1'],
            'page_1_text_2' => $request['page_1_text_2'],
            'page_1_text_3' => $request['page_1_text_3'],
            'page_1_text_4' => $request['page_1_text_4'],
            'page_1_text_5' => $request['page_1_text_5'],
            'page_1_text_6' => $request['page_1_text_6'],

            'img_1_input' => $request['img_1_input'],
            'img_2_input' => $request['img_2_input'],
            'img_3_input' => $request['img_3_input'],
            'img_4_input' => $request['img_4_input'],
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
            $pdf = PDF::loadView('themes.just-listed-story.just-listed-story', $data);
            $pdf->setPaper(0, 0, 4000, 4000);
            $fileName = 'pdfConvert/' . Str::random(10) . time() . '.pdf';
            $pdf->save($fileName);
            return response()->download($this->image($fileName), 'Just Listed Story.jpg', $this->headers);
        }
    }

    public function theme_coming_soon(Request $request)
    {
        $data = [
            'page_1_text_1' => $request['page_1_text_1'],
            'page_1_text_2' => $request['page_1_text_2'],
            'page_1_text_3' => $request['page_1_text_3'],
            'page_1_text_4' => $request['page_1_text_4'],
            'page_1_text_5' => $request['page_1_text_5'],
            'page_1_text_6' => $request['page_1_text_6'],

            'page_1_text_1_select' => $request['page_1_text_1_select'],
            'page_1_text_2_select' => $request['page_1_text_2_select'],
            'page_1_text_3_select' => $request['page_1_text_3_select'],
            'page_1_text_6_select' => $request['page_1_text_6_select'],
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
            $pdf = PDF::loadView('themes.coming-soon.coming-soon', $data);
            $pdf->setPaper(0, 0, 4000, 4000);
            $fileName = 'pdfConvert/' . Str::random(10) . time() . '.pdf';
            $pdf->save($fileName);
            return response()->download($this->image($fileName), 'Coming Soon.jpg', $this->headers);
        }
    }

    public function theme_just_closed_story(Request $request)
    {
        $data = [
            'page_1_text_11' => $request['page_1_text_11'],
            'page_1_text_12' => $request['page_1_text_12'],
            'page_1_text_13' => $request['page_1_text_13'],
            'page_1_text_1' => $request['page_1_text_1'],
            'page_1_text_2' => $request['page_1_text_2'],
            'page_1_text_3' => $request['page_1_text_3'],
            'page_1_text_4' => $request['page_1_text_4'],
            'page_1_text_5' => $request['page_1_text_5'],
            'page_1_text_6' => $request['page_1_text_6'],

            'page_1_text_11_select' => $request['page_1_text_11_select'],
            'page_1_text_12_select' => $request['page_1_text_12_select'],


            'img_1_input' => $request['img_1_input'],
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
            $pdf = PDF::loadView('themes.just-closed-story.just-closed-story', $data);
            $pdf->setPaper(0, 0, 4000, 4000);
            $fileName = 'pdfConvert/' . Str::random(10) . time() . '.pdf';
            $pdf->save($fileName);
            return response()->download($this->image($fileName), 'Just Closed Story.jpg', $this->headers);
        }
    }

    public function theme_tbt_story(Request $request)
    {
        $data = [
            'page_1_text_1' => $request['page_1_text_1'],
            'page_1_text_2' => $request['page_1_text_2'],
            'page_1_text_3' => $request['page_1_text_3'],
            'page_1_text_4' => $request['page_1_text_4'],
            'page_1_text_5' => $request['page_1_text_5'],

            'img_1_input' => $request['img_2_input'],
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
            $pdf = PDF::loadView('themes.tbt-story.tbt-story', $data);
            $pdf->setPaper(0, 0, 4000, 4000);
            $fileName = 'pdfConvert/' . Str::random(10) . time() . '.pdf';
            $pdf->save($fileName);
            return response()->download($this->image($fileName), 'Throwback Thursday Story.jpg', $this->headers);
        }
    }

    public function theme_just_joined_story(Request $request)
    {
        $data = [
            'page_1_text_11' => $request['page_1_text_11'],
            'page_1_text_12' => $request['page_1_text_12'],
            'page_1_text_1' => $request['page_1_text_1'],
            'page_1_text_2' => $request['page_1_text_2'],
            'page_1_text_3' => $request['page_1_text_3'],
            'page_1_text_4' => $request['page_1_text_4'],
            'page_1_text_5' => $request['page_1_text_5'],
            'page_1_text_6' => $request['page_1_text_6'],

            'page_1_text_1_select' => $request['page_1_text_1_select'],
            'page_1_text_2_select' => $request['page_1_text_2_select'],
            'page_1_text_11_select' => $request['page_1_text_11_select'],
            'page_1_text_12_select' => $request['page_1_text_12_select'],

            'img_1_input' => $request['img_1_input'],
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
            $pdf = PDF::loadView('themes.joined-luxe-story.joined-luxe-story', $data);
            $pdf->setPaper(0, 0, 4000, 4000);
            $fileName = 'pdfConvert/' . Str::random(10) . time() . '.pdf';
            $pdf->save($fileName);
            return response()->download($this->image($fileName), 'Joined Luxe Story.jpg', $this->headers);
        }
    }

    public function theme_just_joined(Request $request)
    {
        $data = [
            'page_1_text_11' => $request['page_1_text_11'],
            'page_1_text_12' => $request['page_1_text_12'],
            'page_1_text_1' => $request['page_1_text_1'],
            'page_1_text_2' => $request['page_1_text_2'],
            'page_1_text_3' => $request['page_1_text_3'],
            'page_1_text_4' => $request['page_1_text_4'],
            'page_1_text_5' => $request['page_1_text_5'],
            'page_1_text_6' => $request['page_1_text_6'],

            'page_1_text_1_select' => $request['page_1_text_1_select'],
            'page_1_text_2_select' => $request['page_1_text_2_select'],
            'page_1_text_11_select' => $request['page_1_text_11_select'],
            'page_1_text_12_select' => $request['page_1_text_12_select'],

            'img_1_input' => $request['img_1_input'],
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
            $pdf = PDF::loadView('themes.joined-luxe.joined-luxe', $data);
            $pdf->setPaper(0, 0, 4000, 4000);
            $fileName = 'pdfConvert/' . Str::random(10) . time() . '.pdf';
            $pdf->save($fileName);
            return response()->download($this->image($fileName), 'Joined Luxe.jpg', $this->headers);
        }
    }

    public function theme_just_closed(Request $request)
    {
        $data = [
            'page_1_text_11' => $request['page_1_text_11'],
            'page_1_text_12' => $request['page_1_text_12'],
            'page_1_text_13' => $request['page_1_text_13'],
            'page_1_text_1' => $request['page_1_text_1'],
            'page_1_text_2' => $request['page_1_text_2'],
            'page_1_text_3' => $request['page_1_text_3'],
            'page_1_text_4' => $request['page_1_text_4'],
            'page_1_text_5' => $request['page_1_text_5'],
            'page_1_text_6' => $request['page_1_text_6'],

            'page_1_text_11_select' => $request['page_1_text_11_select'],
            'page_1_text_12_select' => $request['page_1_text_12_select'],

            'img_1_input' => $request['img_1_input'],
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
            $pdf = PDF::loadView('themes.just-closed.just-closed', $data);
            $pdf->setPaper(0, 0, 4000, 4000);
            $fileName = 'pdfConvert/' . Str::random(10) . time() . '.pdf';
            $pdf->save($fileName);
            return response()->download($this->image($fileName), 'Just Closed.jpg', $this->headers);
        }
    }

    public function theme_just_listed(Request $request)
    {
        $data = [
            'page_1_text_11' => $request['page_1_text_11'],
            'page_1_text_12' => $request['page_1_text_12'],
            'page_1_text_13' => $request['page_1_text_13'],
            'page_1_text_1' => $request['page_1_text_1'],
            'page_1_text_2' => $request['page_1_text_2'],
            'page_1_text_3' => $request['page_1_text_3'],
            'page_1_text_4' => $request['page_1_text_4'],
            'page_1_text_5' => $request['page_1_text_5'],
            'page_1_text_6' => $request['page_1_text_6'],

            'img_1_input' => $request['img_1_input'],
            'img_2_input' => $request['img_2_input'],
            'img_3_input' => $request['img_3_input'],
            'img_4_input' => $request['img_4_input'],
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
            $pdf = PDF::loadView('themes.just-listed.just-listed', $data);
            $pdf->setPaper(0, 0, 4000, 4000);
            $fileName = 'pdfConvert/' . Str::random(10) . time() . '.pdf';
            $pdf->save($fileName);
            return response()->download($this->image($fileName), 'Just Listed.jpg', $this->headers);
        }
    }

    public function theme_tbt(Request $request)
    {
        $data = [
            'page_1_text_1' => $request['page_1_text_1'],
            'page_1_text_2' => $request['page_1_text_2'],
            'page_1_text_3' => $request['page_1_text_3'],
            'page_1_text_4' => $request['page_1_text_4'],
            'page_1_text_5' => $request['page_1_text_5'],

            'img_1_input' => $request['img_2_input'],
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
            $pdf = PDF::loadView('themes.tbt.tbt', $data);
            $pdf->setPaper(0, 0, 4000, 4000);
            $fileName = 'pdfConvert/' . Str::random(10) . time() . '.pdf';
            $pdf->save($fileName);
            return response()->download($this->image($fileName), 'Throwback Thursday.jpg', $this->headers);
        }
    }


    ////

    public function theme_just_sold_story(Request $request)
    {
        $data = [
            'page_1_text_11' => $request['page_1_text_11'],
            'page_1_text_12' => $request['page_1_text_12'],
            'page_1_text_13' => $request['page_1_text_13'],
            'page_1_text_1' => $request['page_1_text_1'],
            'page_1_text_2' => $request['page_1_text_2'],
            'page_1_text_3' => $request['page_1_text_3'],
            'page_1_text_4' => $request['page_1_text_4'],
            'page_1_text_5' => $request['page_1_text_5'],

            'page_1_text_11_select' => $request['page_1_text_11_select'],
            'page_1_text_12_select' => $request['page_1_text_12_select'],

            'img_1_input' => $request['img_3_input'],
            'img_2_input' => $request['img_2_input'],
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
            $pdf = PDF::loadView('themes.just-sold-story.just-sold-story', $data);
            $pdf->setPaper(0, 0, 4000, 4000);
            $fileName = 'pdfConvert/' . Str::random(10) . time() . '.pdf';
            $pdf->save($fileName);
            return response()->download($this->image($fileName), 'Just Sold Story.jpg', $this->headers);
        }
    }

    public function theme_just_sold(Request $request)
    {
        $data = [
            'page_1_text_11' => $request['page_1_text_11'],
            'page_1_text_12' => $request['page_1_text_12'],
            'page_1_text_1' => $request['page_1_text_1'],
            'page_1_text_2' => $request['page_1_text_2'],
            'page_1_text_3' => $request['page_1_text_3'],
            'page_1_text_4' => $request['page_1_text_4'],
            'page_1_text_5' => $request['page_1_text_5'],
            'page_1_text_13' => $request['page_1_text_13'],

            'page_1_text_11_select' => $request['page_1_text_11_select'],
            'page_1_text_12_select' => $request['page_1_text_12_select'],

            'img_1_input' => $request['img_1_input'],
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
            $pdf = PDF::loadView('themes.just-sold.just-sold', $data);
            $pdf->setPaper(0, 0, 4000, 4000);
            $fileName = 'pdfConvert/' . Str::random(10) . time() . '.pdf';
            $pdf->save($fileName);
            return response()->download($this->image($fileName), 'Just Sold.jpg', $this->headers);
        }
    }

    public function theme_for_sale(Request $request)
    {
        $data = [
            'page_1_text_11' => $request['page_1_text_11'],
            'page_1_text_12' => $request['page_1_text_12'],
            'page_1_text_13' => $request['page_1_text_13'],
            'page_1_text_1' => $request['page_1_text_1'],
            'page_1_text_2' => $request['page_1_text_2'],
            'page_1_text_3' => $request['page_1_text_3'],
            'page_1_text_4' => $request['page_1_text_4'],
            'page_1_text_5' => $request['page_1_text_5'],
            'page_1_text_6' => $request['page_1_text_6'],

            'img_1_input' => $request['img_1_input'],
            'img_2_input' => $request['img_2_input'],
            'img_3_input' => $request['img_3_input'],
            'img_4_input' => $request['img_4_input'],
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

            $pdf = PDF::loadView('themes.for-sale.for-sale', $data);
            $pdf->setPaper(0, 0, 4000, 4000);
            $fileName = 'pdfConvert/' . Str::random(10) . time() . '.pdf';
            $pdf->save($fileName);
            return response()->download($this->image($fileName), 'For Sale.jpg', $this->headers);
        }
    }

    public function theme_for_sale_story(Request $request)
    {
        $data = [
            'page_1_text_11' => $request['page_1_text_11'],
            'page_1_text_12' => $request['page_1_text_12'],
            'page_1_text_13' => $request['page_1_text_13'],
            'page_1_text_1' => $request['page_1_text_1'],
            'page_1_text_2' => $request['page_1_text_2'],
            'page_1_text_3' => $request['page_1_text_3'],
            'page_1_text_4' => $request['page_1_text_4'],
            'page_1_text_5' => $request['page_1_text_5'],
            'page_1_text_6' => $request['page_1_text_6'],

            'img_1_input' => $request['img_1_input'],
            'img_2_input' => $request['img_2_input'],
            'img_3_input' => $request['img_3_input'],
            'img_4_input' => $request['img_4_input'],
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

            $pdf = PDF::loadView('themes.for-sale-story.for-sale-story', $data);
            $pdf->setPaper(0, 0, 4000, 8000);
            $fileName = 'pdfConvert/' . Str::random(10) . time() . '.pdf';
            $pdf->save($fileName);
            return response()->download($this->image($fileName), 'For Sale Story.jpg', $this->headers);
        }
    }

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

            'page_6_2_text_1_1' => $request['page_6_2_text_1_1'],
            'page_6_2_text_1_2' => $request['page_6_2_text_1_2'],
            'page_6_2_text_1_3' => $request['page_6_2_text_1_3'],
            'page_6_2_text_1_4' => $request['page_6_2_text_1_4'],
            'page_6_2_text_1_5' => $request['page_6_2_text_1_5'],

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
            'page_9_img_1' => $request['page_9_img_1'],
            'page_9_img_2' => $request['page_9_img_2'],
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

    public function home_didnt_sell(Request $request)
    {
        $data = [];

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
            $pdf = PDF::loadView('home-didnt-sell', $data);
            return $pdf->download('Home Didn\'t Sell.pdf');
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

    public function home_buying(Request $request)
    {
        $data = [
            //TEXT
            'page_1_text_1' => $request['page_1_text_1'],
            'page_1_text_2' => $request['page_1_text_2'],
            'page_1_text_3' => $request['page_1_text_3'],
            'page_1_text_4' => $request['page_1_text_4'],

            'page_3_text_1' => $request['page_3_text_1'],
            'page_3_text_2' => $request['page_3_text_2'],
            'page_3_text_3' => $request['page_3_text_3'],
            'page_3_text_4' => $request['page_3_text_4'],
            'page_3_text_5' => $request['page_3_text_5'],

            'page_4_text_1' => $request['page_4_text_1'],
            'page_4_text_2' => $request['page_4_text_2'],
            'page_4_text_3' => $request['page_4_text_3'],
            'page_4_text_4' => $request['page_4_text_4'],
            'page_4_text_5' => $request['page_4_text_5'],
            'page_4_text_6' => $request['page_4_text_6'],

            'page_9_text_1' => $request['page_9_text_1'],
            'page_9_text_2' => $request['page_9_text_2'],

            'page_11_text_1' => $request['page_11_text_1'],
            'page_11_text_2' => $request['page_11_text_2'],
            'page_11_text_3' => $request['page_11_text_3'],
            'page_11_text_4' => $request['page_11_text_4'],
            'page_11_text_5' => $request['page_11_text_5'],
            'page_11_text_6' => $request['page_11_text_6'],
            'page_11_text_7' => $request['page_11_text_7'],
            'page_11_text_8' => $request['page_11_text_8'],
            'page_11_text_9' => $request['page_11_text_9'],
            'page_11_text_10' => $request['page_11_text_10'],
            'page_11_text_11' => $request['page_11_text_11'],
            'page_11_text_12' => $request['page_11_text_12'],
            'page_11_text_13' => $request['page_11_text_13'],
            'page_11_text_14' => $request['page_11_text_14'],

            'page_13_text_1' => $request['page_13_text_1'],
            'page_13_text_2' => $request['page_13_text_2'],
            'page_13_text_3' => $request['page_13_text_3'],
            'page_13_text_4' => $request['page_13_text_4'],
            'page_13_text_5' => $request['page_13_text_5'],
            'page_13_text_6' => $request['page_13_text_6'],
            'page_13_text_7' => $request['page_13_text_7'],
            'page_13_text_8' => $request['page_13_text_8'],
            'page_13_text_9' => $request['page_13_text_9'],
            'page_13_text_10' => $request['page_13_text_10'],
            'page_13_text_11' => $request['page_13_text_11'],
            'page_13_text_12' => $request['page_13_text_12'],
            'page_13_text_12' => $request['page_13_text_12'],
            'page_13_text_13' => $request['page_13_text_13'],

            'page_15_text_1' => $request['page_15_text_1'],
            'page_15_text_2' => $request['page_15_text_2'],
            'page_15_text_3' => $request['page_15_text_3'],
            'page_15_text_4' => $request['page_15_text_4'],
            'page_15_text_6' => $request['page_15_text_6'],

            'page_17_text_1' => $request['page_17_text_1'],
            'page_17_text_2' => $request['page_17_text_2'],
            'page_17_text_3' => $request['page_17_text_3'],
            'page_17_text_4' => $request['page_17_text_4'],
            'page_17_text_5' => $request['page_17_text_5'],
            'page_17_text_6' => $request['page_17_text_6'],

            'page_19_text_1' => $request['page_19_text_1'],
            'page_19_text_2' => $request['page_19_text_2'],
            'page_19_text_3' => $request['page_19_text_3'],
            'page_19_text_4' => $request['page_19_text_4'],
            'page_19_text_5' => $request['page_19_text_5'],
            'page_19_text_6' => $request['page_19_text_6'],
            'page_19_text_7' => $request['page_19_text_7'],
            'page_19_text_8' => $request['page_19_text_8'],
            'page_19_text_9' => $request['page_19_text_9'],
            'page_19_text_10' => $request['page_19_text_10'],
            'page_19_text_11' => $request['page_19_text_11'],
            'page_19_text_12' => $request['page_19_text_12'],
            'page_19_text_13' => $request['page_19_text_13'],
            'page_19_text_14' => $request['page_19_text_14'],
            'page_19_text_15' => $request['page_19_text_15'],
            'page_19_text_16' => $request['page_19_text_16'],
            'page_19_text_17' => $request['page_19_text_17'],

            'page_21_text_1' => $request['page_21_text_1'],
            'page_21_text_2' => $request['page_21_text_2'],
            'page_21_text_3' => $request['page_21_text_3'],
            'page_21_text_4' => $request['page_21_text_4'],
            'page_21_text_5' => $request['page_21_text_5'],

            'page_22_text_1' => $request['page_22_text_1'],
            'page_22_text_2' => $request['page_22_text_2'],

            'page_23_text_1' => $request['page_23_text_1'],
            'page_23_text_2' => $request['page_23_text_2'],
            'page_23_text_3' => $request['page_23_text_3'],

            'page_25_text_1' => $request['page_25_text_1'],
            'page_25_text_2' => $request['page_25_text_2'],
            'page_25_text_3' => $request['page_25_text_3'],

            'page_27_text_1' => $request['page_27_text_1'],
            'page_27_text_2' => $request['page_27_text_2'],
            'page_27_text_3' => $request['page_27_text_3'],
            'page_27_text_4' => $request['page_27_text_4'],
            'page_27_text_5' => $request['page_27_text_5'],
            'page_27_text_6' => $request['page_27_text_6'],
            'page_27_text_7' => $request['page_27_text_7'],
            'page_27_text_8' => $request['page_27_text_8'],
            'page_27_text_9' => $request['page_27_text_9'],
            'page_27_text_10' => $request['page_27_text_10'],
            'page_27_text_11' => $request['page_27_text_11'],
            'page_27_text_12' => $request['page_27_text_12'],
            'page_27_text_13' => $request['page_27_text_13'],
            'page_27_text_14' => $request['page_27_text_14'],
            'page_27_text_15' => $request['page_27_text_15'],
            'page_27_text_16' => $request['page_27_text_16'],
            'page_27_text_17' => $request['page_27_text_17'],
            'page_27_text_18' => $request['page_27_text_18'],
            'page_27_text_19' => $request['page_27_text_19'],
            'page_27_text_20' => $request['page_27_text_20'],

            'page_29_text_1' => $request['page_29_text_1'],
            'page_29_text_2' => $request['page_29_text_2'],
            'page_29_text_3' => $request['page_29_text_3'],
            'page_29_text_4' => $request['page_29_text_4'],
            'page_29_text_5' => $request['page_29_text_5'],
            'page_29_text_6' => $request['page_29_text_6'],
            'page_29_text_7' => $request['page_29_text_7'],
            'page_29_text_8' => $request['page_29_text_8'],
            'page_29_text_9' => $request['page_29_text_9'],
            'page_29_text_10' => $request['page_29_text_10'],
            'page_29_text_11' => $request['page_29_text_11'],
            'page_29_text_12' => $request['page_29_text_12'],
            'page_29_text_13' => $request['page_29_text_13'],
            'page_29_text_14' => $request['page_29_text_14'],
            'page_29_text_15' => $request['page_29_text_15'],
            'page_29_text_16' => $request['page_29_text_16'],
            'page_29_text_17' => $request['page_29_text_17'],
            'page_29_text_18' => $request['page_29_text_18'],
            'page_29_text_19' => $request['page_29_text_19'],
            'page_29_text_20' => $request['page_29_text_20'],

            'page_31_text_1' => $request['page_31_text_1'],
            'page_31_text_2' => $request['page_31_text_2'],
            'page_31_text_3' => $request['page_31_text_3'],
            'page_31_text_4' => $request['page_31_text_4'],
            'page_31_text_5' => $request['page_31_text_5'],
            'page_31_text_6' => $request['page_31_text_6'],

            //IMAGES
            'page_2_img_1' => $request['page_2_img_1'],
            'page_5_img_1' => $request['page_5_img_1'],
            'page_6_img_1' => $request['page_6_img_1'],
            'page_7_img_1' => $request['page_7_img_1'],
            'page_10_img_1' => $request['page_10_img_1'],
            'page_12_img_1' => $request['page_12_img_1'],
            'page_12_img_2' => $request['page_12_img_2'],
            'page_14_img_1' => $request['page_14_img_1'],
            'page_16_img_1' => $request['page_16_img_1'],
            'page_18_img_1' => $request['page_18_img_1'],
            'page_20_img_1' => $request['page_20_img_1'],
            'page_22_img_1' => $request['page_22_img_1'],
            'page_24_img_1' => $request['page_24_img_1'],
            'page_26_img_1' => $request['page_26_img_1'],
            'page_27_img_1' => $request['page_27_img_1'],
            'page_27_img_2' => $request['page_27_img_2'],
            'page_27_img_3' => $request['page_27_img_3'],
            'page_27_img_4' => $request['page_27_img_4'],
            'page_28_img_1' => $request['page_28_img_1'],
            'page_29_img_1' => $request['page_29_img_1'],
            'page_29_img_2' => $request['page_29_img_2'],
            'page_29_img_3' => $request['page_29_img_3'],
            'page_29_img_4' => $request['page_29_img_4'],
            'page_30_img_1' => $request['page_30_img_1'],
            'page_31_img_1' => $request['page_31_img_1'],
            'page_31_img_2' => $request['page_31_img_2'],
            'page_31_img_3' => $request['page_31_img_3'],
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
            $pdf = PDF::loadView('home-buying-guide', $data);
            return $pdf->download('Home Buying Guide.pdf');
        }
    }

    public function single_property(Request $request)
    {


        $data = [
            'page_1_text_1' => $request['page_1_text_1'],
            'page_1_text_2' => $request['page_1_text_2'],
            'page_1_text_3' => $request['page_1_text_3'],
            'page_1_text_4' => $request['page_1_text_4'],

            'page_3_text_1' => $request['page_3_text_1'],
            'page_3_text_2' => $request['page_3_text_2'],
            'page_3_text_3' => $request['page_3_text_3'],
            'page_3_text_4' => $request['page_3_text_4'],
            'page_3_text_5' => $request['page_3_text_5'],

            'page_4_img_1' => $request['page_4_img_1'],


            'page_5_text_1' => $request['page_5_text_1'],
            'page_5_text_2' => $request['page_5_text_2'],
            'page_5_text_3' => $request['page_5_text_3'],
            //images
            'page_6_img_1' => $request['page_6_img_1'],

            'page_2_1_img_1' => $request['page_2_1_img_1'],



            'page_8_img_1' => $request['page_8_img_1'],
            'page_9_img_1' => $request['page_9_img_1'],


            'page_10_img_1' => $request['page_10_img_1'],

            'page_11_img_1' => $request['page_11_img_1'],


            'page_12_img_1' => $request['page_12_img_1'],

            'page_14_img_1' => $request['page_14_img_1'],
            'page_14_img_2' => $request['page_14_img_2'],
            'page_14_img_3' => $request['page_14_img_3'],

            'page_15_img_1' => $request['page_15_img_1'],
            'page_15_img_2' => $request['page_15_img_2'],

            'page_18_img_1' => $request['page_18_img_1'],
            'page_18_img_2' => $request['page_18_img_2'],

            'page_19_img_1' => $request['page_19_img_1'],

            'page_20_img_1' => $request['page_20_img_1'],
            'page_20_img_2' => $request['page_20_img_2'],
            'page_20_img_3' => $request['page_20_img_3'],

            'page_22_img_1' => $request['page_22_img_1'],
            'page_22_img_2' => $request['page_22_img_2'],
            'page_22_img_3' => $request['page_22_img_3'],
            'page_22_img_4' => $request['page_22_img_4'],
            'page_22_img_5' => $request['page_22_img_5'],
            'page_22_img_6' => $request['page_22_img_6'],
            'page_22_img_7' => $request['page_22_img_7'],

            'page_24_img_1' => $request['page_24_img_1'],

            'page_25_img_1' => $request['page_25_img_1'],

            'page_26_img_1' => $request['page_26_img_1'],

            'page_28_img_1' => $request['page_28_img_1'],

            'page_29_img_1' => $request['page_29_img_1'],
            'page_29_img_2' => $request['page_29_img_2'],
            'page_29_img_3' => $request['page_29_img_3'],
            'page_29_img_4' => $request['page_29_img_4'],
            'page_29_img_5' => $request['page_29_img_5'],

            'page_30_img_1' => $request['page_30_img_1'],

            'page_31_img_1' => $request['page_31_img_1'],
            'page_31_img_2' => $request['page_31_img_2'],
            'page_31_img_3' => $request['page_31_img_3'],
            'page_31_img_4' => $request['page_31_img_4'],

            'page_32_img_1' => $request['page_32_img_1'],

            'page_33_img_1' => $request['page_33_img_1'],
            'page_33_img_2' => $request['page_33_img_2'],
            'page_33_img_3' => $request['page_33_img_3'],
            'page_33_img_4' => $request['page_33_img_4'],

            'page_34_img_1' => $request['page_34_img_1'],

            //text
            'page_7_text_1' => $request['page_7_text_1'],
            'page_7_text_2' => $request['page_7_text_2'],
            'page_7_text_3' => $request['page_7_text_3'],
            'page_7_text_4' => $request['page_7_text_4'],
            'page_7_text_5' => $request['page_7_text_5'],
            'page_7_text_6' => $request['page_7_text_6'],
            'page_7_text_7' => $request['page_7_text_7'],
            'page_7_text_8' => $request['page_7_text_8'],
            'page_7_text_9' => $request['page_7_text_9'],

            'page_9_text_1' => $request['page_9_text_1'],
            'page_9_text_2' => $request['page_9_text_2'],
            'page_9_text_3' => $request['page_9_text_3'],
            'page_9_text_4' => $request['page_9_text_4'],
            'page_9_text_5' => $request['page_9_text_5'],
            'page_9_text_6' => $request['page_9_text_6'],
            'page_9_text_7' => $request['page_9_text_7'],
            'page_9_text_8' => $request['page_9_text_8'],
            'page_9_text_9' => $request['page_9_text_9'],
            'page_9_text_10' => $request['page_9_text_10'],
            'page_9_text_11' => $request['page_9_text_11'],
            'page_9_text_12' => $request['page_9_text_12'],
            'page_9_text_13' => $request['page_9_text_13'],

            'page_11_text_1' => $request['page_11_text_1'],
            'page_11_text_2' => $request['page_11_text_2'],
            'page_11_text_3' => $request['page_11_text_3'],
            'page_11_text_4' => $request['page_11_text_5'],

            'page_13_text_1' => $request['page_13_text_1'],
            'page_13_text_2' => $request['page_13_text_2'],
            'page_13_text_3' => $request['page_13_text_3'],
            'page_13_text_4' => $request['page_13_text_4'],
            'page_13_text_5' => $request['page_13_text_5'],

            'page_15_text_1' => $request['page_15_text_1'],
            'page_15_text_2' => $request['page_15_text_2'],
            'page_15_text_3' => $request['page_15_text_3'],
            'page_15_text_4' => $request['page_15_text_4'],
            'page_15_text_5' => $request['page_15_text_5'],
            'page_15_text_6' => $request['page_15_text_6'],
            'page_15_text_7' => $request['page_15_text_7'],
            'page_15_text_8' => $request['page_15_text_8'],
            'page_15_text_9' => $request['page_15_text_9'],

            'page_17_text_1' => $request['page_17_text_1'],
            'page_17_text_2' => $request['page_17_text_2'],
            'page_17_text_3' => $request['page_17_text_3'],
            'page_17_text_4' => $request['page_17_text_4'],

            'page_19_text_1' => $request['page_19_text_1'],
            'page_19_text_2' => $request['page_19_text_2'],
            'page_19_text_3' => $request['page_19_text_3'],
            'page_19_text_4' => $request['page_19_text_4'],
            'page_19_text_5' => $request['page_19_text_5'],

            'page_20_text_1' => $request['page_20_text_1'],
            'page_20_text_2' => $request['page_20_text_2'],
            'page_20_text_3' => $request['page_20_text_3'],

            'page_22_text_1' => $request['page_22_text_1'],
            'page_22_text_2' => $request['page_22_text_2'],
            'page_22_text_3' => $request['page_22_text_3'],

            'page_21_text_1' => $request['page_21_text_1'],
            'page_21_text_2' => $request['page_21_text_2'],
            'page_21_text_3' => $request['page_21_text_3'],
            'page_21_text_4' => $request['page_21_text_4'],
            'page_21_text_5' => $request['page_21_text_5'],
            'page_21_text_6' => $request['page_21_text_6'],


            'page_23_text_1' => $request['page_23_text_1'],
            'page_23_text_2' => $request['page_23_text_2'],
            'page_23_text_3' => $request['page_23_text_3'],
            'page_23_text_4' => $request['page_23_text_4'],
            'page_23_text_5' => $request['page_23_text_5'],
            'page_23_text_6' => $request['page_23_text_6'],

            'page_25_text_1' => $request['page_25_text_1'],
            'page_25_text_2' => $request['page_25_text_2'],
            'page_25_text_3' => $request['page_25_text_3'],
            'page_25_text_4' => $request['page_25_text_4'],
            'page_25_text_5' => $request['page_25_text_5'],
            'page_25_text_6' => $request['page_25_text_6'],
            'page_25_text_7' => $request['page_25_text_7'],
            'page_25_text_8' => $request['page_25_text_8'],
            'page_25_text_9' => $request['page_25_text_9'],

            'page_27_text_1' => $request['page_27_text_1'],
            'page_27_text_2' => $request['page_27_text_2'],
            'page_27_text_3' => $request['page_27_text_3'],
            'page_27_text_4' => $request['page_27_text_4'],
            'page_27_text_5' => $request['page_27_text_5'],
            'page_27_text_6' => $request['page_27_text_6'],

            'page_29_text_1' => $request['page_29_text_1'],
            'page_29_text_2' => $request['page_29_text_2'],
            'page_29_text_3' => $request['page_29_text_3'],
            'page_29_text_4' => $request['page_29_text_4'],
            'page_29_text_5' => $request['page_29_text_5'],
            'page_29_text_6' => $request['page_29_text_6'],
            'page_29_text_7' => $request['page_29_text_7'],
            'page_29_text_8' => $request['page_29_text_8'],
            'page_29_text_9' => $request['page_29_text_9'],
            'page_29_text_10' => $request['page_29_text_10'],
            'page_29_text_11' => $request['page_29_text_11'],
            'page_29_text_12' => $request['page_29_text_12'],
            'page_29_text_13' => $request['page_29_text_13'],
            'page_29_text_14' => $request['page_29_text_14'],
            'page_29_text_15' => $request['page_29_text_15'],
            'page_29_text_16' => $request['page_29_text_16'],
            'page_29_text_17' => $request['page_29_text_17'],
            'page_29_text_18' => $request['page_29_text_18'],
            'page_29_text_19' => $request['page_29_text_19'],
            'page_29_text_20' => $request['page_29_text_20'],
            'page_29_text_21' => $request['page_29_text_21'],
            'page_29_text_22' => $request['page_29_text_22'],
            'page_29_text_23' => $request['page_29_text_23'],
            'page_29_text_24' => $request['page_29_text_24'],

            'page_31_text_1' => $request['page_31_text_1'],
            'page_31_text_2' => $request['page_31_text_2'],
            'page_31_text_3' => $request['page_31_text_3'],
            'page_31_text_4' => $request['page_31_text_4'],
            'page_31_text_5' => $request['page_31_text_5'],
            'page_31_text_6' => $request['page_31_text_6'],
            'page_31_text_7' => $request['page_31_text_7'],
            'page_31_text_8' => $request['page_31_text_8'],
            'page_31_text_9' => $request['page_31_text_9'],
            'page_31_text_10' => $request['page_31_text_10'],
            'page_31_text_11' => $request['page_31_text_11'],
            'page_31_text_12' => $request['page_31_text_12'],
            'page_31_text_13' => $request['page_31_text_13'],
            'page_31_text_14' => $request['page_31_text_14'],
            'page_31_text_15' => $request['page_31_text_15'],
            'page_31_text_16' => $request['page_31_text_16'],
            'page_31_text_17' => $request['page_31_text_17'],
            'page_31_text_18' => $request['page_31_text_18'],
            'page_31_text_19' => $request['page_31_text_19'],
            'page_31_text_20' => $request['page_31_text_20'],


            'page_33_text_1' => $request['page_33_text_1'],
            'page_33_text_2' => $request['page_33_text_2'],
            'page_33_text_3' => $request['page_33_text_3'],
            'page_33_text_4' => $request['page_33_text_4'],
            'page_33_text_5' => $request['page_33_text_5'],
            'page_33_text_6' => $request['page_33_text_6'],
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
            $pdf = PDF::loadView('single-property', $data);
            return $pdf->download('Single Property.pdf');
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
