<?php
    session_start();
    include "dbconn.php";   // db 연결

    $id = $_POST['portfolio_id'];
    $contactme_user_id = $_POST['contactme_id'];
    $contactme_name = $_POST['contactme_name'];
    $contactme_email = $_POST['contactme_email'];
    $contactme_title = $_POST['contactme_title'];
    $contactme_message = $_POST['contactme_message'];

    $insert_contactme = "INSERT INTO contactme (user_id, contactme_user_id, contactme_name, contactme_email, contactme_title, contactme_message)
                            VALUES ('$id', '$contactme_user_id', '$contactme_name', '$contactme_email', '$contactme_title', '$contactme_message')";
    $insert_contactme_result = mysql_query($insert_contactme, $connect);

    echo "
        <script>
            window.alert('메세지 전송에 성공하였습니다.')
            location.replace('board.php');
        </script>
    ";

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