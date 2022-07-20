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
    #net-operating-income {
        padding: 7px;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="title mb-3 w-100">
        <h1>CAP RATE CALCULATOR</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-lg-7 col-xl-5 mb-4">
            <div class="w-100 p-1" id="el">
                <table class="w-100">
                    <tbody>
                        <tr>
                            <th class="underline">INCOME</th>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Rents</td>
                            <td class="input"><input type="text" id="b4" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <td>Less: Vacancy Loss</td>
                            <td class="input"><input type="text" id="b5" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <td>Common Area Maintenance</td>
                            <td class="input"><input type="text" id="b6" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <td>Other Income</td>
                            <td class="input"><input type="text" id="b7" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <th class="bg-success text-white">Gross Income</th>
                            <td class="bg-success text-white text-right" id="gross-income">$0.00</td>
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
                            <td class="input"><input type="text" id="b11" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <td>Property Insurance</td>
                            <td class="input"><input type="text" id="b12" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <td>Maintenance & Repairs</td>
                            <td class="input"><input type="text" id="b13" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <td>Property Management Fees</td>
                            <td class="input"><input type="text" id="b14" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <td>Utilities</td>
                            <td class="input"><input type="text" id="b15" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <td>Capital Expenditures Reserve</td>
                            <td class="input"><input type="text" id="b16" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <th class="bg-danger text-white">Total Expenses</th>
                            <td class="bg-danger text-white text-right" id="total-expenses">$0.00</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Net Operating Income</td>
                            <td class="text-right" id="net-operating-income">$0.00</td>
                        </tr>
                        <tr>
                            <td>Property Value/Purchase Price</td>
                            <td class="input"><input type="text" id="b20" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <th>Capitalization Rate</th>
                            <th class="bg-warning text-right" id="capitalization-rate">0.00%</th>
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
        var [b4, b5, b6, b7, b11, b12, b13, b14, b15, b16, b20] = [
            parseFloat($('#b4').val()),
            parseFloat($('#b5').val()),
            parseFloat($('#b6').val()),
            parseFloat($('#b7').val()),
            parseFloat($('#b11').val()),
            parseFloat($('#b12').val()),
            parseFloat($('#b13').val()),
            parseFloat($('#b14').val()),
            parseFloat($('#b15').val()),
            parseFloat($('#b16').val()),
            parseFloat($('#b20').val()),
        ]

        // Gross Income calculator
        var gross_income = $('#gross-income');

        var gross_result = parseFloat(b4 - b5 + b6 + b7);
        gross_income.html("$" + (isNaN(gross_result) ? '0.00' : gross_result.toFixed(2)));

        // Total Expenses calculator
        var total_expenses = $('#total-expenses');

        var total_expenses_result = parseFloat(b11 + b12 + b13 + b14 + b15 + b16);
        total_expenses.html("$" + (isNaN(total_expenses_result) ? '0.00' : total_expenses_result.toFixed(2)));

        // Net Operating Income calculator
        var net_operating_income = $('#net-operating-income');

        var net_operating_income_result = parseFloat(gross_result - total_expenses_result);
        net_operating_income.html("$" + (isNaN(net_operating_income_result) ? '0.00' : net_operating_income_result.toFixed(2)));


        // Capitalization Rate calculator
        var capitalization_rate = $('#capitalization-rate');
        
        if(b20 == 0) {
            capitalization_rate.html('0.00%');
        } else {
            var capitalization_rate_result = percentage(net_operating_income_result, b20.toFixed(2));
            capitalization_rate.html((isNaN(capitalization_rate_result) ? '0.00' : capitalization_rate_result.toFixed(2)) + '%');
        }
        
    }

    function percentage(partialValue, totalValue) {
        return (100 * partialValue) / totalValue;
    } 

    function submitPDF() {
        calculate()
        generatePDF(166, 200)
    }
</script>
@endsection
@endsection