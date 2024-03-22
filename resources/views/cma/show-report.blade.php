<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMA Report</title>
    <style>
        embed {
            height: 98vh;
        }
    </style>
</head>
<body>
<embed
    src="{{$report->report_url}}"
    type="application/pdf"
    width="100%"/>
</body>
</html>

