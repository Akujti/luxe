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
    <h5 class="h5-luxe mb-4">My Events</h5>
    <table class="table">
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
                    <form id="event_attend_form" action="{{route('events.attend')}}" method="POST" class="m-0 p-0">
                        @csrf
                        <input type="hidden" name="event_id" value="{{$event->id}}">
                        <input type="hidden" name="status" value="{{!$event->status}}">
                        <button class="btn btn-luxe" type="submit">{{$event->status ? 'Cancel':'Attend'}}</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$events->links()}}
</div>
@endsection