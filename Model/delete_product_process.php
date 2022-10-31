<?php
require_once("dbconnect.php");

if(isset($_POST['shop_id'])){
	$i = $_POST['shop_id'];
	
	$sql = "DELETE FROM product_list WHERE product_id = $i ";
	
	$result = mysqli_query($conn, $sql);
	
	if($conn->query($sql)=== True){
		//echo "Deleted Successfully";
		header('Location: ../Controller/delete_product.php');
	}
	else{
		echo "Deletion Failed";
	}
}

?>
