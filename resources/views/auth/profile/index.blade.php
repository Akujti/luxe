@extends('layouts.app', ['active' => 'Profile'])
@section('css')

@endsection
@section('content')
<div class="container-fluid">
    <x-profile :user="$user"/>
</div>

@section('js')
<script>
    function open_avatar_input() {
        $('#avatar-input').click()
    }
    function onFileChanged(e) {
        const [file] = e.files 
        if (file) {
            $('#image-profile').attr("src", URL.createObjectURL(file));
        }
    }
    function remove_image() {
        $('#remove-image-input').val(1);
        $('#image-profile').attr("src", "https://ui-avatars.com/api/?name={{ !auth()->user()->profile ? '' : auth()->user()->profile->fullname }}" );
    }

    function add_language() {
        let input = $('#language').val()
        let html = '<div class="language-item"> <input type="text" class="form-control" name="languages[]" value="' + input + '"> <button type="button" class="btn btn-danger ml-3" onclick="remove_language(this)">&times;</button></div>'
        $('.language-section').append(html)
        $('#language').val("")
    }
    function remove_language(e) {
        $(e).parents('.language-item').remove()
    }
</script>
@endsection
@endsection