<?php
    include "db.php";
    if(isset($_POST['submit_att'])) {
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $att = $_POST['attendence'];
            $date = $_POST['date'];
            $servername = 'localhost';
            $username = "root";
            $password = "";
            $db = "clz_db";
            $conn = mysqli_connect($servername, $username, $password, $db);
            $query = "SELECT  DISTINCT date FROM dailyatt";
            $result = mysqli_query($conn, $query);
            $b = false;
            if ($result = $result->fetch_assoc()) {
                $b = true;
                echo "Attendance already taken today.";

            }
        }
        $att = $_POST['attendence'];
        $date = $_POST['date'];
        foreach ($att as $key => $value) {
                    if($value == "p") {
                        $query = "INSERT INTO dailyatt(att_status, date, std_id ) 
                        values ('present', '$date' , '$key')";
                        $insertResult = $conn->query($query);

                    } else {
                        $query = "INSERT INTO dailyatt(att_status, date, std_id ) 
                          values ('absent', '$date', '$key' )";
                        $insertResult = $conn->query($query);
                    }

                }

        header("location:./att_date.php");
    }

























//$tab = "att_1";
//
//if (isset($_POST['submit_att'])){
//    include "db.php";
//    $sql = "CREATE TABLE $tab (
//    s_id int primary key auto_increment,
//    s_name varchar(30) NOT NULL,
//    att_status varchar(10) NOT NULL,
//    time varchar(10) NOT NULL
//)";
//    $tab++;
//}
//include "db.php";
//if (mysqli_query($conn, $sql)) {
//    echo "Table MyGuests created successfully";
//    echo $tab;
//} else {
//    echo "Error creating table: " . mysqli_error($conn);
//    echo $tab;
//}
//
//
////header("location:./bcaAttandenceTable.php");}