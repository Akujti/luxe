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

        .col {
            width: 100%;
            background-color: white;
            padding: 10px;
            margin-top: 20px;
        }

        .bold-text {
            font-weight: 600;
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

        .listings-table {
            width: 100%;
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
    </style>
</head>

<body>
<div class="wrap">
    <div style="text-align: center">
        <img src="{{url('/images/logo-black.png')}}" alt="">
    </div>
    <hr>
    <div class="" style="width: 100%">
        <div class="box">
            <table class="listings-table">
                <thead>
                <tr>
                    <th>Address</th>
                    <th>Price</th>
                    <th>Agent</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($listings as $listing)
                    <tr>
                        <td>{{$listing->address}}</td>
                        <td>$ {{$listing->price ? number_format($listing->price):'-'}}</td>
                        <td>{{$listing->user->profile->fullname}}</td>
                        <td><a href="{{route('listings.show',$listing->id)}}">View Listing</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="">
                <h5>
                    <a href="{{route('listings.index')}}" class="mt-3 text-center d-block">View All Coming Soon
                        Listings</a>
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
