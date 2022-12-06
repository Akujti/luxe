@extends('layouts.app', ['active' => 'referral_partners', 'subactive' => $referralPartnerCategory->title])
@section('js')
@endsection
@section('css')
    <style>
        .box-grid-item {
            background-color: #F7F7F7;
            cursor: pointer;
        }
    </style>
@endsection
@section('content')
    <style>
    </style>
    <div class="container-fluid">
        <div class="col-12 title mb-3 text-center">
            <h1 class="font-weight-bold">{{ $referralPartnerCategory->title }}</h1>
        </div>
        <div class="grid grid-layout">
            @foreach ($referralPartnerCategory->children as $item)
                <div class="box-item box-grid-item box-item-center"
                    onclick="window.location = '{{ $item->path ? url($item->path) : route('referral-partner-category.show', $item->id) }}'">
                    <div>
                        <p>{{ $item->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="grid grid-layout">
            @foreach ($referralPartnerCategory->referral_partners as $item)
                <div class="box-item box-grid-item box-item-center"
                    onclick="window.location = '{{ $item->path ? url($item->path) : route('referral-partners.show', $item->id) }}'">
                    <div>
                        <p>{{ $item->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
