<?php ob_start();
//session_start();
   session_start([
       'cache_limiter' => 'private',
       'read_and_close' => true,
 ]); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>接收後轉址</title>
    </head>
    <body>
        <?php
        $login2 = $_POST['login2'] ?? $_POST['login2'] ?? 'no login2';
        $_SESSION['login2']=$login2;
        header("Location:login4.php");
        ?>
    </body>
</html>
