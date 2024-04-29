@extends('layouts.app')
@section('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

    <style>
        table .input input,
        .disabled {
            width: 100%;
            padding: 7px;
            background-color: #e7e7e7;
            border: 1px solid #e7e7e7;
        }

        table .bg-color {
            background-color: #262626 !important;
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
            text-align: center;
        }

        .row * {
            font-family: Montserrat;
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
                            <h1>Fix & Flip Calculator</h1>
                        </div>
                        <div class="col-2 d-flex justify-content-end">
                            <img src="/images/favicon.png" alt="" width="55px" height="55px">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 mb-4">
                            <div class="w-100 p-1">
                                <table class="w-100">
                                    <tbody>
                                    <tr>
                                        <th class="bg-color text-white">Variables ( Fill These in)</th>
                                        <td class="bg-color text-white"></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Acquisition Price ($ Amount)</th>
                                        <td class="input"><input type="text" id="b2" onchange="calculate()">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Holding Time (Months)</th>
                                        <td class="input"><input type="text" id="b3" onchange="calculate()">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Repair Costs ($ Amount)</th>
                                        <td class="input"><input type="text" id="b4" onchange="calculate()">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Projected Sales Price ($ Amount)</th>
                                        <td class="input"><input type="text" id="b5" onchange="calculate()">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Interest Rate(Percentage %, if cash put 0)</th>
                                        <td class="input"><input type="text" id="b6" onchange="calculate()">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>LTV (Percentage %)</th>
                                        <td class="input"><input type="text" id="b7" onchange="calculate()">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Closing Costs on Sale ($ Amount)</th>
                                        <td class="input"><input type="text" id="b8" onchange="calculate()">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th class="bg-color text-white">Cost Calculations</th>
                                        <td class="bg-color text-white"></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Closing Costs Purchase</th>
                                        <td class="">
                                            <div id="closing-costs-purchase" class="disabled">$0.00</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Closing Costs Sale</th>
                                        <td class="">
                                            <div id="closing-costs-sale" class="disabled">$0.00</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Interest Only Mortgage Payments</th>
                                        <td class="">
                                            <div id="interest-only-mortgage-payments" class="disabled">$0.00</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Profit</th>
                                        <td class="">
                                            <div id="profit" class="disabled">$0.00</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>ROI</th>
                                        <td class="">
                                            <div id="roi" class="disabled">0.00%</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn-luxe w-100 my-4" onclick="submitPDF()">Generate</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/themes/main.js') }}"></script>

    @section('js')
        <script>
            function updateTextView (_obj) {
                var num = getNumber(_obj.val())
                if (num == 0) {
                    _obj.val('')
                } else {
                    _obj.val(num.toLocaleString())
                }
            }

            function getNumber (_str) {
                var arr = _str.split('')
                var out = new Array()
                for (var cnt = 0; cnt < arr.length; cnt++) {
                    if (isNaN(arr[cnt]) == false) {
                        out.push(arr[cnt])
                    }
                }
                return Number(out.join(''))
            }

            $(document).ready(function () {
                $('input[type=text]').on('keyup', function () {
                    updateTextView($(this))
                })
            })

            function parseNumber (param) {
                return Number(param.replace(',', ''))
            }

            function calculate () {
                var [b2, b3, b4, b5, b6, b7, b8] = [
                    parseNumber($('#b2').val()),
                    parseNumber($('#b3').val()),
                    parseNumber($('#b4').val()),
                    parseNumber($('#b5').val()),
                    parseNumber($('#b6').val()),
                    parseNumber($('#b7').val()),
                    parseNumber($('#b8').val()),
                ]

                // Closing Casts Purchase calculator
                var closing_costs_purchase = $('#closing-costs-purchase')

                var closing_costs_purchase_result = parseFloat(b2 * 0.0125)
                closing_costs_purchase.html('$' + (isNaN(closing_costs_purchase_result) ? '0.00' : closing_costs_purchase_result
                    .toLocaleString()))

                // Closing Costs Rate calculator
                var closing_costs_sale = $('#closing-costs-sale')

                var closing_costs_sale_result = parseFloat(b5 * (b8 / 100))
                closing_costs_sale.html('$' + (isNaN(closing_costs_sale_result) ? '0.00' : closing_costs_sale_result
                    .toLocaleString()))

                // Interest only mortgage payments calculator
                var interest_only_mortgage_payments = $('#interest-only-mortgage-payments')

                var interest_only_mortgage_payments_result = parseFloat((((b2 * (b7 / 100)) * (b6 / 100)) / 12) * b3)
                interest_only_mortgage_payments.html('$' + (isNaN(interest_only_mortgage_payments_result) ? '0.00' :
                    interest_only_mortgage_payments_result.toLocaleString()))

                // Profit calculator
                var profit = $('#profit')

                var profit_result = parseFloat((((b5 - closing_costs_sale_result) - b4) - b2) -
                    interest_only_mortgage_payments_result)

                profit.html('$' + (isNaN(profit_result) ? '0.00' : profit_result.toLocaleString()))

                // ROI calculator
                var roi = $('#roi')

                var roi_result = percentage(profit_result.toFixed(2), (b2 * (1 - (b7 / 100)) + b4 +
                    closing_costs_purchase_result))

                console.log(roi_result)
                roi.html((isNaN(roi_result) ? '0.00' : roi_result.toLocaleString()) + '%')

            }

            function percentage (partialValue, totalValue) {
                return (100 * partialValue) / totalValue
            }

            function submitPDF () {
                calculate()
                generatePDF(166, 220, '', 'Fix & Flip Calculator')
            }
        </script>
    @endsection
@endsection
