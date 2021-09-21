@extends('layouts.app')
@section('js')
    <script src="{{ asset('js/main.min.js') }}" defer></script>
@endsection
@section('css')
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
    <style>

        .bg-red {
            background: #e76060 !important;
            border-color: #e76060;
        }

        .bg-green {
            background: #69a469 !important;
            border-color: #69a469;
        }

        .bg-blue {
            background: #3788d8 !important;
            border-color: #3788d8;
        }

        .bg-purple {
            background: #b475b4 !important;
            border-color: #b475b4;
        }

        .bg-yellow {
            background: #FFCF40 !important;
            border-color: #FFCF40;
        }

        .fc .fc-timegrid-col.fc-day-today {
            background: #FFF !important;
            border: none !important;
        }


        /*.fc-timegrid-event {*/
        /*    background: #FFCF40;*/
        /*    border: 1px solid rgb(136, 136, 136);*/
        /*}*/
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row my-4">
            <div class="alert alert-info w-100">NOTES: Max time for slot is 60 minutes.</div>
            <div id='calendar' style="width: 100%; display: inline-block;"></div>
        </div>
        <div class="create-booking modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create New Appointment</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ route('bookings.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="start">{{ __('Title') }}</label>
                                <div class='input-group date'>
                                    <input type="text" id="title" name="title" class="w-100 form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <div class='input-group date'>
                                    <input type="text" id="name" name="name" class="w-100 form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <div class='input-group date'>
                                    <input type="email" id="email" name="email" class="w-100 form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone">{{ __('Tel') }}</label>
                                <div class='input-group date'>
                                    <input type="text" id="phone" name="phone" class="w-100 form-control" required>
                                </div>
                            </div>
                            <input name="room_id" id="room_id" class="form-control" type="hidden"
                                   value="{{$room->id}}" required>
                            <input type="hidden" id="start" name="start" class="form-control">
                            <input type="hidden" id="end" name="end" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-luxe" id="save-booking">Save</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <div class="single-booking modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Booking</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ route('bookings.destroy',1) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="booking_id" id="booking_id">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="">
                                    <label for="start">{{ __('Title') }}</label>
                                    <div class='input-group date'>
                                        <input type="text" id="title" name="title" class="w-100 form-control" required
                                               disabled>
                                    </div>
                                </div>
                                <div class="">
                                    <label for="start">{{ __('Name') }}</label>
                                    <div class='input-group date'>
                                        <input type="text" id="name" name="name" class="w-100 form-control" required
                                               disabled>
                                    </div>
                                </div>
                                <div class="">
                                    <label for="start">{{ __('Email') }}</label>
                                    <div class='input-group date'>
                                        <input type="email" id="email" name="email" class="w-100 form-control" required
                                               disabled>
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <label for="start">{{ __('Phone') }}</label>
                                    <div class='input-group date'>
                                        <input type="text" id="phone" name="phone" class="w-100 form-control"
                                               required
                                               disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @auth()
                            @if (Auth::user()->isAdmin)
                                <div class="modal-footer d-flex">
                                    <button type="submit" class="btn btn-danger" id="delete_booking">Delete</button>
                                </div>
                            @endif
                        @endauth
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
            let auth = false;
            @auth()
                auth = true;
            @endauth

            const room_id = {{$room->id}};
            let hours = [];

            if (room_id === 1) {

                hours = [
                    {
                        daysOfWeek: [1, 3, 5, 6],
                        startTime: '08:00',
                        endTime: '18:30'
                    },
                    {
                        daysOfWeek: [2],
                        startTime: '08:00',
                        endTime: '12:30'
                    },
                    {
                        daysOfWeek: [2],
                        startTime: '14:00',
                        endTime: '18:30'
                    },
                    {
                        daysOfWeek: [4],
                        startTime: '08:00',
                        endTime: '11:00'
                    },
                    {
                        daysOfWeek: [4],
                        startTime: '12:00',
                        endTime: '18:30'
                    }
                ];
            } else if (room_id === 2) {
                hours = [
                    {
                        daysOfWeek: [1, 2, 3, 5, 6],
                        startTime: '08:00',
                        endTime: '18:30'
                    },
                    {
                        daysOfWeek: [4],
                        startTime: '08:00',
                        endTime: '12:30'
                    },
                    {
                        daysOfWeek: [4],
                        startTime: '14:00',
                        endTime: '18:30'
                    }
                ];
            } else if (room_id === 3) {
                hours = [
                    {
                        daysOfWeek: [1, 2, 3, 4, 6],
                        startTime: '08:00',
                        endTime: '18:30'
                    },
                    {
                        daysOfWeek: [5],
                        startTime: '08:00',
                        endTime: '12:30'
                    },
                    {
                        daysOfWeek: [5],
                        startTime: '14:00',
                        endTime: '18:30'
                    }
                ];
            } else if (room_id === 4) {
                hours = [
                    {
                        daysOfWeek: [2, 3, 4, 5, 6],
                        startTime: '08:00',
                        endTime: '18:30'
                    },
                    {
                        daysOfWeek: [1],
                        startTime: '08:00',
                        endTime: '12:30'
                    },
                    {
                        daysOfWeek: [1],
                        startTime: '14:00',
                        endTime: '18:30'
                    }
                ];
            } else {
                hours = [
                    {
                        daysOfWeek: [1, 2, 3, 4, 5, 6],
                        startTime: '08:00',
                        endTime: '18:30'
                    }
                ];
            }
            const data = @json($bookings);
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                select: function (start, end, allDay, jsEvent, view) {
                    $('.create-booking').modal('show');
                    $('#start').val(start.startStr);
                    $('#end').val(start.endStr);
                },
                eventClick: function (event, element) {
                    if (auth) {
                        var booking = event.event;
                        console.log(event)
                        console.log(booking._def.publicId);
                        // Display the modal and set the values to the booking values.
                        $('.single-booking').modal('show');
                        $('.single-booking').find('#booking_id').val(booking._def.publicId);
                        // $('.single-booking').find('#name').val(booking.name);
                        $('.single-booking').find('#name').val(booking.extendedProps.name);
                        $('.single-booking').find('#title').val(booking.title);
                        $('.single-booking').find('#room_id').val(booking.extendedProps.room_id);
                        $('.single-booking').find('#email').val(booking.extendedProps.email);
                        $('.single-booking').find('#phone').val(booking.extendedProps.phone);
                        $('.single-booking').find('.modal-footer').css('display', 'none');
                    }
                    {{--if (booking.extendedProps.user_id == {{Auth::id()}}) {--}}
                    {{--    $('.single-booking').find('.modal-footer').css('display', 'flex');--}}
                    {{--}--}}
                },
                businessHours: hours,
                selectConstraint: "businessHours",
                initialView: 'timeGridWeek',
                selectable: true,
                events: data,
                allDaySlot: false,
                scrollTime: '08:00:00',
                slotMinTime: '07:00:00',
                // slotDuration: 60,
                selectOverlap: function (event) {
                    return event.rendering === 'background';
                },
                defaultTimedEventDuration: '01:00'
            });
            calendar.render();
            if (room_id === 1) {
                $('.fc-timegrid-event').addClass('bg-red');
            } else if (room_id === 2) {
                $('.fc-timegrid-event').addClass('bg-green');
            } else if (room_id === 3) {
                $('.fc-timegrid-event').addClass('bg-blue');
            } else if (room_id === 4) {
                $('.fc-timegrid-event').addClass('bg-purple');
            } else {
                $('.fc-timegrid-event').addClass('bg-yellow');
                $('.fc-event-main').css('color', 'black');
            }
            @guest()
            $('.fc-event-title').text("RESERVED");
            @endguest
        }
    );
</script>
