@extends('admin.layouts.app', ['active' => 'referral-partners'])

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
            height: 120px !important;
            vertical-align: middle !important;
        }

        .btn {
            border-radius: 10px !important;
        }

        #img {
            border-radius: 10px;
        }

        @media (max-width: 576px) {
            .form-group {
                padding: 0px !important;
            }
        }

        .language-item,
        .language-item-new {
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            font-family: 'gothicregular';
            margin-bottom: 7px;
        }

        .language-item input,
        .language-item-new input {
            padding: 7px;
            height: 45px;
            margin: 0px;
        }

    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row m-0">
            <div class="w-100 d-flex justify-content-between align-items-center mb-5">
                <h5 class="h5-luxe">Referral Partner Categories</h5>
                <div>
                    <button class="btn btn-luxe px-5 py-2"><a class="text-light"
                                                              href="#" onclick="create_event()">Create</a></button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @forelse ($rows as $row)
                        <tr>
                            <td><img src="{{ $row->icon_url }}" id="img" height="75px"></td>
                            <td>{{ $row->title }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>
                                <button class="btn btn-luxe px-4 py-2" onclick="update_event({{ $row }})">Edit</button>
                                <button class="btn btn-danger py-2"
                                        onclick="delete_event({{ $row }})">Delete
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No Record Found.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.referral-partner-categories.modals.create')
    @include('admin.referral-partner-categories.modals.update')
    @include('admin.referral-partner-categories.modals.delete')

    @section('js')
        <script>
            function delete_event (row) {
                $('.delete-event').modal('show')
                $('.delete-event').find('#referral_partner_category_id').val(row.id)
            }

            function update_event (row) {
                $('.update-event').modal('show')
                $('.update-event').find('#referral_partner_category_id').val(row.id)
                $('.update-event').find('#title').val(row.title)
            }

            function create_event () {
                console.log(123)
                $('.create-event').modal('show')
            }
        </script>
    @endsection
@endsection
