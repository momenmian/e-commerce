<?php
require_once('dbconnect.php');

if(isset($_POST['name']) && isset($_POST['fileToUpload']) && isset($_POST['cat']) && isset($_POST['sname']) && isset($_POST['price']))
{	
	$a = $_POST['name'];
	$b = $_POST['fileToUpload'];
	$c = $_POST['cat'];
	$d = $_POST['sname'];
	$e = $_POST['price'];
	
	$sql = " INSERT INTO product_list VALUES( FLOOR(RAND()*(20-10+1))+10000000, '$a', '$b', '$c', '$d', '$e') ";
	
	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn)){
		//echo "Added Successfully";
		header('Location: ../Controller/add_product.php');
	}
	else{
		echo "Added Failed";
	}
	
}

?>