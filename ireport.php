<?php
session_start();
//include('includes/config.php');
$dbuser="root";
$dbpass="";
$host="localhost";
$db="hostel";
$mysqli =new mysqli($host,$dbuser, $dbpass, $db);
include('includes/checklogin.php');
check_login();
$aid=$_SESSION['id'];

 $copy=mysqli_query($mysqli,"INSERT INTO `income` (`id`, `fname`, `last_name`, `contact`, `room`, `fees`, `date`, `location`)
SELECT `id`, `fname`, `last_name`, `contact`, `room`, `fees`, `date`, `location` 
FROM `cincome` WHERE id=$aid");
 $delet=mysqli_query($mysqli,"DELETE FROM `cincome` WHERE id=$aid");

    if ($delet) {
     echo"<script>alert('Deleted Succssfully');</script>";
	 header("location:cincome.php");
     
      die();
    }  
	
	
?>