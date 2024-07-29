<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- CSS only -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap');

        * {
            font-family: Lato;
            font-weight: 400;
        }

        img {
            max-width: 100%;
        }

        .wrap {
            margin: 80px 0;
            justify-content: center;
            align-items: center;
            border: 1px solid gray;
            border-radius: 10px;
            padding: 40px;
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
        }

        .link {
            text-align: center;
            margin-top: 20px;
        }

        h3 {
            font-size: 24px;
            text-align: center;
        }

        h5 {
            text-align: center;
            font-size: 16px;
        }

        .listings-table th {
            vertical-align: bottom;
            text-align: left;
        }

        .listings-table td, .listings-table th {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .listings-table .image {
            object-fit: cover;
            border-radius: 5px;
        }

        .listing {
            height: 100%;
            border: 1px solid #ececec;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);
            color: black;
        }

        .listing img {
            width: 100%;
            /*height: 200px;*/
            object-fit: cover;
        }

        .listing p {
            margin: 0;
        }

        .listing .created-at {
            top: 5px;
            left: 5px;
            font-weight: bold;
            background-color: rgba(0, 0, 0, .4);
            color: white;
            padding: 2px 5px;
            font-size: 12px;
            border-radius: 5px;
        }

        .listing .listing-meta {
            padding: 10px;
            min-height: 140px;
        }

        @media (min-width: 768px) {
            .col-md-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
        }
    </style>
</head>

<body>
<div class="wrap">
    <div style="text-align: center">
        <img src="{{url('/images/logo-black.png')}}" alt="" width="300px">
    </div>
    <hr>
    <div class="" style="width: 100%">
        <div class="box">
            <div class="row">
                @foreach($listings as $item)
                    <div class="col-md-4 mb-3">
                        <a href="{{ route('listings.show', $item) }}">
                            <div class="listing">
                                <div class="position-relative">
                                    <img src="{{ asset($item->main_image) }}" alt="" class="w-100" height="240"
                                         style="object-fit: cover;object-position: center;">
                                    <p class="position-absolute created-at">Coming Soon</p>
                                </div>
                                <div class="listing-meta">
                                    <p class="price">
                                        <b>${{ number_format($item->price) }}{{ $item->rental ? '/mo' : '' }}</b>
                                    </p>
                                    <p class="info"><b>{{ $item->beds }}</b> bd | <b>{{ $item->baths }}</b> ba |
                                        <b>{{ $item->living_area }}</b> sqft
                                    </p>
                                    @if ($item->type == 'Rental')
                                        <p><b>{{ $item->type }}</b></p>
                                    @else
                                        <p><b>{{ $item->type }}</b> for sale</p>
                                    @endif
                                    <p class="address">{{ $item->address }}</p>
                                    <p class="address">{{ $item->user->profile->fullname }}</p>
                                    <p class="address">{{ $item->user->profile->phone }}</p>
                                    <p class="address">{{ $item->user->email }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="">
                <h5>
                    <a href="{{route('listings.index')}}" class="mt-3 text-center d-block">
                        View All Coming Soon Listings
                    </a>
                </h5>
            </div>
        </div>

        <div class="link">
            <a href="https://myluxehub.com">https://myluxehub.com/</a>
        </div>
    </div>
</div>
</body>

</html>
<style>
    .text-center {
        text-align: center;
    }

    .h4 {
        font-size: 20px;
    }
</style>
