
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div style="max-width:300px; margin: auto;">
				
				<form method="post" action="">
					<div class="form-group">
						<label><h4>Enter Roll No</h4></label>
						<input type="text" name="rollno" class="form-control">
						<input type="submit" name="submit" value="GET DATA" class="btn btn-primary">
						
					</div>
				</form>

			</div>
		</div>
		
	</div>
	
</div>

<?php

if(isset($_POST['submit']))
{
	if(!empty($_POST['rollno'])){
		$rollno=$_POST['rollno'];

		$_SESSION['rollno']=$_POST['rollno'];
		
		include('connection.php');
		$sql="select * from student where rollno='$rollno'";

		$check=mysqli_query($conn,$sql);
		mysqli_error($conn);

		if(mysqli_num_rows($check)>0){
			while($row=mysqli_fetch_assoc($check))
			{
				$sname=$row['sname'];
				$sclass=$row['sclass'];
				$phone=$row['phone'];
				?>
				<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div style="max-width:300px; margin: auto;">
				
				<form method="post" action="">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" value="<?php echo $sname;?>">
						
					</div>

					<div class="form-group">
						<label>Class</label>
						<input type="text" name="class" class="form-control" value="<?php echo $sclass;?>">
						
					</div>

					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control" value="<?php echo $phone;?>">
						<input type="submit" name="submit" value="DELETE" class="btn btn-primary">
					</div>
				</form>

			</div>
		</div>
		
	</div>
	
</div><?php
			}
		}


	}else echo "<b style='color:orange;'>Enter Roll No to get data</b><br>";
}

?>

<?php
//updating
if(!empty($_POST['name']) && !empty($_POST['class']) && !empty($_POST['phone']))
{
	$name=$_POST['name'];
	$class=$_POST['class'];
	$phone=$_POST['phone'];
	$rollno=$_SESSION['rollno'];
	include("connection.php");
	mysqli_error($conn);

	$sql="delete from student where rollno='$rollno'";
	mysqli_query($conn,$sql);


	echo "Record Deleted";
}


?>



