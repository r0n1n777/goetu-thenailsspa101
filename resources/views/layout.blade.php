<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">

		<title>@yield('title')</title>
		<meta name="description" content="Welcome to Nails Spa 101 where you will find the best services with luxury atmosphere. Your relaxation is our mission.">
		<meta name="keywords" content="nails,spa,manicure,pedicure,wax,kids manicure,kids pedicure,nail salon near me,phoenix arizona,phoenix az">
		<meta name="theme-color" content="#000">
	
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		<link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	</head>

	<body>
		<div id="topbar" class="d-flex align-items-center sticky-top">
			<div class="container">
				<div class="row contact-info d-flex align-items-center">
					<i class="col-lg-3 col-md-3 bi bi-phone d-flex align-items-center"><span>(602) 971-7400</span></i>
					<i class="col-lg-9 col-md-9 bi bi-clock d-flex align-items-center text-nowrap"><span>Mon-Fri: 9:00AM - 6:00PM | Sat: 9:00AM - 5:00PM | Sun: Closed</span></i>
				</div>
			</div>
		</div>

		<header id="header" class="fixed-top d-flex align-items-center">
			<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
				<div class="d-flex align-items-center">
					<a href="{{ route('home') }}" class="logo me-auto me-lg-0">
						<img src="{{ asset('images/logo.webp') }}" alt="Nails Spa 101 logo" class="img-fluid">
					</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<h1 class="logo me-auto me-lg-0">
						<a href="{{ route('home') }}">Nails Spa 101</a>
					</h1>
				</div>

				<nav id="navbar" class="navbar order-last order-lg-0">
					<ul>
						<li><a class="nav-link scrollto @if (request()->is('/')) active @endif" href="{{ route('home') }}">Home</a></li>
						<li><a class="nav-link scrollto @if (request()->is('about')) active @endif" href="{{ route('about') }}">About</a></li>
						<li><a class="nav-link scrollto @if (request()->is('services')) active @endif" href="{{ route('services') }}">Services</a></li>
						<li><a class="nav-link scrollto @if (request()->is('gallery')) active @endif" href="{{ route('gallery') }}">Gallery</a></li>
						<li><a class="nav-link scrollto @if (request()->is('contact')) active @endif" href="{{ route('contact') }}">Contact</a></li>
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				</nav>

				<a href="https://salons.go3reservation.com/nails-spa-101-4326-e-cactus-rd-phoenix-arizona?fbclid=IwAR1B14x9ufK7oHJLqdHddZva7wHVLQadT4kPnOxr64Nbo10NjluHRCf2Kds" class="book-a-table-btn scrollto d-none d-lg-flex" target="_blank">Book Online</a>
			</div>
		</header>

		@yield('content')

		<footer id="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="footer-info">
								<img src="{{ asset('images/logo.webp') }}" alt="Nails Spa 101 logo" width="100px">
								<br><br>
								<h3>Nails Spa 101</h3>
								<p>Your relaxation is our mission. Welcome to Nails Spa 101 where you will find the best services with luxury atmosphere.</p>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 footer-links">
							<h4>
								<x-feathericon-map-pin/> Location
							</h4>
							<p>
								4326 E Cactus Rd,<br>
								Phoenix, AZ 85032<br><br>
							</p>
						</div>

						<div class="col-lg-3 col-md-6 footer-links">
							<h4>
								<x-feathericon-info/> Business Contact
							</h4>
							<p>	
								<strong>Phone:</strong> (602) 971-7400<br>
								<strong>Email:</strong> azrael85017@gmail.com<br>
							</p>
						</div>

						<div class="col-lg-3 col-md-6 footer-newsletter">
							<h4>
								<x-feathericon-star/> Follow us
							</h4>
							<div class="social-links mt-3">
								<a href="https://www.facebook.com/Nailspa101" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
								<a href="https://www.instagram.com/nailsspa101" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
								<a href="https://www.yelp.com/biz/nails-spa-101-phoenix" class="google-plus" target="_blank"><i class="bx bxl-yelp"></i></a>
								<a href="https://www.google.com/search?sxsrf=APq-WBsIdFU6HIpdFZgEQuDD0KUdIZ62Kg:1648850895497&q=nails%20spa%20101&sa=X&ved=2ahUKEwiipaef8PP2AhWR8HMBHb3YDJAQvS56BAgSEAE&biw=727&bih=687&dpr=1.1&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:14&tbm=lcl&rflfq=1&num=10&rldimm=5039173566369058363&lqi=Cg1uYWlscyBzcGEgMTAxSOXMvLryrICACFobEAAQARACGAAYARgCIg1uYWlscyBzcGEgMTAxkgEKbmFpbF9zYWxvbg&rlst=f#lrd=0x872b73b05c2c4459:0x45eebda8f0f74e3b,1,,,&rlfi=hd:;si:5039173566369058363,l,Cg1uYWlscyBzcGEgMTAxSOXMvLryrICACFobEAAQARACGAAYARgCIg1uYWlscyBzcGEgMTAxkgEKbmFpbF9zYWxvbg;mv:[[33.6381924,-111.9746763],[33.597383799999996,-112.2439186]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:14" class="linkedin" target="_blank"><i class="bx bxl-google"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<div id="preloader"></div>
		<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
			<i class="bi bi-arrow-up-short"></i>
		</a>

		<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
		<script src="{{ asset('assets/js/main.js') }}"></script>
	</body>
</html>