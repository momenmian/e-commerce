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
                <div class="col-md-10" style="text-align: center; font-size: 26px;"> SIGN UP </div>
		
		<form action='../Model/register_process.php' class="form_design" method="post" style="color:White">
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">

		Name <input type="text" placeholder="Enter Name" name="fullname"> <br/>
		Username <input type="text" placeholder="Enter Username" name="uname"> <br/>
		Gender <input type="text" placeholder="Enter Gender" name="gen"> <br/>
		Email <input type="text" placeholder="Enter Email ID" name="email"> <br/>
		Address <input type="text" placeholder="Enter Address" name="addrs"> <br/>
		Date of Birth <input type="date" name="dob"> <br/> <br/>
		Mobile Number <input type="number" placeholder="Enter Mobile Number" name="mob"> <br/>
		Password <input type="password" placeholder="Enter Password" name="pass"> <br/> 
		
		<button type="submit" value="Add to Database">Sign Up</button> <br><br>
        </div>               
		</form>
	</section>
<?php include '../View/Footer.php';?>
  </body> 
</html>
