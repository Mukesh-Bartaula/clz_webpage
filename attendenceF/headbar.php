<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATTANDANCE MANAGEMENT SYSTEM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shizuru&family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>

<div class="headbar">
    <div class="logo">
        <a href="homepage.php"><img src="../img/logo.png"></a>
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
            <a href="homepage.php" class="nav_but active">
                <i class="fa fa-home" aria-hidden="true" class="home_icon"></i>
                <span class="home-text"> HOME </span>
            </a>
        </li>
        <li><a href="faculty.php" class="nav_but">FACULTY</a>
            <div class="faculty_dropdown-menu">
                <a href="science.php">Science</a>
                <a href="bachelor.php">Bachelor</a>
                <a href="commerce.php">Commerce</a>
            </div>
        </li>        <li><a href="form.php" class="nav_but">ADMISSION</a></li>
        <li><a href="news.php" class="nav_but">NEWS & EVENT</a></li>
        <li><a href="attendenceF/attendance.php" class="nav_but">ATTENDANCE</a></li>
        <li><a href="contact.php" class="nav_but">CONTACT</a></li>
    </ul>
</div>

<script src="./script.js"></script>
</body>
</html>

