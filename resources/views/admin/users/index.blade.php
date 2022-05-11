@extends('admin.layouts.app', ['active' => 'Users'])

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
        <form action="{{ route('admin.users.index') }}" method="GET" class="d-block mb-4">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $_GET['name'] ?? '' }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $_GET['email'] ?? '' }}">
                </div>
            </div>
            <div class="form-footer p-0">
                <input type="submit" class="btn btn-luxe m-0" value="Search">
            </div>
        </form>
        <div class="row m-0">
            <div class="w-100 d-flex justify-content-between align-items-center mb-5">
                <h5 class="h5-luxe">Users</h5>
                <div>
                    <button class="btn btn-luxe px-5 py-2"><a class="text-light"
                            href="{{ route('admin.users.create_form') }}">Create</a></button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td><img src="{{ $user->avatar }}" id="img" height="75px"></td>
                                <td>{{ $user->profile ? $user->profile->fullname : '' }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                                <td>
                                    <button class="btn btn-luxe px-4 py-2"><a class="text-light"
                                            href="{{ route('admin.users.update_form', $user->id) }}">Edit</a></button>
                                    <button class="btn btn-danger py-2"
                                        onclick="delete_event({{ $user }})">Delete</button>
                                    <button class="btn btn-primary py-2"
                                        onclick="window.location.href = '{{ url('view-profile/' . $user->id) }}'">View</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center w-100">
                {{ $users->links() }}
            </div>
        </div>
    </div>

    @include('admin.users.modals.delete')

@section('js')
    <script>
        function delete_event(row) {
            $('.delete-event').modal('show');
            $('.delete-event').find('#user_id').val(row.id);
        };
    </script>
@endsection
@endsection
