<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">   
	<script src="js/java/jquery-1.6.3.min.js" type="text/javascript"></script>
	<script src="js/java/cufon-yui.js" type="text/javascript"></script>
	<script src="js/java/cufon-replace.js" type="text/javascript"></script>
	<script src="js/java/Vegur_700.font.js" type="text/javascript"></script>
	<script src="js/java/Vegur_400.font.js" type="text/javascript"></script> 
	<script src="js/java/FF-cash.js" type="text/javascript"></script> 
	<script src="js/java/script.js" type="text/javascript"></script>
	<script src="js/java/easyTooltip.js" type="text/javascript" ></script>
	<script src="js/java/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="js/java/hover-image.js" type="text/javascript"></script>
	<script src="js/java/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="js/java/query.easing.1.3.js" type="text/javascript"></script>
	<script src="js/java/tms-0.3.js" type="text/javascript"></script>
	<script src="js/java/tms_presets.js" type="text/javascript"></script>
	<script src="js/java-andrey/java.js" type="text/javascript"></script>

</head>
<body id="page1">
	<div class="extra">
		<!--==============================header=================================-->
		<header>
			<div class="main">
				<div class="bg-1">
					<h1><a href="index.php">Sistemas Operativo II</a></h1>
				</div>
				<nav>
					<div class="menu-bg-tail">
						<div class="menu-bg">
							<div class="container_12">
								<div class="grid_12">
									<ul class="menu">
										<li class="item"><a class="active" href="index.php">Home</a></li>
										<li><a href="login.php">Login</a></li>
										<li><a href="Register.php">Register</a></li>
										<li><a href="">Facebook</a></li>
										<li class="last"><a href="">Contacts</a></li>
										<li class="item-1"><a href="">Name Pyme</a></li>
									</ul>
									<div class="clear"></div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</nav>
				<div class="slider-wrapper">
					<div class="slider">
						<ul class="items">
							<li><img src="images/slider-img1.jpg" alt="" /></li>
							<li>
								<img src="images/slider-img2.jpg" alt="" />
							</li>
							<li>
								<img src="images/slider-img3.jpg" alt="" />
							</li>
						</ul> 
					</div>
				</div>
			</div>
		</header>
		<!--==============================content================================-->
		<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November 21, 2011!</div>
			<div class="main">
				<div class="bg-2">
					<div class="content-padding-1">
						<div class="container_12">
							<div class="wrapper">	
								<?php
									// requerido para conectar ala base de datos
								require_once 'connectbd.php';
		        						// connecting to database
								$db = new DB_Connect();
								$db->connect();

								/* se concatene los datos en esta clase y solo se llama al metodo para imprimirlo*/
								require_once 'employed.php';
								$employed = new employed();
								$lista = $employed->home($db);	
								?>
								<div class='CSSTableGenerator' >
									<?php
									print_r($lista);
									?>
								</div><br> 
							</div>
						</div>
					</div>
				</div>
				<div class="content-padding-2">
					<div class="container_12">
						<div class="wrapper">
							<article class="grid_4">
								<div class="padding-grid-1">
									<h3>Upcoming <strong>Events</strong></h3>
									<div class="wrapper img-indent-bot1">
										<time class="time time-stule-3" datetime="2011-11-09"> <strong class="text-5">09</strong><strong class="text-6">nov</strong></time>
										<div class="extra-wrap">
											<div class="indent-top">
												Lorem ipsum dolor consctetur adipisicing elitdo eusmod tempor incididunt ut labore.
											</div>
										</div>
									</div>
									<div class="wrapper">
										<time class="time time-stule-3" datetime="2011-11-03"> <strong class="text-5">03</strong><strong class="text-6">nov</strong></time>
										<div class="extra-wrap">
											<div class="indent-top">
												Lorem ipsum dolor consctetur adipisicing elitdo eusmod tempor incididunt ut labore.
											</div>
										</div>
									</div>
								</div>
							</article>
							<article class="grid_4 alpha">
								<div class="padding-grid-2">
									<h3 class="letter">Tutorial <strong>Video</strong></h3>

									<div class="wrapper">
										<figure class="style-img-2 fleft"><a class="lightbox-image" href="video/video_AS3.swf?width=495&amp;height=275&amp;fileVideo=intro06.flv" data-gal="prettyVideo[prettyVideo]"><img src="images/page1-img2.jpg"  alt=""></a></figure>
									</div>
								</div>
							</article>
							<article class="grid_4 alpha">
								<div class="padding-grid-2">
									<h3 class="letter prev-indent-bot1">About <strong>us</strong></h3>
									<h6>Somos Programadores </h6>
									Esta pagina esta creada con el proposito de hacer una web totalmente funcional, con codigo en html5, php, y bases de datos existente. y configuracion con dominio y hosting propio.
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
			<div class="block"></div>
		</section>
	</div>
	<!--==============================footer=================================-->
	<footer>

	</footer>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
