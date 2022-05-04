@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'design_requests')
@section('css')
<style>
    @media (min-width: 768px) {
        .sticky-col {
            position: sticky;
            top: 125px;
            height: fit-content;
        }
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 sticky-col">
            <img src="{{$template->image}}" alt="" class="w-100" onerror="this.src='{{asset('images/no-image.png')}}';">
            @auth()
            @if(Auth::user()->isAdmin)
            <div class="justify-content-center">
                <a href="{{route('template.fields',['marketingCategory'=>$template->category, 'template'=>$template])}}"
                    class="btn btn-luxe my-4 w-100">Edit Fields</a>
            </div>
            <div class="">
                <form action="{{route('template.update',[$template->category,$template])}}" class="form w-100 row m-0"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group col-6 p-0 pr-1">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$template->title}}">
                    </div>
                    <div class="form-group col-6 p-0 pl-1">
                        <label for="image">Image:</label>
                        <input type="url" name="image" class="form-control" id="image" value="{{$template->image}}">
                    </div>
                    <div class="form-group col-12 p-0">
                        <div class="button-group d-flex">
                            <button type="submit" class="btn btn-luxe">Update</button>
                </form>
                <form action="{{route('template.delete',[$template->category,$template])}}" class="w-100 col-6"
                    method="POST" name="delete_form" id="delete_form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger w-100"
                        onclick="return confirm('Are you sure you want to delete this template?');">
                        Delete
                    </button>
                </form>
            </div>

        </div>
    </div>
    @endif
    @endauth
</div>
<div class=" col-md-8">
    <form action="{{route('marketing.email',[$template->category, $template])}}" method="POST" class="form row"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group col-md-12">
            <label for="form_agent_full_name">Your Full Name:</label>
            <input type="text" required class="form-control" name="form_agent_full_name">
        </div>
        <div class="form-group col-md-12">
            <label for="form_agent_email">Your Email:</label>
            <input type="text" required class="form-control" name="form_agent_email">
        </div>
        @if($template->fields->count())
        @foreach($template->fields as $field)
        <div class="form-group col-md-12">
            <label for="{{$field->name}}">{{$field->name}}:</label>
            @if($field->type === 'textarea')
            <textarea name="{{strtolower($field->name)}}" id="{{strtolower($field->name)}}"
                class="form-control"></textarea>
            @else
            <input type="{{strtolower($field->type)}}" id="{{strtolower($field->name)}}"
                name="{{strtolower($field->name)}}"
                class="form-control {{strtolower($field->type == 'file' ? 'p-1':'')}}">
            @endif
        </div>
        @endforeach
        <div class="form-group col-md-12">
            <label for="notes">Notes:</label>
            <textarea name="notes" id="notes" rows="3" class="form-control"></textarea>
        </div>
        <div class="form-group col-md-6">
            <button class="btn btn-luxe">Submit</button>
        </div>
        @else
        <p>No fields found.</p>
        @endif
    </form>
</div>
</div>
</div>
@endsection