<html>
<head> 
<title></title>
</head>
<body>
<style>
body  {
  background-image: url("paper.gif");
  background-color: #0ececb;
}
.sign {
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

h2{
	font-size: 50px;
	font-family: Georgia, sans-serif;
	font-weight: "bold";

}
</style>
<div class="sign">
	<h2> Signup</h2>
	<form name="signup" action="signupdb.php" method="post">
		<input type="text" name="Name" placeholder="Name"><br>
		<input type="text" name="email" placeholder="E-mail ID"><br>
		<input type="text" name="username" placeholder="Username"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<input type="submit" name="signin" value=" SignUp"><br>
	</form>
</div>


</body>
</html>