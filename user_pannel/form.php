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
          <a href="../logout.php" class="log_out">log out</a>
        </div>
        <?php } ?>
        <?php if(isset($_SESSION['username']) == null){ ?>
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
      <form action="insertdata.php" method="post">
        <div class="form_container">
          <div class="form">
            <h1>HETAUDA SCHOOL OF MANAGEMENT</h1>
            <div class="imgcontainer" style="float: right; margin-right: 40px">
              <div id="preview" style="height: 180px; width: 180px; border: 2px solid gray;
               margin: 15px 0px;overflow: hidden;border-radius: 15px">

                <img src="./img/sq_profile.png">
              </div>
              <label style="border-radius: 10px; background-color: #F8FAFD; padding: 12px 56px; color: dimgray">Add photo
                <input type="file" name="upload_file" class="form-control" id="upload_file"
                       style="display: none" onchange="getImagePreview(event)">
                <div class="image-error" style="display: none;"></div>
              </label>

            </div>
            <table>
              <tr>
                <td>STUDENT NAME</td>
                <td>:</td>
                <td><input type="text" name="std_name"  maxlength="20" size= "25" required></td>
              </tr>

              <tr>
                <td>DATE OF BIRTH</td>
                <td>:</td>
                <td><input type="date" name="std_birth_date"  required></td>
              </tr>

              <tr>
                <td>Father Name</td>
                <td>:</td>
                <td><input type="text" name="std_father_name"  maxlength="20"size= "25" required></td>
              </tr>
              <tr>
                <td>CitizenShip</td>
                <td>:</td>
                <td><input type="text" name="std_citizenship"  maxlength="20"size= "25" required></td>
              </tr>
              <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                  <input type="radio" name="gender" value="M" required><label>Male</label>
                  <input type="radio" name="gender" value="F" required><label>Female</label>
<!--                  <input type="radio" name="gender" value="Others"><label>Others</label>-->
                </td>
              </tr>
              <tr>
                <td>EMAIL</td>
                <td>:</td>
                <td><input type="email" name="std_email"  maxlength="30" size= "25" required></td>
              </tr>

              <tr>
                <td>CONTACT</td>
                <td>:</td>
                <td><input type="number" name="std_number"   maxlength="10" required ></td>
              </tr>
              <tr>
                <td>Describe Yourself</td>
                <td>:</td>
                <td><textarea id="std_description" rows=8 cols="39" name="std_description"></textarea></td>
              </tr>
            </table>
            <div class="form_button" style="display: flex; justify-content: center">
              <button name="form_submit">submit</button>
            </div>

          </div>
        </div>
      </form>

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

    </div>
      <script type="text/javascript">
        function getImagePreview(event)
        {
          let filename = event.target.files[0].name;
          if (filename.endsWith('.jpg') || filename.endsWith('.png') || filename.endsWith('.jpeg')) {
            var image=URL.createObjectURL(event.target.files[0]);
            var imagediv= document.getElementById('preview');
            var newimg=document.createElement('img');
            imagediv.innerHTML='';
            newimg.src=image;
            newimg.width="180";
            imagediv.appendChild(newimg);
          } else {
            var imageErrorDiv = document.getElementsByClassName('image-error')
            imageErrorDiv.innerHTML = "Invalid"
          }

        }
      </script>
</body>
</html>