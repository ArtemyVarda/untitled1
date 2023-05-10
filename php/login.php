<?php
session_start();
$login=$_POST["login"];
$password=$_POST["password"];
if(!empty($login)){
    if(!empty($password)){
        header("Location: ../index.php");
        $_SESSION["messadge"]="Добро пожаловать.Купите батон пожалуйста!";
    }
    else{ $_SESSION["errorr"]= "Поле парроль пустое!!!!!";
        header("Location: ../pages/login.php");}
}
else{
    $_SESSION["errorr"]= "Поле логин пустое";
    header("Location: ../pages/login.php");
}
?>
