@extends('layouts.app')

@section('css')
<style>
    .singleproject{
        display: flex;
        justify-content: center;
        padding-top: 60px;
    }
    .singleproject__item{
        width: 942px;
    }
    .singleproject__item-img{
        width: 100%;
        margin-bottom: 30px;
    }
    .singleproject__item-title {
        padding-bottom: 30px;
        border-bottom: 1px solid #E6E6E6;
    }
    .singleproject__item-title h2{
        width: 100%;
        margin-bottom: 30px;
        font-size: 26px;
        font-family: 'gothicbold';
        color: #262626;
    }
    .singleproject__item-title-logo{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .singleproject__item-title-logo-name{
        display: flex;
        align-items: center;
        gap: 10px;
        
    }
    .singleproject__item-title-logo-name p {
        font-family: 'gothicbold';
        font-size: 16px;
    }
    .singleproject__reviews{
        padding: 30px 0px;
        border-bottom: 1px solid #E6E6E6;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .singleproject__reviews-star{
        display: flex;
        gap: 10px;
        font-size: 16px;
        font-family: 'gothicregular';
    }
    .singleproject__reviews-title h2{
        font-size: 20px;
        font-family: 'gothicbold';
        color: #262626;
    }
    .singleproject__reviews-button button{
        padding: 14px 30px;
        background: #262626;
        color: white;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-family: 'gothicregular';
    }
    .singleproject__comments{
        padding-top: 30px;
        margin-bottom: 30px;
    }
    .singleproject__comments-profile{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .singleproject__comment-profile-item{
        display: flex;
        gap: 10px;
        align-items: center;
        font-size: 16px;
        font-family: 'gothicbold';
    }
    .singleproject__comment-profile-item-star{
        display: flex;
        gap: 10px;
    }
    .singleproject__comments-profile{
        margin-bottom: 10px;
    }
    .singleprojects__comments-cm{
        font-size: 16px;
        font-family: 'gothicregular';
        color: #262626;
    }
    .time {
        font-size: 16px;
        font-family: 'gothicregular';
        color: #262626;
    }
</style>
@endsection
@section('content')
<div class="singleproject" >
        <div class="singleproject__item">
            <div class="singleproject__item-img">
                <iframe src="https://player.vimeo.com/video/{{ $video->video_id }}" width="100%" height="527" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="singleproject__item-title">
                <h2>{{ $video->vimeo_details['name'] }}</h2>
                <div class="singleproject__item-title-logo">
                    <p class="time">{{ $video->vimeo_details['created_at'] }}</p>
                    <div class="singleproject__item-title-logo-name d-flex align-items-center">
                        <img src="/images/videos/logo.png" alt="">
                        <p class="p-0 m-0">LUXE Properties</p>
                    </div>
                </div>
            </div>
            <div class="singleproject__reviews">
                <div class="singleproject__reviews-title">
                    <h2>Reviews</h2>
                </div>
                <div class="singleproject__reviews-star">
                    <p>5.0</p>
                    <p>(2 Reviews)</p>
                </div>
                <div class="singleproject__reviews-button">
                    <button>Add a Review</button>
                </div>
            </div>
            <div class="singleproject__comments">
                <div class="singleproject__comments-profile">
                    <div class="singleproject__comment-profile-item">
                        <img src="/images/videos/profile.png" alt="">
                        <p class="p-0 m-0">Olivia Harper</p>
                    </div>
                    <div class="singleproject__comment-profile-item-star">
                        <p>5.0</p>
                    </div>
                </div>
                <div class="singleprojects__comments-cm">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                </div>
            </div>
            <div class="singleproject__comments">
                <div class="singleproject__comments-profile">
                    <div class="singleproject__comment-profile-item">
                        <img src="/images/videos/profile.png" alt="">
                        <p class="p-0 m-0">Olivia Harper</p>
                    </div>
                    <div class="singleproject__comment-profile-item-star">
                        <p>5.0</p>
                    </div>
                </div>
                <div class="singleprojects__comments-cm">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                </div>
            </div>

        </div>
    </div>
@endsection