<!DOCTYPE html>
<html>

<head>
    <title>{{$details['title']}}</title>
    <!-- CSS only -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap');

        * {
            font-family: Lato;
            font-weight: 400;
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

        img {
            max-width: 100%;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <div style="text-align: center">
            <img src="http://project.myluxehub.com/images/logo.png" alt="">
        </div>
        <div class="" style="width: 100%">
            <p class="bold-text"><b>Room:</b> {{ $details['room'] }}</strong></p>
            <p class="bold-text"><b>Name:</b> {{ $details['name'] }}</strong></p>
            <p class="bold-text"><b>E-Mail:</b> {{$details['email']}}</p>
            <p class="bold-text"><b>Number:</b> {{$details['phone']}}</p>
            <p class="bold-text"><b>Start:</b> {{$details['start']}}</p>
            <p class="bold-text"><b>End:</b> {{$details['end']}}</p>
            <div class="link">
                <a href="https://myluxehub.com/">https://myluxehub.com/</a>
            </div>
        </div>
    </div>


</body>

</html>