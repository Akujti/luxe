@extends('layouts.app', ['active' => 'collections'])
@section('vue')
    <div class="container-fluid">
        <Index :collections="{{ $collections }}" />
    </div>
@endsection
