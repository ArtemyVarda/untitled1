<head>
    <title>Regist</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="regist_body">
    <form action="../php/regist.php" class="regist" action="" method="post">
        <h2>Регистрация</h2>
        <label for="LL">Логин</label> <br>
        <input id="LL" type="text"  name="login" required><br>
        <label for="PP">Пароль</label><br>
        <input id="PP" type="text"  name="password" required><br>
        <label for="repite"> Повторите Пароль</label><br>
        <input id="repite" type="text"  name="rep_pass"required><br>
        <label for="User_name">Имя</label><br>
        <input id="User_name" type="text"  name="User_name"required><br>
        <input type="submit" value="Создать акк">
        <a href="./login.php">Авторизация</a>
        <a href="../index.php">На главную</a>
    </form>
</body>
