@extends('layouts.app', ['active' => 'Brokersumo'])
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
            <div>
                <h5 class="h5-luxe">Leaderboard - Yearly Sales Volumes</h5>
                <p>Last Updated At: {{ $latest_upload }}</p>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Agent</th>
                            <th>Total Sales Volumes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $result)
                            <tr>
                                <td>{{ $results->currentPage() * $results->perPage() - $results->perPage() + ($loop->index + 1) }}
                                </td>
                                <td>{{ $result->agent_name }}</td>
                                <td>{{ '$' . number_format($result->yearly_sales_volumes) }}
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
