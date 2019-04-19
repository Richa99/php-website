<html>
<head> 
<title></title>
</head>
<body>
<style>
body  {
  //background-image: url("paper.gif");
  background-color: #68f442;
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
h1{
	font-size: 50px;
	font-family: Georgia, sans-serif;
	font-weight: "bold";
  color:"#87aec6";
  text-shadow: "2px";

}
h3{
	font-family: Georgia, sans-serif;
	font-weight: "bold";
}
div{
  font-family: Georgia, sans-serif;
  font-size: 20px;
  float: "center";
}
.nav{
  font-size:20px;
  font-family: Cambria Math;
  
  text-align: right;
  text-decoration: "none";
  text-decoration-line: none;

}


</style>
<h1 align="center">Get it Your Way...<h1>
<div class=nav><a href="logout.php">LOGOUT</a></div>
<img src="starplus.png">
<img src="dd.jpg">
<img src="sab.png">
<img src="zeetv.png">
<img src="discovery-logo.gif">
<img src="Colors.png" width="180"  height="180">
<img src="max.jpg" width="160" height="180"><br>
<div align="center"> 
<h3>Select your channels:</h3><br>

<form name="channels" action="calculate.php" method="post">
 <div  align="justify">
  <input type="checkbox" name="choice1" value="Colors">Colors.....Rs 19<br>
  <input type="checkbox" name="choice2" value="ZeeTv">Zee TV.....Rs 19<br>
  <input type="checkbox" name="choice3" value="Starplus">Star Plus .....Rs 19<br>
  <input type="checkbox" name="choice4" value="Sony">Sony .....Rs 19<br>
  <input type="checkbox" name="choice5" value="sab">Sab.....Rs 19<br>
  <input type="checkbox" name="choice6" value="andtv">&Tv .....Rs 19<br>
  <input type="checkbox" name="choice7" value="starbharat">Star Bharat .....Rs 19<br>
  <input type="checkbox" name="choice8" value="Bindass">Bindass .....Rs 10<br>
  <input type="checkbox" name="choice9" value="MTV">MTV .....Rs 7<br>
  <input type="checkbox" name="choice10" value="stargold">Star Gold .....Rs 12<br>
  <input type="checkbox" name="choice11" value="zeecinema">Zee Cinema .....Rs 19<br>
  <input type="checkbox" name="choice12" value="zing">Zing .....Rs 10<br>
  <input type="checkbox" name="choice13" value="Discovery">Discovery .....Rs 4<br>
  <input type="checkbox" name="choice14" value="aajtak">Aaj Tak .....Rs 5<br>
  <input type="checkbox" name="choice15" value="NDTV">NDTV India .....Rs 1<br>
</div>
  <input type="submit" name="order" value="ORDER & UPGRADE"><br>
</form>
</div>
</body>
</html>