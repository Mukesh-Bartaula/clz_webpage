<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATTANDANCE MANAGEMENT SYSTEM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shizuru&family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>
<div class="container">
    <div class="headbar">
        <div class="logo">
            <a href="homepage.php"><img src="../img/logo.png"></a>
        </div>
        <div class="login">
            <a href="./login_page.html" class="log_in">log in</a>
        </div>
    </div>
    <div class="navbar">
        <ul>
            <li>
                <a href="../homepage.php" class="nav_but">
                    <i class="fa fa-home" aria-hidden="true" class="home_icon"></i>
                    <span class="home-text"> HOME </span>
                </a>
            </li>
            <li><a  class="nav_but">FACULTY</a></li>
            <li><a href="../form.php" class="nav_but">ADMISSION</a></li>
            <li><a href="../news.php" class="nav_but">NEWS & EVENT</a></li>
            <li><a href="./attendance.php" class="nav_but active ">ATTENDANCE</a></li>
            <li><a href="../contact.php" class="nav_but">CONTACT</a></li>
        </ul>
    </div>
    <hr style="height: 10px;" >
    <div class="att_container" id="dateAtt_container">
        <div class="vnavbar">
            <ul>
                <li>
                    <a href="#" class="vnav_but ">
                        <i class="fa fa-home" aria-hidden="true" class="vhome_icon"></i>
                        <span class="vhome-text"> HOME </span>
                    </a>
                </li>
                <li><a href="#" class="vnav_but active">BCA</a></li>
                <li><a href="#" class="vnav_but">BIM</a></li>
                <li><a href="#" class="vnav_but">BBS</a></li>
                <li><a href="#" class="vnav_but">BBM</a></li>
            </ul>
        </div>
        <div class="att_body"  id="dateAtt_body">
            <div style="width: 1000px ">
                <div class="buttondiv">
                    <div class="Attendance">
                        <a href="bcadaillyatt.php">
                            <button>Attandence</button>
                        </a>
                    </div>
                    <div class="addStudent" >
                        <a href="addstudent.php">
                            <button>Add Student</button>
                        </a>

                    </div>

                </div>
                <div style="width: 900px">
                <table id="showdatetable" class="table" >
                    <tr>
                        <th class="tableSn">
                            SN.
                        </th>
                        <th class="nameDate">
                            Date
                        </th>
                       <th class="tableBtn">
                           view
                       </th>
                    </tr>
                    <tr>
                        <?php
                        include "db.php";
                        $query ="SELECT DISTINCT date FROM dailyatt ORDER BY DATE";
                        $result = $conn->query($query);
                        if ($result->num_rows>0){
                            $i = 1;
                            while ($val=$result->fetch_assoc()){

                        ?>
                        <td><?php

                           echo $i;
                            $i++;
                           ?>
                        </td>
                        <td style="width: 350px">
                            <?php
                            echo $val['date'];
                            ?>
                        </td>
                        <td>
                            <button id="att_but"><a href="viewAtt.php?date=<?php echo $val['date']?>" >view</a></button>
                        </td>
                    </tr>
                    <?php
                    }

                    }
                    ?>

                </table>
                </div>
            </div>

        </div>
    </div>



</div>
<footer>
    <div id="footer">
        <div class="footer_body">
            <div class="column_1">
                <h2>Contact</h2>
                <ul>
                    <li>Hetauda School Of Management</li>
                    <li>Hetauda-4, Makwanpur</li>
                    <li>ph no: 057524701, 057524711, 057524765</li>
                    <li>Emali: hsm@gmail.com</li>
                </ul>
            </div> <hr>

            <div class="column_3">
                <h2>About Us</h2>
                <ul>
                    <li> <a href="#"> Privacy policy </a></li>
                    <li><a href="#">Term & condition</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>  <hr>
            <div class="footer_icon" style="width:20%;">
                <a href="https://www.facebook.com/groups/HSM.forall/">
                    <i class="fab fa-facebook fa-3x" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/hsm.edu.np/">
                    <i class="fab fa-instagram fa-3x" aria-hidden="true"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter fa-3x" aria-hidden="true"></i>
                </a>

            </div>
        </div>
    </div>
</footer>
</div>
<script src="./script.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dropdown menu</title>
</head>
<body>

</body>
</html>