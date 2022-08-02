<?php
session_start();
    if(!empty($_SESSION['username']) && ($_SESSION['password'])  ){
      include "db.php";
      $username = $_SESSION['username'];
      $password = $_SESSION['password'];
      $sql = "SELECT * from login_db where username = '$username' AND password ='$password'";
      $query = mysqli_query($conn, $sql);
      $count_rows = mysqli_num_rows($query);
      if ($count_rows > 0) {
          header("location:homepage.php");
      }
    }
    else {
        header("location:logIn_page.php");
    }

?>

