<style>
body  {
  //background-image: url("paper.gif");
  background-color: #cccccc;
  font-size: 50px;
  font-family: Georgia, sans-serif;
  font-weight: "bold";
  text-align: center;
}
input[type=button] {
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
</style>
<?php
include_once 'database.php';
    $name=$_POST["Name"];
	$email=$_POST["email"];
	$username=$_POST["username"];
	$pwd=$_POST["password"];
    $fail=validate_name($name);
    $fail.=validate_email($email);
    $fail.=validate_username($username);
    $fail.=validate_password($pwd);
     
    function validate_name($field)
     {
     	return ($field== "") ? "No Name was entered <br>":"";
     }
     function validate_username($field)
     {
     	if($field== "") return "No username was entered<br>";
     	elseif (preg_match("/[^a-zA-Z0-9_-]/", $field)) {

     		return "Only letters,numbers,- and _ in username<br>";
     	}
     	return "";
     }
     function validate_password($field)
     {
     	if($field == "") return "No password was entered";
     	elseif (!preg_match("/[a-z]/", $field)|| !preg_match("/[A-Z]/", $field)|| !preg_match("/[0-9]/", $field)) {
     		return "Password require 1each of a-z,A-Z,0-9<br>";
     	}
        return "";
     }
     function validate_email($field)
     {
     	if ($field == "") {
     		return "No email was entered";
     	}
     	elseif (!((strpos($field,".")>0) && (strpos($field, "@")>0))|| preg_match("/[^a-zA-Z0-9.@_-]/", $field)) {
     		return "Email address is invalid<br>";
     	}
     	return "";
     }
 if ($fail=="") {
      	echo "Form data successfully validated<br>";
      
    $hashpwd=password_hash($pwd, PASSWORD_DEFAULT);

    $sql="INSERT INTO users(Name,email,username,passward) VALUES('$name','$email','$username','$hashpwd')";

   if (!mysqli_query($conn,$sql)) {
    	echo "  Registration failed<br> ";
    }
    else{
    	echo "Registration successfull<br>";
    }

 $sql1="INSERT INTO channel(username) VALUES('$username')";

   if (!mysqli_query($conn,$sql1)) {
    	echo " channel table not entered ";
    }
    else{
    	echo " <br>";
    }
}
else{
	echo $fail;
}

   /* $result=mysqli_query($conn,$sql);
    if (!result) {
    	die("query failed :". mysqli_error());
    }*/
    


//header("refresh:3, url=first.php");	

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<br>
<br><br><br>
<a href="first.php"><input type="button" name="HomePage" value="Return toHome"></a>
</body>
</html>