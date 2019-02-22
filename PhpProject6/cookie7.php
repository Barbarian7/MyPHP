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
        <title>Cookies設定綜合練習</title>
    </head>
    <body>
        <?php
        $dateTime = new DateTime("now", new DateTimeZone('Asia/Taipei'));
        $dateTime->modify('+1 day');
        $tomorrow=$dateTime->format('Y-m-d h:i:s');
        $dateTime->setDate(2019, 10, 12);
        $dateTime->setTime(14, 10, 10);
        $testtime=$dateTime->format('Y-m-d h:i:s');
        setcookie("a[0]","1，設定保存1800秒", time()+1800);
        setcookie("a[1]","2，設定保存至2019年10月12日", strtotime($testtime));
        setcookie("a[2]","3，設定保存至明天", strtotime($tomorrow));
        echo '<a href="cookie8.php">查詢Cookie</a>';                
        ?>
    </body>
</html>
