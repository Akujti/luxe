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
                <x-verbiage-form-text :formInfo=$formInfo :afterSubmit="session()->get('modal')" />
                <form action="{{ route('general.email.post') }}" class="card form p-3" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Register Your Real Estate Team</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Register Your Real Estate Team">
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
                                <input type="email" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Team Name</label>
                                <input type="text" name="team_name" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Team Leader Name</label>
                                <input type="text" name="team_leader_name" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Team Member Name</label>
                                <input type="text" name="team_member_name" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Upload Team Member's Signed Team Agreement</label>
                                <input type="file" name="team_signed_agreement" class="form-control p-1" required>
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
