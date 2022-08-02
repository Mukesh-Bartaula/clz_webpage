<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
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
                <a href="homepage.php" class="nav_but">
                    <i class="fa fa-home" aria-hidden="true" class="home_icon"></i>
                    <span class="home-text"> HOME </span>
                </a>
            </li>
            <li><a href="faculty.php" class="nav_but active">
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
                <div class="faculty_dropdown-menu">
                    <a href="form.php">form</a>
                    <a href="view_addmission.php">view forms</a>

                </div>
            </li>
            <li><a href="./contact.php" class="nav_but">
                    <span style="padding-right: 10px; font-size: 15px"><i class="fa fa-address-book"></i></span>
                    CONTACT
                </a>
               
            </li>
        </ul>
    </div>
    <div class="facultyDetailContainer">
        <div class="facultyTitle">
            <h1>
                HETAUDA SCHOOL OF MANAGEMENT
            </h1>
        </div>
        <div class="date">

        </div>
        <div class="facultyDetailParagraph">

            <p>
                <img src="../img/science.webp">
            <h3>
                About Us
            </h3>
            <p>
                The main aim of the Faculty of Commerce & Management is to offer superior quality, affordable & professional education with view to build graduates & postgraduates with high ethical & leadership qualities. The faculty offers B.Com, BBA, M.Com, MBA and research programmes in Accountancy, Finance, Business administration, Banking & Business Economics, Human Resource Management, Marketing Management, Retail Management, Family Business & Entrepreneurship etc. We are fully committed for excellence in commerce & management education. In a competitive environment in general graduates are expected to be competitive with wide range of knowledge, skill & attributes. Therefore, Faculty of Commerce & Management intends to enlighten undergraduates to be in right endeavor by developing their distinct competencies with human values & professionalism which led them to be successful, globally employable & entrepreneurial graduates in the dynamic environment. Faculty of Commerce & Management is fully equipped with a wide range of latest technology tools including Smart class, Communication lab and language lab. The Faculty welcomes you all for joining the faculty for achieving your goals.
            </p>
            <h3>
                Academic Philosphy
            </h3>
            <p>

                FCMS aims to educate leaders of enterprises. We believe these leaders contribute to
                make a difference to their organizations and to the world around them. In our endeavour,
                we draw upon reserves of goodwill among the diaspora of our alumni, reputation among recruiters
                and potential students, and commitment of our faculty and staff to the institute. The future
                holds tremendous promise for the Faculty. We look forward to being recognized as one of the
                management schools worldwide.
            </p>
            <h3>
                Quality Policy
            </h3>
            <p>
                Quality Policy
                Faculty‘s major focus is on quality learning through classroom teaching & practical learning both.
                Focussed discussions, interactive study sessions, role plays, presentation, case study and strategy
                implementation sessions are held as a part of the future manager’s everyday work schedule.

            </p>
            <h3>
                Eligibility Criteria
            </h3>
            <p>

                B.Com. (3 Years): Candidates who have completed their 10+2 examination or equivalent by
                the Board established by law in India.

                Ph.D. (3 Years): Candidate must have passed a 2-year Master Degree from a recognized university
                in Commerce with 55 percent (General/ OBC) & 50 percent (SC/ST) .
            </p>
            </p>
        </div>

    </div>
</div>
<?php include "attendenceF/footer.php";?>
</body>
</html>