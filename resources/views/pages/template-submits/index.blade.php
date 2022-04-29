@extends('admin.layouts.app', ['active' => 'Marketing_requests'])
@section('css')
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0 w-100 justify-content-center">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Marketing Requests</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Template Name</th>
                        <th scope="col">Agent Name</th>
                        <th scope="col">Agent Email</th>
                        <th scope="col">Date Sent</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        <th scope="col">View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($submissions as $submission)
                    <tr>
                        <form action="{{route('admin.marketing-requests.update',$submission)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$submission->template->title}}</td>
                            <td>{{$submission->agent_name}}</td>
                            <td>{{$submission->agent_email}}</td>
                            <td>{{Carbon\Carbon::parse($submission->created_at)->format('m-d-Y')}}</td>
                            <td>{{$submission->status ? 'Completed':'Pending'}}</td>
                            <td>
                                <div class="button-group d-flex">
                                    @if (!$submission->status)
                                    <button href="" class="btn btn-luxe mr-2" type="submit">Complete</button>
                                    @endif
                                </div>
                            </td>
                        </form>
                        <td>
                            @if ($submission->details == null)
                            <button disabled class=" btn btn-luxe mr-2">View
                            </button>
                            @else
                            <a class=" btn btn-luxe mr-2"
                                href="{{route('admin.marketing-requests.show',$submission->id)}}"
                                style="height: 39px">View
                            </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$submissions->links()}}
        </div>
    </div>
</div>
@endsection