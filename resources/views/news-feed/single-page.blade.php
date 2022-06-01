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
            <div class="row w-100 mt-3 m-0" id="posts-box"></div>
       </div>
   </div>
</div>


@section('js')
<script> var url = "{{ route('agent_list') }}"; </script>
<script src="{{ asset('js/news-feed/main.js') }}"></script>
<script>
    var nrPosts = 8;
    var nrComments = 8;
    var nrOfAllPosts;
    var my_id = '{{ auth()->id() }}';
    getPost();

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
        var body = $(e).parents('.box-post').find('#text-area').val();

        if(!body) {
            return;
        }

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
                var html = '<div id="textbox" class="row mb-2 p-0 m-0">' +
                            '<div class="col-12 single-comment comment-single d-flex align-items-start">' +
                                '<div class="single-comment-profile">' +
                                    '<img src="{{ auth()->user()->avatar }}" alt="">' +
                                '</div>' +
                            '<div>' +
                            '<div class="d-flex align-items-center">' +
                                '<p class="single-comment-body m-0 p-3"> '+ body +'</p>' +
                                '<div class="single-comment-delete">' +
                                    '<button class="btn btn-link text-danger" type="button" onclick="deleteComment(this, '+ output.id +')"><i class="fa-solid fa-trash"></i></button>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">' +
                                '<button class="btn btn-link text-dark" type="button" onclick="like(this, 1, '+ output.id +')"><i class="fa-solid fa-heart"></i> Like</button>' +
                                '<button class="btn btn-link m-0 text-dark" onclick="toggleReplyInput(this)"><i class="fa-solid fa-comment"></i> Reply</button>' +
                            '</div>' +
                            '<div style="width: 400px !important" class="replies-box">' +
                                '<div class="row p-0 m-0 reply-box">'+
                                   
                                '</div>' +
                                '<div class="d-none w-100" id="comment-box" style="height:70px !important;">' +
                                    '<div class="form-group p-2 d-flex align-items-start" style="gap: 10px">' +
                                        '<textarea style="height: 50px" class="form-control" id="text-area" placeholder="Write a Comment" name="mix">' +
                                        '</textarea>' +
                                        '<button type="button" class="btn-luxe" onclick="reply(this, '+ post_id +', ' + output.id + ')">Reply</button>' +
                                    '</div>' +
                                '</div>' +
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

        if(!body) {
            return;
        }
        
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
                var html = '<div class="col-12 single-comment single-reply d-flex align-items-start mt-2"> ' +
                    '<div class="single-comment-profile"> ' +
                        '<img src="{{ auth()->user()->avatar }}" alt=""> ' +
                    '</div> ' +
                '<div> ' +
                '<div class="d-flex align-items-center">' +
                    '<p class="single-comment-body m-0 p-3">'+ body +'</p>' +
                    '<div class="single-comment-delete">' +
                        '<button class="btn btn-link text-danger" type="button" onclick="deleteReply(this, '+ output.id +')"><i class="fa-solid fa-trash"></i></button>' +
                    '</div>' +
                '</div>' +
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
    function getPost() {
        var item = JSON.parse(JSON.stringify(<?php echo json_encode($row['data']); ?>));
        var postsbox = $('#posts-box');
        var html = '';
        html += '<div class="col-12 box-post p-0 row m-0 mb-3">' +
            '<div class="row p-0 m-0 w-100 col-12">' +
                '<div class="box-image col-lg-4 col-md-5 col-12 p-0">' +
                    '<div class="box-image-preview">';
                        if(item.row.image.length) {
                            html += '<img src="'+ item.row.image[0].file_url +'" alt="">';

                            if(item.row.image.length > 1) {
                                html += '<div class="image-count">+' + parseInt(--item.row.image.length) + '</div>';
                            }
                        }
                    html += '</div>' +
                '</div>' +
                '<div class="box-details col-lg-8 col-md-7 col-12">' +
                    '<div class="d-flex justify-content-between align-items-center">' +
                        '<p id="author" class="gothicbold p-0 m-0">' + item.row.agent.profile.fullname + '</p>' +
                        '<div class="d-flex align-items-center" style="gap:5px">'+
                            '<p id="date" class="p-0 m-0">' +  moment(item.row.created_at).fromNow() + '</p>';
                            if(item.row.agent.id == my_id) {
                                html += '<div class="btn-group">'+
                                        '<button type="button" class="btn btn-link p-0 m-0" id="delete-post" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                                        '<i class="fa-solid fa-ellipsis"></i></button>'+
                                        '<div class="dropdown-menu dropdown-menu-right">'+
                                            '<button class="dropdown-item text-danger" onclick="deletePost(this, '+ item.row.id +')" type="button"><i class="fa-solid fa-trash"></i> Delete</button>'+
                                        '</div>'+
                                    '</div>';
                            }
                        html += '</div>'+
                    '</div>' +
                    '<p>' + (item.row.body.substr(0, 240) + '...') + '</p>' +
                    '<div class="box-tags d-flex justify-content-start">';
                        if(item.row.tag.length) {
                            item.row.tag.forEach(tag => {
                                html += '<p class="p-1 rounded">' + tag.agent.profile.fullname + '</p>';
                            });
                        }
                    html += '</div>' +
                    '<a href="#"><i class="fa-solid fa-angle-right"></i> Read More</a>' +
                '</div>' +
            '</div>' +
            '<div class="p-0 m-0 w-100 col-12">' +
                
                '<div class="d-flex align-items-center p-2 pt-3" style="gap: 0px 20px;">' +
                    '<p class="p-0 m-0" id="like-count"><i class="fa-solid fa-heart"></i> Likes: <span>' + item.row.like.length + '</span></p>' +
                    '<p class="p-0 m-0" id="comment-count"><i class="fa-solid fa-comment"></i> Comments: <span>' + item.row.comment.length + '</span></p>' +
                '</div>' +
                '<div class="d-flex justify-content-center align-items-center p-2" style="gap: 5px;">' +
                    '<button class="btn btn-light btn-block '+ (item.row.like.filter(x => x.user_id == my_id).length ? 'liked': '') +'" type="button" onclick="like(this, 2, ' + item.row.id +')"><i class="fa-solid fa-heart"></i> Like</button>' +
                    '<button class="btn btn-light btn-block m-0" onclick="toggleCommentInput(this)"><i class="fa-solid fa-comment"></i> Comment</button>' +
                '</div>' +
            '</div>' +
            '<div class="p-0 m-0 w-100 col-12 row-box">' +
                '<div class="d-none w-100" id="comment-box" style="height:70px !important;">' +
                    '<div class="form-group p-2 d-flex align-items-start" style="gap: 10px">' +
                        '<textarea class="form-control" id="text-area" placeholder="Write a Comment" name="mix">' +
                        '</textarea>' +
                        '<button type="button" class="btn-luxe" onclick="comment(this, ' + item.row.id + ')">Comment</button>' +
                    '</div>' +
                '</div>' +
                '<div class="comments-box w-100 p-3">';
                    if(item.comments.length) {
                        item.comments.forEach(comment => {
                            html += '<div id="textbox" class="row mb-2 p-0 m-0">' +
                                '<div class="col-12 single-comment comment-single d-flex align-items-start">' +
                                    '<div class="single-comment-profile">' +
                                        '<img src="' + comment.user.avatar + '" alt="">' +
                                    '</div>' +
                                    '<div>' +
                                        '<div class="d-flex align-items-center">' +
                                            '<p class="single-comment-body m-0 p-3">'+ comment.body +'</p>';
                                            if(comment.user.id == my_id) {
                                                html += '<div class="single-comment-delete">' +
                                                    '<button class="btn btn-link text-danger" type="button" onclick="deleteComment(this, '+ comment.id +')"><i class="fa-solid fa-trash"></i></button>' +
                                                '</div>';
                                            }
                                        html += '</div>' +
                                        '<div class="col-12 d-flex align-items-center p-0" style="gap: 5px;">' +
                                            '<button class="btn btn-link text-dark '+ (comment.like.filter(x => x.user_id == my_id).length ? 'liked': '') +'" type="button" onclick="like(this, 1, '+ comment.id +')"><i class="fa-solid fa-heart"></i> Like</button>' +
                                            '<button class="btn btn-link m-0 text-dark" onclick="toggleReplyInput(this)"><i class="fa-solid fa-comment"></i> Reply</button>' +
                                        '</div>' +
                                        '<div style="width: 400px !important" class="replies-box">' +
                                            '<div class="row p-0 m-0 reply-box">';
                                                comment.replies.forEach(reply => {
                                                    html += '<div class="col-12 single-comment single-reply d-flex align-items-start mt-2">' +
                                                        '<div class="single-comment-profile">' +
                                                            '<img src="' + reply.user.avatar + '" alt="">' +
                                                        '</div>' +
                                                        '<div>' +
                                                            '<div class="d-flex align-items-center">' +
                                                                '<p class="single-comment-body m-0 p-3">'+ reply.body +'</p>';
                                                                if(reply.user.id == my_id) {
                                                                    html += '<div class="single-comment-delete">' +
                                                                        '<button class="btn btn-link text-danger" type="button" onclick="deleteReply(this, '+ reply.id +')"><i class="fa-solid fa-trash"></i></button>' +
                                                                    '</div>';
                                                                }
                                                            html += '</div>' +
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
                                                    '<button type="button" class="btn-luxe" onclick="reply(this, '+ item.row.id +', ' + comment.id + ')">Reply</button>' +
                                                '</div>' +
                                            '</div>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div>';
                        });
                    }
                html += '</div>' +
                '<input type="hidden" class="nrCm" value="4">' +
                '<button type="button" class="btn btn-link '+ ( !item.comments.length ? 'd-none': '') +'" id="btnLoadMoreComments" onclick="loadMoreComments(this, '+ item.row.id +', ' + item.nrComments + ')">Load More</button>' +
            '</div>' +
        '</div>';
        postsbox.html(html)
    }

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
                    html += '<div id="textbox" class="row mb-2 p-0 m-0">' +
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
                                            '<button type="button" class="btn-luxe" onclick="reply(this, '+ post_id +', ' + comment.id + ')">Reply</button>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>';
                });

               $(e).parents('.row-box').find('.comments-box').html(html)
            },
        });

        $(e).parents('.row-box').find('.nrCm').val(nrCm) 
    }

    function deleteReply(e, reply_id) {
        var data = {
            'id': reply_id
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
                    $(e).parents('.single-reply').remove();
                }
            },
        });
    }
    function deleteComment(e, comment_id) {
        var data = {
            'id': comment_id
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
                    $(e).parents('.comment-single').remove();
                }
            },
        });
    }

    function deletePost(e, post_id) {
        var data = {
            'id': post_id
        };

        $.ajax({
            url: "{{ route('news.delete') }}",
            data: data,
            type: "delete",
            headers: {
                "X-CSRF-Token": $('[name="_token"]').val(),
            },
            success: function (output) {
                console.log(output)
                if(output) {
                    $(e).parents('.box-post').remove();
                }
            },
        });
    }
</script>
@endsection
@endsection