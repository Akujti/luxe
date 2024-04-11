@extends('admin.layouts.app', ['active' => 'Brokersumo'])
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
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <h5 class="h5-luxe">Brokersumo Agents</h5>
                </div>
                <div class="w-100 d-lg-flex justify-content-between">
                    <form action="{{ route('admin.broker-sumo.store') }}" method="post" enctype='multipart/form-data'
                          class="mb-2">
                        @csrf
                        <label for="" class="w-100">General Report</label>
                        <input type="file" name="sheet">
                        <input type="submit" value="Upload" class="btn btn-luxe">
                    </form>
                    <form action="{{ route('admin.broker-sumo.store.yearly') }}" method="post"
                          enctype='multipart/form-data'
                          class="mb-5">
                        @csrf
                        <label for="" class="w-100">{{ date('Y') }} Report</label>
                        <input type="file" name="sheet">
                        <input type="submit" value="Upload" class="btn btn-luxe">
                    </form>
                </div>
                <form action="{{ route('admin.broker-sumo.destroy',1) }}" method="post"
                      class="mb-2"
                      onsubmit="return confirm('Are you sure you want to delete all Brokersumo data?');">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete All Brokersumo Data" class="btn btn-danger">
                </form>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Total Amount</th>
                            <th>{{ date('Y') }} Total Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($results as $result)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $result->agent_name }}</td>
                                <td>{{ '$' . number_format($result->sales_volumes) }}
                                </td>
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
