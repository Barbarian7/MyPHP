<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>文字作爲索引值的陣列，使用foreach</title>
    </head>
    <body>
        <?php
        $a["Jan"]="一月";
        $a["Feb"]="二月";
        $a["Mar"]="三月";
        foreach ($a as $value1)
            echo $value1."<br>";
        ?>
    </body>
</html>
