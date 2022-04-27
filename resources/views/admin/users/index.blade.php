@extends('admin.layouts.app', ['active' => 'Users'])

@section('css')
<style>
    th,td {
        text-align: center;
    }
    th {
        border:none !important;
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
    .language-item, .language-item-new {
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
        font-family: 'gothicregular';
        margin-bottom: 7px;
    }
    .language-item input, .language-item-new input {
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
            <h5 class="h5-luxe">Users</h5>
            <div>
                <button class="btn btn-luxe px-5 py-2" onclick="create()">Create</button>
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
                    @foreach($users as $user)
                    <tr>
                        <td><img src="{{ $user->avatar }}" id="img" height="75px"></td>
                        <td>{{ $user->profile ? $user->profile->fullname : '' }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td>
                            <button class="btn btn-luxe px-4 py-2" onclick="update_event({{ $user }})">Edit</button>
                            <button class="btn btn-danger py-2" onclick="delete_event({{ $user }})">Delete</button>
                            <button class="btn btn-primary py-2" onclick="window.location.href = '{{ url('view-profile/'. $user->id) }}'">View</button>
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

@include('admin.users.modals.create')
@include('admin.users.modals.delete')
@include('admin.users.modals.update')

@section('js')
<script>
    function create() {
        $('.create-event').modal('show');
    };
    function delete_event(row) {
        $('.delete-event').modal('show');
        $('.delete-event').find('#user_id').val(row.id);
    };
    function update_event(row) {
        $('.update-event').modal('show');
        $('.update-event').find('#user_id').val(row.id);
        $('.update-event').find('#role').val(row.role).change();
        $('.update-event').find('#email').val(row.email);
        if(row.profile) {
            $('.update-event').find('#fullname').val(row.profile.fullname);
            $('.update-event').find('#address').val(row.profile.address);
            $('.update-event').find('#phone').val(row.profile.phone);

            let html = ''
            for(let i = 0; i < row.profile.languages.length; i++) {
                html += '<div class="language-item"> <input type="text" class="form-control" name="languages[]" value="' + row.profile.languages[i] + '"> <button type="button" class="btn btn-danger ml-3" onclick="remove_language(this)">&times;</button></div>'
            }
            $('.update-event').find('.language-section').html(html);
            $('.update-event').find('#support_specialists').val(row.profile.support_specialists);
            $('.update-event').find('#loan_officer').val(row.profile.loan_officer);
        }
    };
</script>
@endsection
@endsection
