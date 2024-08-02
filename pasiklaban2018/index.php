<?php
session_start();
if(isset($_POST['btnlogin'])){
	require 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = mysqli_query($con, 'select * from login where username="' .$username. '" AND password="' .$password. '"');
	if(mysqli_num_rows($result)==1){
		$row = mysqli_fetch_array($result);
		$_SESSION['username'] = $username;
		$_SESSION['nickname'] = $row["nickname"];
		header('Location: main.php');
	}else
		echo '<p style="text-align:center;color:red">Invalid Account!</p>';
	}
if(isset($_GET['logout'])){
	session_unregister('username');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

html {
   min-height: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background: #f7cac9;
    background-repeat:no-repeat;
  background: -moz-linear-gradient(-45deg, #f7cac9 0%, #92a8d1 100%);
  background: -webkit-linear-gradient(-45deg, #f7cac9 0%, #92a8d1 100%);
  background: linear-gradient(135deg, #f7cac9 0%, #92a8d1 100%);
  font-family: 'Roboto', sans-serif;
  letter-spacing: 1px;
}

input[type=text], input[type=password] {
	font-size: 15px;
    width: 100%;
	height:6%;
    padding: 6px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.container {
	height:45%;
	width:45%;
}
.containerpos {
	padding-top:10%;
	padding-left:35%;
}
}
</style>
</head>
<body>
<form method="post" action="index.php?action=login">
<div class="containerpos">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="btnlogin">Login</button>
  </div>
</div>
</form>

</body>
</html>

