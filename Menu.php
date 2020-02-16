<?php
session_start();
$_SESSION['page'] = "menu";

?>


<!DOCTYPE html>
<html lang="en">
<head>	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Menu </title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- MD for Bootstrap -->
	<link rel="stylesheet" href="css/mdb.min.css">

	<!-- Awesome Font(Icons) -->
	<link href="fontawesome/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Michelle -->
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Sofia'>
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>	
	<!--Login Modal -->
	<?php include('login-modal.php'); ?>
	<!-- Menu banner -->
	<section class="cover text-center" id="menu-banner" >
	<!-- Nav bar -->
		<!-- In reference to https://www.codeply.com/go/QAXbNGbWPA/bootstrap-4-navbar-transparent -->
		<?php include('navbar.php'); ?>
		<div class="cover-container pt-5 mt-5">
			<div class="cover-inner container justify-content-center">
				<h1 class="heading mb-3 py-4">Delicious &amp; Fresh</h1>
				<p class="sub-heading pt-5">The only thing we love more than food is you!</p>
			  </div> 		  
		</div>
	</section>
	<!-- End -->

	<!-- Menu -->
	<div class = "container-fluid">
		<!-- Sushi -->
		<div class = "row justify-content-center">
			<div class = "col-xs-12"> 
				<h1> Sushi </h1>
			</div>
		</div>
		<div class = "row align-content-center">
			<div class="card-deck">
				<div class = "col-xs-2 mx-auto mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/salmon_sushi.jpg" alt="Salmon sushi">
						<div class="card-body">
							<h2 class="card-title text-center"> Salmon Sushi </h2>
							<!-- p class="card-text"-->
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM4.80 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/california-rol.jpg" alt="California roll">
						<div class="card-body">
							<h2 class="card-title text-center"> California roll </h2>
							<!-- p class="card-text"-->
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM2.80 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/california-sushi-roll-with-tuna.jpg" alt="California Roll with Tuna">
						<div class="card-body">
							<h2 class="card-title text-center"> California roll with tuna </h2>
							<!-- p class="card-text"-->
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM4.80 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/shrimp-sush.jpg" alt="Shrimp sushi">
						<div class="card-body">
							<h2 class="card-title text-center"> Shrimp sushi </h2>
							<!-- p class="card-text"-->
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM4.80 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/avocado_roll.jpg" alt="Avocado roll">
						<div class="card-body">
							<h2 class="card-title text-center"> Avocado roll </h2>
							<!-- p class="card-text"-->
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM2.80 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/inari-nigiri.png" alt="Inari Nigiri">
						<div class="card-body">
							<h2 class="card-title text-center"> Inari Nigiri </h2>
							<!-- p class="card-text"-->
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM1.80 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/salmon-roll.jpg" alt="Salmon roll">
						<div class="card-body">
							<h2 class="card-title text-center"> Salmon roll </h2>
							<!-- p class="card-text"-->
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM3.80 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/ika-nigiri.jpg" alt="Ika Nigiri">
						<div class="card-body">
							<h2 class="card-title text-center"> Ika Nigiri </h2>
							<!-- p class="card-text"-->
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM4.80 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/sushi.jpg" alt="Octopus sushi">
						<div class="card-body">
							<h2 class="card-title text-center"> Octopus sushi </h2>
							<!-- p class="card-text"-->
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM3.80 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!-- End -->
		
		<!-- Agemono -->
		<div class = "row justify-content-center">
			<div class = "col-xs-12"> 
				<h1> Agemono </h1>
			</div>
		</div>
		<div class = "row align-content-center">
			<div class="card-deck">
				<div class = "col-xs-2 mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/chicken-karaage.jpg" alt="Chicken karaage">
						<div class="card-body">
							<h2 class="card-title text-center"> Chicken karaage </h2>
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM7.80 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/Vegetable-tempura.jpg" alt="Vegetable tempura">
						<div class="card-body">
							<h2 class="card-title text-center"> Vegetable tempura </h2>
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM8.80 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/deepfried-sushi-roll.jpg" alt="Deepfried sushi roll">
						<div class="card-body">
							<h2 class="card-title text-center"> Deepfried sushi roll </h2>
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM10.60 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/soft-shell-crab.jpg" alt="Deepfried soft shell crab">
						<div class="card-body">
							<h2 class="card-title text-center"> Deepfried soft shell crab </h2>
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM8.60 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/shrimp-tempura.jpg" alt="Shrimp tempura">
						<div class="card-body">
							<h2 class="card-title text-center"> Shrimp tempura </h2>
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM14.60 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/fried-oysters.jpg" alt="Deepfried oysters">
						<div class="card-body">
							<h2 class="card-title text-center"> Deepfried oysters </h2>
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM12.60 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End -->
		
		<!-- Dessert -->
		<div class = "row justify-content-center">
			<div class = "col-xs-12"> 
				<h1> Dessert </h1>
			</div>
		</div>
		<div class = "row align-content-center">
			<div class="card-deck">
				<div class = "col-xs-2 mx-auto"> 
					<div class="card card-cascade narrower">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/mochi.jpg" alt="Mochi">
						<div class="card-body">
							<h2 class="card-title text-center"> Mochi </h2>
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM9.00 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/strawberry-crepe.jpg" alt="Strawberry crepe">
						<div class="card-body">
							<h2 class="card-title text-center"> Strawberry crepe </h2>
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM12.60 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/anmitsu.jpg" alt="Anmitsu">
						<div class="card-body">
							<h2 class="card-title text-center"> Anmitsu </h2>
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM10.60 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span></i></button>
						</div>
					</div>
				</div>
				<div class = "col-xs-2 mx-auto"> 
					<div class="card">
						<img class="card-img-top img-fluid animated pulse" src="images/menu/custard-pudding.jpg" alt="Custard pudding">
						<div class="card-body">
							<h2 class="card-title text-center"> Custard pudding </h2>
						</div>
						<div class="card-footer text-center">
							<span class="pricing"> RM6.00 </span>
							<button type="button" class="btn peach-gradient"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"> <span class="hidden"> Order </span> </i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End -->
	</div>
	<footer class="footer-hidden">
		<div class="overlay">
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xs-12 d-none d-lg-block">
					<h3 class=" pb-2"> Sushi Sama</h3>
					<p> Copyright reserved &copy;</p>
				</div>
				<div class="col-lg-2 col-xs-12 d-none d-lg-block">
					<a href="home.html"> <i class="fa fa-5x fa-home"></i> </a>
					<p class= "px-3 py-2"> Home</p>
				</div>
				<div class="col-lg-2 col-xs-12 d-none d-lg-block">
					<a href="menu.html"> <i class="fa fa-5x fa-cutlery"></i> </a>
					<p class= "px-3 py-2"> Menu</p>
				</div>
				<div class="col-lg-2 col-xs-12 d-none d-lg-block">
					<a href="career.html"> <i class="fa fa-5x fa-briefcase"></i> </a>
					<p class= "px-3 py-2"> Career</p>
				</div>
				<div class="social-media col-lg-3 col-xs-12 d-none d-sm-block">
					<p>Find us here:</p>
					<button type="button" class="btn peach-gradient"><i class="fa fa-2x fa-facebook"></i></button>
					<button type="button" class="btn peach-gradient"><i class="fa fa-2x fa-instagram"></i></button>
					<button type="button" class="btn peach-gradient"><i class="fa fa-2x fa-twitter"></i></button>				
				</div>
			</div>		
		</div>
	</footer>
</body>
</html>