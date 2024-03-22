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
    <div class="" style="width: 100%">
        @if ($details['type'] == 'admin')
            <div class="box">
                <h3>A new order has been added</h3>
                @if ($details['products'])
                    @foreach ($details['products'] as $rowProduct)
                        @if ($rowProduct->product->verbiages_text)
                            <p class="border-bottom pb-3 text-center">{{ $rowProduct->product->verbiages_text }}</p>
                        @endif
                    @endforeach
                @endif
                <h5><a href="{{ route('admin.orders.show', $details['data']->id) }}">Go to orders</a></h5>
            </div>
        @else
            <div class="box">
                <h3>The order has been successfully created - #{{ $details['data']->id }}</h3>
                @if ($details['is_marketing_menu_order'])
                    <p class="text-center bold-text ">Templated requests:</p>
                    <p class="text-center">1-2 business days turnaround</p>
                    <p class="text-center">Examples: Email signature, email blast templates, door hangers.</p>
                    <br>
                    <p class="text-center bold-text ">Custom requests:</p>
                    <p class="text-center">Expect email communication from Marketing Dept within 2 business days.
                        Project turnaround time TBD based on request.</p>
                    <p class="text-center">Examples: Brand package, custom designs, logos</p>
                @endif
                @if ($details['products'])
                    @foreach ($details['products'] as $rowProduct)
                        @if ($rowProduct->product->verbiages_text)
                            <p class="border-bottom pb-3 text-center">{{ $rowProduct->product->verbiages_text }}</p>
                        @endif
                    @endforeach
                @endif
                <h5 class="bold-text">Thank you.</h5>
            </div>
        @endif
        <div class="link">
            <a href="https://myluxehub.com">https://myluxehub.com/</a>
        </div>
    </div>
</div>
</body>

</html>
<style>
    .border-bottom {
        border-bottom: 1px solid black;
    }

    .pb-3 {
        padding-bottom: 15px !important;
    }

    .text-center {
        text-align: center;
    }
</style>
