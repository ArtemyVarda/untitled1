<?php
$user_name=$_POST["User_name"];
$login=$_POST["login"];
$password=$_POST["password"];
$rep_pass=$_POST["rep_pass"];
if($password!=$rep_pass){
    echo "Парроли не совподают";
}
else echo "Все хорошо";
