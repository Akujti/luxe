@extends('admin.layouts.app', ['active' => 'Broker Sumo'])
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
        text-align: center !important
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
                        <th>Total Transactions</th>
                        <th>Total Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $result)
                    <tr>
                        <td>{{$result->id}}</td>
                        <td>{{$result->agent_name}}</td>
                        <td>{{$result->total_listing}} Transactions</td>
                        <td>{{'$' . number_format($result->total_amounts)}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $results->links() }}
    </div>
</div>
@section('js')
@endsection
@endsection