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
	}
}



?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="home text-center mt-5">
			<h4>Welcome - <?php echo $_SESSION['uname'];?></h4>
			<h4>Age - <?php echo $age;?></h4>
			<h4>Phone No. - <?php echo $phone;?></h4>
			<h4>Email - <?php echo $email;?></h4>
			<h4>Time - <?php echo $_SESSION['uname'];?></h4>
			<h4><a href="dashboard.php?a=logout" style=" background-color: black;padding: 5px 5px; color: white; border: 1px solid white;">LOGOUT</a>
				<a href="dashboard.php?a=setting" style="padding: 5px 5px; color: white; border: 1px solid white; background-color: black;">SETTING</a></h4>			
		</div>
		</div>
	</div>
</div>

