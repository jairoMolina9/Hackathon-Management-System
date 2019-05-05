<!--
logout.php
team 1 (Laura, Boubojorn, Qinquan, Jairo)
05/04/2019

This file serves to destroy the session and log out the user
Directly redirects to the main page
-->
<?php
session_start();

date_default_timezone_set("America/New_York");

session_destroy();

header("Location: index.php");

exit;
?>
