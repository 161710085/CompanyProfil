<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Flexio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{asset('welcome/css/main.css')}}" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="wel" class="logo"><strong>Flexio</strong> Moccasin</a>
					<nav id="nav">
						<a href="{{ route('login') }}">Login</a>
						<a href="{{ route('register') }}">Register</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Welcome to Projection</h1>
					</header>

					<div class="flex ">

						<div>
							<span class="icon fa-car"></span>
							<h3>Aliquam</h3>
							<p>Suspendisse amet ullamco</p>
						</div>

						<div>
							<span class="icon fa-camera"></span>
							<h3>Elementum</h3>
							<p>Class aptent taciti ad litora</p>
						</div>

						<div>
							<span class="icon fa-bug"></span>
							<h3>Ultrices</h3>
							<p>Nulla vitae mauris non felis</p>
						</div>

					</div>

					<footer>
						<a href="#" class="button">Get Started</a>
					</footer>
				</div>
			</section>


		<!-- Three -->
			
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h3>Flexio Moccasin</h3>


				@include('partial.footer')

				</div>
			</footer>

		<!-- Scripts -->
			<script src="{{asset('welcome/js/jquery.min.js')}}"></script>
			<script src="{{asset('welcome/js/skel.min.js')}}"></script>
			<script src="{{asset('welcome/js/util.js')}}"></script>
			<script src="{{asset('welcome/js/main.js')}}"></script>

	</body>
</html>