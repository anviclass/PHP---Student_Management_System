
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<?php
$notice="";

if(isset($_POST['submit']))
{
	if(!empty($_POST['uname']) && !empty($_POST['upass']))
	{
		$uname=$_POST['uname'];
		$upass=$_POST['upass'];

		include('connection.php');

		$sql="select * from adminlogin where uname='$uname' && upass='$upass'";
		$check=mysqli_query($conn,$sql);

		if(mysqli_num_rows($check)>0)
		{
			session_start();
			$_SESSION['uname']=$uname;
			header('location:dashboard.php');
		}else $notice= "Enter correct details";

	}else $notice="Enter in all fields";
}

?>


<div class="main">
	

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<div class="form1">
				<h1 style="font-weight: bold;">Admin Login</h1>
				<?php echo "<h3 style='color:red;'>".$notice."</h3>";?>
			
			<form method="post" action="">
				<div class="form-group">
				<label>Enter Username</label>
				<input type="text" name="uname" class="form-control">	
				</div>

				<div class="form-group">
				<label>Enter Password</label>
				<input type="text" name="upass" class="form-control">	
				</div>
				
				<input type="submit" name="submit" value="LOGIN" class="btn btn-primary">
			</form>

		</div>
		</div>
	</div>
	
</div>
</div>

</body>
</html>