<!DOCTYPE html>
<html lang="en">
<head>
		<title>About</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Cache-control" content="no-cache">
		
<!-- 			Fevicons		--> <!-- Animated GIF will work only in Firefox, Rest Fixed Image -->
	<link rel="icon" type="image/gif" href="images/crop_fevicon.gif">
	
<!-- Bootstrap 4.5 CSS Link -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- Bootstrap 4.5 jQuery, Popper.js and JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- My Own CSS -->
		<link rel="stylesheet" href="css/mainStyle.css">
<!-- My own JS -->
<!--		<script src="js/index.js"></script> -->

</head>
<body onload="showSlides()">
	<header>
		<h1> Harvest Horizons</h1>
		<nav class="navbar navbar-expand-md navbar-light">
					<button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#myNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="navbar navbar-nav">
						<li><a class="active onScreen Home" href="index.php">Home</a></li>
						<li class="dropdown">
<!-- aria-expanded tells that is dropdown menu is open or not-->
							<a class="dropdown-toggle onScreen " data-toggle="dropdown" href="#" aria-expanded="false">Crop Prediction</a>
							<ul class="dropdown-menu">
								<li><a href="manual_entry.php">Entering Values Manually</a></li>
								<li><a href="viaBot.php">By using Agriculture Car</a></li>
							</ul>
						</li>
						<li><a class="onScreen FAQ" href="faq.php">FAQ</a></li>
					</ul>
				</div>
		</nav>
<!-- Search Button -->
		<form class="search_button" action="search_results.php" method = "post">
			<input type="text" class="form-control" name="search_item" placeholder="Search Crop Name">
			<button class="btn btn-secondary" type="submit" >
					<svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
						<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
					</svg>
			</button>
		</form>
		
	</header>
	<main>
	<br />
	<div class="container indexDiv">
			<div class=="row">
				<br />
				<h2>About</h2>
				<br>
				<h4>Purpose of this website?</h4>
				<p>This website is created for telling the users what crop they can grow. The user only needs to specify some details and the
				   website will predict what crops are the best option for the user to grow.
				</p>
				<br/>
				<h4>What options do the user get?</h4>
				<p> The user gets <strong>TWO</strong> options to fill the input and get predictions:<br>
					<ul>
						<li>Enter Values Mannually</li>
						<li>Use of a Agriculture Robot who can provide the values to the website</li>
					</ul>
				</p>
				<br/>
			</div>
	</div>
	</main>
	<footer style="margin-top:15%">
		<div class="row">
			<div class="column"> 
				<p>
					<img src="images/leafLogo.png" alt="Logo"/>
					Created by Shrey Suri 
				</p>
			</div>
			<div class="column"> 
				<h3>Other</h3>
				<h5><a href="#" class="footer-named-link">About</a></h5>
			</div>
			<div class="column"> 
				<h3>Social Media</h3>
				<a href="https://www.linkedin.com/in/shrey-suri/">
					<img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dc0002f2b676eb4ba0869_LinkedIn%20Icon.svg" alt="LinkedIn Icon" class="social-network-icons">
				</a>
				<a href="https://github.com/rayin19">
					<img src="images/Github_logo.png" alt="GitHub Icon" class="github-icon social-network-icons" >
				</a>
			</div>
		</div>
	</footer>
</body>
</html>