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
    </style>
</head>

<body>
    <div class="wrap">
        <div style="text-align: center">
            <img src="{{url('/images/logo-black.png')}}" alt="">
        </div>
        <div class="" style="width: 100%">
            @foreach($details as $key=>$val)
            <p class="bold-text"><b>{{ucwords(str_replace('_',' ',$key))}}:</b>
                @if(preg_match("(storage/images/marketing|marketing)",$val))
                <a href="{{$val}}" target="_blank">Click to open.</a>
                @else
                {{$val}}
                @endif</p>
            <hr>
            @endforeach
            <div class="link">
                <a href="https://myluxehub.com">https://myluxehub.com/</a>
            </div>
        </div>
    </div>


</body>

</html>