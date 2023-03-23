@extends('layouts.app')
@section('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

    <style>
        table .input input,
        .disabled {
            background-color: #e7e7e7;
            border: 1px solid #e7e7e7;
            width: 100%;
            padding: 7px;
        }

        table .bg-success {
            background-color: #262626 !important;
            padding: 7px;
        }

        table .bg-danger {
            background-color: #262626 !important;
            padding: 7px;
        }

        table .bg-warning {
            background-color: #262626 !important;
            padding: 7px;
        }

        table {
            font-family: 'gothicregular';
        }

        table th {
            font-family: 'gothicbold';
        }

        table .underline {
            text-decoration: underline;
        }

        .title h1 {
            font-family: 'gothicbold';
            text-align: center;
        }

        #net-operating-income {
            padding: 7px;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8 mb-4">
                <div class="w-100 p-1" id="el">
                    <div class="mb-3 row justify-content-between">
                        <div class="col-10">
                            <h1>CAP RATE CALCULATOR</h1>
                        </div>
                        <div class="col-2 d-flex justify-content-end">
                            <img src="/images/favicon.png" alt="" width="55px" height="55px">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 mb-4">
                            <div class="w-100 p-1" id="el">
                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <th class="underline">INCOME</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Rents</td>
                                            <td class="input"><input type="text" id="b4" onchange="calculate()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Less: Vacancy Loss</td>
                                            <td class="input"><input type="text" id="b5" onchange="calculate()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Common Area Maintenance</td>
                                            <td class="input"><input type="text" id="b6" onchange="calculate()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Other Income</td>
                                            <td class="input"><input type="text" id="b7" onchange="calculate()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="bg-success text-white">Gross Income</th>
                                            <td class="bg-success text-white" id="gross-income">$0.00</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th class="underline">EXPENSES</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Property Taxes</td>
                                            <td class="input"><input type="text" id="b11" onchange="calculate()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Property Insurance</td>
                                            <td class="input"><input type="text" id="b12" onchange="calculate()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maintenance & Repairs</td>
                                            <td class="input"><input type="text" id="b13" onchange="calculate()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Property Management Fees</td>
                                            <td class="input"><input type="text" id="b14" onchange="calculate()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Utilities</td>
                                            <td class="input"><input type="text" id="b15" onchange="calculate()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Capital Expenditures Reserve</td>
                                            <td class="input"><input type="text" id="b16" onchange="calculate()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="bg-danger text-white">Total Expenses</th>
                                            <td class="bg-danger text-white" id="total-expenses">$0.00</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Net Operating Income</td>
                                            <td class="">
                                                <div id="net-operating-income" class="disabled"> $0.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Property Value/Purchase Price</td>
                                            <td class="input"><input type="text" id="b20" onchange="calculate()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Capitalization Rate</th>
                                            <th class="">
                                                <div id="capitalization-rate" class="disabled">0.00%</div>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <button class="btn-luxe w-100 my-4" onclick="submitPDF()">Generate</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/themes/main.js') }}"></script>

@section('js')
    <script>
        function updateTextView(_obj) {
            var num = getNumber(_obj.val());
            if (num == 0) {
                _obj.val('');
            } else {
                _obj.val(num.toLocaleString());
            }
        }

        function getNumber(_str) {
            var arr = _str.split('');
            var out = new Array();
            for (var cnt = 0; cnt < arr.length; cnt++) {
                if (isNaN(arr[cnt]) == false) {
                    out.push(arr[cnt]);
                }
            }
            return Number(out.join(''));
        }

        $(document).ready(function() {
            $('input[type=text]').on('keyup', function() {
                updateTextView($(this));
            });
        });

        function parseNumber(param) {
            return Number(param.replace(',', ''))
        }

        function calculate() {
            var [b4, b5, b6, b7, b11, b12, b13, b14, b15, b16, b20] = [
                parseNumber($('#b4').val()),
                parseNumber($('#b5').val()),
                parseNumber($('#b6').val()),
                parseNumber($('#b7').val()),
                parseNumber($('#b11').val()),
                parseNumber($('#b12').val()),
                parseNumber($('#b13').val()),
                parseNumber($('#b14').val()),
                parseNumber($('#b15').val()),
                parseNumber($('#b16').val()),
                parseNumber($('#b20').val()),
            ]

            // Gross Income calculator
            var gross_income = $('#gross-income');

            var gross_result = parseFloat(b4 - b5 + b6 + b7);
            gross_income.html("$" + (isNaN(gross_result) ? '0.00' : gross_result.toLocaleString()));

            // Total Expenses calculator
            var total_expenses = $('#total-expenses');

            var total_expenses_result = parseFloat(b11 + b12 + b13 + b14 + b15 + b16);
            console.log(b11);
            console.log(b12);
            console.log(b13);
            console.log(b14);
            console.log(b15);
            console.log(b16);
            total_expenses.html("$" + (isNaN(total_expenses_result) ? '0.00' : total_expenses_result.toLocaleString()));

            // Net Operating Income calculator
            var net_operating_income = $('#net-operating-income');

            var net_operating_income_result = parseFloat(gross_result - total_expenses_result);
            net_operating_income.html("$" + (isNaN(net_operating_income_result) ? '0.00' : net_operating_income_result
                .toLocaleString()));


            // Capitalization Rate calculator
            var capitalization_rate = $('#capitalization-rate');

            if (b20 == 0) {
                capitalization_rate.html('0.00%');
            } else {
                var capitalization_rate_result = percentage(net_operating_income_result, b20.toFixed(2));
                capitalization_rate.html((isNaN(capitalization_rate_result) ? '0.00' : capitalization_rate_result
                    .toLocaleString()) + '%');
            }

        }

        function percentage(partialValue, totalValue) {
            return (100 * partialValue) / totalValue;
        }

        function submitPDF() {
            calculate()
            generatePDF(166, 200, '', 'Cap Rate Calculator')
        }
    </script>
@endsection
@endsection
