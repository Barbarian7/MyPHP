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
        <title>網頁10秒後將轉移至google</title>
    </head>
    <body>
        <?php
        header('refresh:10; url="http://www.google.com"');
        echo "+10秒後連結google";
        ?>
    </body>
</html>
