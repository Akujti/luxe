@extends('layouts.app', ['active' => 'marketing_branding', 'subactive' => 'signs_photo_design_requests'])
@section('content')
    <style>
        @media(min-width:1200px) {
            pre {
                padding-left: 135px;
            }
        }

        @media(min-width:1600px) {
            pre {
                padding-left: 300px;
            }
        }

        .ui-datepicker-week-end a {
            /* outline: 1px solid #262626; */
        }

        #ui-datepicker-div {
            display: none;
            background-color: #fff;
            box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, 0.1);
            margin-top: 0.25rem;
            border-radius: 0.5rem;
            padding: 0.5rem;
        }

        .ui-datepicker-calendar thead th {
            padding: 0.25rem 0;
            text-align: center;
            font-size: 0.75rem;
            font-weight: 400;
            color: #78909C;
        }

        .ui-datepicker-calendar tbody td {
            width: 2.5rem;
            text-align: center;
            padding: 0;
        }

        .ui-datepicker-calendar tbody td a,
        .ui-datepicker-calendar tbody td span {
            margin-bottom: 4px;
            display: block;
            border-radius: 0.25rem;
            line-height: 2rem;
            transition: 0.3s all;
            color: #262626;
            font-size: 0.875rem;
            text-decoration: none;
        }

        .ui-datepicker-calendar tbody td a:hover {
            background-color: #262626;
            color: #fff;
        }

        .ui-datepicker-calendar tbody td a.ui-state-active {
            background-color: #262626;
            color: #fff;
        }

        .ui-datepicker-header a.ui-corner-all {
            cursor: pointer;
            position: absolute;
            top: 0;
            width: 2rem;
            height: 2rem;
            margin: 0.5rem;
            border-radius: 0.25rem;
            transition: 0.3s all;
        }

        .ui-datepicker-header a.ui-corner-all:hover {
            background-color: #ECEFF1;
        }

        .ui-datepicker-header a.ui-datepicker-prev {
            left: 0;
            background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==");
            background-repeat: no-repeat;
            background-size: 0.5rem;
            background-position: 50%;
            transform: rotate(180deg);
        }

        .ui-datepicker-header a.ui-datepicker-next {
            right: 0;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==');
            background-repeat: no-repeat;
            background-size: 10px;
            background-position: 50%;
        }

        .ui-datepicker-header a>span {
            display: none;
        }

        .ui-datepicker-title {
            text-align: center;
            line-height: 2rem;
            margin-bottom: 0.25rem;
            font-size: 0.875rem;
            font-weight: 500;
            padding-bottom: 0.25rem;
        }

        .ui-datepicker-week-col {
            color: #78909C;
            font-weight: 400;
            font-size: 0.75rem;
        }

        .ui-datepicker-unselectable.ui-state-disabled {
            opacity: 0.3;
        }

        .h1-luxe,
        .h4-luxe {
            font-family: 'gothicbold';
        }

        .label {
            font-family: 'gothicbold';
        }

        .btn-previous {
            font-family: 'gothicbold';
            font-size: 18px !important;
        }

        input[type="checkbox"]:disabled+label::before {
            background: gray;
        }

        input[type="checkbox"]:disabled+label:hover::before {
            background: gray;
            border: 1px solid #d4d4d5;
        }
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center my-4">
            <div class="col-md-12">
                <div id="popup" class="card">
                    <div class="card-header text-center">
                        <h5>Please agree to the following terms to schedule a photoshoot for your listing:</h5>
                    </div>
                    <div class="card-body row justify-content-center">
                        <div class="col-md-8">
                            <p><b>Turnaround time for scheduling shoots is at least 48-72 hours. Keep in mind requests are
                                    viewed
                                    during office hours only.</b></p>
                            <p>Standard Photography Policies:</p>
                            <ul class="list-unstyled">
                                <li>• Shoots done Monday-Thursday are turned in on Fridays by the end of the day</li>
                                <li>• Shoots done Friday-Sunday will turned in the following Friday</li>
                                <li>• please request any specific shots when you book the photoshoot</li>
                                <li>• for example, if you need pictures of amenities or nearby surroundings</li>
                                <li>• listing agents must be present throughout the entire photoshoot</li>
                                <li>• photographers are not allowed to be alone at properties or close/lock up the property
                                </li>
                                <li>• photographers reserve the right to not photograph a property if it is not photoshoot
                                    ready
                                </li>
                                <li>• we provide you with a guide on how to prepare properties for the shoot when we confirm
                                    your
                                    appointment</li>
                                <li>• no cars in front of the property</li>
                                <li>• $225 charge if property not set up correctly/prepared before photographer arrival</li>
                                <li>• $225 charge if photographer must make a 2nd visit to same property</li>
                                <li>• Only properties in Miami-Dade or Broward county are covered</li>
                                <li>• $100 Travel Free for any property past W Atlantic Blvd</li>
                                <li><b>**If you need any additional or custom work, please feel free to talk to the
                                        photographers
                                        as they
                                        are always willing to help :)</b></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button onclick="showForm()" class="btn btn-luxe px-4">I Agree</button>
                    </div>
                </div>

                <form id="photo-form" action="{{ route('general.email.post') }}" class="card form mb-4 p-3 d-none"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Photoshoots For Listings</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Photoshoots For Listings">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Agent Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Property Address For Shoot</label>
                                <input type="text" name="property_address" class="form-control map-search" required
                                    placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Phone</label>
                                <input type="text" name="agent_number" class="form-control"
                                    value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Property Type</label>
                                <select id="option-property-type" type="text" name="property_type" class="form-control"
                                    required>
                                    <option value>-</option>
                                    <option value="Single Family">Single Family</option>
                                    <option value="Condo/Apartment">Condo/Apartment</option>
                                    <option value="Duplex" data-price="100">Duplex</option>
                                    <option value="Triplex" data-price="200">Triplex</option>
                                    <option value="Quadplex" data-price="300">Quadplex</option>
                                    <option value="Entire Condo Building">Entire Condo Building</option>
                                    <option value="Commercial">Commercial</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Property Living Area Square Footage</label>
                                <select id="option-living-area" type="text" name="property_living_area_square_footage"
                                    class="form-control" required>
                                    <option value>-</option>
                                    <option value="Equal to or less than 2,100" data-price="0">Equal to or less than 2,100
                                    </option>
                                    <option value="2,101-3,100" data-price="100">2,101-3,100</option>
                                    <option value="3,101-4,100" data-price="200">3,101-4,100</option>
                                    <option value="4,101-5,100" data-price="300">4,101-5,100</option>
                                    <option value="5,101-6,100" data-price="400">5,101-6,100</option>
                                    <option value="6,101-7,100" data-price="500">6,101-7,100</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Total Commission For Listing</label>
                                <input type="number" name="total_commision_for_listing" class="form-control" required
                                    step="0.01">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">% to LUXE - Listing Side Commission</label>
                                <input type="number" name="listing_side_commission" class="form-control" required
                                    step="0.01">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Preferred Photographer</label>
                                <select type="text" name="preferred_photographer" class="form-control">
                                    <option value>-</option>
                                    <option value="JSR King-Jorge Sosa">JSR King-Jorge Sosa</option>
                                    <option value="Steven Vivar">Steven Vivar</option>
                                    <option value="Albert Rodriguez">Albert Rodriguez</option>
                                    <option value="David Peretz">David Peretz</option>
                                </select>
                            </div>
                            <div class="form-group col-12 text-center">
                                <h6>**Photoshoots can only be scheduled between 8AM-3PM**</h6>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Date & Time Option #1</label>
                                <input type="text" name="date_option_1" class="datepicker form-control date mb-2"
                                    autocomplete="off" required>
                                {{-- <input type="date" name="date_option_1" class="form-control mb-2" required> --}}
                                <input type="time" name="time_option_1" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Date & Time Option #2</label>
                                <input type="text" name="date_option_2" class="datepicker form-control date mb-2"
                                    autocomplete="off" required>
                                {{-- <input type="date" name="date_option_2" class="form-control mb-2" required> --}}
                                <input type="time" name="time_option_2" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Date & Time Option #3</label>
                                <input type="text" name="date_option_3" class="datepicker form-control date mb-2"
                                    autocomplete="off" required>
                                {{-- <input type="date" name="date_option_3" class="form-control mb-2" required> --}}
                                <input type="time" name="time_option_3" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Upload Listing Agreement</label>
                                <input type="file" name="upload_listing_agreement" class="form-control p-1" required>
                            </div>
                            <div class="form-group col-12 text-center">
                                <h6>**Marketing will send you an email with final confirmed date & photographer you have
                                    been assigned**
                                </h6>
                            </div>
                            <div class="form-group col-md-12">
                                <input id="option-0" class="form-check-input ml-0" type="checkbox"
                                    value="Photos Only (12-15 images)"
                                    data-price="{{ auth()->user()->status == 2 ? 0 : 100 }}" name="add-ons[]" checked
                                    disabled>
                                <label class="ml-4">
                                    Photos Only (12-15 images) - {{ auth()->user()->status != 1 ? 'FREE' : '$100' }}
                                </label>
                                @if (auth()->user()->status == 2)
                                    <p>**Sale Listing Agreement must have minimum list price of $250K and minimum 5% gross
                                        commission (2.5% listing side)**</p>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Add Ons</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" data-price="100" id="option-1"
                                        name="add-ons[]" value="Additional 25-30 Photos">
                                    <label class="form-check-label font-weight-normal" for="option-1">
                                        Additional 25-30 Photos - {{ auth()->user()->status == 3 ? 'FREE' : '$100' }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" data-price="50" id="option-2"
                                        name="add-ons[]" value="Drone">
                                    <label class="form-check-label font-weight-normal" for="option-2">
                                        Drone - {{ auth()->user()->status == 3 ? 'FREE' : '$50' }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" data-price="100" id="option-3"
                                        name="add-ons[]" value="Reel of Photos w/ drone video clip">
                                    <label class="form-check-label font-weight-normal" for="option-3">
                                        Reel of Photos w/ drone video clip -
                                        {{ auth()->user()->status == 3 ? 'FREE' : '$100' }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" data-price="125" id="option-4"
                                        name="add-ons[]" value="Reel of Video Walkthrough">
                                    <label class="form-check-label font-weight-normal" for="option-4">
                                        Reel of Video Walkthrough - {{ auth()->user()->status == 3 ? 'FREE' : '$125' }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" data-price="400" id="option-5"
                                        name="add-ons[]" value="Full Walkthrough Video Up to 3,000 sqft">
                                    <label class="form-check-label font-weight-normal" for="option-5">
                                        Full Walkthrough Video Up to 3,000 sqft -
                                        {{ auth()->user()->status == 3 ? 'FREE' : '$400' }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" data-price="600" id="option-6"
                                        name="add-ons[]" value="Full Walkthrough Video Up to 6,000 sqft">
                                    <label class="form-check-label font-weight-normal" for="option-6">
                                        Full Walkthrough Video Up to 6,000 sqft -
                                        {{ auth()->user()->status == 3 ? 'FREE' : '$600' }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" data-price="150" id="option-7"
                                        name="add-ons[]" value="3D Zillow Tour">
                                    <label class="form-check-label font-weight-normal" for="option-7">
                                        3D Zillow Tour - {{ auth()->user()->status == 3 ? 'FREE' : '$150' }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" data-price="200" id="option-8"
                                        name="add-ons[]" value="3D Zillow Tour & Interactive Floorplan">
                                    <label class="form-check-label font-weight-normal" for="option-8">
                                        3D Zillow Tour & Interactive Floorplan -
                                        {{ auth()->user()->status == 3 ? 'FREE' : '$200' }}
                                    </label>
                                </div>
                            </div>
                            <div class="form-group form-footer col-12">
                                <input id="submit-btn" type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                                <div id="paypal-button-container" class="d-none"></div>
                            </div>
                        </div>
                    </div>
                </form>
                {{-- Total: <p id="total"></p>
                <button onclick="calculate()">Test</button> --}}
            </div>
        </div>
    </div>
    <script
        src="https://www.paypal.com/sdk/js?client-id={{ config('app.paypal_client_id') }}&disable-funding=credit&components=buttons">
    </script>
    <script>
        $('[id^="option-"]').change(function() {
            calculate()
        });
        var amount = 0;
        calculate()

        function calculate() {
            var total = 0;
            var status = {{ auth()->user()->status }};
            console.log(status);
            var elements = $('input[id^="option-"]:checked').toArray();
            elements.forEach(element => {
                if (element.getAttribute("data-price")) {
                    total += Number(element.getAttribute("data-price"));
                }
            });

            var elements = $('[id^="option-"]').find(':selected').toArray();
            elements.forEach(element => {
                if (element.getAttribute("data-price")) {
                    total += Number(element.getAttribute("data-price"));
                }
            });
            if (status == 3)
                amount = 0
            else
                amount = total

            // document.getElementById('total').innerHTML = amount
            if (amount == 0) {
                $('#submit-btn').removeClass('d-none')
                $('#paypal-button-container').addClass('d-none')
            } else {
                $('#paypal-button-container').removeClass('d-none')
                $('#submit-btn').addClass('d-none')
            }
            console.log('amount', amount);
        }

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
                            value: amount
                        }
                    }]
                });
            },
            onInit: function(data, actions) {
                actions.disable();
                document.querySelectorAll('input').forEach(item => {
                    item.addEventListener('input', () => {
                        if (document.getElementById("photo-form").checkValidity()) {
                            actions.enable();
                        } else {
                            actions.disable();
                        }
                    });
                });
            },
            onClick: function() {
                document.getElementById("photo-form").reportValidity()
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    document.getElementById("photo-form").submit();
                });
            }
        }).render('#paypal-button-container');

        function showForm() {
            $('#popup').addClass('d-none')
            $('form').removeClass('d-none')
            window.scrollTo(0, 0)
        }

        const today = new Date()
        let tomorrow = new Date()
        let afterTomorrow = new Date()
        tomorrow.setDate(today.getDate() + 1)
        afterTomorrow.setDate(today.getDate() + 2)
        var dates = ['02/13/2023'];
        $(".datepicker").datepicker({
            duration: "fast",
            dateFormat: 'yy-mm-dd',
            minDate: 0,
            firstDay: 0,
            // disableDates: dates,
            beforeShowDay: function(date) {
                var disabledDates = [
                    today, tomorrow, afterTomorrow
                ];
                for (var i = 0; i < disabledDates.length; i++) {
                    if (
                        date.getFullYear() === disabledDates[i].getFullYear() &&
                        date.getMonth() === disabledDates[i].getMonth() &&
                        date.getDate() === disabledDates[i].getDate()
                    ) {
                        return [false];
                    }
                }
                return [true];
            }
        });

        function disableDates(date) {
            var string = $.datepicker.formatDate('dd-mm-yy', date);
            return [dates.indexOf(string) == -1];
        }
    </script>
@endsection
