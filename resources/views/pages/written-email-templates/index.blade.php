@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Written Email Templates</h1>
    </div>
    <div class="row my-4">
        @foreach($templates as $template)
        <div class="col-lg-4">
            <a href="{{route('written-email-templates.show',$template)}}"
                class="btn btn-luxe w-100 m-2 d-flex align-items-center justify-content-center"
                style="height: 70px">{{$template->title}}</a>
        </div>
        @endforeach
    </div>
</div>

@endsection