<?php
 session_start();
   include 'connect.php';

      $username = $_POST['username'];
      $password = $_POST['password'];
     
      $query="select * from admin where username=\"$username\"";
   $result = mysqli_query($dbh,$query)
or die ('error executing the query'.mysqli_error($dbh));

$row = mysqli_fetch_array($result);

if($row['password']==$password)
{
header('location:ajax1.html');
}
    echo"Sorry, your credentials are not valid, Please try again.";
?>
