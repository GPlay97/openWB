<!DOCTYPE html>
<html lang="en">

<head>
	<script src="js/jquery-1.11.1.min.js"></script>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OpenWB</title>
	<meta name="description" content="Control your charge" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Kevin Wieland" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>


<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h3> OpenWB Ladelog </h3>
				</div>
			</div>
			<br><br>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<button onclick="window.location.href='./index.php'" class="btn btn-primary btn-blue">Zurück</button>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-xs-12 text-center">
				<div class="col-xs-2 text-center" style="font-size: 1vw">
					Startzeit
				</div>	
				<div class="col-xs-2 text-center" style="font-size: 1vw">
					Endzeit
				</div>
				<div class="col-xs-2 text-center" style="font-size: 1vw">
					Geladene km
				</div>	
				<div class="col-xs-2 text-center" style="font-size: 1vw">
					Geladene kWh
				</div>	
				<div class="col-xs-2 text-center" style="font-size: 1vw">
					Durchschnittliche Ladeleistung kW
				</div>	
				<div class="col-xs-1 text-center" style="font-size: 1vw">
					Ladedauer
				</div>	
				<div class="col-xs-1 text-center" style="font-size: 1vw">
					Ladepunkt
				</div>	
	</div>
</div>
<hr>	
<?php
$file = fopen('ladelog', 'r');
while (($logarray = fgetcsv($file)) !== FALSE) {
	echo '<div class="row">';
		echo '<div class="col-xs-12 text-center">';
			echo '<div class="col-xs-2 text-center" style="font-size: 1.5vw">';
				print_r($logarray[0]);
			echo '</div>';
			echo '<div class="col-xs-2 text-center" style="font-size: 1.5vw">';
				print_r($logarray[1]);
			echo '</div>';
			echo '<div class="col-xs-2 text-center" style="font-size: 1.5vw">';
				print_r($logarray[2]);
			echo '</div>';
			echo '<div class="col-xs-2 text-center" style="font-size: 1.5vw">';
				print_r($logarray[3]);
			echo '</div>';
			echo '<div class="col-xs-2 text-center" style="font-size: 1.5vw">';
				print_r($logarray[4]);
			echo '</div>';
			echo '<div class="col-xs-1 text-center" style="font-size: 1.5vw">';
				print_r($logarray[5]);
			echo '</div>';
			echo '<div class="col-xs-1 text-center" style="font-size: 1.5vw">';
				print_r($logarray[6]);
			echo '</div>';

		echo '</div>';
	echo '</div>';
	echo '<hr>';
	  }
	  fclose($file);

?>


	</div>


 <button onclick="window.location.href='./index.php'" class="btn btn-primary btn-blue">Zurück</button>
<br><br>

</div>
	</section>


	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
	<script type='text/javascript'>









</body>






</html>
