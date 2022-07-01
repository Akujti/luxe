@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'conference_room_reservations'])
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
        .box-item a {
            font-size: 13px;
        }
    }
    .box-item {
        background-color: #F7F7F7;
        text-align: center;
        height: 311px;
        margin-bottom: 26px;
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .box-item img {
        object-fit: cover;
        width: 100%;
    }

    .box-item .icon {
        width: 70px;
        height: 70px;
        object-fit: cover;
    }

    .box-item a {
        font-size: 20px;
        font-family: 'gothicregular';
        color: #262626;
        white-space: break-spaces;
    }
    .box-item a:hover {
        color: #262626;
    }
    a:focus {
        outline: none;
    }
</style>

@section('content')
<div class="container-fluid d-flex align-items-center">
    <div class="row justify-content-center w-100 m-0 p-0">
        <div class="col-md-12">
            <div class="">
                <div class="card-title text-center">
                    <h1>Select Conference Room Location</h1>
                </div>
                <div class="">
                    <div class="row m-0 p-0">
                        @foreach($rooms as $room)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="box-item">
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