@extends('layouts.app', [])
@section('vue')
    <div class="container-fluid">
        <Index :collections="{{ $collections }}" />
    </div>
@endsection
