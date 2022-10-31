<?php
require_once('dbconnect.php');


if(isset($_POST['fullname']) && isset($_POST['address'])){
	

	$a = $_POST['fullname'];
	$b = $_POST['address'];
    $c = "Confirm";

	$sql = " INSERT INTO order_list VALUES ( FLOOR(RAND()*(20-10+1))+1000,'$a', '$b', '$c') ";
	
	
	$result = mysqli_query($conn, $sql);
	
	
	if(mysqli_affected_rows($conn)){
		header('Location: ../Controller/user_panel.php');
		
	}
	else{
		echo "Insertion Failed";
	}
	
}

?>
