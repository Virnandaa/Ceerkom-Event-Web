

<!DOCTYPE html>
<html>
<head>
	<title>Ceerkom.</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">




	<?php

include 'db.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
	header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['confirmpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}

	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
?>



</head>
<body>






	
	<div class="container">
		<div class="img">
			<img src="https://upload.wikimedia.org/wikipedia/commons/a/aa/Team_icon.png">
		</div>
		<div class="login-content">
			<form action="login.php">
				<h2 class="title">Sign Up</h2>
           		<div class="input-div pass">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" class=" ">
           		   </div>
           		</div>
				   <div class="input-div pass">
					<div class="i"> 
						 <i class="fas fa-lock"></i>
					</div>
					<div class="div">
						 <h5>Username</h5>
						 <input type="text" class="input">
				 </div>
			  </div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="text" class="input">
                   </div>
            	</div>
                <div class="input-div pass">
                    <div class="i"> 
                         <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                         <h5>Confirm Password</h5>
                         <input type="text" class="input">
                 </div>
              </div>
            	<input type="submit" class="btn" value="Sign Up">
            </form>
        </div>
    </div>
    <!-- <script type="text/javascript" src="index.js"></script> -->
    <!-- <script type="text/javascript" src="index.js"></script> -->
</body>
</html>