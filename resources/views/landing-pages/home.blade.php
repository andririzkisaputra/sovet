@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <!--== Start: Hero Section Wrapper ==-->
    <div class="hero-slider-section position-relative">
        <div class="swiper hero-slider-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-slide-item">
                    <div class="container-fluid">
                        <div class="hero-slide-content">
                            <h2 class="hero-slide-sub-title">Company Profile</h2>
                            <h1 class="hero-slide-title">Event Organizer.</h1>
                        </div>
                    </div>
                    <div class="hero-slide-shape-one" data-bg-img="assets/images/slider/slide-bg-color1.jpg"></div>
                    <div class="hero-slide-thumb">
                        <img src="{{ asset('assets/images/slider/slider1.png') }}" width="1208" height="804"
                            alt="{{ ENV('APP_NAME') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End: Hero Section Wrapper ==-->

    <!--== Start: Feature Section Wrapper ==-->
    <div class="feature-section section section-padding section-margin-t">
        <div class="container">
            <!--== Start Section Title ==-->
            <div class="section-title center mt-n3">
                <h2 class="title mb-4">Our Services</h2>
                <span class="shape"><img src="{{ asset('assets/images/shape/section-title.png') }}" width="99"
                        height="7" alt="Section Title Shape"></span>
            </div>
            <!--== End Section Title ==-->
            <div class="row row-gutter-45 mb-n6">
                <!--== Start Feature Item ==-->
                <div class="col-md-6 col-lg-4 mb-6">
                    <div class="feature-item">
                        <h4 class="title">Crative Coception</h4>
                        <p class="desc">Crafting creative ideas and unique themes for events.</p>
                    </div>
                </div>
                <!--== End Feature Item ==-->

                <!--== Start Feature Item ==-->
                <div class="col-md-6 col-lg-4 mb-6">
                    <div class="feature-item">
                        <h4 class="title">Design and Executin</h4>
                        <p class="desc">Bringing ideas to life with technical detail for events.</p>
                    </div>
                </div>
                <!--== End Feature Item ==-->

                <!--== Start Feature Item ==-->
                <div class="col-md-6 col-lg-4 mb-6">
                    <div class="feature-item">
                        <h4 class="title">Event Management</h4>
                        <p class="desc">Full management from planning to execution.</p>
                    </div>
                </div>
                <!--== End Feature Item ==-->

                <!--== Start Feature Item ==-->
                <div class="col-md-6 col-lg-4 mb-6">
                    <div class="feature-item">
                        <h4 class="title">Brand Activation</h4>
                        <p class="desc">Strengthening connections between brands and audiences.</p>
                    </div>
                </div>
                <!--== End Feature Item ==-->

                <!--== Start Feature Item ==-->
                <div class="col-md-6 col-lg-4 mb-6">
                    <div class="feature-item">
                        <h4 class="title">Launching Event</h4>
                        <p class="desc">Special events for product or service launches.</p>
                    </div>
                </div>
                <!--== End Feature Item ==-->

                <!--== Start Feature Item ==-->
                <div class="col-md-6 col-lg-4 mb-6">
                    <div class="feature-item">
                        <h4 class="title">Company MICE</h4>
                        <p class="desc">Organizing business meetings, incentives, conferences, and exhibitions.</p>
                    </div>
                </div>
                <!--== End Feature Item ==-->

                <!--== Start Feature Item ==-->
                <div class="col-md-6 col-lg-4 mb-6">
                    <div class="feature-item">
                        <h4 class="title">Press Conference</h4>
                        <p class="desc">Preparation and execution of media conferences.</p>
                    </div>
                </div>
                <!--== End Feature Item ==-->

                <!--== Start Feature Item ==-->
                <div class="col-md-6 col-lg-4 mb-6">
                    <div class="feature-item">
                        <h4 class="title">Meeting Conference</h4>
                        <p class="desc">Arranging business or industry meetings.</p>
                    </div>
                </div>
                <!--== End Feature Item ==-->
            </div>
        </div>
        <div class="section-bg-color-shape section-bg-color-shape-style1 bg-grey"></div>
        <div class="section-pattern-img section-pattern-img-style1 pattern-img-zoom">
            <img src="assets/images/shape/1.png" width="127" height="125" alt="Image">
        </div>
    </div>
    <!--== End: Feature Section Wrapper ==-->

    <!--== Start: Campaign Section Wrapper ==-->
    <div class="campaign-section section section-padding">
        <div class="container">
            <!--== Start Section Title ==-->
            <div class="section-title center mt-n3">
                <h2 class="title mb-4">Our Event</h2>
                <span class="shape"><img src="assets/images/shape/section-title.png" width="99" height="7"
                        alt="Section Title Shape"></span>
            </div>
            <!--== End Section Title ==-->

            <div class="row row-gutter-60 mb-n8">
                <!--== Start Campaign Item ==-->
                <div class="col-md-6 col-lg-4 mb-8">
                    <div class="campaign-item bg-light">
                        <a href="javascript:void(0)" class="image">
                            <img src="{{ asset('assets/images/events/event-1.jpg') }}" width="350" height="250"
                                alt="{{ ENV('APP_NAME') }}">
                        </a>
                    </div>
                </div>
                <!--== End Campaign Item ==-->

                <!--== Start Campaign Item ==-->
                <div class="col-md-6 col-lg-4 mb-8">
                    <div class="campaign-item bg-light">
                        <a href="javascript:void(0)" class="image">
                            <img src="{{ asset('assets/images/events/event-2.jpg') }}" width="350" height="250"
                                alt="{{ ENV('APP_NAME') }}">
                        </a>
                    </div>
                </div>
                <!--== End Campaign Item ==-->

                <!--== Start Campaign Item ==-->
                <div class="col-md-6 col-lg-4 mb-8">
                    <div class="campaign-item bg-light">
                        <a href="javascript:void(0)" class="image">
                            <img src="{{ asset('assets/images/events/event-3.jpg') }}" width="350" height="250"
                                alt="{{ ENV('APP_NAME') }}">
                        </a>
                    </div>
                </div>
                <!--== End Campaign Item ==-->
            </div>
        </div>
        <div class="section-bg-color-shape section-bg-color-shape-style2"></div>
        <div class="section-pattern-img section-pattern-img-style3 pattern-img-move">
            <img src="assets/images/shape/3.png" width="107" height="170" alt="Image">
        </div>
    </div>
    <!--== End: Campaign Section Wrapper ==-->

    <!--== Start: Campaign Section Wrapper ==-->
    <div class="campaign-section section section-padding bg-light">
        <div class="container">
            <!--== Start Section Title ==-->
            <div class="section-title center mt-n3">
                <h2 class="title mb-4">Our Client</h2>
                <span class="shape"><img src="assets/images/shape/section-title.png" width="99" height="7"
                        alt="Section Title Shape"></span>
            </div>
            <!--== End Section Title ==-->

            <section class="customer-logos slider d-flex">
                <!--== Start Campaign Item ==-->
                <img class="slide" src="{{ asset('assets/images/client/bmw.png') }}" width="150" height="50"
                    alt="{{ ENV('APP_NAME') }}">
                <!--== End Campaign Item ==-->

                <!--== Start Campaign Item ==-->
                <img class="slide" src="{{ asset('assets/images/client/bmw.png') }}" width="150" height="50"
                    alt="{{ ENV('APP_NAME') }}">
                <!--== End Campaign Item ==-->

                <!--== Start Campaign Item ==-->
                <img class="slide" src="{{ asset('assets/images/client/bmw.png') }}" width="150" height="50"
                    alt="{{ ENV('APP_NAME') }}">
                <!--== End Campaign Item ==-->
                <!--== Start Campaign Item ==-->
                <img class="slide" src="{{ asset('assets/images/client/bmw.png') }}" width="150" height="50"
                    alt="{{ ENV('APP_NAME') }}">
                <!--== End Campaign Item ==-->

                <!--== Start Campaign Item ==-->
                <img class="slide" src="{{ asset('assets/images/client/bmw.png') }}" width="150" height="50"
                    alt="{{ ENV('APP_NAME') }}">
                <!--== End Campaign Item ==-->

                <!--== Start Campaign Item ==-->
                <img class="slide" src="{{ asset('assets/images/client/bmw.png') }}" width="150" height="50"
                    alt="{{ ENV('APP_NAME') }}">
                <!--== End Campaign Item ==-->
                <!--== Start Campaign Item ==-->
                <img class="slide" src="{{ asset('assets/images/client/bmw.png') }}" width="150" height="50"
                    alt="{{ ENV('APP_NAME') }}">
                <!--== End Campaign Item ==-->

                <!--== Start Campaign Item ==-->
                <img class="slide" src="{{ asset('assets/images/client/bmw.png') }}" width="150" height="50"
                    alt="{{ ENV('APP_NAME') }}">
                <!--== End Campaign Item ==-->

                <!--== Start Campaign Item ==-->
                <img class="slide" src="{{ asset('assets/images/client/bmw.png') }}" width="150" height="50"
                    alt="{{ ENV('APP_NAME') }}">
                <!--== End Campaign Item ==-->
                <!--== Start Campaign Item ==-->
                <img class="slide" src="{{ asset('assets/images/client/bmw.png') }}" width="150" height="50"
                    alt="{{ ENV('APP_NAME') }}">
                <!--== End Campaign Item ==-->

                <!--== Start Campaign Item ==-->
                <img class="slide" src="{{ asset('assets/images/client/bmw.png') }}" width="150" height="50"
                    alt="{{ ENV('APP_NAME') }}">
                <!--== End Campaign Item ==-->

                <!--== Start Campaign Item ==-->
                <img class="slide" src="{{ asset('assets/images/client/bmw.png') }}" width="150" height="50"
                    alt="{{ ENV('APP_NAME') }}">
                <!--== End Campaign Item ==-->
                <!--== Start Campaign Item ==-->
                <img class="slide" src="{{ asset('assets/images/client/bmw.png') }}" width="150" height="50"
                    alt="{{ ENV('APP_NAME') }}">
                <!--== End Campaign Item ==-->

                <!--== Start Campaign Item ==-->
                <img class="slide" src="{{ asset('assets/images/client/bmw.png') }}" width="150" height="50"
                    alt="{{ ENV('APP_NAME') }}">
                <!--== End Campaign Item ==-->

                <!--== Start Campaign Item ==-->
                <img class="slide" src="{{ asset('assets/images/client/bmw.png') }}" width="150" height="50"
                    alt="{{ ENV('APP_NAME') }}">
                <!--== End Campaign Item ==-->
            </section>
        </div>
    </div>
    <!--== End: Campaign Section Wrapper ==-->
@endsection

@push('css')
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <style>
        .slider {
            height: 75vh;
            display: flex;
            align-content: space-between;
            flex-wrap: wrap;
            flex-direction: column;
            justify-content: center;
        }

        .slider .header-text,
        .about p {
            font-weight: bold;
            font-size: 70px;
            margin-bottom: 0px;
        }

        .slider p {
            font-weight: bold;
            font-size: 30px;
            margin-top: 0px;
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .slick-list:focus {
            outline: none;
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }

        .slick-track:before,
        .slick-track:after {
            display: table;
            content: '';
        }

        .slick-track:after {
            clear: both;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }

        [dir='rtl'] .slick-slide {
            float: right;
        }

        .slick-slide img {
            display: block;
        }

        .slick-slide.slick-loading img {
            display: none;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }

        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }

        .slick-arrow.slick-hidden {
            display: none;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>

    <script>
        $().ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
@endpush
