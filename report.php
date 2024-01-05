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

 $copy=mysqli_query($mysqli,"INSERT INTO `expense` (`id`, `date`, `description`, `price`, `comment`, `location`)
SELECT `id`,`date`, `description`, `price`, `comment`, `location`
 FROM expenses WHERE id=$aid");
 $delet=mysqli_query($mysqli,"DELETE FROM `expenses` WHERE id=$aid");

    if ($delet) {
     echo"<script>alert('Deleted Succssfully');</script>";
	 header("location:Current_expenses.php");
     
      die();
    }  
	
	
?>