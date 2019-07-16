<!DOCTYPE html>
<html>
<?php

$link=mysqli_connect('localhost','root','','matek');

if (isset($_POST['register'])) {
	$testa='';
		$testb='';
		$testc='';
	$testa=$_POST['password'];
	$testb=$_POST['confirmpassword'];
			
	
$query="INSERT INTO `user_table` (`id`, `F_name`, `L_name`, `Ph_number`, `state`, `Email`, `username`, `social`, `password`) VALUES (NULL,'$_POST[fname]', '$_POST[lname]', '$_POST[pnum]', '$_POST[state]', '$_POST[username]', '$_POST[e_mail]', '$_POST[social]', '$_POST[password]');";
$result= mysqli_query($link,$query);
if ($result&&$testa === $testb) {
	$testa=$testc;
	echo "success";
	# code...
}
else{
	echo "password mismatch";
}

	# code...
}
else{
	echo "Please re-fill the form appropriately";
}


?>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.2.1-dist/css/bootstrap.css">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-6">
	 			<h2 >Registration Form </h2>
								<hr>
										<form role="form" method="POST" action="#">

										<div class="form-group">
											<label for="name">First name</label>
										<input type="text" class="form-control" name="fname" id="first name" placeholder="Enter First Name" style="border-radius:3px;padding:5px;width: 300px"><br>

										<label for="last name">Last Name:</label>
										<input type="text" class="form-control" name="lname" id="Last name" placeholder="Enter Last Name" style="border-radius:3px;padding:5px;width: 300px">

										<br>
										<br> 
										<label for="phone number" style="border-radius:3px;padding:5px">Phone Number:</label>
										<input type="text" class="form-control" name="pnum" id="Phone Number" placeholder=" Format:08056565656" style="border-radius:3px;padding: 5px;width: 300px">

										<br>
										<label for="state">State</label>
										<select name="state" class="form-control" style="border-radius:3px;padding: 5px;width: 300px">
											<option>-Select-</option>
											<option>Abuja FCT</option>
											<option>Abia</option>
											<option>Adamawa</option>
											<option>Akwa Ibom</option>
											<option>Anambra</option>
											<option>Bauchi</option>
											<option>Bayelsa</option>
											<option>Benue</option>
											<option>Borno</option>
											<option>Cross River</option>
											<option>Delta</option>
											<option>Ebonyi</option>
											<option>Edo</option>
											<option>Ekiti</option>
											<option>Enugu</option>
											<option>Gombe</option>
											<option>Imo</option>
											<option>Jigawa</option>
											<option>Kaduna</option>
											<option>Kano</option>
											<optio>Kastina</option>
											<option>Kebbi</option>
											<option>Kogi</option>
											<option>Kwara</option>
											<option>Lagos</option>
											<option>Nassarawa</option>
											<option>Niger</option>
											<option>Niger</option>
											<option>Ogun</option>
											<option>Ondo</option>
											<option>Osun</option>
											<option>Oyo</option>
											<option>Plateau</option>
											<option>Rivers</option>
											<option> Sokoto</option>
											<option>Taraba</option>
											<option>Yobe</option>
											<option>Zamfara</option>
											<option>Outside Nigeria</option>
										</select>


										<br>
										<label for="Username"> Username:</label>
										<input name="username" type="text" class="form-control" id="usename" placeholder="Your preferred Username" style="border-radius: 3px;padding: 5px;width: 300px"><br>


										<div>Email</div>
										<input type="email" name="e_mail" class="form-control" id="Email" placeholder="example@gmail.com" style="border-radius: 3px;padding: 5px;width: 300px">


										<br>
										<br>
										<label for="Where did you hear about us?">Where did you hear about us?</label>
										<select name="social" class="form-control" style="border-radius:3px;padding: 5px;width: 300px">
											<option>-Select-</option>
											<option>Facebook</option>
											<option>Google</option>
											<option>Nairaland</option>
											<option>Linda Ikeji Blog</option>
											<option>Twitter</option>
											<option>Instagram</option>
											<option>Friend</option>
											<option>Others</option>
										</select>


										<br>
										<br>
										<label for="password">Password:</label>
										<input type="password" name="password" class="form-control" id="password" placeholder="Enter password" style="border-radius:3px;padding:5px;width: 300px">

										<br>
										<label>Confirm Password:</label>
										<input type="password" name="confirmpassword" class="form-control" id="password" placeholder="Re-type your password" style="border-radius:2px;width:210px;padding: 5px;width: 300px">

										<br>
										<br>
										
											
										
										<button type="submit" name="register" class="btn btn-default" style="width:120px">SUBMIT</button>
										<br>
										<br>
										<br>
									</div>


									</form>
	 		</div>

			


		</div>

	</div>

</body>
</html>