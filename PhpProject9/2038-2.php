<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>2040-2</title>
    </head>
    <body>
        <?php
        $dateTime = new DateTime("now", new DateTimeZone('Asia/Taipei'));
        $dateTime->setDate(2040,07,20);
        $dateTime->setTime(13,06,50);
        echo $dateTime->format('Y-m-d H:i:s');
        ?>
    </body>
</html>
