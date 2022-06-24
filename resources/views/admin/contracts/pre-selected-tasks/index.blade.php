@extends('admin.layouts.app', ['active' => 'Pre-selected-tasks'])

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
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Pre Selected Tasks</h5>
            <div>
                <button class="btn btn-luxe px-5 py-2" onclick="create_event()">Create</button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ Str::limit($task->description, 60) }}</td>
                        <td>{{ $task->date }}</td>
                        <td>{{ $task->created_at->diffForHumans() }}</td>
                        <td>
                            <button class="btn btn-luxe px-4 py-2" onclick="update_event({{ $task }})">Edit</button>
                            <button class="btn btn-danger py-2" onclick="delete_event({{ $task }})">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center w-100">
            {{ $tasks->links() }}
        </div>
    </div>
</div>

<x-modal title="Create Task" id="create-task" centered="true">
    <x-slot name="body">
        <form action="{{ route('admin.contracts.pre_selected_tasks.create') }}" class="row p-0 m-0" method="POST">
            @csrf
            <div class="form-group col-12">
                <label for="">Title</label>
                <div class="input-group">
                    <input type="text" name="title" class="form-control" required>
                </div>
            </div>
            <div class="form-group col-12">
                <label for="">Description</label>
                <div class="input-group">
                    <textarea name="description" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group col-12">
                <label for="">Date</label>
                <div class="input-group">
                    <input type="date" name="date" class="form-control" required>
                </div>
            </div>
    </x-slot>
    <x-slot name="footer">
        <button type="button" class="btn" data-dismiss="modal">Close</button>
        <button type="submit" class="btn">Submit</button>
    </x-slot>
    </form>
</x-modal>

<x-modal title="Update Task" id="update-task" centered="true">
    <x-slot name="body">
        <form action="{{ route('admin.contracts.pre_selected_tasks.update') }}" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="id" id="id" class="form-control">
            <div class="form-group">
                <label for="">Title</label>
                <div class="input-group">
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <div class="input-group">
                    <textarea name="description" rows="5" id="description" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="">Date</label>
                <div class="input-group">
                    <input type="date" name="date" id="date" class="form-control" required>
                </div>
            </div>
    </x-slot>
    <x-slot name="footer">
        <button type="button" class="btn" data-dismiss="modal">Close</button>
        <button type="submit" class="btn">Submit</button>
    </x-slot>
    </form>
</x-modal>

<x-modal title="Delete Task" id="delete-task" centered="true">
    <x-slot name="body">
        <form action="{{ route('admin.contracts.pre_selected_tasks.delete') }}" method="POST">
            @method('DELETE')
            @csrf
            <input type="hidden" name="id" id="id" class="form-control">
            <h3 class="gothicregular">Are you sure you want to delete this?</h3>
    </x-slot>
    <x-slot name="footer">
        <button type="button" class="btn" data-dismiss="modal">Close</button>
        <button type="submit" class="btn">Submit</button>
    </x-slot>
    </form>
</x-modal>

@section('js')
<script>
    function create_event() {
        $('#create-task').modal('show');
        $('#create-task :input').prop('disabled', false)
        $('#update-task :input').prop('disabled', true)
    }
    function update_event(row) {
        $('#update-task').modal('show');
        $('#update-task').find('#id').val(row.id);
        $('#update-task').find('#title').val(row.title);
        $('#update-task').find('#description').val(row.description);
        $('#update-task').find('#date').val(row.date);
        $('#update-task :input').prop('disabled', false)
        $('#create-task :input').prop('disabled', true)
    };
    function delete_event(row) {
        $('#delete-task').modal('show');
        $('#delete-task').find('#id').val(row.id);
        $('#update-task :input').prop('disabled', true)
        $('#create-task :input').prop('disabled', true)
    };
</script>
@endsection
@endsection