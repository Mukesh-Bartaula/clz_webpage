<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Student</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<?php
include "headbar.php";
?>
	 <div class="contact_form_container">
          <div class="contact_form_body">
            <div class="contact_form_heading">
                <h1>
                  Add Student:
                </h1>
                
              </div>
            <div class="contact_form_info_body">
              <form action="addStudentConnect.php" method="post">
                <div class="contact_form_rows">
                  <label>
                    First Name:
                  </label><br>
                  <input type="text" name="s_firstname" size="35" height="30" >
                </div>
                <div class="contact_form_rows">
                  <label>
                    Last Name:
                  </label><br>
                  <input type="text" name="s_lastname" size="35" height="30" >
                </div>
                 
                <div class="contact_form_rows">
                  <label>
                    Roll no:
                  </label><br>
                  <input type="number" name="s_phone_no" size="45" height="30" >
                </div>
                 <div class="contact_form_rows">
                  <label>
                    E-mail:
                  </label><br>
                  <input type="email" name="s_email" size="35" height="30">
                </div>
                <div class="contact_form_rows">
                  <button name="addStudent">
                    ADD
                  </button>
                </div>
                
              </form>
            </div>
        </div>
    </div>
<?php
include "footer.php";
?>
</body>
</html>