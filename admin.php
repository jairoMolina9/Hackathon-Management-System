<!--
dashboard.php
team 1 (Laura, Boubojorn, Qinquan, Jairo)
05/04/2019

This file serves as the dashboard for participants
Allows users to update/view their data into database
-->
<?php
session_start();

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
		<section id="sidebar">
			<div class="inner">
				<nav>
					<ul>
						<li><a href="#intro">Dashboard</a></li>
			  <li><a href="index.php">Main Page</a></li>
					</ul>
				</nav>
			</div>
		</section>

		<?php
        if (isset($_SESSION['admin'])) {
echo <<<HTML
			<div id = "wrapper">

				<section id="intro" class="wrapper style1 fade-up">

					<a style="left:86%;margin-top:1%;background-color:#312450;" href="logout.php" class="button">Logout</a>

						<div class="inner">

						<h2>ADMIN Dashboard</h2>

							<div style="padding-top:10%" class="split style1">

									<section>

									<p align="center"> Modify Data </p>
									<button class="button2" onclick="document.getElementById('id01').style.display='block';">Welcome</button>
									<button class = "button3" onclick="document.getElementById('id02').style.display='block';">About</button>
									<br><br><br>
									<button class = "button2 primary disabled" onclick="document.getElementById('id03').style.display='block';">Sponsors</button>
									<button class = "button3" onclick="document.getElementById('id04').style.display='block';">User Dashboard</button>

									<hr>
									<p align="center"> Action Mode </p>
									<button class = "button2" onclick="document.getElementById('id05').style.display='block';">New Sponsor</button>
									<button class = "button3" onclick="document.getElementById('id06').style.display='block';">View Teams</button>

									<hr>
									<p align="center"> God-Mode </p>
									<form name = "god" method="POST">
									<button class = "button2" name = "delete" type = "submit">Delete All</button>
									<button class = "button3" name = "reset" type = "submit">Reset Default</button>
									</form>

									</section>

										<section>
										<ul class="contact">
										<li>
											<h3>Total Participants</h3>
HTML;
            					$sql = "SELECT * FROM participants WHERE studentID=(SELECT MAX(studentID) FROM participants)";
            					$result = mysqli_query($link, $sql);
            					$rs = mysqli_fetch_array($result);

            					$total = $rs['studentID'] ?? '0';
            					echo "<p>". $total . "</p>";
echo<<<HTML
										</li>
										<li>
											<h3>Total Teams</h3>
HTML;
            					$sql = "SELECT * FROM teams WHERE teamID=(SELECT MAX(teamID) FROM teams)";
            					$result = mysqli_query($link, $sql);
            					$rs = mysqli_fetch_array($result);

            					$total = $rs['teamID'] ?? '0';
            					echo "<p>". $total . "</p>";
echo<<<HTML
											</li>
											<li>
											<h3>Total Sponsors</h3>
HTML;
            					$sql = "SELECT * FROM sponsors WHERE sponsorID=(SELECT MAX(sponsorID) FROM sponsors)";
            					$result = mysqli_query($link, $sql);
            					$rs = mysqli_fetch_array($result);

            					$total = $rs['sponsorID'] ?? '0';
            					echo "<p>". $total . "</p>";
echo<<<HTML

											</li>
											<li>
											<h3>Budget</h3>
HTML;
											$sql = "SELECT SUM(budget) AS total FROM sponsors";
											$result = mysqli_query($link, $sql);
											$rs = mysqli_fetch_array($result);

											$total = $rs['total'] ?? '0';
            					echo "<p>$ ". $total . "</p>";
echo<<<HTML
											</li>
											</ul>
									</section>
								</div>
						</div>

						<div id="id01" class="modal">

							<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

								<section>

									<form name = "welcomeUpdate" method="POST">

										  <div class="fields">

											 <div class="field half">

												<label style="margin-top:5%;" for="newTitle">Hackathon Title</label>
												<input type="text" name="newTitle" id="newTitle" placeholder="Enter" />
											 </div>

											 <div class="field half">
												 <label style="margin-top:5%;" for="newSubT">Sub-Title</label>
												 <input type="text" name="newSubT" id="newSubT" placeholder="Enter" />
												</div>

												<div class="field half">
													<label style="margin-top:5%;" for="newDate">Sub-Title 2</label>
													<input type="text" name="newSubT2" id="newSubT2" placeholder="Enter" />
												 </div>

												 <div class="field half">
													 <input type="submit" name = "welcomeUpdate" style="left:40%;top:30%" value="Complete">
													</div>

										  </div>

									</form>

							</section>

						</div>

						<div id="id02" class="modal large">

							<span onclick="document.getElementById('id02').style.display='none'" class="close large" title="Close Modal">&times;</span>

								<section>

									<form name = "aboutUpdate" method="POST">

										  <div class="fields">

											 <div class="field half">

												<label style="margin-top:5%;" for="newDescription">About Description</label>
												<textarea name="newDescription" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
												<br>


											 </div>

											 <div class="field half">
												 <label style="margin-top:5%;" for="newTitle1">Title 1</label>
												 <input type="text" name="newTitle1" id="newTitle1" placeholder="Enter" />

												 <label style="margin-top:5%;" for="newInfo1">Information 1</label>
												 <input type="text" name="newInfo1" id="newInfo1" placeholder="Enter" />

													<label style="margin-top:5%;" for="newTitle2">Title 2</label>
													<input type="text" name="newTitle2" id="newTitle2" placeholder="Enter" />

													<label style="margin-top:5%;" for="newInfo2">Information 2</label>
													<input type="text" name="newInfo2" id="newInfo2" placeholder="Enter" />
												</div>
													<div class="field half">
														<label style="margin-top:5%;" for="newTitle3">Title 3</label>
 													 <input type="text" name="newTitle3" id="newTitle3" placeholder="Enter" />

 													 <label style="margin-top:5%;" for="newInfo3">Information 3</label>
 													 <input type="text" name="newInfo3" id="newInfo3" placeholder="Enter" />
													</div>
												<div class="field half">

													 <label style="margin-top:5%;" for="newTitle4">Title 4</label>
													 <input type="text" name="newTitle4" id="newTitle4" placeholder="Enter" />

													 <label style="margin-top:5%;" for="newInfo4">Information 4</label>
													 <input type="text" name="newInfo4" id="newInfo4" placeholder="Enter" />
												 </div>

										  </div>
											<input type="submit" name = "aboutUpdate" style="left:40%;top:30%" value="Complete">
									</form>

							</section>

						</div>

						<div id="id04" class="modal">

							<span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>

								<section>

									<form name = "dashboardUpdate" method="POST">

											<div class="fields">

											 <div class="field half">

												<label style="margin-top:5%;" for="newAddress">Address</label>
												<input type="text" name="newAddress" id="newAddress" placeholder="Enter" />
											 </div>

											 <div class="field half">
												 <label style="margin-top:5%;" for="newEmail">Email</label>
												 <input type="text" name="newEmail" id="newEmail" placeholder="Enter" />
												</div>

												<div class="field half">
													<label style="margin-top:5%;" for="newPhone">Phone</label>
													<input type="text" name="newPhone" id="newPhone" placeholder="Enter" />
												 </div>

												 <div class="field half">
													 <input type="submit" name = "dashboardUpdate" style="left:40%;top:30%" value="Complete">
													</div>

											</div>

									</form>

							</section>

						</div>

						<div id="id05" class="modal">

							<span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>

								<section>

									<form name = "newSponsor" method="POST">

										<div class="fields">

											 <div class="field half">

												<label style="margin-top:5%;" for="name">Sponsor Name</label>
												<input type="text" name="name" id="name" placeholder="Enter" />
											 </div>

											 <div class="field half">
												 <label style="margin-top:5%;" for="amt">Money Amount</label>
												 <input type="text" name="amt" id="amt" placeholder="Enter" />
												</div>

												 <div class="field half">
													 <input type="submit" name = "newSponsor" style="left:80%;top:30%" value="Complete">
													</div>

											</div>

									</form>

							</section>

						</div>

						<div id="id06" class="modal large ">

							<span onclick="document.getElementById('id06').style.display='none'" class="close large" title="Close Modal">&times;</span>

								<section>
HTML;
									 $sql = "SELECT * FROM teams ORDER BY teamID ASC";
									 if($result = mysqli_query($link, $sql)){
										 if(mysqli_num_rows($result) > 0)
										 {
echo<<<HTML
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Team ID</th>
													<th>Name</th>
													<th>Path</th>
												</tr>
											</thead>
											<tbody>
HTML;
										while($row = mysqli_fetch_array($result)) {

echo<<<HTML

												<tr>
													<td>
HTML;
													echo  $row['teamID'];
echo<<<HTML
													</td>
													<td>
HTML;
													echo $row['teamName'];
echo<<<HTML
													</td>
													<td>
HTML;
													echo $row['category'];
echo<<<HTML
												 </td>
												</tr>
HTML;
										}//while fetch array
echo<<<HTML
											</tbody>
										</table>
									</div>
HTML;
							} else { //if num rows
								echo "There are not records of Teams";
							}
						}	//if result = query
echo<<<HTML
							</section>

						</div>

				</section>
			</div>
HTML;
        } else {
            echo <<< HTML
					<div id = "wrapper">
							<section id="intro" class="wrapper style1 fullscreen fade-up">
								<h1 align="center"> Admin Login </h1>

			<div class="container">
			   <div class="row">


						 <form class="form" name = "signin" method = "POST" style="max-width:500px;margin:auto;">

							<div>
							  <label for="inputUserame">Username</label>
							  <input type="text" id="inputUserame" name = "username"  placeholder="Username">
							</div>

							<div>
							  <label for="inputPass">Password</label>
							  <input type="password" id="inputPass" name = "password"  placeholder="password">
							</div>
							<br>
							<button name = "signin" type="submit">LOGIN</button>

						</form>

				</div>
	      </div>
	   </section>
	  </div>
HTML;
        }
         ?>

		 <!-- Footer -->
 			<footer id="footer" class="wrapper style1-alt">
 				<div class="inner">
 					<ul class="menu">
 						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="admin.php">ADMIN DASHBOARD</a></li>
 					</ul>
 				</div>
 			</footer>

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

