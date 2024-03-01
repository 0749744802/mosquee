<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @foreach ($site as $item)
  <title>{{ $item->nom_site }}|@yield('titre')</title> 
  @endforeach
 
  @foreach ($site as $item)
  <link rel="icon" href="{{ asset('storage/' . $item->logo_site) }}"> 
  @endforeach
  
  <link rel="stylesheet" href="{{asset("logiciel/assets/css/owl.carousel.min.css")}}">
  <link rel="stylesheet" href="{{asset("logiciel/assets/css/animate.css")}}">
  <link rel="stylesheet" href="{{asset("logiciel/assets/css/fontawesome.min.css")}}">
  <link rel="stylesheet" href="{{asset("logiciel/assets/css/jquery.fancybox.min.css")}}">
  <link rel="stylesheet" href="{{asset("logiciel/assets/css/progress-bar.css")}}">
  <link rel="stylesheet" href="{{asset("logiciel/assets/css/magnific-popup.css")}}">
  <link rel="stylesheet" href="{{asset("logiciel/assets/css/style.css")}}">
  <link rel="stylesheet" href="{{asset("logiciel/assets/css/responsive.css")}}">
  <link href="{{asset("assets/plugins/sweetalert2/sweetalert2.min.css")}}" rel="stylesheet" type="text/css" />
  
    <link href="{{asset("assets/plugins/sweetalert/sweetalert.css")}}" rel="stylesheet" type="text/css">
    <script src="{{ asset("assets/plugins/sweetalert2/sweetalert2.min.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <!-- <div class="loader-bg">
    <div class='loader'>
      <div class='loader--dot'></div>
      <div class='loader--dot'></div>
      <div class='loader--dot'></div>
      <div class='loader--dot'></div>
      <div class='loader--dot'></div>
      <div class='loader--dot'></div>
      <div class='loader--text'></div>
    </div>
  </div> -->

  <!-- =====================================
  ============ Header Area Star ============
  ====================================== -->


    <!-- Header Area -->
    @include('logiciel.section.header')

    <!-- Header Area -->


  <!-- =====================================
  ============ Header Area End ============
  ====================================== -->

  @yield('content')
  <!-- =====================================
  ======== Footer Area Start ==========
  ====================================== -->
  @include('logiciel.section.footer')
  <!-- =====================================
  ======== Footer Area End ==========
  ====================================== -->

  <!--Scroll to top-->
  <a href="#" class="scrollToTop">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-90deg-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M4.854 1.146a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L4 2.707V12.5A2.5 2.5 0 0 0 6.5 15h8a.5.5 0 0 0 0-1h-8A1.5 1.5 0 0 1 5 12.5V2.707l3.146 3.147a.5.5 0 1 0 .708-.708l-4-4z"/>
    </svg>
  </a>

  <script src="{{asset("logiciel/assets/js/jquery-3.5.0.min.js")}}"></script>
  <script src="{{asset("logiciel/assets/js/imagesloaded.pkgd.min.js")}}"></script>
  <script src="{{asset("logiciel/assets/js/mmenu-light.js")}}"></script>
  <script src="{{asset("logiciel/assets/js/isotope.pkgd.min.js")}}"></script>
  <script src="{{asset("logiciel/assets/js/owl.carousel.min.js")}}"></script>
  <script src="{{asset("logiciel/assets/js/jquery.waypoints.min.js")}}"></script>
  <script src="{{asset("logiciel/assets/js/jquery.counterup.min.js")}}"></script>
  <script src="{{asset("logiciel/assets/js/vanilla-tilt.min.js")}}"></script>
  <script src="{{asset("logiciel/assets/js/jquery.fancybox.min.js")}}"></script>
  <script src="{{asset("logiciel/assets/js/jquery.barfiller.js")}}"></script>
  <script src="{{asset("logiciel/assets/js/jquery.magnific-popup.min.js")}}"></script>
  <script src="{{asset("logiciel/assets/js/wow.min.js")}}"></script>
  <script src="{{asset("logiciel/assets/js/main.js")}}"></script>
  <script src="{{asset("assets/plugins/sweetalert/sweetalert.min.js")}}"></script>
 <script src="{{asset("assets/plugins/sweetalert/jquery.sweet-alert.custom.js")}}"></script>
</body>
</html>
