<!-- <?php

include 'db.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
	header("Location: dasboard.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email Atau Password anda Salah.')</script>";
	}


	


}

?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Ceerkom.</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="https://upload.wikimedia.org/wikipedia/commons/a/aa/Team_icon.png">
		</div>


		<div class="login-content">
			<form action="dashboard2.html">
				<h2 class="title" >Login</h2>
           		<div class="input-div pass">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
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
           		    	<input type="password" class="input">
            	   </div>
            	</div>

				<div style="float: left;" class="content"  >
					<p for="rememberMe">Remember me</p>
				</div>
				<div class="checkbox" style="float:left; padding-left: 10pt;" >
					<input type="checkbox" id="rememberMe">
				</div>
				
            	<a href="forgetpw.html"  >Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
				<!-- <div class="btn"> 
					<a href="dashboard2.html"  style="
					font-size: 1.2rem;  
					color: #fff;
					padding-top: 10px;
					font-family: 'Poppins', sans-serif;
					text-transform: uppercase;
					margin: 1rem 0;
					cursor: pointer;
					transition: .5s; "> -->
					<!-- <center  >
						LOGIN
					</center> -->
					<!-- </a> -->
				</div>

				<div style="float:right; text-align: right;" class="content"  >
					<a href="signup.html" >Buat disini</a>
					<a href="LoginAdmin.php" >Masuk Sebagai ADMIN</a>
				</div>
				
				<p >Tidak memiliki akun? </p>	

				

            </form>
        </div>
    </div>
    <script type="text/javascript" src="index.js"></script>
</body>
</html>