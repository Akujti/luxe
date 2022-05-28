@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/news-feed/main.css') }}" />
@endsection
@section('content')
<div class="container-fluid">
   <div class="row">
       <div class="col-8">
            <div class="row w-100">
                <div class="create-post-box w-100">
                    <div class="row justify-content-center">
                        <div class="col-3">

                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Start a post" onclick="openModal()">

                        </div>
                    </div>
                </div>
            </div>
       </div>
   </div>
</div>

@extends('modals.modal-top')

@section('title')
<h4>Modal title</h4>
@endsection

@section('body')
<input type="text">
@endsection


@section('js')
<script>
    function openModal() {
        $('#exampleModal').modal('toggle');
    }
</script>
@endsection
@endsection