<?php
    session_start();
    $email=filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $pass=filter_var(trim($_POST['pass']), FILTER_SANITIZE_SPECIAL_CHARS);

    $pass=md5($pass."kdvgf73cvut5");


    $dbhost="localhost";
    $dbname="red1";
    $username="root";
    $password="";
    $mysql=new mysqli($dbhost, $username, $password, $dbname);
    $result=$mysql->query("SELECT `email`, `name`, `id_role` FROM `user` WHERE `email`='$email' AND `pass`='$pass'");
    $user=$result->fetch_assoc();
    if(count($user)==0){
        echo "такой пользователь не найден";
        exit();
    }
    $mysql->close();
    // setcookie('user', $user['email'], time()+60*60,"/");
    
    $_SESSION['user']=['email'=>$user['email'], 'name'=>$user['name'], 'id_role'=>$user['id_role'],];
    header('Location: ./index.php');
?>