@extends('cma.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/cma-report.css') }}">
<style>
    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        color: black;
    }

    .row img {
        object-fit: cover;
    }
    .section-header {
        background-image: url("{{ asset('images/index-page/section_background.png') }}");
    }
</style>
@endsection
@section('content')

<section class="section-header">
    <section class="section-img">
        <h1>LUXE Properties</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
    </section>
</section>

@endsection