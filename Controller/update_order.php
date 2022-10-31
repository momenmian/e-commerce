<?php
$username = "root";
$password = "";
$dbname = "online_shop";

$conn = new mysqli("localhost", $username, $password, $dbname);

$sql = " SELECT * FROM order_list" ;
$order_list = mysqli_query ($conn, $sql);			
?>  

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Update Order </title>
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
				
				<a href="delete_shop.php" style="margin-left: 20px;"> Delete Shop </a>
				<a href="delete_product.php" style="margin-left: 20px;"> Delete Product </a>
				<a href="home.php" style="margin-left: 20px;"> Sign Out </a> <br><br><br>
			
				
			</div>
		</div>
	</section>
    
	
	<section id = "section1">
<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Update Order </div>
		
			
	<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
		
		<form action='../Model/update_order_process.php' class="form_design" method="post">
		
		Order Status: <select name="stat">
				<option value= "On the Way"> On the Way </option>
				<option value= "Delivered"> Delivered </option>
				<option value= "Cancelled"> Cancelled </option>
			</select> <br/> 


			Oder ID: <select name="ordr_id">
            <?php
                while ($category = mysqli_fetch_array(
                        $order_list,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["order_id"];?>"><?php echo $category["order_id"];
                    ?>
                </option>
            <?php
                endwhile;
            ?>
        </select> <br/>
			<button type="submit" value="Update"> Update </button>
		
		</div>
		</form>
	</section>


<?php include '../View/Footer.php';?>
  </body> 
</html>

