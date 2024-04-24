@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'rental_escrow_disbursement'])
@section('content')
    <style>
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

        .ui-datepicker-header a > span {
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
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Request Store - Rental Escrow Disbursement</h1>
                        <h6 id="agent-text" class="text-center" style="font-size: 21px;"><b>ESCROW DISBURSEMENTS TAKE
                                24-48 HOURS TO BE PROCESSED.</b></h6>
                    </div>
                    <input type="hidden" name="form_title" value="Request Store - Rental Escrow Disbursement">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Agent Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                       value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                       value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Property Address</label>
                                <input type="text" name="property_address" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Do you represent tenant or landlord?</label>
                                <select name="tenant_landlord" class="form-control" id="">
                                    <option value="-">-</option>
                                    <option value="Tenant">Tenant</option>
                                    <option value="Landlord">Landlord</option>
                                    <option value="Both">Both</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Client Name</label>
                                <input type="text" name="client_name" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Owner/Landlord Name</label>
                                <input type="text" name="owner_landlord_name" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Client Email</label>
                                <input type="text" name="client_email" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Lead Source</label>
                                <select name="lead_source" class="form-control" id="">
                                    <option value="-">-</option>
                                    <option value="Personal">Personal</option>
                                    <option value="CINC">CINC</option>
                                    <option value="Zillow">Zillow</option>
                                    <option value="Opcity">Opcity</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Lease Start Date</label>
                                <input type="text" name="lease_start_date" class="datepicker form-control date"
                                       autocomplete="off" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Walkthrough Date</label>
                                <input type="text" name="walkthrough_date" class="datepicker form-control date"
                                       autocomplete="off" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="how_were_funds_received">How were funds received?</label>
                                <select name="how_were_funds_received" class="form-control" id="">
                                    <option value="-">-</option>
                                    <option value="Check Dropoff">Check Dropoff</option>
                                    <option value="Wire">Wire</option>
                                    <option value="ACH">ACH</option>
                                    <option value="DepositLink">DepositLink</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Amount Held In Escrow</label>
                                <input type="number" name="amount_held_in_escrow" class="form-control" step="0.01"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Amount Due To LUXE Agent (before split)</label>
                                <input type="number" name="amount_due_to_LUXE_agent" class="form-control"
                                       step="0.01" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Amount Due To Co-op Agent</label>
                                <input type="number" name="amount_due_to_co_op_agent" class="form-control"
                                       step="0.01" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Co-op Brokerage Name</label>
                                <input type="text" name="co_op_brokerage_name" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Amount Due To Landlord (if applicable)</label>
                                <input type="number" name="amount_due_to_landlord" class="form-control" step="0.01"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Landlord Name</label>
                                <input type="text" name="landlord_name" class="form-control" required>
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
        const today = new Date()
        let tomorrow = new Date()
        let afterTomorrow = new Date()
        tomorrow.setDate(today.getDate() + 1)
        afterTomorrow.setDate(today.getDate() + 2)
        var dates = ['02/13/2023']
        $('.datepicker').datepicker({
            duration: 'fast',
            dateFormat: 'yy-mm-dd',
            minDate: 0,
            firstDay: 0,
            // disableDates: dates,
            beforeShowDay: function (date) {
                var disabledDates = []
                for (var i = 0; i < disabledDates.length; i++) {
                    if (
                        date.getFullYear() === disabledDates[i].getFullYear() &&
                        date.getMonth() === disabledDates[i].getMonth() &&
                        date.getDate() === disabledDates[i].getDate()
                    ) {
                        return [false]
                    }
                }
                return [true]
            }
        })

        function disableDates (date) {
            var string = $.datepicker.formatDate('dd-mm-yy', date)
            return [dates.indexOf(string) == -1]
        }
    </script>
@endsection
