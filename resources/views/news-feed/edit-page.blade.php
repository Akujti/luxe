@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/news/main.css') }}" />
<link rel="stylesheet" href="{{ asset('css/news/single-page.css') }}" />
<link rel="stylesheet" href="{{ asset('css/news/style.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

<script src="https://unpkg.com/@yaireo/tagify"></script>
<script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
<link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>

<style>
    .btn {
        border-radius: 10px;
    }
</style>
@endsection
@section('content')
<div class="container-fluid news-feed">
   <div class="row justify-content-center">
       <div class="col-lg-8 col-12">
           
            <div class="row w-100 mt-3 m-0" id="posts-box">
            </div>
       </div>
   </div>
</div>
@extends('news-feed.slider')
@section('body')
@endsection
<x-modal id="modal-delete-post" centered="true" title="Delete this Post?">
    <x-slot name="body">
        <form action="{{ route('news.delete') }}" method="POST">
            @method('DELETE')
            @csrf
            <input type="hidden" name="id" value="{{ $data['row']->id }}">
            <h3 class="gothicregular">Are you sure you want to delete this?</h3>
    </x-slot>
    <x-slot name="footer">
        <button type="button" class="btn" onclick="deletePost()">Close</button>
        <button type="submit">Delete</button>
    </x-slot>
    </form>
</x-modal>


