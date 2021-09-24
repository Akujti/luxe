@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <h3 class="text-center font-weight-normal">Please choose a {{$marketingCategory->title}} below which you
                want
                to use. Just
                click on it and then
                you can give your info.</h3>
        </div>
        <div class="row mt-4">
            @auth()
                @if(Auth::user()->isAdmin)
                    <div class="col-md-3">
                        <form action="{{route('template.store',$marketingCategory)}}" class="form row rounded"
                              method="POST">
                            @csrf
                            <h4 class="text-center w-100 my-4">Add a new template</h4>
                            <div class="form-group col-12">
                                <label for="title">Title:</label>
                                <input type="text" id="title" name="title" class="form-control" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="image">Image:</label>
                                <input type="url" name="image" id="image" class="form-control" required>
                            </div>
                            <div class="form-group col-12">
                                <input type="submit" value="Save" class="btn btn-luxe w-100">
                            </div>
                        </form>
                    </div>
                @endif
            @endauth
            @foreach($templates as $template)
                <div class="col-md-3">
                    <p class="text-center">{{$template->title}}</p>
                    <a href="{{route('marketing.template',['marketingCategory'=>$template->category, 'template'=>$template])}}">
                        <img src="{{$template->image}}" alt="" class="w-100">
                    </a>
                    @auth()
                        @if(Auth::user()->isAdmin)
                            <div class="row justify-content-center">
                                <a href="{{route('template.fields',['marketingCategory'=>$template->category, 'template'=>$template])}}"
                                   class="btn btn-luxe m-4 w-100">Fields</a>
                            </div>
                        @endif
                    @endauth
                </div>
            @endforeach
        </div>
    </div>
@endsection
