@extends('layouts.app', ['subactive' => 'collections'])
@section('vue')
    <div class="container-fluid">
        <Index :collections="{{ $collections }}" />
    </div>
@endsection
