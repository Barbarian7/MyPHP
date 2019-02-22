<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>變數：算術計算</title>
    </head>
    <body><div>
        <?php
        $a = 30;
        $b = 4;
        $c = 5;
        echo $a+$b."<br>";
        echo $a-$b."<br>";
        echo $a*$b."<br>";
        echo $a/$b."<br>";
        $value = intdiv($a,$b);
        echo $value."<br>";
        echo $c%$a."<br>";
        ?></div>
    </body>
</html>
