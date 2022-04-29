@extends('layouts.app', ['active' => 'Tools&TrainingVideos'])
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<style>
    .singleproject {
        display: flex;
        justify-content: center;
    }

    .singleproject__item {}

    .singleproject__item-img {
        width: 100%;
        margin-bottom: 30px;
    }

    .singleproject__item-title {
        padding-bottom: 30px;
        border-bottom: 1px solid #E6E6E6;
    }

    .singleproject__item-title h2 {
        width: 100%;
        margin-bottom: 30px;
        font-size: 26px;
        font-family: 'gothicbold';
        color: #262626;
    }

    .singleproject__item-title-logo {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .singleproject__item-title-logo-name {
        display: flex;
        align-items: center;
        gap: 10px;

    }

    .singleproject__item-title-logo-name p {
        font-family: 'gothicbold';
        font-size: 16px;
    }

    .singleproject__reviews {
        padding: 30px 0px;
        border-bottom: 1px solid #E6E6E6;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .singleproject__reviews-star {
        display: flex;
        gap: 10px;
        font-size: 16px;
        font-family: 'gothicregular';
    }

    .singleproject__reviews-title h2 {
        font-size: 24px;
        font-family: 'gothicbold';
        color: #262626;
    }

    .singleproject__reviews-button button {
        padding: 14px 30px;
        background: #262626;
        color: white;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-family: 'gothicregular';
        cursor: pointer;
    }

    .singleproject__comments {
        padding-top: 30px;
    }

    .singleproject__comments-profile {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .singleproject__comment-profile-item {
        display: flex;
        gap: 10px;
        align-items: center;
        font-size: 16px;
        font-family: 'gothicbold';
    }

    .singleproject__comment-profile-item img {
        width: 43px;
        height: 43px;
        border-radius: 50%;
    }

    .singleproject__comment-profile-item-star {
        display: flex;
        gap: 10px;
        font-family: 'gothicregular';
    }

    .singleproject__comments-profile {
        margin-bottom: 10px;
    }

    .singleprojects__comments-cm {
        font-size: 16px;
        font-family: 'gothicregular';
        color: #262626;
    }

    .time {
        font-size: 16px;
        font-family: 'gothicregular';
        color: #262626;
    }

    .star-box {
        gap: 10px;
    }

    .star-box button {
        background: none;
        border: none;
        padding: 0px;
        margin: 0px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    label {
        font-family: 'gothicregular';
    }

    iframe {
        height: 527px;
    }

    @media (max-width: 576px) {
        iframe {
            height: 200px !important;
        }

        .singleproject__item-title-logo-name,
        .singleproject__item-title-logo-name div:first-child {
            padding-left: 0px !important;
        }
    }

    @media (min-width: 577px) and (max-width: 992px) {
        iframe {
            height: 411px;
        }
    }

    .btn-luxe {
        border-radius: 10px !important;
    }

    .regular {
        font-family: 'gothicregular';
    }
    .bold {
        font-family: 'gothicbold';
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="singleproject row p-0 m-0">
        <div class="singleproject__item w-100">
            <div class="row p-0 m-0">
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="singleproject__item-title pb-0" style="border: none;">
                        <h2 class="m-0 p-0">{{ $video->vimeo_details['name'] }}</h2>
                    </div>
                    <div class="singleproject__item-img">
                        <iframe src="{{ $video->vimeo_details['embed_url'] }}" width="100%" frameborder="0"
                            allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    
                </div>
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="singleproject__item-title" style="border-bottom: none">
                        @if($video->files->count())
                            <div class="w-100 mb-2">
                                <a href="{{ $video->files->first()->file_url }}" download=""
                                    class="btn btn-luxe mt-2">Download Presentation</a>
                            </div>
                        @endif

                        <div class="w-100 d-flex justify-content-between mt-2">
                            <p class="bold">Speaker: {{ $video->presenter_name}}</p>
                            <p class="time">{{ $video->date}}</p>
                        </div>
                        <p class="time">{{ $video->vimeo_details['description'] }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, pariatur? Hic eveniet iure, iusto consequatur, quam non nemo dolores necessitatibus eligendi voluptates nam vero perspiciatis sit? Dolor facere quod obcaecati?</p>
                        <div class="singleproject__item-title-logo row p-0 m-0">
                            <p class=" time m-0 p-0">{{ $video->vimeo_details['created_at'] }}</p>
                            <div class="d-flex align-items-center col-3 col-lg-4 p-0">
                                <img src="/images/videos/logo.png" class="mr-2" alt="">
                                <p class="p-0 m-0 bold">LUXE Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row p-0 m-0">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="singleproject__reviews row p-0 m-0 py-4 w-100 align-items-center">
                        <div class="singleproject__reviews-title">
                            <h2>Reviews</h2>
                        </div>
                        <div class="singleproject__reviews-star">
                            <p class="m-0 p-0 d-flex align-items-center"><b>{{ $video->reviews->avg('stars') }}</b></p>
                            <p class="m-0 p-0 d-flex align-items-center">
                                @php $rating = $video->reviews->avg('stars'); @endphp
                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1em">
                                    <i class="far fa-star fa-stack-1x"></i>
        
                                    @if($rating > 0)
                                    @if($rating > 0.5)
                                    <i class="fas fa-star fa-stack-1x"></i>
                                    @else
                                    <i class="fas fa-star-half fa-stack-1x"></i>
                                    @endif
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </p>
                            <p class="m-0 p-0 d-flex align-items-center">({{ $video->reviews->count() }} Reviews)</p>
                        </div>
                        <div class="singleproject__reviews-button">
                            <button type="button" onclick="toggleForm()">Add a Review</button>
                        </div>
                    </div>
                    <div class="w-100 my-4 review-box d-none">
                        <form action="{{ route('video.create_review') }}" method="POST" class="row p-0 m-0 col-md-12 col-12">
                            @csrf
                            <input type="hidden" name="video_id" value="{{ $video->id }}">
                            <input type="hidden" name="stars" value="0" id="stars-input">
                            <div class="form-group col-12 p-0">
                                <label for="">Rate</label>
                                <div class="input-group">
                                    <div class="d-flex justify-content-center star-box">
                                        <button onclick="changeStarNum(1)" type="button">
                                            <img src="/images/videos/star-not-filled-icon.svg" id="star-nfilled-1"
                                                class="star-nfilled d-flex" alt="">
                                            <img src="/images/videos/star-icon.svg" id="star-1" class="star-filled d-none"
                                                alt="">
                                        </button>
                                        <button onclick="changeStarNum(2)" type="button">
                                            <img src="/images/videos/star-not-filled-icon.svg" id="star-nfilled-2"
                                                class="star-nfilled d-flex" alt="">
                                            <img src="/images/videos/star-icon.svg" id="star-2" class="star-filled d-none"
                                                alt="">
                                        </button>
                                        <button onclick="changeStarNum(3)" type="button">
                                            <img src="/images/videos/star-not-filled-icon.svg" id="star-nfilled-3"
                                                class="star-nfilled d-flex" alt="">
                                            <img src="/images/videos/star-icon.svg" id="star-3" class="star-filled d-none"
                                                alt="">
                                        </button>
                                        <button onclick="changeStarNum(4)" type="button">
                                            <img src="/images/videos/star-not-filled-icon.svg" id="star-nfilled-4"
                                                class="star-nfilled d-flex" alt="">
                                            <img src="/images/videos/star-icon.svg" id="star-4" class="star-filled d-none"
                                                alt="">
                                        </button>
                                        <button onclick="changeStarNum(5)" type="button">
                                            <img src="/images/videos/star-not-filled-icon.svg" id="star-nfilled-5"
                                                class="star-nfilled d-flex" alt="">
                                            <img src="/images/videos/star-icon.svg" id="star-5" class="star-filled d-none"
                                                alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12 mt-4 p-0">
                                <label for="">Text</label>
                                <div class="input-group">
                                    <textarea name="comment" class="form-control" id="" cols="30" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-12 p-0">
                                <button type="submit" class="btn btn-luxe px-3 py-2">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="mb-5">
                        @forelse($reviews as $review)
                        <div class="singleproject__comments">
                            <div class="singleproject__comments-profile">
                                <div class="singleproject__comment-profile-item">
                                    <img src="{{ $review->user->avatar }}" alt="">
                                    <p class="p-0 m-0">{{ $review->user->profile->fullname }}</p>
                                </div>
                                <div class="singleproject__comment-profile-item-star d-flex align-items-center">
                                    <p class="p-0 m-0"><b>{{ $review->stars }}</b></p>
                                    <p class="p-0 m-0 d-flex align-items-center">
                                        @for($i = 0; $i < $review->stars; $i++)
                                            <img src="/images/videos/star-icon.svg" alt="">
                                            @endfor
                                    </p>
                                </div>
                            </div>
                            <div class="singleprojects__comments-cm">
                                <p>{{ $review->comment }}</p>
                            </div>
                        </div>
                        @empty
                        <div class="d-flex w-100 justify-content-center py-5 regular">
                            No reviews found.
                        </div>
                        @endforelse
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="singleproject__reviews row p-0 m-0 py-4 w-100 align-items-center">
                        <div class="singleproject__reviews-title">
                            <h2 class="p-0 m-0">Comments</h2>
                        </div>
        
                        <div class="singleproject__reviews-button">
                            <button type="button" onclick="toggleFormComment()">Add a Comment</button>
                        </div>
                    </div>
                    <div class="w-100 my-4 comment-box d-none">
                        <form action="{{ route('video.create_comment') }}" method="POST" class="row p-0 m-0 col-md-12 col-12">
                            @csrf
                            <input type="hidden" name="video_id" value="{{ $video->id }}">
                            <div class="form-group col-12 mt-4 p-0">
                                <label for="">Comment</label>
                                <div class="input-group">
                                    <textarea name="comment" class="form-control" id="" cols="30" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-12 p-0">
                                <button type="submit" class="btn btn-luxe px-3 py-2">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="mb-5">
                        @forelse($comments as $comment)
                        <div class="singleproject__comments">
                            <div class="singleproject__comments-profile">
                                <div class="singleproject__comment-profile-item">
                                    <img src="{{ $comment->user->avatar }}" alt="">
                                    <p class="p-0 m-0">{{ $comment->user->profile->fullname }}</p>
                                </div>
                            </div>
                            <div class="singleprojects__comments-cm">
                                <p>{{ $comment->comment }}</p>
                            </div>
                        </div>
                        @empty
                        <div class="d-flex w-100 justify-content-center py-5 regular">
                            No comments found.
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleForm() {
        $('.review-box').toggleClass('d-none')
        $('.review-box').toggleClass('d-flex')
    }
    function toggleFormComment() {
        $('.comment-box').toggleClass('d-none')
        $('.comment-box').toggleClass('d-flex')
    }
    function changeStarNum(num) {
        $('#stars-input').val(num)
        $('#star-1').removeClass('d-flex')
        $('#star-1').addClass('d-none')
        $('#star-2').removeClass('d-flex')
        $('#star-2').addClass('d-none')
        $('#star-3').removeClass('d-flex')
        $('#star-3').addClass('d-none')
        $('#star-4').removeClass('d-flex')
        $('#star-4').addClass('d-none')
        $('#star-5').removeClass('d-flex')
        $('#star-5').addClass('d-none')

        for(let i = 1; i <= num; i++) {
            $('#star-nfilled-' + i).removeClass('d-flex')
            $('#star-nfilled-' + i).addClass('d-none')
            $('#star-' + i).toggleClass('d-none')
            $('#star-' + i).toggleClass('d-flex')
        }

        for(let i = num + 1; i <= 5; i++) {
            $('#star-' + i).addClass('d-none')
            $('#star-' + i).removeClass('d-flex')
            $('#star-nfilled-' + i).addClass('d-flex')
            $('#star-nfilled-' + i).removeClass('d-none')
        }
    }
</script>
@endsection