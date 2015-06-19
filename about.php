<!DOCTYPE html>
<html>
<head>
<title>Monogram - Responsive Site Template</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Monogram responsive site template">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
		
<!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
        
<link rel="stylesheet" type="text/css" media="all" id="font_css" href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic|Oswald:400,300,700">
<link rel="stylesheet" type="text/css" media="all" id="icon_fontawesome_css"  href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" media="all" id="icon_icomoon_css"  href="css/icomoon.css">
<link rel="stylesheet" type="text/css" media="all" id="main_css" href="css/style.css">
<link rel="stylesheet" type="text/css" media="all" id="responsive_css" href="css/responsive.css">

</head>

<body>

	<header>
		<?php include 'header.php';?>
	</header>

	<section id="page_header">
		<div id="page_heading_image">
			<img src="http://placehold.it/1920x281" alt="">
		</div>
		<div id="page_title">
			<h1>About us</h1>
			<p>Information about our business</p>
		</div>
	</section>

	<section id="icon_service_boxes" class="container">
		<h3>What do we do?</h3>
		<div class="row">
			<div class="span3 icon_service_box">
				<a href="#" class="box_icon"><i class="icomoon-calendar-2"></i></a>
				<h4><a href="#">Time managment</a></h4>
				<p>Lorem ipsum dolor sit amet why, consectetur apiscing elit. Vivamus mollis dignissim lacus eu posuere.</p>
			</div>
			<div class="span3 icon_service_box">
				<a href="#" class="box_icon"><i class="icomoon-cog-2"></i></a>
				<h4><a href="#">Web development</a></h4>
				<p>Lorem ipsum dolor sit amet why, consectetur apiscing elit. Vivamus mollis dignissim lacus eu posuere.</p>
			</div>
			<div class="span3 icon_service_box">
				<a href="#" class="box_icon"><i class="icomoon-bars-2"></i></a>
				<h4><a href="#">Optimisation</a></h4>
				<p>Lorem ipsum dolor sit amet why, consectetur apiscing elit. Vivamus mollis dignissim lacus eu posuere.</p>
			</div>
			<div class="span3 icon_service_box">
				<a href="#" class="box_icon"><i class="icomoon-file"></i></a>
				<h4><a href="#">Copywriting</a></h4>
				<p>Lorem ipsum dolor sit amet why, consectetur apiscing elit. Vivamus mollis dignissim lacus eu posuere.</p>
			</div>
		</div>
	</section>

	<section id="tablet_left" class="container">
		<div class="row">
			<div class="span4">
				<img src="http://placehold.it/309x477" alt="">
			</div>
			<div class="span8">
				<h2>Success is simple. Do what's right, the right way, at the right time</h2>
				<p class="featured">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consectetur rhoncus ligula, in pellentesque elit pretium. Donec viverra mollis nulla, dignissim fringilla ipsum volutpat. Lipsum vestibulum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate faucibus erat pretium dapibus. Non eleifend magna. Aliquam mollis faucibus velit, et vehicula quam eleifend at. Fusce tempus semper Phasellus ut leo non urna imperdiet ullamcorper. Duis quis urna est. Proin mi ipsum, cursus vitae pellen vel, suscipit sed nisi. Praesent luctus blandit tellus, vel consequat orci aliquam imperdiet. Integerligula tincidunt dictum sit amet vitae nulla. Integer odio nunc, ultrices ac dignissim id, auctor a augue. </p>
			</div>
		</div>
	</section>

	<section id="tablet_right" class="container">
		<div class="row">
			<div class="span8">
				<h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h2>
				<p class="featured">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consectetur rhoncus ligula, in pellentesque elit pretium. Donec viverra mollis nulla, dignissim fringilla ipsum volutpat. Lipsum vestibulum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate faucibus erat pretium dapibus. non eleifend magna. Aliquam mollis faucibus velit, et vehicula quam eleifend at. Fusce tempus semper Phasellus ut leo non urna imperdiet ullamcorper. Duis quis urna est. Proin mi ipsum, cursus vitae pellen vel, suscipit sed nisi. Praesent luctus blandit tellus, vel consequat orci aliquam imperdiet. Integer ligula tincidunt dictum sit amet vitae nulla. Integer odio nunc, ultrices ac dignissim id, auctor a augue. </p>
			</div>
			<div class="span4">
				<img src="http://placehold.it/307x471" alt="">
			</div>
		</div>
	</section>

	<section id="our_skills" class="container">
		<h3>Our skills</h3>
		<span class="meter_label">Web Design</span>
		<div class="meter">
			<span data-percentage="85" style="width: 85%">85%</span>
		</div>
		<span class="meter_label">PHP Development</span>
		<div class="meter">
			<span data-percentage="75" style="width: 75%">75%</span>
		</div>
		<span class="meter_label">jQuery</span>
		<div class="meter">
			<span data-percentage="63" style="width: 63%">63%</span>
		</div>
		<span class="meter_label">Great Ideas</span>
		<div class="meter">
			<span data-percentage="99" style="width: 99%">99%</span>
		</div>
	</section>

	<section id="our_team" class="container">
		<h3>Who are we?</h3>
		<div class="row">
			<div class="span3 icon_service_box">
				<div class="overlayed">
					<img src="http://placehold.it/460x401" alt="">
					<div class="overlay">
						<a href="#" class="overlay-rectangle">More info</a>
					</div>
				</div>
				<h4><a href="#">Cersei Lannister</a></h4>
				<span class="team_position">Junior manager</span>
				<p>Lorem ipsum dolor sit amet why, consectetur apiscing elit. Vivamus mollis dignissim lacus eu posuere.</p>
			</div>
			<div class="span3 icon_service_box">
				<div class="overlayed">
					<img src="http://placehold.it/460x401" alt="">
					<div class="overlay">
						<a href="#" class="overlay-rectangle">More info</a>
					</div>
				</div>
				<h4><a href="#">Brandon Stark</a></h4>
				<span class="team_position">Webdesigner</span>
				<p>Lorem ipsum dolor sit amet why, consectetur apiscing elit. Vivamus mollis dignissim lacus eu posuere.</p>
			</div>
			<div class="span3 icon_service_box">
				<div class="overlayed">
					<img src="http://placehold.it/460x401" alt="">
					<div class="overlay">
						<a href="#" class="overlay-rectangle">More info</a>
					</div>
				</div>
				<h4><a href="#">Berick Dontarion</a></h4>
				<span class="team_position">Copywritter</span>
				<p>Lorem ipsum dolor sit amet why, consectetur apiscing elit. Vivamus mollis dignissim lacus eu posuere.</p>
			</div>
			<div class="span3 icon_service_box">
				<div class="overlayed">
					<img src="http://placehold.it/460x401" alt="">
					<div class="overlay">
						<a href="#" class="overlay-rectangle">More info</a>
					</div>
				</div>
				<h4><a href="#">Tyrion Lannister</a></h4>
				<span class="team_position">Junior manager</span>
				<p>Lorem ipsum dolor sit amet why, consectetur apiscing elit. Vivamus mollis dignissim lacus eu posuere.</p>
			</div>
		</div>
	</section>

	<section id="testimonial" class="container">
		<h2>Our client said:</h2>
		<p>
			“Ut vitae lacinia est. Integer necmaro libero sed nibh cursus molestie. Vestibul loremus infota um lobortis elit nibh Ut sit amet turpis venenatis ficus velit tincidunt rhoncus sit amet sit amet sapien. Nullam sed ipsum et erat vestimul dignissim cursus non sit amet tortor.”
			<span>- Peter kincel</span>
		</p>
	</section>

	<footer>
		<?php include 'footer.php';?>
	</footer>

	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type='text/javascript' src='js/jquery-1.9.1.min.js'></script>
	<script type='text/javascript' src='js/jquery.roundabout.min.js'></script>
	<script type='text/javascript' src='js/jquery.event.drag-2.2.js'></script>
	<script type='text/javascript' src='js/jquery.event.drop-2.2.js'></script>
	<script type='text/javascript' src='js/jquery.inview.min.js'></script>
	<script type='text/javascript' src="js/jquery.gmap.min.js"></script>
	<script type='text/javascript' src="js/jquery.placeholder.min.js"></script>
	<script type='text/javascript' src='js/superfish.js'></script>
	<script type='text/javascript' src='js/custom.js'></script>

</body>
</html>