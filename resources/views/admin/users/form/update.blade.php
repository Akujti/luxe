@extends('admin.layouts.app', ['active' => 'Users'])

@section('css')
<style>
    th,
    td {
        text-align: center;
    }

    th {
        border: none !important;
        font-family: 'gothicbold';
        font-size: 18px;
        font-weight: bold;
    }

    td {
        font-family: 'gothicregular';
        height: 120px !important;
        vertical-align: middle !important;
    }

    .btn {
        border-radius: 10px !important;
    }

    #img {
        border-radius: 10px;
    }

    @media (max-width: 576px) {
        .form-group {
            padding: 0px !important;
        }
    }

    .language-item,
    .language-item-new {
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
        font-family: 'gothicregular';
        margin-bottom: 7px;
    }

    .language-item input,
    .language-item-new input {
        padding: 7px;
        height: 45px;
        margin: 0px;
    }
    .select2 {
        width: 100% !important;
        border: none !important;
    }
    .select2-container--default .select2-selection--single {
        border: 1px solid #ced4da !important;
    }
    .select2-selection, .select2-selection__arrow {
        height: 38px !important;
    }
    .select2-selection__rendered {
        line-height: 38px !important;
    }
    .bold {
        font-family: 'gothicbold';
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Update User</h5>
            <div>
            </div>
        </div>

        <form action="{{ route('admin.users.update') }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="row m-0 p-0">
                <div class="col-6">
                    <div class="row p-0 m-0">
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="form-group col-12 col-md-6 pl-0">
                            <label for="start">Fullname*</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="profile[fullname]" value="{{ $user->profile->fullname }}" required>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 pr-0">
                            <label for="start">Role*</label>
                            <div class='input-group'>
                                <select name="role" id="role" class="form-control" required>
                                    <option value="admin">Admin</option>
                                    <option value="agent">Agent</option>
                                    <option value="other">Staff</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-6 pl-0">
                            <label for="start">Email*</label>
                            <div class='input-group'>
                                <input type="email" class="w-100 form-control" name="email" value="{{ $user->email }}" required>
                            </div>
                        </div>
                        <div class="form-group col-6 pr-0">
                            <label for="start">Password</label>
                            <div class='input-group'>
                                <input type="password" class="w-100 form-control" name="password">
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 pl-0">
                            <label for="start">Avatar</label>
                            <div class='input-group'>
                                <input type="file" class="w-100 form-control p-1" name="profile[avatar]">
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 pr-0">
                            <label for="start">Phone*</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="profile[phone]" value="{{ $user->profile->phone }}" required>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 pl-0">
                            <label for="start">Language*</label>
                            <div class="d-flex">
                                <input type="text" class="form-control" id="language">
                                <button type="button" class="btn btn-luxe px-3 ml-2" onclick="add_language()">+</button>
                            </div>
        
                            <div class="language-section mt-2">
                                @if($user->profile && $user->profile->languages)
                                    @foreach($user->profile->languages as $language)
                                        <div class="language-item">
                                            <input type="text" class="form-control" name="languages[]" value="{{ $language }}">
                                            <button type="button" class="btn btn-danger ml-3" onclick="remove_language(this)">&times;</button>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-6 pr-0">
                            <label for="start">Address*</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="profile[address]" value="{{ $user->profile->address }}" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row p-0 m-0">
                        <div class="form-group col-12 col-md-6 pl-0">
                            <label for="start">Support Specialists</label>
                            <div class='input-group'>
                                <input type="hidden" class="w-100 form-control" name="profile[support_specialists]" id="support-specialist-back">
                                <select class="support-specialists" class="w-100" id="support-specialist-input"></select>
                                <p class="bold">{{ $user->profile->support_specialist_name}}</p>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 pr-0">
                            <label for="start">Loan Officer</label>
                            <div class='input-group'>
                                <input type="hidden" class="w-100 form-control" name="profile[loan_officer]" id="loan-officer-back">
                                <select class="loan-officer" class="w-100" id="loan-officer-input"></select>
                                <p class="bold">{{ $user->profile->loan_officer_name}}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-luxe">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@section('js')
<script>
  
    function add_language() {
        let input = $('#language').val()
        let html = '<div class="language-item"> <input type="text" class="form-control" name="languages[]" value="' + input + '"> <button type="button" class="btn btn-danger ml-3" onclick="remove_language(this)">&times;</button></div>'
        $('.language-section').append(html)
        $('#language').val("")
    }
    function remove_language(e) {
        $(e).parents('.language-item').remove()
    }
    $(document).ready(function() {
        $('#role').val('{{ $user->role }}').change();
       

        $('.support-specialists').select2({
            dropdownCssClass: "support-specialist-dropdown"
        });
        $('.loan-officer').select2({
            dropdownCssClass: "loan-officer-dropdown"
        });

        $(document.body).on("change",".loan-officer",function(){
            $('#loan-officer-back').val($('#loan-officer-input').val())
        });
        $(document.body).on("change",".support-specialists",function(){
            $('#support-specialist-back').val($('#support-specialist-input').val())
        });
    });

    $(document).on('keyup', '.support-specialist-dropdown .select2-search__field', function (e) {
        $.ajax({
            url: '{{ route("admin.users.search") }}',
            data: { search: e.target.value },
            type: 'get',
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $('.support-specialists').empty().trigger('change');
                for(let i = 0;i < output.users.length; i++) {
                    var data = {
                        id: output.users[i].user_id,
                        text: output.users[i].fullname
                    };
                    var newOption = new Option(data.text, data.id, false, false);
                    $('.support-specialists').append(newOption).trigger('change');
                }
            }
        });
    });

    $(document).on('keyup', '.loan-officer-dropdown .select2-search__field', function (e) {
        $.ajax({
            url: '{{ route("admin.users.search") }}',
            data: { search: e.target.value },
            type: 'get',
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $('.loan-officer').empty().trigger('change');
                for(let i = 0;i < output.users.length; i++) {
                    var data = {
                        id: output.users[i].user_id,
                        text: output.users[i].fullname
                    };
                    var newOption = new Option(data.text, data.id, false, false);
                    $('.loan-officer').append(newOption).trigger('change');
                }
            }
        });
    });
</script>
@endsection
@endsection