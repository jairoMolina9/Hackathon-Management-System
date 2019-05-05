<!--
particles.php
team 1 (Laura, Boubojorn, Qinquan, Jairo)
05/04/2019

This file serves as the cover page for the main page
Dynamically offers Register, Login and Logout button depending
on the session status
-->
<html>
   <head>
      <link rel="stylesheet" href="assets/css/particle.css">
      <link rel="stylesheet" href="assets/css/main.css"
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

   </head>

   <body>

  <section id="intro" class="wrapper style1 fullscreen fade-up">
         <div class="inner">
            <div id ="particles-js"></div>
            <div class ="btext">
            <h1>LowFi Hackathon</h1>
            <p>Borough of Manhattan Community College</p>
            <p>September 20th, 2019</p>
            <?php
            if ((isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != '')) {
               echo '<a href="logout.php" class="button">Logout</a>';
            } else {
               echo '<a href="register.php" class="button">Register</a>';
               echo '<a href="login.php" class="button">Login</a>';
            }
              ?>

         </div>
         </div>
       </section>


      <script src="assets/js/particles.js"></script>
      <script src="assets/js/app.js"></script>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

   </body>

</html>
