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

        .fc-daygrid-event, .fc-daygrid-event:hover {
            background: #FFCF40;
            border: 1px solid rgb(136, 136, 136);
            margin-bottom: 3px;
        }

        .fc-daygrid-event-dot {
            display: none !important;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row my-4">
            <div id='calendar' style="width: 100%; display: inline-block;"></div>
        </div>
        @if ($isAdmin)
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
                                <div class="d-flex">
                                    <div class="form-group w-50 pr-1">
                                        <label for="start">{{ __('Start Time') }}</label>
                                        <div class='input-group date'>
                                            <input type="time" id="start_time" name="start_time"
                                                   class="w-100 form-control"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="form-group w-50 pl-1">
                                        <label for="end">{{ __('End Time') }}</label>
                                        <div class='input-group date'>
                                            <input type="time" id="end_time" name="end_time" class="w-100 form-control"
                                                   required>
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
                    <form action="{{route('events.update',0)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="event_id" id="event_id_1">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="">
                                    <label for="start">{{ __('Title') }}</label>
                                    <div class='input-group date'>
                                        <input type="text" id="title" name="title"
                                               class="w-100 form-control update_field" disabled required
                                        >
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <label for="start">{{ __('Location') }}</label>
                                    <div class='input-group date'>
                                        <input type="text" id="location" name="location"
                                               class="w-100 form-control update_field" disabled
                                               required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group d-flex">
                                <div class="w-50 pr-1">
                                    <label for="start">{{ __('Start Time') }}</label>
                                    <div class='input-group date'>
                                        <input type="time" id="start_time" name="start_time"
                                               class="w-100 form-control update_field" disabled
                                               required>
                                    </div>
                                </div>
                                <div class="w-50 pl-1">
                                    <label for="end">{{ __('End Time') }}</label>
                                    <div class='input-group date'>
                                        <input type="time" id="end_time" name="end_time"
                                               class="w-100 form-control update_field" disabled
                                               required>
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
                                       class="btn btn-primary w-100 mt-2"
                                       style="color: white !important;">{{ __('OPEN ZOOM') }}</a>
                                </div>
                            </div>
                            <div class="form-group image_group d-none">
                                <label for="image">{{ __('Event Image') }}</label>
                                <input type="file" name="image" class="form-control update_field"
                                       disabled style="padding: 3px">
                            </div>
                            <div class="form-group event-image">
                                <div class="img-wrapper">
                                    <img id="image-id" src="" alt="" class="w-100">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer"
                             style="flex-direction: row-reverse; display: flex;justify-content: flex-start;">
                            @if ($isAdmin)
                                <button type="submit" class="btn btn-luxe" id="update_event">Update</button>
                        @endif

                    </form>
                    <form action="{{ route('events.destroy',1) }}" method="POST" enctype="multipart/form-data"
                          class="m-0">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="event_id" id="event_id">
                        @if ($isAdmin)
                            <button type="submit" class="btn btn-danger mr-2" id="delete_event"
                                    onclick="return confirm('Are you sure you want to delete this event?');">Delete
                            </button>
                    @endif
                </div>
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
                $('.single-event').find('#event_id_1').val(event._def.publicId);
                $('.single-event').find('#title').val(event.title);
                $('.single-event').find('#location').val(event.extendedProps.location);
                $('.single-event').find('#start_time').val(event.extendedProps.start_time);
                $('.single-event').find('#end_time').val(event.extendedProps.end_time);
                $('.single-event').find('#user_id').val(event.extendedProps.user_id);
                $('.single-event').find('#rsvp1').val(event.extendedProps.rsvp);
                $('.single-event').find('#zoom1').val(event.extendedProps.zoom);
                if (event.extendedProps.rsvp != null || {{$isAdmin}}) {
                    $('.single-event').find('#rsvp').attr('href', event.extendedProps.rsvp);
                    $('#rsvp_group').css('display', 'block');
                } else {
                    $('#rsvp_group').css('display', 'none');
                }
                if (event.extendedProps.zoom != null || {{$isAdmin}}) {
                    $('.single-event').find('#zoom').attr('href', event.extendedProps.zoom);
                    $('#zoom_group').css('display', 'block');
                } else {
                    $('#zoom_group').css('display', 'none');
                }
                $('.single-event').find('.modal-footer').css('display', 'none');
                if (event.extendedProps.user_id == {{Auth::id()}} && {{$isAdmin}}) {
                    $('.single-event').find('.modal-footer').css('display', 'flex');
                    $('.single-event').find('.update_field').removeAttr('disabled');
                    $('.single-event').find('.image_group').removeClass('d-none');
                }
                // $('.single-event').find('.update_field').attr('disabled', 'true');
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
            displayEventEnd: true,
        });
        calendar.render();
    });
</script>
