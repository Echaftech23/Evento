<!DOCTYPE html>
<html lang="en">
<head>
    <title>Eventalk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link href="{{ asset('css/open-iconic-bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/jquery.timepicker.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icomoon.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet" type="text/css">

  </head>
  <body>

    @include('layouts.home.header')
    <!-- END nav -->

    @yield('contents')

    @include('layouts.home.footer')
    <!-- footer -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src=" {{ asset('js/jquery.min.js') }}"></script>
  <script src=" {{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src=" {{ asset('js/popper.min.js') }}"></script>
  <script src=" {{ asset('js/bootstrap.min.js') }}"></script>
  <script src=" {{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src=" {{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src=" {{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src=" {{ asset('js/owl.carousel.min.js') }}"></script>
  <script src=" {{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src=" {{ asset('js/aos.js') }}"></script>
  <script src=" {{ asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src=" {{ asset('js/bootstrap-datepicker.js') }}"></script>
  <script src=" {{ asset('js/jquery.timepicker.min.html') }}"></script>
  <script src=" {{ asset('js/scrollax.min.js') }}"></script>
  <script src=" {{ asset('js/main.js') }}"></script>
  </body>
</html>
