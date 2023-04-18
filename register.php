<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>login and registration form</title>
	<link rel="stylesheet" href="login.css">
	
</head>
<body background="#fff">
	<div class="form-box">
		<div class="button-box">
			<div id="btn"></div>
			<button type="button"class="toggle-btn"onclick="login()">LOG IN</button><button type="button"class="toggle-btn"onclick="register()">REGISTER</button>
		</div>
		<form id="login" class="input-group">
			<input type="text" placeholder="User Id" name="" class="input-field">
			<input type="text"placeholder="Enter Password" name="" class="input-field">
			<button type="submit" class="submit-btn">log in</button>
		</form>
        <form action="" method="post" id="register" class="input-group">
			<input type="text" placeholder="User Id" name="username" class="input-field" required="">
			<input type="email" placeholder="Email Id" name="" class="input-field" required="">
			<input type="text"placeholder="Enter Password" name="password" class="input-field" required="">
			<button type="submit" class="submit-btn">Register</button>
		</form>	
	</div>

	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

		function register(){
		  x.style.left = "-400px";
		  y.style.left = "50px";
		  z.style.left = "110px";
		}
		function login(){
		  x.style.left = "50px";
		  y.style.left = "450px";
		  z.style.left = "0px";
		}
		
	</script>
	</div>

	
</body>
</html>