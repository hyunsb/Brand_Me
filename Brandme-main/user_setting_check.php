<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF8">
</head>
</html>

<?php
            session_start();
            include "dbconn.php";   // db 연결

            $user_id = $_SESSION['user_id'];
        
            // home
            $home_name = $_POST['user_name'];
            $home_occupation = $_POST['occupation'];
            $home_information = $_POST['home_information'];
            $git = $_POST['git'];
            $notion = $_POST['notion'];
            $instagram = $_POST['instagram'];

            // about
            $about_information = $_POST['about_information'];
            $experience = $_POST['experience'];
            $project = $_POST['project'];
            $worked = $_POST['worked'];

            // about image
            $tempFile = $_FILES['about_img']['tmp_name']; // 임시 저장 정보(tmp_name)
            $fileTpyeExt = explode("/", $_FILES['about_img']['type']); // 파일타입 및 확장자 체크
            $fileType = $fileTpyeExt[0]; // 파일 타입
            $fileExt = $fileTpyeExt[1]; // 파일 확장자
            $extStatus = false; // 확장자 검사
            
            $resFile = "./user_img/{$_FILES['about_img']['name']}";
            $imageUpload = move_uploaded_file($tempFile, $resFile);
            
            // skills frontend
            $skills_front_1 = $_POST['skills_front_1'];
            $skills_front_2 = $_POST['skills_front_2'];
            $skills_front_3 = $_POST['skills_front_3'];
            $skills_front_4 = $_POST['skills_front_4'];
            $skills_front_per_1 = $_POST['skills_front_per_1'];
            $skills_front_per_2 = $_POST['skills_front_per_2'];
            $skills_front_per_3 = $_POST['skills_front_per_3'];
            $skills_front_per_4 = $_POST['skills_front_per_4'];

            // skills backend
            $skills_back_1 = $_POST['skills_back_1'];
            $skills_back_2 = $_POST['skills_back_2'];
            $skills_back_3 = $_POST['skills_back_3'];
            $skills_back_4 = $_POST['skills_back_4'];
            $skills_back_per_1 = $_POST['skills_back_per_1'];
            $skills_back_per_2 = $_POST['skills_back_per_2'];
            $skills_back_per_3 = $_POST['skills_back_per_3'];
            $skills_back_per_4 = $_POST['skills_back_per_4'];

            // qualificaiton edu
            $edu1 = $_POST['edu1'];
            $edu1_location = $_POST['edu1_location'];
            $edu1_period = $_POST['edu1_period'];
            $edu2 = $_POST['edu2'];
            $edu2_location = $_POST['edu2_location'];
            $edu2_period = $_POST['edu2_period'];
            $edu3 = $_POST['edu3'];
            $edu3_location = $_POST['edu3_location'];
            $edu3_period = $_POST['edu3_period'];
            $edu4 = $_POST['edu4'];
            $edu4_location = $_POST['edu4_location'];
            $edu4_period = $_POST['edu4_period'];

            // qualification work
            $work1 = $_POST['work1'];
            $work1_location = $_POST['work1_location'];
            $work1_period = $_POST['work1_period'];
            $work2 = $_POST['work2'];
            $work2_location = $_POST['work2_location'];
            $work2_period = $_POST['work2_period'];
            $work3 = $_POST['work3'];
            $work3_location = $_POST['work3_location'];
            $work3_period = $_POST['work3_period'];
            $work4 = $_POST['work4'];
            $work4_location = $_POST['work4_location'];
            $work4_period = $_POST['work4_period'];

            // services
            $services_front_1 = $_POST['services_front_1'];
            $services_front_2 = $_POST['services_front_2'];
            $services_front_3 = $_POST['services_front_3'];
            $services_front_4 = $_POST['services_front_4'];
            $services_back_1 = $_POST['services_back_1'];
            $services_back_2 = $_POST['services_back_2'];
            $services_back_3 = $_POST['services_back_3'];
            $services_back_4 = $_POST['services_back_4'];

            //contact
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $location = $_POST['location'];

            $check = "SELECT * FROM home WHERE user_id = '$user_id'";
            $check_result = mysql_query($check, $connect);
            $check_num = mysql_num_rows($check_result);

            if (!$check_num) {

                // home 정보 입력
                $insert_home = "INSERT INTO home (user_id, user_name, occupation, home_information, git, notion, instagram)
                                    VALUES ('$user_id', '$home_name', '$home_occupation', '$home_information', '$git', '$notion', '$instagram')";
                $insert_home_result = mysql_query($insert_home, $connect);

                // board 정보 입력
                $insert_board = "INSERT INTO board (board_id, board_name, board_occupation)
                                    VALUES ('$user_id', '$home_name', '$home_occupation')";
                $insert_board_result = mysql_query($insert_board, $connect);

                // about 정보 입력
                $insert_about = "INSERT INTO about (user_id, about_img, about_information, experience, project, worked)
                                    VALUES ('$user_id', '$resFile', '$about_information', '$experience', '$project', '$worked')";
                $insert_about_result = mysql_query($insert_about, $connect);

                // skills_frontend 정보 입력
                $insert_frontend = "INSERT INTO skills_frontend (user_id, skills_front_1, skills_front_2, skills_front_3, skills_front_4, 
                                        skills_front_per_1, skills_front_per_2, skills_front_per_3, skills_front_per_4)
                                    VALUES ('$user_id', '$skills_front_1', '$skills_front_2', '$skills_front_3', '$skills_front_4',
                                        '$skills_front_per_1', '$skills_front_per_2', '$skills_front_per_3', '$skills_front_per_4')";
                $insert_frontend_result = mysql_query($insert_frontend, $connect);

                // skills_backend 정보 입력
                $insert_backend = "INSERT INTO skills_backend (user_id, skills_back_1, skills_back_2, skills_back_3, skills_back_4, 
                                        skills_back_per_1, skills_back_per_2, skills_back_per_3, skills_back_per_4)
                                    VALUES ('$user_id', '$skills_back_1', '$skills_back_2', '$skills_back_3', '$skills_back_4',
                                        '$skills_back_per_1', '$skills_back_per_2', '$skills_back_per_3', '$skills_back_per_4')";
                $insert_backend_result = mysql_query($insert_backend, $connect);

                // qualification_edu 정보 입력
                $insert_qualification_edu = "INSERT INTO qualification_edu (user_id, edu1, edu1_location, edu1_period, edu2, edu2_location, edu2_period,
                                                edu3, edu3_location, edu3_period, edu4, edu4_location, edu4_period)
                                              VALUES ('$user_id', '$edu1', '$edu1_location', '$edu1_period', '$edu2', '$edu2_location', '$edu2_period',
                                                '$edu3', '$edu3_location', '$edu3_period', '$edu4', '$edu4_location', '$edu4_period')";
                $insert_qualification_edu_result = mysql_query($insert_qualification_edu, $connect);
                
                // qualification_work 정보 입력
                $insert_qualification_work = "INSERT INTO qualification_work (user_id, work1, work1_location, work1_period, work2, work2_location, work2_period,
                                                work3, work3_location, work3_period, work4, work4_location, work4_period)
                                              VALUES ('$user_id', '$work1', '$work1_location', '$work1_period', '$work2', '$work2_location', '$work2_period',
                                                '$work3', '$work3_location', '$work3_period', '$work4', '$work4_location', '$work4_period')";
                $insert_qualification_work_result = mysql_query($insert_qualification_work, $connect);


                //services 정보 입력
                $insert_services = "INSERT INTO services (user_id, services_front_1, services_front_2, services_front_3, services_front_4,
                                        services_back_1, services_back_2, services_back_3, services_back_4)
                                    VALUES ('$user_id', '$services_front_1', '$services_front_2', '$services_front_3', '$services_front_4',
                                        '$services_back_1', '$services_back_2', '$services_back_3', '$services_back_4')";
                $insert_services_result = mysql_query($insert_services, $connect);

                // contact 정보 입력
                $insert_contact = "INSERT INTO contact (user_id, phone, email, location)
                                        VALUES ('$user_id', '$phone', '$email', '$location')";
                $insert_contact_result = mysql_query($insert_contact, $connect);

                echo ("
                    <script>                            
                        window.alert('정보를 입력하였습니다.')
                        location.replace('main.php')
                    </script>
                    ");
        
            } else {

                // home 정보 수정
                $update_home = "UPDATE home SET user_id = '$user_id', user_name = '$home_name', occupation = '$home_occupation',
                                    home_information = '$home_information', git = '$git', notion = '$notion', instagram = '$instagram' WHERE user_id = '$user_id'";
                $update_home_result = mysql_query($update_home, $connect);

                // board 정보 수정
                $update_board = "UPDATE board SET board_id = '$user_id', board_name = '$home_name', board_occupation = '$home_occupation' WHERE board_id = '$user_id'";
                $update_board_result = mysql_query($update_board, $connect);

                // about 정보 수정
                $update_about = "UPDATE about SET user_id = '$user_id', about_img = '$resFile', about_information = '$about_information',
                                    experience = '$experience', project = '$project', worked = '$worked' WHERE user_id = '$user_id'";
                $update_about_result = mysql_query($update_about, $connect);
                

                // skills_frontend 정보 수정
                $update_skills_frontend = "UPDATE skills_frontend SET user_id = '$user_id', skills_front_1 = '$skills_front_1', skills_front_2 = '$skills_front_2', skills_front_3 = '$skills_front_3', skills_front_4 = '$skills_front_4',
                                                skills_front_per_1 = '$skills_front_per_1', skills_front_per_2= '$skills_front_per_2',  skills_front_per_3 = '$skills_front_per_3', skills_front_per_4 = '$skills_front_per_4' WHERE user_id = '$user_id'";
                $update_skills_frontend_result = mysql_query($update_skills_frontend, $connect);


                // skills_backend 정보 수정
                $update_skills_backend = "UPDATE skills_backend SET user_id = '$user_id', skills_back_1 = '$skills_back_1', skills_back_2 = '$skills_back_2', skills_back_3 = '$skills_back_3', skills_back_4 = '$skills_back_4',
                                                skills_back_per_1 = '$skills_back_per_1', skills_back_per_2= '$skills_back_per_2',  skills_back_per_3 = '$skills_back_per_3', skills_back_per_4 = '$skills_back_per_4' WHERE user_id = '$user_id'";
                $update_skills_backend_result = mysql_query($update_skills_backend, $connect);


                // qualification_edu 정보 수정
                $update_qualification_edu = "UPDATE qualification_edu SET user_id = '$user_id', edu1 = '$edu1', edu1_location = '$edu1_location', edu1_period = '$edu1_period', 
                                                edu2 = '$edu2', edu2_location = '$edu2_location', edu2_period = '$edu2_period', edu3 = '$edu3', edu3_location = '$edu3_location', edu3_period = '$edu3_period',
                                                edu4 = '$edu4', edu4_location = '$edu4_location', edu4_period = '$edu4_period' WHERE user_id = '$user_id'";
                $update_qualification_edu_result = mysql_query($update_qualification_edu, $connect);


                // qualification_work 정보 수정
                $update_qualification_work = "UPDATE qualification_work SET user_id = '$user_id', work1 = '$edu1', work1_location = '$work1_location', work1_period = '$work1_period', 
                                                work2 = '$work2', work2_location = '$work2_location', work2_period = '$work2_period', work3 = '$work3', work3_location = '$work3_location', work3_period = '$work3_period',
                                                work4 = '$work4', work4_location = '$work4_location', work4_period = '$work4_period' WHERE user_id = '$user_id'";
                $update_qualification_work_result = mysql_query($update_qualification_work, $connect);


                // services 정보 수정
                $update_services = "UPDATE services SET user_id = '$user_id', services_front_1 = '$services_front_1', services_front_2 = '$services_front_2', services_front_3 = '$services_front_3', services_front_4 = '$services_front_4',
                                        services_back_1 = '$services_back_1', services_back_2 = '$services_back_2', services_back_3 = '$services_back_3', services_back_4 = '$services_back_4' WHERE user_id = '$user_id'";
                $update_services_result = mysql_query($update_services, $connect);


                // contact 정보 수정
                $update_contact = "UPDATE contact SET user_id = '$user_id', phone = '$phone', email = '$email', location = '$location' WHERE user_id = '$user_id'";
                $update_contact_result = mysql_query($update_contact, $connect);


                echo ("
                    <script>                            
                        window.alert('정보를 수정하였습니다.')
                        location.replace('main.php')
                    </script>
                    ");
            }

            mysql_close();
        ?>

