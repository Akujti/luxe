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
        <div class="row m-0 w-100 justify-content-center">
            <div class="w-100 d-flex justify-content-between align-items-center mb-5">
                <h5 class="h5-luxe">Marketing Requests</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Agent Name</th>
                            <th>Agent Email</th>
                            <th>Date Sent</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($submissions as $submission)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $submission->user->profile->fullname }}</td>
                                <td>{{ $submission->user->email }}</td>
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
    </div>
@endsection
