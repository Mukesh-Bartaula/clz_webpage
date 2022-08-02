<?php
session_start();
if(!empty($_GET['cat'])) {
    $category = $_GET['cat'];
    setcookie('$cat', $category, time() + (86400) * 30);
}
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

    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
    <div class="headbar">
        <div class="logo">
            <a href="homepage.php"><img src="./img/logo.png"></a>
        </div>
        <div class="login">
            <a href = "logIn_page.php" class="log_in">log in</a>
        </div>
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
            <li><a href="form.php" class="nav_but">ADMISSION</a>

            </li>
            <li><a href="./news.php" class="nav_but">
                    <span style="margin-right: 10px;"> <i class="fa fa-newspaper"></i></span>
                    NEWS & EVENT
                </a>
            </li>
            <li>
                <a href="./attendenceF/attendance.php" class="nav_but">
                    <span style="margin-right: 10px;"><i class="fa fa-clipboard-list"></i> </span>ATTENDANCE
                </a>

            </li>
            <li><a href="./contact.php" class="nav_but">
                    <span style="padding-right: 10px; font-size: 15px"><i class="fa fa-address-book"></i></span>
                    CONTACT
                </a>

            </li>
        </ul>
    </div>
    <hr style="height: 10px;" >
    <div class="newsContainer">
        <div class="vnavbar">
            <ul>
                <li>
                    <a href="news.php" class="vnav_but">All</a>
                </li>
                <li><a href="newscategory.php?cat=politics" class="vnav_but">Politics</a></li>
                <li><a href="newscategory.php?cat=national" class="vnav_but">National</a></li>
                <li><a href="newscategory.php?cat=iInternational" class="vnav_but">International</a></li>
                <li><<a href="newscategory.php?cat=sports" class="vnav_but">Sports</a></li>
                <li><a href="newscategory.php?cat=health" class="vnav_but">Health</a></li>
                <li><a href="newscategory.php?cat=culture" class="vnav_but">Culture</a></li>
                <li><a href="newscategory.php?cat=technology" class="vnav_but">Technology</a></li>
                <li><a href="newscategory.php?cat=weather" class="vnav_but">Weather</a></li>
            </ul>
        </div>
        <div class="newsBody">

            <?php
            include "db.php";
            $category = $_GET['cat'];
            $query ="SELECT * FROM  news_content where category = '$category'";
            $result = $conn->query($query);
            if ($result->num_rows>0){
                while ($val=$result->fetch_assoc()){
//                    echo $val['id'];
                    ?>

                    <a href="newsDetailPage.php?id=<?php echo $val['id']; ?>">
                        <div class="card_container">
                            <img src="../uploaded_photos/<?php echo $val['photo_url'];?>">
                            <div class="newsParagraph">
                                <div class="heading">
                                    <h3>
                                        <?php echo $val['title'];?>
                                    </h3>
                                </div>

                                <p>
                                    <?php echo $val['paragraph'];?>

                                </p>

                            </div>
                        </div>

                    </a>
                <?php } } ?>

<!--            <a href="./news_form.php">-->
<!--                <div id="add_news" class="card_container" >-->
<!--                    <i class="fa fa-plus fa-7x" style=" color: gray; display: flex; justify-content: center;align-items: center;width: 100%;-->
<!--                    height: 100%"></i>-->
<!--                </div>-->
<!--            </a>-->

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