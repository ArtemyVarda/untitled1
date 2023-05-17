<?php
session_start();
$login = $_POST["login"];
$password = $_POST["password"];
if (!empty($login)) {
    if (!empty($password)) {
        $file = file_get_contents("../db.json");
        $data_fromfile = json_decode($file);
        if (!empty($data_fromfile)) {
            foreach ($data_fromfile as $user) {
                if ($user->login == $login) {
                    if (password_verify($password, $user->password)) {
                        $_SESSION['user'] = [
                            'name' => $user->username,
                            "login" => $user->login
                        ];
                        header("Location: ../pages/profile.php");
                        $_SESSION["messadge"] = "Добро пожаловать";
                    } else {
                        header("Location: ../pages/login.php");
                        $_SESSION["errorr"] = "не правельный пароль";
                    }
                } else {
                    header("Location: ../pages/login.php");
                    $_SESSION["errorr"] = "такого пользователя не сушествует";
                }
            }
        }
    } else {
        $_SESSION["errorr"] = "Поле парроль пустое!!!!!";
        header("Location: ../pages/login.php");
    }
} else {
    $_SESSION["errorr"] = "Поле логин пустое";
    header("Location: ../pages/login.php");
}
