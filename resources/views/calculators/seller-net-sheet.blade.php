@extends('layouts.app')
@section('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

    <style>
        .input input,
        .disabled {
            background-color: #e7e7e7;
            border: 1px solid #e7e7e7;
            width: 100%;
            /* text-align: end; */
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

        table .underline {
            text-decoration: underline;
        }

        .table-bottom td {
            width: 200px;
        }

        .border-wrapper {
            background-color: #262626;
            height: 10px;
            width: 100%;
        }

        .input-trans {
            background: transparent !important;
            border: 1px solid black !important;
            /* border-bottom: 1px solid black !important; */
        }

        .input-bottom {
            background: transparent !important;
            border: 1px solid transparent !important;
            border-bottom: 1px solid black !important;
        }

        .row * {
            font-family: Montserrat;
        }

        td,
        th {
            font-size: 14px;
        }

        td {
            /* padding: 0; */
        }

        .input-box {
            display: flex;
            align-items: center;
            max-width: 300px;
            background: #fff;
            border: 1px solid #a0a0a0;
            border-radius: 4px;
            padding-left: 0.5rem;
            overflow: hidden;
            font-family: sans-serif;
        }

        .input-box .prefix {
            font-weight: 300;
            font-size: 14px;
            color: #999;
        }

        .input-box input {
            flex-grow: 1;
            font-size: 14px;
            background: #fff;
            border: none;
            outline: none;
            padding: 0.5rem;
        }

        .input-box:focus-within {
            border-color: #777;
        }

        .dollar-sign::before {
            content: '$';
            position: absolute;
            top: 39px;
            left: 25px;
        }

        .dollar-input {
            padding-left: 23px
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
                            <h1>SELLER NET CALCULATOR</h1>
                        </div>
                        <div class="col-2 d-flex justify-content-end">
                            <img src="/images/favicon.png" alt="" width="55px" height="55px">
                        </div>
                    </div>
                    <h4>Information</h4>
                    <div class="row mb-2">
                        <div class="form-group col-md-4">
                            <label for="name">NAME</label>
                            <input type="text" class="form-control simple-input" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">PROPERTY ADDRESS</label>
                            <input id="property-address" type="text" class="form-control simple-input" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">SALES PRICE</label>
                            <input type="text" id="c6" value="0" onchange="calculate()" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <td class="">CLOSING MONTH (2 DIGITS):</td>
                                        <td class="input"><input type="number" id="c7" value="0"
                                                onchange="calculate()"></td>
                                    </tr>
                                    <tr>
                                        <td class="">DAY OF CLOSING (2 DIGITS):</td>
                                        <td class="input"><input type="number" id="c8" value="0"
                                                onchange="calculate()"></td>
                                    </tr>
                                    <tr>
                                        <td class=""> UNPAID PROPERTY TAX FOR CURRENT YEAR:</td>
                                        <td class="input"><input type="text" id="c9" value="0"
                                                onchange="calculate()"></td>
                                    </tr>
                                    <tr>
                                        <td class="">REAL ESTATE PROFESSIONAL SERVICES %</td>
                                        <td class="input"><input type="number" id="c10" value="0"
                                                onchange="calculate()"></td>
                                    </tr>
                                    <tr>
                                        <td class="">OTHER REAL ESTATE BROKER OR AGENT FEES:</td>
                                        <td class="input"><input type="text" id="c11" value="0"
                                                onchange="calculate()"></td>
                                    </tr>
                                    <tr>
                                        <td class="">ARE YOU PAYING THE OWNERS POLICY</td>
                                        <td class="input" style="padding-top: 7px;padding-bottom:7px;"><input
                                                type="checkbox" style="width: auto;" id="owner-policy-checkbox"
                                                onchange="calculate()">
                                            <label class="m-0">Check for
                                                yes</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">IS IT LOCATED IN MIAMI-DADE</td>
                                        <td class="input" style="padding-top: 7px;"><input type="checkbox"
                                                style="width: auto;" id="miami-dade-checkbox" onchange="calculate()">
                                            <label class="m-0">Check for
                                                yes</label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <table class="w-100 table-bottom">
                        <tbody>
                            <tr style="background: #262626;">
                                <th class="text-white py-2 px-1">ITEM</th>
                                <th class="text-white py-2">PRICE</th>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <th class="py-2">Tax Proration [Jan 1st to Close]</th>
                                <td>
                                    <div id="tax-proration" class="disabled">$ -</div>
                                </td>
                            </tr>
                            <tr>
                                <th>Seller Concessions</th>
                                <td class="input">
                                    <input type="text" id="g14" value="0" onchange="calculate()">
                                </td>
                            </tr>
                            <tr>
                                <th>VA / FHA Fees</th>
                                <td class="input"><input type="text" id="g15" value="0"
                                        onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th>Closing Fee</th>
                                <td class="input"><input type="text" id="g16" value="0"
                                        onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th class="py-2">Owner's Title Policy</th>
                                <td>
                                    <div id="owners-title-policy" class="disabled">$ -</div>
                                </td>
                            </tr>
                            <tr>
                                <th>Real Estate Professional Services</th>
                                <td>
                                    <div id="real-estate" class="disabled">$ -</div>
                                </td>
                            </tr>
                            <tr>
                                <th>Doc Stamps on the Deed</th>
                                <td>
                                    <div id="doc-stamps" class="disabled">$ -</div>
                                </td>
                            </tr>
                            <tr>
                                <th>Mortgage Payoff</th>
                                <td class="input"><input type="text" id="g20" value="0"
                                        onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th>Second Mortgage Payoff</th>
                                <td class="input"><input type="text" id="g21" value="0"
                                        onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th>COA / HOA Dues / Assessments </th>
                                <td class="input"><input type="text" id="g22" value="0"
                                        onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th>COA / HOA Estoppel Certificate</th>
                                <td class="input"><input type="text" id="g23" value="0"
                                        onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th>Recording and Other Fees Needed to Cure Title</th>
                                <td class="input"><input type="text" id="g24" value="0"
                                        onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th>Lien Search / Title Search</th>
                                <td class="input"><input type="text" id="g25" value="0"
                                        onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th>Property Taxes Owing from Previous Year(s)</th>
                                <td class="input"><input type="text" id="g26" value="0"
                                        onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th>Miscellaneous</th>
                                <td class="input"><input type="text" id="g27" value="0"
                                        onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <td></td>
                            </tr>

                            <tr>
                                <td class=" font-italic" style="font-size: 20px;width: auto;">Estimated Total
                                    Deductions: &nbsp;</td>
                                <td id="estimated-total" style="font-size: 20px;">$ -</td>
                            </tr>
                            <tr>
                                <th class="" style="font-size: 23px;">ESTIMATED NET TO SELLER: &nbsp;</th>
                                <th id="estimated-net" style="font-size: 23px;">$ -</th>
                            </tr>
                            <tr>
                                <td class="w-100" colspan="2" style="font-size: 10px">LUXE PROPERTIES, LLC ASSUMES NO
                                    LIABILITY FOR ANY ERRORS AND/OR OMISSIONS FOR INFORMATION CONTAINED HEREIN. This
                                    estimated net proceeds to seller is based on the seller paying the usual and customary
                                    closing costs per the FAR/BAR contracts in Central and North Florida. Seller
                                    acknowledges that this is an ESTIMATE ONLY and NOT A GUARANTEE.
                                    <br>
                                    Best regards!
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>

                            {{-- <tr>
                                <td>Dated: <input type="text" class="input-bottom"></td>
                                <td>Dated: <input type="text" class="input-bottom"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Signed: <input type="text" class="input-bottom"></td>
                                <td>Signed: <input type="text" class="input-bottom"></td>
                            </tr> --}}
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
        function updateTextView(_obj) {
            var num = getNumber(_obj.val());
            if (num == 0) {
                _obj.val('$');
            } else {
                _obj.val('$' + num.toLocaleString());
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
            $('input[type=text]').not(".simple-input").on('keyup', function() {
                updateTextView($(this));
            });
        });

        function parseNumber(param) {
            return Number(param.replace(',', ''))
        }

        function calculate() {
            console.log('----');
            console.log($('#miami-dade-checkbox').is(":checked"));
            var [c6, c7, c8, c9, c10, c11, g14, g15, g16, g20, g21, g22, g23, g24, g25, g26, g27] = [
                parseNumber($('#c6').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#c7').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#c8').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#c9').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#c10').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#c11').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#g14').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#g15').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#g16').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#g20').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#g21').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#g22').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#g23').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#g24').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#g25').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#g26').val().replace('$', '').replace(/,/g, "")),
                parseNumber($('#g27').val().replace('$', '').replace(/,/g, "")),
            ]


            // Tax proration calculator
            var tax_proration = $('#tax-proration');

            var tax_proration_result = parseFloat(Math.round(((c7 * 30) - (30 - c8)) * (c9 / 365)));
            // console.log('tax_proration_result');
            // console.log('c7', c7);
            // console.log('(c7 * 30)', (c7 * 30));
            // console.log('c8', c8);
            // console.log('(30 - c8)', (30 - c8));
            // console.log('c9', c9);
            // console.log('(c9 / 365)', (c9 / 365));
            // console.log('((c7 * 30) - (30 - c8))', ((c7 * 30) - (30 - c8)));
            // console.log('((c7 * 30) - (30 - c8)) * (c9 / 365))', ((c7 * 30) - (30 - c8)) * (c9 / 365));
            // console.log('Math.round(((c7 * 30) - (30 - c8)) * (c9 / 365))', Math.round(((c7 * 30) - (30 - c8)) * (c9 /
            //     365)));
            tax_proration.html("$" + (isNaN(tax_proration_result) ? ' ' : tax_proration_result).toLocaleString());


            // Owners title policy calculator
            var owners_title_policy = $('#owners-title-policy');


            var owners_title_policy_result = 0;

            if (g38(c6) <= 17300) {
                owners_title_policy_result = 100;
            } else if (g38(c6) < 100000) {
                owners_title_policy_result = g38(c6) * 0.00575;
            } else if (g38(c6) <= 1000000) {
                owners_title_policy_result = (g38(c6) - 100000) * 0.005 + 575;
            } else if (g38(c6) <= 5000000) {
                owners_title_policy_result = (g38(c6) - 1000000) * 0.0025 + 5075;
            } else if (g38(c6) <= 10000000) {
                owners_title_policy_result = (g38(c6) - 5000000) * 0.00225 + 15075;
            } else if (g38(c6) > 10000000) {
                owners_title_policy_result = (g38(c6) - 10000000) * 0.002 + 26325;
            }
            if (!$('#owner-policy-checkbox').is(':checked')) {
                owners_title_policy_result = 0
            }
            owners_title_policy.html("$" + (isNaN(owners_title_policy_result) ? '0.00' : parseFloat(
                owners_title_policy_result).toLocaleString()));


            // Real estate calculator
            var real_estate = $('#real-estate');

            var real_estate_result = parseFloat((c6 * (c10 / 100)) + c11);
            real_estate.html("$" + (isNaN(real_estate_result) ? ' -' : real_estate_result.toLocaleString()));

            // Doc stamps calculator
            var doc_stamps = $('#doc-stamps');

            var is_miami_dade = $('#miami-dade-checkbox').is(":checked") ? 0.006 : 0.007;
            var doc_stamps_result = parseFloat(g38(c6) * is_miami_dade);
            doc_stamps.html("$" + (isNaN(doc_stamps_result) ? ' -' : doc_stamps_result.toLocaleString()));

            // Estimated Total deductions calculator
            var estimated_total = $('#estimated-total');

            var estimated_total_result = parseFloat(tax_proration_result + g14 + g15 + g16 + owners_title_policy_result +
                real_estate_result + doc_stamps_result + g20 + g21 + g22 + g23 + g24 + g25 + g26 + g27);
            estimated_total.html("$" + (isNaN(estimated_total_result) ? ' -' : estimated_total_result.toLocaleString()));

            // Estimated Total deductions calculator
            var estimated_net = $('#estimated-net');

            var estimated_net_result = parseFloat(c6 - estimated_total_result);
            if (!isNaN(estimated_net_result) && estimated_net_result < 0)
                estimated_net.html("$(" + (isNaN(estimated_net_result) ? ' -' : estimated_net_result.toLocaleString()) +
                    ")");
            else
                estimated_net.html("$" + (isNaN(estimated_net_result) ? ' -' : estimated_net_result.toLocaleString()) + "");
        }

        function percentage(partialValue, totalValue) {
            return (100 * partialValue) / totalValue;
        }

        function g38(num, places = -2) {
            const factor = 10 ** places;
            return Math.ceil(num * factor) / factor;
        }

        function submitPDF() {
            var address = $('#property-address').val()
            calculate()
            generatePDF(250, 370, '', 'Seller Net Calculator - ' + address)
        }
    </script>
@endsection
@endsection
