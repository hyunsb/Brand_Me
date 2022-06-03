<?php
            session_start();
            include "dbconn.php";   // db 연결

            mysql_query($conn, "set session character_set_connection=utf8;");
            mysql_query($conn, "set session character_set_results=utf8;");
            mysql_query($conn, "set session character_set_client=utf8;");

            $user_id = $_SESSION['user_id'];
            echo "
                user_id: {$user_id} <br>
            ";

            // home
            $home_name = $_POST['user_name'];
            $home_occupation = $_POST['occupation'];
            $home_information = $_POST['home_information'];
            $git = $_POST['git'];
            $notion = $_POST['notion'];
            $instagram = $_POST['instagram'];

            echo "
                name: $home_name <br>
                occu: $home_occupation <br>
                home_info: $home_information <br>
                git: $git <br>
                notion: $notion <br>
                insta: $instagram <br>
            ";

            //about 부분 추가해야함.
            $about_information = $_POST['about_information'];

            echo "
                about_info: $about_information <br>
            ";

            //skills frontend
            $skills_front_1 = $_POST['skills_front_1'];
            $skills_front_2 = $_POST['skills_front_2'];
            $skills_front_3 = $_POST['skills_front_3'];
            $skills_front_4 = $_POST['skills_front_4'];
            $skills_front_per_1 = $_POST['skills_front_per_1'];
            $skills_front_per_2 = $_POST['skills_front_per_2'];
            $skills_front_per_3 = $_POST['skills_front_per_3'];
            $skills_front_per_4 = $_POST['skills_front_per_4'];

            echo "
                skills_front: $skills_front_1, $skills_front_2, $skills_front_3, $skills_front_4 <br>
                skills_front_per: $skills_front_per_1, $skills_front_per_2, $skills_front_per_3, $skills_front_per_4 <br>
            ";

            //skills backend
            $skills_back_1 = $_POST['skills_back_1'];
            $skills_back_2 = $_POST['skills_back_2'];
            $skills_back_3 = $_POST['skills_back_3'];
            $skills_back_4 = $_POST['skills_back_4'];
            $skills_back_per_1 = $_POST['skills_back_per_1'];
            $skills_back_per_2 = $_POST['skills_back_per_2'];
            $skills_back_per_3 = $_POST['skills_back_per_3'];
            $skills_back_per_4 = $_POST['skills_back_per_4'];

            echo "
                skills_back: $skills_back_1, $skills_back_2, $skills_back_3, $skills_back_4 <br>
                skills_back_per: $skills_back_per_1, $skills_back_per_2, $skills_back_per_3, $skills_back_per_4 <br>
            ";

            //contact
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $location = $_POST['location'];

            echo "
                phone: $phone <br>
                email: $email <br>
                location: $location <br>
            ";


            // $sql = "SELECT * FROM userinfo WHERE user_id = '$id'";
            // $result = mysql_query($sql, $connect);
            // $num_match = mysql_num_rows($result);

            
            

            
            // echo ("
            //     <script>                            
            //         window.alert('회원가입이 성공하였습니다.')
            //         location.replace('main.php')
            //     </script>
            //     ");
            
   
            mysql_close();
        ?>