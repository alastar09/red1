<?php session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    
    <title>Главная</title>
</head>
<body>
    <?php require "blocks/header.php" ?>
    <?php 
    // if(!isset($_COOKIE['user'])):
        if(isset($_SESSION['user']) && $_SESSION['user']['id_role']==1):
    ?>
        <h1>111</h1>
        <a href="logout.php" >Выход</a>
    <?php     
        elseif(isset($_SESSION['user']) && $_SESSION['user']['id_role']==2):
    ?>
        <h1>222</h1>
        <a href="logout.php" >Выход</a>
    <?php     
        elseif(isset($_SESSION['user']) && $_SESSION['user']['id_role']==3):
    ?>
        <h1>333</h1>
        <a href="logout.php" >Выход</a>
    <?php else:?>        
        
        <?php require "blocks/reg_auth.php" ?>
    <?php endif;?>

    <?php require "blocks/footer.php" ?>
</body>
</html>