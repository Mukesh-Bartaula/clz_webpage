<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATTANDANCE MANAGEMENT SYSTEM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shizuru&family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>
<div class="container">
    <?php
    include "headbar.php";
    ?>
    <div class="attContainer">
        <div class="att_Body">
            <a  href="att_date.php">
                <div class="att_card_container">
                    <img src="../img/bca-1.jpg">
                    <div class="attParagraph">
                        <h1>
                            BCA
                        </h1>

                    </div>
                </div>

            </a>

            <a  href="./attDetailPage.html">
                <div class="att_card_container">
                    <img src="../img/bim-2.jpg">
                    <div class="attParagraph">
                        <h1>
                            BIM
                        </h1>

                    </div>
                </div>
            </a>

            <a  href="./attDetailPage.html">
                <div class="att_card_container">
                    <img src="../img/BBS-3.jpg">
                    <div class="attParagraph">
                        <h1>
                            BBS
                        </h1>

                    </div>
                </div>

            </a>
            <a  href="./attDetailPage.html">
                <div class="att_card_container">
                    <img src="../img/mbbs-4.jpg">
                    <div class="attParagraph">
                        <h1>
                            MBBS
                        </h1>
                    </div>
                </div>

            </a>
            <a  href="./attDetailPage.html">
                <div class="att_card_container">
                    <img src="../img/ca-5.jpg">
                    <div class="attParagraph">
                        <h1>
                            CA
                        </h1>
                    </div>
                </div>

            </a>
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

