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
            <img src="{{ url('/images/logo-black.png') }}" alt="">
        </div>
        <hr>
        @if($details['order']->status == 'Completed')
        <div class="" style="width: 100%">
            <div class="box">
                <h3>Your <a href="{{ route('my_orders.show', $details['order']->id) }}">order</a> has been
                    completed -
                    <a href="{{ route('my_orders.show', $details['order']->id) }}">#{{ $details['order']->id }}</a>
                </h3>

                <h5>Thanks for the purchase.</h5>
            </div>
            <div class="link">
                <a href="https://myluxehub.com">https://myluxehub.com/</a>
            </div>
        </div>
        @elseif($details['order']->status == 'Updated Info')
        <div class="" style="width: 100%">
            <div class="box">
                <h3>The <a href="{{ route('admin.orders.show', $details['order']->id) }}">order</a> has changed -
                    <a href="{{ route('admin.orders.show', $details['order']->id) }}">#{{ $details['order']->id }}</a>
                </h3>
                <p style="text-align:center">{{ $details['order']->request_info_response }}</p>
            </div>
            <div class="link">
                <a href="https://myluxehub.com">https://myluxehub.com/</a>
            </div>
        </div>
        @else
        <div class="" style="width: 100%">
            <div class="box">
                @if($details['order']->status == 'Request Info')
                <h3>Your <a href="{{ route('my_orders.edit', $details['order']->id) }}">order</a> status is <b>{{ $details['order']->status }}</b> -
                    <a href="{{ route('my_orders.edit', $details['order']->id) }}">#{{ $details['order']->id }}</a>
                </h3>
                    <p style="text-align:center">{{ $details['order']->request_info }}</p>
                @else
                <h3>Your <a href="{{ route('my_orders.show', $details['order']->id) }}">order</a> status is <b>{{ $details['order']->status }}</b> -
                    <a href="{{ route('my_orders.show', $details['order']->id) }}">#{{ $details['order']->id }}</a>
                </h3>
                @endif
            </div>
            <div class="link">
                <a href="https://myluxehub.com">https://myluxehub.com/</a>
            </div>
        </div>
        @endif
    </div>
</body>

</html>