@section('js')
<script> var url = "{{ route('agent_list') }}"; </script>
<script src="{{ asset('js/news-feed/main.js') }}"></script>
<script>
    var nrPosts = 8;
    var nrComments = 8;
    var nrOfAllPosts;
    var my_id = '{{ auth()->id() }}';
    var item = JSON.parse(JSON.stringify(<?php echo @json_encode($data); ?>));

    getPost();

    $(document).ready(function() {
        var input = document.querySelector('input.tag-input')
        const whitelist = [];
        $.ajax({
            url: url,
            type: "get",
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            headers: {
                "X-CSRF-Token": $('[name="_token"]').val(),
            },
            success: function (output) {
                output.data.forEach(el => {
                    const row = {
                        id: el.id,
                        value: el.profile.fullname
                    };
                    whitelist.push(row)
                });
            },
        });
        var tagify = new Tagify(input, {
            whitelist: whitelist.map(function (item) {
                return typeof item == 'string' ? { value: item } : item
            }),
            enforceWhitelist: true,
            tagTextProp: 'value',
            dropdown: {
                enabled: 1,
                position: 'value',
                mapValueTo: 'value',
                highlightFirst: true,
                searchKeys: ['value'],
            },
        })
        tagify.on('input', onInput)
        tagify.on('add', addTag);
        tagify.on('remove', removeTag);

    
        function onInput(e) {
            tagify.dropdown.show.call(tagify, e.detail.value)
        }
        function addTag(e) {
            $('.box-tags').append('<input type="hidden" name="tags[]" value="' + e.detail.data.id + '">')
        }
        function removeTag(e) {
            $('.box-tags').find('input[value="' + e.detail.data.id + '"]').remove();
        }
    })

    function openModal() {
        $('#slider').modal('toggle');
    }

    function toggleTagInput() {
        $('.tag-input').toggleClass('d-none')
    }
    var tags = [];

    function loadMoreComments(e, post_id) {
        var nrCm = parseInt($(e).parents('.row-box').find('.nrCm').val()) + 4;

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
                    html += '<div id="textbox" class="row mb-2 p-0 m-0 w-100">' +
                        '<div class="col-12 single-comment comment-single d-flex align-items-start p-0 m-0">' +
                            '<div class="single-comment-profile">' +
                                '<img src="' + comment.user.avatar + '" alt="">' +
                            '</div>' +
                            '<div class="w-100">' +
                                '<div class="d-flex align-items-center">' +
                                    '<div contenteditable="false" class="single-comment-body p-3 m-0">'+ comment.body +'</div>';
                                        html += '<div class="single-comment-delete">' +
                                            '<button class="btn btn-link text-danger" type="button" onclick="deleteComment(this, '+ comment.id +')">&times;</button>' +
                                        '</div>';
                                html += '</div>' +
                                '<div class="replies-box">' +
                                    '<div class="row p-0 m-0 reply-box">';
                                        comment.replies.forEach(reply => {
                                            html += '<div class="col-12 single-comment single-reply d-flex align-items-start mt-2 p-0">' +
                                                '<div class="single-comment-profile">' +
                                                    '<img src="' + reply.user.avatar + '" alt="">' +
                                                '</div>' +
                                                '<div>' +
                                                    '<div class="d-flex align-items-center">' +
                                                        '<div contenteditable="false" class="single-comment-body p-3 m-0">' + reply.body +
                                                        '</div>';
                                                            html += '<div class="single-comment-delete">' +
                                                                '<button class="btn btn-link text-danger" type="button" onclick="deleteReply(this, '+ reply.id +')">&times;</button>' +
                                                            '</div>';
                                                    html += '</div>' +
                                                        '<div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">' +
                                                    '</div>' +
                                                '</div>' +
                                                '</div>' +
                                            '</div>';
                                        });
                                    html += '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>';
                });

               $(e).parents('.row-box').find('.comments-box').html(html)
               replaceTag()
            },
        });

        $(e).parents('.row-box').find('.nrCm').val(nrCm) 
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

    function deletePost() {
        $('#modal-delete-post').modal('toggle');
    }
    function replaceTag() {
        $('.row-tag').each( function() {
            try {
                var html = JSON.parse($(this).html())
                
                var ahref = '&nbsp;<a href="/agent-profile/'+ html.id +'">'+ html.value +'</a>'
                $(this).html(ahref)
            } catch (e) {
            }
        })
    }

    function getPost() {
        var postsbox = $('#posts-box');
        var html = '';
            html += `<div class="col-12 box-post p-0 row m-0 mb-3">
            <form method="POST" action="{{ route("news.update") }}" class="row p-0 w-100 m-0">@method("PUT") @csrf
                <input type="hidden" name="id" value="` + item.row.id + `">
                <div class="row p-0 m-0 w-100 col-12">
                    <div class="box-details col-lg-12 col-md-12 col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <p id="author" class="gothicbold p-0 m-0">` + item.row.agent.profile.fullname + `</p>
                            <div class="d-flex align-items-center py-2">
                                <button type="button" class="btn btn-danger mr-2" onclick="deletePost(this, `+ item.row.id +`)">Delete</button>
                                <button type="submit" class="btn btn-luxe">Update</button>
                            </div>
                        </div>
                        <textarea class="form-control w-100" rows="7" name="body">` + item.row.body + `</textarea>
                        <div class="box-tags d-flex justify-content-start position-relative mt-3">`;
                            if(item.row.tag.length) {
                                item.row.tag.forEach(tag => {
                                    html += `<p class="p-1 rounded m-0 position-relative mr-1 single-tag">` + tag.agent.profile.fullname +
                                    `<span id="remove-span" onclick="removeTag(this, `+ tag.id +`)">&times;</span></p>`;
                                });
                            }
                        html += `</div>
                    </div>
                    <div class="box-image col-lg-12 col-md-12 col-12 p-0">
                            <div class="d-flex m-2" style="height: 43px">
                                <input style="height: 43px" class="tag-input form-control" placeholder="Tag someone">
                            </div>
                            <div class="box-edit-images d-flex">`;
                                var numOfImages = [];
                                const allowedExtension = '{{ config('allowed-extension-file.media.images') }}';
                                if(item.row.image.length) {
                                    item.row.image.forEach(img => {
                                        html += `<div class="box-single-image">`;
                                        if(allowedExtension.search(img.type) !== -1) {
                                            html += `<img src="`+ img.file_url +`" alt="">`;
                                        } else {
                                            html += `<p>File `+ img.type +`</p>`;
                                        }
                                        html += `<span id="remove-span" onclick="removeFile(this, `+ item.row.id +`, `+ img.id +`)">&times;</span></div>`;
                                    });
                                }
                            html += `</div>
                            <div><button class="btn btn-link" type="button" onclick="toggleInputFile()">Add file</button>
                            <input type="file" id="file" onchange="onFileChanged(this)" style="display: none;"></div>
                    </div>
                </div>
                <div class="p-0 m-0 w-100 col-12">
                    <div class="d-flex align-items-center p-2 pt-3" style="gap: 0px 20px;">
                        <p class="p-0 m-0" id="like-count"><i class="fa-solid fa-heart"></i> Likes: <span>` + item.row.like.length + `</span></p>
                        <p class="p-0 m-0" id="comment-count"><i class="fa-solid fa-comment"></i> Comments: <span>` + item.row.comment.length + `</span></p>
                    </div>
                </div>
                <div class="p-0 m-0 w-100 col-12 row-box">
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
                                                            </div>
                                                        </div>
                                                    </div>`;
                                                    (reply.replies.length) ? html += `<div class="vertical"></div>` : html += ``;
                                                    html += `<div class="row p-0 m-0 reply-reply-box reply-reply-box-`+ reply.id +` pl-3 w-100">`;
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
                                                                    </div>
                                                                </div>
                                                            </div>`;
                                                        });
                                                    html += `</div>
                                                </div>`;
                                            });
                                        html += `</div>
                                        <input type="hidden" class="nrReply" value="6">
                                        <button type="button" class="btn btn-link `+ ( (comment.replies.length && comment.replies.length > 6) ? ``: `d-none`) +`" id="btnLoadMoreReplies" onclick="loadMoreReplies(this, `+ comment.id +`)">Load more replies</button>
                                    </div>
                                </div>`;
                            });
                        }
                    html += `</div>
                    <input type="hidden" class="nrCm" value="8">
                    <button type="button" class="btn btn-link `+ ( (item.comments.length && item.row.comment.length > 8) ? ``: `d-none`) +`" id="btnLoadMoreComments" onclick="loadMoreComments(this, `+ item.row.id +`)">Load more comments</button>
                </div>
                </form>
            </div>`;
        postsbox.html(html)
        tagifyFunc();
        replaceTag();
    }
    function removeFile(e, post_id, img_id) {
        var data = {
            'id': post_id,
            'img_id': img_id
        }
        $.ajax({
            url: "{{ route('news.delete.file') }}",
            data: data,
            type: "delete",
            headers: {
                "X-CSRF-Token": $('[name="_token"]').val(),
            },
            success: function (output) {
                if(output) {
                    $(e).parents('.box-single-image').remove();
                }
            },
        });
    }
    function toggleInputFile() {
        $('#file').click();
    }
    function onFileChanged(e) {
        const [file] = e.files 
        if (file) {
            var data = new FormData();
            data.append('id', item.row.id);
            data.append('file', file);
           
            $.ajax({
                url: "{{ route('news.create.file') }}",
                data: data,
                processData: false,
                contentType: false,
                type: "POST",
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    if(output) {
                        var html = '<div class="box-single-image">';
                        if(isImage(file)) {
                            html += '<img src="'+ URL.createObjectURL(file) +'" alt="">';
                        } else {
                            html += '<p>File</p>';
                        }
                        html += '<span id="remove-span" onclick="removeFile(this, '+ output.post.id +', '+ output.image[0].id +')">&times;</span></div>';
                        $('.box-edit-images').append(html);
                    }
                },
            });
            
        }
    }
    function isImage(file){
        return file['type'].split('/')[0] == 'image';
    }
    function removeTag(e, tag_id) {
        $(e).parents('.single-tag').remove();
        $('.box-tags').append('<input type="hidden" name="remove_tags[]" value="' + tag_id + '">');
    }
</script>
@endsection
@endsection