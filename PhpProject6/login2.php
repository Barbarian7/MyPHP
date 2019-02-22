<?php ob_start();
 //session_start(); 
 session_start([
    'cache_limiter' => 'private',
    'read_and_close' => true,
 ]);?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>seesion與表單紀錄:2</title>
    </head>
    <body>
        <?php
        $login1 = $_POST['login1'] ?? $_POST['login1'] ?? 'no login1';
        $_SESSION['login1']=$login1;
        ?>
        <form action="login3.php" method="post">請輸入帳號2
            <input type="text" size="10" name="login2">
            <input type="reset"><input type="submit">
        </form>
    </body>
</html>
