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
    <title>Brand Me.</title>

        <!-- CSS -->
        <link rel="stylesheet" href="./css/homestyle.css">

        <!-- UNICONS -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <!-- SWIPER CSS -->
        <link rel="stylesheet" href="./css/swiper-bundle.min.css">
</head>
<body>
    <div class="main_Header_Container">
        <nav class="nav container">
            <a href="home.php" class="nav__logo">Brand Me.</a>
            <div class="nav_menu">
                <a href="binary.php" class="nav_items">Portfolio</a>
                <a href="Board.php" class="nav_items">Board</a>
                <a href="ContactUs.php" class="nav_items">Contact Us</a>
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
    <div class="main_home_Container">
        <div class="section_img1">
            <img src="./img/section1_img2.png"/>
        </div>
        <div class="section_img2">
            <img src="./img/bubble_left2.svg" alt class="imgBubble"/>
            <img src="./img/bubble_right2.svg" alt class="imgBubble2"/>
            <div class="img_area">
                <img src="./img/section1_img.png" alt class="imgPeople"/>
            </div>
        </div>
        <div class="section_Title">
            <h4>Making Your Portfolio</h4>
            <h1>Brand Me.</h1>
        </div>
    </div>

    <div class="dump">
    </div>
    
    <div class="main_Content_Container">
        <div class="Content_section1">
            <div>
                <div class="Content_items">
                    <h1>Brand Me.</h1>
                    <h1>를 통해</h1>
                </div>
                <div class="Content_items2">
                    <h1>당신만의</h1>
                    <h1>{ 개발자 }</h1>
                    <h1>포트폴리오를 제작하세요!</h1>
                </div>
            </div>


            <!-- ===========================//   미리보기    //================================= -->
            <section class="portfolio section" id="portfolio">
                <!-- <h2 class="section__title">Portfolio</h2>
                <span class="section__subtitle">Most recent work</span> -->

                <div class="portfolio__container container swiper">
                    <div class="swiper-wrapper">
                        <!-- ===========================//// PROTFOLIO 1 ////================================= -->
                        <div class="guide_Content grid swiper-slide">
                            <!-- DB 입력값 변수로 변경할 것 -->
                            <img src="./img/pre1.png" alt="" class="guide_img">
                        </div>

                        <!-- ===========================//// PROTFOLIO 2 ////================================= -->
                        <div class="guide_Content grid swiper-slide">
                            <img src="./img/pre2.png" alt="" class="guide_img">
                        </div>

                        <!-- ===========================//// PROTFOLIO 3 ////================================= -->
                        <div class="guide_Content grid swiper-slide">
                            <img src="./img/pre3.png" alt="" class="guide_img">
                        </div>


                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next">
                    </div>
                    <div class="swiper-button-prev">
                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>
        </div>
    </div>

    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Brand Me.</h1>
                    <span class="footer__subtitle">Making Your Portfolio</span>
                </div>

                <div class="footer__socials">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                        <i class="uil uil-facebook-f"></i>
                    </a>
                    <a href="#" target="_blank" class="footer__social" >
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="#" target="_blank" class="footer__social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                </div>
            </div>
            <p class="footer__copy">&#169; Brand ME. All right reserved</p>
        </div>
    </footer>


    <script src="./js/swiper-bundle.min.js"></script>
        <script>
            var mySwiper = new Swiper ('.swiper', {
                cssMode: true,
                loop : true,

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable : true,
                },
                mousewheel: true,
                keyboard: true,
            });            
        </script>
</body>
</html>