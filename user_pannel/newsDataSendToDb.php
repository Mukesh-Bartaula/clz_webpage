<?php
if(isset($_POST['news_upload'])) {

    $news_date = $_POST['news_date'];
    $news_title = $_POST['news_title'];
    $news_paragraph = $_POST['news_paragraph'];
    $news_photoURL = $_FILES['news_photoURL'];
    include "db.php";

    $img_name = $_FILES['news_photoURL']['name'] ;
    $img_size = $_FILES['news_photoURL']['size'] ;
    $img_tmp_name = $_FILES['news_photoURL']['tmp_name'] ;
    $img_error = $_FILES['news_photoURL']['error'];
    if($img_error === 0){
        if($img_size>200000){
            $err = "Too large photo size.";
            header("location:./news_form.php?error=$err");

        }else{
            $img_ext = pathinfo($img_name,PATHINFO_EXTENSION);
            $img_ext_lowercase = strtolower($img_ext);
            $allow_ext =array("jpg", "jpeg", "png", "webp");
            if(in_array($img_ext_lowercase, $allow_ext)){
                $new_img_name = uniqid("img-", true).".".$img_ext_lowercase ;
                $img_upload_path = "./uploaded_photos/".$new_img_name;
                move_uploaded_file($img_tmp_name, $img_upload_path);
                $servername = 'localhost';
                $username = "root";
                $password = "";
                $db = "clz_db";
                $conn = mysqli_connect($servername, $username, $password, $db);
                if(!$conn){
                    die("error" . mysqli_error());
                }
                $sql = "INSERT INTO news_content(date, title, paragraph, photo_url)VALUES('$news_date','$news_title','$news_paragraph','$new_img_name')";
                $query = $conn->query($sql);
                if (!$query) {
                    echo "error:Error in sql.";


                }
                else{
                    header("location:./news.php");
                }
            }else{
                $err = "Photos should be jpg, jpeg, png formate";
                header("location:./news_form.php?error=$err");

            }

        }

    }else{
        $err = "unkonwn error occur.";
        header("location:./news_form.php?error=$err");
    }

}


