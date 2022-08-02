<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>newsDetail</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>
	<div class="headbar">
  	<div class="logo">
			<a href="homepage.php"><img src="./img/logo.png"></a>
		</div>
		<div class="login">
			<a href="logIn_page.php" class="log_in">log in</a>
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
	<div class="newsDetailContainer">
        <?php
//        $newsId = $_GET['newsid'];
        include "db.php";
        if (!empty($_COOKIE['$cat'])){
            $category = $_COOKIE['$cat'];
        }else{
            $category = $_GET['$cat'];
        }
        $id=$_GET['id'] ;
        $sql = "SELECT * FROM  news_content where  id='$id' ";
        $query = mysqli_query($conn, $sql);
        if ($query->num_rows>0){
        while ($val=$query->fetch_assoc()){
        ?>

		<div class="newTitle">
			<h1>
				THE HSM NEWS
			</h1>
		</div>
		<div class="date">
			<p><?php echo $val['date']; ?></p>
		</div>
		<div class="newsDetailParagraph">
						
			<p>
				<img src="./uploaded_photos/<?php echo $val['photo_url'];?>">
                <?php echo $val['paragraph'];?>
            </p>
		</div>
        <?php } }?>
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
              <div class="footer_icon" style="width:20%;">
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