<?php
session_start();
$aid=$_SESSION['id'];
//CREATE DB CONNECTION

$aid=$_SESSION['id'];
$dbuser="root";
$dbpass="";
$host="localhost";
$db="hostel";
$mysqli =new mysqli($host,$dbuser, $dbpass, $db);

//check connection

$ret="select * from admin where id=?";
$stmt= $mysqli->prepare($ret) ;
$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
while($row=$res->fetch_object())
 $location=$row->location;
{

if ($mysqli->connect_error)
{
die("connection failed:".$connect_error);

}
include('includes/checklogin.php');
check_login();


if (isset($_POST['submit'])){
    $aid=$_SESSION['id'];
    $description         =$_POST['description'];
    $amount        =$_POST['amount'];
    $comment       =$_POST['comment'];
    $location;
    

   //echo "Comment:"." " .$comment." " ."Amount IS :"." ".$amount." "."Description 
   //is:"." ".$description." "."Location is:"." ".$location." "."ID is:"." ".$aid;
$query="INSERT INTO `expenses` (`id`, `no`, `date`, `description`, `price`, `comment`, `location`)
 VALUES ('$aid', NULL, current_timestamp(), '$description', '$amount', '$comment', '$location')";

if (mysqli_query($mysqli, $query)) {
    header("location:Current_expenses.php");

  } else {
    echo "Error: ";
  }

}
}

?>