<!--
login.php
team 1 (Laura, Boubojorn, Qinquan, Jairo)
May 6th, 2019

This file serves as the login for users already registered
or to access the admin dashboard
-->
<?php
session_start();
date_default_timezone_set("America/New_York");

if ((isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != '')) {
    header("Location: dashboard.php");
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel = "stylesheet" href="assets/css/register.css">
    <title>HMS Login!</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-4 mx-auto">
          <div class="card card-signin flex-row my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Login</h5>

              <form class="form-signin" method = "POST">

                <div class="form-label-group">
                  <input type="text" id="inputUserame" name = "username" class="form-control" placeholder="Username">
                  <label for="inputUserame">Username</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" name = "pass" class="form-control" placeholder="Password">
                  <label for="inputPassword" >Password</label>
                </div>

                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">LOGIN</button>
             </form>
             <div class="container">
                <div class="row justify-content-center">
                   <div class="col-6"><br>
                      <a href="register.php" class="btn btn-outline-primary btn-block" style="white-space: normal;" >Register</a>
                   </div>
                   <div class="col-5"><br>
                      <a href="index.php" class="btn btn-outline-primary btn-block"style="white-space: normal;" >Back</a>
                   </div>
                </div>
             </div>
        </div>
      </div>
    </div>
</div>
</div>
<!-- Footer -->
<footer class="page-footer font-small">

  <div class="footer-copyright text-center py-3"> All rights reserved:
    <a style="color:white;" href="admin.php"> Admin Dashboard</a>
  </div>

</footer>
  </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect("localhost", "root", "", "hms") or die(mysql_error());

    $date = date("Y/m/d");
    $time = date("h:i:s a");

    $firstname = $_POST['name'] ?? '';
    $lastname = $_POST['lname'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = md5($_POST['pass']) ?? '';

    $sql = "SELECT username FROM participants where username = '$username' and password = '$password'";

    $result = mysqli_query($link, $sql);

    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $_SESSION["logged_in"] = true;
            $_SESSION["username"]  = $username;
            header("Location: dashboard.php");
        } else {
            print '<script>alert("User does not exist, click OK to redirect to registration page...");</script>';
            header("Refresh: 1; register.php");
        }
    }
}
 ?>
