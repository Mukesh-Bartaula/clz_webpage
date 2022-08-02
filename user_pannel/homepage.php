<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HETAUDA SCHOOL OF MANAGEMENT</title>
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
  				    <a href="../logout.php" class="log_out">log out</a>
  			    </div>

            <?php }else{ ?>
                <div class="login">
                    <a href="../logIn_page.php" class="log_in">log in</a>
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

      <div class=" img_sliderDiv">
        <img name = "img_slider" >
      </div>
      



      <div class="h_pragraph" >
        <h1>
          Strict Discipline, Quality Education.
        </h1>
        <p>
                     
           <h2> Education for all.</h2> <br>
            Many of us believe in education for all. In Zambia, however, only 42% of students are enrolled in secondary education (UNICEF) whilst Malawi only sees a 31% enrollment rate (UIS UNESCO). Dropping out often leads to interference with personal development, unable to obtain a professional degree and exposure to crime. Education is crucial for every child growing up but especially for youth who are not given equal opportunities in life. Youth should not be denied an education because of financial restrictions, we believe it should be a right. <br> <br> <br>

            <h2>From hockey to school.</h2> <br>
            Education is essential for youth in creating opportunities for themselves, staying away from illegal activities and providing for their families. Hockey Dreams provide youth with the solution to their biggest problem and help them finish their education so they can become true game changers in their communities and in the world. Besides their role as hockey coaches for thousands of kids, they learn the necessary skills and competencies at school to become leaders and role models in their communities.
            <br> <br>
            <h2> Education for all.</h2> <br>
            Many of us believe in education for all. In Zambia, however, only 42% of students are enrolled in secondary education (UNICEF) whilst Malawi only sees a 31% enrollment rate (UIS UNESCO). Dropping out often leads to interference with personal development, unable to obtain a professional degree and exposure to crime. Education is crucial for every child growing up but especially for youth who are not given equal opportunities in life. Youth should not be denied an education because of financial restrictions, we believe it should be a right. <br> <br> <br>

            <h2>From hockey to school.</h2> <br>
            Education is essential for youth in creating opportunities for themselves, staying away from illegal activities and providing for their families. Hockey Dreams provide youth with the solution to their biggest problem and help them finish their education so they can become true game changers in their communities and in the world. Besides their role as hockey coaches for thousands of kids, they learn the necessary skills and competencies at school to become leaders and role models in their communities.  
            <br> <br>
        </p>
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

