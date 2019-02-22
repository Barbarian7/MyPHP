<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>第一個陣列，索引值編號任意給，使用foreach</title>
    </head>
    <body>
        <?php
        $chinese[1] = 80;
        $chinese[3] = 60;
        $chinese[ ] = 90;
        $chinese[14] = 50;
        $chinese[ ] = 70;
        foreach ($chinese as $value1)
            echo $value1."<br>";
        ?>
    </body>
</html>
