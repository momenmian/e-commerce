<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Cart </title>
<?php include "UI.php";?>
		</head>

  <body> 

     
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Online Shopping Mall </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244">
			
			<a href="show_product_user.php"> Show Product</a> 
			<a href='../Controller/search.php' style="margin-left: 20px;"> Order Status </a>
			<a href='../Model/signout_process.php' style="margin-left: 20px;"> Sign Out </a> <br><br>
				 
			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Cart </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;opacity: 0.7;text-align:center;background:#fcc298;">
			<div class="row" style="padding:5px;"> 
			</div>	
				
			
	
	<div class="row" style="padding:20px;">
	<div class="col-md-10" style="text-align: center; font-size: 18px; color:#0d0f0e">
<?php

require_once('../Model/dbconnect.php');


	$sql = "SELECT * FROM cart ";  
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0 )
	{
	  while($row = mysqli_fetch_array($result))
	  {
        
        echo "<td> Product ID: " . $row[0] . "</td>";
		echo "<td> Name: " . $row[1] . "</td>";
		echo "<td> Price: " . $row[2] . " </td>";

        echo '<br/><a href="../Model/delete_item_process.php">Delete</a>';
		echo'<br/>';

        $sum = 0;
        $sum_total = $sum + $row[2];
	
	  }
	  echo "<td> Total: </td>";
	  print ($sum_total);

		echo '<br/><a href="../Controller/order.php">Check out</a>';
        echo'<br/>';
	
	}
	
	else{
		echo "No iteams in your cart";
	}

	

?>
	</div>
	</div>
	</section>
	
<?php include "Footer.php";?>
  </body> 
</html>

