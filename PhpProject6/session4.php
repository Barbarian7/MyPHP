<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>session變數接收</title>
    </head>
    <body>
        <?php
        if (isset($_SESSION['dbserver']))
            echo '變數傳遞成功'."<br>";
        else
            echo '變數傳遞失敗'.'<br>';
        // put your code here
        ?>
    </body>
</html>
