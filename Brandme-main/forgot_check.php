<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF8">
</head>
</html>

<?php
    session_start();
    include "dbconn.php";   // db 연결

    $id = $_POST['user_id'];
    $name = $_POST['user_name'];

    $sql = "SELECT user_pw FROM userinfo WHERE user_id = '$id' AND user_name = '$name'";
    $result = mysql_query($sql, $connect);
    $num_match = mysql_num_rows($result);
        

    if(!$num_match) {
        echo("
            <script>
                window.alert('일치하는 PASSWORD가 없습니다.')
                history.go(-1)
            </script>
            ");
    } else {
        $row = mysql_fetch_array($result);

        echo ("
            <script>                            
                window.alert('당신의 PASSWORD는 \"{$row['user_pw']}\"입니다.')
                history.go(-1)
            </script>
        ");
    }
    
    mysql_close();
?>

