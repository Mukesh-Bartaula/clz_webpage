<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="headbar">
    <div class="logo">
        <a href="homepage.php"><img src="./img/logo.png"></a>
    </div>
    <?php if(isset($_SESSION['username']) == true){ ?>
        <div>
            <a href="logout.php" class="log_out">log out</a>
        </div>

    <?php }else{ ?>
        <div class="login">
            <a href="logIn_page.php" class="log_in">log in</a>
        </div>
    <?php } ?>
</div>
<div class="navbar">
    <ul>
        <li>
            <a href="./homepage.php" class="nav_but">
                <i class="fa fa-home" aria-hidden="true" class="home_icon"></i>
                <span class="home-text"> HOME </span>
            </a>
        </li>
        <li><a href="./faculty.php" class="nav_but">
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
        <li><a href="form.php" class="nav_but">ADMISSION<span style="padding-left: 10px; font-size: 15px"><i class="fa fa-chevron-down"></i></span></a>
            <div class="faculty_dropdown-menu">
                <a href="form.php">form</a>
                <a href="view_addmission.php">view forms</a>

            </div>
        </li>
        <li><a href="./news.php" class="nav_but active">
                <span style="margin-right: 10px;"> <i class="fa fa-newspaper"></i></span>
                NEWS & EVENT
            </a>
        </li>
        <li>
            <a href="./attendenceF/attendance.php" class="nav_but">
                <span style="margin-right: 10px;"><i class="fa fa-clipboard-list"></i> </span>ATTENDANCE
            </a>

        </li>
        <li><a href="../contact.php" class="nav_but">
                <span style="padding-right: 10px; font-size: 15px"><i class="fa fa-address-book"></i></span>
                CONTACT<span style="padding-left: 10px; font-size: 15px"><i class="fa fa-chevron-down"></i></span>
            </a>
            <div class="faculty_dropdown-menu">
                <a href="./contact.php">contact</a>
                <a href="contact_form_message.php">form</a>
            </div>
        </li>
    </ul>
</div>
<div class="contact_form_container">
    <div class="contact_form_body">
        <div class="contact_form_heading">
            <h2>
                News Data Form
            </h2>
            <p>
                Please fill the form in a decent manner.
            </p>
        </div>
        <div class="contact_form_info_body">
            <form action="newsDataSendToDb.php" method="post" enctype="multipart/form-data">
                <?php
                if(isset($_GET['error'])){
                    ?>
               <span style="color: #DC3D24; position: relative;font-size: 25px"> <?php echo $_GET['error'];?></span>
              <?php } ?>
                <table>
                    <tr>
                        <div class="contact_form_rows">
                            <label>
                                Date:
                            </label><br>
                            <input type="text" name="news_date"  height="30" placeholder="Sunday,Feb 23,2022">
                        </div>
                    </tr>
                    <tr>
                        <div class="contact_form_rows">
                            <label>
                                Title:
                            </label><br>
                            <input type="text" name="news_title"  height="30">
                        </div>
                    </tr>
                    <tr>
                        <div class="contact_form_rows">
                            <label>
                                Category:
                            </label><br>
<!--                            <input type="text" name="news_category"  height="30">-->
                            <select name="news_category">
                                <option>Select news Category</option>
                                <option>sport</option>
                                <option>Politics</option>
                                <option>National</option>
                                <option>International</option>
                                <option>Health</option>
                                <option>Culture</option>
                                <option>Technology</option>
                                <option>Weather</option>

                            </select>
                        </div>
                    </tr>
                    <tr>
                        <div class="contact_form_rows">
                            <label>
                                Paragraph:
                            </label><br>
                            <textarea name="news_paragraph" rows="10" cols="67" style="padding: 10px"></textarea>
                        </div>
                    </tr>
                    <tr>
                        <div class="contact_form_rows">
                            <label>
                                Photo:
                            </label><br>
                            <input type="file" name="news_photoURL"  height="30">
                        </div>
                    </tr>
                    <tr>
                        <div class="contact_form_rows">
                            <button name="news_upload">
                                Upload
                            </button>
                        </div>
                    </tr>

                </table>

            </form>
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
            <div class="column_2">
                 <h2>Useful links</h2>
                <ul>
                    <li>
                        <a href="homepage.php" ">
                        <i class="fa fa-home" aria-hidden="true" class="home_icon"></i>
                        <span class="home-text"> HOME </span>
                        </a>
                    </li>
                    <li><a href="#" >
                            <span style="padding-right: 10px"><i class="fa fa-book"></i></span>
                            FACULTY
                        </a>

                    </li>
                    <li><a href="form.php"><span style="padding-right: 20px"></span>ADMISSION</a>

                    </li>
                    <li><a href="./news.php">
                            <span style="padding-right: 20px"></span>
                            NEWS & EVENT
                        </a>
                    </li>
                    <li>
                        <a href="./attendenceF/attendance.php">
                            <span style="margin-right: 10px;"><i class="fa fa-clipboard-list"></i> </span>ATTENDANCE
                        </a>

                    </li>
                    <li><a href="./contact.php" >
                            <span style="padding-right: 10px; font-size: 15px"><i class="fa fa-address-book"></i></span>
                            CONTACT
                        </a>

                    </li>
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


</body>
</html>