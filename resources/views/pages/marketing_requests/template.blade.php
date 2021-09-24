@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{$template->image}}" alt="" class="w-100">
                @auth()
                    @if(Auth::user()->isAdmin)
                        <div class="row justify-content-center">
                            <a href="{{route('template.fields',['marketingCategory'=>$template->category, 'template'=>$template])}}"
                               class="btn btn-luxe m-4 w-100">Fields</a>
                        </div>
                        <div class="row">
                            <form action="{{route('template.update',[$template->category,$template])}}"
                                  class="form w-100 row pl-4"
                                  method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group col-6">
                                    <label for="title">Title:</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                           value="{{$template->title}}">
                                </div>
                                <div class="form-group col-6">
                                    <label for="image">Image:</label>
                                    <input type="url" name="image" class="form-control" id="image"
                                           value="{{$template->image}}">
                                </div>
                                <div class="form-group col-6">
                                    <button class="btn btn-danger w-100" id="delete_button"
                                            onclick="document.getElementById('delete_form').submit();">
                                        Delete
                                    </button>
                                </div>

                                <div class="form-group col-6">
                                    <button type="submit" class="btn btn-luxe w-100">Update</button>
                                </div>
                            </form>
                            <form action="{{route('template.delete',[$template->category,$template])}}" class=""
                                  method="POST" name="delete_form"
                                  id="delete_form">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="DELETE">
                            </form>
                        </div>
                    @endif
                @endauth
            </div>
            <div class="col-md-6">
                <form action="{{route('marketing.email')}}" method="POST" class="form row"
                      enctype="multipart/form-data">
                    @csrf
                    @if($template->fields->count())
                        @foreach($template->fields as $field)
                            <div class="form-group col-md-12">
                                <label for="{{$field->name}}">{{$field->name}}:</label>
                                @if($field->type === 'textarea')
                                    <textarea name="{{strtolower($field->name)}}" required
                                              id="{{strtolower($field->name)}}" class="form-control"></textarea>
                                @else
                                    <input type="{{strtolower($field->type)}}" id="{{strtolower($field->name)}}"
                                           name="{{strtolower($field->name)}}"
                                           class="form-control" required>
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

<script>
    // var form = document.getElementById("delete_form");
    // document.getElementById("delete_button").addEventListener("click", function () {
    //     form.submit();
    // });
</script>
