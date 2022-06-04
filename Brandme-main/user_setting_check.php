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

            //about 부분 추가해야함.
            $about_information = $_POST['about_information'];

            //skills frontend
            $skills_front_1 = $_POST['skills_front_1'];
            $skills_front_2 = $_POST['skills_front_2'];
            $skills_front_3 = $_POST['skills_front_3'];
            $skills_front_4 = $_POST['skills_front_4'];
            $skills_front_per_1 = $_POST['skills_front_per_1'];
            $skills_front_per_2 = $_POST['skills_front_per_2'];
            $skills_front_per_3 = $_POST['skills_front_per_3'];
            $skills_front_per_4 = $_POST['skills_front_per_4'];

            //skills backend
            $skills_back_1 = $_POST['skills_back_1'];
            $skills_back_2 = $_POST['skills_back_2'];
            $skills_back_3 = $_POST['skills_back_3'];
            $skills_back_4 = $_POST['skills_back_4'];
            $skills_back_per_1 = $_POST['skills_back_per_1'];
            $skills_back_per_2 = $_POST['skills_back_per_2'];
            $skills_back_per_3 = $_POST['skills_back_per_3'];
            $skills_back_per_4 = $_POST['skills_back_per_4'];

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

                // about 정보 입력
                $insert_about = "INSERT INTO about (user_id, about_img, about_information, experience, project, worked)
                                    VALUES ('$user_id', '$about_img', '$about_information', '$experience', '$project', '$worked')";
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

                // about 정보 수정
                $update_about = "UPDATE about SET user_id = '$user_id', about_img = '$about_img', about_information = '$about_information',
                                    experience = '$experience', project = '$project', worked = '$worked'";
                $update_about_result = mysql_query($update_about, $connect);
                

                // skills_frontend 정보 수정
                $update_skills_frontend = "UPDATE skills_frontend SET user_id = '$user_id', skills_front_1 = '$skills_front_1', skills_front_2 = '$skills_front_2', skills_front_3 = '$skills_front_3', skills_front_4 = '$skills_front_4',
                                                skills_front_per_1 = '$skills_front_per_1', skills_front_per_2= '$skills_front_per_2',  skills_front_per_3 = '$skills_front_per_3', skills_front_per_4 = '$skills_front_per_4'";
                $update_skills_frontend_result = mysql_query($update_skills_frontend, $connect);

                // skills_backend 정보 수정
                $update_skills_backend = "UPDATE skills_backend SET user_id = '$user_id', skills_back_1 = '$skills_back_1', skills_back_2 = '$skills_back_2', skills_back_3 = '$skills_back_3', skills_back_4 = '$skills_back_4',
                                                skills_back_per_1 = '$skills_back_per_1', skills_back_per_2= '$skills_back_per_2',  skills_back_per_3 = '$skills_back_per_3', skills_back_per_4 = '$skills_back_per_4'";
                $update_skills_backend_result = mysql_query($update_skills_backend, $connect);

                // services 정보 수정
                $update_services = "UPDATE services SET user_id = '$user_id', services_front_1 = '$services_front_1', services_front_2 = '$services_front_2', services_front_3 = '$services_front_3', services_front_4 = '$services_front_4',
                                        services_back_1 = '$services_back_1', services_back_2 = '$services_back_2', services_back_3 = '$services_back_3', services_back_4 = '$services_back_4'";
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