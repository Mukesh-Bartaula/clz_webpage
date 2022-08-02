<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
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
            <a href="homepage.php"><img src="./img/logo.png"></a>
        </div>
        <?php if(isset($_SESSION['username']) == true){ ?>
            <div>
                <a href="logout.php" class="log_out">log out</a>
            </div>
        <?php } ?>
        <?php if(isset($_SESSION['username']) == null){ ?>
            <div class="login">
                <a href="logIn_page.php" class="log_in">log in</a>
            </div>
        <?php } ?>
    </div>
    <div class="navbar">
        <ul>
            <li>
                <a href="homepage.php" class="nav_but active">
                    <i class="fa fa-home" aria-hidden="true" class="home_icon"></i>
                    <span class="home-text"> HOME </span>
                </a>
            </li>
            <li><a href="#" class="nav_but">
                    <span style="padding-right: 10px"><i class="fa fa-book"></i></span>
                    FACULTY
                    <span style="padding-left: 10px; font-size: 15px"><i class="fa fa-chevron-down"></i></span>
                </a>
                <div class="faculty_dropdown-menu">
                    <a href="science.php">Science</a>
                    <a href="bachelor.php">Bachelor</a>
                    <a href="commerce.php">Commerce</a>
                </div>
            </li>
            <li><a href="form.php" class="nav_but">ADMISSION  <span style="padding-left: 10px; font-size: 15px"><i class="fa fa-chevron-down"></i></span></a>
                <div class="faculty_dropdown-menu">
                    <a href="form.php">form</a>
                    <a href="view_addmission.php">view forms</a>

                </div>
            </li>
            <li><a href="./news.php" class="nav_but">
                    <span style="margin-right: 10px;"> <i class="fa fa-newspaper"></i></span>
                    NEWS & EVENT
                </a>
            </li>
            <li>
                <a href="./attendenceF/attendance.php" class="nav_but">
                    <span style="margin-right: 10px;"><i class="fa fa-clipboard-list"></i> </span>ATTENDANCE
                    <span style="padding-left: 10px; font-size: 15px"><i class="fa fa-chevron-down"></i></span>
                </a>
                <div class="faculty_dropdown-menu">
                    <a href="form.php">form</a>
                    <a href="view_addmission.php">view forms</a>

                </div>
            </li>
            <li><a href="./contact.php" class="nav_but">
                    <span style="padding-right: 10px; font-size: 15px"><i class="fa fa-address-book"></i></span>
                    CONTACT
                    <span style="padding-left: 10px; font-size: 15px"><i class="fa fa-chevron-down"></i></span>
                </a>
                <div class="faculty_dropdown-menu">
                    <a href="./contact.php">contact</a>
                    <a href="contact_form_message.php">form</a>
                </div>
            </li>
        </ul>
    </div>

        <?php
        include "db.php";
        $sql = "SELECT * FROM  admission ORDER BY s_name";
        $query = mysqli_query($conn, $sql);
        if($query->num_rows>0){
            while ($val = mysqli_fetch_assoc($query)) {



        ?>
<div style="width: 1100px; border: none;  margin-top: 100px; overflow: scroll; ">
        <table >
            <tr>
                <th>
                    S.N
                </th>
                <th>
                    Student name
                </th>
                <th>
                    Date of birth
                </th>
                <th>
                    Father name
                </th>
                <th>
                    citizenship
                </th>
                <th>
                    Gender
                </th>
                <th>
                   Email
                </th>
                <th>
                    Contact
                </th>
                <th>
                    Desribed student
                </th>
            </tr>
            <tr>

                <td>
                    <?php
                    $i = 1;
                    echo $i;
                    $i++;

                    ?>
                </td>
                <td>
                    <?php
                    echo $val['s_name'];
                    ?>
                </td>

                <td>
                    <?php
                    echo $val['s_dateofbirth'];
                    ?>
                </td>

                <td>
                    <?php
                    echo  $val['s_fathername'];
                    ?>
                </td>

                <td>
                    <?php
                    echo $val['citizenship'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $val['gender'];


                    ?>
                </td>
                <td>
                    <?php
                    echo $val['email'];

                    ?>
                </td>

                <td>
                    <?php
                    echo $val['contact'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $val['s_describe'];

                    ?>
                </td>

            </tr>
            <?php
            }
            }
            ?>
        </table>
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
                <div class="column_2">
                    <h2>Useful links</h2>
                    <ul>
                        <li><a href="homepage.php"> HOME </a> </li>
                        <li><a href="#">FACULTY</a></li>
                        <li><a href="form.php">ADMISSION</a></li>
                        <li><a href="news.php">NEWS & EVENT</a></li>
                        <li><a href="#">PROGRAMMES</a></li>
                        <li><a href="contact.php" >CONTACT</a></li>
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
                <div class="footer_icon">
                    <a href="https://www.facebook.com/groups2HSM.forall/">
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

</body>
</html>