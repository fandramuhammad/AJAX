<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:admin.php'); }
   require_once("connect.php");
?>

<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<script src="js/docs.min.js"></script>  
<script src="script.js"></script>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<form action="proseslogin.php" method="post">
</head>
<body>
<center>
<br>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<br>
				<br>
				<h3>Sign In</h3>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="username" placeholder="username" required=""> 
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" placeholder="password" required=""> 
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<br>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="daftar.php">Sign Up</a>
				</div>
			
			</div>
		</div>
	</div>

	<br>
	<br>
	<h2 style="color: white">Harus Login dulu yaaa menggunakan admin!</h2>
	<center>
       <div class="menu">
     
			<ul>
		<h5 style="text-align: center; font-family: sans-serif; color: white;">
        <label for="input"> Wikipedia :</label><h5>
        <input type="text" id="input" value="">
        <button id="submit-btn">submit</button>
					
			</ul>
			
		</div>
</center>

	  </header> 
	<center>
	<li class="wikipedia-container">
        <h3 style="text-align: center; font-family: Gill Sans MT; color: white;">Berikut merupakan link untuk redirect ke wikipedia</h3>
        <h4 style="color: white;"><ul id="wikipedia-links">Cari apa?</ul></h4>
    </li>

</div>
<div align="right">
&copy; Copyright 2019
</div>
</body>
</html>