<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Order Status </title>
		<?php include '../View/UI.php';?>
		</head>
	<body>	
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Online Shopping Mall </div>
			<div class="col-md-10" style="text-align: center; font-size: 25px; color:#2d2244"> 
				
			<a href='../View/show_product_user.php'> Show Product</a> 
			<a href='../View/cart.php' style="margin-left: 20px;"> Cart </a>
			<a href='../Model/signout_process.php' style="margin-left: 20px;"> Sign Out </a> <br><br>
				 
			</div>
		</div>
	</section>
<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Order Status </div>
		
		<form action='../View/search_result.php' class="form_design" method="post"> 
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
			Order ID: <input type="text" name="ordr_id"> <br/>
			<button type="submit" value="Search"> Search </button>
			</div>
		</form>

	</section>

	<?php include '../View/Footer.php';?>
</body>
</html>