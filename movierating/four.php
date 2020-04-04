<?php 
include('viewRatings3.php') 
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
							<span>Mersal</span>
						</div>

						<div class="content">
							<div class="row">
								<div class="col-md-6">
									<figure class="movie-poster"><img src=".\dummy\Mersal.jpg" alt="#"></figure>
								</div>
								<div class="col-md-6">
									<h2 class="movie-title">Mersal</h2>
									<div class="movie-summary">
										<p>Mersal (transl. zapped) is a 2017 Indian Tamil-language action thriller film[5] directed by Atlee and co-written by Atlee, K. V. Vijayendra Prasad and S. Ramana Girivasan (dialogues). The film stars Vijay in a triple role as a father and his two sons alongside Nithya Menen, Samantha, and Kajal Aggarwal. The background score and soundtrack were composed by A. R. Rahman, while the cinematography was done by G. K. Vishnu and edited by Ruben. The story revolves around two twin brothers in which one is a magician avenging for his father's death and medical crimes. The other one is a reputed doctor who charges meagre amounts from his patients.</p>
									</div>
										<input type="button" value="Enter Rating" onclick="window.location.href='comment3.php'" />
										
										<form method="post" action="viewRatings3.php">
             								   <button type="" class="btn" name="viewRatings3">ViewRatings</button>
        								</form>
								</div>
							</div> <!-- .row -->
							<div class="entry-content">
								<p>An ambulance driver, a broker, a hospital human resources worker, and a surgeon are abducted under mysterious circumstances at dawn. The abductions are traced to Dr. Maaran, a world-famous doctor from Chennai known for providing ₹5 treatment to patients of all sections of society. Maaran is arrested and interrogated by Ratnavel "Randy", a police officer who is assigned the abduction case. Maaran explains his motive for the abductions; the four were responsible for the death of an auto driver's school-going daughter and his wife due to their greed for money in the name of providing proper healthcare. He adds that he had also killed all of them while they were in his captivity.</p><p>At this juncture, Maaran reveals that he is not Maaran but is his doppelgänger Vetri, a magician who was responsible for the death of Dr. Arjun Zachariah, a corrupt doctor who was killed during a stage performance in Paris two years earlier. Vetri further adds that he had saved Maaran from getting killed by the henchmen of Dr. Daniel Arockiyaraj, another corrupt doctor who had been associated with Arjun and sees Maaran's inexpensive healthcare as a threat to his flourishing hospital business, and had kept him safely in his hideout while taking his place and willingly getting himself arrested. Maaran is rescued, while Vetri, with the help of his magic tricks, manages to escape from Randy.</p><p>Later, Maaran confronts Vetri and fights him, believing him to be the cause of all his problems with the law as well as with Daniel, who had threatened Maaran to reveal the location of Vetri while keeping his mother Sarala and fiancée Tara hostage. Vadivu, Maaran's compounder and also Vetri's assistant, intervenes in their fight and explains to Maaran why Vetri is targeting doctors indulging in corrupt medical practices in general and Daniel and Arjun in particular.</p><p>Maaran was the elder son of Vetrimaaran, a village wrestler who had established a hospital with the help of Daniel and Arjun in his village Manoor in Madurai district 30 years earlier as there was no hospital in his village because of which all the villagers had to go to Madurai to seek treatment. Daniel and Arjun were also made as the chief doctors of the hospital.</p><p>However, it soon turns out that Daniel and Arjun were money-minded crooks and performed a Caesarean section on Vetrimaaran's wife Aishwarya "Ice" when she was in labour with her second child, with the intention of extracting more money from Vetrimaaran, even though she could deliver the child normally. Ice lost a lot of blood during the operation, and that, along with an overdose of anesthesia, led to her death, while the child was declared stillborn. When Vetrimaaran found out how Ice had died, he went to confront Daniel, but he and Maaran were attacked by Daniel's henchmen. Vetrimaaran was stabbed to death by one of Daniel's henchmen, but just before he died, he placed an unconscious Maaran (who had been struck on the head with a glass bottle by Daniel's henchman) safely on a Chennai-bound lorry. Due to the impact the glass bottle had on his head, Maaran lost his memory and is unable to recollect anything that happened before he was hit on the head.</p>
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