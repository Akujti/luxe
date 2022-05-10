@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'design_requests'])
@section('css')
<style>
    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        color: black;
    }

    .row img {
        max-height: 232px;
        object-fit: contain;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <h3 class="text-center font-weight-normal">Please choose one of the
            <strong>{{$marketingCategory->title}}</strong> below which
            you
            want
            to use. Just
            click on it and then
            you can give your info.
        </h3>
        @auth()
        @if(Auth::user()->isAdmin)
        <button type="button" class="btn btn-luxe my-4" data-toggle="modal" data-target="#exampleModal">
            Add Template
        </button>
        @endif
        @endauth
    </div>
    <div class="row my-4">
        @if($templates->count())
        @foreach($templates as $template)
        <div class="col-md-3 text-center">
            <a href="{{route('marketing.template',['marketingCategory'=>$template->category, 'template'=>$template])}}">
                <p class="text-center">{{$template->title}}</p>
                <img src="{{$template->image}}" alt="No image found" style="width: 262px !important;"
                    onerror="this.src='{{asset('images/no-image.png')}}';" class="text-center">
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
        @else <p>No templates found.</p>
        @endif
    </div>
</div>

<div class="modal fade modal-new" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add a new template</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @auth()
                @if(Auth::user()->isAdmin)
                <form action="{{route('template.store',$marketingCategory)}}" class="form row rounded" method="POST">
                    @csrf
                    <div class="form-group col-12">
                        <label for="title">Title:</label>
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="image">Image Link:</label>
                        <input type="url" name="image" id="image" class="form-control" required>
                    </div>
                    @endif
                    @endauth
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-luxe">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection