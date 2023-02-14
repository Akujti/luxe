@extends('admin.layouts.app', ['active' => 'Form Submissions'])
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

        #img {
            border-radius: 10px;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Form Submissions</h5>
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
                <select name="form_title" class="form-control">
                    <option value>Form</option>
                    @foreach ($forms as $form)
                        <option value="{{ $form->title }}"
                            {{ isset($_GET['form_title']) && $_GET['form_title'] == $form->title ? 'selected' : '' }}>
                            {{ $form->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2 form-group">
                <select name="status" class="form-control">
                    <option value>Status</option>
                    <option value="0" {{ isset($_GET['status']) && $_GET['status'] == 0 ? 'selected' : '' }}>Pending
                    </option>
                    <option value="1" {{ isset($_GET['status']) && $_GET['status'] == 1 ? 'selected' : '' }}>Completed
                    </option>
                </select>
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
                            <th scope="col">Form Name</th>
                            <th scope="col">Agent Name</th>
                            <th scope="col">Agent Email</th>
                            <th scope="col" class="col-2">Date Sent</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            <th scope="col">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($submissions as $submission)
                            <tr>
                                <form action="{{ route('admin.form-submit.update', $submission) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <td scope="row" style="vertical-align: middle">
                                        {{ (($_REQUEST['page'] ?? 1) - 1) * 50 + $loop->iteration }}</td>
                                    <td>{{ $submission->form_title }}</td>
                                    <td>{{ $submission->agent_name }}</td>
                                    <td>{{ $submission->agent_email }}</td>
                                    <td>{{ Carbon\Carbon::parse($submission->created_at)->format('m-d-Y') }}</td>
                                    <td>{{ $submission->status ? 'Completed' : 'Pending' }}</td>
                                    <td>
                                        @if (!$submission->status)
                                            <div class="button-group">
                                                <button class="btn btn-luxe mr-2" type="submit"
                                                    style="height: 39px">Complete
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                </form>
                                <td>
                                    @if ($submission->details == null)
                                        <button disabled class=" btn btn-luxe mr-2">View
                                        </button>
                                    @else
                                        <a class=" btn btn-luxe mr-2"
                                            href="{{ route('admin.form-submit.show', $submission->id) }}"
                                            style="height: 39px">View
                                        </a>
                                    @endif
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
