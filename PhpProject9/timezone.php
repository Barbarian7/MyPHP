<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>網頁内可設定不同的時區時間顯示</title>
    </head>
    <body>
        <?php
        $dateTime1 = new DateTime("now", new DateTimeZone('Asia/Tokyo'));
        echo "日本時間"."<br>";
        echo $dateTime1->format("H:i:s")."<br>";
        echo $dateTime1->format("T")."<hr>";
        $dateTime2 = new DateTime("now", new DateTimeZone('Asia/Taipei'));
        echo "台灣時間"."<br>";
        echo $dateTime2->format("H:i:s")."<br>";
        echo $dateTime2->format("T")."<br>";
        ?>
    </body>
</html>
