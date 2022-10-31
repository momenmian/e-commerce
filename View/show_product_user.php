<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Product List </title>
<?php include "UI.php";?>
		</head>

  <body> 

     
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Online Shopping Mall </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244">
			
			<a href='../Controller/search.php' style="margin-left: 20px;"> Order Status </a>
			<a href='../Model/signout_process.php' style="margin-left: 20px;"> Sign Out </a> <br><br>
				

				 
			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Product List </div>
		<a href="cart.php" style="text-align: center; font-size: 25px; color:#2d2244"> Cart  </a>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;opacity: 0.7;text-align:center;background:#fcc298;">
			<div class="row" style="padding:5px;"> 
			</div>	
				
			
	
	<div class="row" style="padding:20px;">
	<div class="col-md-10" style="text-align: center; font-size: 18px; color:#0d0f0e">

<?php

require_once('../Model/dbconnect.php');
session_start();


	$sql = "SELECT * FROM product_list ";  
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0 )
	{
	  while($row = mysqli_fetch_array($result))
	  {


		$_SESSION['product_id']=$row[0];
		//echo "<tr><td><img src=images/$row[2] class='rounded-circle' alt='$row[1]'></td>";

		//$image = $row[2];
		//echo "<img src='$image' >";

		echo "<td>" . "<img src=".$row[2].' width=50px height="50px">' . "</td>";



		echo "<td> Product ID: " . $row[0] . "</td>";
		echo "<td> Name: " . $row[1] . "</td>";
		echo "<td> Category: " . $row[3] . "</td>";
		echo "<td> Shop Name: " . $row[4] . "</td>";
		echo "<td> Price: " . $row[5] . " </td>";

		echo
		"<td> Size: <select> 
		<option> M </option>
		<option > L </option>
		<option > XL </option>
		<option> XXL </option>
		</select> </td>";

		echo
		"<td> Color: <select> 
		<option> Black </option>
		<option > Pink </option>
		<option > White </option>
		<option> Blue </option>
		</select> </td>";


		$_SESSION['price']=$row[5];
		$_SESSION['name']=$row[1];

		
		echo '<br/><a href="../Model/cart_process.php?' . SID . '">Add to Cart</a>';
	
		echo'<br/>';
		
		
	  }
	}
	else{
		echo "No Products in this Database";
	}

?>
	</div>
	</section>
	
	

<?php include "Footer.php";?>
  </body> 
</html>

