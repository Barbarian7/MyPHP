<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>session id取消之後？</title>
    </head>
    <body>
        <?php
        $_SESSION['dbserver']='mysql';
        if (isset($_SESSION['dbserver'])) echo '變數存在'."<br>";
        else echo '變數不存在'."<br>";
        session_destroy();
        echo 'sessiond id銷毀之後'."<br>";
        if (isset($_SESSION['dbserver'])) echo '變數存在'."<br>";
        else echo '變數不存在'."<br>";
        echo '<a href="session4.php">變數傳遞接收網頁</a><br>';

        ?>
    </body>
</html>
