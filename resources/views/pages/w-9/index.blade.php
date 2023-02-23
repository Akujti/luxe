@extends('admin.layouts.app', ['active' => 'W-9 Submissions'])
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
            height: 120px !important;
            vertical-align: middle !important;
        }

        .btn {
            border-radius: 10px !important;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">W-9 Submissions</h5>
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
                <button class="btn btn-luxe w-100 form-control" type="submit">Search</button>
            </div>
        </form>
        <div class="row m-0 w-100 justify-content-center">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Agent Name</th>
                            <th scope="col">Agent Email</th>
                            <th scope="col" class="col-2">Date Sent</th>
                            <th scope="col">Download</th>
                            <th scope="col">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($submissions as $submission)
                            <tr>
                                <td scope="row" style="vertical-align: middle">
                                    {{ (($_REQUEST['page'] ?? 1) - 1) * 50 + $loop->iteration }}</td>
                                <td>{{ $submission->user->profile ? $submission->user->profile->fullname : '' }}</td>
                                <td>{{ $submission->user->email }}</td>
                                <td>{{ Carbon\Carbon::parse($submission->created_at)->format('m-d-Y') }}</td>
                                <td>
                                    <a class=" btn btn-luxe" href="{{ route('w-9.download', $submission->id) }}"
                                        style="height: 39px">Download
                                    </a>
                                </td>
                                <td>
                                    <a class=" btn btn-luxe" href="{{ route('admin.w-9.show', $submission->id) }}"
                                        style="height: 39px">View
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $submissions }}
        </div>
    </div>
@endsection
