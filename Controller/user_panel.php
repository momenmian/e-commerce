<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> User Panel </title>
		<?php include '../View/UI.php';?>
		</head>
	<body>	
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Online Shopping Mall </div>
			<div class="col-md-10" style="text-align: center; font-size: 25px; color:#2d2244"> 
				
				<a href='../View/show_product_user.php'> Show Product</a> 
				<a href='../View/cart.php' style="margin-left: 20px;"> Cart </a>
				<a href="search.php" style="margin-left: 20px;"> Order Status </a>
				<a href='../Model/signout_process.php' style="margin-left: 20px;"> Sign Out </a> <br><br>
				 
			</div>
		</div>
	</section>
	<?php include '../View/Footer.php';?>
</body>
</html>