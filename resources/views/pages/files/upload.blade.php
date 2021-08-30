@extends('layouts.app')
@section('content')
<style>
    .wrapper {
        position: relative;
    }

    .wrapper h1 {
        font-weight: 400;
        letter-spacing: 2px;
        background: #FFCF40;
        padding: 10px;
        border: 1px solid #dadada;
        border-radius: 10px;
    }
</style>
<div class="container">
    <div class="wrapper text-lg-center text-left mb-4 gold">
        <h1>LUXE FILES</h1>
    </div>
    <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="current_directory" value="{{$folder_id}}">
        <div class="form-group">
            <label for="start">{{ __('Current Directory') }}</label>
            <div class='input-group'>
                <input type="text" class="w-100 form-control" disabled
                    value="{{ $current_folder->title ?? 'Root Directory'}}">
            </div>
        </div>
        <div class="form-group">
            <label for="start">{{ __('File Name') }}</label>
            <div class='input-group'>
                <input type="text" class="w-100 form-control" name="title">
            </div>
        </div>
        <div class="form-group">
            <div class='input-group'>
                <div class="form-group w-100">
                    <label for="">File Type</label>
                    <select class="form-control " name="file_type" id="">
                        <option value="doc">Document</option>
                        <option value="pdf">PDF</option>
                        <option value="img">Image</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="start">{{ __('Select File') }}</label>
            <div class="custom-file">
                <input type="file" name="file" class="form-control" id="inputGroupFile01" style="padding: 3px;">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <button type="submit" class="btn btn-luxe">Submit</button>
        </div>
    </form>
</div>
@endsection