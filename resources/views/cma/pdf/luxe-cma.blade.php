<!DOCTYPE html>
<html>

<head>
    <title>CMA Report</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');

        :root {
            --gold: #C6A467;
        }

        * {
            font-family: Montserrat, serif;
            font-weight: 400;
        }

        h1.title {
            font-size: 27px;
            border-bottom: 2px solid #C6A467;
        }

        .p-0 {
            padding: 0;
        }

        .m-0 {
            margin: 0;
        }

        .w-100 {
            width: 100%;
        }

        table {
            font-size: 10px;
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
        }

        th.border-top-theme {
            border-top: 1px solid #C6A467;
        }

        th.border-top-black {
            border-top: 1px solid black;
        }

        th.border-side-black {
            border-left: 1px solid black;
            border-right: 1px solid black;
        }

        th.border-side-theme {
            border-left: 1px solid #C6A467;
            border-right: 1px solid #C6A467;
        }

        th:first-child {
            border-top: none;
        }

        th:last-child {
            border-right: 1px solid #C6A467;
        }

        td {
            border: 1px solid #C6A467;
        }

        td:first-child {
            border-left: none;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }

        .text-left {
            text-align: left;
        }

        .text-white {
            color: white;
        }

        .text-theme {
            color: #C6A467;
        }

        .bg-black {
            background-color: black;
        }

        .bg-theme {
            background-color: #C6A467;
        }
    </style>
</head>

<body>
<div>
    <h1 class="p-0 m-0 title">COMPARABLE PROPERTIES</h1>
    <img
        src="{{$mapImage}}"
        alt="" class="w-100" style="filter: grayscale(1);margin-top:30px;margin-bottom:30px">
    <table>
        <thead>
        <tr>
            <th></th>
            <th class="bg-black border-top-black border-side-black text-white">MLS</th>
            <th class="border-top-theme">STATUS</th>
            <th class="bg-theme border-top-theme border-side-theme text-white">ADDRESS</th>
            <th class="border-top-theme">PRICE</th>
            <th class="bg-black border-top-black border-side-black text-white">BEDS</th>
            <th class="border-top-theme">BATHS</th>
            <th class="bg-theme border-top-theme border-side-theme text-white">H/BATHS</th>
            <th class="border-top-theme">SQFT</th>
        </tr>
        </thead>
        <tbody>
        @for($i=1;$i<7;$i++)
            <tr>
                <td>{{$i}}</td>
                <td>A10885273</td>
                <td><span>A</span></td>
                <td class="text-left">19126 Fisher Island Dr #19126 Miami Beach, FL 33109</td>
                <td>$25000</td>
                <td>3</td>
                <td>0</td>
                <td>0</td>
                <td>2,049</td>
            </tr>
        @endfor
        </tbody>
    </table>
</div>
</body>

</html>
