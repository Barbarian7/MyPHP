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
        <title>session變數</title>
    </head>
    <body>
        <?php
        $dateTime = new DateTime("now", new DateTimeZone('Asia/Taipei'));
        echo "第一個網頁"."<br>";
        $_SESSION['server'] = 'apache';
        $_SESSION['dbserver'] = 'mysql';
        $_SESSION['time'] = $dateTime->format("Y年m月d日H時i分s秒");
        $a=123;
        echo '<a href="session2.php">第二頁</a><br>';
        ?>
    </body>
</html>
