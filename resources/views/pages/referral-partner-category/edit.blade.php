@extends('admin.layouts.app')
@section('css')
@section('content')
    <div class="container-fluid">
        <div class="row m-0">
            <form action="{{ route('admin.referral-partner-category.update', $referralPartnerCategory) }}" method="post"
                enctype="multipart/form-data">
                {{ $referralPartnerCategory->title }}
                @method('PUT')
                @csrf
                <input type="file" name="image">
                <input type="submit" value="Save">
            </form>
        </div>
    </div>
@section('js')
@endsection
@endsection
