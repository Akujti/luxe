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
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center my-4">
            <div class="col-md-12">
                <div id="popup" class="card">
                    <div class="card-header text-center">
                        <h5>Prior to scheduling a photoshoot for your listing you must agree to the following terms:</h5>
                    </div>
                    <div class="card-body">
                        <pre style="font-family: Arial;">
        <b>Photoshoots take staff 48 hours to confirm. Keep in mind requests are only viewed during office hours.</b>
                    If your listing agreement does not meet the requirements for the shoot to be covered by LUXE, you
                    understand that you will be responsible for submitting payment prior to the shoot.

                    Requirements for shoots covered by LUXE below. Photos for listings not meeting these
                    requirements will be responsibility of the agent.<br>
                    • Listing agreement for sale (single-family, townhouses, condos)
                    • 6-month listing agreement
                    • Minimum list price of $250K
                    • Minimum 5% gross commission (2.5% listing side)
                    • Property size of 2,000 SqFt or less - 10% buffer on size (anything over will have a surcharge
                    to be paid on LUXE store)<br>
                    See below for our standard photography policies:<br>
                    • pics/videos done Monday-Thursday are turned in on Fridays by the end of the day
                    • pics/videos done Friday-Sunday will turned in the following Friday
                    • please request any specific shots when you book the photoshoot through Setmore
                    &#9;o for example, if you need pictures of amenities or nearby surroundings
                    • listing agents must be present throughout the entire photoshoot
                    • photographers are not allowed to be alone at properties or close/lock up the property
                    • photographers reserve the right to not photograph a property if it is not photoshoot ready
                    &#9;o we provide you with a guide on how to prepare properties for the shoot when we confirm your
                    appointment
                    &#9;o no cars in front of the property
                    • if you need any additional or custom work, please feel free to talk to the photographers as
                    they are always willing to
                    help :)
                    • $225 charge for RENTAL shoots for pictures & video
                    • $100-$150 charge for RENTAL shoots for pictures only
                    • $100 surcharge for duplex
                    • $200 surcharge for triplex
                    • $300 surcharge for fourplex
                    • $500 surcharge for 10+ units
                    • $225 charge if property not set up correctly/prepared before photographer arrival
                    • $225 charge if photographer must make a 2nd visit to same property
                    • $100 Travel Free for any property past W Atlantic Blvd
                    • Only properties in Miami-Dade or Broward county are covered
                    <b>*Please note: If property does not sell (cancelled, expired, or withdrawn), agent will be charged for shoot fee​​.​​*<b></pre>
                    </div>
                    <div class="card-footer text-center">
                        <button onclick="showForm()" class="btn btn-luxe px-4">I Agree</button>
                    </div>
                </div>

                <form action="{{ route('general.email.post') }}" class="card form mb-4 p-3 d-none" method="POST"
                    enctype="multipart/form-data">
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
                                <label for="name">Agent Phone Number</label>
                                <input type="text" name="agent_number" class="form-control"
                                    value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Property Address For Shoot</label>
                                <input type="text" name="property_address" class="form-control" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Property Type</label>
                                <select type="text" name="property_type" class="form-control" required>
                                    <option value>-</option>
                                    <option value="Single Family">Single Family</option>
                                    <option value="Condo/Apartment">Condo/Apartment</option>
                                    <option value="Duplex">Duplex</option>
                                    <option value="Triplex">Triplex</option>
                                    <option value="Quadplex">Quadplex</option>
                                    <option value="Entire Condo Building">Entire Condo Building</option>
                                    <option value="Commercial">Commercial</option>
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
                            <div class="form-group form-footer col-12">
                                <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
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
