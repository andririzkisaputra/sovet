<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sovet</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/custom.css') }}" crossorigin="anonymous">
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
</head>
<body>
    <div class="container col-12 mb-5">
        <!-- nav -->
        <nav class="mt-5 row">
            <div class="col-6">
                <h1>
                    <a class="navbar-brand" href="{{ route('site') }}">SOVET</a>
                    <span class="header-tm">TM</span>
                </h1>
            </div>
            <div class="col-6 text-right">
                <h4>Event Organizer</h4>
            </div>
        </nav>

        <!-- slider -->
        <div class="slider">
            <p class="header-text">Company</p>
            <p>Profile</p>
        </div>

        <!-- About Company -->
        <div class="about">
            <p class="title">About Company</p>
            <i style="font-weight: bold; font-size: 20px;">
                "We are a company that specialized on bellow the line activation"
            </i>
            <br>
            <span>
                In this enviroment of fast information and various option that flooded
                the market, brands need to adapt a new and effective communication
                compaign. A successful bellow the line activation has to be unique
                and one experience that is marked on the consumer mind. Only bellow the
                line activation can reach the consumer in avery close and personal engagement,
                and it is proven effective. Personal Brand EXPERENCE is all that it take to win
                your consumers hearts in a most exciting and excellent way. We are customized for
                personalize services for every activation we engage, because we believe that
                each brand own it's own it's own uniqueness and image to be srengthened. We
                never generalize our services for our client. At amother point, web activate
                our clients campaigns with our hearts, that's what makes us than outhers.
            </span>
        </div>

        <!-- OUR SERVICES -->
        <div class="our-services pt-5 mt-5">
            <p class="title">OUR SERVICES</p>
            <div class="grid-container">
                <span class="grid-item">Crative Coception</span>
                <span class="grid-item">Design and Executin</span>
                <span class="grid-item">Event Management</span>
                <span class="grid-item">Brand Activation</span>
                <span class="grid-item">Launching Event</span>
                <span class="grid-item">Company MICE</span>
                <span class="grid-item">Press Conference</span>
                <span class="grid-item">Meeting Conference</span>
            </div>
        </div>

        <!-- OUR EVENT -->
        <div class="our-event pt-5 mt-5">
            <p class="title">OUR EVENT</p>
            <div align="center">
                <button class="btn btn-default filter-button active" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="17-agustus">17 Agustus</button>
            </div>
            <div class="grid-container">
                <img src="{{ url('img/events/event-1.jpg') }}" class="w-100 shadow filter 17-agustus" alt="{{ url('/') }}">
                <img src="{{ url('img/events/event-2.jpg') }}" class="w-100 shadow filter 17-agustus" alt="{{ url('/') }}">
                <img src="{{ url('img/events/event-3.jpg') }}" class="w-100 shadow filter 17-agustus" alt="{{ url('/') }}">
            </div>
        </div>

        <!-- OUR CLIENT -->
        <div class="our-client pt-5 mt-5">
            <p class="title">OUR CLIENT</p>
            <section class="customer-logos slider">
                <img class="slide" src="{{ url('img/client/nokia.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/sinarmas.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/orange-tv.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/panasonic.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/pakuwon-mall.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/lippo-malls.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/sharp.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/foxconn.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/kkpi.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/tut-wuri.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/ugm.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/honda.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/bmw.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/himax.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/lpp-argo.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/pgn-solution.png') }}" alt="{{ url('/') }}">
                <img class="slide" src="{{ url('img/client/perkebunan-nusantara.png') }}" alt="{{ url('/') }}">
            </section>
        </div>

        <!-- BOARD of DIRECTORS -->
        <div class="board-of-directors pt-5 mt-5">
            <p class="title">BOARD of DIRECTORS</p>
            <div class="row text-center">
                <div class="col-lg-3 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="our-team">
                        <div class="single-team">
                            <img src="{{ url('img/stephan-mario-untu.png') }}" class="img-fluid" alt="{{ url('/') }}">
                            <h3>Stephan Mario Untu</h3>
                            <p>CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="our-team">
                        <div class="single-team">
                            <img src="{{ url('img/yilia-restuaji.png') }}" class="img-fluid" alt="{{ url('/') }}">
                            <h3>Yilia Restuaji</h3>
                            <p>Chief Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Links  -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                    <div class="col-lg-5">
                    <h1>
                        <a class="navbar-brand" href="{{ route('site') }}">SOVET</a>
                        <span class="header-tm">TM</span>
                    </h1>
                    <p>PT SOVETZKYA INDO MANDIRI</p>
                    <p>Organizer|Production|Media Management</p>
                    <p>
                        <a style="color: #000; text-decoration: none;" href="tel:02742886381">0274-288 6381</a>|
                        <a style="color: #000; text-decoration: none;" href="https://wa.me/628170708008" target="_blank">081-7070-8008</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-8 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Location</h6>
                    <p>
                        <b>Main Office</b> :<br>
                        Kaweden No. 48 RT 3 RW 17 Kowedan, Tirtoadi, Mlati, Sleman, <strong>Yogyakarta</strong>
                    </p>
                    <p>
                        <b>Branch Office</b> :<br>
                        BP 7/20 Puri Bintaro Sektor 9, Bintaro Jaya, <strong>Tangerang Selatan</strong><br><br>
                        Gubeng Kertajaya IV A No. 26, <strong>Surabaya</strong><br><br>
                        Jl. Rumah Sakit Ubud, Terace Campus I Private Residence No. 4 Jimbaran, Kuta Selatan, Badung, <strong>Bali</strong>
                    </p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="{{ url('/') }}">SOVET</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <a href="http://" target="_blank" rel="noopener noreferrer">
        <img src="{{ url('img/whatsapp.gif') }}" alt="{{ route('site') }}" style="width: 75px; position: fixed; bottom: 15px; right: 15px;">
    </a>
</body>

<script>
    $(document).ready(function(){
        $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');
            
            if(value == "all") {
                $('.filter').show('1000');
            } else {
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');
            }
            if ($(".filter-button").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");
        });
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

        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");
    });
</script>
</html>