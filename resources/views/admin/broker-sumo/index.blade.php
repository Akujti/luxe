@extends('admin.layouts.app', ['active' => 'Broker Sumo'])

@section('css')
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Brokersumo Agents</h5>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Total Listings</th>
                        <th>Total Points</th>
                        <th>New Points</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $result)
                    <tr>
                        <td>{{$result->id}}</td>
                        <td>{{$result->agent_name}}</td>
                        <td>{{$result->total_listing}} Listings</td>
                        <td>{{$result->total_points}}</td>
                        <td>{{$result->new_point}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@section('js')
@endsection
@endsection