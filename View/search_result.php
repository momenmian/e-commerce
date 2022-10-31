<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Order Status </title>
<?php include "UI.php";?>
		</head>

  <body> 

     
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Online Shopping Mall </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				
			<a href="show_product_user.php"> Show Product</a> 
			<a href="cart.php" style="margin-left: 20px;"> Cart </a>
			<a href='../Controller/home.php' style="margin-left: 20px;"> Sign Out </a> <br><br>
				 
			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Order Status </div>
		<a href='../Controller/search.php' style="text-align: center; font-size: 25px; color:#2d2244"> Search Again </a>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;opacity: 0.7;text-align:center;background:#fcc298;">
			<div class="row" style="padding:5px;"> 
			</div>	
				
			
	
	<div class="row" style="padding:20px;">
	<div class="col-md-10" style="text-align: center; font-size: 18px; color:#0d0f0e">
<?php

require_once('../Model/dbconnect.php');

if(isset($_POST['ordr_id'])){
	
	$a = $_POST['ordr_id'];
	
	$sql = "SELECT * FROM order_list WHERE order_id = '$a' ";  
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0 )
	{
	  while($row = mysqli_fetch_array($result))
	  {
		  echo "<br> Order ID: ". $row[0]."<br>";
		  echo "<br> Name: ". $row[1]."<br>";
		  echo "<br> Address: ". $row[2]."<br>";
		  echo "<br> Order Status: ". $row[3]."<br>";
		  echo "</br>";      
	  }
	}
	
	else{
		echo "Order ID is wrong";
	}
	
}

?>
	</div>
	</div>
	</section>
	
<?php include "Footer.php";?>
  </body> 
</html>

