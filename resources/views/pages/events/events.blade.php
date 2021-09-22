@extends('layouts.app')
@section('js')
    <script src="{{ asset('js/main.min.js') }}" defer></script>
@endsection
@section('css')
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
    <style>
        .fc-event-title {
            color: black;
        }

        .fc-h-event {
            background: #FFCF40;
            border: 1px solid rgb(136, 136, 136);
            margin-bottom: 3px;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row my-4">
            <div id='calendar' style="width: 100%; display: inline-block;"></div>
        </div>
        @if (Auth::user()->isAdmin)
            <div class="create-event modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Create New Event</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="date" id="date">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="start">{{ __('Title') }}</label>
                                    <div class='input-group date'>
                                        <input type="text" id="title" name="title" class="w-100 form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="start">{{ __('Location') }}</label>
                                    <div class='input-group date'>
                                        <input type="text" id="location" name="location" class="w-100 form-control"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="start">{{ __('RSVP') }}</label>
                                    <div class='input-group date'>
                                        <input type="text" id="rsvp" name="rsvp" class="w-100 form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="start">{{ __('ZOOM') }}</label>
                                    <div class='input-group date'>
                                        <input type="text" id="zoom" name="zoom" class="w-100 form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="start">{{ __('Start Time') }}</label>
                                    <div class='input-group date'>
                                        <input type="time" id="start_time" name="start_time" class="w-100 form-control"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="end">{{ __('End Time') }}</label>
                                    <div class='input-group date'>
                                        <input type="time" id="end_time" name="end_time" class="w-100 form-control"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="start">{{ __('Event Image') }}</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="form-control" id="inputGroupFile01"
                                               style="padding: 3px;">
                                        {{-- <label class="custom-file-label" for="inputGroupFile01">Choose file</label> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-luxe" id="save-event">Save</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
        @endif
        <div class="single-event modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Event</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ route('events.destroy',1) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="event_id" id="event_id">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="">
                                    <label for="start">{{ __('Title') }}</label>
                                    <div class='input-group date'>
                                        <input type="text" id="title" name="title" class="w-100 form-control" required
                                               disabled>
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <label for="start">{{ __('Location') }}</label>
                                    <div class='input-group date'>
                                        <input type="text" id="location" name="location" class="w-100 form-control"
                                               required
                                               disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group d-flex">
                                <div class="w-50 pr-1">
                                    <label for="start">{{ __('Start Time') }}</label>
                                    <div class='input-group date'>
                                        <input type="time" id="start_time" name="start_time" class="w-100 form-control"
                                               required disabled>
                                    </div>
                                </div>
                                <div class="w-50 pl-1">
                                    <label for="end">{{ __('End Time') }}</label>
                                    <div class='input-group date'>
                                        <input type="time" id="end_time" name="end_time" class="w-100 form-control"
                                               required
                                               disabled>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group" id="rsvp_group">
                                <div class='input-group date'>
                                    <a id="rsvp" href="" target="_blank" rel="noopener noreferrer"
                                       class="btn btn-luxe w-100">{{ __('OPEN RVSP') }}</a>
                                </div>
                            </div>
                            <div class="form-group" id="zoom_group">
                                <div class='input-group date'>
                                    <a id="zoom" href="" target="_blank" rel="noopener noreferrer"
                                       class="btn btn-primary w-100">{{ __('OPEN ZOOM') }}</a>
                                </div>
                            </div>
                            <div class="form-group event-image">
                                <label for="start">{{ __('Event Image') }}</label>
                                <div class="img-wrapper">
                                    <img id="image-id" src="" alt="" class="w-100">
                                </div>
                            </div>
                        </div>
                        @if (Auth::user()->isAdmin)
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger" id="delete_event">Delete</button>
                            </div>
                        @endif
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const data = @json($events);
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            select: function (start, end, allDay, jsEvent, view) {
                $('.create-event').modal('show');
                $('#date').val(start.startStr);
            },
            eventClick: function (event, element) {
                var event = event.event;
                console.log(event._def.publicId);
                // Display the modal and set the values to the event values.
                $('.single-event').modal('show');
                $('.single-event').find('#event_id').val(event._def.publicId);
                $('.single-event').find('#title').val(event.title);
                $('.single-event').find('#location').val(event.extendedProps.location);
                $('.single-event').find('#start_time').val(event.extendedProps.start_time);
                $('.single-event').find('#end_time').val(event.extendedProps.end_time);
                $('.single-event').find('#user_id').val(event.extendedProps.user_id);
                if (event.extendedProps.rsvp != null) {
                    $('.single-event').find('#rsvp').attr('href', event.extendedProps.rsvp);
                    $('#rsvp_group').css('display', 'block');
                } else {
                    $('#rsvp_group').css('display', 'none');
                }
                if (event.extendedProps.zoom != null) {
                    $('.single-event').find('#zoom').attr('href', event.extendedProps.zoom);
                    $('#zoom_group').css('display', 'block');
                } else {
                    $('#zoom_group').css('display', 'none');
                }
                $('.single-event').find('.modal-footer').css('display', 'none');
                if (event.extendedProps.user_id == {{Auth::id()}}) {
                    $('.single-event').find('.modal-footer').css('display', 'flex');
                }
                if (event.extendedProps.image != null) {
                    $('.single-event').find('.event-image').css('display', 'block');
                    $('.single-event').find('#image-id').attr('src', '/storage/' + event.extendedProps.image);
                } else {
                    $('.single-event').find('.event-image').css('display', 'none');
                }
            },
            initialView: 'dayGridMonth',
            selectable: true,
            events: data,
            // events: [{
            //     title: "My repeating event",
            //     date: '2021-09-23',
            //     start_time: '10:00', // a start time (10am in this example)
            //     end_time: '14:00',
            //     startRecur: '2021-09-23',
            //     daysOfWeek: [1, 2]
            // }],
        });
        calendar.render();
    });
</script>
