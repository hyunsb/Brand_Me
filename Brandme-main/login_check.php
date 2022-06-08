<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF8">
</head>
</html>

<?php
            session_start();
            include "dbconn.php";   // db 연결

            $id = $_POST['id'];
            $pw = $_POST['pw'];

            $sql = "SELECT * FROM userinfo WHERE user_id = '$id'";
            $result = mysql_query($sql, $connect);
            $num_match = mysql_num_rows($result);

            if(!$num_match) 
            {
                echo("
                    <script>
                        window.alert('등록되지 않은 ID 입니다.')
                        history.go(-1)
                    </script>
                    ");
                }
            else {
                $row = mysql_fetch_array($result);

                $db_pass = $row['user_pw'];

                if($pw != $db_pass) {
                    echo("
                        <script>
                            window.alert('비밀번호가 틀립니다.')
                            history.go(-1)
                        </script>
                    ");

                    exit;
                } else {

                    $user_id = $row['user_id'];
                    $user_name = $row['user_name'];

                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['user_name'] = $user_name;
                
                    echo "
                        <script>
                            location.replace('home.php');
                        </script>
                    ";
                }
            }
   
            mysql_close();
        ?>