<!-- SIGN IN Check -->
<?php
if (isset($_POST['signin'])) {
    $username = $_POST['username'] ?? '';
    $password = md5($_POST['password']) ?? '';

    $sql = "SELECT username FROM admin where username = '$username' and password = '$password'";
		$result = mysqli_query($link, $sql);
		if ($result = mysqli_query($link, $sql)) {

			if (mysqli_num_rows($result) > 0) {
          $_SESSION["admin"] = true;
          echo "<meta http-equiv='refresh' content='0'>";
          } else {
              print '<script>alert("Invalid Admin credentials...");</script>';
          	}
          }
      }
?>
<!-- UPDATE SQL Welcome Page-->
<?php

if (isset($_POST['welcomeUpdate'])) {
    $title = $_POST["newTitle"] ?? '';
    $subT = $_POST["newSubT"] ?? '';
    $subT2 = $_POST["newSubT2"] ?? '';

    $sql = "UPDATE welcome SET title = COALESCE(NULLIF('$title',''),title), subtitle = COALESCE(NULLIF('$subT',''),subtitle), subtitle2 = COALESCE(NULLIF('$subT2',''),subtitle2)";

    if ($result = mysqli_query($link, $sql)) {
        print '<script>alert("Welcome Section Updated...");</script>';
    	}
		}
