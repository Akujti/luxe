@extends('layouts.app')
@section('js')
<script src="{{ asset('js/main.min.js') }}" defer></script>
@endsection
@section('css')
<link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row my-4">
        <div id='calendar' style="width: 100%; display: inline-block;"></div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create new event</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <form action="" method="POST">
                    @csrf
                    <input type="hidden" name="date" id="date">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="start">{{ __('Title') }}</label>
                            <div class='input-group date'>
                                <input type="text" id="appt" name="title" class="w-100">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start">{{ __('Location') }}</label>
                            <div class='input-group date'>
                                <input type="text" id="appt" name="location" class="w-100">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start">{{ __('Start Time') }}</label>
                            <div class='input-group date'>
                                <input type="time" id="appt" name="start" class="w-100">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="end">{{ __('End Time') }}</label>
                            <div class='input-group date'>
                                <input type="time" id="appt" name="end" class="w-100">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="save-event">Save</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            select: function(start, end, allDay, jsEvent, view) {
                $('.modal').modal('show');
            },
            initialView: 'dayGridMonth',
            editable: true,
            selectable: true,
        });
        calendar.render();
      });

</script>