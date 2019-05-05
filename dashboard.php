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

if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != '')) {
    header("Location: index.php");
}

$link = mysqli_connect("localhost", "root", "", "hms") or die(mysql_error());

$username = $_SESSION['username'];

$sql = "SELECT * FROM participants WHERE username = '$username' ";
$result = mysqli_query($link,$sql);
$rs = mysqli_fetch_array($result);

$id = $rs['studentID'];
$teamID = $rs['teamID'] ?? 'Update Information';
$schoolName = $rs['school'] ?? 'Update Information';
$shirtSize = $rs['shirtSize'] ?? 'Update Information';
$foodType = $rs['foodType'] ?? 'Update Information';

?>

<html>

	<head>
		<title>Hackathon System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css"
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>



	</head>

	<body>


		<!-- Sidebar -->
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

   <div id = "wrapper">

				<!-- Three -->
		<section id="intro" class="wrapper style1 fade-up">

            <a style="left:86%;margin-top:1%;background-color:#312450;" href="logout.php" class="button">Logout</a>

					<div class="inner">

                     <?php
                    echo "<h2>Welcome back, ". $_SESSION['username'] ."</h2>";
                    ?>
							<p>This is your Dashboard, in here you will be able to modify any information related to the Hackathon please understand that the option to commit any UPDATE will only be available until the day before the Hackathon.<br>We are eager to see you! </p>

               <div class="split style1">

                  		<section>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="name">Team Name</label>
                          <?php

                          $sql = "SELECT teams.teamName FROM teams WHERE teamID = '$teamID' ";
                          $result = mysqli_query($link,$sql);
                          $rs = mysqli_fetch_array($result);

                          $teamName = $rs['teamName'] ?? 'Update Information';

                          echo $teamName;

                          ?>
											</div>
											<div class="field half">
												<label for="email">School</label>
                            <?php echo $schoolName; ?>
											</div>
											<div class="field half">
												<label for="email">Shirt Size</label>
                          <?php
                          if($shirtSize == 'S')
                          echo "Small";
                          else if($shirtSize == 'M')
                          echo "Medium";
                          else if ($shirtSize == 'L')
                            echo "Large";
                          else
                           echo $shirtSize;
                          ?>
											</div>
											<div class="field half">
												<label for="email">Food Type</label>
                          <?php echo $foodType; ?>
											</div>
										</div>
                  </form>

                  <button onclick="document.getElementById('id01').style.display='block'
                  ;document.getElementById('id02').style.display='none'" style="width:auto;">Update</button>
                  <button onclick="document.getElementById('id02').style.display='block'
                  ;document.getElementById('id01').style.display='none'" style="width:auto;">New Team</button>

               </section>
               <section>
                  <ul class="contact">
                     <li>
                       <h3>Address</h3>
                        <span>199 Chambers St #654<br />
                           New York, NY 10007-0071<br />
                           USA</span>
                        </li>
                        <li>
                           <h3>Email</h3>
                           <a href="#">hackToday@hms.org</a>
                        </li>
                        <li>
                           <h3>Phone</h3>
                           <span>(347) 345-5437</span>
                        </li>
                        <li>
                           <h3>Social</h3>
                           <ul class="icons">
                              <li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
                              <li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
                                 <li><a href="#" class="fa-github"><span class="label">GitHub</span></a></li>
                                 <li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
                                 <li><a href="#" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
                              </ul>
                           </li>
                        </ul>
                     </section>
                  </div>
               </div>

               <div id="id01" class="modal">

                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

                  <section>

                     <form name = "update_info" method="POST">

                        <div class="fields">

                           <div class="field half">

                              <label style="margin-top:5%;" for="teams">Team</label>

                                 <select  selected="false" name="inputTeam">
                                    <?php

                                    $sql = "SELECT * FROM teams";
                                    $result = mysqli_query($link,$sql);
                                    if (mysqli_num_rows($result)) {
                                       echo '<option value = "">Choose</option>';                                       while ($row = mysqli_fetch_array($result)) {
                                          echo '"<option value ="'. $row['teamID'] .'">' . $row['teamName'] . "</option>";
                                       }
                                    }else{
                                       echo "echo '<option value = >NO TEAMS FOUND</option>';";
                                    }

                                    ?>

                                 </select>
                           </div>

                           <div class="field half">

                             <label   style="margin-top:5%;" for="inputSchool">School Name</label>
                             <input type="text" id="inputSchool" name = "schoolName" placeholder="Enter">

                           </div>

                           <div class="field half">
                             <label for="shirts">Shirt Size</label>

                              <select name = "shirtSize">

                                    <option value = "">Choose</option>
                                    <option value="S">Small</option>
                                    <option value="M">Medium</option>
                                    <option value="L">Large</option>

                              </select>
                           </div>

                           <div class="field half">
                             <label for="food">Food Type</label>
                              <select name = "foodType">

                                 <option value = "">Choose</option>
                                 <option value="Kosher">Kosher</option>
                                 <option value="Halal">Halal</option>
                                 <option value="American">American</option>

                             </select>
                           </div>

                         </div>

                         <input type="submit" name = "update_info" style="left:40%;" value="Complete">
                      </form>

                   </section>

               </div>

               <div id="id02" class="modal">

                  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

                     <section>

                        <form name = "new_team" method="POST">

                             <div class="fields">

                               <div class="field half">

                                 <label style="margin-top:5%;" for="newteam">Team Name</label>
                                 <input type="text" name="newteam" id="newteam" placeholder="Enter" />

                               </div>

                               <div class="field half">
                                <label style="margin-top:5%;" for="path">Path</label>
                                <select name = "path">
                                    <option value="Alexa">Alexa</option>
                                    <option value="Wolfram">Wolfram</option>
                                    <option value="Quantumm">Quantumm</option>
                                </select>
                              </div>

                             </div>

                              <input type="submit" name = "new_team" style="left:40%;" value="Complete">

                        </form>

                  </section>

               </div>

            </section>
         </div>
		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="https://www.linkedin.com/in/jairo-molina-a0574714b/">The Dream Team</a></li>
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

<?php

     $date = date("Y/m/d");
     $time = date("h:i:s a");


     if( isset($_POST['update_info']) ) {
        $teamID = $_POST['inputTeam'] ?? '';
        $schoolName = $_POST['schoolName'] ?? '';
        $shirtSize = $_POST['shirtSize'] ?? '';
        $foodType = $_POST['foodType'] ?? '';
        $sql = "UPDATE participants SET  teamID = COALESCE(NULLIF('$teamID',''), teamID), school = COALESCE(NULLIF('$schoolName',''),school), shirtSize = COALESCE(NULLIF('$shirtSize',''), shirtSize), foodType =COALESCE(NULLIF('$foodType',''), foodType) WHERE studentID='$id'";

        $result = mysqli_query($link, $sql);
        echo "<meta http-equiv='refresh' content='0'>";
     }
     else if( isset($_POST['new_team']) ) {
        $teamName = $_POST['newteam'] ?? '';
        $path = $_POST['path'] ?? '';

        $sql = "SELECT teamName FROM teams WHERE teamName = '$teamName'";

          if ($result = mysqli_query($link, $sql)) {
              if (!mysqli_num_rows($result)) {

                  $sql = ("INSERT INTO teams (teamName, category) VALUES ('$teamName', '$path')");


                  if (mysqli_query($link, $sql)) {
                     echo "<meta http-equiv='refresh' content='0'>";
                  }
              } else {
                  Print '<script>alert("Team already exists...");</script>';
              }
           }
         }
 ?>