?>
<!-- UPDATE SQL About Page-->
<?php

if (isset($_POST['aboutUpdate'])) {
    $description = $_POST["newDescription"] ?? '';
    $title1 = $_POST["newTitle1"] ?? '';
    $info1 = $_POST["newInfo1"] ?? '';

		$title2 = $_POST["newTitle2"] ?? '';
		$info2 = $_POST["newInfo2"] ?? '';

		$title3 = $_POST["newTitle3"] ?? '';
		$info3 = $_POST["newInfo3"] ?? '';

		$title4 = $_POST["newTitle4"] ?? '';
		$info4 = $_POST["newInfo4"] ?? '';

    $sql = "UPDATE about SET description = COALESCE(NULLIF('$description',''),description), title1 = COALESCE(NULLIF('$title1',''),title1), info1 = COALESCE(NULLIF('$info1',''),info1);";
		 $sql .= "UPDATE about SET title2 = COALESCE(NULLIF('$title2',''),title2), info2 = COALESCE(NULLIF('$info2',''),info2);";
		$sql .= "UPDATE about SET title3 = COALESCE(NULLIF('$title3',''),title3), info3 = COALESCE(NULLIF('$info3',''),info3);";
		$sql .= "UPDATE about SET title4 = COALESCE(NULLIF('$title4',''),title4), info4 = COALESCE(NULLIF('$info4',''),info4)";

    if (mysqli_multi_query($link,$sql)) {
        print '<script>alert("About Section Updated...");</script>';
    	}
		}
