<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title') | {{ ENV('APP_NAME') }}</title>
    <meta name="google-site-verification" content="{{ ENV('GOOGLE_SITE_VERIFICATION') }}">
    <meta name="description" content="@yield('title') | {{ ENV('APP_NAME') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="{{ ENV('APP_NAME') }} Event Organizer" />
    <meta name="author" content="codecarnival" />
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
