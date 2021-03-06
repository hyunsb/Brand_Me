<?php
    session_start();
    include "dbconn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand me.</title>

        <!-- UNICONS -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <!-- CSS -->
        <link rel="stylesheet" href="./css/contactUs.css">
</head>
<body>
    <!-- ////////////////////// Header Area ///////////////////////////-->
    <div>
        <head>
            <link rel="stylesheet" href="./css/homestyle.css">
        </head>
        <body>
            <div class="main_Header_Container">
                <nav class="nav container">
                    <a href="home.php" class="nav__logo">Brand Me.</a>
                    <div class="nav_menu">
                        <a href="binary.php" class="nav_items">Portfolio</a>
                        <!-- php로 변경 -->
                        <a href="Board.php" class="nav_items">Board</a>
                        <a href="ContactUs.php" class="nav_items" style="color: #fff;">Contact Us</a>
                        <a href="MyPage.php" class="nav_items">MyPage</a>

                        <?php
                            if (!isset($_SESSION['user_id'])) {
                                echo "
                                    <div class='nav_btn'>
                                        <a href='login.php' class='nav_items'>Login</a>
                                    </div>
                                ";
                            } else {
                                echo "
                                    <div class='nav_btn'>
                                        <a href='logout.php' class='nav_items'>Logout</a>
                                    </div>
                                ";
                            }
                        ?>
                    </div>
                </nav>
            </div>
        </body>
    </div>

    <!-- ##################################### Contact Container ###################################### -->
    <div class="ContactUs_Container">
        <img src="./img/ContacImg.svg" alt class="ContactImg"/>
        <img src="./img/ContacMail.svg" alt class="ContactMail"/>
        <img src="./img/section1_img2.png" class="ContactBg"/>
        <h1 class="ContactUs_Title">Contact Us</h1>
        <div class="ContacUs_Content_Container">
            <!-- <h1>Contact Us</h1> -->
            <div class="ContactUs_Content_item">
                <div class="Content_ImgArea">
                    <img src="./img/stripy-user.png" alt class="Contact_img"/>
                </div>
                <div class="Content_ContentArea">
                    <div class="ContentArea_Content">
                        <h4><i class="uil uil-user"></i></h4>
                        <h4>정현수</h4>
                    </div>
                    <div class="ContentArea_Content">
                        <h4><i class="uil uil-envelope-alt"></i></h4>
                        <h4>junghss0113@gmail.com</h4>
                    </div>
                    <div class="ContentArea_Content">
                        <h4><i class="uil uil-github-alt"></i></h4>
                        <h4>github.com/hyunsb</h4>
                    </div>
                </div>
            </div>

            <div class="ContactUs_Content_item">
                <div class="Content_ImgArea">
                    <img src="./img/stripy-user.png" alt class="Contact_img"/>
                </div>
                <div class="Content_ContentArea">
                    <div class="ContentArea_Content">
                        <h4><i class="uil uil-user"></i></h4>
                        <h4>임우석</h4>
                    </div>
                    <div class="ContentArea_Content">
                        <h4><i class="uil uil-envelope-alt"></i></h4>
                        <h4>caker97@nate.com</h4>
                    </div>
                    <div class="ContentArea_Content">
                        <h4><i class="uil uil-github-alt"></i></h4>
                        <h4>github.com/WSLimmm</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>