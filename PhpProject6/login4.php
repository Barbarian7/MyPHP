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
        <title>轉址後的資料</title>
    </head>
    <body>
        <?php
        echo "您剛剛輸入login1:".$_SESSION['login1']."<br>";
        echo "您剛剛輸入login2:".$_SESSION['login2']."<br>";
        echo "再請試試看切囘表單網頁吧?";
        ?>
    </body>
</html>
