<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Registration </title>
			<?php include '../View/UI.php';?>
			
		</head>

  <body>
	
	<section id = "section1">
		<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Online Shopping Mall </div>
                <div class="col-md-10" style="text-align: center; font-size: 26px;"> Order Details </div>
		
		<form action='../Model/order_process.php' class="form_design" method="post" style="color:White">
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">

		Name <input type="text" placeholder="Enter Name" name="fullname"> <br/>
		Address <input type="text" placeholder="Enter Username" name="address"> <br/>
		
		<button type="submit" value="Add to Database">Confrim Order</button> <br><br>
        </div>               
		</form>
	</section>
<?php include '../View/Footer.php';?>
  </body> 
</html>
