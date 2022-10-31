<?php
$username = "root";
$password = "";
$dbname = "online_shop";

$conn = new mysqli("localhost", $username, $password, $dbname);

$sql = " SELECT * FROM shop_list" ;
$shop_name = mysqli_query ($conn, $sql);			
?>  



<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Add Product </title>
<?php include '../View/UI.php';?>
		</head>

  <body> 

	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Online Shopping Mall </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244">

				<a href="add_shop.php"> Add Shop </a>
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
    
	
	<section id = "section1">
<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Add Product </div>
		
			
			<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">

		<form action='../Model/add_product_process.php' class="form_design" method="post">
			Name: <input type="text" name="name"> <br/>
			
			Image: <input type="file" name="fileToUpload" id="fileToUpload"> <br/>
			
			Category: <select name="cat">
				<option value= "Trousers and Shorts"> Trousers and Shorts </option>
				<option value= "Shirt"> Shirt </option>
				<option value= "Suits"> Suits </option>
				<option value= "Shoes"> Shoes </option>
			</select> <br/> 

			Price: <input type="number" name="price"> <br/>			

			Shop Name: <select name="sname">
            <?php
                while ($category = mysqli_fetch_array(
                        $shop_name,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["name"];?>"><?php echo $category["name"];
                    ?>
                </option>
            <?php
                endwhile;
            ?>
        </select> <br/>
        <input type="submit" value="Add to List" name="submit">
	</form>
	</section>


<?php include '../View/Footer.php';?>
  </body> 
</html>

