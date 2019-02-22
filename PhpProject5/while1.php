<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>while:當條件成立時</title>
    </head>
    <body>
        <?php
        $i = 1;
        while ($i<10)
        {
            echo "i=".$i."<br>";
            $i++;
        }
        echo "離開迴圈時 i=".$i."<br>";
        ?>
    </body>
</html>
