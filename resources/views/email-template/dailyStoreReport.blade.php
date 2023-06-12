<!DOCTYPE html>
<html>

<head>
    <title>Daily Store Report</title>
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

        td,
        th {
            border-bottom: 1px solid gray;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <div style="text-align: center">
            <img src="{{ url('/images/logo-black.png') }}" alt="">
        </div>
        <div class="" style="width: 100%">
            <p class="bold-text"><b>No. of orders:</b> {{ $details['no_orders'] }}</p>
            <p class="bold-text"><b>Total Amount:</b> ${{ $details['total'] }}</p>
            <br>
            <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                <thead>
                    <tr>
                        <th class="bold-text" scope="col"
                            style="padding:5px; font-size: 16px; line-height:20px;line-height:30px;text-align:left">
                            Agent</th>
                        <th class="bold-text" scope="col-2"
                            style="padding:5px; font-size: 16px; line-height:20px;line-height:30px;text-align:left">
                            Product</th>
                        <th class="bold-text" scope="col-2"
                            style="padding:5px; font-size: 16px; line-height:20px;line-height:30px;text-align:left">
                            Amount</th>
                        <th class="bold-text" scope="col"
                            style="padding:5px; font-size: 16px; line-height:20px;line-height:30px;text-align:right">
                            Date / Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details['orders'] as $order)
                        <tr>
                            <td valign="top" style="padding:5px; font-size: 16px; line-height:20px;">
                                {{ $order['agent'] }}
                            </td>
                            <td valign="top" style="padding:5px; font-size: 16px; line-height:20px;">
                                @foreach ($order['products'] as $product)
                                    {{ $product }}
                                @endforeach
                            </td>
                            <td valign="top" style="padding:5px; font-size: 16px; line-height:20px;">
                                ${{ $order['amount'] }}
                            </td>
                            <td valign="top" style="padding:5px; font-size: 16px; line-height:20px;text-align:right">
                                {{ $order['created_at'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br><br>
        <div class="" style="width: 100%">
            <p class="bold-text"><b>No. of submissions:</b> {{ count($details['submissions']) }}</p>
            <br>
            <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                <thead>
                    <tr>
                        <th class="bold-text" scope="col"
                            style="padding:5px; font-size: 16px; line-height:20px;line-height:30px;text-align:left">
                            Agent Name</th>
                        <th class="bold-text" scope="col-2"
                            style="padding:5px; font-size: 16px; line-height:20px;line-height:30px;text-align:left">
                            Agent Email</th>
                        <th class="bold-text" scope="col-2"
                            style="padding:5px; font-size: 16px; line-height:20px;line-height:30px;text-align:left">
                            Form</th>
                        <th class="bold-text" scope="col"
                            style="padding:5px; font-size: 16px; line-height:20px;line-height:30px;text-align:right">
                            Date / Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details['submissions'] as $submission)
                        <tr>
                            <td valign="top" style="padding:5px; font-size: 16px; line-height:20px;">
                                {{ $submission['agent_name'] }}
                            </td>
                            <td valign="top" style="padding:5px; font-size: 16px; line-height:20px;">
                                {{ $submission['agent_email'] }}
                            </td>
                            <td valign="top" style="padding:5px; font-size: 16px; line-height:20px;">
                                {{ $submission['form_title'] }}
                            </td>
                            <td valign="top" style="padding:5px; font-size: 16px; line-height:20px;text-align:right">
                                {{ $submission['created_at'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="link">
                <a href="https://myluxehub.com">https://myluxehub.com/</a>
            </div>
        </div>
    </div>


</body>

</html>
