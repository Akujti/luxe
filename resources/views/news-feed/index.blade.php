@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/news/main.css') }}" />
<link rel="stylesheet" href="{{ asset('css/news/style.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

<script src="https://unpkg.com/@yaireo/tagify"></script>
<script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
<link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')
<div class="container-fluid news-feed">
   <div class="row justify-content-center">
       <div class="col-lg-8 col-12">
            <div class="row w-100 m-0">
                <div class="create-post-box w-100">
                    <div class="row justify-content-center">
                        
                        <div class="col-9">
                            <input type="text" class="form-control" placeholder="Write a post" onclick="openModal()">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row w-100 mt-3 m-0">
                @forelse($posts as $post)
                    <div class="col-12 box-post p-0 row m-0 mb-3">
                        <div class="row p-0 m-0 w-100 col-12">
                            <div class="box-image col-lg-4 col-md-5 col-12 p-0">
                                <div class="box-image-preview">
                                    @if($post->image->count())
                                        <img src="{{ $post->image->first()->file_url }}" alt="">
                                        @if($post->image->count() > 1)
                                            <div class="image-count">+{{ $post->image->count() - 1}}</div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                            <div class="box-details col-lg-8 col-md-7 col-12">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p id="author" class="gothicbold">{{ $post->agent->profile->fullname }}</p>
                                    <p id="date">{{ $post->created_at->diffForHumans() }}</p>
                                </div>
                                <p>{{ Str::limit($post->body, 240) }}</p>
                                <div class="box-tags d-flex justify-content-start">
                                    @if($post->tag->count())
                                        @foreach($post->tag as $tag)
                                            <p class="p-1 rounded">{{ $tag->agent->profile->fullname }}</p>
                                        @endforeach
                                    @endif
                                </div>
                                <a href="#"><i class="fa-solid fa-angle-right"></i> Read More</a>
                            </div>
                        </div>
                        <div class="p-0 m-0 w-100 col-12">
                            <div class="d-flex justify-content-center align-items-center p-2" style="gap: 5px;">
                                <button class="btn btn-light btn-block">Like</button>
                                <button class="btn btn-light btn-block m-0" onclick="toggleCommentInput(this)">Comment</button>
                            </div>
                        </div>
                        <div class="p-0 m-0 w-100 col-12">
                            <div class="d-none w-100" id="comment-box">
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Write a Comment" onkeypress="comment(this, {{ $post->id }})">
                                </div>
                            </div>
                            <div class="comments-box w-100 p-3">
                                @if($post->comment->count())
                                    @foreach($post->comment as $comment)
                                        <div class="single-comment d-flex jusify-content-start align-items-start mb-3">
                                            <div class="single-comment-profile">
                                                <img src="{{ $comment->user->avatar }}" alt="">
                                            </div>
                                            <div class="single-comment-body">
                                                <p>{{ $comment->body }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                <p>No results found.</p>
                @endforelse
            </div>
       </div>
   </div>
</div>

@extends('modals.modal-top')

@section('title')
<h4>Write a post</h4>
@endsection

@section('body')
<div>
    <form action="{{ route('news.create') }}" method="POST" enctype="multipart/form-data" class="row p-0 m-0">
        @csrf
        <div class="form-group w-100">
            <div class="input-group">
                <textarea name="body" id="" class="form-control" rows="5" placeholder="Start typing.." required></textarea>
            </div>
        </div>

        <div class="items w-100">
            <div class="row mb-3">
                <div class="col">
                    <button type="button" onclick="addFile()" class="btn btn-light"><i class="fa-solid fa-file"></i> Attach Files</button>
                </div>
                <div class="col">
                    <button class="btn btn-light" type="button" onclick="toggleTagInput()"><i class="fa-solid fa-user-tag"></i> Tag</button>
                </div>
            </div>
            <style>
               
            </style>
            <input placeholder="Tag Agent" class="tag-input d-none">
            <div id="images-box" class="my-2">

            </div>
            <div id="tags-box" class="my-2 d-none">

            </div>
        </div>
    </form>
</div>
@endsection


@section('js')
<script> var url = "{{ route('agent_list') }}"; </script>
<script src="{{ asset('js/news-feed/main.js') }}"></script>
<script>
    function openModal() {
        $('#exampleModal').modal('toggle');
    }
    var files = 0;
    function addFile() {
        $('#images-box').append('<div class="img-preview"> <input type="file" name="files[]" id="file-' + files + '" onchange="onFileChanged(this)"></div>')
        $('#file-' + files).click();
        files++
    }
    function onFileChanged(e) {
        const [file] = e.files 
        if (file) {
            if(!isImage(file)) {
                $('#' + e.id).parents('.img-preview').addClass('file gothicbold')
                $('#' + e.id).parents('.img-preview').append(
                    'File <span onclick="removeFile(this)">&times;</span>'
                );
            } else {
                $('#' + e.id).parents('.img-preview').append(
                    '<img id="img-preview" src="' + URL.createObjectURL(file) + '">' +
                    '<span onclick="removeFile(this)">&times;</span>'
                );
            }
        }
    }
    function isImage(file){
        return file['type'].split('/')[0] == 'image';
    }
    function removeFile(e) {
        $(e).parents('.img-preview').remove()
    }
    function toggleTagInput() {
        $('.tag-input').toggleClass('d-none')
    }
    function toggleCommentInput(e) {
        $(e).parents('.box-post').find('#comment-box').toggleClass('d-none')
    }
    function comment(e, post_id) {
        if(event.key == "Enter") {
            var html = '<div class="single-comment d-flex jusify-content-start align-items-start mb-3">' +
                '<div class="single-comment-profile">' +
                    '<img src="{{ auth()->user()->avatar }}" alt="">' +
                '</div>' +
                '<div class="single-comment-body">' +
                    '<p>'+e.value+'</p>' +
                '</div>' +
            '</div>';
            $(e).parents('.box-post').find('.comments-box').prepend(html)
            var body = e.value;
            $(e).parents('.box-post').find('#comment-box input').val("")
            var data = {
                'post_id': post_id,
                'body': body
            }
            $.ajax({
                url: "{{ route('news.comment.create') }}",
                data: data,
                type: "post",
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    console.log(output)
                },
            });
        }
    }
</script>
@endsection
@endsection