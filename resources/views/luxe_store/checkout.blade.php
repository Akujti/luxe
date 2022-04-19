@extends('layouts.app')

@section('css')
<style>
    th,
    td {
        text-align: center;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Checkout</h5>
        </div>

        <div class="row p-0 m-0">
            <div class="col-6">
                <form action="{{ route('luxe_store.order.create') }}" method="POST" id="form">
                    @csrf
                    <h1>Billing Details</h1>

                    <div class="row p-0 m-0">
                        <div class="col-6 form-group">
                            <label for="">Agent name*</label>
                            <input type="text" name="billing[agent_name]" class="form-control" required>
                        </div>
                        <div class="col-6 form-group">
                            <label for="">Agent surname*</label>
                            <input type="text" name="billing[agent_surname]" class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label for="">Company name*</label>
                            <input type="text" name="billing[company_name]" class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label for="">Country*</label>
                            <select name="billing[country]" id="billing_country" class="form-control" required>
                                <option value="">Select a country / region…</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="PW">Belau</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo (Brazzaville)</option>
                                <option value="CD">Congo (Kinshasa)</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Curaçao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and McDonald Islands</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="CI">Ivory Coast</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Laos</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia</option>
                                <option value="MD">Moldova</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="KP">North Korea</option>
                                <option value="MK">North Macedonia</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PS">Palestinian Territory</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russia</option>
                                <option value="RW">Rwanda</option>
                                <option value="ST">São Tomé and Príncipe</option>
                                <option value="BL">Saint Barthélemy</option>
                                <option value="SH">Saint Helena</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="SX">Saint Martin (Dutch part)</option>
                                <option value="MF">Saint Martin (French part)</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia/Sandwich Islands</option>
                                <option value="KR">South Korea</option>
                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syria</option>
                                <option value="TW">Taiwan</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom (UK)</option>
                                <option value="US" selected="selected">United States (US)</option>
                                <option value="UM">United States (US) Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VA">Vatican</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietnam</option>
                                <option value="VG">Virgin Islands (British)</option>
                                <option value="VI">Virgin Islands (US)</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label for="">Street Address*</label>
                            <input type="text" name="billing[street_address]" class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label for="">City*</label>
                            <input type="text" name="billing[city]" class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label for="">State</label>
                            <input type="text" name="billing[state]" class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label for="">Zip code*</label>
                            <input type="text" name="billing[zip_code]" class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label for="">Phone*</label>
                            <input type="text" name="billing[phone]" class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label for="">Email*</label>
                            <input type="text" name="billing[email]" class="form-control" required>
                        </div>
                        <h3>Additional information</h3>
                        <div class="col-12 form-group">
                            <label for="">Special Instructions for Seller (optional)</label>
                            <input type="text" name="billing[instructions]" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <h4>Your Order</h4>

                <div class="w-100 d-flex justify-content-between">
                    <p>Products</p>
                    <p>Subtotal</p>
                </div>
                @foreach($cart_data as $key => $product)
                <div class="w-100 d-flex justify-content-between">
                    <p>{{ $product['item_name'] }} x {{ $product['item_quantity'] }}</p>
                    <p>${{ $product["item_price"] * $product["item_quantity"] }}</p>
                </div>
                @endforeach

                <div class="w-100 d-flex justify-content-between">
                    <p>Subtotal</p>
                    <p>${{ $sub_total}}</p>
                </div>

                @if($coupon_code)

                <div class="w-100 d-flex justify-content-between">
                    <p>Coupon: {{ $coupon_code['code']}}</p>
                    <p>${{ $coupon_code['price']}}</p>
                </div>

                @endif

                <div class="w-100 d-flex justify-content-between">
                    <p>Total</p>
                    <p>${{ $total_price}}</p>
                </div>

                <div id="paypal-button-container"></div>
            </div>
        </div>
    </div>
</div>

<script
    src="https://www.paypal.com/sdk/js?client-id=AXQonrjh3E1Ui0Dn1TO9jLCBXvISTaJ0TcsVHYjxNkO1vKDuBquyJk0aE4BW6hdRAxuXKhtycUeHnV9p&components=buttons">
</script>
<script>
    paypal.Buttons({
    style: {
    layout: 'horizontal',
    size: 'small',
    label: 'pay',
    height: 40,
    tagline: 'false'
    },
    createOrder: function(data, actions) {
        
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '<?php echo json_decode($total_price) ?>'
          }
        }]
      });
    },
    onInit: function(data, actions) {
        actions.disable();
        document.querySelectorAll('input').forEach(item => {
            item.addEventListener('input', () => {
                if (document.getElementById("form").checkValidity()) {
                actions.enable();
                } else {
                actions.disable();
                }
            });
        });
    },
    onClick: function() {
        document.getElementById("form").reportValidity()
    },
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
            document.getElementById("form").submit();
    });
    }
  }).render('#paypal-button-container');
</script>

<script>
    function submit_form() {
        var form = $('#form')
        var reportValidity = form[0].reportValidity();

        if(reportValidity){
            form.submit();
        }
    }
</script>
@endsection