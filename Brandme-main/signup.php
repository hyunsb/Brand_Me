<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="./css/loginstyle.css">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Sign Up</title>
</head>
<body>
    <?php   
            // include "dbconn.php";

            // $id = $_POST['user_id'];
            // $pw = $_POST['user_pw'];
            // $name = $_POST['user_name'];

            // $sql = "INSERT INTO userinfo ( user_id, user_pw, user_name ) VALUES ( '$id', '$pw', '$name' )";

            // $result = mysql_query($sql, $connect);

            // mysql_close();
    ?>

    <div class="login-form">
        <div class="logo">
            <h1>Sign Up</h1>
        </div>
        <form method="post" action="signup_check.php">

            <div class="int-area">
                <input type="text" name="user_id" id="id" autocomplete="off" required>
                <label for="id"><i class="uil uil-user"></i> USER ID</label>
            </div>

            <div class="int-area">
                <input type="password" name="user_pw" id="pw" autocomplete="off" required>
                <label for="pw"><i class="uil uil-lock"></i> PASSWORD</label>
            </div>
            <div class="int-area">
                <input type="text" name="user_name" id="name" autocomplete="off" required>
                <label for="pw"><i class="uil uil-postcard"></i> NAME</label>
            </div>
            <div class="btn-area">
                <button type="submit" >Create Account</button>
            </div>

            <!-- <div class="btn-area">
                <button type="button" onclick="location.href='main.html'">MAIN</button>
            </div> -->

        </form>

        <div class="caption">
            <div class="caption_items">
                <a href="Login.php"><i class="uil uil-angle-left-b"></i>Back</a>
            </div>
        </div>

    </div>


    <script>
        let id = $('#id');
        let pw = $('#pw');
        let btn = $('#btn');

        $(btn).on('click', function() {
            if($(id).val() == "") {
                $(id).next('label').addClass('warning');
            }
            else if($(pw).val() == "") {
                $(pw).next('label').addClass('warning');
            }
        });
    </script>

    
</body>
</html>