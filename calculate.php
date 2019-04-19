<style>
body{
  background-color:#68f443;
  font-size: 30px;
  font-family: Trebuchet MS, sans-serif;
  text-align: center;
}
.nav{
  font-size:20px;
  font-family: Cambria Math;
  text-align: right;
  text-decoration: "none";
  text-decoration-line: none;
}

input[type=button],[type=submit] {
  width: 20%;
  padding: 20px 20px;
  margin: 8px 0;
  box-sizing: 20px;
  border: 2px ;
  cursor: pointer;
  background-color: #43464f;
  color: #fff;
  border-radius: 30px;
  float: bottom;


/*position:absolute;
   bottom:0;
   width:100%;
   height:0px;*/
}

</style>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="nav">
	<a href="main.php">GO to channel selection</a>
	<a href="logout.php">LOGOUT</a>
</div>

<img src="starplus.png">
<img src="dd.jpg">
<img src="sab.png">
<img src="zeetv.png">
<img src="discovery-logo.gif">
<img src="Colors.png" width="180"  height="180">
<img src="max.jpg" width="160" height="180"><br>

<?php
include 'database.php';
$list="";

if(isset($_POST["order"])){
	$price=0.0;
	echo "Your Channels are:<br>";
	if(isset($_REQUEST["choice1"])){
        $list=$list ." Colors";
	    echo("Colors.....Rs 19<br>");
        $price=$price+19;
        
	}
	if(isset($_REQUEST["choice2"])){
		$list=$list." Zee Tv";
	    echo("Zee Tv .....Rs 19<br>");
		$price=$price+19;
	}	
	if(isset($_REQUEST["choice3"])){
		$list=$list." Star Plus";
		echo("Star Plus .....Rs 19<br>");
		$price=$price+19;
		
	}
	if(isset($_REQUEST["choice4"])){
		$list=$list." Sony";
		echo("Sony.....Rs 19 <br>");
		$price=$price+19;
		
	}
	if(isset($_REQUEST["choice5"])){
		$list=$list." Sab";
		echo("Sab .....Rs 19<br>");
		$price=$price+19;
		
	}
	if(isset($_REQUEST["choice6"])){
		$list=$list." &TV";
		echo("&TV .....Rs 19<br>");
		$price=$price+19;
		
	}
	if(isset($_REQUEST["choice7"])){
		$list=$list." Star Bharat";
		echo("Star Bharat .....Rs 19<br>");
		$price=$price+19;
		
	}
	if(isset($_REQUEST["choice8"])){
		$list=$list." Bindass";
		echo("Bindass .....Rs 10<br>");
		$price=$price+10;
		
	}
	if(isset($_REQUEST["choice9"])){
		$list=$list." MTV";
		echo("MTV .....Rs 7<br>");
		$price=$price+7;
		
	}
	if(isset($_REQUEST["choice10"])){
		$list=$list." Star Gold";
		echo("Star Gold .....Rs 12<br>");
		$price=$price+12;
		
	}
	if(isset($_REQUEST["choice11"])){
		$list=$list." Zee Cinema";
		echo("Zee Cinema .....Rs 19 <br>");
		$price=$price+19;
		
	}
	if(isset($_REQUEST["choice12"])){
		$list=$list." Zing";
		echo("Zing .....Rs 10<br>");
		$price=$price+10;
		
	}
	if(isset($_REQUEST["choice13"]))
	{$list=$list." Discovery";
		echo("Discovery .....Rs 4<br>");
		$price=$price+4;
		
	}
	if(isset($_REQUEST["choice14"])){
		$list=$list." Aaj Tak";
		echo("Aaj Tak .....Rs 5<br>");
		$price=$price+5;
		
	}
	if(isset($_REQUEST["choice15"])){
		$list=$list." NDTV India";
		echo("NDTV India .....Rs 1<br>");
		$price=$price+1;
		
	}
}
echo "Total amount is:<br>";
echo "Rs. ".$price;
// $username=$_SESSION['uuser'];
 //echo $username."<br>";
 //echo $list."<br>";
 //if(isset($_POST['upgrade'])) {
	$sql1="UPDATE channel SET channels='$list' WHERE username='$username'";
    if (!mysqli_query($conn,$sql1)) {
    	echo "  <br><br>Channels upgrade failed".mysqli_error()."<br> ";
    }
    else{
    	echo "<br><br>Channels upgrade successfull.<br>";
    }

//}
?>

</body>
</html>
