@extends('layouts.app')
@section('css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

<style>
    .input input {
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
    .table-bottom td {
        width: 200px;
    }
    .border-wrapper {
        background-color: #006411;
        height: 10px;
        width: 100%;
    }
    .input-trans {
        background: transparent !important;
        border: 1px solid transparent !important;
        border-bottom: 1px solid black !important;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="title mb-3 w-100">
        <h1>SELLER NET SHEET</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-xl-8 mb-4">
            <div class="w-100 p-1" id="el">
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex w-100">
                            <div class="logo p-1">
                                <img height="80px" src="/images/brent_baris_logo.png" alt="">
                            </div>
                            <div>
                                <div class="d-flex h-100 align-items-center">
                                    <div>
                                        <p class="p-0 m-0" style="font-size: 13px;">(386) 454-0688 phone - (800) 607-5560 fax</p>
                                        <a href="www.barislaw.com" target="_blank">www.barislaw.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pr-0">
                        <div class="h-50">
                            <p>Created By:</p>
                            <div class="input">
                                <input type="text" class="text-left input-trans">
                            </div>
                        </div>
                    </div>
                    <div class="border-wrapper"></div>
                    <div class="col-7">
                        <table class="w-100">
                            <tbody>
                            <tr>
                                <td class="text-right">SALES PRICE:</td>
                                <td class="input"><input type="text" id="c6" value="0" onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <td class="text-right">CLOSING MONTH (2 DIGITS):</td>
                                <td class="input"><input type="text" id="c7" value="0" onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <td class="text-right">DAY OF CLOSING (2 DIGITS):</td>
                                <td class="input"><input type="text" id="c8" value="0" onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <td class="text-right"> UNPAID PROPERTY TAX FOR CURRENT YEAR:</td>
                                <td class="input"><input type="text" id="c9" value="0" onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <td class="text-right">REAL ESTATE PROFESSIONAL SERVICES %</td>
                                <td class="input"><input type="text" id="c10" value="0" onchange="calculate()"></td>
                            </tr>
                            <tr>
                                <td class="text-right">OTHER REAL ESTATE BROKER OR AGENT FEES:</td>
                                <td class="input"><input type="text" id="c11" value="0" onchange="calculate()"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-5 pr-0">
                        <div class="h-50">
                            <p class="p-0 m-0">Name of Seller</p>
                            <div class="input">
                                <input type="text" class="text-left input-trans">
                            </div>
                        </div>
                        <div class="h-50 d-flex align-items-end w-100">
                            <div class="w-100 pb-1">
                                <p class="p-0 m-0">Property Address</p>
                                <div class="input">
                                    <input type="text" class="text-left input-trans">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-wrapper"></div>
                </div>

                <table class="w-100 table-bottom">
                    <tbody>
                        <tr>
                            <th>&nbsp;</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Tax Proration [Jan 1st to Close]</th>
                            <td id="tax-proration">$ -</td>
                        </tr>
                        <tr>
                            <th>Seller Concessions</th>
                            <td class="input"><input type="text" id="g14" value="0" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <th>VA / FHA Fees</th>
                            <td class="input"><input type="text" id="g15" value="0" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <th>Closing Fee</th>
                            <td class="input"><input type="text" id="g16" value="0" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <th class="py-2">Owner's Title Policy</th>
                            <td id="owners-title-policy">$ -</td>
                        </tr>
                        <tr>
                            <th class="py-2">Real Estate Professional Services</th>
                            <td class="py-2" id="real-estate">$ -</td>
                        </tr>
                        <tr>
                            <th class="py-2">Doc Stamps on the Deed</th>
                            <td class="py-2" id="doc-stamps">$ -</td>
                        </tr>
                        <tr>
                            <th>Mortgage Payoff</th>
                            <td class="input"><input type="text" id="g20" value="0" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <th>Second Mortgage Payoff</th>
                            <td class="input"><input type="text" id="g21" value="0" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <th>COA / HOA Dues / Assessments </th>
                            <td class="input"><input type="text" id="g22" value="0" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <th>COA / HOA Estoppel Certificate</th>
                            <td class="input"><input type="text" id="g23" value="0" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <th>Recording and Other Fees Needed to Cure Title</th>
                            <td class="input"><input type="text" id="g24" value="0" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <th>Mobile Home Title Search and Transfer Fees</th>
                            <td class="input"><input type="text" id="g25" value="0" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <th>Property Taxes Owing from Previous Year(s)</th>
                            <td class="input"><input type="text" id="g26" value="0" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <th>Miscellaneous</th>
                            <td class="input"><input type="text" id="g27" value="0" onchange="calculate()"></td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td></td>
                        </tr>

                        <tr>
                            <td class="text-right font-italic" style="font-size: 23px;width: auto;">Estimated Total Deductions: &nbsp;</td>
                            <td id="estimated-total" style="font-size: 23px;">$ -</td>
                        </tr>
                        <tr>
                            <th class="text-right" style="font-size: 26px;">ESTIMATED NET TO SELLER: &nbsp;</th>
                            <th id="estimated-net" style="font-size: 26px;">$ (-)</th>
                        </tr>
                        <tr>
                            <td class="w-100" colspan="2">BRENT E. BARIS, P.A. ASSUMES NO LIABILITY FOR ANY ERRORS AND/OR OMISSIONS FOR INFORMATION CONTAINED HEREIN. This estimated net proceeds to seller is based on the seller paying the usual and customary closing costs per the FAR/BAR contracts in Central and North Florida. Seller acknowledges that this is an ESTIMATE ONLY and NOT A GUARANTEE.</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td>Dated: <input type="text" class="input-trans"></td>
                            <td>Dated: <input type="text" class="input-trans"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Signed: <input type="text" class="input-trans"></td>
                            <td>Signed: <input type="text" class="input-trans"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <button class="btn-luxe w-100 my-4" onclick="generatePDF(250, 370)">Generate</button>
        </div>
    </div>
</div>
<script src="{{ asset('js/themes/main.js') }}"></script>

@section('js')
<script>
    function calculate() {
        var [c6, c7, c8, c9, c10, c11, g14, g15, g16, g20, g21, g22, g23, g24, g25, g26, g27] = [
            parseFloat($('#c6').val()),
            parseFloat($('#c7').val()),
            parseFloat($('#c8').val()),
            parseFloat($('#c9').val()),
            parseFloat($('#c10').val()),
            parseFloat($('#c11').val()),
            parseFloat($('#g14').val()),
            parseFloat($('#g15').val()),
            parseFloat($('#g16').val()),
            parseFloat($('#g20').val()),
            parseFloat($('#g21').val()),
            parseFloat($('#g22').val()),
            parseFloat($('#g23').val()),
            parseFloat($('#g24').val()),
            parseFloat($('#g25').val()),
            parseFloat($('#g26').val()),
            parseFloat($('#g27').val()),
        ]


        // Tax proration calculator
        var tax_proration = $('#tax-proration');

        var tax_proration_result = parseFloat(Math.round(((c7 * 30) - (30 - c8)) * (c9 / 365)));
        tax_proration.html("$" + (isNaN(tax_proration_result) ? ' -' : tax_proration_result));


        // Owners title policy calculator
        var owners_title_policy = $('#owners-title-policy');
        

        var owners_title_policy_result = 0;

        if(g38(c6) <= 17300) {
            owners_title_policy_result = 100;
        }
        else if(g38(c6) < 100000) {
            owners_title_policy_result = g38(c6) * 0.00575;
        }
        else if(g38(c6) <= 1000000) {
            owners_title_policy_result = (g38(c6) - 100000) * 0.005+575;
        }
        else if(g38(c6) <= 5000000) {
            owners_title_policy_result = (g38(c6) - 1000000) * 0.0025+5075;
        }
        else if(g38(c6) <= 10000000) {
            owners_title_policy_result = (g38(c6) - 5000000) * 0.00225+15075;
        }
        else if(g38(c6) > 10000000) {
            owners_title_policy_result = (g38(c6) - 10000000) * 0.002+26325;
        }
       
        owners_title_policy.html("$" + (isNaN(owners_title_policy_result) ? '0.00' : parseInt(owners_title_policy_result)));


        // Real estate calculator
        var real_estate = $('#real-estate');

        var real_estate_result = parseInt((c6 * (c10 / 100)) + c11);
        real_estate.html("$" + (isNaN(real_estate_result) ? ' -' : real_estate_result));

        // Doc stamps calculator
        var doc_stamps = $('#doc-stamps');

        var doc_stamps_result = parseInt(g38(c6) * 0.007);
        doc_stamps.html("$" + (isNaN(doc_stamps_result) ? ' -' : doc_stamps_result));

        // Estimated Total deductions calculator
        var estimated_total = $('#estimated-total');

        var estimated_total_result = parseInt(tax_proration_result + g14 + g15 + g16 + owners_title_policy_result + real_estate_result + doc_stamps_result + g20 + g21 + g22 + g23 + g24 + g25 + g26 + g27);
        estimated_total.html("$" + (isNaN(estimated_total_result) ? ' -' : estimated_total_result));

        // Estimated Total deductions calculator
        var estimated_net = $('#estimated-net');

        var estimated_net_result = parseInt(estimated_total_result - c6);
        estimated_net.html("$(" + (isNaN(estimated_net_result) ? ' -' : estimated_net_result) + ")");
    }

    function percentage(partialValue, totalValue) {
        return (100 * partialValue) / totalValue;
    } 

    function g38(num, places = -2) {
        const factor = 10 ** places;
        return Math.ceil(num * factor) / factor;
    }
</script>
@endsection
@endsection