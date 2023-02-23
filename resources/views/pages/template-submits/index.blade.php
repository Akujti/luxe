@extends('admin.layouts.app', ['active' => 'Marketing_requests'])
@section('css')
    <style>
        th,
        td {
            text-align: center;
        }

        th {
            border: none !important;
            font-family: 'gothicbold';
            font-size: 18px;
            font-weight: bold;
        }

        td {
            font-family: 'gothicregular';
            height: 90px !important;
            vertical-align: middle !important;
        }

        .btn {
            border-radius: 10px !important;
        }

        #img {
            border-radius: 10px;
        }

        #add-new-button {
            font-size: 30px !important;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Marketing Requests</h5>
        </div>
        <form action="" method="get" class="row">
            <div class="col-md-2 form-group">
                <input type="text" name="name" class="form-control" placeholder="Agent Name"
                    value="{{ isset($_GET['name']) ? $_GET['name'] : '' }}">
            </div>
            <div class="col-md-2 form-group">
                <input type="date" name="date" class="form-control" placeholder="Date"
                    value="{{ isset($_GET['date']) ? $_GET['date'] : '' }}">
            </div>
            <div class="col-md-2 form-group">
                <select name="status" class="form-control">
                    <option value>Status</option>
                    <option value="Missing" {{ isset($_GET['status']) && $_GET['status'] == 'Missing' ? 'selected' : '' }}>
                        Missing
                    </option>
                    <option value="In Production"
                        {{ isset($_GET['status']) && $_GET['status'] == 'In Production' ? 'selected' : '' }}>In Production
                    </option>
                    <option value="Proof Sent"
                        {{ isset($_GET['status']) && $_GET['status'] == 'Proof Sent' ? 'selected' : '' }}>Proof Sent
                    </option>
                    <option value="Completed"
                        {{ isset($_GET['status']) && $_GET['status'] == 'Completed' ? 'selected' : '' }}>
                        Completed
                    </option>
                </select>
            </div>
            <div class="col-md-2 form-group">
                <select name="product" class="form-control">
                    <option value>Product</option>
                    <option value="Brand Package">Brand Package</option>
                    <option value="Boosting Facebook Ads">Boosting Facebook Ads</option>
                    <option value="Boosting Instagram Ads">Boosting Instagram Ads</option>
                    <option value="Create Facebook Business Page">Create Facebook Business Page</option>
                    <option value="Create Google Business Page">Create Google Business Page</option>
                    <option value="Create Landing Page">Create Landing Page</option>
                    <option value="Custom Bio">Custom Bio</option>
                    <option value="Custom Email Signature">Custom Email Signature</option>
                    <option value="Design Custom Banner">Design Custom Banner</option>
                    <option value="Design Custom Business Cards">Design Custom Business Cards</option>
                    <option value="Design Custom Signage">Design Custom Signage</option>
                    <option value="Door Hangers">Door Hangers</option>
                    <option value="Email Blast">Email Blast</option>
                    <option value="Flyers">Flyers</option>
                    <option value="Google Ads Set Up - PPC">Google Ads Set Up - PPC</option>
                    <option value="Mailers/EDDM - Postcard creation & community routes">Mailers/EDDM - Postcard creation &
                        community routes</option>
                    <option value="MLS Input">MLS Input</option>
                    <option value="Property Website">Property Website</option>
                    <option value="Set Up Zillow & Realtor.com Profiles">Set Up Zillow & Realtor.com Profiles</option>
                    <option value="Social Media Posts">Social Media Posts</option>
                    <option value="Write Blog Post">Write Blog Post</option>
                </select>
            </div>
            <div class="col-md-2 form-group">
                <button class="btn btn-luxe w-100 form-control" type="submit">Search</button>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Agent Name</th>
                        <th>Agent Email</th>
                        <th>Product</th>
                        <th>Date Sent</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($submissions as $submission)
                        @php
                            $details = json_decode($submission->details, true);
                        @endphp
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $submission->user ? $submission->user->profile->fullname : '' }}</td>
                            <td>{{ $submission->user ? $submission->user->email : '' }}</td>
                            <td>{{ $details['option'] }}</td>
                            <td>{{ Carbon\Carbon::parse($submission->created_at)->format('m-d-Y') }}</td>
                            <td>{{ $submission->status }}</td>
                            <td>
                                <a class=" btn btn-luxe mr-2"
                                    href="{{ route('admin.marketing-requests.show', $submission->id) }}"
                                    style="height: 39px">View
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center w-100">
                {{ $submissions->links() }}
            </div>
        </div>
    </div>
@endsection
