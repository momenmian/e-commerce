<?php
require_once('dbconnect.php');

if(isset($_POST['stat']) && isset($_POST['ordr_id']))
{	
	$a = $_POST['stat'];
	$b = $_POST['ordr_id'];
	
	$sql = " UPDATE order_list SET order_status = '$a' WHERE order_id = $b ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		//echo "Updated Successfully, Please Check Order List";
		header('Location: ../Controller/update_order.php');
	}
	else{
		echo "Updated Failed";
	}
	
}


?>