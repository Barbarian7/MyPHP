<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 7 新增飛航運算子</title>
    </head>
    <body>
        <?php
        echo "1<=>1 會如何：>";
        echo (1 <=> 1)."<br>";
        echo "1<=>2 會如何：";
        echo (1 <=> 2)."<br>";
        echo "2<=>1 會如何：>";
        echo (2 <=> 1)."<hr>";
        echo "1.5<=>1.5 會如何：";
        echo (1.5 <=> 1.5)."<br>";
        echo "1.5<=>2.5 會如何：>";
        echo (1.5 <=> 2.5)."<br>";
        echo "2.5<=>1.5 會如何：";
        echo (2.5 <=> 1.5)."<hr>";
        echo "a<=>a 會如何：>";
        echo ('a' <=> 'a')."<br>";
        echo "a<=>b 會如何：";
        echo ('a' <=> 'b')."<br>";
        echo "b<=>a 會如何：";
        echo ('b' <=> 'a')."<br>";
        ?>
    </body>
</html>
