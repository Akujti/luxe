<!DOCTYPE html>
<html>

<head>
    <title>{{ $details['yearly_title'] }}</title>
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
            <img src="{{ url('/images/logo-black.png') }}" alt="">
        </div>
        <div class="" style="width: 100%;text-align:center">
            <p class="bold-text"><b>{{ date('Y') }} Top Producer Badge:</b> {{ $details['yearly_title'] }}</p>
            <hr>
            <div class="link">
                <a href="https://myluxehub.com">https://myluxehub.com/</a>
            </div>
        </div>
    </div>


</body>

</html>
