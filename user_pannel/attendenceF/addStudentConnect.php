<?php
if(isset($_POST['addStudent'])) {
    include "db.php";
    $firstname = $_POST['s_firstname'];
    $lastname = $_POST['s_lastname'];
    $number = $_POST['s_phone_no'];
    $email = $_POST['s_email'];

   
    $sql = "INSERT INTO students( s_firstname, s_lastname, s_roll, s_email )
values (' $firstname', ' $lastname', '$number', '$email' )";
    $query = mysqli_query($conn, $sql);
    if($query){
        header('location:./att_date.php');
    }
    else{
        echo "error" ;
    }
}
