@extends('layouts.app', ['active' => 'marketing_branding', 'subactive' => 'online_marketing_designer'])
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
            object-fit: cover;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row box-title p-0 m-0 justify-content-center">
            <h3 class="text-center">Please choose a theme below which you want to use. Just click on it and then you can
                edit.</h3>
        </div>
        <div class="row my-5 justify-content-start">
            @foreach ($category->categories as $item)
                <div class="col d-flex justify-content-center">
                    <div class="template-box">
                        <a href="{{ route('user.diy-templates.show', $item) }}">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="No image found" width="100%"
                                height="303px" onerror="this.src='{{ asset('images/no-image.png') }}';">
                            <div class="template-details">
                                <p>{{ $item->title }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
            @foreach ($templates as $template)
                <div class="col d-flex justify-content-center">
                    <div class="template-box">
                        <a href="{{ $template->url }}">
                            <img src="{{ $template->image }}" alt="No image found" width="100%" height="303px"
                                onerror="this.src='{{ asset('images/no-image.png') }}';">
                            <div class="template-details">
                                <p>{{ $template->title }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
            @if (!$category->templates->count() && !$category->categories->count())
                <p>No templates found.</p>
            @endif
        </div>
    </div>
@endsection
