@extends('layouts.app')
@section('content')
<style>
    .link-box:hover {
        transition: 0.5s;
        box-shadow: 0 4rem 4rem rgb(0 0 0 / 18%);
    }

    .link-box {
        transition: 0.5s;
        overflow: hidden;
        text-align: center;
        background: white;
        border-radius: 10px;
        box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%);
        margin-bottom: 20px;
        min-height: 250px;
    }

    .link-box img {
        object-fit: cover;
        width: 100%;
        max-height: 202px;
        object-position: top;
    }

    .link-box .title {
        padding-top: 8px;
        padding-bottom: 8px;
        font-size: 1.05rem;
        background: #FFCF40;
    }

    @media (min-width: 992px) {
        .col-lg-3 {
            flex: 0 0 33%;
            max-width: 33%;
        }
    }
</style>
<div class="container">
    <div class="row my-4">
        <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">Access Your LUXE Email</p>
                <a href="http://portal.office.com/" class="image-link" target="_blank">
                    <img src="/images/links/img1.png" alt="" class="image">
                </a>
            </div>
        </div>
        {{-- <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">Accountability Call - Guest Speakers</p>
                <a href="https://vimeo.com/showcase/8538079" class="image-link" target="_blank">
                    <img src="/images/links/img2.png" alt="" class="image">
                </a>
            </div>
        </div> --}}
        <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">Broker Sumo - To Upload Files</p>
                <a href="http://www.brokersumo.com/" class="image-link" target="_blank">
                    <img src="/images/links/img3.png" alt="" class="image">
                </a>
            </div>
        </div>
        {{-- <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">COVID 19 Zoom Training Videos</p>
                <a href="https://vimeo.com/showcase/6973560" class="image-link" target="_blank">
                    <img src="/images/links/img2.png" alt="" class="image">
                </a>
            </div>
        </div> --}}
        <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">CINC Agent - Leads CRM</p>
                <a href="http://www.allmiamihousesforsale.com/" class="image-link" target="_blank">
                    <img src="/images/links/img4.png" alt="" class="image">
                </a>
            </div>
        </div>
        {{-- <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">Password: Luxeknows123</p>
                <a href="https://vimeo.com/album/5622641" class="image-link" target="_blank">
                    <img src="/images/links/img5.png" alt="" class="image">
                </a>
            </div>
        </div> --}}
        {{-- <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">The LUXE Store</p>
                <a href="https://designsbyluxe.com/shopluxere/" class="image-link" target="_blank">
                    <img src="/images/links/img6.png" alt="" class="image">
                </a>
            </div>
        </div> --}}
        {{-- <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">Password: Luxeknows123</p>
                <a href="https://vimeo.com/album/5622653" class="image-link" target="_blank">
                    <img src="/images/links/img7.png" alt="" class="image">
                </a>
            </div>
        </div> --}}
        {{-- <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">Designs By LUXE</p>
                <a href="http://designsbyluxe.com/member-login/" class="image-link" target="_blank">
                    <img src="/images/links/img8.png" alt="" class="image">
                </a>
            </div>
        </div> --}}
        {{-- <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">Password: Luxeknows123</p>
                <a href="https://vimeo.com/album/5622638" class="image-link" target="_blank">
                    <img src="/images/links/img9.png" alt="" class="image">
                </a>
            </div>
        </div> --}}
        <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">Open House Sign Up</p>
                <a href="https://luxeproperties1710.setmore.com/" class="image-link" target="_blank">
                    <img src="/images/links/img10.png" alt="" class="image">
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">CINC - Online Training Series</p>
                <a href="https://vimeo.com/showcase/7009202" class="image-link" target="_blank">
                    <img src="/images/links/img4.png" alt="" class="image">
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">Photography Session</p>
                <a href="https://luxeproperties8881.setmore.com/resourcebookingpage/r91ed1490023055601"
                    class="image-link" target="_blank">
                    <img src="/images/links/img11.jpg" alt="" class="image">
                </a>
            </div>
        </div>
        {{-- <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">Book an Appt - Denisse</p>
                <a href="https://luxeproperties8044.setmore.com/resourcebookingpage/r16e3833b779c9c99f4ea9a1cbff89aedcb322962"
                    class="image-link" target="_blank">
                    <img src="/images/links/img12.jpg" alt="" class="image">
                </a>
            </div>
        </div> --}}
        <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">kvCORE Orientation</p>
                <a href="https://kvcoregoogleadsfacebookads.setmore.com/kvcoreorientation" class="image-link"
                    target="_blank">
                    <img src="/images/links/img13.png" alt="" class="image">
                </a>
            </div>
        </div>
        {{-- <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">Tech & Orientation</p>
                <a href="https://luxeproperties9421.setmore.com/" class="image-link" target="_blank">
                    <img src="/images/links/img14.png" alt="" class="image">
                </a>
            </div>
        </div> --}}
        <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">Our Youtube Channel</p>
                <a href="https://www.youtube.com/luxeproperties" class="image-link" target="_blank">
                    <img src="/images/links/img15.png" alt="" class="image">
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">Youtube Video Converter</p>
                <a href="https://www.clipconverter.cc/2/" class="image-link" target="_blank">
                    <img src="/images/links/img16.png" alt="" class="image">
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">Luxe Mentorship Program</p>
                <a href="https://luxeproperties9337.setmore.com/" class="image-link" target="_blank">
                    <img src="/images/links/img17.jpg" alt="" class="image">
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">True People Search</p>
                <a href="http://www.truepeoplesearch.com/" class="image-link" target="_blank">
                    <img src="/images/links/img18.png" alt="" class="image">
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">FHA Approved Condos</p>
                <a href="https://entp.hud.gov/idapp/html/condlook.cfm" class="image-link" target="_blank">
                    <img src="/images/links/img19.png" alt="" class="image">
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="link-box">
                <p class="title">Link to Send Investment Properties</p>
                <a href="https://receptionist408509.typeform.com/to/UpeFJJ" class="image-link" target="_blank">
                    <img src="/images/links/img20.png" alt="" class="image">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection