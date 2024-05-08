@extends('admin.layouts.app', ['active' => 'Photographers'])

@section('css')
    <style>
        th,
        td {
            text-align: center;
        }

        #td-row,
        #th-row {
            width: 17% !important;
            text-align: center;
            border: none !important
        }

        #td-row {
            height: 90px;
        }

        .title {
            background-color: #262626;
            color: #fff;
            padding: 8px;
            font-family: 'gothicbold';
        }

        .title-item {
            font-family: 'gothicbold';
            text-align: start;
        }

        .card {
            border: none !important;
        }

        .card-header {
            border-top: 1px solid rgba(0, 0, 0, .125);
            border-bottom: 1px solid transparent !important;
        }

        th {
            font-family: 'gothicbold' !important;
        }

        td {
            vertical-align: middle !important;
            font-family: 'gothicregular' !important;
        }

        @media screen and (max-width: 500px) {
            #td-row,
            #th-row {
                width: 50% !important;
            }

            .card-body {
                width: 473px !important;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="m-0">
            <div class="w-100 d-flex justify-content-between align-items-center mb-5">
                <h5 class="h5-luxe">Photographers</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Properties</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($photographers as $photographer)
                        <tr id="tr-row">
                            <td id="td-row">
                                <div>
                                    <img src="{{$photographer->avatar_url}}" alt="" class="rounded-circle me-3"
                                         width="50">
                                    {{ $photographer->name}}
                                </div>
                            </td>
                            <td id="td-row">{{ $photographer->email}} </td>
                            <td id="td-row">{{ $photographer->properties()->count() }} </td>
                            <td id="td-row">{{ $photographer->created_at->setTimezone('America/New_York') }}</td>
                            <td id="td-row"><a class="btn btn-link"
                                               href="{{ route('admin.photographers.show', $photographer->id) }}">View</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex w-100 justify-content-center">
            {{ $photographers->links() }}
        </div>
    </div>
@endsection
