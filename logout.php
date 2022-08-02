<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>logIn</title>
    <link rel="stylesheet" type="text/css" href="./style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>
<span style="z-index: 2;color: red; margin-top: 80px;margin-left: 550px; font-size: 20px; position: absolute; top: 20px "> You have succesfully logout.</span>
<form method="post" action="logIn_validation.php">
    <div class="login_page_container">

        <div class="login_container">
            <div class="imgProfile">
                <div class="logo">
                    <a href="homepage.php"><img src="./img/logo.png"></a>
                </div>
                <img src="./img/profile.png">
            </div><hr>
            <div class="login_box">
                <div class="header">
                    <h3 style="text-align: center; padding-bottom: 10px;">Login</h3>
                </div>
                <div class="login_body">

                    <input style="margin: 20px 0px; " type="text" name="username" id="username" placeholder="Enter Username">



                    <div class="password">
						<span style="font-size: 24px; background-color: white; position: absolute;margin-top: 3px;
						 margin-left: 235px;">
								<hr style="width: 1px; height: 30px; display: inline"><i class="far fa-eye-slash" onclick="showPassword()"></i></span>
                        <input type="password" name="password" id="password" placeholder="Enter Password" >
                        <div id="password-error"></div>
                    </div>

                    <span style="font-size: 17px; font-weight: bold; margin-top: 15px; display: inline-block">
                        <input type="checkbox" name="remember_me" value="1" >
                        Remember me
                    </span>

                    <div style="text-align: center;">
                        <button class="button" name="login_but" onclick="checkValidation()">Login</button>
                    </div>
                    <div class="register">
                        <p>Register now?
                            <a href="register.html" id="login_reg_click">
                                <span >Click Here</span>
                            </a>

                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</form>
<?php
echo $_POST['username'];
echo $_POST['password'];
?>
?>
<script src="./script.js"></script>
</body>
</html>