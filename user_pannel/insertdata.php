<?php
if(isset($_POST['form_submit'])) {
    include "db.php";
    $std_name = $_POST['std_name'];
    $std_birth_date = $_POST['std_birth_date'];
    $std_father_name = $_POST['std_father_name'];
    $std_citizenship = $_POST['std_citizenship'];
    $gender = $_POST['gender'];
    $std_email = $_POST['std_email'];
    $std_number = $_POST['std_number'];
    $std_description = $_POST['std_description'];
    $sql = "INSERT INTO admission(s_name,s_dateofbirth, s_fathername, citizenship,
    gender, email, contact, s_describe )
values ('$std_name', '$std_birth_date', '$std_father_name', '$std_citizenship',
    '$gender', '$std_email', '$std_number', '$std_description' )";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("location:./form.php");
    }
    else{
        echo "error" ;
    }
}
