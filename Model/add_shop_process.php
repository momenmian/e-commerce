<?php
require_once('dbconnect.php');

if(isset($_POST['name']) && isset($_POST['mob']) && isset($_POST['addrs']))
{	
	$j = $_POST['name'];
	$k = $_POST['mob'];
	$l = $_POST['addrs'];
	
	$sql = " INSERT INTO shop_list VALUES( FLOOR(RAND()*(20-10+1))+10000, '$j', '$k', '$l') ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		//echo "Added Successfully";
		header('Location: ../Controller/add_shop.php');
	}
	else{
		echo "Added Failed";
	}
	
}

?>