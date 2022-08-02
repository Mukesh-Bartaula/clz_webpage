<?php
include "db.php";
if(isset($_POST['c_submit'])) {
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $name = $_POST['contact_form_name'];
        $email = $_POST['contact_form_email'];
        $no=  $_POST['contact_form_phone_no'];
        $mess =  $_POST['contact_form_mess'];
        $servername = 'localhost';
        $username = "root";
        $password = "";
        $db = "clz_db";
        $conn = mysqli_connect($servername, $username, $password, $db);
        $query = "SELECT  *  FROM contact";
        $result = mysqli_query($conn, $query);
        $query = "INSERT INTO contact(name, email, phone, message ) 
                   values ('$name', '$email' , '$no', '$mess')";
        $insertResult = $conn->query($query);


    }

header("location:./contact.php");
}




