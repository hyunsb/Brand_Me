<?php
    session_start();
    include "dbconn.php";

    $user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF8">
        <title>Main Page</title>

        <!-- UNICONS -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <!-- SWIPER CSS -->
        <link rel="stylesheet" href="./css/swiper-bundle.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="./css/setting.css">
    </head>
    
    <body>
        <?php
            // home
            $home_select = "SELECT * FROM home WHERE user_id = '$user_id'";
            $home_result = mysql_query($home_select, $connect);
            $home_row = mysql_fetch_array($home_result);

            // about
            $about_select = "SELECT * FROM about WHERE user_id = '$user_id'";
            $about_result = mysql_query($about_select, $connect);
            $about_row = mysql_fetch_array($about_result);

            // skills_backend
            $skills_backend_select = "SELECT * FROM skills_backend WHERE user_id = '$user_id'";
            $skills_backend_result = mysql_query($skills_backend_select, $connect);
            $skills_backend_row = mysql_fetch_array($skills_backend_result);

            // skills_frontend
            $skills_frontend_select = "SELECT * FROM skills_frontend WHERE user_id = '$user_id'";
            $skills_frontend_result = mysql_query($skills_frontend_select, $connect);
            $skills_frontend_row = mysql_fetch_array($skills_frontend_result);

            // services
            $services_select = "SELECT * FROM services WHERE user_id = '$user_id'";
            $services_result = mysql_query($services_select, $connect);
            $services_row = mysql_fetch_array($services_result);

            // contact
            $contact_select = "SELECT * FROM contact WHERE user_id = '$user_id'";
            $contact_result = mysql_query($contact_select, $connect);
            $contact_row = mysql_fetch_array($contact_result);

        ?>
        <form action="user_setting_check.php" method="post" >
        <!-- ===========================//// HEADER ////================================= -->
        <header class="header" id="header">
            <!-- ===========================//// NAV ////================================= -->
            <nav class="nav container">
                <a href="main.php" class="nav__logo">Brand Me.</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">
                                <i class="uil uil-estate nav__icon"></i> Home
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="uil uil-user nav__icon"></i> About
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i> Skills
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#services" class="nav__link">
                                <i class="uil uil-briefcase-alt nav__icon"></i> Services
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class="uil uil-scenery nav__icon"></i> Portfolio
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#contactme" class="nav__link">
                                <i class="uil uil-message nav__icon"></i> Contactme
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="user_setting_check.php" class="nav__link setting">
                                <!-- DB user ID값으로 변경 -->
                                <i class="uil uil-user nav__icon"></i> <input type="submit"></input>
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>

                <div class="nav__btns">
                    <!-- 다크/라이트모드 테마 변경 버튼 -->
                    <i class="uil uil-moon change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!-- ===========================//// MAIN ////================================= -->
        <main class="main">
            <!-- ===========================//// HOME ////================================= -->
            <section class="home section" id="home">

                <h2 class="section__title">Home</h2>
                <span class="section__subtitle">hello</span>
                <div class="home__container container">
                    <!-- <form method ="post" action="user_setting_check.php" class="skill__home grid"> -->
                    <div class="home__userinfo grid">
                        <div class="home__username home__items">
                            <div class="contact__inputs">
                                <label for="" class="contact__label"><i class="uil uil-user"></i> Name</label>
                                <input type="text" name ="user_name" class="contact__input" value="<?php echo $home_row['user_name'];?>">
                            </div>
                        </div>
                        <div class="home__useroccupation home__items">
                            <div class="contact__inputs">
                                <label for="" class="contact__label"><i class="uil uil-bag"></i> occupation</label>
                                <input type="text" name ="occupation" class="contact__input" value="<?php echo $home_row['occupation'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="home__infomation home__items">
                        <div class="contact__inputs">
                            <label for="" class="contact__label"><i class="uil uil-comment-alt-chart-lines"></i> infomation</label>
                        
                            <textarea name="home_information" id="" cols="0" rows="1" class="contact__input"><?php echo $home_row['home_information'];?></textarea>
                        </div>
                    </div>

                    <div class="home__link grid">
                        <div class="homelink__inputs">
                            <div class="span__item">
                                <i class="uil uil-github-alt"></i>
                                <span class="span__flex">&nbsp;https://github.com/</span>
                            </div>
                            <input type="text" name ="git" class="input__link" placeholder="git UserName (ex.hyunsb)" value="<?php echo $home_row['git'];?>">
                        </div>
                        <div class="homelink__inputs">
                            <div class="span__item">
                                <i class="uil uil-instagram"></i>
                                <span class="span__flex">&nbsp;https://instagram.com/</span>
                            </div>
                            <input type="text" name ="instagram" class="input__link" placeholder="instagram ID" value="<?php echo $home_row['instagram'];?>">
                        </div>
                        <div class="homelink__inputs">
                            <div class="span__item">
                                <i class="uil uil-web-grid"></i>
                                <span class="span__flex">&nbsp;https://notion.com/</span>
                            </div>
                            <input type="text" name ="notion" class="input__link" value="<?php echo $home_row['notion'];?>">
                        </div>                        
                    </div>
                    <!-- </form> -->
                </div>
            </section>

            <!-- ===========================//// ABOUT ////================================= -->
            <section class="about section" id="about">
                <h2 class="section__title">About Me</h2>
                <span class="section__subtitle">My introduction</span>

                <!-- <form method ="post" action="user_setting_check.php" class="about__form grid"> -->
                <div class="about__container container grid">
                    <div class="home__userinfo">
                        <div class="home__infomation home__items">
                            <div class="contact__inputs">
                                <label for="" class="contact__label"><i class="uil uil-comment-alt-chart-lines"></i> information</label>
                                
                                <textarea name="about_information" id="" cols="0" rows="1" class="contact__input"><?php echo $about_row['about_information'];?></textarea>
                            </div>
                        </div>

                        <div class="about__input grid">
                            <div>
                                <label for="" class="contact__label"><i class="uil uil-comment-alt-chart-lines"></i>Year Experience</label>
                                <input type="number" name ="notion" class="input__link" value="<?php echo $about_row['experience'];?>">
                            </div>
                            <div>
                                <label for="" class="contact__label"><i class="uil uil-comment-alt-chart-lines"></i>Completed Project Number</label>
                                <input type="number" name ="notion" class="input__link" value="<?php echo $home_row['project'];?>">
                            </div>
                            <div>
                                <label for="" class="contact__label"><i class="uil uil-comment-alt-chart-lines"></i>Companies Worked</label>
                                <input type="number" name ="notion" class="input__link" value="<?php echo $home_row['worked'];?>">
                            </div>
                        </div>
                    </div>
                    
                    <div class="about__data">
                        <!-- DB 입력값 변수로 변경할 것 -->
                        <div class="about__info">
                        </div>

                        <div class="about__buttons">
                        </div>
                    </div>
                </div>
                <!-- </form> -->
            </section>


            <!-- ===========================//// SKILLS ////================================= -->
            <section class="skills section" id="skills">
                <h2 class="section__title">Skills</h2>
                <span class="section__subtitle">My technical level</span>

                <div class="contact__container container grid">
                    <!-- <form method ="post" action="user_setting_check.php" class="skills__form grid"> -->
                        <h1 class="skills__title"><i class="uil uil-brackets-curly skills__icon"></i> Frontend Developer</h1>
                        <div class="skills__sub grid">
                            <span>skills</span>
                            <span>%</span>
                        </div>
                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="skills_front_1" type="text" class="skills__input" placeholder="react" value="<?php echo $skills_frontend_row['skills_front_1'];?>">
                            </div>

                            <div class="skills__inputs">
                                <input name ="skills_front_per_1" type="text" class="skills__input" placeholder="65" value="<?php echo $skills_frontend_row['skills_front_per_1'];?>">
                            </div>
                        </div>

                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="skills_front_2" type="text" class="skills__input" value="<?php echo $skills_frontend_row['skills_front_2'];?>">
                            </div>

                            <div class="skills__inputs">
                                <input name ="skills_front_per_2" type="text" class="skills__input" value="<?php echo $skills_frontend_row['skills_front_per_2'];?>">
                            </div>
                        </div> 

                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="skills_front_3" type="text" class="skills__input" value="<?php echo $skills_frontend_row['skills_front_3'];?>">
                            </div>

                            <div class="skills__inputs">
                                <input name ="skills_front_per_3" type="text" class="skills__input" value="<?php echo $skills_frontend_row['skills_front_per_3'];?>">
                            </div>
                        </div> 

                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="skills_front_4" type="text" class="skills__input" value="<?php echo $skills_frontend_row['skills_front_4'];?>">
                            </div>

                            <div class="skills__inputs">
                                <input name ="skills_front_per_4" type="text" class="skills__input" value="<?php echo $skills_frontend_row['skills_front_per_4'];?>">
                            </div>
                        </div> 

                    <!-- </form> -->

                    <!-- <form method ="post" action="user_setting_check.php" class="contact__form grid"> -->
                        <h1 class="skills__title"><i class="uil uil-server-network skills__icon"></i> Backend Developer</h1>
                        <div class="skills__sub grid">
                            <span>skills</span>
                            <span>%</span>
                        </div>
                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="skills_back_1" type="text" class="skills__input" placeholder="nodejs" value="<?php echo $skills_backend_row['skills_back_1'];?>">
                            </div>

                            <div class="skills__inputs">
                                <input name ="skills_back_per_1" type="text" class="skills__input" placeholder="85" value="<?php echo $skills_backend_row['skills_back_per_1'];?>">
                            </div>
                        </div>

                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="skills_back_2" type="text" class="skills__input" value="<?php echo $skills_backend_row['skills_back_2'];?>">
                            </div>

                            <div class="skills__inputs">
                                <input name ="skills_back_per_2" type="text" class="skills__input" value="<?php echo $skills_backend_row['skills_back_per_2'];?>">
                            </div>
                        </div> 

                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="skills_back_3" type="text" class="skills__input" value="<?php echo $skills_backend_row['skills_back_3'];?>">
                            </div>

                            <div class="skills__inputs">
                                <input name ="skills_back_per_3" type="text" class="skills__input" value="<?php echo $skills_backend_row['skills_back_per_3'];?>">
                            </div>
                        </div> 

                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="skills_back_4" type="text" class="skills__input" value="<?php echo $skills_backend_row['skills_back_4'];?>">
                            </div>

                            <div class="skills__inputs">
                                <input name ="skills_back_per_4" type="text" class="skills__input" value="<?php echo $skills_backend_row['skills_back_per_4'];?>">
                            </div>
                        </div>
                    <!-- </form> -->
                </div>
            </section>


            <!-- ===========================//// QUALIFICATION ////================================= -->
            <section class="qualification section">
                <h2 class="section__title">Qualification</h2>
                <span class="section__subtitle">My persnal journey</span>

                <!-- <form method ="post" action="user_setting_check.php" class="qualification__form grid"> -->
                <div class="qualification__container container">
                    <div class="qualification__tabs">
                        <div class="qualification__button button--flex qualification__active" data-target='#education'>
                            <i class="uil uil-graduation-cap qualification__icon"></i>
                            Education
                        </div>

                        <div class="qualification__button button--flex" data-target='#work'>
                            <i class="uil uil-briefcase-alt qualification__icon"></i>
                            Work
                        </div>
                    </div>
                </div>
                <!-- </form> -->
            </section>

            <!-- ===========================//// SERVICES ////================================= -->
            <section class="services section" id="services">
                <!-- Services title, Subtitle -->
                <h2 class="section__title">Services</h2>
                <span class="section__subtitle">What i offer</span>

                <div class="contact__container container grid">
                        <h1 class="skills__title"><i class="uil uil-brackets-curly skills__icon"></i> Frontend Developer</h1>
                        <div class="skills__sub grid">
                            <span></span>
                            <span></span>
                        </div>
                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="services_front_1" type="text" class="skills__input" placeholder="I develop the user interface." value="<?php echo $services_row['services_front_1'];?>">
                            </div>
                        </div>

                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="services_front_2" type="text" class="skills__input" value="<?php echo $services_row['services_front_2'];?>">
                            </div>
                        </div> 

                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="services_front_3" type="text" class="skills__input" value="<?php echo $services_row['services_front_3'];?>">
                            </div>
                        </div> 

                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="services_front_4" type="text" class="skills__input" value="<?php echo $services_row['services_front_4'];?>">
                            </div>
                        </div>

                        <h1 class="skills__title"><i class="uil uil-server-network skills__icon"></i> Backend Developer</h1>
                        <div class="skills__sub grid">
                            <span></span>
                            <span></span>
                        </div>
                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="services_back_1" type="text" class="skills__input" placeholder="I create ux element interactions." value="<?php echo $services_row['services_back_1'];?>">
                            </div>
                        </div>

                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="services_back_2" type="text" class="skills__input" value="<?php echo $services_row['services_back_2'];?>">
                            </div>
                        </div> 

                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="services_back_3" type="text" class="skills__input" value="<?php echo $services_row['services_back_3'];?>">
                            </div>
                        </div> 

                        <div class="skills__skill grid">
                            <div class="skills__inputs">
                                <input name ="services_back_4" type="text" class="skills__input" value="<?php echo $services_row['services_back_4'];?>">
                            </div>
                        </div>
                </div>
            </section>

            <!-- ===========================//// PORTFOLIO ////================================= -->
            <section class="portfolio section" id="portfolio">
                <h2 class="section__title">Portfolio</h2>
                <span class="section__subtitle">Most recent work</span>

                <!-- <form method ="post" action="user_setting_check.php" class="portfolio__form grid">

                </form> -->

            </section>

            <!-- ===========================//// CONTACT ME ////================================= -->
            <section class="contact section" id="contactme">
                <h2 class="section__title">Contact Me</h2>
                <span class="section__subtitle">Get in Touch</span>

                <div class="contact__container container">
                    <!-- <form method ="post" action="user_setting_check.php" class="contact__form grid"> -->
                        <div class="contact__inputs">
                            <label for="" class="contact__label"><i class="uil uil-phone"></i> Phone Number</label>
                            <input name="phone" type="text" class="contact__input" value="<?php echo $contact_row['phone'];?>">
                        </div>

                        <div class="contact__inputs">
                            <label for="" class="contact__label"><i class="uil uil-envelope"></i> Email</label>
                            <input name="email" type="text" class="contact__input" value="<?php echo $contact_row['email'];?>">
                        </div>

                        <div class="contact__inputs">
                            <label for="" class="contact__label"><i class="uil uil-map-marker"></i> Location</label>
                            <input name="location" type="text" class="contact__input" value="<?php echo $contact_row['location'];?>">
                        </div>
                    <!-- </form> -->
                </div>
            </section>

            <!-- ===========================//// FOOTER ////================================= -->
            <footer class="footer">
                <div class="footer__bg">
                    <div class="footer__container container grid">
                        <div>
                            <h1 class="footer__title">Brand Me.</h1>
                            <span class="footer__subtitle">Making Your Portfolio</span>
                        </div>

                        <ul class="footer__links">
                            <!-- <li>
                                <a href="#services" class="footer__link">Services</a>
                            </li>
                            <li>
                                <a href="#portfolio" class="footer__link">Portfolio</a>
                            </li>
                            <li>
                                <a href="#contact" class="footer__link">Conatctme</a>
                            </li> -->
                        </ul>

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

            <!-- ===========================//// SCROLL TOP ////================================= -->
            <a href="#" class="scrollup" id="scroll-up">
                <i class="uil uil-arrow-up scrollup__icon"></i>
            </a>

        </main>

        <!-- ===========================//// MAIN JS ////================================= -->
        <script src="./js/main.js"></script>

        <!-- ===========================//// SWIPER JS ////================================= -->
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
                mousewheel: true,~
                keyboard: true,
            });            
        </script>
        </form>
    </body>
    
</html>