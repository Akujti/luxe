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

    </style>
</head>

<body>
    <div class="wrap">
        <div style="text-align: center">
            <img src="{{ url('/images/logo-black.png') }}" alt="" style="margin-bottom: 15px;">
        </div>
        <hr>
        <div class="" style="width: 100%">
            <div class="box" style="text-align: center">
                <h3>Add this event to your calendar</h3>
                <p><b>Title:</b> {{ $details['event']->title }}</p>
                <p><b>Location:</b> {{ $details['event']->title }}</p>
                <p><b>Start Time:</b> {{ $details['event']->fullDate . ' - ' . $details['event']->start_time }}</p>
                <p><b>End Time:</b> {{ $details['event']->fullDate . ' - ' . $details['event']->end_time }}</p>
            </div>
            <div class="link">
                <a href="https://myluxehub.com">https://myluxehub.com/</a>
            </div>
        </div>
    </div>
</body>

</html>
