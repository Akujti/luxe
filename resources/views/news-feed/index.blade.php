@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/news/main.css') }}" />
<link rel="stylesheet" href="{{ asset('css/news/style.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

<script src="https://unpkg.com/@yaireo/tagify"></script>
<script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
<link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>

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

            <div class="row w-100 mt-3 m-0" id="posts-box">
                {{-- @forelse($posts as $post)
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
                           
                            <div class="d-flex align-items-center p-2 pt-3" style="gap: 0px 20px;">
                                <p class="p-0 m-0" id="like-count"><i class="fa-solid fa-heart"></i> Likes: <span>{{ $post->like->count() }}</span></p>
                                <p class="p-0 m-0" id="comment-count"><i class="fa-solid fa-comment"></i> Comments: <span>{{ $post->comment->count() }}</span></p>
                            </div>
                            <div class="d-flex justify-content-center align-items-center p-2" style="gap: 5px;">
                                <button class="btn btn-light btn-block {{$post->like->where('user_id', auth()->id())->count() ? 'liked' : '' }}" type="button" onclick="like(this, 'post', {{ $post->id }})"><i class="fa-solid fa-heart"></i> Like</button>
                                <button class="btn btn-light btn-block m-0" onclick="toggleCommentInput(this)"><i class="fa-solid fa-comment"></i> Comment</button>
                            </div>
                        </div>
                        <div class="p-0 m-0 w-100 col-12">
                            <div class="d-none w-100" id="comment-box" style="height:70px !important;">
                                <div class="form-group p-2 d-flex align-items-start" style="gap: 10px">
                                    <textarea class="form-control" id="text-area" placeholder="Write a Comment" name="mix">
                                    </textarea>
                                    <button type="button" class="btn-luxe" onclick="comment(this, {{ $post->id }})">Comment</button>
                                </div>
                            </div>
                            <div class="comments-box w-100 p-3">
                                @if($post->comment->count())
                                    @foreach($post->comment as $comment)
                                        <div id="textbox" class="row p-0 m-0">
                                            <div class="col-12 single-comment d-flex align-items-start">
                                                <div class="single-comment-profile">
                                                    <img src="{{ $comment->user->avatar }}" alt="">
                                                </div>
                                                <div>
                                                    <div class="single-comment-body">
                                                        <p>{{ $comment->body }}</p>
                                                    </div>
                                                    <div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">
                                                        <button class="btn btn-link text-dark {{ $comment->like->where('user_id', auth()->id())->count() ? 'liked' : '' }}" type="button" onclick="like(this, 1, {{ $comment->id }})"><i class="fa-solid fa-heart"></i> Like</button>
                                                        <button class="btn btn-link m-0 text-dark" onclick="toggleReplyInput(this)"><i class="fa-solid fa-comment"></i> Reply</button>
                                                    </div>
                                                    <div style="width: 400px !important" class="replies-box">
                                                        <div class="row p-0 m-0 reply-box">
                                                            @foreach($comment->replies as $reply)
                                                            <div class="col-12 single-comment d-flex align-items-start mt-2">
                                                                <div class="single-comment-profile">
                                                                    <img src="{{ $reply->user->avatar }}" alt="">
                                                                </div>
                                                                <div>
                                                                    <div class="single-comment-body">
                                                                        <p>{{ $reply->body }}</p>
                                                                    </div>
                                                                    <div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">
                                                                    <button class="btn btn-link text-dark {{ $reply->like->where('user_id', auth()->id())->count() ? 'liked' : '' }}" type="button" onclick="like(this, 1, {{ $reply->id }})"><i class="fa-solid fa-heart"></i> Like</button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        <div class="d-none w-100" id="comment-box" style="height:70px !important;">
                                                            <div class="form-group p-2 d-flex align-items-start" style="gap: 10px">
                                                                <textarea style="height: 50px" class="form-control" id="text-area" placeholder="Write a Comment" name="mix">
                                                                </textarea>
                                                                <button type="button" class="btn-luxe" onclick="reply(this, {{ $post->id}}, {{ $comment->id }})">Reply</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                <p>No results found.</p>
                @endforelse --}}
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
    var nrPosts = 8;
    getPosts();

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
    function toggleReplyInput(e) {
        $(e).parents('.single-comment').find('#comment-box').toggleClass('d-none')
    }
    var tags = [];
    function comment(e, post_id, comment_id = null) {
        var commentP = $(e).parents('.box-post').find('#comment-count span');
        var num = commentP.html();
        commentP.html(parseInt(++num));

        var body = $(e).parents('.box-post').find('#text-area').val();
        
        $(e).parents('.box-post').find('#text-area').val("")

        var data = {
            'post_id': post_id,
            'body': body,
            'tags': tags
        }
        $.ajax({
            url: "{{ route('news.comment.create') }}",
            data: data,
            type: "post",
            headers: {
                "X-CSRF-Token": $('[name="_token"]').val(),
            },
            success: function (output) {
                var html = '<div id="textbox" class="row mb-3 p-0 m-0">' +
                '<div class="col-12 single-comment d-flex align-items-start mb-3">' +
                '<div class="single-comment-profile">' +
                '<img src="{{ auth()->user()->avatar }}" alt="">' +
                '</div>' +
                '<div>' +
                '<div class="single-comment-body">' +
                '<p> '+ body +'</p>' +
                '</div>' +
                '<div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">' +
                '<button class="btn btn-link text-dark" type="button" onclick="like(this, 1, '+ output.id +')"><i class="fa-solid fa-heart"></i> Like</button>' +
                '<button class="btn btn-link m-0 text-dark" onclick="toggleCommentInput(this)"><i class="fa-solid fa-comment"></i> Reply</button>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>';

                $(e).parents('.box-post').find('.comments-box').prepend(html)
            },
        });
    }

    function reply(e, post_id, comment_id) {
        var body = $(e).parents('.single-comment').find('#text-area').val();
        
        $(e).parents('.single-comment').find('#text-area').val("")

        var data = {
            'post_id': post_id,
            'body': body,
            'parent_id': comment_id
        }
        $.ajax({
            url: "{{ route('news.comment.create') }}",
            data: data,
            type: "post",
            headers: {
                "X-CSRF-Token": $('[name="_token"]').val(),
            },
            success: function (output) {
                var html = '<div class="col-12 single-comment d-flex align-items-start mt-2"> ' +
                '<div class="single-comment-profile"> ' +
                '<img src="{{ auth()->user()->avatar }}" alt=""> ' +
                '</div> ' +
                '<div> ' +
                '<div class="single-comment-body"> ' +
                '<p>'+ body +'</p> ' +
                '</div> ' +
                '<div class="col-12 d-flex align-items-center p-0" style="gap: 5px;"> ' +
                '<button class="btn btn-link text-dark" type="button" onclick="like(this, 1, ' + output.id +')"><i class="fa-solid fa-heart"></i> Like</button> ' +
                '</div> ' +
                '</div> ' +
                ' </div> ';

                $(e).parents('.replies-box').find('.reply-box').prepend(html)
            },
        });
    }
    function like(e, type = 'post', post_id) {
        
        if(type == 1) {
            var data = {
                'comment_id': post_id
            }
            $(e).toggleClass('liked')

            $.ajax({
                url: "{{ route('news.like.create.comment') }}",
                data: data,
                type: "post",
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                },
            });
        } else {
            var data = {
                'post_id': post_id
            }
            $.ajax({
                url: "{{ route('news.like.create') }}",
                data: data,
                type: "post",
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    var likeP = $(e).parents('.box-post').find('#like-count span');
                    if(output) {
                        var num = likeP.html();
                        likeP.html(parseInt(++num))
                        $(e).toggleClass('liked')
                    } else {
                        var num = likeP.html();
                        likeP.html(parseInt(--num))
                        $(e).toggleClass('liked')
                    }
                },
            });
        }
    }
    function getPosts() {
        var my_id = '{{ auth()->id() }}';
        $.ajax({
            url: "{{ route('news.index') }}?nr=" + nrPosts,
            type: "get",
            headers: {
                "X-CSRF-Token": $('[name="_token"]').val(),
            },
            success: function (output) {
                console.log(output)
                var postsbox = $('#posts-box');
                var html = '';
                output.forEach(item => {
                    html += '<div class="col-12 box-post p-0 row m-0 mb-3">' +
                        '<div class="row p-0 m-0 w-100 col-12">' +
                            '<div class="box-image col-lg-4 col-md-5 col-12 p-0">' +
                                '<div class="box-image-preview">';
                                    if(item.image.length) {
                                        html += '<img src="'+ item.image[0].file_url +'" alt="">';

                                        if(item.image.length > 1) {
                                            html += '<div class="image-count">+' + parseInt(--item.image.length) + '</div>';
                                        }
                                    }
                                html += '</div>' +
                            '</div>' +
                            '<div class="box-details col-lg-8 col-md-7 col-12">' +
                                '<div class="d-flex justify-content-between align-items-center">' +
                                    '<p id="author" class="gothicbold">' + item.agent.profile.fullname + '</p>' +
                                    '<p id="date">' +  moment(item.created_at).fromNow() + '</p>' +
                                '</div>' +
                                '<p>' + item.body.substr(0, 240) + '</p>' +
                                '<div class="box-tags d-flex justify-content-start">';
                                    if(item.tag.length) {
                                        item.tag.forEach(tag => {
                                            html += '<p class="p-1 rounded">' + tag.agent.profile.fullname + '</p>';
                                        });
                                    }
                                html += '</div>' +
                                '<a href="#"><i class="fa-solid fa-angle-right"></i> Read More</a>' +
                            '</div>' +
                        '</div>' +
                        '<div class="p-0 m-0 w-100 col-12">' +
                           
                            '<div class="d-flex align-items-center p-2 pt-3" style="gap: 0px 20px;">' +
                                '<p class="p-0 m-0" id="like-count"><i class="fa-solid fa-heart"></i> Likes: <span>' + item.like.length + '</span></p>' +
                                '<p class="p-0 m-0" id="comment-count"><i class="fa-solid fa-comment"></i> Comments: <span>' + item.comment.length + '</span></p>' +
                            '</div>' +
                            '<div class="d-flex justify-content-center align-items-center p-2" style="gap: 5px;">' +
                                '<button class="btn btn-light btn-block '+ (item.like.filter(x => x.user_id == my_id).length ? 'liked': '') +'" type="button" onclick="like(this, 2, ' + item.id +')"><i class="fa-solid fa-heart"></i> Like</button>' +
                                '<button class="btn btn-light btn-block m-0" onclick="toggleCommentInput(this)"><i class="fa-solid fa-comment"></i> Comment</button>' +
                            '</div>' +
                        '</div>' +
                        '<div class="p-0 m-0 w-100 col-12">' +
                            '<div class="d-none w-100" id="comment-box" style="height:70px !important;">' +
                                '<div class="form-group p-2 d-flex align-items-start" style="gap: 10px">' +
                                    '<textarea class="form-control" id="text-area" placeholder="Write a Comment" name="mix">' +
                                    '</textarea>' +
                                    '<button type="button" class="btn-luxe" onclick="comment(this, ' + item.id + ')">Comment</button>' +
                                '</div>' +
                            '</div>' +
                            '<div class="comments-box w-100 p-3">';
                                if(item.comment.length) {
                                    item.comment.forEach(comment => {
                                        html += '<div id="textbox" class="row p-0 m-0">' +
                                            '<div class="col-12 single-comment d-flex align-items-start">' +
                                                '<div class="single-comment-profile">' +
                                                    '<img src="' + comment.user.avatar + '" alt="">' +
                                                '</div>' +
                                                '<div>' +
                                                    '<div class="single-comment-body">' +
                                                        '<p>'+ comment.body +'</p>' +
                                                    '</div>' +
                                                    '<div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">' +
                                                        '<button class="btn btn-link text-dark '+ (comment.like.filter(x => x.user_id == my_id).length ? 'liked': '') +'" type="button" onclick="like(this, 1, '+ comment.id +')"><i class="fa-solid fa-heart"></i> Like</button>' +
                                                        '<button class="btn btn-link m-0 text-dark" onclick="toggleReplyInput(this)"><i class="fa-solid fa-comment"></i> Reply</button>' +
                                                    '</div>' +
                                                    '<div style="width: 400px !important" class="replies-box">' +
                                                        '<div class="row p-0 m-0 reply-box">';
                                                            comment.replies.forEach(reply => {
                                                                html += '<div class="col-12 single-comment d-flex align-items-start mt-2">' +
                                                                    '<div class="single-comment-profile">' +
                                                                        '<img src="' + reply.user.avatar + '" alt="">' +
                                                                    '</div>' +
                                                                    '<div>' +
                                                                        '<div class="single-comment-body">' +
                                                                            '<p>'+ reply.body +'</p>' +
                                                                        '</div>' +
                                                                        '<div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">' +
                                                                        '<button class="btn btn-link text-dark '+ (reply.like.filter(x => x.user_id == my_id).length ? 'liked': '') +'" type="button" onclick="like(this, 1, ' + reply.id + ')"><i class="fa-solid fa-heart"></i> Like</button>' +
                                                                    '</div>' +
                                                                    '</div>' +
                                                                '</div>';
                                                            });
                                                        html += '</div>' +
                                                        '<div class="d-none w-100" id="comment-box" style="height:70px !important;">' +
                                                            '<div class="form-group p-2 d-flex align-items-start" style="gap: 10px">' +
                                                                '<textarea style="height: 50px" class="form-control" id="text-area" placeholder="Write a Comment" name="mix">' +
                                                                '</textarea>' +
                                                                '<button type="button" class="btn-luxe" onclick="reply(this, '+ item.id +', ' + comment.id + ')">Reply</button>' +
                                                            '</div>' +
                                                        '</div>' +
                                                    '</div>' +
                                                '</div>' +
                                            '</div>' +
                                        '</div>';
                                    });
                                }
                            html += '</div>' +
                        '</div>' +
                    '</div>';
                });
                postsbox.html(html)
            },
        });
    }
</script>
@endsection
@endsection