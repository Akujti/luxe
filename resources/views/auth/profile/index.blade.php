@extends('layouts.app', ['active' => 'Profile'])
@section('css')
<style>
    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        color: black;
    }

    .row img {
        object-fit: cover;
    }
    #image-profile {
        width: 205px;
        height: 205px;
        border-radius: 50%;
    }
    
    .buttons button {
        font-family: 'gothicbold';
        font-size: 16px;
        border: none;
        border-radius: 10px;
        padding: 10px;
        display: block;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        margin-bottom: 10px;
    }
    .buttons button:first-child {
        background-color: #262626;
        color: #fff;
    }
    .buttons button:last-child {
        background-color: #F7F7F7;
        color: #262626;
    }
    .small-title {
        font-size: '18px';
        font-family: 'gothicregular';
        color: #757575;
    }
    .form-group label {
        font-family: 'gothicregular';
        font-size: 18px;
        color: #757575;
        margin-bottom: 20px;
    }
    .form-group input {
        padding: 10px;
        border-radius: 10px;
        font-family: 'gothicbold';
        font-size: 18px;
        border:1px solid #DEDEDE;
    }
    .form-group {
        margin-bottom: 30px;
    }

    .language-item {
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
        font-family: 'gothicregular';
        margin-bottom: 7px;
    }
    .language-item input {
        padding: 7px;
        height: 45px;
        margin: 0px;
        width: 75%;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row box-title p-0 m-0">
        <h3>My Profile</h3>
    </div>
    <div class="row my-3 justify-content-center">
        <div class="col-12 col-md-10 col-lg-6">
            <div>
                <div class="small-title mb-4">Profile Image</div>

                <div class="col-12 pl-0">
                    <div class="row p-0 m-0">
                        <div class="col pl-0">
                            <img src="{{ auth()->user()->avatar }}" id="image-profile" alt="">
                        </div>
                        <div class="col-12 col-md-12 col-lg-8 d-flex align-items-center mt-2">
                            <div class="buttons w-100">
                                <button type="button" onclick="open_avatar_input()"><img src="/images/index-page/upload-image.svg" alt=""> Change Image</button>
                                <button type="button" onclick="remove_image()"><img src="/images/index-page/delete-icon.svg" alt=""> Remove Image</button>
                            </div>
                        </div>
                    </div>

                    <div class="row p-0 m-0 mt-4">
                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="row p-0 m-0 w-100">
                            @method('put')
                            @csrf
                            <input type="hidden" name="id" value="{{ auth()->id() }}">
                            <input type="hidden" name="remove_image" id="remove-image-input" value="0">
                            <input type="file" name="profile[avatar]" id="avatar-input" style="display:none" onchange="onFileChanged(this)">
                            <div class="form-group col-12">
                                <label for="">Full Name</label>
                                <div class="input-group">
                                    <input type="text" name="profile[fullname]" class="form-control" value="{{ auth()->user()->profile->fullname }}">
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label for="">Phone Number</label>
                                <div class="input-group">
                                    <input type="text" name="profile[phone]" class="form-control" value="{{ auth()->user()->profile->phone }}">
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label for="">Address</label>
                                <div class="input-group">
                                    <input type="text" name="profile[address]" class="form-control" value="{{ auth()->user()->profile->address }}">
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label for="">Language</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="language" value="">
                                    <button type="button" class="btn btn-luxe px-3 ml-2" onclick="add_language()">+</button>
                                </div>
                                <div class="language-section mt-2">
                                    @foreach(auth()->user()->profile->languages as $language)
                                        <div class="language-item">
                                            <input type="text" name="languages[]" value="{{ $language }}">
                                            <button type="button" class="btn btn-danger" onclick="remove_language(this)">&times;</button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
    
                            <div class="col-12">
                                <button class="btn btn-luxe btn-block py-2" style="border-radius:10px;">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('js')
<script>
    function open_avatar_input() {
        $('#avatar-input').click()
    }
    function onFileChanged(e) {
        const [file] = e.files 
        console.log(URL.createObjectURL(file))
        if (file) {
            $('#image-profile').attr("src", URL.createObjectURL(file));
        }
    }
    function remove_image() {
        $('#remove-image-input').val(1);
        $('#image-profile').attr("src", "https://ui-avatars.com/api/?name={{ auth()->user()->profile->fullname }}" );
    }

    function add_language() {
        let input = $('#language').val()
        let html = '<div class="language-item"> <input type="text" name="languages[]" value="' + input + '"> <button type="button" class="btn btn-danger" onclick="remove_language(this)">&times;</button></div>'
        $('.language-section').append(html)
        $('#language').val("")
    }
    function remove_language(e) {
        $(e).parents('.language-item').remove()
    }
</script>
@endsection
@endsection