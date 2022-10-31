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
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> </div>
		</div>
	</section>
	
	<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Product List </div>
		<a href='../Controller/add_product.php' style="text-align: center; font-size: 25px; color:#2d2244"> Add a Product  </a>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;opacity: 0.7;text-align:center;background:#fcc298;">
			<div class="row" style="padding:5px;"> 
			</div>	
				
			
	
	<div class="row" style="padding:20px;">
	<div class="col-md-10" style="text-align: center; font-size: 18px; color:#0d0f0e">
<?php

require_once('../Model/dbconnect.php');


	$sql = "SELECT * FROM product_list ";  
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0 )
	{
	  while($row = mysqli_fetch_array($result))
	  {
		  echo "<br> Product ID: ". $row[0]."<br>";
		  echo "<br> Name: ". $row[1]."<br>";
		  echo "<br> Category: ". $row[3]."<br>";
		  echo "<br> Shop Name: ". $row[4]."<br>";
          echo "<br> Price: ". $row[5]."<br>";
		  echo "</br>";
	  }
	}
	
	else{
		echo "No Products in this Database";
	}
	

?>
	</div>
	</div>
	</section>
	

<?php include "Footer.php";?>
  </body> 
</html>

