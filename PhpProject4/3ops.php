<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>三元運算子</title>
    </head>
    <body>
        <?php
        $a=10;
        $b=8;
        if($a>$b){
            echo "a>b";
            }
 else {
     echo "a<b";
 }
 echo "<hr>";
 echo ($a>$b)?"a>b":"a<b";
        ?>
    </body>
</html>
