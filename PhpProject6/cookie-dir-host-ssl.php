<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_COOKIE["dir"]))
            echo "cookie於資料夾設定成功，内容為 ".$_COOKIE["dir"]."<br>";
        else 
            echo "cookie於資料夾設定失敗"."<br>";
        if (isset($_COOKIE["host"]))
            echo "cookie於網路連綫設定成功 ".$_COOKIE["host"]."<br>";
        else 
            echo "cookie於網路連綫設定失敗"."<br>";
        if (isset($_COOKIE["ssl"]))
            echo "cookie於安全連綫設定成功 ".$_COOKIE["ssl"]."<br>";
        else 
            echo "cookie於安全連綫設定失敗"."<br>";
        ?>
    </body>
</html>
