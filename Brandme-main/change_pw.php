<?php
    session_start();
    include "dbconn.php";   // db 연결

    $id = $_SESSION['user_id'];

    $sql = "UPDATE userinfo SET user_pw = '$pw' WHERE user_id = '$id'";
    $result = mysql_query($sql, $connect);
    $num_match = mysql_num_rows($result);

    echo ("
        <script>                            
            window.alert('비밀번호를 변경하였습니다.')
            history.go(-1)
        </script>
    ");
            
    mysql_close();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF8">
</head>
<body>
</body>
</html>