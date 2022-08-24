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
        }

        h5 {
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <div style="text-align: center">
            <img src="{{ url('/images/logo-black.png') }}" alt="">
        </div>
        <hr>
        <p><span class="bold-text">Service</span>: {{ $details['service'] }}</p>
        <p><span class="bold-text">Address</span>: {{ $details['address'] }}</p>
        <p><span class="bold-text">Date</span>: {{ $details['date'] }}</p>
        <hr>
        <div class="" style="width: 100%">
            <div class="box">
                <h3>Requesting Agent</h3>
                <hr>
                <p>Email: {{ $details['agent']->email }}&nbsp;</p>
                <p>Phone: {{ $details['agent']->profile->phone }}&nbsp;</p>
                <p>Languages:
                    @if ($details['agent']->profile->languages)
                        @foreach ($details['agent']->profile->languages as $language)
                            <span>{{ $language }} @if (!$loop->last)
                                    ,
                                @endif
                            </span>
                        @endforeach
                    @endif
                    &nbsp;
                </p>
                <p>Address: {{ $details['agent']->profile->address }}</p>
                <hr>
            </div>
            <div class="box">
                <h3>Showing Agent</h3>
                <hr>
                <p>Email: {{ $details['showing_agent']->email }}&nbsp;</p>
                <p>Phone: {{ $details['showing_agent']->profile->phone }}&nbsp;</p>
                <p>Languages:
                    @if ($details['showing_agent']->profile->languages)
                        @foreach ($details['showing_agent']->profile->languages as $language)
                            <span>{{ $language }} @if (!$loop->last)
                                    ,
                                @endif
                            </span>
                        @endforeach
                    @endif
                    &nbsp;
                </p>
                <p>Address: {{ $details['showing_agent']->profile->address }}</p>
            </div>
            <div class="link">
                <a href="https://myluxehub.com">https://myluxehub.com/</a>
            </div>
        </div>
    </div>
</body>

</html>
