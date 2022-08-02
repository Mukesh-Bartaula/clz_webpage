
<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'] ;
	if (isset($_POST['login_but'])) {	
		if(empty($username)){
			// include "empty_username.php";
			
			header("location:empty_username.php");
		}

		if (empty($password)) {

			// include "empty_password.php";
			header("location:empty_password.php");
		}
		if(!empty($_POST['username']) && ($_POST['password']) ){

			$servername = 'localhost';
			$username = "root";
			$password = "";
			$db = "clz_db";
			$conn = mysqli_connect($servername, $username, $password, $db);
			if(!$conn){
				die("error" . mysqli_error());
			}
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * from user_login where username = '$username' AND password ='$password'";
			$query = mysqli_query($conn, $sql);
			$count_rows = mysqli_num_rows($query);
			if ($count_rows > 0) {
				if(isset($_POST['remember_me'])){
					$_SESSION['username']=$username;
					$_SESSION['password']=$password;
					header("location: ./user_pannel/homepage.php");
				}

				header("location: ./user_pannel/homepage.php");
			}
		}
		if (!empty($_POST['username']) && ($_POST['password'])  ){

			echo $_POST['username'];
			$servername = 'localhost';
			$username = "root";
			$password = "";
			$db = "clz_db";
			$conn = mysqli_connect($servername, $username, $password, $db);
			if(!$conn){
				die("error" );
			}
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * from admin_login where username = '$username' AND password ='$password'";
			$query = mysqli_query($conn, $sql);
			$count_rows = mysqli_num_rows($query);
			if ($count_rows > 0) {
				if(isset($_POST['remember_me'])){
					$_SESSION['username']=$username;
					$_SESSION['password']=$password;
					header("location:./admin_pannel/homepage.php");
				}

				header("location: ./admin_pannel/homepage.php");
			}
		}
			else{
				header("location:./logIn_page.php");
			}
	}
?>
