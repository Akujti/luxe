@extends('layouts.app', ['active' => 'Tools&TrainingVideos'])
<style>
    @font-face {
        font-family: "gothicbold";
        src: local("gothicbold"),
        url("/fonts/index-page/gothicbold.ttf") format("truetype");
    }
    @font-face {
        font-family: "gothicregular";
        src: local("gothicregular"),
        url("/fonts/index-page/gothicregular.ttf") format("truetype");
    }
    .box {
        margin: 5px;
        color: #262626;
        background-color: #F7F7F7;
        border-radius: 30px;
    }
    .box a {
        color: #262626 !important;
        font-family: 'gothicbold';
        min-height: 100px;
    }
    .card-title h1 {
        font-family: 'gothicbold';
        margin-bottom: 30px;
    }
    @media (max-width: 576px) {
        .box a {
            font-size: 13px;
        }
    }
</style>

@section('content')
<div class="container-fluid d-flex align-items-center" style="height: 70vh">
    <div class="row justify-content-center w-100 m-0 p-0">
        <div class="col-md-12">
            <div class="">
                <div class="card-title text-center">
                    <h1>Select Room</h1>
                </div>
                <div class="">
                    <div class="row m-0 p-0">
                        @foreach($rooms as $room)
                            <div class="col-lg-4 mb-4">
                                <div class="box">
                                    <a href="{{route('bookings.index',$room->id)}}"
                                       class="btn w-100 d-flex align-items-center justify-content-center"
                                       style="height: 70px">{{$room->name}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
@endsection