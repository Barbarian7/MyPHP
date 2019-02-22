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
        <title>變數的内容由變數取得資料</title>
    </head>
    <body>
        <?php
        $yourname="野蠻人";
        setcookie("a","$yourname",time()+1800);
        ?>
        <div><a href="cookie2.php">觀看結果</a></div>
    </body>
</html>
