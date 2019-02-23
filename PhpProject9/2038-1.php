<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>傳統日期時間處理</title>
    </head>
    <body>
        <?php
        ini_set('date.timezone','Asia/Taipei');
        $date = '2040-07-20';
        $format = "Y年m月d日 H時i分";
        $mydate1 = strtotime($date);
        echo date($format, $mydate1);
        ?>
    </body>
</html>
