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

        .btn {
            border-radius: 10px !important;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="m-0">
            <div class="w-100 d-flex justify-content-between align-items-center mb-5">
                <h5 class="h5-luxe">Event Galleries</h5>
                <div>
                    <button class="btn btn-luxe px-5 py-2" onclick="create()">Create</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Images</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($event_galleries as $gallery)
                        <tr id="tr-row">
                            <td id="td-row">{{ $gallery->title}}</td>
                            <td id="td-row"><a href="{{ $gallery->link}}" target="_blank">Click Here</a></td>
                            <td id="td-row">{{ $gallery->images()->count() }} </td>
                            <td id="td-row">{{ $gallery->created_at->setTimezone('America/New_York') }}</td>
                            <td id="td-row">
                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.event-galleries.show',$gallery)}}"
                                       class="btn btn-luxe px-4 py-2 mr-2">
                                        Images
                                    </a>
                                    <button class="btn btn-luxe px-4 py-2 mr-2" onclick="update_event({{ $gallery }})">
                                        Edit
                                    </button>
                                    <form action="{{route('admin.event-galleries.destroy',$gallery->id)}}"
                                          method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger py-2"
                                                onclick="confirm('Are you sure you want to delete this gallery?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.event-galleries.modals.create')
    @include('admin.event-galleries.modals.update')

    @section('js')
        <script>
            function create () {
                $('.create-gallery').modal('show')
            }

            function update_event (item) {
                console.log(item)
                $('.update-gallery').modal('show')
                $('.update-gallery').find('#gallery_id').val(item.id)
                $('.update-gallery').find('#title').val(item.title)
                $('.update-gallery').find('#link').val(item.link)
                $('.update-gallery').find('#date').val(item.date)
            }
        </script>
    @endsection
@endsection
