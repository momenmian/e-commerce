<?php
require_once("dbconnect.php");
session_start();



$a=$_SESSION['product_id'];
$b=$_SESSION['name'];
$c=$_SESSION['price'];


$sql = " INSERT INTO cart VALUES ( '$a', '$b', '$c' ) ";

	$result = mysqli_query($conn, $sql);
	
	
	if(mysqli_affected_rows($conn)){
        echo "Addes Successfully";
		
	}
	else{
		//echo "Insertion Failed";
		header('Location: ../Controller/Register.php');
	}  

?>