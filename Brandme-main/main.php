<?php
    session_start();
    include "dbconn.php";

    $id = $_SESSION['user_id'];

    $sql = "SELECT user_name FROM userinfo WHERE user_id = '$id'";
    $result = mysql_query($sql, $connect);
    $row = mysql_fetch_array($result);

    //home
    $home_select = "SELECT * FROM home WHERE user_id = '$user_id'";
    $home_result = mysql_query($home_select, $connect);
    $home_row = mysql_fetch_array($home_result);

    // about
    $about_select = "SELECT * FROM about WHERE user_id = '$user_id'";
    $about_result = mysql_query($about_select, $connect);
    $about_row = mysql_fetch_array($about_result);

    // skills_frontend
    $skills_frontend_select = "SELECT * FROM skills_frontend WHERE user_id = '$user_id'";
    $skills_frontend_result = mysql_query($skills_frontend_select, $connect);
    $skills_frontend_row = mysql_fetch_array($skills_frontend_result);

    // skills_backend
    $skills_backend_select = "SELECT * FROM skills_backend WHERE user_id = '$user_id'";
    $skills_backend_result = mysql_query($skills_backend_select, $connect);
    $skills_backend_row = mysql_fetch_array($skills_backend_result);

    // qualification_edu
    $qualification_edu_select = "SELECT * FROM qualification_edu WHERE user_id = '$user_id'";
    $qualification_edu_result = mysql_query($qualification_edu_select, $connect);
    $qualification_edu_row = mysql_fetch_array($qualification_edu_result);

    // qualification_work
    $qualification_work_select = "SELECT * FROM qualification_work WHERE user_id = '$user_id'";
    $qualification_work_result = mysql_query($qualification_work_select, $connect);
    $qualification_work_row = mysql_fetch_array($qualification_work_result);

    // services
    $services_select = "SELECT * FROM services WHERE user_id = '$user_id'";
    $services_result = mysql_query($services_select, $connect);
    $services_row = mysql_fetch_array($services_result);

    // contact
    $contact_select = "SELECT * FROM contact WHERE user_id = '$user_id'";
    $contact_result = mysql_query($contact_select, $connect);
    $contact_row = mysql_fetch_array($contact_result);
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
        <link rel="stylesheet" href="./css/mainstyle.css">

        <!-- commit test -->
    </head>

    <body>
        <!-- ===========================//// HEADER ////================================= -->
        <header class="header" id="header">
            <!-- ===========================//// NAV ////================================= -->
            <nav class="nav container">
                <a href="home.php" class="nav__logo">Brand Me.</a>
                
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
                            <a href="#qualification" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i> Qualification
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
                            <a href="user_setting.php" class="nav__link setting">
                                <!-- DB user ID값으로 변경 -->
                                <i class="uil uil-user nav__icon"></i> UserSetting
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="logout.php" class="nav__link setting">
                                <i class="uil uil-user nav__icon"></i> Logout
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
                <div class="home__container container grid">

                    <div class="home__content grid">
                        <div class="home__social">
                            <!-- DB 입력값 변수로 변경할 것 -->
                            <a href="https://www.notion.so/ko-kr/product" target="_blank" class="home__social-icon">
                                <i class="uil uil-blogger-alt"></i>
                            </a>

                            <!-- DB 입력값 변수로 변경할 것 -->
                            <a href="#" target="_blank" class="home__social-icon">
                                <i class="uil uil-dribbble"></i>
                            </a>

                            <!-- DB 입력값 변수로 변경할 것 -->
                            <a href="https://github.com/<?php echo$home_row['git'];?>" target="_blank" class="home__social-icon">
                                <i class="uil uil-github-alt"></i>
                            </a>
                        </div>

                        <!-- 프로필 이미지 blob -->
                        

                        <div class="home__data">
                            <!-- DB 입력값 변수로 변경할 것 -->
                            <h1 class="home__title">Hi, I'm 
                                <?php
                                    echo $row['user_name'];
                                ?>
                            </h1>
                            <h3 class="home__subtitle"><?php 
                                    echo $home_row['occupation'];
                                ?></h3>
                            <p class="home__description">
                                <?php
                                    echo $home_row['home_information'];
                                ?>
                            </p>                            
                            <a href="#contactme" class="button button--flex"> Contact Me
                                <i class="uil uil-message button__icon"></i>
                            </a>
                        </div>

                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                    <image class="home__blob-img" xlink:href="./img/ogu.jpg"/>
                                </g>
                            </svg>
                        </div>
                    </div>

                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-button button--flex">
                            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                            <span class="home__scroll-name">Scroll down</span>
                            <i class="uil uil-arrow-down home__scroll-arrow"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!-- ===========================//// ABOUT ////================================= -->
            <section class="about section" id="about">
                <h2 class="section__title">About Me</h2>
                <span class="section__subtitle">My introduction</span>

                <div class="about__container container grid">
                    <img src=<?php echo$about_row['about_img'];?> alt="" class="about__img"/>
                    
                    <div class="about__data">

                        <p class="about__description">
                            <?php
                                echo $about_row['about_information'];
                            ?>
                        </p>

                        <div class="about__info">
                            <div class="about__info-div">
                                <span class="about__info-title">
                                    <?php
                                        echo $about_row['experience'];
                                    ?>
                                </span>
                                <span class="about__info-name">Years <br> experience</span>
                            </div>
                            <div class="about__info-div">
                                <span class="about__info-title">
                                    <?php
                                        echo $about_row['project'];
                                    ?>
                                </span>
                                <span class="about__info-name">Completed <br> project</span>
                            </div>
                            <div class="about__info-div">
                                <span class="about__info-title">
                                    <?php
                                        echo $about_row['worked'];
                                    ?>
                                </span>
                                <span class="about__info-name">Compaines <br> worked</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ===========================//// SKILLS ////================================= -->
            <section class="skills section" id="skills">
                <h2 class="section__title">Skills</h2>
                <span class="section__subtitle">My technical level</span>

                <div class="skills__container container grid">
                    <div>
                        <!-- =========================== SKILLS 1 ================================= -->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <!-- DB 입력값 변수로 변경할 것 아이콘, Skills-->
                                <i class="uil uil-brackets-curly skills__icon"></i>

                                <div>
                                    <h1 class="skills__title">Frontend developer</h1>
                                    <span class="skills__subtitle"></span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            <?php 
                                                echo $skills_frontend_row['skills_front_1'];
                                            ?>
                                        </h3>
                                        <span class="skills__number"><?php echo $skills_frontend_row['skills_front_per_1'];?>%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__html" style="width : <?php echo $skills_frontend_row['skills_front_per_1'];?>%;"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            <?php 
                                                echo $skills_frontend_row['skills_front_2'];
                                            ?>
                                        </h3>
                                        <span class="skills__number"><?php echo $skills_frontend_row['skills_front_per_2'];?>%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__CSS" style="width : <?php echo $skills_frontend_row['skills_front_per_2'];?>%;"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            <?php 
                                                echo $skills_frontend_row['skills_front_3'];
                                            ?>
                                        </h3>
                                        <span class="skills__number"><?php echo $skills_frontend_row['skills_front_per_3'];?>%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__js" style="width : <?php echo $skills_frontend_row['skills_front_per_3'];?>%;"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            <?php 
                                                echo $skills_frontend_row['skills_front_4'];
                                            ?>
                                        </h3>
                                        <span class="skills__number"><?php echo $skills_frontend_row['skills_front_per_4'];?>%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__react" style="width : <?php echo $skills_frontend_row['skills_front_per_4'];?>%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div>
                        <!-- =========================== SKILLS 2 ================================= -->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-server-network skills__icon"></i>

                                <div>
                                    <h1 class="skills__title">Backend developer</h1>
                                    <span class="skills__subtitle"></span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            <?php 
                                                echo $skills_backend_row['skills_back_1'];
                                            ?>
                                        </h3>
                                        <span class="skills__number"><?php echo $skills_backend_row['skills_back_per_1'];?>%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__node" style="width : <?php echo $skills_backend_row['skills_back_per_1'];?>%;"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            <?php 
                                                echo $skills_backend_row['skills_back_2'];
                                            ?>
                                        </h3>
                                        <span class="skills__number"><?php echo $skills_backend_row['skills_back_per_2'];?>%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__php" style="width : <?php echo $skills_backend_row['skills_back_per_2'];?>%;"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            <?php 
                                                echo $skills_backend_row['skills_back_3'];
                                            ?>
                                        </h3>
                                        <span class="skills__number"><?php echo $skills_backend_row['skills_back_per_3'];?>%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__spring" style="width : <?php echo $skills_backend_row['skills_back_per_3'];?>%;"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            <?php 
                                                echo $skills_backend_row['skills_back_4'];
                                            ?>
                                        </h3>
                                        <span class="skills__number"><?php echo $skills_backend_row['skills_back_per_4'];?>%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__python" style="width : <?php echo $skills_backend_row['skills_back_per_4'];?>%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ===========================//// QUALIFICATION ////================================= -->
            <section class="qualification section" id="qualification">
                <h2 class="section__title">Qualification</h2>
                <span class="section__subtitle">My persnal journey</span>

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

                    <div class="qualification__section">
                        <!-- =========================== QUALIFICATION CONTENT 1================================= -->
                        <div class="qualification__content qualification__active" data-content id="education">
                            <!-- =========================== QUALIFICATION 1================================= -->
                            <div class="qualification__data">
                                <div>
                                    <!-- DB 입력값 변수로 변경할 것 -->
                                    <h3 class="qualification__title"><?php echo $qualification_edu_row['edu1'];?></h3>
                                    <span class="qualification__subtitle"><?php echo $qualification_edu_row['edu1_location'];?></span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        <?php echo $qualification_edu_row['edu1_period'];?>
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>

                            <!-- =========================== QUALIFICATION 2================================= -->
                            <div class="qualification__data">
                                <div></div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>

                                <div>
                                    <!-- DB 입력값 변수로 변경할 것 -->
                                    <h3 class="qualification__title"><?php echo $qualification_edu_row['edu2'];?></h3>
                                    <span class="qualification__subtitle"><?php echo $qualification_edu_row['edu2_location'];?></span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        <?php echo $qualification_edu_row['edu2_period'];?>
                                    </div>
                                </div>


                            </div>

                            <!-- =========================== QUALIFICATION 3================================= -->
                            <div class="qualification__data">

                                <div>
                                    <!-- DB 입력값 변수로 변경할 것 -->
                                    <h3 class="qualification__title"><?php echo $qualification_edu_row['edu3'];?></h3>
                                    <span class="qualification__subtitle"><?php echo $qualification_edu_row['edu3_location'];?></span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        <?php echo $qualification_edu_row['edu3_period'];?>
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>


                            </div>
                            
                            <!-- =========================== QUALIFICATION 4================================= -->
                            <div class="qualification__data">
                                <div></div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                </div>

                                <div>
                                    <!-- DB 입력값 변수로 변경할 것 -->
                                    <h3 class="qualification__title"><?php echo $qualification_edu_row['edu4'];?></h3>
                                    <span class="qualification__subtitle"><?php echo $qualification_edu_row['edu4_location'];?></span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        <?php echo $qualification_edu_row['edu4_period'];?>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <!-- =========================== QUALIFICATION CONTENT 2================================= -->
                        <div class="qualification__content" data-content id="work">
                            <!-- =========================== QUALIFICATION 1================================= -->
                            <div class="qualification__data">
                                <div></div>             

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>

                                <div>
                                    <!-- DB 입력값 변수로 변경할 것 -->
                                    <h3 class="qualification__title"><?php echo $qualification_work_row['work1'];?></h3>
                                    <span class="qualification__subtitle"><?php echo $qualification_work_row['work1_location'];?></span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        <?php echo $qualification_work_row['work1_period'];?>
                                    </div>
                                </div>


                            </div>

                            <!-- =========================== QUALIFICATION 2================================= -->
                            <div class="qualification__data">

                                <div>
                                    <!-- DB 입력값 변수로 변경할 것 -->
                                    <h3 class="qualification__title"><?php echo $qualification_work_row['work2'];?></h3>
                                    <span class="qualification__subtitle"><?php echo $qualification_work_row['work2_location'];?></span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        <?php echo $qualification_work_row['work2_period'];?>
                                    </div>
                                </div>
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>


                            </div>

                            <!-- =========================== QUALIFICATION 3================================= -->
                            <div class="qualification__data">
                                <div></div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>

                                <div>
                                    <!-- DB 입력값 변수로 변경할 것 -->
                                    <h3 class="qualification__title"><?php echo $qualification_work_row['work3'];?></h3>
                                    <span class="qualification__subtitle"><?php echo $qualification_work_row['work3_location'];?></span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        <?php echo $qualification_work_row['work3_period'];?>
                                    </div>
                                </div>
                        </div>
                        <!-- =========================== QUALIFICATION 4================================= -->
                        <div class="qualification__data">
                                
                            <div>
                                <!-- DB 입력값 변수로 변경할 것 -->
                                <h3 class="qualification__title"><?php echo $qualification_work_row['work4'];?></h3>
                                <span class="qualification__subtitle"><?php echo $qualification_work_row['work4_location'];?></span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    <?php echo $qualification_work_row['work4_period'];?>
                                </div>
                            </div>    
                            
                            <div>
                                <span class="qualification__rounder"></span>
                                <!-- <span class="qualification__line"></span> -->
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- ===========================//// SERVICES ////================================= -->
            <section class="services section" id="services">
                <!-- Services title, Subtitle -->
                <h2 class="section__title">Services</h2>
                <span class="section__subtitle">What i offer</span>

                <div class="services__container container grid">
                    <!-- ===========================//// SERVICES 2 ////================================= -->
                    <div class="services__content">
                        <div>
                            <i class="uil uil-arrow services__icon"></i>
                            <!-- DB 입력값 변수로 변경할 것 -->
                            <h3 class="services__title">Frontend <br> Developer</h3>
                        </div>

                        <span class="button button--flex button--small button--link services__button">
                            View More
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <!-- DB 입력값 변수로 변경할 것 -->
                                <h4 class="services__modal-title">Frontend <br> Developer</h4>
                                <i class="uil uil-times services__modal-close"></i>

                                <!-- DB 입력값 변수로 변경할 것 -->
                                <ul class="services__modal-services grid">
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>
                                            <?php
                                                echo $services_row['services_front_1'];
                                            ?>
                                        </p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>
                                            <?php
                                                echo $services_row['services_front_2'];
                                            ?>
                                        </p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>
                                            <?php
                                                echo $services_row['services_front_3'];
                                            ?>
                                        </p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>
                                            <?php
                                                echo $services_row['services_front_4'];
                                            ?>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- ===========================//// SERVICES 3 ////================================= -->
                    <div class="services__content">
                        <div>
                            <i class="uil uil-pen services__icon"></i>
                            <!-- DB 입력값 변수로 변경할 것 -->
                            <h3 class="services__title">Backend <br> Developer</h3>
                        </div>

                        <span class="button button--flex button--small button--link services__button">
                            View More
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <!-- DB 입력값 변수로 변경할 것 -->
                                <h4 class="services__modal-title">Backend <br> Developer</h4>
                                <i class="uil uil-times services__modal-close"></i>

                                <!-- DB 입력값 변수로 변경할 것 -->
                                <ul class="services__modal-services grid">
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>
                                            <?php
                                                echo $services_row['services_back_1'];
                                            ?>
                                        </p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>
                                            <?php
                                                echo $services_row['services_back_2'];
                                            ?>
                                        </p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>
                                            <?php
                                                echo $services_row['services_back_3'];
                                            ?>
                                        </p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>
                                            <?php
                                                echo $services_row['services_back_4'];
                                            ?>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ===========================//// PROTFOLIO ////================================= -->
            <section class="portfolio section" id="portfolio">
                <h2 class="section__title">Portfolio</h2>
                <span class="section__subtitle">Most recent work</span>

                <div class="portfolio__container container swiper">
                    <div class="swiper-wrapper">
                        <!-- ===========================//// PROTFOLIO 1 ////================================= -->
                        <div class="portfolio__content grid swiper-slide">
                            <!-- DB 입력값 변수로 변경할 것 -->
                            <img src="./img/alba_lounge.jpg" alt="" class="portfolio__img">

                            <div class="portfolio__data">
                                <h3 class="portfolio__title">Android Project</h3>
                                <p class="portfolio__description">전국 아르바이트생 혹은 사장님들을 위한 커뮤니티 공간 알바라운지</p>
                                <a href="#" class="button button--flex button--small portfolio__button">
                                    Demo
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>

                        <!-- ===========================//// PROTFOLIO 2 ////================================= -->
                        <div class="portfolio__content grid swiper-slide">
                            <img src="./img/brandme.png" alt="" class="portfolio__img">

                            <div class="portfolio__data">
                                <h3 class="portfolio__title">Web Project</h3>
                                <p class="portfolio__description">포트폴리오 제작 플랫폼 Brand Me.</p>
                                <a href="#" class="button button--flex button--small portfolio__button">
                                    Demo
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>

                        <!-- ===========================//// PROTFOLIO 3 ////================================= -->
                        <div class="portfolio__content grid swiper-slide">
                            <div class="portfolio__contentimg">
                                <img src="./img/bg1.png" alt="" class="portfolio__img">
                            </div>
                            <div class="portfolio__data">
                                <h3 class="portfolio__title">Web Project</h3>
                                <p class="portfolio__description">서울시 요식업 상권 분석 플랫폼, Let's be CEO!</p>
                                <a href="#" class="button button--flex button--small portfolio__button">
                                    Demo
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>


                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next">
                        <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <!-- ===========================//// CONTACT ME ////================================= -->
            <section class="contact section" id="contactme">
                <h2 class="section__title">Contact Me</h2>
                <span class="section__subtitle">Get in Touch</span>

                <div class="contact__container container grid">
                    <div>
                        <div class="contact__information">
                            <i class="uil uil-phone contact__icon"></i>

                            <div>
                                <h3 class="contact__title">Call Me</h3>
                                <span class="contact__subtitle">
                                    <?php
                                        echo $contact_row['phone'];
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="contact__information">
                            <i class="uil uil-envelope contact__icon"></i>

                            <div>
                                <h3 class="contact__title">Email</h3>
                                <span class="contact__subtitle">
                                    <?php
                                        echo $contact_row['email'];
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="contact__information">
                            <i class="uil uil-map-marker contact__icon"></i>

                            <div>
                                <h3 class="contact__title">Location</h3>
                                <span class="contact__subtitle">
                                    <?php
                                        echo $contact_row['location'];
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <form action="contactme.php" method="post" class="contact__form grid">
                        <div class="contact__inputs grid">
                            <div class="contact__content">
                                <label for="" class="contact__label">Name</label>
                                <input type="text" name="contactme_name" class="contact__input">
                            </div>

                            <div class="contact__content">
                                <label for="" class="contact__label">Email</label>
                                <input type="email" name="contactme_email" class="contact__input">
                            </div>
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label">Title</label>
                            <input type="text" name="contactme_title" class="contact__input">
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label">Message</label>
                            <textarea name="contactme_message" id="" cols="0" rows="7" class="contact__input"></textarea>
                        </div>

                        <div>
                            <input type="submit" class="button button--flex button__icon uil uil-message" value="Send Message">
                            </a>
                        </div>
                    </form>
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
                            <li>
                                <a href="#services" class="footer__link">Services</a>
                            </li>
                            <li>
                                <a href="#portfolio" class="footer__link">Portfolio</a>
                            </li>
                            <li>
                                <a href="#contact" class="footer__link">Conatctme</a>
                            </li>
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
                mousewheel: true,
                keyboard: true,
            });            
        </script>

    </body>
</html>