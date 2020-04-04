<?php 
include('viewRatings1.php') 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review | Single</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

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
							<h1 class="site-title">Movie Reviewer</h1>
							<small class="site-description">Automation redfined</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item current-menu-item"><a href="review.html">Movie reviews</a></li>
							
						</ul> <!-- .menu -->

						<form action="#" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>n><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index.html">Home</a>
							<a href="review.html">Movie Review</a>
							<span>Joker</span>
						</div>

						<div class="content">
							<div class="row">
								<div class="col-md-6">
									<figure class="movie-poster"><img src=".\dummy\Joker.jpg" alt="#"></figure>
								</div>
								<div class="col-md-6">
									<h2 class="movie-title">Joker</h2>
									<div class="movie-summary">
										<p>Joker is a 2019 American psychological thriller film directed by Todd Phillips, who co-wrote the screenplay with Scott Silver. The film, based on DC Comics characters, stars Joaquin Phoenix as the Joker. An origin story set in 1981, the film follows Arthur Fleck, a failed stand-up comedian who turns to a life of crime and chaos in Gotham City. Robert De Niro, Zazie Beetz, Frances Conroy, Brett Cullen, Glenn Fleshler, Bill Camp, Shea Whigham, and Marc Maron appear in supporting roles. Joker was produced by Warner Bros. Pictures in association with Village Roadshow Pictures, and distributed by Warner Bros. Pictures. </p>

										
									</div>
									
								</div>
									<input type="button" value="Enter Rating" onclick="window.location.href='comment1.php'" />
										
										<form method="post" action="viewRatings1.php">
             								   <button type="" class="btn" name="viewRatings1">ViewRatings</button>
        								</form>
							</div> <!-- .row -->
							<div class="entry-content">
								<p>In 1981, party clown Arthur Fleck lives with his mother, Penny, in Gotham City. Gotham is rife with crime and unemployment, leaving segments of the population disenfranchised and impoverished. Arthur suffers from a neurological disorder that causes him to laugh at inappropriate times and depends on a social services worker for medication. After a gang attacks him in an alley, Arthur's co-worker, Randall, lends him a gun. Arthur invites his neighbor, single mother Sophie, to his stand-up comedy show, and they begin dating.</p><p>While entertaining at a children's hospital, Arthur's gun falls out of his pocket. Arthur is fired and Randall lies that Arthur bought the gun himself. On the subway, still in his clown makeup, Arthur is beaten by three drunken Wayne Enterprises businessmen; he shoots two in self-defense and executes the third. The murders are condemned by billionaire mayoral candidate Thomas Wayne, who labels those envious of more successful people as "clowns". Demonstrations against Gotham's rich begin, with protesters donning clown masks in Arthur's image. Funding cuts shutter the social service program, leaving Arthur without medication.</p><p>Arthur's comedy show goes poorly; he laughs uncontrollably and has difficulty delivering his jokes. Talk show host Murray Franklin mocks Arthur by showing clips from the routine on his show. Arthur intercepts a letter written by Penny to Thomas, alleging that he is Thomas's illegitimate son, and berates his mother for hiding the truth. At Wayne Manor, Arthur talks to Thomas' young son, Bruce, but flees after a scuffle with butler Alfred Pennyworth. Following a visit from two Gotham City Police Department detectives investigating Arthur's involvement in the train murders, Penny suffers a stroke and is hospitalized.</p><p>At a public event, Arthur confronts Thomas, who tells him that Penny is delusional. In denial, Arthur visits Arkham State Hospital and steals Penny's case file; the file says Penny adopted Arthur as a baby and allowed her abusive boyfriend to harm them both. Penny alleged that Thomas used his influence to fabricate the adoption and commit her to the asylum to hide their affair. Distraught, Arthur goes to the hospital and kills Penny. He enters Sophie's apartment unannounced. Frightened, Sophie tells him to leave; their previous encounters are revealed to have been Arthur's delusions.</p><p>Arthur is invited to appear on Murray's show due to the unexpected popularity of his routine clips. As he prepares, he is visited by his former co-workers Gary and Randall. Arthur murders Randall but leaves Gary unharmed for treating Arthur well in the past. En route to the studio, Arthur is pursued by the two detectives onto a train filled with clown protesters. One accidentally shoots a protester and incites a riot while Arthur escapes in the chaos.</p>
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