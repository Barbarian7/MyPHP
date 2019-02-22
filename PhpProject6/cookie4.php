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
        <title>設定一段時間的Cookie</title>
    </head>
    <body>
        <?php
        $dateTime = new DateTime("now", new DateTimeZone('Asia/Taipei'));
        echo "現在日期： ".$dateTime->format('Y-m-d h:i:s')."<br>";
        $dateTime->modify('+1 day');
        $tomorrow=$dateTime->format('Y-m-d h:i:s');
        echo "到期日期為： ".$tomorrow."<br>";
        setcookie("b","明天到期", strtotime($tomorrow));
        ?>
    </body>
    <div><a href="cookie4a.php">觀看結果</a></div>
</html>
