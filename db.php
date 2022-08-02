<?php  
	$servername = 'localhost';
	$username = "root";
	$password = "";
	$db = "clz_db";
	$conn = mysqli_connect($servername, $username, $password, $db);
	if(!$conn){
		die("error" . mysqli_error());
	}
//   else{
//       echo "conneted";
//   }
?>