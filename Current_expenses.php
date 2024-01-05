<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Expenses</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">View Current expenses </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">View Current expenses</div>
									<div class="panel-body">
									
		
                                <button><a href="report.php">Render</a></button>
								<br>
								<br>
									

										<table  class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											
                                           
											<th>Description</th>
											<th>Price</th>
											<th>Coment </th>
											<th>Location </th>
                                            <th>Date</th>
                                            <th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											
                                           
											<th>Description</th>
											<th>Price</th>
											<th>Coment </th>
											<th>Location </th>
                                            <th>Date</th>
                                            <th>Action</th>
										</tr>
									</tfoot>
										
						<?php
session_start();
$dbuser="root";
$dbpass="";
$host="localhost";
$db="hostel";
$mysqli =new mysqli($host,$dbuser, $dbpass, $db);
include('includes/checklogin.php');
check_login();
$aid=$_SESSION['id'];

$select=mysqli_query($mysqli,"SELECT * FROM expenses WHERE id=$aid ");
$num=mysqli_num_rows($select);

               if ($num>0){
                 while($result=mysqli_fetch_assoc($select))   
                 echo "
                 <tr>
                 
                 <td>".$result['description']."</td>
                 <td>".$result['price']."</td>
                 <td>".$result['comment']."</td>
                 <td>".$result['location']."</td>
                 <td>".$result['date']."</td>
                 
                 <td>

                
            
                 </td>
                 </tr>
                 ";
               }
			
               ?>
									</div>
								</div>
								
								</table>

								<?php  
								
								$aid=$_SESSION['id'];

$result ="SELECT sum(price) FROM expenses where id=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('i',$aid);
$stmt->execute();
$stmt->bind_result($sum);
$stmt->fetch();
$stmt->close();
//$te = mysqli_query($mysqli,"SELECT sum(price) FROM expense WHERE id=$aid AND date BETWEEN '$df' AND '$dt'");
								//echo $sum;


?>
								<label for="te"><b></b>TOTAL EXPENSE</label>	
							<input type="text" value="K<?php 
							echo $sum ?>" Readonly="readonly">
							</div>
						
									
							

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
</script>
</body>

</html>