<!DOCTYPE html>
<html lang="en">
<head>
    <title>Eventalk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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

  <style>
    body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-repeat: no-repeat;
}

.card {
    width: 600px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px 0px #302f30;
    margin-top: 50px;
    margin-bottom: 50px;
}

/* .erea{ background-color: rgb(17, 159, 52)} */

.set-p {
    padding-left: 15px;
    padding-right: 15px;
}

.image {
    object-fit: cover;
    width: 100%;
    height: 100%;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}

.rating {
    background-color: #3D5AFE;
    color: #fff;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}

.grade {
    font-size: 18px;
}

.line {
    height: 1px;
    background-color: #E0E0E0;
}

@media screen and (max-width: 575px) {
    .image {
        height: auto;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 0px;
        border-top-right-radius: 10px;
    }
}
  </style>
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
