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
    <div class="row m-0">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Forms</h5>
            <a class="btn btn-luxe rounded" href="{{route('admin.form-submit.index')}}">Submissions</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($forms as $form)
                    <tr>
                        <td>{{ $form->id }}</td>
                        <td>{{ $form->title }}</td>
                        <td>{{Carbon\Carbon::parse($form->created_at)->format('m-d-Y')}}</td>
                        <td>
                            <button class="btn btn-luxe rounded" onclick="update_event({{ $form }})">Emails</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center w-100">
            {{ $forms->links() }}
        </div>
    </div>
</div>

<!-- Create File  -->
<div class="update-event modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Emails</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.forms.update') }}" method="POST" class="d-block"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <input type="hidden" name="id" id="form_id" value="">
                    <div class="form-group row p-0 m-0">
                        <label for="">Add Email</label>
                        <div class="input-group">
                            <input type="text" class="form-control mr-2" id="add-new">
                            <button class="btn btn-luxe px-5" type="button" id="add-new-button">+</button>
                        </div>
                    </div>
                    <div class="row m-0 mt-3 p-0">
                        <div id="emails" class="w-100"></div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-luxe" id="save-event">Update</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    function update_event(form) {
        $('.update-event').modal('show')
        var data = form.emails

        var html = ''
        for(let i = 0; i < data.length; i++) {
            html += '<div class="email-row d-flex justify-content-between w-100 mb-2">'
             + data[i].email + 
             ' <button type="button" class="btn btn-danger btn-delete" onclick="remove_email(this)">&times;</button>' +
              ' <input type="hidden" name="emails[]" value="' + data[i].email + '"></div>'
        }
        $('.update-event').find('#emails').html(html)
        $('.update-event').find('#modal-title').html(form.title)
        $('.update-event').find('#form_id').val(form.id)

        $('.update-event').find('#add-new-button').click(function() {
            var new_email = $('.update-event').find('#add-new').val()
            if(new_email) {
                $('.update-event').find('#emails').append(
                    '<div class="email-row d-flex justify-content-between w-100 mb-2">' 
                    + new_email + 
                    ' <button type="button" class="btn btn-danger btn-delete" onclick="remove_email(this)">&times;</button>' + 
                    '<input type="hidden" name="emails[]" value="' + new_email + '"></div>')
                $('.update-event').find('#add-new').val('')
            }

        })
    }
    function remove_email(e) {
        $(e).parents('.email-row').remove()
    }
</script>
@endsection