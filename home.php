<?php

//CREATE DB CONNECTION

$conn = new mysqli($host="localhost",$user="root",$password="",$db="hostel");

//check connection

if ($conn->connect_error)
{
die("connection failed:".$connect_error);

}
    
if(isset($_POST['submit'])){
    
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $pass = ($_POST['password']);
 
    $select = " SELECT * FROM login  WHERE contact = '$contact' && password = '$pass'";
 
    $result = mysqli_query($conn, $select);
    $row=mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0){
        if($row["user_type"]=="user"){
            header('location:user1.php');
        }
       else if($row["user_type"]=="admin"){
        header('location:dashboard.php');
    }
    else if($row["user_type"]=="staff2"){
        header('location:user2.php');
    }
    else if($row["user_type"]=="staff2"){
        header('location:staff2home.html');
    }
    else if($row["user_type"]=="staff3"){
        header('location:staff3home.html');
    }
    else if($row["user_type"]=="staff4"){
        header('location:staff4home.html');
    }
    else if($row["user_type"]=="staff5"){
        header('location:staff5home.html');
    }
    else if($row["user_type"]=="staff6"){
        header('location:staff6home.html');
    }
    else
     {
        echo "error";
    }
}
}

?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Login5</title>

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head
<body>
	
	<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3" style="margin-top:4%">
						<h1 class="text-center text-bold text-light mt-4x">Prime Apertments</h1><br>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
							
								<form action="" class="mt" method="post">
									<label for="" class="text-uppercase text-sm">Your Contact</label>
									<input type="text" placeholder="Username" name="contact" class="form-control mb" required>
									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" name="password" class="form-control mb" required>
									

									<input type="submit" name="login" class="btn btn-primary btn-block" value="login" >
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>