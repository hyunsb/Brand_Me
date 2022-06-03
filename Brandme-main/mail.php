<?php
            session_start();
            include "dbconn.php";   // db 연결

            $name = $_POST['mail_name'];
            $email = $_POST['mail_email'];
            $title = $_POST['mail_title'];
            $message = $_POST['mail_message'];

            $headers = "From: $email\r\n"; 

            echo "
                name: $name <br>
                email: $email <br>
                title: $title <br>
                message: $message <br>
                $headers
            ";

            mail("caker97@nate.com", $title, $message, $headers);

            
   
            mysql_close();
        ?>