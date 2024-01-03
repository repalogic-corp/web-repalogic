<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head> @include('website.inc.header') </head>

<body class="smoothscroll enable-animation">
    <!-- wrapper -->
    <div id="wrapper">
        <!-- Top Bar -->
        @include('website.inc.top-bar')
        <!-- /Top Bar -->
        @include('website.inc.navbar')

        @yield('content-web')

        <!-- FOOTER -->
        @include('website.inc.footer')
        <!-- /FOOTER -->
    </div>
    <!-- /wrapper -->
    <!-- SCROLL TO TOP -->
    <a href="#" id="toTop"></a>
    <!-- PRELOADER -->
    <div id="preloader">
        <div class="inner">
            <span class="loader"></span>
        </div>
    </div><!-- /PRELOADER -->

    @include('website.inc.javascript')
</body>

</html>
