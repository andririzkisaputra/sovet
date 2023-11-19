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

            <div class="customer-logos slider d-flex">
                <!--== Start Campaign Item ==-->
                <a href="javascript:void(0)" class="image rounded">
                    <img src="{{ asset('assets/images/client/clients.png') }}" alt="{{ ENV('APP_NAME') }}">
                </a>
                <!--== End Campaign Item ==-->
            </div>
        </div>
    </div>
    <!--== End: Campaign Section Wrapper ==-->
@endsection
