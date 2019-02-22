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
        <title>設定目錄與網域、安全連綫的Cookie</title>
    </head>
    <body>
        <?php
        setcookie ("dir", "PhpProject6資料夾内", time()+1800,"/PhpProject6/");
        setcookie ("host", "由hinet連綫", time()+1800,"",".hinet");
        setcookie ("ssl", "安全連綫", time()+1800,"","","1");
        ?>
        <div><a href="cookie-dir-host-ssl.php">觀看結果</a></div>
    </body>
</html>
