<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use File;
use Str;
use Imagick;
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

        $imgExtension = new Imagick($file);
        $filePath = 'imageConvert/' . Str::random(10) . time() . '.jpg';
        $imgExtension->writeImages($filePath, true);
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
            dd('image');
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
            'text_29' => $request['text_29'],

            'text_30' => $request['text_30'],
            'text_31' => $request['text_31'],
            'text_32' => $request['text_32'],
            'text_33' => $request['text_33'],
            'text_34' => $request['text_34'],
            'text_35' => $request['text_35'],
            'text_36' => $request['text_36'],
            'text_37' => $request['text_37'],
            'text_38' => $request['text_38'],
            'text_39' => $request['text_39'],

            'text_40' => $request['text_40'],
            'text_41' => $request['text_41'],
            'text_42' => $request['text_42'],
            'text_43' => $request['text_43'],
            'text_44' => $request['text_44'],
            'text_45' => $request['text_45'],
            'text_46' => $request['text_46'],
            'text_47' => $request['text_47'],
            'text_48' => $request['text_48'],
            'text_49' => $request['text_49'],

            'text_50' => $request['text_50'],
            'text_51' => $request['text_51'],
            'text_52' => $request['text_52'],
            'text_53' => $request['text_53'],
            'text_54' => $request['text_54'],
            'text_55' => $request['text_55'],
            'text_56' => $request['text_56'],
            'text_57' => $request['text_57'],
            'text_58' => $request['text_58'],
            'text_59' => $request['text_59'],

            'text_60' => $request['text_60'],
            'text_61' => $request['text_61'],
            'text_62' => $request['text_62'],
            'text_63' => $request['text_63'],
            'text_64' => $request['text_64'],
            'text_65' => $request['text_65'],
            'text_66' => $request['text_66'],
            'text_67' => $request['text_67'],
            'text_68' => $request['text_68'],
            'text_69' => $request['text_69'],

            'text_70' => $request['text_70'],
            'text_71' => $request['text_71'],
            'text_72' => $request['text_72'],
            'text_73' => $request['text_73'],
            'text_74' => $request['text_74'],
            'text_75' => $request['text_75'],
            'text_76' => $request['text_76'],
            'text_77' => $request['text_77'],
            'text_78' => $request['text_78'],
            'text_79' => $request['text_79'],

            'text_80' => $request['text_80'],
            'text_81' => $request['text_81'],
            'text_82' => $request['text_82'],
            'text_83' => $request['text_83'],
            'text_84' => $request['text_84'],
            'text_85' => $request['text_85'],
            'text_86' => $request['text_86'],
            'text_87' => $request['text_87'],
            'text_88' => $request['text_88'],
            'text_89' => $request['text_89'],

            'text_90' => $request['text_90'],
            'text_91' => $request['text_91'],
            'text_92' => $request['text_92'],
            'text_93' => $request['text_93'],
            'text_94' => $request['text_94'],
            'text_95' => $request['text_95'],
            'text_96' => $request['text_96'],
            'text_97' => $request['text_97'],
            'text_98' => $request['text_98'],
            'text_99' => $request['text_99'],

            'text_100' => $request['text_100'],
            'text_101' => $request['text_101'],
            'text_102' => $request['text_102'],
            'text_103' => $request['text_103'],
            'text_104' => $request['text_104'],
            'text_105' => $request['text_105'],
            'text_106' => $request['text_106'],
            'text_107' => $request['text_107'],
            'text_108' => $request['text_108'],
            'text_109' => $request['text_109'],

            'text_110' => $request['text_110'],
            'text_111' => $request['text_111'],
            'text_112' => $request['text_112'],
            'text_113' => $request['text_113'],
            'text_114' => $request['text_114'],
            'text_115' => $request['text_115'],
            'text_116' => $request['text_116'],
            'text_117' => $request['text_117'],
            'text_118' => $request['text_118'],
            'text_119' => $request['text_119'],

            'text_120' => $request['text_120'],
            'text_121' => $request['text_121'],
            'text_122' => $request['text_122'],
            'text_123' => $request['text_123'],
            'text_124' => $request['text_124'],
            'text_125' => $request['text_125'],
            'text_126' => $request['text_126'],
            'text_127' => $request['text_127'],
            'text_128' => $request['text_128'],
            'text_129' => $request['text_129'],

            'text_130' => $request['text_130'],
            'text_131' => $request['text_131'],
            'text_132' => $request['text_132'],
            'text_133' => $request['text_133'],
            'text_134' => $request['text_134'],
            'text_136' => $request['text_136'],

            'img_1' => $request['img_1_input'],
            'img_2' => $request['img_2_input'],
            'img_3' => $request['img_3_input'],
            'img_4' => $request['img_4_input'],
            'img_5' => $request['img_5_input'],
            'img_6' => $request['img_6_input'],
            'img_7' => $request['img_7_input'],
            'img_8' => $request['img_8_input'],
            'img_9' => $request['img_9_input'],
            'img_10' => $request['img_10_input'],
            'img_11' => $request['img_11_input'],
            'img_12' => $request['img_12_input'],
            'img_13' => $request['img_13_input'],
            'img_14' => $request['img_14_input'],
            'img_15' => $request['img_15_input'],
            'img_16' => $request['img_16_input'],
            'img_17' => $request['img_17_input'],
            'img_18' => $request['img_18_input'],
            'img_19' => $request['img_19_input'],
            'img_20' => $request['img_20_input'],
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
