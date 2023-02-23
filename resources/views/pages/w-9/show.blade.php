@extends('admin.layouts.app', ['active' => 'Forms'])
@section('css')
    <style>
        .wrapper h1 {
            font-weight: 400;
            letter-spacing: 2px;
            background: #262626;
            padding: 10px;
            border: 1px solid #dadada;
            border-radius: 10px;
            color: #fff;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">W-9 Submission</h5>
        </div>
        <div class="row m-0 w-100">
            <div class="col-md-6">
                <p class="bold-text">
                    <b>Name:</b> {{ $w_9->text_1 }}
                </p>
                <hr>
            </div>
            <div class="col-md-6">
                <p class="bold-text">
                    <b>Business name/disregarded entity name, if different from above:</b> {{ $w_9->text_2 }}
                </p>
                <hr>
            </div>
            <div class="col-md-6">
                <p class="bold-text">
                    <b>Federal tax classification of the person whose name
                        is entered on line 1:</b>
                    @php
                        switch ($w_9->select_1) {
                            case 1:
                                echo 'Individual/sole proprietor or single-member LLC';
                                break;
                            case 2:
                                echo 'C Corporation';
                                break;
                            case 3:
                                echo 'S Corporation';
                                break;
                            case 4:
                                echo 'Partnership';
                                break;
                            case 5:
                                echo 'Trust/estate';
                                break;
                            case 6:
                                echo 'Limited liability company. Enter the tax classification (C=C corporation, S=S corporation,
                    P=Partnership)';
                                break;
                            case 7:
                                echo 'Other';
                                break;
                        
                            default:
                                # code...
                                break;
                        }
                    @endphp
                </p>
                <hr>
            </div>
            <div class="col-md-6">
                <p class="bold-text">
                    <b>C=C corporation, S=S corporation, P=Partnership:</b> {{ $w_9->text_3 }}
                </p>
                <hr>
            </div>
            <div class="col-md-6">
                <p class="bold-text">
                    <b>Other:</b> {{ $w_9->text_3_1 }}
                </p>
                <hr>
            </div>
            <div class="col-md-6">
                <p class="bold-text">
                    <b>Exemptions (codes apply only to certain entities, not individuals;):</b> {{ $w_9->text_4 }}
                </p>
                <hr>
            </div>
            <div class="col-md-6">
                <p class="bold-text">
                    <b>Exemption from FATCA reporting code (if any):</b> {{ $w_9->text_4_1 }}
                </p>
                <hr>
            </div>
            <div class="col-md-6">
                <p class="bold-text">
                    <b>Address (number, street, and apt. or suite no.):</b> {{ $w_9->text_5 }}
                </p>
                <hr>
            </div>
            <div class="col-md-6">
                <p class="bold-text">
                    <b>City, state, and ZIP code:</b> {{ $w_9->text_6 }}
                </p>
                <hr>
            </div>
            <div class="col-md-6">
                <p class="bold-text">
                    <b>List account number(s) here (optional):</b> {{ $w_9->text_7 }}
                </p>
                <hr>
            </div>
            <div class="col-md-6">
                <p class="bold-text">
                    <b>Requester's name and address (optional):</b> {{ $w_9->text_8 }}
                </p>
                <hr>
            </div>
            <div class="col-md-6">
                <p class="bold-text">
                    <b>Social security number:</b> {{ $w_9->text_9 }}
                </p>
                <hr>
            </div>
            <div class="col-md-6">
                <p class="bold-text">
                    <b>Employer identification number:</b> {{ $w_9->text_10 }}
                </p>
                <hr>
            </div>
            <div class="col-md-6">
                <p class="bold-text">
                    <b>Signature of U.S person:</b> {{ $w_9->signature }}
                </p>
                <hr>
            </div>
            <div class="col-md-6">
                <p class="bold-text">
                    <b>Date:</b> {{ $w_9->date }}
                </p>
                <hr>
            </div>
            <div class="col-md-6">
                <p class="bold-text">
                    <a class=" btn btn-luxe" href="{{ route('w-9.download', $w_9->id) }}" style="height: 39px">Download
                    </a>
                </p>
            </div>

        </div>
    </div>
@endsection
