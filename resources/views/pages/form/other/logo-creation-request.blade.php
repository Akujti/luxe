@extends('layouts.app', ['active' => 'marketing_branding', 'subactive' => 'signs_photo_design_requests'])
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (auth()->user() && auth()->user()->isAdmin)
            <div class="form-group text-center">
                <button class="btn btn-luxe" onclick="createCsv()">EXPORT CSV</button>
            </div>
            @endif
            <form action="{{route('general.email.post')}}" class="card form p-3" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4 text-uppercase">Logo Creation Request</h1>

                </div>
                <input type="hidden" name="form_title" value="Logo Creation Request">
                <!-- <input type="hidden" name="to_email[]" value="marketing@luxeknows.com">
                <input type="hidden" name="to_email[]" value="operations@luxeknows.com">
                <input type="hidden" name="to_email[]" value="designs@luxeknows.com">
                <input type="hidden" name="to_email[]" value="email@luxeknows.com">
                <input type="hidden" name="to_email[]" value="support@luxeknows.com"> -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Agent Name</label>
                            <input type="text" name="agent_full_name" class="form-control"
                                value="{{auth()->user()->profile->fullname}}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Agent Email</label>
                            <input type="text" name="agent_email" class="form-control" value="{{auth()->user()->email}}"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Agent Number</label>
                            <input type="text" name="agent_number" class="form-control"
                                value="{{auth()->user()->profile->phone}}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Color Scheme</label>
                            <input type="text" name="color_scheme" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Font Preference (Style/Look)</label>
                            <input type="text" name="font_preference" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Notes</label>
                            <input type="text" name="notes" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Upload Sample #1</label>
                            <input type="file" name="upload_sample_1" class="form-control p-1" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Upload Sample #2</label>
                            <input type="file" name="upload_sample_2" class="form-control p-1" required>
                        </div>
                        <div class="form-group form-footer col-12">
                            <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                        </div>
                    </div>
                </div>
            </form>
            <form action="{{route('getCsv')}}" method="post" id="csv">
                @csrf
                <input type="hidden" name="title" value="Logo Creation Request">
            </form>
        </div>
    </div>
</div>

<script>
    function createCsv(){
        $('#csv').submit()
    }
</script>
@endsection