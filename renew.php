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
$id=$_SESSION['id'];

$aid=intval($_GET['regno']);

$copy=mysqli_query($mysqli,"INSERT INTO `cincome` (`id`, `fname`, `last_name`, `contact`, `room`, `fees`,`location`)
SELECT `id`, `firstName`, `lastName`,`contactno`,`roomno`, `feespm`, `location` 
   FROM `registration` WHERE regNo = $aid");
    if ($copy) {
     echo"<script>alert('Registered Succssfully');</script>";
	 header("location:cincome.php");
     
      die();
    }  

	  	?>
       