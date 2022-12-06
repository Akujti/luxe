@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'conference_room_reservations'])
<style>
    .card-title h1 {
        font-family: 'gothicbold';
        margin-bottom: 30px;
    }

    .box-item {
        background-color: #F7F7F7;
        cursor: pointer;
    }
</style>

@section('content')
    <div class="container-fluid ">
        <div class="card-title text-center">
            <h1>Select Conference Room Location</h1>
        </div>
        <div class="grid grid-layout">
            @foreach ($rooms as $room)
                <div class="box-item box-item-center">
                    <a href="{{ route('bookings.index', $room->id) }}">{{ $room->name }}</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
