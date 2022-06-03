<?php
            session_start();
            include "dbconn.php";   // db 연결

            $id = $_POST['user_id'];
            $pw = $_POST['user_pw'];
            $name = $_POST['user_name'];

            $sql = "SELECT * FROM userinfo WHERE user_id = '$id'";
            $result = mysql_query($sql, $connect);
            $num_match = mysql_num_rows($result);

            if($num_match) 
            {
                echo("
                    <script>
                        window.alert('이미 존재하는 ID 입니다.')
                        history.go(-1)
                    </script>
                    ");
                }
            else {
                $sql = "INSERT INTO userinfo ( user_id, user_pw, user_name ) VALUES ( '$id', '$pw', '$name' )";

                $result = mysql_query($sql, $connect);

                mysql_close();
                
                echo ("
                    <script>                            
                        window.alert('회원가입이 성공하였습니다.')
                        location.replace('login.php')
                    </script>
                    ");
            }
   
            mysql_close();
        ?>