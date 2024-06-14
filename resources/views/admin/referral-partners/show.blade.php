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
                <h5 class="h5-luxe">Referral Partner Details</h5>
                <div>
                    <button class="btn btn-luxe px-5 py-2"><a class="text-light"
                                                              href="#" onclick="create_event()">Create</a></button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <form action="{{ route('admin.referral-partners.metas.store',Route::current()->parameter('referral_partner')) }}"
                              class="row p-0 m-0" method="POST" enctype="multipart/form-data">
                            @csrf
                            <td>
                                <input class="form-control" type="hidden" value="img" name="type">
                                <input class="form-control" type="text" value="Image" disabled>
                            </td>
                            <td>
                                <input class="form-control" type="hidden" value="Logo" name="name">
                                <input class="form-control" type="text" value="Logo" disabled></td>
                            <td><input class="form-control p-1" type="file" name="value" required></td>
                            <td>-</td>
                            <td>
                                <button class="btn btn-luxe px-4 py-2" type="submit">Save</button>
                            </td>
                            </td>
                        </form>
                    </tr>
                    @forelse ($referralPartner->meta_items as $row)
                        @if($row->name != 'Logo')
                            <form action="{{ route('admin.referral-partners.metas.update',[$row->referral_partner_id,$row]) }}"
                                  method="POST">
                                @csrf
                                @method('PUT')
                                <tr>
                                    <td>
                                        <select name="type" class="form-control">
                                            <option value="address" {{$row->type =='address' ? 'selected' :''}}>Address
                                            </option>
                                            <option value="email" {{$row->type =='email' ? 'selected' :''}}>Email
                                            </option>
                                            <option value="general" {{$row->type =='general' ? 'selected' :''}}>General
                                            </option>
                                            <option value="tel" {{$row->type =='tel' ? 'selected' :''}}>Tel</option>
                                            <option value="web" {{$row->type =='web' ? 'selected' :''}}>Web</option>
                                        </select>
                                    </td>
                                    <td><input class="form-control" type="text" value="{{$row->name}}" name="name"></td>
                                    <td><input class="form-control" type="text" value="{{$row->path}}" name="value">
                                    </td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>
                                        <button class="btn btn-luxe px-4 py-2" type="submit">Update</button>
                                        <button class="btn btn-danger py-2" type="button"
                                                onclick="delete_event({{ $row }})">Delete
                                        </button>
                                    </td>
                                </tr>
                            </form>
                        @endif
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

    @include('admin.referral-partners.modals.create-meta')
    @include('admin.referral-partners.modals.delete-meta')

    @section('js')
        <script>
            function delete_event (row) {
                const form = $('.delete-referral-partner-meta').find('form')
                var url = '{{ route("admin.referral-partners.metas.delete", ["referral_partner_id","id"]) }}'
                url = url.replace('referral_partner_id', row.referral_partner_id)
                url = url.replace('id', row.id)
                form.attr('action', url)
                $('.delete-referral-partner-meta').modal('show')
            }

            function create_event () {
                $('.create-referral-partner-meta').modal('show')
            }
        </script>
    @endsection
@endsection