?>
<!-- UPDATE SQL User Dashboard Page-->
<?php
if (isset($_POST['dashboardUpdate'])) {
    $address = $_POST["newAddress"] ?? '';
    $email = $_POST["newEmail"] ?? '';
    $phone = $_POST["newPhone"] ?? '';

    $sql = "UPDATE dashboard SET address = COALESCE(NULLIF('$address',''),address), email = COALESCE(NULLIF('$email',''),email), phone = COALESCE(NULLIF('$phone',''),phone)";

    if ($result = mysqli_query($link, $sql)) {
        print '<script>alert("Dashboard Section Updated...");</script>';
    	}
		}

?>
<!-- ADD NEW SPONSOR to SQL-->
<?php

if (isset($_POST['newSponsor'])) {
    $name = $_POST["name"] ?? '';
    $money = $_POST["amt"] ?? '';

    $sql = "INSERT INTO sponsors (name, budget) VALUES ('$name','$money')";

    if ($result = mysqli_query($link, $sql)) {
        print '<script>alert("Sponsor Added Updated...");</script>';
				  echo "<meta http-equiv='refresh' content='0'>";
    	}
		}
?>

<!-- Reset Every Page Data-->
<?php
if (isset($_POST['reset'])) {

	$sql = "SELECT * FROM welcome";
	$result = mysqli_query($link, $sql);

	if(mysqli_num_rows($result) == 0)
	{
    $sql = "INSERT INTO welcome (title, subtitle, subtitle2) VALUES ('LowFi Hackathon','Borough of Manhattan Community College', 'September 20th, 2019');";
		$sql .= "INSERT INTO about (description, title1, info1, title2, info2, title3, info3, title4, info4)
		VALUES ('Welcome to the LowFi hackathon, here you will find the tracks and workshops we have ready for you!',
		        'Path + Workshop: Alexa',
		        'Start building for voice today by adding new capabilities to Alexa, connecting Alexa to devices, or integrating Alexa directly into your products.',
		        'Path + Workshop: Wolfram',
		        'The Wolfram Language allows programmers to operate with computational intelligence that relies on a vast depth of algorithms',
		        'Path: Quantumm',
		        'Quantum computers have the potential to solve certain problems dramatically faster than conventional computers, with applications in areas such as machine learning, finance, drug discovery and cryptography.',
		        'AWS DeepLens',
		        'In collaboration with the BMCC Programming Club the officers will host an intro to deep lens technology from Amazon, experience is not required.'
		      )";
					if (mysqli_multi_query($link,$sql)) {
							print '<script>alert("Everything Resetted C...");</script>';
						}
	} else{

		$sql2 = "UPDATE welcome SET title = 'LowFi Hackathon', subtitle = 'Borough of Manhattan Community College', subtitle2 = 'September 20th, 2019'; ";

		$sql .= "UPDATE about SET description = 'Welcome to the LowFi hackathon, here you will find the tracks and workshops we have ready for you!';";

		$sql .= "UPDATE about SET title1 = 'Path + Workshop: Alexa', info1 = 'Start building for voice today by adding new capabilities to Alexa, connecting Alexa to devices, or integrating Alexa directly into your products.';";

		$sql .= "UPDATE about SET title2 = 'Path + Workshop: Wolfram', info2 = 'The Wolfram Language allows programmers to operate with computational intelligence that relies on a vast depth of algorithms';";

		$sql .= "UPDATE about SET title3 = 'Path: Quantumm', info3 = 'Quantum computers have the potential to solve certain problems dramatically faster than conventional computers, with applications in areas such as machine learning, finance, drug discovery and cryptography.';";

		$sql .= "UPDATE about SET title4 = 'AWS DeepLens', info4 = 'In collaboration with the BMCC Programming Club the officers will host an intro to deep lens technology from Amazon, experience is not required.'";
		if (mysqli_multi_query($link,$sql2)) {
				print '<script>alert("Everything Resetted...");</script>';
			}
	}


}
?>
<!-- Delete Every Page Data-->
<?php
if (isset($_POST['delete'])) {
	$sql = "DELETE FROM welcome;"; //2 semicolon
	$sql .= "DELETE FROM about ";

	if (mysqli_multi_query($link,$sql)) {
			print '<script>alert("Everything Deleted...");</script>';
		}
}
?>
