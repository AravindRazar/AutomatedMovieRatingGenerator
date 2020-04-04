<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="font-awesome.min.css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>

		<![endif]-->

	</head>


	<body>
		

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">MOVIE REVIEWER</h1>
							<small class="site-description">AUTOMATION REDFINED</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
							
							<li class="menu-item"><a href="review.html">Movie reviews</a></li>
							
						</ul> <!-- .menu -->

						<form action="#" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="row">
							<div class="col-md-9">
								<div class="slider">
									<ul class="slides">
										<li><a href="#"><img src=".\dummy\Argo.jpg" alt="Argo"></a></li>
										<li><a href="#"><img src=".\dummy\Batman.jpg" alt="Batman"></a></li>
										<li><a href="#"><img src=".\dummy\Joker.jpg" alt="Joker"></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="row">
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="#"><img src=".\dummy\Argo.jpg" alt="Movie 1"></a>
										</div>
									</div>
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="#"><img src=".\dummy\Batman.jpg" alt="Movie 2"></a>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- .row -->
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src=".\dummy\Joker.jpg" alt="Movie 3"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src=".\dummy\Catch.jpg" alt="Movie 4"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src=".\dummy\Inception.jpg" alt="Movie 5"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src=".\dummy\Mersal.jpg" alt="Movie 6"></a>
								</div>
							</div>
						</div> <!-- .row -->
						
						<div class="row">
							<div class="col-md-4">
								<h2 class="section-title">December premiere</h2>
								<p>Upcoming</p>
								<ul class="movie-schedule">
									<li>
										<div class="date">7/12/19</div>
										<h2 class="entry-title"><a href="#">Pulp fiction</a></h2>
									</li>
									<li>
										<div class="date">14/12/19</div>
										<h2 class="entry-title"><a href="#">Dark knight Rises</a></h2>
									</li>
									<li>
										<div class="date">21/12/19</div>
										<h2 class="entry-title"><a href="#">Man of steel</a></h2>
									</li>
									<li>
										<div class="date">28/12/19</div>
										<h2 class="entry-title"><a href="#">Avengers</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
							<div class="col-md-4">
								<h2 class="section-title">November premiere</h2>
								<p>Upcoming</p>
								<ul class="movie-schedule">
									<li>
										<div class="date">7/11/19</div>
										<h2 class="entry-title"><a href="#">Thor</a></h2>
									</li>
									<li>
										<div class="date">14/12/19</div>
										<h2 class="entry-title"><a href="#">End game</a></h2>
									</li>
									<li>
										<div class="date">21/12/19</div>
										<h2 class="entry-title"><a href="#">Captain america</a></h2>
									</li>
									<li>
										<div class="date">28/12/19</div>
										<h2 class="entry-title"><a href="#">Comali</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
							<div class="col-md-4">
								<h2 class="section-title">October premiere</h2>
								<p>Upcoming</p>
								<ul class="movie-schedule">
									<li>
										<div class="date">7/10/19</div>
										<h2 class="entry-title"><a href="#">Asuran</a></h2>
									</li>
									<li>
										<div class="date">14/10/19</div>
										<h2 class="entry-title"><a href="#">Nerkonda paarvai</a></h2>
									</li>
									<li>
										<div class="date">21/10/19</div>
										<h2 class="entry-title"><a href="#">BiggBoss</a></h2>
									</li>
									<li>
										<div class="date">28/12/19</div>
										<h2 class="entry-title"><a href="#">SpiderMan</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
						</div>
					</div>
				</div> <!-- .container -->
			</main>
			
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>