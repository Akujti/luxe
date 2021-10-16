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
                        <th scope="col">Date Sent</th>
                        <th scope="col">Status Completed</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($submissions as $submission)
                    <form action="{{route('template-submit.update',$submission)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$submission->template->title}}</td>
                            <td>{{Carbon\Carbon::parse($submission->created_at)->format('m-d-Y')}}</td>
                            <td>{{$submission->status ? 'Yes':'Pending'}}</td>
                            <td>
                                <div class="button-group d-flex">
                                    <button {{$submission->status ? 'disabled':''}} href="" class="btn btn-luxe mr-2"
                                        type="submit"
                                        style="height: 39px">Complete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </form>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection