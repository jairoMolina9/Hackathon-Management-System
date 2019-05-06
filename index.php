<!--
index.php
team 1 (Laura, Boubojorn, Qinquan, Jairo)
05/04/2019

This file serves as the homepage of the Hackathon
Here users can view Home, Schedule and Sponsors
-->
<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "hms") or die(mysql_error());
$sql = "SELECT * FROM welcome";

$result = mysqli_query($link, $sql);
$rs = mysqli_fetch_array($result);

$title = $rs['title'];
$subt = $rs['subtitle'];
$subt2 = $rs['subtitle2'];

$sql = "SELECT * FROM about";

$result = mysqli_query($link, $sql);
$rs = mysqli_fetch_array($result);

$description = $rs['description'];
$title1 = $rs['title1'];
$info1 = $rs['info1'];

$title2 = $rs['title2'];
$info2 = $rs['info2'];

$title3 = $rs['title3'];
$info3 = $rs['info3'];

$title4 = $rs['title4'];
$info4 = $rs['info4'];

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
				<div id ="menu-center" class="inner">
					<nav>
						<ul>
							<li><a class="active" href="#intro">Welcome</a></li>
							<li><a href="#one">About</a></li>
							<li><a href="#two">Schedule</a></li>
							<li><a href="#three">Sponsors</a></li>
							<li>

								<?php
								if ((isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != '')) {
								 	echo '<a href="dashboard.php">Dashboard</a>';
								} else if ((isset($_SESSION['admin']))) {
										echo '<a href="admin.php">Dashboard</a>';
								}else {
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
				<section id="intro" class="wrapper style1 fullscreen fade-up">

							<?php include 'particles.php';?>


				      </section>

						<!-- SECTION 1 -->
					<section id="one" class="wrapper style3 fade-up">

						<div class="inner">
							<h2>About</h2>
							<p><?php echo $description; ?></p>
							<div class="features">

								<section>
									<span class="icon major fa-code"></span>
									<h3><?php echo $title1; ?></h3>
									<p><?php echo $info1; ?> </b> Mr. Molina
										<ul>
											<b>Judges</b>
											<li> Anthony Luz </li>
												 <li> Luz Asster </li>
										</ul>
									</p>
								</section>

								<section>
									<span class="icon major fa-lock"></span>
									<h3><?php echo $title2; ?></h3>
									<p><?php echo $info2; ?> <br> <b>Keynote Speaker:</b> Mrs. Laura

										<ul>
											<b>Judges</b>
											<li> Anthony Luz </li>
												 <li> Luz Asster </li>
										</ul>

									</p>
								</section>

								<section>
									<span class="icon major fa-cog"></span>
									<h3><?php echo $title3; ?></h3>
									 <p><?php echo $info3; ?> <br>
										<ul>
											<b>Judges</b>
											<li> Anthony Luz </li>
												 <li> Luz Asster </li>
										</ul>
									 </p>
								</section>

								<section>
									<span class="icon major fa-desktop"></span>
									<h3><?php echo $title4; ?></h3>
									<p><?php echo $info4; ?> </b> Programming Club </p>
								</section>

							</div> <!--END OF FEATURES -->

						</div>
					</section>

			<!-- SECTION 2 -->
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

					<!-- SECTION 3 -->
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
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
