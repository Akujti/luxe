@extends('layouts.app')
@section('css')
@endsection
@section('content')
<div class="container">
    <div class="row m-0 w-100 justify-content-center">
        <h1>Email Form Submission</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Template Name</th>
                        <th scope="col">Agent Name</th>
                        <th scope="col">Agent Email</th>
                        <th scope="col">Date Sent</th>
                        <th scope="col">Status Completed</th>
                        <th scope="col">Action</th>
                        <th scope="col">View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($submissions as $submission)
                    <tr>
                        <form action="{{route('template-submit.update',$submission)}}" method="POST">
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
                            <a class=" btn btn-luxe mr-2" href="{{route('template-submit.show',$submission->id)}}"
                                style="height: 39px">View
                            </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection