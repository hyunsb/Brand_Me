<?php
    session_start();
    include "dbconn.php";
    if (!isset($_SESSION['user_id'])) {

        // 로그인이 되어있지 않을 시 뒤로 페이지로 이동.
        echo "
            <script>
                window.alert('로그인 후 이용해 주세요.')
                location.replace('home.php');
            </script>
            ";
    }

    $user_id = $_SESSION['user_id'];

    $select_info = "SELECT * FROM userinfo WHERE user_id = '$user_id'";
    $result = mysql_query($select_info, $connect);
    $row = mysql_fetch_array($result);

    $select_contactme = "SELECT * FROM contactme WHERE user_id = '$user_id'";
    $contactme_result = mysql_query($select_contactme, $connect);
    $contactme_row = mysql_fetch_array($contactme_result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Me.</title>

        <!-- UNICONS -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <!-- CSS -->
        <link rel="stylesheet" href="./css/mypage.css">
        <!-- <link rel="stylesheet" href="./css/board.css"> -->

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
                        <a href="ContactUs.php" class="nav_items">Contact Us</a>
                        <a href="MyPage.php" class="nav_items "style="color: #fff;">MyPage</a>

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
    
    <div class="mypage_container">
        <img src="./img/section1_img2R.png" class="myPageBg1"/>
        <img src="./img/section1_img2.png" class="myPageBg2"/>
        <img src="./img/bubble_left2.svg" alt class="imgBubble"/>
        <img src="./img/bubble_right2.svg" alt class="imgBubble2"/>

        <!--///////////////////// main-Container ////////////////////////-->
        <div class="mypage_main_Container">

            <!--///////////////// UserInfo Area//////////////////-->
            <div class="mypage_UserInfo_Area">
                <div class="UserInfo_Area_Img">
                    <img src="./img/stripy-user.png" alt class="UserInfo_img"/>
                </div>
                <div class="UserInfo_Area_Info">
                    <div class="Info_Container">
                        <div class="userInfo_items">
                            <h2>NAME</h2>
                            <h2><?php echo$row['user_name']?></h2>
                        </div>

                        <div class="userInfo_items">
                            <h2>ID</h2>
                            <h2><?php echo$row['user_id']?></h2>
                        </div>

                        <div class="userInfo_items">
                            <h2>PW</h2>
                            <h2><?php echo$row['user_pw']?></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mypage_border_Area"></div>

            <!--///////////////// UserContent Area//////////////////-->
            <div class="mypage_UserContent_Area">
                <div class="UserContent_Container">
                    <?php
                        echo "
                        {$contactme_row['contactme_user_id']}, {$contactme_row['contactme_name']},
                        {$contactme_row['contactme_email']}, {$contactme_row['contactme_title']}, {$contactme_row['contactme_message']}
                        ";
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>