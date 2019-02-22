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
        <title>session變數接收</title>
    </head>
    <body>
        <?php
        echo "第二個網頁"."<br>";
        $dateTime = new DateTime("now", new DateTimeZone('Asia/Taipei'));
        echo "server:".$_SESSION['server']."<br>";
        echo "dbserver:".$_SESSION['dbserver']."<br>";
        echo "現在時間:".$dateTime->format("Y年m月d日H時i分s秒")."<br>";
        echo "session傳遞時間:".$_SESSION['time']."<br>";
        echo $a;
        echo '<a href="session1.php">第一頁</a><br>';
        ?>
    </body>
</html>
