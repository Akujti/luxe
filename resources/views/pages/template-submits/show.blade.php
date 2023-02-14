@extends('admin.layouts.app', ['active' => 'Marketing_requests'])
@section('content')
    <div class="container-fluid">
        <div class="w-100 mb-5">
            <h5 class="h5-luxe">Marketing Request</h5>
        </div>
        @php
            $details = json_decode($submission->details, true);
        @endphp
        <div class="row m-0 w-100">
            <div class="form-group col-md-4 pl-md-0">
                <label for="name">Agent Name</label>
                <input type="text" class="form-control" value="{{ $details['agent_full_name'] }}" disabled>
            </div>
            <div class="form-group col-md-4">
                <label for="name">Agent Email</label>
                <input type="text" class="form-control" value="{{ $details['agent_email'] }}" disabled>
            </div>
            <div class="form-group col-md-4 pr-md-0">
                <label for="name">Agent Phone</label>
                <input type="text" class="form-control" value="{{ $details['agent_number'] }}" disabled>
            </div>
            <hr>
        </div>
        <h4>Details</h4>

        <div class="row">
            <div class="col-12">
                <p class="bold-text"><b>Selected Option:</b> {{ $details['option'] }}</p>
                <hr>
            </div>
            <div class="col-12">
                <p class="bold-text"><b>Price:</b> ${{ $details['price'] }}</p>
                <hr>
            </div>
            <div class="col-12">
                <p class="bold-text"><b>Notes:</b> {{ $details['notes'] }}</p>
                <hr>
            </div>
            @foreach ($details as $key => $val)
                @if (gettype($val) != 'object')
                    @if (preg_match('(storage/images/marketing|marketing)', $val))
                        <div class="col-12">
                            <p class="bold-text"><b>{{ ucwords(str_replace('_', ' ', $key)) }}:</b>
                                <a href="/{{ $val }}" target="_blank">Click to open.</a>
                            </p>
                            <hr>
                        </div>
                    @endif
                @endif
            @endforeach
        </div>
        <form action="{{ route('admin.marketing-requests.update', $submission->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Order Update Status: <b>{{ $submission->status }}</b></label>
                <select name="status" class="form-control">
                    <option value>-</option>
                    <option value="Missing">Missing</option>
                    <option value="In Production">In Production</option>
                    <option value="Proof Sent">Proof Sent</option>
                    <option value="Completed">Completed</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Request Information</label>
                <textarea class="form-control w-100" rows="3" name="answer"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
            </div>
        </form>
    </div>
@endsection
