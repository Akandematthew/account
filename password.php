<!DOCTYPE html>
<?php
$db=mysqli_connect("localhost","root","","forgotpassword");

if (isset($_POST['reset'])) {
	# code...
	$query="INSERT INTO `table` (`id`, `old_password`, `new_password`) VALUES (NULL, '$_POST[o_password]', '$_POST[n_password]');";
	$result=mysqli_query($db,$query);
	
	if ($result) {
		echo "success";
	}


}


?>
<html>
<head>
	<style type="text/css">
		header{
			background-color: lightgrey;

		}

	</style>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.2.1-dist/css/bootstrap.css">
</head>
<header><marquee>Reset your password here!</marquee></header>
<body>
	<style type="text/css">
		a:hover{color: black}
	</style>
	<div class="container">
		<div class="roll">
			<br>
			<br>
			<div class=" col-xsm-4 col-sm-6 col-md-4 col-lg-6 col-xlg-4">
				<form role="form">
					<div class="form-group">
						<label for="old password">Old password:</label>
						<input type="password" name="o_password" class="form-control" id="old password" placeholder="Enter old password here">
						
					</div class="form-group">
						<label for="password">New password:</label>
						<input type="password" name="n_password" class="form-control" id="new password" placeholder="Enter new password here">
					<div>
						<br>	
						
					<button type="submit" name="reset" class="btn btn-default"><a href="#">RESET password</a></button>
							
					
						

					</div>
					

				</form>
				
			</div>
			
		</div>		

	</div>
	<script type="text/javascript">
		alert("Reset your password here")
	</script>
</body>
</html>