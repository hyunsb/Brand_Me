<?php
    session_start();
    include "dbconn.php";

    $home_select = "SELECT * FROM home WHERE user_id = '$user_id'";
    $home_result = mysql_query($home_select, $connect);
    $home = mysql_num_rows($home_result);

    if (!isset($_SESSION['user_id'])) {

        // 로그인이 되어있지 않을 시 뒤로 페이지로 이동.
        echo "
            <script>
                window.alert('로그인 후 이용해 주세요.')
                history.go(-1)
            </script>
            ";
    } else {

        if (!$home) {

            // 로그인이 되어 있고 첫 방문이라면 firstcon 페이지로 이동.
            echo "
                <script>
                    location.replace('firstcon.html');
                </script>
            ";
        } else {

            // 로그인이 되어 있고 첫 방문이 아니면 main 페이지로 이동.
            echo "
                <script>
                    location.replace('main.php');
                </script>
            ";
        }

        
    }


?>