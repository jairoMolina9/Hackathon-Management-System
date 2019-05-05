<!--
dashboard.php
team 1 (Laura, Boubojorn, Qinquan, Jairo)
05/04/2019

This file serves as the dashboard for participants
Allows users to update/view their data into database
-->
<?php
session_start();
date_default_timezone_set("America/New_York");

$link = mysqli_connect("localhost", "root", "", "hms") or die(mysql_error());

?>

<html>

	<head>
		<title>Hackathon System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css"
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

	<body class="is-preload">
		<?php
		if(isset($_SESSION['admin'])) {
			echo '
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#one">Dashboard</a></li>
				  <li><a href="index.php">Main Page</a></li>
						</ul>
					</nav>
				</div>
			</section>
			';
		}
		 ?>

		<!-- Sidebar -->


<div id = "wrapper">
				<section id="intro" class="wrapper style1 fullscreen fade-up">
					<h1> Admin Login </h1>
				</section>

</div>
		</body>
	</html>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


<?php

 ?>
