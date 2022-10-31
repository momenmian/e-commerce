<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Admin Panel </title>
		<?php include '../View/UI.php';?>
		</head>
  <body>	
  	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Online Shopping Mall </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				
                <a href="add_shop.php"> Add Shop </a>
				<a href="add_product.php" style="margin-left: 20px;"> Add Product </a>
				<a href='../View/show_Shop.php' style="margin-left: 20px;"> Show Shop </a>
				<a href='../View/show_product.php' style="margin-left: 20px;"> Show Product </a> 
				<a href='../View/order_list.php' style="margin-left: 20px;"> Order List </a> <br>
				
				
				<a href="update_order.php" style="margin-left: 20px;"> Update Order </a> 
				<a href="delete_shop.php" style="margin-left: 20px;"> Delete Shop </a>
				<a href="delete_product.php" style="margin-left: 20px;"> Delete Product </a>
				<a href="home.php" style="margin-left: 20px;"> Sign Out </a> <br><br><br> 
			</div>
		</div>
	</section>

	<?php include '../View/Footer.php';?>
</body>
</html>