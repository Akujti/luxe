@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/news/main.css') }}" />
<link rel="stylesheet" href="{{ asset('css/news/style.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

<script src="https://unpkg.com/@yaireo/tagify"></script>
<script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
<link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>

<style>
    
</style>
@endsection
@section('content')
<div class="container-fluid news-feed">
   <div class="row justify-content-center">
       <div class="col-lg-8 col-12">
            <div class="row w-100 m-0">
                <div class="create-post-box w-100">
                    <div class="row justify-content-center">
                        <div class="col-12 d-flex create-post-box">
                            <select name="" id="sort-select" class="form-control" onchange="getPosts(getSelectValue('#sort-select'))">
                                <option value="desc">Newest</option>
                                <option value="asc">Oldest</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Write a post" onclick="openModal()">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row w-100 mt-3 m-0" id="posts-box">
                <p>No posts found.</p>
            </div>
            <div class="w-100 text-center">
                <button class="btn btn-link" type="button" id="rows" onclick="loadMore()">Load More</button>
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
                <div class="col d-flex" style="gap: 10px">
                    <button type="button" onclick="addFile()" class="btn btn-light"><i class="fa-solid fa-file"></i> Attach Files</button>
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
<script src="{{ asset('js/news-feed/jQuery.tagify.min.js') }}" defer></script>
<script>
    var nrPosts = 8;
    var nrComments = 8;
    var nrOfAllPosts;
    var my_id = '{{ auth()->id() }}';
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
        var input = $(e).parents('.box-post').find('#comment-box')
        input.toggleClass('d-none')
        if(input.is(':visible')) {
            input.find('textarea').focus();
        }
    }
    function toggleReplyInput(e) {
        var input = $(e).parents('.single-row-comment').find('#reply-comment-box');
        input.toggleClass('d-none')
        if(input.is(':visible')) {
            input.find('textarea').focus();
        }
    }
    function toggleReplyLevelInput(e) {
        var input = $(e).parents('.single-reply-reply').find('#replylevel-comment-box')
        input.toggleClass('d-none')
        if(input.is(':visible')) {
            input.find('textarea').focus();
        }
    }
    var tags = [];
    function comment(e, post_id, comment_id = null) {
        var body = $(e).parents('.box-post').find('#text-area').val();

        if(!body) {
            return;
        }

        body = makeUrlHref(body);

        var commentP = $(e).parents('.box-post').find('#comment-count span');
        var num = commentP.html();
        commentP.html(parseInt(++num));
        
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
                var html = `<div id="textbox" class="row mb-2 p-0 m-0 w-100 single-row-comment position-relative">
                            <div class="col-12 single-comment comment-single d-flex align-items-start p-0 m-0">
                                <div class="single-comment-profile">
                                    <img src="{{ auth()->user()->avatar }}" alt="">
                                </div>
                                <div class="w-100">
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative">
                                            <div contenteditable="false" class="single-comment-body m-0">
                                                <p class="w-100 p-0 m-0"><a href="/user/profile/{{ auth()->id() }}">{{ auth()->user()->profile->fullname }}</a></p>
                                                <span>`+ body +`</span>
                                            </div>
                                            <div class="single-comment-delete">
                                                <button class="btn btn-link text-danger" type="button" onclick="deleteComment(this, `+ output.id +`)">&times;</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">
                                        <button class="btn btn-link text-dark" type="button" onclick="like(this, 1, `+ output.id +`)"><i class="fa-solid fa-heart"></i> Like</button>
                                        <button class="btn btn-link m-0 text-dark" onclick="toggleReplyInput(this)"><i class="fa-solid fa-comment"></i> Reply</button>
                                    </div>
                                </div>
                            </div>
                            <div class="replies-box w-100">
                                <div class="row p-0 m-0 reply-box">
                                   
                                </div>
                                <div class="d-none w-100" id="reply-comment-box" style="min-height:70px !important;">
                                    <div class="form-group p-2 d-flex align-items-start" style="gap: 10px;min-height: 64px;width: 100%;left: 0px;">
                                        <textarea class="form-control" id="text-area-reply" placeholder="Reply on `+ output.user.profile.fullname +` comment" name="mix"></textarea>
                                        <button type="button" class="btn-comment btn-luxe-sm" onclick="reply(this, `+ post_id +`, ` + output.id + `)"><span class="d-flex d-lg-none d-md-none"><i class="fa-solid fa-paper-plane"></i></span> <span class="d-none d-md-flex d-lg-flex">Reply</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;

                $(e).parents('.box-post').find('.comments-box').prepend(html)
                addTagifyFunc();
                replaceTag();
                tags = [];
            },
        });
    }

    function reply(e, post_id, comment_id) {
        var body = $(e).parents('.single-row-comment').find('#text-area-reply').val();
        if(!body) {
            return;
        }
        body = makeUrlHref(body);
        
        $(e).parents('.single-row-comment').find('#text-area-reply').val("")

        var data = {
            'post_id': post_id,
            'body': body,
            'parent_id': comment_id,
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
                var html = `<div class="col-12 single-comment single-reply single-reply-reply row m-0 align-items-start mt-2 p-0" style="gap:0px">
                    <div class="p-0 m-0 d-flex">
                        <div class="single-comment-profile mr-1">
                            <img src="{{ auth()->user()->avatar }}" alt="">
                        </div>
                        <div>
                            <div class="d-flex align-items-center position-relative">
                                <div contenteditable="false" class="single-comment-body m-0">
                                    <p class="w-100 p-0 m-0"><a href="/user/profile/{{ auth()->id() }}">{{ auth()->user()->profile->fullname }}</a></p>
                                    <span>`+ body +`</span>
                                </div>
                                <div class="single-comment-delete">
                                    <button class="btn btn-link text-danger" type="button" onclick="deleteReply(this, `+ output.id +`)">&times;</button>
                                </div>
                            </div>
                            <div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">
                                <button class="btn btn-link text-dark" type="button" onclick="like(this, 1, `+ output.id +`)"><i class="fa-solid fa-heart"></i> Like</button>
                                <button class="btn btn-link m-0 text-dark" onclick="toggleReplyLevelInput(this)"><i class="fa-solid fa-comment"></i> Reply</button>
                            </div>
                        </div>
                        </div>
                        <div class="row p-0 m-0 reply-reply-box reply-reply-box-`+ output.id +` pl-3">
                        </div>
                            <div class="d-none w-100" id="replylevel-comment-box" style="min-height:70px !important;">
                                <div class="form-group p-2 d-flex align-items-start" style="gap: 10px;min-height: 64px;width: 100%;left: 0px;">
                                    <textarea style="height: 50px" class="form-control" id="text-area" placeholder="Reply to the reply of `+ output.user.profile.fullname +`" name="mix"></textarea>
                                    <button type="button" class="btn-comment btn-luxe-sm" onclick="replylevel(this, `+ output.commentable_id +`, ` + output.id + `)"><span class="d-flex d-lg-none d-md-none"><i class="fa-solid fa-paper-plane"></i></span> <span class="d-none d-md-flex d-lg-flex">Reply</span></button>
                                </div>
                            </div>
                        </div>
                </div>`;

                $(e).parents('.replies-box').find('.reply-box').append(html)
                addTagifyFunc();
                replaceTag();
                tags = [];
            },
        });
    }

    function replylevel(e, post_id, reply_id) {
        var body = $(e).parents('.single-reply-reply').find('#text-area').val();

        if(!body) {
            return;
        }
        body = makeUrlHref(body);
        
        $(e).parents('.single-reply-reply').find('#text-area').val("")

        var data = {
            'post_id': post_id,
            'body': body,
            'parent_id': reply_id,
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
                var html = `<div class="col-12 single-comment single-reply d-flex align-items-start mt-2 p-0">
                        <div class="single-comment-profile">
                            <img src="{{ auth()->user()->avatar }}" alt="">
                        </div>
                        <div>
                            <div class="d-flex align-items-center position-relative">
                                <div contenteditable="false" class="single-comment-body m-0">
                                    <p class="w-100 p-0 m-0"><a href="/user/profile/{{ auth()->id() }}">{{ auth()->user()->profile->fullname }}</a></p>
                                    <span>`+ body +`</span>
                                </div>
                                <div class="single-comment-delete">
                                    <button class="btn btn-link text-danger" type="button" onclick="deleteReply(this, `+ output.id +`, 1)">&times;</button>
                                </div>
                            </div>
                            <div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">
                            <button class="btn btn-link text-dark" type="button" onclick="like(this, 1, ` + output.id + `)"><i class="fa-solid fa-heart"></i> Like</button>
                        </div>
                        </div>
                    </div>`;

                $(e).parents('.replies-box').find('.reply-reply-box-' + reply_id).append(html)
                replaceTag();
                tags = [];
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

    function getPosts(sort = 'desc') {
        $.ajax({
            url: "{{ route('news.index') }}?nr=" + nrPosts + '&sort=' + sort,
            type: "get",
            headers: {
                "X-CSRF-Token": $('[name="_token"]').val(),
            },
            success: function (output) {
                nrOfAllPosts = output.rows;
                if(nrOfAllPosts > nrPosts) {
                    $('#rows').removeClass('d-none')
                } else {
                    $('#rows').addClass('d-none')
                }
                var postsbox = $('#posts-box');
                var html = '';
                if(output.data.length) {
                    output.data.forEach((item) => {
                        html += `<div class="col-12 box-post p-0 row m-0 mb-3">
                            <div class="row box-row-post p-0 m-0 w-100 col-12">
                                <div class="box-image col-lg-4 col-md-5 col-12 p-0">
                                    <div class="box-image-preview">`;
                                        var numOfImages = [];
                                        const allowedExtension = '{{ config('allowed-extension-file.media.images') }}';
                                        if(item.row.image.length) {
                                            item.row.image.forEach(img => {
                                                if(allowedExtension.search(img.type) !== -1) {
                                                    numOfImages.push(img)
                                                }
                                            });
                                            
                                            if(numOfImages) {
                                                html += `<img src="`+ numOfImages[0].file_url +`" alt="">`;
                
                                                if(numOfImages.length > 1) {
                                                    html += `<div class="image-count">+` + parseInt(--numOfImages.length) + `</div>`;
                                                }
                                            } else {
                                                html += `<img src="/images/news-feed/no-images-found.png" alt="">`;
                                            }
                                        } else {
                                            html += `<img src="/images/news-feed/no-images-found.png" alt="">`;
                                        }
                                    html += `</div>
                                </div>
                                <div class="box-details col-lg-8 col-md-7 col-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p id="author" class="gothicbold p-0 m-0">` + item.row.agent.profile.fullname + `</p>
                                        <div class="d-flex align-items-center" style="gap:5px">
                                            <p id="date" class="p-0 m-0">` +  moment(item.row.created_at).fromNow() + `</p>`;
                                            if(item.row.agent.id == my_id) {
                                                var editUrl = "{{ route('news.show.edit', ':id') }}";
                                                editUrl = editUrl.replace(':id', item.row.id);
                                                html += `<div class="btn-group">
                                                            <button type="button" class="btn btn-link p-0 m-0" id="delete-post" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa-solid fa-ellipsis"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item text-primary" href="`+ editUrl +`"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                                            </div>
                                                        </div>`;
                                            }
                                        html += `</div>
                                    </div>
                                    <p>` + (item.row.body.substr(0, 200) + `...`) + `</p>
                                    <div class="box-tags d-flex justify-content-start row p-0 m-0">`;
                                        if(item.row.tag.length) {
                                            item.row.tag.forEach(tag => {
                                                var agentUrl = "{{ route('profile.my_profile', ':id') }}";
                                                agentUrl = agentUrl.replace(':id', tag.agent.id);
                                                html += `<p class="p-1 rounded m-0"><a class="text-luxe" href="`+ agentUrl +`">` + tag.agent.profile.fullname + `</a></p>`;
                                            });
                                        }
                                    var urlSinglePage = "{{ route('news.show', ':id') }}";
                                    urlSinglePage = urlSinglePage.replace(':id', item.row.id);
                                    html += `</div>
                                    <a href="` + urlSinglePage + `" class="mb-2"><i class="fa-solid fa-angle-right"></i> Read More</a>
                                </div>
                            </div>
                            <div class="p-0 m-0 w-100 col-12">
                                <div class="d-flex align-items-center p-2 pt-3" style="gap: 0px 20px;">
                                    <p class="p-0 m-0" id="like-count"><i class="fa-solid fa-heart"></i> Likes: <span>` + item.row.like.length + `</span></p>
                                    <p class="p-0 m-0" id="comment-count"><i class="fa-solid fa-comment"></i> Comments: <span>` + item.row.comment.length + `</span></p>
                                </div>
                                <div class="d-flex justify-content-center align-items-center p-2" style="gap: 5px;">
                                    <button class="btn btn-light btn-block `+ (item.row.like.filter(x => x.user_id == my_id).length ? `liked`: ``) +`" type="button" onclick="like(this, 2, ` + item.row.id +`)"><i class="fa-solid fa-heart"></i> Like</button>
                                    <button class="btn btn-light btn-block m-0" onclick="toggleCommentInput(this)"><i class="fa-solid fa-comment"></i> Comment</button>
                                </div>
                            </div>
                            <div class="p-0 m-0 w-100 col-12 row-box">
                                <div class="w-100" id="comment-box" style="min-height:70px !important;">
                                    <div class="form-group p-2 d-flex align-items-start comment-textarea" style="gap: 10px;min-height: 64px;">
                                        <textarea class="form-control" id="text-area" placeholder="Write a Comment" name="mix"></textarea>
                                        <button type="button" class="btn-comment btn-luxe-sm" onclick="comment(this, ` + item.row.id + `)"><span class="d-flex d-lg-none d-md-none"><i class="fa-solid fa-paper-plane"></i></span> <span class="d-none d-md-flex d-lg-flex">Comment</span></button>
                                    </div>
                                </div>
                                <div class="comments-box w-100 p-3">`;
                                    if(item.comments.length) {
                                        item.comments.forEach(comment => {
                                            html += `<div id="textbox" class="row mb-2 p-0 m-0 w-100 single-row-comment position-relative">
                                                <div class="col-12 single-comment comment-single d-flex align-items-start p-0 m-0">
                                                    <div class="single-comment-profile">
                                                        <img src="` + comment.user.avatar + `" alt="">
                                                    </div>
                                                    <div class="w-100">
                                                        <div class="d-flex align-items-center">
                                                            <div class="position-relative">
                                                            <div contenteditable="false" class="single-comment-body m-0">
                                                                <p class="w-100 p-0 m-0"><a href="/user/profile/`+ comment.user.id +`">`+ comment.user.profile.fullname +`</a></p>
                                                                <span>`+ comment.body +`</span>
                                                            </div>`;
                                                            if(comment.user.id == my_id) {
                                                                html += `<div class="single-comment-delete">
                                                                    <button class="btn btn-link text-danger" type="button" onclick="deleteComment(this, `+ comment.id +`)">&times;</button>
                                                                </div>`;
                                                            }
                                                        html += `</div></div>
                                                        <div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">
                                                            <button class="btn btn-link text-dark `+ (comment.like.filter(x => x.user_id == my_id).length ? `liked`: ``) +`" type="button" onclick="like(this, 1, `+ comment.id +`)"><i class="fa-solid fa-heart"></i> Like</button>
                                                            <button class="btn btn-link m-0 text-dark" onclick="toggleReplyInput(this)"><i class="fa-solid fa-comment"></i> Reply</button>
                                                        </div>
                                                    </div> 
                                                </div>`;
                                                (comment.replies.length) ? html += `<div class="vertical"></div>` : html += ``;
                                                html += `<div class="replies-box w-100">
                                                    <div class="row p-0 m-0 reply-box">`;
                                                        comment.replies.slice(0, 6).forEach(reply => {
                                                            html += `<div class="col-12 single-comment single-reply single-reply-reply row m-0 align-items-start mt-2 p-0" style="gap:0px">
                                                                <div class="p-0 m-0 d-flex">
                                                                    <div class="single-comment-profile mr-1">
                                                                        <img src="` + reply.user.avatar + `" alt="">
                                                                    </div>
                                                                    <div>
                                                                        <div class="d-flex align-items-center position-relative">
                                                                            <div contenteditable="false" class="single-comment-body m-0">
                                                                                <p class="w-100 p-0 m-0"><a href="/user/profile/`+ reply.user.id +`">`+ reply.user.profile.fullname +`</a></p>
                                                                                <span>`+ reply.body +`</span>
                                                                            </div>`;
                                                                            if(reply.user.id == my_id) {
                                                                                html += `<div class="single-comment-delete">
                                                                                    <button class="btn btn-link text-danger" type="button" onclick="deleteReply(this, `+ reply.id +`)">&times;</button>
                                                                                </div>`;
                                                                            }
                                                                        html += `</div>
                                                                        <div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">
                                                                            <button class="btn btn-link text-dark `+ (reply.like.filter(x => x.user_id == my_id).length ? `liked`: ``) +`" type="button" onclick="like(this, 1, ` + reply.id + `)"><i class="fa-solid fa-heart"></i> Like</button>
                                                                            <button class="btn btn-link m-0 text-dark" onclick="toggleReplyLevelInput(this)"><i class="fa-solid fa-comment"></i> Reply</button>
                                                                        </div>
                                                                    </div>
                                                                </div>`;
                                                                (reply.replies.length) ? html += `<div class="vertical"></div>` : html += ``;
                                                                html += `<div class="row p-0 m-0 reply-reply-box reply-reply-box-`+ reply.id +` pl-3">`;
                                                                    reply.replies.forEach(replylevel => {
                                                                        html += `<div class="col-12 single-comment single-reply d-flex align-items-start mt-2 p-0">
                                                                            <div class="single-comment-profile">
                                                                                <img src="` + replylevel.user.avatar + `" alt="">
                                                                            </div>
                                                                            <div>
                                                                                <div class="d-flex align-items-center position-relative">
                                                                                    <div contenteditable="false" class="single-comment-body m-0">
                                                                                        <p class="w-100 p-0 m-0"><a href="/user/profile/`+ replylevel.user.id +`">`+ replylevel.user.profile.fullname +`</a></p>
                                                                                        <span>`+ replylevel.body +`</span>
                                                                                    </div>`;
                                                                                    if(replylevel.user.id == my_id) {
                                                                                        html += `<div class="single-comment-delete">
                                                                                            <button class="btn btn-link text-danger" type="button" onclick="deleteReply(this, `+ replylevel.id +`, 1)">&times;</button>
                                                                                        </div>`;
                                                                                    }
                                                                                html += `</div>
                                                                                <div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">
                                                                                <button class="btn btn-link text-dark `+ (replylevel.like.filter(x => x.user_id == my_id).length ? `liked`: ``) +`" type="button" onclick="like(this, 1, ` + replylevel.id + `)"><i class="fa-solid fa-heart"></i> Like</button>
                                                                            </div>
                                                                            </div>
                                                                        </div>`;
                                                                    });
                                                                html += `</div>
                                                                <div class="d-none w-100" id="replylevel-comment-box" style="min-height:70px !important;">
                                                                    <div class="form-group p-2 d-flex align-items-start" style="gap: 10px;min-height: 64px;width: 100%;left: 0px;">
                                                                        <textarea style="height: 50px" class="form-control" id="text-area" placeholder="Reply to the reply of `+ reply.user.profile.fullname +`" name="mix"></textarea>
                                                                        <button type="button" class="btn-comment btn-luxe-sm" onclick="replylevel(this, `+ item.row.id +`, ` + reply.id + `)"><span class="d-flex d-lg-none d-md-none"><i class="fa-solid fa-paper-plane"></i></span> <span class="d-none d-md-flex d-lg-flex">Reply</span></button>
                                                                    </div>
                                                                </div>
                                                            </div>`;
                                                        });
                                                    html += `</div>
                                                    <input type="hidden" class="nrReply" value="6">
                                                    <button type="button" class="btn btn-link `+ ( (comment.replies.length && comment.replies.length > 6) ? ``: `d-none`) +`" id="btnLoadMoreReplies" onclick="loadMoreReplies(this, `+ comment.id +`)">Load more replies</button>
                                                    <div class="d-none w-100" id="reply-comment-box" style="min-height:70px !important;">
                                                        <div class="form-group p-2 d-flex align-items-start" style="gap: 10px;min-height: 64px;width: 100%;left: 0px;">
                                                            <textarea class="form-control" id="text-area-reply" placeholder="Reply on `+ comment.user.profile.fullname +` comment" name="mix"></textarea>
                                                            <button type="button" class="btn-comment btn-luxe-sm" onclick="reply(this, `+ item.row.id +`, ` + comment.id + `)"><span class="d-flex d-lg-none d-md-none"><i class="fa-solid fa-paper-plane"></i></span> <span class="d-none d-md-flex d-lg-flex">Reply</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>`;
                                        });
                                    }
                                html += `</div>
                                <input type="hidden" class="nrCm" value="8">
                                <button type="button" class="btn btn-link `+ ( (item.comments.length && item.row.comment.length > 8) ? ``: `d-none`) +`" id="btnLoadMoreComments" onclick="loadMoreComments(this, `+ item.row.id +`)">Load more comments</button>
                            </div>
                        </div>`;
                    });
                    postsbox.html(html)
                    tagifyFunc();
                    replaceTag();
                }
            },
        });
    }

    function loadMore() {
        nrPosts += 8;

        getPosts();
    }
    function loadMoreComments(e, post_id) {
        var nrCm = parseInt($(e).parents('.row-box').find('.nrCm').val()) + 8;

        $.ajax({
            url: "{{ route('news.comment.getall') }}?post_id=" + post_id + "&nr=" + nrCm,
            type: "get",
            headers: {
                "X-CSRF-Token": $('[name="_token"]').val(),
            },
            success: function (output) {
                if(output.rows < nrCm) {
                    $(e).parents('.row-box').find('#btnLoadMoreComments').addClass('d-none')
                }
                var html = '';
                output.comments.forEach(comment => {
                    html += `<div id="textbox" class="row mb-2 p-0 m-0 w-100 single-row-comment position-relative">
                                <div class="col-12 single-comment comment-single d-flex align-items-start p-0 m-0">
                                    <div class="single-comment-profile">
                                        <img src="` + comment.user.avatar + `" alt="">
                                    </div>
                                    <div class="w-100">
                                        <div class="d-flex align-items-center">
                                            <div class="position-relative">
                                            <div contenteditable="false" class="single-comment-body m-0">
                                                <p class="w-100 p-0 m-0"><a href="/user/profile/`+ comment.user.id +`">`+ comment.user.profile.fullname +`</a></p>
                                                <span>`+ comment.body +`</span>
                                            </div>`;
                                            if(comment.user.id == my_id) {
                                                html += `<div class="single-comment-delete">
                                                    <button class="btn btn-link text-danger" type="button" onclick="deleteComment(this, `+ comment.id +`)">&times;</button>
                                                </div>`;
                                            }
                                        html += `</div></div>
                                            <div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">
                                                <button class="btn btn-link text-dark `+ (comment.like.filter(x => x.user_id == my_id).length ? `liked`: '') + `" type="button" onclick="like(this, 1, `+ comment.id +`)"><i class="fa-solid fa-heart"></i> Like</button>
                                                <button class="btn btn-link m-0 text-dark" onclick="toggleReplyInput(this)"><i class="fa-solid fa-comment"></i> Reply</button>
                                            </div>
                                        </div>
                                </div>`;
                                (comment.replies.length) ? html += `<div class="vertical"></div>` : html += ``;
                                html += `<div class="replies-box w-100">
                                    <div class="row p-0 m-0 reply-box">`;
                                        comment.replies.slice(0, 6).forEach(reply => {
                                            html += `<div class="col-12 single-comment single-reply single-reply-reply row m-0 align-items-start mt-2 p-0" style="gap:0px">
                                                <div class="p-0 m-0 d-flex">
                                                    <div class="single-comment-profile mr-1">
                                                        <img src="` + reply.user.avatar + `" alt="">
                                                    </div>
                                                    <div>
                                                        <div class="d-flex align-items-center position-relative">
                                                            <div contenteditable="false" class="single-comment-body m-0">
                                                                <p class="w-100 p-0 m-0"><a href="/user/profile/`+ reply.user.id +`">`+ reply.user.profile.fullname +`</a></p>
                                                                <span>`+ reply.body +`</span>
                                                            </div>`;
                                                            if(reply.user.id == my_id) {
                                                                html += `<div class="single-comment-delete">
                                                                    <button class="btn btn-link text-danger" type="button" onclick="deleteReply(this, `+ reply.id +`)">&times;</button>
                                                                </div>`;
                                                            }
                                                        html += `</div>
                                                        <div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">
                                                            <button class="btn btn-link text-dark `+ (reply.like.filter(x => x.user_id == my_id).length ? `liked` : ``) +`" type="button" onclick="like(this, 1, ` + reply.id + `)"><i class="fa-solid fa-heart"></i> Like</button>
                                                            <button class="btn btn-link m-0 text-dark" onclick="toggleReplyLevelInput(this)"><i class="fa-solid fa-comment"></i> Reply</button>
                                                        </div>
                                                    </div>
                                                </div>`;
                                                (reply.replies.length) ? html += `<div class="vertical"></div>` : html += ``;
                                                html += `<div class="row p-0 m-0 reply-reply-box reply-reply-box-`+ reply.id +` pl-3">`;
                                                    reply.replies.forEach(replylevel => {
                                                        html += `<div class="col-12 single-comment single-reply d-flex align-items-start mt-2 p-0">
                                                            <div class="single-comment-profile">
                                                                <img src="` + replylevel.user.avatar + `" alt="">
                                                            </div>
                                                            <div>
                                                                <div class="d-flex align-items-center position-relative">
                                                                    <div contenteditable="false" class="single-comment-body m-0">
                                                                        <p class="w-100 p-0 m-0"><a href="/user/profile/`+ replylevel.user.id +`">`+ replylevel.user.profile.fullname +`</a></p>
                                                                        <span>`+ replylevel.body +`</span>
                                                                    </div>`;
                                                                    if(replylevel.user.id == my_id) {
                                                                        html += `<div class="single-comment-delete">
                                                                            <button class="btn btn-link text-danger" type="button" onclick="deleteReply(this, `+ replylevel.id +`, 1)">&times;</button>
                                                                        </div>`;
                                                                    }
                                                                html += `</div>
                                                                <div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">
                                                                <button class="btn btn-link text-dark `+ (replylevel.like.filter(x => x.user_id == my_id).length ? `liked`: ``) +`" type="button" onclick="like(this, 1, ` + replylevel.id + `)"><i class="fa-solid fa-heart"></i> Like</button>
                                                            </div>
                                                            </div>
                                                        </div>`;
                                                    });
                                                html += `</div>
                                                <div class="d-none w-100" id="replylevel-comment-box" style="min-height:70px !important;">
                                                    <div class="form-group p-2 d-flex align-items-start" style="gap: 10px;min-height: 64px;width: 100%;left: 0px;">
                                                        <textarea style="height: 50px" class="form-control" id="text-area" placeholder="Reply to the reply of `+ reply.user.profile.fullname +`" name="mix"></textarea>
                                                        <button type="button" class="btn-comment btn-luxe-sm" onclick="replylevel(this, `+ post_id +`, ` + reply.id + `)"><span class="d-flex d-lg-none d-md-none"><i class="fa-solid fa-paper-plane"></i></span> <span class="d-none d-md-flex d-lg-flex">Reply</span></button>
                                                    </div>
                                                </div>
                                            </div>`;
                                        });
                                    html += `</div>
                                    <input type="hidden" class="nrReply" value="6">
                                    <button type="button" class="btn btn-link `+ ( (comment.replies.length && comment.replies.length > 6) ? ``: `d-none`) +`" id="btnLoadMoreReplies" onclick="loadMoreReplies(this, `+ comment.id +`)">Load more replies</button>
                                    <div class="d-none w-100" id="reply-comment-box" style="min-height:70px !important;">
                                        <div class="form-group p-2 d-flex align-items-start" style="gap: 10px;min-height: 64px;width: 100%;left: 0px;">
                                            <textarea class="form-control" id="text-area-reply" placeholder="Reply on `+ comment.user.profile.fullname +` comment" name="mix"></textarea>
                                            <button type="button" class="btn-comment btn-luxe-sm" onclick="reply(this, `+ post_id +`, ` + comment.id + `)"><span class="d-flex d-lg-none d-md-none"><i class="fa-solid fa-paper-plane"></i></span> <span class="d-none d-md-flex d-lg-flex">Reply</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                });

               $(e).parents('.row-box').find('.comments-box').html(html);
               addTagifyFunc();
               replaceTag();
            },
        });

        $(e).parents('.row-box').find('.nrCm').val(nrCm) 
    }

    function loadMoreReplies(e, comment_id) {
        var nrReply = parseInt($(e).parents('.replies-box').find('.nrReply').val()) + 6;
        $.ajax({
            url: "{{ route('news.comment.get.replies') }}?comment_id=" + comment_id + "&nr=" + nrReply,
            type: "get",
            headers: {
                "X-CSRF-Token": $('[name="_token"]').val(),
            },
            success: function (output) {
                if(output.replies.length < nrReply) {
                    $(e).parents('.replies-box').find('#btnLoadMoreReplies').addClass('d-none')
                }
                var html = '';
                output.replies.forEach(reply => {
                    html += `<div class="col-12 single-comment single-reply single-reply-reply row m-0 align-items-start mt-2 p-0" style="gap:0px">
                        <div class="p-0 m-0 d-flex">
                            <div class="single-comment-profile mr-1">
                                <img src="` + reply.user.avatar + `" alt="">
                            </div>
                            <div>
                                <div class="d-flex align-items-center position-relative">
                                    <div contenteditable="false" class="single-comment-body m-0">
                                        <p class="w-100 p-0 m-0"><a href="/user/profile/`+ reply.user.id +`">`+ reply.user.profile.fullname +`</a></p>
                                        <span>`+ reply.body +`</span>
                                    </div>`;
                                    if(reply.user.id == my_id) {
                                        html += `<div class="single-comment-delete">
                                            <button class="btn btn-link text-danger" type="button" onclick="deleteReply(this, `+ reply.id +`)">&times;</button>
                                        </div>`;
                                    }
                                html += `</div>
                                <div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">
                                    <button class="btn btn-link text-dark `+ (reply.like.filter(x => x.user_id == my_id).length ? `liked` : ``) +`" type="button" onclick="like(this, 1, ` + reply.id + `)"><i class="fa-solid fa-heart"></i> Like</button>
                                    <button class="btn btn-link m-0 text-dark" onclick="toggleReplyLevelInput(this)"><i class="fa-solid fa-comment"></i> Reply</button>
                                </div>
                            </div>
                        </div>`;
                        (reply.replies.length) ? html += `<div class="vertical"></div>` : html += ``;
                        html += `<div class="row p-0 m-0 reply-reply-box reply-reply-box-`+ reply.id +` pl-3">`;
                            reply.replies.forEach(replylevel => {
                                html += `<div class="col-12 single-comment single-reply d-flex align-items-start mt-2 p-0">
                                    <div class="single-comment-profile">
                                        <img src="` + replylevel.user.avatar + `" alt="">
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center position-relative">
                                            <div contenteditable="false" class="single-comment-body m-0">
                                                <p class="w-100 p-0 m-0"><a href="/user/profile/`+ replylevel.user.id +`">`+ replylevel.user.profile.fullname +`</a></p>
                                                <span>`+ replylevel.body +`</span>
                                            </div>`;
                                            if(replylevel.user.id == my_id) {
                                                html += `<div class="single-comment-delete">
                                                    <button class="btn btn-link text-danger" type="button" onclick="deleteReply(this, `+ replylevel.id +`, 1)">&times;</button>
                                                </div>`;
                                            }
                                        html += `</div>
                                        <div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">
                                        <button class="btn btn-link text-dark `+ (replylevel.like.filter(x => x.user_id == my_id).length ? `liked`: ``) +`" type="button" onclick="like(this, 1, ` + replylevel.id + `)"><i class="fa-solid fa-heart"></i> Like</button>
                                    </div>
                                    </div>
                                </div>`;
                            });
                        html += `</div>
                        <div class="d-none w-100" id="replylevel-comment-box" style="min-height:70px !important;">
                            <div class="form-group p-2 d-flex align-items-start" style="gap: 10px;min-height: 64px;width: 100%;left: 0px;">
                                <textarea style="height: 50px" class="form-control" id="text-area" placeholder="Reply to the reply of `+ reply.user.profile.fullname +`" name="mix"></textarea>
                                <button type="button" class="btn-comment btn-luxe-sm" onclick="replylevel(this, `+ reply.commentable_id +`, ` + reply.id + `)"><span class="d-flex d-lg-none d-md-none"><i class="fa-solid fa-paper-plane"></i></span> <span class="d-none d-md-flex d-lg-flex">Reply</span></button>
                            </div>
                        </div>
                    </div>`;
                });
                html += `</div>`;
                $(e).parents('.replies-box').find('.reply-box').html(html);
                addTagifyFunc();
                replaceTag()
            },
        });

        $(e).parents('.replies-box').find('.nrReply').val(nrReply) 
    }

    function deleteReply(e, reply_id, replyLevel = 0) {
        var data = {
            'id': reply_id,
        };

        $.ajax({
            url: "{{ route('news.comment.delete') }}",
            data: data,
            type: "delete",
            headers: {
                "X-CSRF-Token": $('[name="_token"]').val(),
            },
            success: function (output) {
                if(output) {
                    if(replyLevel) {
                        $(e).parents('.reply-reply-box').remove();
                    } else {
                        $(e).parents('.single-reply-reply').remove();
                    }
                }
            },
        });
    }

    function deleteComment(e, comment_id) {
        var data = {
            'id': comment_id
        };

        var commentP = $(e).parents('.box-post').find('#comment-count span');
        var num = commentP.html();
        commentP.html(parseInt(--num));

        $.ajax({
            url: "{{ route('news.comment.delete') }}",
            data: data,
            type: "delete",
            headers: {
                "X-CSRF-Token": $('[name="_token"]').val(),
            },
            success: function (output) {
                if(output) {
                    $(e).parents('.single-row-comment').remove();
                }
            },
        });
    }

    function replaceTag() {
        $('.row-tag').each( function() {
            try {
                var html = JSON.parse($(this).html())
                var agentUrl = "{{ route('profile.my_profile', ':id') }}";
                agentUrl = agentUrl.replace(':id', html.id);
                var ahref = '&nbsp;<a href="'+ agentUrl +'">'+ html.value +'</a>'
                $(this).html(ahref)
            } catch (e) {
            }
        })
    }
    function getSelectValue(element) {
        return $(element).val()
    }
</script>
@endsection
@endsection