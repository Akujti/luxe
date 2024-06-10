@extends('admin.layouts.app', ['active' => 'Orders'])
@section('content')
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

    <div class="container-fluid">
        <div class="m-0">
            <div class="w-100 d-flex justify-content-between align-items-center mb-5">
                <h5 class="h5-luxe">Notifications</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Notification</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($notifications as $notification)
                        <tr id="tr-row">
                            <td id="td-row">{{$notification->title}}</td>
                            <td id="td-row">
                                <button class="btn btn-luxe show-emails"
                                        data-notification="{{json_encode($notification)}}">
                                    Emails
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex w-100 justify-content-center">
            {{ $notifications->links() }}
        </div>
    </div>
    <div class="update-emails modal fade modal-new" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-title">Emails</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.notifications.update') }}" method="POST" class="d-block"
                          enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <input type="hidden" name="notification_id" id="notification_id" value="">
                        <div class="form-group row p-0 m-0">
                            <label for="">Add Email</label>
                            <div class="input-group">
                                <input type="text" class="form-control mr-2" id="add-new">
                                <button class="btn btn-luxe px-5" type="button" id="add-new-button">+</button>
                            </div>
                        </div>
                        <div class="row m-0 mt-3 p-0">
                            <table class="table text-left">
                                <thead>
                                <tr class="text-left">
                                    <th class="text-left">Email</th>
                                    <th>BCC</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody id="emailList" class="text-left">
                                </tbody>
                            </table>
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

    <script>
        $(document).ready(function () {
            $('.show-emails').on('click', function () {
                var notification = $(this).data('notification')
                $('#emailList').empty()

                notification.emails.forEach(function (email) {
                    addToList(email)
                })
                $('.update-emails #notification_id').val(notification.id)
                $('.update-emails').modal('show')
            })

            $('#emailList').on('click', '.remove-email', function () {
                $(this).closest('tr').remove()
            })

            $('.update-emails').on('click', '#add-new-button', function () {
                var email = $('#add-new').val()
                $('#add-new').val('')
                if (email)
                    addToList({
                        email: email
                    })
            })

            function addToList (item) {
                $('#emailList').append(
                  '<tr class="text-left">' +
                  '<td class="text-left"><input name=emails[] type="hidden" value="' + item.email + '">' + item.email + '</td>' +
                  '<td><input type="checkbox" ' + (item.bcc ? 'checked' : '') + ' name="bcc[' + item.email + ']""></td>' +
                  '<td><button type="button" class="remove-email btn btn-danger">x</button></td>' +
                  '</tr>'
                )
            }
        })
    </script>
@endsection
