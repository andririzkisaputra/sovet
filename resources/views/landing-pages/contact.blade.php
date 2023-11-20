@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content')
    <!--== Start: Page Header Area Wrapper ==-->
    <div class="section page-header-area">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-auto text-center text-sm-start">
                    <h1 class="page-header-title">Contact</h1>
                </div>
                <div class="col-sm-auto">
                    <ol class="breadcrumb mb-0 justify-content-center mt-3 mt-sm-0">
                        <li class="breadcrumb-item"><a href="{{ route('landing.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--== End: Page Header Area Wrapper ==-->
    <!--== Start: Contact Section Wrapper ==-->
    <div class="contact-section section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!--== Start: Section Title ==-->
                    <div class="section-title contact-section-title mt-n3 mb-8 mb-xl-10 pb-4">
                        <h2 class="title">Get In Touch</h2>
                    </div>
                    <!--== End: Section Title ==-->

                    <!--== Start Contact Form ==-->
                    <div class="contact-form">
                        @if (session('success'))
                            <div class="alert alert-success my-4">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger my-4">
                                <b>Opps!</b> {{ session('error') }}
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger my-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form id="contact-form" action="{{ route('landing.contact.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3 mb-xl-4">
                                <input class="form-control" type="text" name="name" placeholder="Name:"
                                    value="{{ old('name') }}">
                            </div>
                            <div class="form-group mb-3 mb-xl-4">
                                <input class="form-control" type="text" name="phone" placeholder="Phone:"
                                    value="{{ old('phone') }}">
                            </div>
                            <div class="form-group mb-3 mb-xl-4">
                                <input class="form-control" type="email" name="email" placeholder="Email:"
                                    value="{{ old('email') }}">
                            </div>
                            <div class="form-group mb-5 mb-xl-10">
                                <textarea class="form-control" name="message" placeholder="Message:">{{ old('message') }}</textarea>
                            </div>
                            <div class="form-group mb-5 mb-xl-10">
                                <div class="g-recaptcha" data-sitekey="{{ ENV('GOOGLE_RECAPTCHA_KEY') }}"></div>
                            </div>
                            <div class="form-group">
                                <button class="contact-form-btn btn btn-primary btn-icon-right" type="submit"><span>Send
                                        Now</span> <i class="icofont-double-right icon"></i></button>
                            </div>
                        </form>
                    </div>
                    <!--== End Contact Form ==-->
                </div>
            </div>
        </div>

        <div class="contact-form-map section section-padding">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15813.670065434639!2d110.3252986!3d-7.7454615!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af71e7d44a6a3%3A0x74df3d2a73de5ade!2sSOVET.ID!5e0!3m2!1sid!2sid!4v1700490344874!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!--== End: Contact Section Wrapper ==-->
@endsection

@push('css')
    <style>
        .page-header-area {
            background-color: #202720;
        }

        .page-header-area::before {
            content: "";
            background-image: url('http://localhost:2180/assets/images/photos/bg4.png');
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
