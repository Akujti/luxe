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

    .disabled:disabled {
        background-color: white;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row w-100 m-0 mb-5">
        <div class="col-12 title mb-3 text-center">
            <h1>{{ $event->title }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="">
                <div class="">
                    <div class="form-group row">
                        <div class="col-12 col-xl-6 mt-2">
                            <label for="start">{{ __('Title') }}</label>
                            <div class='input-group date'>
                                <input type="text" id="title" class="w-100 form-control update_field disabled" disabled required value="{{ $event->title }}">
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 mt-2">
                            <label for="start">{{ __('Location') }}</label>
                            <div class='input-group date'>
                                <input type="text" id="location" name="location" class="w-100 form-control update_field disabled" disabled required value="{{ $event->location }}">
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 mt-2 form-group mb-0">
                            <label for="start">{{ __('Description') }}</label>
                            <div class='input-group date'>
                                <textarea name="description" id="description" disabled class="w-100 form-control disabled" style="font-family: gothicregular">{{ $event->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 mt-2">
                            <div class="form-group d-flex mb-0">
                                <div class="w-50 pr-1">
                                    <label for="start">{{ __('Start Time') }}</label>
                                    <div class='input-group date'>
                                        <input type="time" id="start_time" name="start_time" class="w-100 form-control update_field disabled" disabled value="{{ $event->start_time }}" required>
                                    </div>
                                </div>
                                <div class="w-50 pl-1">
                                    <label for="end">{{ __('End Time') }}</label>
                                    <div class='input-group date'>
                                        <input type="time" id="end_time" name="end_time" class="w-100 form-control update_field disabled" disabled value="{{ $event->end_time }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 mt-2 form-group mb-0" id="rsvp_group">
                            <div class='input-group date'>
                                <label for="rsvp1">{{ __('RSVP') }}</label>
                                <input type="url" name="rsvp" id="rsvp1" class="w-100 form-control update_field disabled" disabled value="{{ $event->rsvp }}">
                                <a id="rsvp" href="{{ $event->rsvp }}" target="_blank" rel="noopener noreferrer" class="btn btn-luxe w-100 mt-2">{{ __('OPEN RVSP') }}</a>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 mt-2 form-group mb-0" id="zoom_group">
                            <div class='input-group date'>
                                @if ($isAdmin)
                                <label for="zoom1">{{ __('ZOOM') }}</label>
                                <input type="url" name="zoom" id="zoom1" class="w-100 form-control update_field disabled" disabled value="{{ $event->zoom }}">
                                @endif
                                <a id="zoom" href="{{ $event->zoom }}" target="_blank" rel="noopener noreferrer" class="btn btn-luxe w-100 mt-2" style="color: white !important;">
                                    {{ __('OPEN ZOOM') }}</a>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 mt-2 form-group mb-0">
                            <label for="start">Event Type</label>
                            <input type="text" id="event_type" class="w-100 form-control text-capitalize disabled" disabled value="{{ $event->fullType }}">
                        </div>

                        <div class="col-12 col-xl-6 mt-2">
                            <div class="form-group image_group">
                                <label for="image">{{ __('Event Image') }}</label>
                                <div class="img-wrapper">
                                    @if($event->image)
                                    <img id="image-id" src="{{ $event->imageUrl }}" alt="" class="w-100">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
<script>
    function attend_event(status) {
        $('.single-event').find('#event_attend_status').val(status);
        $('#event_attend_form').submit();
    }
</script>