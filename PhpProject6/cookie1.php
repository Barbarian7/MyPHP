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
        <title>Save Cookie</title>
    </head>
    <body>
        <?php
        setcookie ("a", "php", time()+1800);//1800 seconds
        if (isset($_SERVER['HTTP_REFERER']))
            echo "pre-page is".$_SERVER['HTTP_REFERER']."<br>";
        else
            echo "no pre-page data"."<br>";
        // put your code here
        ?><a href="cookie2.php">view the result</a>
    </body>
</html>
