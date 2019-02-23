<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>時分秒表示方式</title>
    </head>
    <body>
        <?php
        $dateTime = new DateTime("now", new DateTimeZone('Asia/Taipei'));
        echo $dateTime ->format("g:i:s a")."<br>";
        echo $dateTime->format("h:i:s A")."<br>";
        echo $dateTime->format("G:i:s")."<br>";
        echo $dateTime->format("H:i:s")."<br>";
        echo $dateTime->format("T")."<br>";
        ?>
    </body>
</html>
