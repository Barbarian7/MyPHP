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
        <title>Show Cookie</title>
    </head>
    <body>
        <?php
        if (isset($_COOKIE["a"]))
            echo "cookie content ".$_COOKIE["a"]."<br>";
        else
            echo "no data <br>";
        if (isset($_SERVER['HTTP_REFERER']))
            echo "pre-page is ".$_SERVER['HTTP_REFERER']."<br>";
        else
            echo "no pre-page data";
        // put your code here
        ?>
        <div><a href="cookie3.php">set fixed time</a><br></div>
    </body>
</html>
