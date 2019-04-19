<?php
session_start();
?>

<html>
<head> 
<title></title>
</head>
<body>
<style>
body  {
 background-image:"CableTV.jpg";
  background-color: #f3f70c;
}
.log {
  margin-top: 100px;
  margin-right: 100px;
  margin-bottom: 100px;
  margin-left: 100px;
  //width: 60%;
  //border: 3px solid #73AD21;
  //padding: 50px;
}
input[type=text] {
 width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px ;
  border-radius: 30px;
}
input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px ;
  border-radius: 30px;
}
input[type=button],[type=submit] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: 40px;
  border: 2px ;
  cursor: pointer;
  background-color: #43464f;
  color: #fff;
  border-radius: 30px;

}
button.hover{
  color: #777a7f;
  background-color: transparent;
  //text-decoration: underline;
}
h2{
	font-size: 50px;
	font-family: Georgia, sans-serif;
	font-weight: "bold";

}
h3{
	font-family: Georgia, sans-serif;
	font-weight: "bold";
}
</style>

<div class="log" align="center">
	<h2>Login</h2>
	<form name="loginform" action="login.php" method="post">
		<input type="text" name="username" placeholder="Username"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<input type="submit" name="submitlog" value="Login"><br>
	</form><br>
	<h3>OR</h3><br>
	<a href="signup.php"><input type="button" name="tosignup" value="SignUp"></a>
	
</div>

</body>
</html>