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
            </div>
            <!--== End Section Title ==-->
            <div class="row row-gutter-45 mb-n6">
                <!--== Start Feature Item ==-->
                <div class="col-md-6 col-lg-4 mb-6">
                    <div class="feature-item">
                        <h4 class="title">Creative Conceptor</h4>
                        <p class="desc">Crafting creative ideas and unique themes for events.</p>
                    </div>
                </div>
                <!--== End Feature Item ==-->

                <!--== Start Feature Item ==-->
                <div class="col-md-6 col-lg-4 mb-6">
                    <div class="feature-item">
                        <h4 class="title">Design & Execute</h4>
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
    </div>
    <!--== End: Feature Section Wrapper ==-->

    <!--== Start: About Section Wrapper ==-->
    <div class="about-section section section-margin pt-0 pb-0 pt-xl-5 pb-xl-5">
        <div class="container">
            <div class="row mt-n1 pt-0 pt-lg-5 pt-xl-10 pb-6 pb-md-10 pb-lg-5 pb-xl-10 mb-5 mb-lg-0">
                <div class="col-lg-5">
                    <!--== Section Title Start ==-->
                    <div class="section-title-2 mb-0">
                        <h6 class="sub-title">About</h6>
                        <h2 class="mt-4">"We are a company that specialized on bellow the line activation"</h2>
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
                    <!--== Section Title End ==-->
                </div>
            </div>
        </div>
        <div class="section-bg-img section-bg-img-style1" data-bg-img="{{ asset('assets/images/photos/about.jpg') }}"></div>
    </div>
    <!--== End: About Section Wrapper ==-->

    <!--== Start: Campaign Section Wrapper ==-->
    <div class="campaign-section section section-padding bg-light">
        <div class="container">
            <!--== Start Section Title ==-->
            <div class="section-title center mt-n3">
                <h2 class="title mb-4">Our Event</h2>
            </div>
            <!--== End Section Title ==-->

            <div class="row mx-auto my-auto justify-content-center">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach ($galerys as $key => $item)
                            <div class="carousel-item {{ $key == 0 ? 'active' : null }}">
                                <div class="col-md-3">
                                    <div class="card campaign-item">
                                        <div class="card-img">
                                            <a href="javascript:void(0)" class="image magnific-popup"
                                                onclick="loadPopupImage('{{ Crypt::encryptString($item->id) }}')">
                                                <img src="{{ asset('img/events/' . $item->slug . '/' . json_decode($item->image)[0]) }}"
                                                    alt="{{ ENV('APP_NAME') }}" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="position-absolute event-list px-2 pt-1">
                                            <b>{{ $item->name }}</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-black mx-3 rounded" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-black mx-3 rounded" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="section-bg-color-shape section-bg-color-shape-style2"></div>
    </div>
    <!--== End: Campaign Section Wrapper ==-->

    <!--== Start: Campaign Section Wrapper ==-->
    <div class="campaign-section section section-padding">
        <div class="container">
            <!--== Start Section Title ==-->
            <div class="section-title center mt-n3">
                <h2 class="title mb-4">Our Client</h2>
            </div>
            <!--== End Section Title ==-->

            <div class="customer-logos slider text-center">
                <!--== Start Campaign Item ==-->
                <a href="javascript:void(0)" class="image rounded">
                    <img src="{{ asset('img/client/clients.png') }}" alt="{{ ENV('APP_NAME') }}">
                </a>
                <!--== End Campaign Item ==-->
            </div>
        </div>
    </div>
    <!--== End: Campaign Section Wrapper ==-->
@endsection

@push('css')
    <style>
        @media (max-width: 767px) {
            .carousel-inner .carousel-item>div {
                display: none;
            }

            .carousel-inner .carousel-item>div:first-child {
                display: block;
            }
        }

        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

        /* medium and up screens */
        @media (min-width: 768px) {

            .carousel-inner .carousel-item-end.active,
            .carousel-inner .carousel-item-next {
                transform: translateX(25%);
            }

            .carousel-inner .carousel-item-start.active,
            .carousel-inner .carousel-item-prev {
                transform: translateX(-25%);
            }
        }

        .carousel-inner .carousel-item-end,
        .carousel-inner .carousel-item-start {
            transform: translateX(0);
        }

        .img-fluid,
        .img-thumbnail {
            max-width: 100%;
            height: 200px !important;
            object-fit: cover;
        }
    </style>
@endpush

@push('script')
    <script>
        let items = document.querySelectorAll('.carousel .carousel-item')

        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>
@endpush

@push('script')
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.min.css') }}">
    <script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script>
        function loadPopupImage(slug) {
            var formData = new FormData();
            formData.append('slug', slug);
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            formData.append('_token', csrfToken);

            $.ajax({
                url: "{{ route('services.landing.contact.listImage') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.statusCode === 200) {
                        var images = [];
                        $.each(response.data.image, function(index, value) {
                            var url = "{{ asset('img/events/') }}/" + response.data.slug + "/" + value
                            images.push({
                                title: response.data.name,
                                src: url
                            });
                        });
                        $.magnificPopup.open({
                            items: images,
                            gallery: {
                                enabled: true
                            },
                            type: 'image'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }
    </script>
@endpush
