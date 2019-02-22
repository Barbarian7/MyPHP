<?php ob_start();?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>設定特定時間的Cookie</title>
    </head>
    <body>
        <?php
        $dateTime = new DateTime("now", new DateTimeZone('Asia/Taipei'));
        echo "現在日期：".$dateTime->format('Y-m-d')."<br>";
        $dateTime->setDate(2019, 02, 12);
        $dateTime->setTime(10, 11, 12);
        echo "cookie到期日為2019年02月20日";
        $today=$dateTime->format('Y-m-d h:i:s');
        setcookie("a","php", strtotime($today));
        ?>
        <div><a href="cookie3a.php">view the result</a></div>
    </body>
</html>
