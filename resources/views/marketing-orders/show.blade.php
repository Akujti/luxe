@extends('layouts.app', ['active' => 'Marketing_requests'])
@section('content')
    <div class="container-fluid">
        <div class="w-100 mb-5">
            <h5 class="h5-luxe">Marketing Request</h5>
        </div>
        @php
            $details = json_decode($submission->details, true);
        @endphp
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
        <form action="{{ route('my.marketing.orders.update', $submission->id) }}" method="post"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group pl-md-0">
                <label for="name">Milestone Status</label>
                <input type="text" class="form-control" value="{{ $submission->status }}" disabled>
            </div>
            <div class="form-group">
                <label for="name">Answer</label>
                <textarea class="form-control w-100" rows="3" disabled>{{ $submission->answer }}</textarea>
            </div>
            <div class="form-group">
                <label for="files">Upload Files</label>
                <input id="file-upload-area" type="file" class="form-control-file form-control p-1" id="files"
                    name="files[]" multiple>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
            </div>
        </form>
    </div>
@endsection
