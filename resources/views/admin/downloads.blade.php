@extends('admin.layouts.app', ['active' => 'Forms'])

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
@endsection
@section('content')
    <div class="container-fluid">
        <div class="">
            <div class="w-100 d-flex align-items-center mb-2">
                <h5 class="h5-luxe">Files</h5>
            </div>
            <form action="" method="get" class="row">
                <div class="col-md-2 form-group">
                    <input type="text" name="title" class="form-control" placeholder="Title"
                        value="{{ isset($_GET['title']) ? $_GET['title'] : '' }}">
                </div>
                <div class="col-md-2 form-group">
                    <button class="btn btn-luxe w-100 form-control" type="submit">Search</button>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Directory</th>
                            <th>Downloads</th>
                            <th>Created at</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($files as $file)
                            <tr>
                                <td>{{ $file->id }}</td>
                                <td>{{ $file->title }}</td>
                                <td>{{ $file->folder ? $file->folder->title : '-' }} </td>
                                <td>{{ $file->downloads_count }} </td>
                                <td>{{ Carbon\Carbon::parse($file->created_at)->format('m-d-Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center w-100">
                {{ $files->links() }}
            </div>
        </div>
    </div>
@endsection
