<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	echo "Not connected to server";
}
if(!mysqli_select_db($conn,'login')){
	echo "Database not selected";
}

	
?>
