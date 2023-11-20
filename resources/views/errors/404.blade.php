@extends('layouts.app')

@section('title')
    Not Found
@endsection

@section('content')
    <!--== Start: Page Header Area Wrapper ==-->
    <div class="section page-header-area">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-auto text-center text-sm-start">
                    <h1 class="page-header-title">404_Error</h1>
                </div>
                <div class="col-sm-auto">
                    <ol class="breadcrumb mb-0 justify-content-center mt-3 mt-sm-0">
                        <li class="breadcrumb-item"><a href="{{ route('landing.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">404_Error</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--== End: Page Header Area Wrapper ==-->

    <!--== Start Page Not Found Area Wrapper ==-->
    <section class="page-not-found-area section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-not-found-thumb">
                        <img src="{{ asset('assets/images/photos/404-Error.png') }}" width="552" height="691"
                            alt="{{ Env('APP_NAME') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page-not-found-content">
                        <h3 class="not-found-text">404</h3>
                        <h3 class="not-found-title py-4">Sorry, This page is not found.</h3>
                        <p class="not-found-desc">If you want to return to the main page click the button below</p>
                        <a class="btn btn-light btn-icon-left btn-lg fs-6 not-found-btn"
                            href="{{ route('landing.index') }}"><i class="icofont-double-left icon"></i> <span>Back To
                                Home</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Not Found Area Wrapper ==-->
@endsection

@push('css')
    <style>
        .page-header-area {
            background-color: #202720;
        }

        .page-header-area::before {
            content: "";
            background-image: url('http://localhost:2180/assets/images/photos/bg5.png');
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
