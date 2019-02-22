<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>dowhile:當條件成立時</title>
    </head>
    <body>
        <?php
        $i = 11;
        do
        {
            echo "i=".$i."<br>";
            $i++;
        }while ($i<10);
        echo "離開迴圈時 i=".$i."<br>";
        
        ?>
    </body>
</html>
