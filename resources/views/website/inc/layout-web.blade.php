<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head> @include('website.inc.header') </head>

<!--
  AVAILABLE BODY CLASSES:

  smoothscroll 			= create a browser smooth scroll
  enable-animation		= enable WOW animations

  bg-grey					= grey background
  grain-grey				= grey grain background
  grain-blue				= blue grain background
  grain-green				= green grain background
  grain-blue				= blue grain background
  grain-orange			= orange grain background
  grain-yellow			= yellow grain background

  boxed 					= boxed layout
  pattern1 ... patern11	= pattern background
  menu-vertical-hide		= hidden, open on click

  BACKGROUND IMAGE [together with .boxed class]
  data-background="/website/assets/images/_smarty/boxed_background/1.jpg"
 -->

<body class="smoothscroll enable-animation">
    <!-- wrapper -->
    <div id="wrapper">
        <!-- Top Bar -->
        @include('website.inc.top-bar')
        <!-- /Top Bar -->

        @include('website.inc.navbar')

        <!-- LAYER SLIDER -->
        @include('website.inc.slide_03')
        <!-- /LAYER SLIDER -->

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
