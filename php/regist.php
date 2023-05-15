<?php
$user_name=$_POST["User_name"];
$login=$_POST["login"];
$password=$_POST["password"];
$rep_pass=$_POST["rep_pass"];
if($password!=$rep_pass){
    echo "Парроли не совподают";
}
else  {
    $file=file_get_contents("../db.json");
    $data_fromfile=json_decode($file);
    if(!empty($data_fromfile)){
        foreach ($data_fromfile as $user){
            if($user ->username ==$login){
                $_SESSION['error'] ="пользователь не сушествует";
                header('Location:../pages/regist/php');
            }
        }
    }
    else{
        $password=password_hash($password,PASSWORD_DEFAULT);
        $user=[
            "username"=>$user_name,
            'login'=>$login,
            'password'=>$password
        ];
        $data_fromfile[]=$user;
        $json=json_encode($data_fromfile);
        file_put_contents("../db.json", $json);
    }
}


