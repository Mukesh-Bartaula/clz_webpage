<?php

session_start();

$_SESSION['username']='';
$_SESSION['password'] = '';
    if(!empty($_SESSION['username']) && ($_SESSION['password'])  ){
      include "db.php";
      $username = $_SESSION['username'];
      $password = $_SESSION['password'];
      $sql = "SELECT * from admin_login where username = '$username' AND password ='$password'";
      $query = mysqli_query($conn, $sql);
      $count_rows = mysqli_num_rows($query);
      if ($count_rows > 0) {
          header("location:./admin_pannel/homepage.php");
      }
    }
     header("location:user_pannel/homepage.php");








