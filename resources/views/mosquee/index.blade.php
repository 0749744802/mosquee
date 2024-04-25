<!DOCTYPE html>

<html lang="zxx">

<head>

	<!-- Meta Options -->

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />



	<!-- Title -->

	<title>Homepage 1</title>



	<!-- Bootstrap -->

	<link rel="stylesheet" type="text/css" href="{{asset('mosquee/assets/css/bootstrap.min.css') }}">

	<!-- Favicon -->

	<link rel="icon" type="image/x-icon" href="https://via.placeholder.com/60x50">

	<!-- Slick Slider -->

	<link rel="stylesheet" type="text/css" href="{{asset('mosquee/assets/css/slick.css') }}">

	<!-- Animate -->

	<link rel="stylesheet" type="text/css" href="{{asset('mosquee/assets/css/animate.min.css') }}">


	<!-- Animate on scroll -->

	<link rel="stylesheet" type="text/css" href="{{asset('mosquee/assets/css/aos.css') }}">


	<!-- Fancy Box -->

	<link rel="stylesheet" href="{{asset('mosquee/assets/css/jquery.fancybox.min.css') }}">


	<!-- Stylesheet -->

	<link rel="stylesheet" type="text/css" href="{{asset('mosquee/assets/css/style.css') }}">



	<!-- Colors -->

	<link rel="stylesheet" type="text/css" href="{{asset('mosquee/assets/css/color.css') }}">



	<!-- Responsive -->

	<link rel="stylesheet" type="text/css" href="{{asset('mosquee/assets/css/responsive.css') }}">



</head>

<body>

	<!-- Loader Start -->
	<div class="preloader" id="preloader">
	  <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
	    <path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
	  </svg>
	  <div class="inner">
	    <canvas class="progress-bar" id="progress-bar" width="200" height="200"></canvas>
	    <figure><img src="https://via.placeholder.com/85x110" alt="Image"></figure>
	    <small>Loading</small> </div>
	  <!-- end inner -->
	</div>

	<!-- Loader End -->



	<!-- Header One Start -->

	@include('mosquee.section.header')
	<!-- Header One Start -->

	<!-- Hero One here -->

    @yield('content')

	<!-- Subscribe End -->



	<!-- Footer One Start -->

	@include('mosquee.section.footer')

	<!-- Footer One End -->



	<!-- Scroll to top -->

	<button id="scrollTop" class="scrollTopStick"><svg viewBox="0 0 490.523 490.523" fill="#fff" height="15"> <path style="fill:#FFC107;" d="M487.411,355.047L252.744,120.38c-4.165-4.164-10.917-4.164-15.083,0L2.994,355.047 c-4.093,4.237-3.976,10.99,0.262,15.083c4.134,3.993,10.687,3.993,14.821,0l227.115-227.115l227.115,227.136 c4.237,4.093,10.99,3.976,15.083-0.261c3.993-4.134,3.993-10.688,0-14.821L487.411,355.047z"></path> <path d="M479.859,373.266c-2.831,0.005-5.548-1.115-7.552-3.115L245.192,143.015L18.077,370.151 c-4.237,4.093-10.99,3.976-15.083-0.262c-3.993-4.134-3.993-10.687,0-14.821l234.667-234.667c4.165-4.164,10.917-4.164,15.083,0 l234.667,234.667c4.159,4.172,4.148,10.926-0.024,15.085C485.388,372.146,482.681,373.265,479.859,373.266z"></path> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg></button>

	<!-- Donation Modal -->
	<div class="modal fade donation-model" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="staticBackdropLabel">Donate Now</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <div class="donation-data">

				<h2>Stand Up the Church Climate Crisis</h2>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed totam rem ape eaque.</p>

				<div class="donation-form">

					<div class="custom-donation-amount" ><span class="text-white">$</span> <input class="donated_amount" type="number" placeholder="Custom Amount">

					</div>

					<ul class="list-unstyled aos-init aos-animate">

						<li><a class="donating" href="JavaScript:void(0)">$<span class="donation_amount">5</span></a>

						</li>

						<li><a class="donating" href="JavaScript:void(0)">$<span class="donation_amount">10</span></a>

						</li>

						<li><a class="donating" href="JavaScript:void(0)">$<span class="donation_amount">20</span></a>

						</li>

						<li><a class="donating" href="JavaScript:void(0)">$<span class="donation_amount">30</span></a>

						</li>

					</ul>

					<a class="theme-btn" href="JavaScript:void(0)">Donate Now</a>

				</div>
			</div>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Jquery -->

	<script src="{{asset('mosquee/assets/js/jquery.min.js') }}"></script>


	<!-- Waypoint -->

	<script src="{{asset('mosquee/assets/js/jquery.waypoints.min.js') }}"></script>



	<!-- Counter -->

    <script src="{{asset('mosquee/assets/js/jquery.counterup.min.js') }}"></script>



    <!-- Slick Slider Js -->

	<script src="{{asset('mosquee/assets/js/slick.min.js') }}"></script>



	<!-- Animate on scroll Js -->

	<script src="{{asset('mosquee/assets/js/aos.js') }}"></script>

	<!-- Fontawesome Js -->

	<script src="{{asset('mosquee/assets/js/fontawesome.js') }}"></script>



	<!-- Fancybox Js -->

	<script src="{{asset('mosquee/assets/js/jquery.fancybox.min.js') }}"></script>

	<!-- Bootstrap Js -->

	<script src="{{asset('mosquee/assets/js/bootstrap.min.js') }}"></script>


	<!-- Custom Js -->

	<script src="{{asset('mosquee/assets/js/custom.js') }}"></script>


</body>

</html>
