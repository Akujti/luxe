@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'showing_agents'])
@section('content')
    <style>
        .row-col {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #E6E6E6;
            padding: 15px 0px
        }

        .row-col img {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .row-col .row-details {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #262626;
        }

        .row-details h4 {
            font-size: 20px;
            font-family: 'gothicbold';
        }

        .row-details p {
            font-family: 'gothicregular';
            font-size: 16px;
            margin: 0px;
            padding: 0px;
        }

        .row-date p {
            font-family: 'gothicregular';
            font-size: 16px;
            margin: 0px;
            padding: 0px;
        }

        h1 {
            font-family: 'gothicbold';
        }

        label {
            font-family: 'gothicregular';
        }
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <h1>Showing Agents</h1>
        </div>
        <div class="row my-4">
            <div class="col-12">
                {!! $custom_section->text !!}
                <hr>
            </div>
            @foreach ($agents as $agent)
                <div class="col-md-6">
                    <div class="row-col">
                        <div class="row-details">
                            <img src="{{ $agent->avatar }}" alt="">
                            <div>
                                <h4>{{ $agent->profile->fullname }}&nbsp;</h4>
                                <p>Email: {{ $agent->email }}&nbsp;</p>
                                <p>Phone: {{ $agent->profile->phone }}&nbsp;</p>
                                <p>Languages:
                                    @if ($agent->profile->languages)
                                        @foreach ($agent->profile->languages as $language)
                                            <span>{{ $language }} @if (!$loop->last)
                                                    ,
                                                @endif
                                            </span>
                                        @endforeach
                                    @endif
                                    &nbsp;
                                </p>
                                <p>Address: {{ $agent->profile->address }}</p>
                                <p>Service Areas: {{ $agent->profile->service_areas }}</p>
                            </div>
                        </div>
                        <button class="btn btn-luxe" data-toggle="modal"
                            data-target="#modal-{{ $agent->id }}">Request</button>
                        <div class="modal modal-new fade" id="modal-{{ $agent->id }}">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content bg-white">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Request Agent
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="{{ route('request.showing.agents', $agent) }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Select Service</label>
                                                <select name="service" class="form-control" required>
                                                    <option value>-</option>
                                                    <option value="Showing">Showing</option>
                                                    <option value="Inspection">Inspection</option>
                                                    <option value="Appraisal">Appraisal</option>
                                                    <option value="Walkthrough">Walkthrough</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Address</label>
                                                <input name="address" type="text" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="label">Select Date</label>
                                                <input type="text" id="datepicker" name="date"
                                                    class="form-control date" autocomplete="off" required>
                                            </div>
                                            <button class="btn btn-luxe" type="submit">Request</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        {{ $agents->links() }}
    </div>
    <style>
        #ui-datepicker-div {
            display: none;
            background-color: #fff;
            box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, 0.1);
            margin-top: 0.25rem;
            border-radius: 0.5rem;
            padding: 0.5rem;
        }

        .ui-datepicker-calendar thead th {
            padding: 0.25rem 0;
            text-align: center;
            font-size: 0.75rem;
            font-weight: 400;
            color: #78909C;
        }

        .ui-datepicker-calendar tbody td {
            width: 2.5rem;
            text-align: center;
            padding: 0;
        }

        .ui-datepicker-calendar tbody td a {
            margin-bottom: 4px;
            display: block;
            border-radius: 0.25rem;
            line-height: 2rem;
            transition: 0.3s all;
            color: #546E7A;
            font-size: 0.875rem;
            text-decoration: none;
        }

        .ui-datepicker-calendar tbody td a:hover {
            background-color: #262626;
            color: #fff;
        }

        .ui-datepicker-calendar tbody td a.ui-state-active {
            background-color: #262626;
            color: #fff;
        }

        .ui-datepicker-header a.ui-corner-all {
            cursor: pointer;
            position: absolute;
            top: 0;
            width: 2rem;
            height: 2rem;
            margin: 0.5rem;
            border-radius: 0.25rem;
            transition: 0.3s all;
        }

        .ui-datepicker-header a.ui-corner-all:hover {
            background-color: #ECEFF1;
        }

        .ui-datepicker-header a.ui-datepicker-prev {
            left: 0;
            background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==");
            background-repeat: no-repeat;
            background-size: 0.5rem;
            background-position: 50%;
            transform: rotate(180deg);
        }

        .ui-datepicker-header a.ui-datepicker-next {
            right: 0;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==');
            background-repeat: no-repeat;
            background-size: 10px;
            background-position: 50%;
        }

        .ui-datepicker-header a>span {
            display: none;
        }

        .ui-datepicker-title {
            text-align: center;
            line-height: 2rem;
            margin-bottom: 0.25rem;
            font-size: 0.875rem;
            font-weight: 500;
            padding-bottom: 0.25rem;
        }

        .ui-datepicker-week-col {
            color: #78909C;
            font-weight: 400;
            font-size: 0.75rem;
        }
    </style>
    <script>
        $("#datepicker").datepicker({
            duration: "fast",
            dateFormat: 'yy-mm-dd'
        });
    </script>
@endsection
