<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Order List </title>
<?php include "UI.php";?>
		</head>

  <body> 

     
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Online Shopping Mall </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				

				 
			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Order List </div>
        <a href='../Controller/update_order.php' style="text-align: center; font-size: 25px; color:#2d2244"> Update an Order </a>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;opacity: 0.7;text-align:center;background:#fcc298;">
			<div class="row" style="padding:5px;"> 
			</div>	
				
			
	
	<div class="row" style="padding:20px;">
	<div class="col-md-10" style="text-align: center; font-size: 18px; color:#0d0f0e">
<?php

require_once('../Model/dbconnect.php');


	$sql = "SELECT * FROM order_list ";  
	
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
		echo "No Orders in this Database";
	}
	

?>
	</div>
	</div>
	</section>
	

<?php include "Footer.php";?>
  </body> 
</html>

