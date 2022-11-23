<?php
    session_start();
    include "dbconn.php";   // db 연결

    $id = $_SESSION['user_id'];

    $delete_about = "DELETE FROM about WHERE user_id = '$id'";
    $delete_about_result = mysql_query($delete_about, $connect);

    $delete_board = "DELETE FROM board WHERE board_id = '$id'";
    $delete_board_result = mysql_query($delete_board, $connect);

    $delete_contact = "DELETE FROM contact WHERE user_id = '$id'";
    $delete_contact_result = mysql_query($delete_contact, $connect);

    $delete_contactme = "DELETE FROM contactme WHERE user_id = '$id'";
    $delete_contactme_result = mysql_query($delete_contactme, $connect);

    $delete_home = "DELETE FROM home WHERE user_id = '$id'";
    $delete_home_result = mysql_query($delete_home, $connect);

    $delete_qualification_edu = "DELETE FROM qualification_edu WHERE user_id = '$id'";
    $delete_qualification_edu_result = mysql_query($delete_qualification_edu, $connect);

    $delete_qualification_work = "DELETE FROM qualification_work WHERE user_id = '$id'";
    $delete_qualification_work_result = mysql_query($delete_qualification_work, $connect);

    $delete_services = "DELETE FROM services WHERE user_id = '$id'";
    $delete_services_result = mysql_query($delete_services, $connect);

    $delete_skills_frontend = "DELETE FROM skills_frontend WHERE user_id = '$id'";
    $delete_skills_frontend_result = mysql_query($delete_skills_frontend, $connect);

    $delete_skills_backend = "DELETE FROM skills_backend WHERE user_id = '$id'";
    $delete_skills_backend_result = mysql_query($delete_skills_backend, $connect);

    $delete_userinfo = "DELETE FROM userinfo WHERE user_id = '$id'";
    $delete_userinfo_result = mysql_query($delete_userinfo, $connect);

    echo ("
        <script>                            
            window.alert('회원탈퇴 완료')
            location.replace('logout.php');
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