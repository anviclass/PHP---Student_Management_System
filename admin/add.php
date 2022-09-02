<script type="text/javascript">
	function abc(){
		let a=document.getElementById("number").value;

		if(isNaN(a))
		{
			alert("only numbers allowed in Roll no field");
			document.getElementById('notice').innerHTML="only numbers allowed in Roll no field";
		}
	}
</script>

<?php

if(isset($_POST['submit']))
{
	if(!empty($_POST['sname']) && !empty($_POST['sclass']) && !empty($_POST['srollno']) && !empty($_POST['sphone']) && !empty($_POST['spass']))
	{
		$sname=$_POST['sname'];
		$sclass=$_POST['sclass'];
		$srollno=$_POST['srollno'];
		$sphone=$_POST['sphone'];
		$spass=$_POST['spass'];

		include("connection.php");

		$sql1="select * from student where rollno='$srollno'";
		$check=mysqli_query($conn,$sql1);

		if(mysqli_num_rows($check)>0)
		{
			echo "<b>Roll No - ".$srollno." - Already Exists</b>";
		}else {
					$sql="insert into student(sname,sclass,rollno,phone,spass) 
		values('$sname','$sclass','$srollno','$sphone','$spass')";

		mysqli_query($conn,$sql);
		mysqli_error($conn);
		echo "<b>Record UPDATED</b>";

		}


	}else echo "<b>Enter in all fields</b>";
}



?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div style="max-width:300px; margin:auto;">
				
				<form method="post" action="">
					
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="sname" class="form-control">
					</div>

					<div class="form-group">
						<label>Class</label>
						<input type="text" name="sclass" class="form-control">
					</div>

					<div class="form-group">
						<label>Roll no</label>
						<input type="text" name="srollno" class="form-control" id="number" onchange=" return abc();">
						<span id="notice" style="color: orange;"></span>
					</div>

					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="sphone" class="form-control">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="text" name="spass" class="form-control">
					</div>

					<input type="submit" name="submit" value="ADD STUDENT" class="btn btn-primary">
				</form>

			</div>
		</div>
		
	</div>
	
</div>