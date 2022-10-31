@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'request_your_agent'])
@section('content')
    <style>
        @media(min-width:1200px) {
            pre {
                padding-left: 150px;
            }
        }
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="modal fade modal-new" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-show="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Success</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Your request has been received! Support Team will update you the 1st of the month, if
                                    your referral fee is due and payout will occur first Friday of the month. Thank you!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary w-100" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @if (session()->get('modal'))
                    <script type="text/javascript">
                        $(window).on('load', function() {
                            $('#exampleModalCenter').modal('show');
                        });
                    </script>
                @endif
                <form action="{{ route('general.email.post') }}" class="card form p-3" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Request Your Agent Referral</h1>
                        <h5 class="text-center">When an agent your refer reaches their first $1K Company Dollars, you earn a
                            $1K referral payout. Referral Payouts occur the first Friday of every month.</h5>
                    </div>
                    <input type="hidden" name="form_title" value="Request Your Agent Referral">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Agent Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Number</label>
                                <input type="text" name="agent_number" class="form-control"
                                    value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Name of Agent You Referred</label>
                                <input type="text" name="referred_agent_name" class="form-control" required>
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
@endsection
