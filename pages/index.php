<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8"/>
		<title>Toto</title>
		<link rel = "stylesheet" href = "../design/css/style.css"/>
		<link rel = "stylesheet" href = "../design/css/header.css"/>
		<link rel = "stylesheet" href = "../design/css/nav.css"/>
		<link rel = "stylesheet" href = "../design/css/banner.css"/>
		<!--[if lt IE 9]>
			<script	src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		<!--[if lt IE 9]>
			<link rel = "stylesheet" href = "style_ie.css"/>
		</![endif]-->
	</head>
	<body>
		<div id = "main_wrapper">
			<header>
				<?php
					include('header.php');
				?>			
			</header>
			<div>
				<div id = "nav">
					<nav>
						<ul>
							<li><a href = "#" class = "this_page">Home</a></li>
							<li><a href = "cv.php">CV</a></li>
							<li><a href = "notions.php">Notions</a></li>
							<li><a href = "contact.php">Contact</a></li>
						</ul>	
					</nav>
				</div>
				<div>
					<?php
						include('banner.php');
					?>
				</div>
			</div>
			
			<footer>
				<?php 
					include('footer.php');
				?>			
			</footer>
		</div>
	</body>
</html>