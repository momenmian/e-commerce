<?php

require_once('dbconnect.php');

$sql = " DELETE FROM cart";
$result = mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)){
	header('Location: ../Controller/home.php');
		
}
else{
	header('Location: ../Controller/home.php');
}

?>