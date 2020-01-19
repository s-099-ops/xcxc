<html>
<head>
	<title>Material management</title>
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="admin_only.css">
</head>
<body>
	<div class="sign-Up-form">
		<img src="admin.png">
			<h1>Admin Login</h1>
				<form>
				<input type="email"  name="username" class="input-box" id="username" placeholder="Admin's email">

				<input type="Password" name="password" class="input-box" id="password" placeholder="Admin's password">

				<p><span><input type="checkbox"></span>I agree to the terms of 	services</p>

				<hr>

				<p class="or">OR</p>

				<button type="button" name="loginbtn" class="twitter-btn" onclick="validation();">Login</button>
			</form>
	</div>
	<script>
			function validation(){
				var user = 'lankarice@gmail.com';
				var pass = 'admin';

				var userName = document.getElementById("username").value;
				var userPass = document.getElementById("password").value;

			if((user == userName && pass == userPass))
			{
				swal({
					title: "Login Succesful!!",
					title: "Thank you!!",
					icon : "Success",
					});
			}
			else if((userName.length <= 0) && (userPass.length <= 0))
			{
			swal({
					title: "Login Failed!!",
					title: "User name and password not fulfilled",
					icon : "info",
				});
			}
			else 
			{
			swal({
					title: "Login Failed!!",
					title: "User name and password incorrect , pleace try again",
					icon : "error",
				});
			}
		}
		</script>
</body>
</html>
