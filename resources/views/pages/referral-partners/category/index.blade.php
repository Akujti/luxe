@extends('layouts.app', ['active' => 'referral_partners'])
@section('js')
@endsection
@section('css')
    <style>
        .box-grid-item {
            cursor: pointer;
            background-size: cover !important;
            background-color: #262626 !important;
            box-shadow: 0px 0px 12px 0px rgb(0 0 0 / 9%);
        }

        .box-grid-item p {
            font-size: 18px;
            font-family: 'gothicregular';
            margin: 0 !important;
            font-weight: bold;
            color: white;
            padding-bottom: 15px;
        }
    </style>
@endsection
@section('content')
    <style>
    </style>
    <div class="container-fluid mb-5">
        <div class="col-12 title mb-3 text-center">
            <h1 class="font-weight-bold">Referral Partners</h1>
        </div>
        <div class="grid grid-layout">
            @foreach ($categories as $item)
                <div class="box-item box-grid-item box-item-end "
                    style="background-image: linear-gradient(0deg, rgba(0,0,0,0.7) 0%, rgba(255,255,255,0) 100%), url({{ asset('storage/' . $item->icon) }})"
                    onclick="window.location = '{{ route('referral-partner-category.show', $item) }}'">
                    <div>
                        <p>{{ $item->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
