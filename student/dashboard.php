<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<?php
session_start();
if($_SESSION['rollno']=="")
{
	header('location:../index.php');
}

?>


</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10">
			<div class="headings">
			<h2>Student Management System</h2>
			<h3>Student Panel</h3>
			</div>
		</div>
		<div class="col-md-2">
			<h4><a href="dashboard.php?a=logout" style="padding: 2px 0px; color: white;">LOGOUT</a></h4>
		</div>
		
	</div>
	
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="leftsidebar text-center">
				<ul>
					<li><a href="dashboard.php?a=home" style="padding: 2px 90px;">HOME</a></li>
					
				</ul>
			</div>
		</div>
		<div class="col-md-9">
			<div class="rightsidebar">
				<div>
				<?php
					if(empty($_REQUEST['a']))
					{
						include('home.php');
					}elseif($_REQUEST['a']=='logout')
					{
						include('logout.php');
					}
					else include('home.php');


				?>
			</div>
			</div>
		</div>
		
	</div>
	
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				<h3>Copyright Protected</h3>
			</div>
			
		</div>
		
	</div>
	
</div>

</body>
</html>