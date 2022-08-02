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
                    <h3 style="text-align: center; padding-bottom: 30px; padding-top: 10px;">Login</h3>
                </div>
                <div class="login_body">
                    <!-- <label class="name">Username : </label><br> -->
                    <input type="text" name="username" id="username" placeholder="Enter Username" >



                    <!-- <label class="name">Password : </label><br> -->
                    <div class="password">
						<span style="font-size: 20px; background-color: white; position: absolute;margin-top: 5px; margin-left: 225px;">
								<i class="far fa-eye-slash" onclick="showPassword()"></i></span>
                        <input type="password" name="password" id="password" placeholder="Enter Password">
                        <p style="color: red; font-size:13px;position: absolute;  top: 35px;">
                            Invalid username or password.
                        </p>

                    </div>
                    <div style="text-align: center;">
                        <button class="button" name="login_but" onclick="checkValidation()">Login</button>
                    </div>
                </div>
            </div>


        </div>
    </div>
</form>
<script src="./script.js"></script>
</body>
</html>