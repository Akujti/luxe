<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- CSS only -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        @media only screen and (min-width: 600px) {
            .listing-table {
                padding: 10px;
            }
        }

        @media only screen and (max-width: 600px) {
            .listing-table, .listing-table td {
                display: block;
                width: 100% !important;
            }

            .listing-table {
                padding: 10px 0;
            }

            .content-box {
                max-width: 200px;
            }
        }

        * {
            font-family: 'Roboto';
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
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                @foreach($listings->chunk(2) as $chunk)
                    <tr>
                        @foreach($chunk as $item)
                            <td style="width: 50%; vertical-align: top;" class="listing-table">
                                <a href="{{ route('listings.show', $item) }}"
                                   style="text-decoration: none; color: inherit;">
                                    <table width="100%" cellspacing="0" cellpadding="0" border="0"
                                           style="border: 1px solid #ddd; border-radius: 4px; overflow: hidden;">
                                        <tr>
                                            <td style="padding: 0;">
                                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset($item->main_image) }}" alt=""
                                                                 width="100%" height="240"
                                                                 style="object-fit: cover; object-position: center;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 0; margin: 0;">
                                                            <table width="100%" cellspacing="0" cellpadding="0"
                                                                   border="0">
                                                                <tr>
                                                                    <td style="padding: 5px;">
                                                                        <span
                                                                            style="border-radius: 5px; color: white; background: rgba(0, 0, 0, .4); margin: 0; padding: 2px 5px; font-size: 12px; font-weight: bold;">
                                                                            Coming Soon
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style="padding: 10px;">
                                                <div class="content-box">
                                                    <p style="margin: 0; font-weight: bold; font-size: 18px;">
                                                        ${{ number_format($item->price) }}{{ $item->rental ? '/mo' : '' }}</p>
                                                    <p style="margin: 0;">{{ $item->beds }} bd | {{ $item->baths }} ba
                                                        | {{ $item->living_area }} sqft</p>
                                                    <p style="margin: 0; font-weight: bold;">{{ $item->type }}{{ $item->type != 'Rental' ? ' for sale' : '' }}</p>
                                                    <p style="margin: 0;">{{ $item->address }}</p>
                                                    <p style="margin: 0;">{{ $item->user->profile->fullname }}</p>
                                                    <p style="margin: 0;">{{ $item->user->profile->phone }}</p>
                                                    <p style="margin: 0;">{{ $item->user->email }}</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </a>
                            </td>
                        @endforeach
                        @if($chunk->count() < 2)
                            <td style="width: 50%;" class="listing-table"></td>
                        @endif
                    </tr>
                @endforeach
            </table>
            <div class="">
                <h5>
                    <a href="{{route('listings.index')}}" class="mt-3 text-center d-block">
                        View All Coming Soon Listings
                    </a>
                </h5>
            </div>
        </div>

        <div class="link">
            <a href="https://myluxehub.com">https://myluxehub.com</a>
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
