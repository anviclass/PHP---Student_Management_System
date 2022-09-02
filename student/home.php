

<?php
$rollno=$_SESSION['rollno'];

include ("connection.php");

$sql="select * from student where rollno='$rollno'";
$check=mysqli_query($conn,$sql);
mysqli_error($conn);
if(mysqli_num_rows($check)>0)
{
	while($row=mysqli_fetch_assoc($check))
	{
		$sname=$row['sname'];
		$sclass=$row['sclass'];
		$sphone=$row['phone'];
	}
}



?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="home text-center mt-5">
			<h4>Welcome - <?php echo $sname;?></h4>
			<h4>Class - <?php echo $sclass;?></h4>
			<h4>Roll no - <?php echo $rollno;?></h4>
			<h4>Phone No. - <?php echo $sphone;?></h4>
			
			
			<h4><a href="dashboard.php?a=logout" style=" background-color: black;padding: 5px 5px; color: white; border: 1px solid white;">LOGOUT</a></h4>			
		</div>
		</div>
	</div>
</div>

