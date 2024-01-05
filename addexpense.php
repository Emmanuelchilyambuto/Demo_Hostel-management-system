<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Add expense</title>
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
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>


</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Add expense </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">

							
										<form action="A1.php" method="post" class="form-horizontal">
                        <br><br>
						<div class="form-group">
                    <label for="pname"  class="col-sm-2 control-label">Description </label>
					<div class="col-sm-8">
                        <input type="text" name="description" id="seater"  class="form-control" required placeholder="Item" autocomplete="on">
                </div>
						</div>

                <br>
                <div>
					<div class="form-group">
                    <label for="pname"  class="col-sm-2 control-label">Amount </label>
					<div class="col-sm-8">
                        <input type="text" name="amount" id="seater"  class="form-control" required placeholder="Cost" autocomplete="on">
                </div>
						</div>
                <br>
                <div>
					<div class="form-group">
                    <label for="pname"  class="col-sm-2 control-label">Comment </label>
					<div class="col-sm-8">
                        <input type="text" name="comment" id="seater"  class="form-control"  placeholder="Addition info" autocomplete="on">
                </div>
						</div>
						
                <br>
                <div>
                <center>
               <input type="submit" name="submit" Value="Add" class="btn btn-primary">
			</center>
                <br>
                <br>
                
                </div>
        </center>
        </div>
        </form>

									</div>
									</div>
								</div>
							</div>
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
</body>


</html>`