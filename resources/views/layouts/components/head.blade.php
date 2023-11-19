<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

<!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

<!-- Font CSS -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

<!-- Vendor CSS (Bootstrap & Icon Font) -->
<link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">

<!-- Plugins CSS (All Plugins Files) -->
<link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/icofont.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/fancybox.min.css') }}">

<!-- Style CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

{{-- Skrip JSON-LD --}}
<script type="application/ld+json">
    {
      "@context": "https://sovet.id",
      "@type": "WebSite",
      "url": "{{ route('landing.index') }}",
      "name": "Sovet",
      "publisher": {
        "@type": "Organization",
        "name": "Sovet"
      },
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ route('landing.index') }}"
      },
      "menu": [
        {
          "@type": "MenuItem",
          "name": "Home",
          "url": "{{ route('landing.index') }}"
        },
        {
          "@type": "MenuItem",
          "name": "About",
          "url": "{{ route('landing.about') }}"
        },
        {
          "@type": "MenuItem",
          "name": "Contact",
          "url": "{{ route('landing.contact') }}"
        }
      ]
    }
</script>

{{-- Style Css Custome Page --}}
@stack('css')
