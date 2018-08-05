<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'tiger';
$db_name = 'saahil';
 $dbh=mysqli_connect($db_host,$db_user,$db_password,$db_name) or die("Error connecting to the database".mysqli_connect_error($dbh));
 ?>