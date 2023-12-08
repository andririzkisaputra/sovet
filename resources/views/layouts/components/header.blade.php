<header class="header-wrapper">
    <!--== Start: Header Top ==-->
    <div class="header-top d-none d-lg-block">
        <div class="container-fluid header-container-fluid">
            <ul class="header-top-info-list justify-content-between">
                <li>
                    <span class="icon"><i class="icofont-ui-call"></i></span>
                    <a href="tel://02742886381" class="text">0274-288 6381</a>
                    &nbsp;&nbsp;&nbsp;|
                    <a href="tel://08170708008" class="text">081-7070-8008</a>
                </li>
                <li>
                    <span class="icon"><i class="icofont-envelope-open"></i></span>
                    <a href="mailto://official@sovet.id	" class="text">official@sovet.id </a>
                </li>
                <li>
                    <span class="icon mx-2">
                        <a href="https://instagram.com/sovet.id?igshid=MzMyNGUyNmU2YQ==" target="_blank">
                            <i class="icofont-instagram"></i>
                        </a>
                    </span>
                    <span class="icon mx-2">
                        <a href="https://twitter.com" target="_blank">
                            <i class="icofont-twitter"></i>
                        </a>
                    </span>
                    <span class="icon mx-2">
                        <a href="https://facebook.com" target="_blank">
                            <i class="icofont-facebook"></i>
                        </a>
                    </span>
                    <span class="icon mx-2">
                        <a href="https://tiktok.com" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" width="10px">
                                <path
                                    d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"
                                    fill="#cb914f" />
                            </svg>
                        </a>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <!--== End: Header Top ==-->

    <!--== Start: Header Top ==-->
    <div class="header-bottom sticky-header">
        <div class="container-fluid header-container-fluid">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="header-logo">
                        <a href="{{ route('landing.index') }}">
                            <h1 class="h3">SOVET</h1>
                        </a>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="header-navigation">
                        <ul class="main-nav justify-content-center">
                            <li><a href="{{ route('landing.index') }}">Home</a></li>
                            <li><a href="{{ route('landing.about') }}">About</a></li>
                            <li><a href="{{ route('landing.contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto d-flex align-items-center gap-6 gap-lg-0">
                    <button class="btn-menu d-flex d-lg-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--== End: Header Top ==-->
</header>
