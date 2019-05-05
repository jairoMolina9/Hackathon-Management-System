<!DOCTYPE HTML>
<!--
Team 1
Spring 2019
-->
<?php
session_start();
date_default_timezone_set("America/New_York");
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


		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Welcome</a></li>
							<li><a href="#one">About</a></li>
							<li><a href="#two">Schedule</a></li>
							<li><a href="#three">Sponsors</a></li>
							<li>

								<?php
								if ((isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != '')) {
								 	echo '<a href="dashboard.php">Dashboard</a>';
								 } else {
								 	  echo '<a href="login.php">Dashboard</a>';
								 	}
								 	?>
						</li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
							<?php include 'particles.php';?>

				<!-- One -->
				<section id="one" class="wrapper style3 fade-up">

					<div class="inner">
						<h2>About</h2>
						<p>Welcome to the LowFi hackathon, here you will find the tracks and workshops we have ready for you!</p>
						<div class="features">

							<section>
								<span class="icon major fa-code"></span>
								<h3>Path + Workshop: Alexa</h3>
								<p>Start building for voice today by adding new capabilities to Alexa, connecting Alexa to devices, or integrating Alexa directly into your products. <br> <b>Keynote Speaker:</b> Mr. Molina
									<ul>
										<b>Judges</b>
										<li> Anthony Luz </li>
											 <li> Luz Asster </li>
									</ul>
								</p>
							</section>

							<section>
								<span class="icon major fa-lock"></span>
								<h3>Path + Workshop: Wolfram</h3>
								<p>The Wolfram Language allows programmers to operate with computational intelligence that relies on a vast depth of algorithms <br> <b>Keynote Speaker:</b> Mrs. Laura

									<ul>
										<b>Judges</b>
										<li> Anthony Luz </li>
											 <li> Luz Asster </li>
									</ul>

								</p>
							</section>

							<section>
								<span class="icon major fa-cog"></span>
								<h3>Path: Quantumm</h3>
								<p>Quantum computers have the potential to solve certain problems dramatically faster than conventional computers, with applications in areas such as machine learning, finance, drug discovery and cryptography.<br>
									<ul>
										<b>Judges</b>
										<li> Anthony Luz </li>
											 <li> Luz Asster </li>
									</ul>
								 </p>
							</section>

							<section>
								<span class="icon major fa-desktop"></span>
								<h3>AWS DeepLens</h3>
								<p>In collaboration with the BMCC Programming Club the officers will host an intro to deep lens technology from Amazon, experience is not required.<br><br> <b>Keynote Speaker:</b> Programming Club </p>
							</section>

						</div> <!--END OF FEATURES -->

					</div>
				</section>


				<!-- Two -->
				<section id="two" class="wrapper style1 fade-up">
					<div class="inner">
						<h2>Schedule</h2>
						<p>Time and locations may change over the course of the event.</p>
						<section>
							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
											<th>Time</th>
											<th>Description</th>
											<th>Location</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>08:30 am - 09:00 am</td>
											<td>Registration</td>
											<td>Richard Harris Terrace</td>
										</tr>
										<tr>
											<td>09:00 am - 09:15 am</td>
											<td>Introduction</td>
											<td>Richard Harris Terrace</td>
										</tr>
										<tr>
											<td>09:15 am - 09:45 am</td>
											<td>Keynotes</td>
											<td>Richard Harris Terrace</td>
										</tr>

										<tr>
											<td>10:00 am - 10:20 am</td>
											<td>Introduction of Tracks</td>
											<td>Richard Harris Terrace</td>
										</tr>

										<tr>
											<td>10:30 am - 12:00 pm</td>
											<td>Workshops</td>
											<td>TBA</td>
										</tr>

										<tr>
											<td>12:15 pm - 1:00 pm</td>
		<td>Panel</td>
		<td>Richard Harris Terrace</td>
	</tr>

	<tr>
		<td>12:15 pm - 1:00 pm</td>
		<td>Lunch</td>
		<td>Richard Harris Terrace</td>
	</tr>

	<tr>
		<td>01:15 pm - 08:00 pm</td>
		<td>Hack Time Starts</td>
		<td>Richard Harris Terrace</td>
	</tr>

	<tr>
		<td>05:30 pm - 08:00 pm</td>
		<td>Project Submission and Judging</td>
		<td>Richard Harris Terrace</td>
	</tr>

	<tr>
		<td>06:15 pm - 07:00 pm</td>
		<td>Dinner</td>
		<td>Richard Harris Terrace</td>
	</tr>

	<tr>
		<td>08:00 pm - 08:15 pm</td>
		<td>Finalist announcement</td>
		<td>Richard Harris Terrace</td>
	</tr>

	<tr>
		<td>08:15 pm - 08:45 pm</td>
		<td>Presentation</td>
		<td>Richard Harris Terrace</td>
	</tr>
	<tr>
		<td>08:45 pm - 09:00 pm</td>
		<td>Prizes</td>
		<td>Richard Harris Terrace</td>
	</tr>
									</tbody>
								</table>
							</div>
						</section>
				</div>
			</section>


				<!-- Three -->
				<section id="three" class="wrapper style2 spotlights">

					<section>
						<a href="#" class="image"><img src="images/pic01.jpg" alt="" data-position="top center" /></a>
						<div class="content">
							<div class="inner">
								<h2>Sed ipsum dolor</h2>
								<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
								<ul class="actions">
									<li><a href="generic.html" class="button">Learn more</a></li>
								</ul>
							</div>
						</div>
					</section>

					<section>
						<a href="#" class="image"><img src="images/pic02.jpg" alt="" data-position="top center" /></a>
						<div class="content">
							<div class="inner">
								<h2>Feugiat consequat</h2>
								<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
								<ul class="actions">
									<li><a href="generic.html" class="button">Learn more</a></li>
								</ul>
							</div>
						</div>
					</section>

					<section>
						<a href="#" class="image"><img src="images/pic03.jpg" alt="" data-position="25% 25%" /></a>
						<div class="content">
							<div class="inner">
								<h2>Ultricies aliquam</h2>
								<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
								<ul class="actions">
									<li><a href="generic.html" class="button">Learn more</a></li>
								</ul>
							</div>
						</div>
					</section>

				</section>
			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="admin.php">ADMIN DASHBOARD</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
