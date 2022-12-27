@extends('layouts.app')
@section('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

    <style>
        table .input input {
            background-color: #FFF2CC;
            border: 1px solid #FFF2CC;
            width: 100%;
            text-align: end;
            padding: 7px;
        }

        table .bg-success {
            background-color: #9BBB59 !important;
            padding: 7px;
        }

        table .bg-danger {
            background-color: #FF0000 !important;
            padding: 7px;
        }

        table .bg-warning {
            background-color: #FFFF00 !important;
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
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="title mb-3 w-100">
            <h1>AVR HOME INVESTMENT CALCULATOR</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 col-xl-5 mb-4">
                <div class="w-100 p-1" id="el">
                    <table class="w-100">
                        <tbody>
                            <tr>
                                <th class="bg-success text-white">Variables ( Fill These in)</th>
                                <td class="bg-success text-white"></td>
                            </tr>
                            <tr>
                                <th>Acquisition Price ($ Amount)</th>
                                <td class="input"><input type="text" id="b2" onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th>Holding Time (Months)</th>
                                <td class="input"><input type="text" id="b3" onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th>Repair Costs ($ Amount)</th>
                                <td class="input"><input type="text" id="b4" onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th>Porjected Sales Price ($ Amount)</th>
                                <td class="input"><input type="text" id="b5" onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th>Interest Rate(Percentage %, if cash put 0)</th>
                                <td class="input"><input type="text" id="b6" onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th>LTV (Percentage %)</th>
                                <td class="input"><input type="text" id="b7" onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th>Closing Costs on Sale ($ Amount)</th>
                                <td class="input"><input type="text" id="b8" onchange="calculate()"></td>
                            </tr>

                            <tr>
                                <td>&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class="bg-success text-white">Cost Calculations</th>
                                <td class="bg-success text-white"></td>
                            </tr>
                            <tr>
                                <th>Closing Costs Purchase</th>
                                <td class="text-right py-2" id="closing-costs-purchase">$0.00</td>
                            </tr>
                            <tr>
                                <th>Closing Costs Sale</th>
                                <td class="text-right py-2" id="closing-costs-sale">$0.00</td>
                            </tr>
                            <tr>
                                <th>Interest Only Mortgage Payments</th>
                                <td class="text-right py-2" id="interest-only-mortgage-payments">$0.00</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Profit</th>
                                <td class="text-right p-0 py-2" id="profit">$0.00</td>
                            </tr>
                            <tr>
                                <th>ROI</th>
                                <td class="text-right p-0 py-2" id="roi">0.00%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="btn-luxe w-100 my-4" onclick="submitPDF()">Generate</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/themes/main.js') }}"></script>

@section('js')
    <script>
        function calculate() {
            var [b2, b3, b4, b5, b6, b7, b8] = [
                parseFloat($('#b2').val()),
                parseFloat($('#b3').val()),
                parseFloat($('#b4').val()),
                parseFloat($('#b5').val()),
                parseFloat($('#b6').val()),
                parseFloat($('#b7').val()),
                parseFloat($('#b8').val()),
            ]

            // Closing Casts Purchase calculator
            var closing_costs_purchase = $('#closing-costs-purchase');

            var closing_costs_purchase_result = parseFloat(b2 * 0.0125);
            closing_costs_purchase.html("$" + (isNaN(closing_costs_purchase_result) ? '0.00' : closing_costs_purchase_result
                .toFixed(2)));

            // Closing Costs Rate calculator
            var closing_costs_sale = $('#closing-costs-sale');

            var closing_costs_sale_result = parseFloat(b5 * (b8 / 100));
            closing_costs_sale.html("$" + (isNaN(closing_costs_sale_result) ? '0.00' : closing_costs_sale_result.toFixed(
                2)));

            // Interest only mortgage payments calculator
            var interest_only_mortgage_payments = $('#interest-only-mortgage-payments');

            var interest_only_mortgage_payments_result = parseFloat((((b2 * (b7 / 100)) * (b6 / 100)) / 12) * b3);
            interest_only_mortgage_payments.html("$" + (isNaN(interest_only_mortgage_payments_result) ? '0.00' :
                interest_only_mortgage_payments_result.toFixed(2)));


            // Profit calculator
            var profit = $('#profit');

            var profit_result = parseFloat((((b5 - closing_costs_sale_result) - b4) - b2) -
                interest_only_mortgage_payments_result);

            profit.html("$" + (isNaN(profit_result) ? '0.00' : profit_result.toFixed(2)));

            // ROI calculator
            var roi = $('#roi');

            var roi_result = percentage(profit_result.toFixed(2), (b2 * (1 - (b7 / 100)) + b4 +
                closing_costs_purchase_result));

            console.log(roi_result);
            roi.html((isNaN(roi_result) ? '0.00' : roi_result.toFixed(2)) + "%");

        }

        function percentage(partialValue, totalValue) {
            return (100 * partialValue) / totalValue;
        }

        function submitPDF() {
            calculate()
            generatePDF(166, 170)
        }
    </script>
@endsection
@endsection
