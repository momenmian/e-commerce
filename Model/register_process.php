<?php

require_once('dbconnect.php');

if(isset($_POST['fullname']) && isset($_POST['uname']) && isset($_POST['gen']) && isset($_POST['email'])  && isset($_POST['addrs']) && isset($_POST['dob']) && isset($_POST['mob']) && isset($_POST['pass'])){
	

	$a = $_POST['fullname'];
	$b = $_POST['uname'];
	$c = $_POST['gen'];
	$d = $_POST['email'];
	$f = $_POST['addrs'];
	$g = $_POST['dob'];
	$h = $_POST['mob'];
	$j = $_POST['pass'];
        

	$sql = " INSERT INTO user_info VALUES ( '$a', '$b', '$c', '$d', '$f', '$g', '$h', '$j', '$k' ) ";
	
	
	$result = mysqli_query($conn, $sql);
	
	
	if(mysqli_affected_rows($conn)){
		header('Location: ../Controller/home.php');
		
	}
	else{
		echo "Insertion Failed";
	}
	
}

?>
