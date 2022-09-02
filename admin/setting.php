<?php
$uname=$_SESSION['uname'];
include ("connection.php");

$sql="select * from adminlogin where uname='$uname'";
$check=mysqli_query($conn,$sql);
mysqli_error($conn);
if(mysqli_num_rows($check)>0)
{
	while($row=mysqli_fetch_assoc($check))
	{
		$age=$row['age'];
		$phone=$row['phone'];
		$email=$row['email'];
		$upass=$row['upass'];
	}
}

//UPDATING

if(isset($_POST['submit']))
{
	if(!empty($_POST['upass']) && !empty($_POST['age']) && !empty($_POST['phone']) && !empty($_POST['email']))
	{

		$spass=$_POST['upass'];
		$sage=$_POST['age'];
		$sphone=$_POST['phone'];
		$semail=$_POST['email'];
			$sql1="update adminlogin set upass='$spass', age='$sage', phone='$sphone',email='$semail' where uname='$uname'";
mysqli_query($conn,$sql1);
mysqli_error($conn);
header('location:dashboard.php');
	}else echo "Enter In All Fields";

}


?>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<div style="max-width: 300px; margin: auto;">
<form method="post" action="">

<div class="form-group">
	<label>Name</label>
	<input type="text" name="uname" value="<?php echo $_SESSION['uname']?>" disabled class="form-control">
</div>

<div class="form-group">
	<label>Age</label>
	<input type="text" name="age" value="<?php echo $age?>" class="form-control">
</div>

<div class="form-group">
	<label>Phone</label>
	<input type="text" name="phone" value="<?php echo $phone;?>" class="form-control">
</div>

<div class="form-group">
	<label>Password</label>
	<input type="text" name="upass" value="<?php echo $upass;?>" class="form-control">
</div>

<div class="form-group">
	<label>Email</label>
	<input type="text" name="email" value="<?php echo $email;?>" class="form-control">
</div>
<input type="submit" name="submit" class="btn btn-primary" value="UPDATE">
<form>

		</div>
	</div>
</div>

</div>