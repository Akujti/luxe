@extends('layouts.app', [])
@section('vue')
    <div class="container my-5">
        <Show :collection="{{ $collection }}" />
    </div>
@endsection
