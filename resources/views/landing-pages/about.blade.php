@extends('layouts.app')

@section('title')
    About
@endsection

@section('content')
    <!--== Start: Page Header Area Wrapper ==-->
    <div class="section page-header-area">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-auto text-center text-sm-start">
                    <h1 class="page-header-title">About Us</h1>
                </div>
                <div class="col-sm-auto">
                    <ol class="breadcrumb mb-0 justify-content-center mt-3 mt-sm-0">
                        <li class="breadcrumb-item"><a href="{{ route('landing.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--== End: Page Header Area Wrapper ==-->
    <!--== Start: About Section Wrapper ==-->
    <div class="about-section section section-padding section-margin-t">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{ asset('assets/images/photos/about2.jpg') }}" width="500" height="500"
                            alt="{{ ENV('APP_NAME') }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h6 class="sub-title">About</h6>
                        <h2 class="title">We are a company that specialized on bellow the line activation.</h2>
                        <p>In this enviroment of fast information and various option that flooded
                            the market, brands need to adapt a new and effective communication
                            compaign.</p>
                        <p>A successful bellow the line activation has to be unique
                            and one experience that is marked on the consumer mind.</p>
                        <p>Only bellow the line activation can reach the consumer in avery close and personal
                            engagement, and it is proven effective.</p>
                        <p>Personal Brand EXPERENCE is all that it take to win your consumers hearts in a most exciting
                            and excellent way.</p>
                        <p>We are customized for personalize services for every activation we engage, because we believe
                            that each brand own it's own it's own uniqueness and image to be srengthened.</p>
                        <p>We never generalize our services for our client. At amother point, web activate
                            our clients campaigns with our hearts, that's what makes us than outhers.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-bg-color-shape section-bg-color-shape-style1 bg-grey"></div>
        <div class="section-bg-color-shape section-bg-color-shape-style3 bg-secondary"></div>
    </div>
    <!--== End: About Section Wrapper ==-->
@endsection

@push('css')
    <style>
        .page-header-area {
            background-color: #202720;
        }

        .page-header-area::before {
            content: "";
            background-image: url('http://localhost:2180/assets/images/photos/bg3.png');
            opacity: 0.1;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endpush
