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
                <h5 class="h5-luxe">{{$photographer->name}} - Properties</h5>
                <div>
                    <button class="btn btn-luxe px-5 py-2" onclick="create({{$photographer}})">Create</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Address</th>
                        <th>Images</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($photographer->properties as $property)
                        <tr id="tr-row">
                            <td id="td-row">{{ $property->address}} </td>
                            <td id="td-row">{{ $property->images()->count() }} </td>
                            <td id="td-row">{{ $property->created_at->setTimezone('America/New_York') }}</td>
                            <td id="td-row">
                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.photographers.properties.images.index',[$property->photographer_id,$property->id])}}"
                                       class="btn btn-luxe px-4 py-2 mr-2">
                                        Images
                                    </a>
                                    <button class="btn btn-luxe px-4 py-2 mr-2" onclick="update_event({{ $property }})">
                                        Edit
                                    </button>
                                    <form action="{{route('admin.photographers.properties.destroy',$property->id)}}"
                                          method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger py-2"
                                                onclick="confirm('Are you sure you want to delete this property?')">
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
    @include('admin.photographers.properties.modals.create')
    @include('admin.photographers.properties.modals.update')
    @include('admin.photographers.properties.modals.delete')

    @section('js')
        <script>
            function create (item) {
                $('.create-property').modal('show')
                $('.create-property').find('#photographer_id').val(item.id)
            }

            function delete_event (item) {
                $('.delete-property').modal('show')
                $('.delete-property').find('#property_id').val(item.id)
            }

            function update_event (item) {
                $('.update-property').modal('show')
                $('.update-property').find('#property_id').val(item.id)
                $('.update-property').find('#address').val(item.address)
            }
        </script>
    @endsection
@endsection
