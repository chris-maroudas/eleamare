<?php
function curPageName()
{
	return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}

$pageName = curPageName();
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel='stylesheet' href='css/reset.css'/>
	<link rel='stylesheet' href='css/style.css'/>
	<link rel='stylesheet' href='css/responsiveslides.css'/>
	<link rel='stylesheet' href='css/demo.css'/>
	<!--
	<link rel="stylesheet" href="css/style-tablet.css" media="screen and (max-width: 960px)" />
	<link rel="stylesheet" href="css/style-mobile.css" media="screen and (max-width: 640px)" />
	-->
	<!-- Typekit embed-->
	<script type="text/javascript" src="//use.typekit.net/rcj1xkb.js"></script>
	<script type="text/javascript">try {
		Typekit.load();
	} catch (e) {
	}</script>
</head>
<body>
<div id="header">
	<ul class="rslides" id="slider1">
		<li><img src="images/slider1.jpg" alt=""></li>
		<li><img src="images/slider2.jpg" alt=""></li>
		<li><img src="images/slider3.jpg" alt=""></li>
	</ul>
	<div class="wrapper">
		<div id="menu">
			<div id="logo">
				<h1>elea mare<span>hotel</span></h1>
			</div>
			<!-- CHRIS -->
			<ul id="nav">
				<li><a href="#">Το ξενοδοχείο</a></li>
				<li><a href="#">Διαμονή</a></li>
				<li><a href="#">Υπηρεσίες</a></li>
				<li><a href="#">Η περιοχή</a></li>
				<li><a href="#">Φωτογραφίες</a></li>
				<li><a href="#">Επικοινωνία</a></li>
			</ul>
			<!-- END CHRIS-->
		</div>
	</div>
	<div id="header_social">
		<div class="wrapper">
		</div>
	</div>
</div>
<!-- Chris -->
<div id="content">
	<div class="left_box">
		<h2>Ένας ηλιόλουστος παράδεισος οικογενειακών διακοπών</h2>

		<p>Στην Ελιά, ένα γραφικό ψαροχώρι που ανήκει στο Δήμο Μονεμβασίας, σε ένα ήσυχο
			και φιλικό περιβάλλον 20 μέτρα από τη θάλασσα, βρίσκεται το ξενοδοχείο Elea Mare</p>

		<p>Η τοποθεσία είναι ιδανική, με καταπληκτική θέα στη θάλασσα, απολαυστικό ηλιοβασίλεμα και άμεση πρόσβαση στην
			παραλία.</p>

		<p>Απέχει 400 μέτρα απο το κέντρο του οικισμού και βρίσκεται σε θέση που προσφέρεται για περιήγηση σε όλες τις
			όμορφες και ιστορικές περιοχές του Νομού Λακωνίας</p>
		<img src="images/elea_hotel.jpg" alt="Elea mare hotel"/>
		<img src="images/elea_parking.jpg" alt="Elea mare hotel"/>
		<img src="images/elia_thalassa.jpg" alt="Elea mare hotel"/>
	</div>
	<div class="right_box">
		<img src="images/elia_deksia.jpg" alt="Elea mare hotel"/>

		<p>Το ξενοδοχείο διαθέτει 22 studios εκ των οποίων τα 5 είναι 2 δωματίων, και τα 2 για άτομα με ειδικές
			ανάγκες.</p>

		<p>Κάθε διαμέρισμα παρέχει
		<ul class="luxuries">
			<li>Ατομική κουζίνα με ψυγείο</li>
			<li>Μπάνιο</li>
			<li>Κλιματισμό 24 ώρες</li>
			<li>Τηλέφωνο</li>
			<li>Χώρο στάθμευσης</li>
			<li>Μπαλκόνι με θέα στη θάλασσα</li>
		</ul>
		</p>
	</div>
</div>
<div id="footer">
	<p><em>Ξενοδοχείο Elea Mare | Ελιά Μονεμβασίας Λακωνίας | τηλ: +30 27320 57540| eleamare@gmail.com</em></p>
	<p>Copyright 2013 | Created by Chris Maroudas</p>
</div>
<!-- End Chris -->
<script type="text/javascript" src="js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function () {

		// Slideshow 1
		$("#slider1").responsiveSlides({
			speed:800
		});
	});
</script>
</body>
</html>