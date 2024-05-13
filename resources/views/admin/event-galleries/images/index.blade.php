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
            <div class="w-100 d-flex justify-content-between align-items-center mb-3">
                <h5 class="h5-luxe">{{$event_gallery->title}} - Images</h5>
            </div>
            <div class="mb-3">
                <form method="POST" enctype="multipart/form-data"
                      action="{{ route('admin.event-galleries.images.store',$event_gallery) }}">
                    @csrf
                    <div class="row m-0 p-0 align-items-baseline">
                        <div class="form-group mb-3">
                            <label for="start">Image</label>
                            <div class='input-group'>
                                <input type="file" class="w-100 form-control p-1" name="image" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-luxe">Upload Image</button>
                </form>

            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($event_gallery->images as $image)
                        <tr id="tr-row">
                            <td id="td-row">
                                <img src="{{$image->url_small}}" alt="" width="50" height="50" class="rounded">
                            </td>
                            <td id="td-row">{{ $image->created_at->setTimezone('America/New_York') }}</td>
                            <td id="td-row">
                                <div>
                                    <form
                                        action="{{route('admin.event-galleries.images.destroy',[$image->event_gallery_id,$image])}}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger py-2"
                                                onclick="confirm('Are you sure you want to delete this image?')">
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
    @include('admin.photographers.properties.images.modals.delete')

    @section('js')
        <script>
            function delete_event (item) {
                $('.delete-image').modal('show')
                $('.delete-image').find('#image_id').val(item.id)
            }
        </script>
    @endsection
@endsection
