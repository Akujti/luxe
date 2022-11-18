@extends('layouts.app', ['active' => 'marketing_branding', 'subactive' => 'canva_marketing_designer'])
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
            @if ($category->categories->count())
                @foreach ($category->categories as $item)
                    <div class="col d-flex justify-content-center">
                        <div class="template-box">
                            <a href="{{ route('canva.marketing.request', ['marketingCanva' => $item]) }}">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="No image found" width="100%"
                                    height="303px" onerror="this.src='{{ asset('images/no-image.png') }}';">
                                <div class="template-details">
                                    <p>{{ $item->title }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif

            @if ($category->templates->count())
                @foreach ($category->templates as $template)
                    <div class="col d-flex justify-content-center">
                        <div class="template-box">
                            <a href="{{ $template->url }}" target="_blank">
                                <img src="{{ asset('storage/' . $template->image) }}" alt="No image found" width="100%"
                                    height="303px" onerror="this.src='{{ asset('images/no-image.png') }}';">
                                <div class="template-details d-flex justify-content-between align-items-center">
                                    <p>Template {{ $loop->iteration }}</p>
                                    <div>
                                        {{-- <span><img src="/images/index-page/download-icon.svg" alt=""></span> --}}
                                        <span><img src="/images/index-page/canva.svg" width="25px"></span>
                                        @if ($template->template_url)
                                            <a href="{{ $template->template_url }}">
                                                <span><img src="/images/index-page/edit-icon.svg" alt=""></span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection
