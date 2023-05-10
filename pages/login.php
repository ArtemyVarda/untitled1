<?php
session_start()
?>
<head>
    <title>Авт</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="login_body">
    <form action="../php/login.php" class="login"  method="post">
        <h2>Авторизация</h2>
        <span class="errorr"><?php echo $_SESSION['errorr']; unset($_SESSION["errorr"])?></span>
        <label for="LL">Логин</label> <br>
        <input id="LL" type="text"  name="login"><br>
        <label for="PP">Пароль</label><br>
        <input id="PP" type="text"  name="password"><br>
        <input type="submit" value="Баттон">
        <a href="./regist.php">Ругистрация</a>
        <a href="../index.php">На главную</a>
    </form>
</body>
<?php

?>
