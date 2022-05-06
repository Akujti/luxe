@extends('layouts.app')
@section('js')
<script src="{{ asset('js/main.min.js') }}" defer></script>
@endsection
@section('css')
<link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
<style>
    .table td,
    .table th {
        vertical-align: middle;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <h5 class="h5-luxe">{{$event->title}} Attendance</h5>
    Total attendees: {{$agents->count()}}
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">Avatar</th>
                <th scope="col">Full Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Attending</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agents as $agent)
            <tr>
                <td><img src="{{$agent->avatar}}" alt="" class="rounded-circle" style="width: 80px"></td>
                <td>{{$agent->profile->fullname}}</td>
                <td>{{$agent->profile->phone}}</td>
                <td>{{$agent->pivot->status ? 'Yes':'No'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection