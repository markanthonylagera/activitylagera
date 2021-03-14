<?php
session_start();

//user already login redirect to 2
//if(!isset($_SESSION['user'])){
//	header('Location: login.php');
//}


if(isset($_POST['login']))

	if($_POST['username'] == 'Admin' and $_POST['password'] = 'password'){
		$_SESSION['user'] = $_POST['username'];
		$_SESSION['message'] = "Login Successfully";
		header('Location: home.php');
	}else{
		echo "<div>Invalid Credentials!!!</div>";
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
</head>
<style type="text/css">
	body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("bg1.jpg");

  /* Control the height of the image */
  min-height: 110%;


  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 100px;
  max-width: 400px;
  max-height: 1000px;
  padding: 50px;
  background-color: white;
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn1 {
  background-color: #00BFFF;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

.btn1:hover {
  opacity: 1;
}

</style>
<body>
	<div class="bg-img">
  <form method="POST" class="container">
    <h1>Login</h1>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <button type="submit" name="login" class="btn">Login</button>

  </form>
</div>
</body>
</html>