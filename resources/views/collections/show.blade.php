@extends('layouts.app', ['active' => 'collections'])
@section('vue')
    <div class="container my-5">
        <Show :collection="{{ $collection }}" />
    </div>
@endsection
