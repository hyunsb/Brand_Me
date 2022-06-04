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
    <link rel="stylesheet" href="./css/homestyle.css">

</head>
<body>
    <div class="main_Header_Container">
        <nav class="nav container">
            <a href="#" class="nav__logo">Brand Me.</a>
            <div class="nav_menu">
                <a href="#" class="nav_items">Portfolio</a>
                <a href="#" class="nav_items">Board</a>
                <a href="#" class="nav_items">Contact Us</a>
                <a href="#" class="nav_items">MyPage</a>

               <!-- if (session.id !== 'null') {
                        LogIn
                    } else {
                        LogOut
                    }}-->
                <div class="nav_btn">
                    <a href="login.php" class="nav_items">Login</a>
                </div>
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
                <!-- <div class="Content_Img_Area swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="./img/pre1.png" class="Content_Img">
                        </div>

                        <div class="swiper-slide">
                            <img src="./img/pre2.png" class="Content_Img">
                        </div>

                        <div class="swiper-slide">
                            <img src="./img/pre3.png" class="Content_Img">
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>



    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Brand Me.</h1>
                    <span class="footer__subtitle">Making Your Portfolio</span>
                </div>

                <!-- <ul class="footer__links">
                    <li>
                        <a href="#services" class="footer__link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Conatctme</a>
                    </li>
                </ul> -->

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
    <div class="footer_img_Area">
        <img src="./img/section1_img2R.png" alt class="footer_img"/>
    </div>

    <script src="./js/swiper-bundle.min.js"></script>
</body>
</html>