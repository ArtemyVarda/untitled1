<?php
session_start();

?>
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <a href="../index.php">переход на главную</a>
        <img class="profile_img" src="" alt="">
        <h2><?php
            echo $_SESSION['user']['name']?></h2>
        <span><?php echo $_SESSION['user']['login']?></span>
    </body>
</html>