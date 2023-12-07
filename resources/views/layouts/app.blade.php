<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="{{ ENV('APP_NAME') }} | {{ ENV('APP_URL') }}" />
    <meta name="revisit-after" content="5 Days">
    <meta name="robots" content="all, follow">
    <meta name="googlebot" content="index,follow">
    <meta name="apple-mobile-web-app-title" content="{{ ENV('APP_NAME') }}">
    <meta name="google-site-verification" content="{{ ENV('GOOGLE_SITE_VERIFICATION') }}">
    <meta name="description"
        content="{{ ENV('APP_NAME') }}, Event Organizer, Event Organizer Yogyakarta, Event Organizer Indonesia" />
    <meta name="keywords" content="{{ ENV('APP_NAME') }} Event Organizer" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ ENV('APP_NAME') }}</title>
    <link rel="alternate" href="{{ Request::url() }}" hreflang="it">
    @include('layouts.components.head')
</head>

<body>

    <!--== Start: Wrapper ==-->
    <div class="wrapper">

        <!--== Start: Header Wrapper ==-->
        @include('layouts.components.header')
        <!--== End: Header Wrapper ==-->

        <main class="main-content">
            @yield('content')
        </main>

        <!--== Start: Footer Section Wrapper ==-->
        @include('layouts.components.footer')
        <!--== End: Footer Section Wrapper ==-->
    </div>
    <!--== End: Wrapper ==-->

    @include('layouts.components.vendor')

</body>

</html>
