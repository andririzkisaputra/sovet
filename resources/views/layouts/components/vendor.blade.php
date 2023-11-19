<!-- JS Vendor, Plugins & Activation Script Files -->

<!-- Vendors JS -->
<script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>

<!-- Plugins JS -->
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/svg-inject.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/fancybox.min.js') }}"></script>

<!-- Custom Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

{{-- JS Custome Page --}}
@stack('script')
