<?php
require_once("dbconnect.php");

if(isset($_POST['shop_id'])){
	$i = $_POST['shop_id'];
	
	$sql = "DELETE FROM shop_list WHERE shop_id = $i ";
	
	$result = mysqli_query($conn, $sql);
	
	if($conn->query($sql)=== True){
		//echo "Deleted Successfully";
		header('Location: ../Controller/delete_shop.php');
	}
	else{
		echo "Deletion Failed";
	}
}



?>
