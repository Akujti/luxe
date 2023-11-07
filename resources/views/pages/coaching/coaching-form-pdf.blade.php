<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Petemoss&display=swap');

        @font-face {
            font-family: "gothicbold";
            src: local("gothicbold"),
            url("fonts/index-page/gothicbold.ttf") format("truetype");
        }

        @font-face {
            font-family: "gothicregular";
            src: local("gothicregular"),
            url("fonts/index-page/gothicregular.ttf") format("truetype");
        }

        .title .h1 {
            text-align: center;
            text-decoration: underline;
            font-size: 20px;
        }

        .title p {
            font-family: 'gothicregular';
        }

        .box-items {
            font-family: 'gothicregular';
            font-size: 18px;
        }

        .btn-luxe {
            border-radius: 10px;
            cursor: pointer;
        }

        .coaching-text p {
            font-size: 17px;
        }

        .inputs input {
            border: none;
            border-bottom: 1px solid #262626;
            width: 420px;
        }

        .inputs .date {
            border: none;
            border-bottom: 1px solid #262626;
            width: 420px;
        }

        .inputs input:focus {
            outline: none !important;
            box-shadow: 5px 10px transparent !important;
        }

        .inputs .signature {
            font-family: Petemoss;
            font-size: 28px;
            width: 420px;
        }

        .gothicbold {
            font-family: 'gothicbold' !important;
        }

        .rounded {
            border: 1px solid black;
            border-radius: 10px;
            padding: 4px;
        }

        .form-control {
            margin-bottom: -20px;
        }
    </style>
</head>

<body>
<div class="container-fluid">
    <div class="col-12 title mb-3">
        <div class="d-flex justify-content-center mb-3">
            <center><img src="images/logo-black.png" height="80px" alt=""></center>
        </div>
        <div class="gothicbold h1" style="margin-top:20px;">LUXE COACHING - 30 DAYS TO SUCCESS ACCOUNTABILITY
            AGREEMENT
        </div>
        <p>This agreement outlines the terms and conditions of the $100 deposit for the
            coaching program.</p>
        <p>30 Days to Success Accountability program will be hosted at the Kendall Office
            from 10:30am- 12:30pm Monday through Friday. There are 20 instructional
            days of the 30 days from the start date of the program. Weekends are meant
            for independent work provided by your coach.</p>
        <p>Your $100 deposit will be returned to you after the 30 Days to Success is
            completed. The refund is contingent upon the following conditions being met:
            16 of the 20 instructional days must be completed and 2 hours need to be
            completed on each instructional day.</p>
        <p>If you fail to attend the minimum required day within the specified time above,
            a refund will not be issued.</p>
    </div>
    <div class="row box-items py-4">
        <div class="col-12 col-md-12 col-lg-7 coaching-text">
            <div class="inputs" style="margin-top:150px;margin-left:5px;">
                <div class="input-group mb-3" style="margin-bottom: 15px">
                    <input type="text" name="full_name" class="form-control" value="{{ $full_name }}">
                    <p style="font-size:16px;margin:0;margin-bottom:40px;">NAME</p>
                </div>
                <div class="input-group mb-3" style="margin-bottom: 15px">
                    <input type="text" name="signature" class="form-control signature"
                           value="{{ $full_name }}">
                    <p style="font-size:16px;margin:0;margin-bottom:40px;">SIGNATURE</p>
                </div>
                <div class="input-group mb-3" style="margin-bottom: 15px">
                    <input type="text" name="date" class="form-control date" value="{{ $date_signed }}">
                    <p style="font-size:16px;margin:0;margin-bottom:40px;">DATE SIGNED</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
