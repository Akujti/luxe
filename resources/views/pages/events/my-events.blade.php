@extends('layouts.app')
@section('js')
<script src="{{ asset('js/main.min.js') }}" defer></script>
@endsection
@section('css')
<link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
<style>
    .btn-luxe {
        background: #FFCF40;
        color: black;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Location</th>
                <th scope="col">Start Time</th>
                <th scope="col">End Time</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$event->title}}</td>
                <td>{{$event->location}}</td>
                <td>{{$event->start_time}}</td>
                <td>{{$event->end_time}}</td>
                <td>
                    <form action="" method="post"></form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection