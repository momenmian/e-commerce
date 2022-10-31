<?php
require_once('../Model/dbconnect.php');
session_start();

$a=$_SESSION['product_id'];


	
	$sql = " DELETE FROM cart WHERE product_id = $a ";
	
	$result = mysqli_query($conn, $sql);
	
	if($conn->query($sql)=== True){
		//echo "Deleted Successfully";
		header('Location: ../View/cart.php');
	}
	else{
		echo "Deletion Failed";
	}



?>