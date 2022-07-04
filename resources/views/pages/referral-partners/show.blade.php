@extends('layouts.app', ['active' => 'referral_partners', 'subactive' => 'training_videos'])
@section('js')
@endsection
@section('css')
    <style>
        .box-grid-item {
            background-color: #F7F7F7;
            text-align: center;
            min-height: 200px;
            margin-bottom: 26px;
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .box-grid-item img {
            object-fit: cover;
            width: 100%;
        }

        .box-grid-item .icon {
            width: 70px;
            height: 70px;
            object-fit: cover;
        }

        .box-grid-item p {
            font-size: 22px;
            font-family: 'gothicregular';
            text-transform: uppercase;
            margin: 0 !important;
        }

        @media screen and (max-width: 500px) {
            .box-grid-item p {
                font-size: 18px;
            }
        }

        @media (min-width: 768px) and (max-width: 980px) {
            .box-grid-item p {
                font-size: 20px;
            }
        }

        .contact_information {
            background-color: #F7F7F7;
            border-radius: 10px;
            padding: 20px 35px;
        }

        .contact_information ul {
            list-style: none;
            padding: 0;
        }

        .contact_information li {
            font-size: 20px;
            font-family: 'gothicregular';
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .contact_information li a {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .title h1 {
            font-family: 'gothicbold';
            text-align: center;
        }

        #logo {
            max-width: 500px;
            margin-bottom: 20px;
            border-radius: 10px;
        }
    </style>
@endsection
@section('content')
    <style>
    </style>
    <div class="container-fluid">
        <div class="row">
            @if (count($referralPartner->meta_items))
                <div class="col-12 title mb-3">
                    <h1>{{ $referralPartner->title }}</h1>
                </div>
                <div class="m-auto ">
                    @if ($referralPartner->meta_items()->whereType('img')->first())
                        <div>
                            <img src="{{ asset('storage/' .$referralPartner->meta_items()->whereType('img')->first()->path) }}"
                                alt="" id="logo">
                        </div>
                    @endif
                    <div class="contact_information">
                        <ul>
                            @foreach ($referralPartner->meta_items as $item)
                                @if ($item->name == 'general')
                                    <li><a href="#" class="text-luxe"><img src="/images/index-page/luxe_lending.svg"
                                                alt="">{{ $item->name }}</a></li>
                                @elseif ($item->type == 'email')
                                    <li><a href="{{ $item->path }}" class="text-luxe"><img
                                                src="/images/index-page/link_web.svg" alt="">{{ $item->name }}</a>
                                    </li>
                                @elseif ($item->type == 'tel')
                                    <li><a href="{{ $item->path }}" class="text-luxe"><img
                                                src="/images/index-page/phone-black-1.svg"
                                                alt="">{{ $item->name }}</a>
                                    </li>
                                @elseif ($item->type == 'web')
                                    <li><a href="{{ $item->path }}" class="text-luxe"><img
                                                src="/images/index-page/website.svg" alt="">{{ $item->name }}</a>
                                    </li>
                                @elseif ($item->type == 'address')
                                    <li><a href="{{ $item->path }}" class="text-luxe"><img
                                                src="/images/index-page/location-1.svg"
                                                alt="">{{ $item->name }}</a>
                                    </li>
                                @elseif ($item->type == 'img')
                                @else
                                    <li><a href="#" class="text-luxe"><img src="/images/index-page/luxe_lending.svg"
                                                alt="">{{ $item->name }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            @else
                <div class="col-12 title mb-3">
                    <h1> Coming Soon ...</h1>
                </div>
            @endif
        </div>
    </div>
@endsection
