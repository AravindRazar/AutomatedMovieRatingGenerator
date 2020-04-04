<?php 
include('viewRatings.php') 
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
							<span>The dark knight</span>
						</div>

						<div class="content">
							<div class="row">
								<div class="col-md-6">
									<figure class="movie-poster"><img src=".\dummy\Batman.jpg" alt="#"></figure>
								</div>
								<div class="col-md-6">
									<h2 class="movie-title">The Dark Knight</h2>
									<div class="movie-summary">
										<p>The Dark Knight is a 2008 superhero film directed, co-produced, and co-written by Christopher Nolan. Based on the DC Comics character Batman, the film is the second installment of Nolan's The Dark Knight Trilogy and a sequel to 2005's Batman Begins, starring Christian Bale and supported by Michael Caine, Heath Ledger, Gary Oldman, Aaron Eckhart, Maggie Gyllenhaal, and Morgan Freeman. In the film, Bruce Wayne / Batman (Bale), Police Lieutenant James Gordon (Oldman) and District Attorney Harvey Dent (Eckhart) form an alliance to dismantle organized crime in Gotham City, but are menaced by an anarchistic mastermind known as the Joker (Ledger), who seeks to undermine Batman's influence and turn the city to chaos.</p>

										<p>CAST :Christian Bale as Bruce Wayne / Batman,Michael Caine as Alfred Pennyworth,Heath Ledger as The Joker,Gary Oldman as James Gordon,Aaron Eckhart as Harvey Dent,Maggie Gyllenhaal as Rachel Dawes,Morgan Freeman as Lucius Fox
										</p>
										<input type="button" value="Enter Rating" onclick="window.location.href='comment.php'" />
										
										<form method="post" action="viewRatings.php">
             								   <button type="" class="btn" name="viewRatings">ViewRatings</button>
        								</form>
									</div>
									
								</div>
							</div> <!-- .row -->
							<div class="entry-content">
								<p>A gang of criminals rob a Gotham City mob bank, murdering each other for a higher share of the money until only the Joker remains, who escapes with the money. Batman, District Attorney Harvey Dent and Lieutenant James Gordon form an alliance to rid Gotham City of organized crime. Bruce Wayne believes that with Dent as Gotham's protector, he can retire from being Batman and lead a normal life with Rachel Dawes – even though she and Dent are dating.</p><p>Mob bosses Sal Maroni, Gambol, and the Chechen hold a video conference with their corrupt accountant, Lau, who has taken their funds for safekeeping and fled to Hong Kong. The Joker interrupts the meeting to warn them that Batman is unhindered by the law, and offers to kill him in exchange for half of their money. The mob bosses disagree, and Gambol places a bounty on the Joker. The Joker finds and kills Gambol, taking over his gang. The mob decides to take the Joker up on his offer.</p><p>Batman finds Lau in Hong Kong and brings him back to Gotham to testify, allowing Dent to apprehend the entire mob. The Joker threatens to kill people unless Batman reveals his identity, and starts by murdering Police Commissioner Gillian B. Loeb and the judge presiding over the mob trial. The Joker also tries to kill Mayor Anthony Garcia, but Gordon sacrifices himself to stop the assassination. Dent kidnaps one of Joker's henchmen and threatens him with a seemingly deadly game of heads or tails until Batman intervenes, warning Dent that all the criminals he has convicted would be released if anyone found out. Dent learns that Rachel is Joker's next target.</p><p>Bruce decides to reveal his secret identity to prevent more deaths. Before he can, however, Dent falsely announces that he is Batman to lure the Joker out. Dent is taken into protective custody, but the Joker appears and attacks the convoy. Batman comes to Dent's rescue and Gordon, who faked his death, apprehends the Joker, securing a promotion to Commissioner. Rachel and Dent are escorted away by detectives on Maroni's payroll; Gordon later learns that they never arrived home. Batman interrogates the Joker, who reveals that they have been trapped in separate locations rigged with explosives and that Batman must choose one to save. Batman races to save Rachel, while Gordon attempts to rescue Dent. Batman arrives at the building, but realizes that the Joker has sent him to Dent's location instead. Both buildings explode, killing Rachel and disfiguring Dent. The Joker escapes with Lau, who leads him to the Mob's funds. The Joker burns his share of the money and kills Lau and the Chechen.</p>
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