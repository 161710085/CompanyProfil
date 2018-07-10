<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UFO 404 Error Page</title>
    <meta name="description" content="">
	<meta name="keywords" content="">

    <!-- Le styles -->
    <link href="{{asset('404/css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="favicon.ico">
  </head>

  <body>
		
		<div class="field">
			<div class="wrapper">
				<div class="ufo-text">
					<img src="{{asset('404/images/oh-no.png')}}" class="oh-no" alt="">
					<h1>This page has been Abducted!</h1>
					<span class="lines">Please GO BACK</span>
					
					<div class="menu">
						<nav>
							<ul>
								<li><a href="{{ route('home') }}">Home</a></li>
								
							</ul>
						</nav>
					</div>
					
					<div class="search">
						<form>
							<input type="text" placeholder="Start your search here">
							<button type="submit"></button>
						</form>
					</div>
				</div>
				<img src="{{asset('404/images/light.png')}}" class="light" alt="">
				<img src="{{asset('404/images/ufo.png')}}" class="ufo" alt="">
				<img src="{{asset('404/images/smoke.png')}}" class="smoke" alt="">
				
				<div class="footer">
					<nav>
						<ul>
							<li><a href="" class="icn fb"></a></li>
							<li><a href="#" class="icn tw"></a></li>
							<li><a href="#" class="icn ln"></a></li>
							<li><a href="#" class="icn gp"></a></li>
						</ul>
					</nav>
					<span class="copy">UFO404PAGE.COM ALL RIGHT RESERVED.</span>
				</div>
			</div>
		</div>
		
		<script src="{{asset('404/js/jquery-1.11.3.min.js')}}"></script>
		<script src="{{asset('404/js/jquery.placeholder.js')}}"></script>
		<script src="{{asset('404/js/custom.js')}}"></script>
  </body>
</html>
