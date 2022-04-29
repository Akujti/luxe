@extends('admin.layouts.app', ['active' => 'Form_submits'])
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
    <div class="row m-0 w-100 justify-content-center">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Form Submissions</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Form Name</th>
                        <th scope="col">Agent Name</th>
                        <th scope="col">Agent Email</th>
                        <th scope="col" class="col-2">Date Sent</th>
                        <th scope="col">Status Completed</th>
                        <th scope="col">Action</th>
                        <th scope="col">View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($submissions as $submission)
                    <tr>
                        <form action="{{route('admin.form-submit.update',$submission)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <td scope="row" style="vertical-align: middle">
                                {{((($_REQUEST['page']??1)-1)*50)+$loop->iteration}}</td>
                            <td>{{$submission->form_title}}</td>
                            <td>{{$submission->agent_name}}</td>
                            <td>{{$submission->agent_email}}</td>
                            <td>{{Carbon\Carbon::parse($submission->created_at)->format('m-d-Y')}}</td>
                            <td>{{$submission->status ? 'Completed':'Pending'}}</td>
                            <td>
                                <div class="button-group d-flex">
                                    <button {{$submission->status ? 'disabled':''}} href="" class="btn btn-luxe mr-2"
                                        type="submit"
                                        style="height: 39px">Complete
                                    </button>
                                </div>
                            </td>
                        </form>
                        <td>
                            @if ($submission->details == null)
                            <button disabled class=" btn btn-luxe mr-2">View
                            </button>
                            @else
                            <a class=" btn btn-luxe mr-2" href="{{route('admin.form-submit.show',$submission->id)}}"
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