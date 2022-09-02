
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div style="max-width:300px; margin: auto;">
				
				<form method="post" action="">
					<div class="form-group">
						<label><h4>Enter Class To search</h4></label>
						<input type="text" name="class" class="form-control">
						<input type="submit" name="submit" value="GET DATA" class="btn btn-primary">
						
					</div>
				</form>

			</div>
		</div>
		
	</div>
	
</div>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div style="max-width:300px; margin: auto;">

<table border="1" cellpadding="5" cellspacing="5">
	<tr><th>NAME</th><th>CLASS</th><th>ROLL NO</th><th>PHONE</th></tr>
<?php

if(isset($_POST['submit']))
{
	if(!empty($_POST['class'])){
		
		$class=$_POST['class'];

		include('connection.php');
		$sql="select * from student where sclass='$class'";

		$check=mysqli_query($conn,$sql);
		mysqli_error($conn);

		if(mysqli_num_rows($check)>0){
			while($row=mysqli_fetch_assoc($check))
			{
				echo "<tr>
				<td>{$row['sname']}</td>
				<td>{$row['sclass']}</td>
				<td>{$row['rollno']}</td>
				<td>{$row['phone']}</td>
				</tr>";
	
			}
		}


	}else echo "<b style='color:orange;'>Enter Class to get data</b><br>";
}

?>
</table>
</div></div></div></div>