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

        .fc-daygrid-event,
        .fc-daygrid-event:hover {
            background: #F2F2F2;
            border: 1px solid #F2F2F2;
            margin-bottom: 3px;
            padding: 5px;
            border-radius: 5px;
        }

        .fc-daygrid-event-dot {
            display: none !important;
        }

        .fc .fc-daygrid-day.fc-day-today {
            background-color: transparent !important;
        }

        .fc .fc-daygrid-day {
            padding: 0px 5px;
        }

        .fc .fc-button {
            border-radius: 10px;
            padding: 10px 20px;
        }

        .title h1 {
            font-family: 'gothicbold';
        }

        .fc-daygrid-event.in_person_trainings {
            background-color: #6BE386;
        }

        .fc-daygrid-event.zoom_trainings {
            background-color: #A5C6FF;
        }

        .fc-daygrid-event.tours {
            background-color: #F2F256;
        }

        .fc-daygrid-event.team_office_meetings {
            background-color: #f0a3b1;
        }

        .fc-daygrid-event.career_fair {
            background-color: #99ec33;
        }

        .fc-daygrid-event.volunteering {
            background-color: #ed87fb;
        }

        .fc-daygrid-event.holidays {
            background-color: #2ebbfc;
        }

        .fc-daygrid-event.luxe_coaching_program {
            background-color: #ffc107;
        }

        .modal-new select {
            border-radius: 3px;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row w-100 m-0 mb-5">
            <div class="col-12 title mb-3 text-center">
                <h1>LUXE Events</h1>
                <a class="btn btn-luxe" href="{{ route('my.events') }}">My Events</a>
            </div>
            <div id='calendar' style="width: 100%; display: inline-block;"></div>
        </div>
        @if ($isAdmin)
            <div class="create-event modal fade modal-new" tabindex="-1" role="dialog">
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
                                        <input type="text" id="title" name="title" class="w-100 form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="start">{{ __('Location') }}</label>
                                    <div class='input-group date'>
                                        <input type="text" id="location" name="location" class="w-100 form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group w-50 pr-1">
                                        <label for="start">{{ __('Start Time') }}</label>
                                        <div class='input-group date'>
                                            <input type="time" id="start_time" name="start_time"
                                                class="w-100 form-control">
                                        </div>
                                    </div>
                                    <div class="form-group w-50 pl-1">
                                        <label for="end">{{ __('End Time') }}</label>
                                        <div class='input-group date'>
                                            <input type="time" id="end_time" name="end_time" class="w-100 form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="start">{{ __('RSVP') }}</label>
                                    <div class='input-group date'>
                                        <input type="url" id="rsvp" name="rsvp" class="w-100 form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="start">{{ __('ZOOM') }}</label>
                                    <div class='input-group date'>
                                        <input type="url" id="zoom" name="zoom" class="w-100 form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="start">Event Type</label>
                                    <select class="form-group form-select mb-0" name="type">
                                        <option value="-" selected>Select event type</option>
                                        <option value="in_person_trainings">In Person Traninings</option>
                                        <option value="zoom_trainings">Zoom Trainings</option>
                                        <option value="tours">Tours</option>
                                        <option value="team_office_meetings">Team/Office Meetings</option>
                                        <option value="career_fair">Career Fair</option>
                                        <option value="holidays">Holidays</option>
                                        <option value="volunteering">Volunteering</option>
                                        <option value="luxe_coaching_program">LUXE Coaching Program</option>
                                    </select>
                                </div>
                                @if ($isAdmin)
                                    <div class="form-group">
                                        <label for="start">Status</label>
                                        <select class="form-group form-select mb-0" name="status">
                                            <option value="0" selected>Public</option>
                                            <option value="1">Private</option>
                                        </select>
                                    </div>
                                @endif
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
        <div class="single-event modal fade modal-new" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Event</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body mb-0 pb-0" id="event_attend_form_wrapper">
                        <form id="event_attend_form" action="{{ route('events.attend') }}" method="POST"
                            class="m-0 p-0">
                            @csrf
                            <input type="hidden" name="event_id" id="event_id_attend">
                            <input type="hidden" name="status" id="event_attend_status">
                            <label>Are you going to attend this event?</label>
                            <br>
                            <button class="btn btn-luxe" onclick="attend_event(1)">Yes</button>
                            <button class="btn btn-luxe" onclick="attend_event(0)">No</button>
                        </form>
                    </div>
                    <form action="{{ route('events.update', 0) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="event_id" id="event_id_1">
                        <div class="modal-body">
                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'other')
                                <a class="btn btn-luxe mb-3" href="" id="event_stats_link">Show attendance</a>
                            @endif
                            <div class="form-group">
                                <div class="">
                                    <label for="start">{{ __('Title') }}</label>
                                    <div class='input-group date'>
                                        <input type="text" id="title" name="title"
                                            class="w-100 form-control update_field" disabled required>
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <label for="start">{{ __('Location') }}</label>
                                    <div class='input-group date'>
                                        <input type="text" id="location" name="location"
                                            class="w-100 form-control update_field" disabled required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group d-flex">
                                <div class="w-50 pr-1">
                                    <label for="start">{{ __('Start Time') }}</label>
                                    <div class='input-group date'>
                                        <input type="time" id="start_time" name="start_time"
                                            class="w-100 form-control update_field" disabled required>
                                    </div>
                                </div>
                                <div class="w-50 pl-1">
                                    <label for="end">{{ __('End Time') }}</label>
                                    <div class='input-group date'>
                                        <input type="time" id="end_time" name="end_time"
                                            class="w-100 form-control update_field" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="rsvp_group">
                                <div class='input-group date'>
                                    @if ($isAdmin)
                                        <label for="rsvp1">{{ __('RSVP') }}</label>
                                        <input type="url" name="rsvp" id="rsvp1"
                                            class="w-100 form-control update_field" disabled>
                                    @endif
                                    <a id="rsvp" href="" target="_blank" rel="noopener noreferrer"
                                        class="btn btn-luxe w-100 mt-2">{{ __('OPEN RVSP') }}</a>
                                    {{-- <a id="add_to_calendar" href="" target="_blank" rel="noopener noreferrer"
                                        class="btn btn-luxe w-100 mt-2 " style="color: white !important;">
                                        ADD TO CALENDAR</a> --}}
                                </div>
                            </div>
                            <div class="form-group" id="zoom_group">
                                <div class='input-group date'>
                                    @if ($isAdmin)
                                        <label for="zoom1">{{ __('ZOOM') }}</label>
                                        <input type="url" name="zoom" id="zoom1"
                                            class="w-100 form-control update_field" disabled>
                                    @endif
                                    <a id="zoom" href="" target="_blank" rel="noopener noreferrer"
                                        class="btn btn-luxe w-100 mt-2" style="color: white !important;">
                                        {{ __('OPEN ZOOM') }}</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="start">Event Type</label>
                                @if ($isAdmin)
                                    <select class="form-group form-select mb-0" name="type">
                                        <option value>Select event type</option>
                                        <option value="in_person_trainings">In Person Traninings</option>
                                        <option value="zoom_trainings">Zoom Trainings</option>
                                        <option value="tours">Tours</option>
                                        <option value="team_office_meetings">Team/Office Meetings</option>
                                        <option value="career_fair">Career Fair</option>
                                        <option value="holidays">Holidays</option>
                                        <option value="volunteering">Volunteering</option>
                                        <option value="luxe_coaching_program">LUXE Coaching Program</option>
                                    </select>
                                @else
                                    <input type="text" id="event_type" class="w-100 form-control text-capitalize"
                                        disabled>
                                @endif
                            </div>
                            @if ($isAdmin)
                                <div class="form-group">
                                    <label for="start">Status</label>
                                    <select class="form-group form-select mb-0" name="status" id="event_status">
                                        <option value="0">Public</option>
                                        <option value="1">Private</option>
                                    </select>
                                </div>
                            @endif
                            <div class="form-group image_group d-none">
                                <label for="image">{{ __('Event Image') }}</label>
                                <input type="file" name="image" class="form-control update_field" disabled
                                    style="padding: 3px">
                            </div>
                            <div class="form-group event-image">
                                <div class="img-wrapper">
                                    <img id="image-id" src="" alt="" class="w-100">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer"
                            style="flex-direction:row-reverse;display: flex;justify-content: flex-start;">
                            @if ($isAdmin)
                                <button type="submit" class="btn btn-luxe" id="update_event">Update</button>
                            @endif
                    </form>
                    <form action="{{ route('events.destroy', 1) }}" method="POST" enctype="multipart/form-data"
                        class="m-0 w-50">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="event_id" id="event_id">
                        @if ($isAdmin)
                            <button type="submit" class="btn btn-danger mr-2 w-100" id="delete_event"
                                onclick="return confirm('Are you sure you want to delete this event?');">Delete
                            </button>
                        @endif
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
<script>
    function attend_event(status) {
        $('.single-event').find('#event_attend_status').val(status);
        $('#event_attend_form').submit();
    }
    document.addEventListener('DOMContentLoaded', function() {
        const data = @json($events);
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            select: function(start, end, allDay, jsEvent, view) {
                $('.create-event').modal('show');
                $('#date').val(start.startStr);
            },
            eventClick: function(event) {
                console.log(event);
                var event = event.event;
                $('.single-event').modal('show');
                $('.single-event').find('#event_id').val(event._def.publicId);
                $(".single-event").find('#event_stats_link').attr("href", '/user/events/' + event
                    ._def.publicId + '/attendance')
                var startdt = event.extendedProps.fullDate + 'T' + event.extendedProps.start_time
                var enddt = event.extendedProps.fullDate + 'T' + event.extendedProps.end_time
                var location = event.extendedProps.location
                var body = event.extendedProps.fullType
                var calendar_link = 'https://outlook.office.com/calendar/0/deeplink/compose?body=' +
                    body + '&enddt=' + enddt + '&location=' + location +
                    '&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=' + startdt +
                    '&subject=' + event.title
                $(".single-event").find('#add_to_calendar').attr("href", calendar_link)
                $('.single-event').find('#event_id_1').val(event._def.publicId);
                $('.single-event').find('#event_id_attend').val(event._def.publicId);
                $('.single-event').find('#title').val(event.title);
                $('.single-event').find('#location').val(event.extendedProps.location);
                $('.single-event').find('#start_time').val(event.extendedProps.start_time);
                $('.single-event').find('#end_time').val(event.extendedProps.end_time);
                $('.single-event').find('#user_id').val(event.extendedProps.user_id);
                $('.single-event').find('#rsvp1').val(event.extendedProps.rsvp);
                $('.single-event').find('#zoom1').val(event.extendedProps.zoom);
                $('.single-event').find('#event_type').val(event.extendedProps.fullType);
                $('.single-event').find('#event_status').val(event.extendedProps.private);
                if (event.extendedProps.attending || event.extendedProps.private) {
                    $('#event_attend_form_wrapper').css('display', 'none');
                } else {
                    $('#event_attend_form_wrapper').css('display', 'block');
                }
                if (event.extendedProps.rsvp != null || {{ $isAdmin ? true : false }}) {
                    $('.single-event').find('#rsvp').attr('href', event.extendedProps.rsvp);
                    $('#rsvp_group').css('display', 'block');
                } else {
                    $('#rsvp_group').css('display', 'none');
                }
                if (event.extendedProps.zoom != null || {{ $isAdmin ? true : false }}) {
                    $('.single-event').find('#zoom').attr('href', event.extendedProps.zoom);
                    $('#zoom_group').css('display', 'block');
                } else {
                    $('#zoom_group').css('display', 'none');
                }
                $('.single-event').find('.modal-footer').css('display', 'none');
                if (event.extendedProps.user_id == {{ Auth::id() }} && {{ $isAdmin }}) {
                    $('.single-event').find('.modal-footer').css('display', 'flex');
                    $('.single-event').find('.update_field').removeAttr('disabled');
                    $('.single-event').find('.image_group').removeClass('d-none');
                }
                // $('.single-event').find('.update_field').attr('disabled', 'true');
                if (event.extendedProps.image != null) {
                    $('.single-event').find('.event-image').css('display', 'block');
                    $('.single-event').find('#image-id').attr('src', '/storage/' + event
                        .extendedProps.image);
                } else {
                    $('.single-event').find('.event-image').css('display', 'none');
                }
            },
            initialView: 'dayGridMonth',
            selectable: true,
            events: data,
            displayEventEnd: true,
            headerToolbar: {
                right: 'prev,next'
            }
        });
        calendar.render();
    });
</script>
