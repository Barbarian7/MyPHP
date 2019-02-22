<?php ob_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>網頁每隔20秒向server讀取資料</title>
    </head>
    <body>
        <?php
        header("refresh:20");
        $dateTime = new DateTime("now", new DateTimeZone('Asia/Taipei'));
        echo "現在時間：".$dateTime->format("h:i:s");
        ?>
    </body>
</html>
