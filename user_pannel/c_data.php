<?php
if(isset($_POST['c_submit'])){
    include "db.php";
    $c_name = $_POST['contact_form_name'];
    $c_email = $_POST['contact_form_email'];
    $c_number = $_POST['contact_form_phone_no'];
    $c_message = $_POST['contact_form_mess'];
    $sql = "INSERT INTO contact_form(c_name,	c_email,	c_number,	c_message	
    ) VALUES('$c_name', '$c_email', '$c_number', '$c_message')";
    $query = mysqli_query($conn, $sql);
    if($query){
        echo "saved";
    }
}