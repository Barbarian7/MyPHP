<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>陣列索引值編號任意給</title>
    </head>
    <body>
        <?php
        $Chinese[1]=80;
        $Chinese[3]=60;
        $Chinese[]=90;
        $Chinese[6]=50;
        $Chinese[]=70;
        for ($a=0; $a<=8; $a++)
            echo "座號".$a."同學的成績為：".$Chinese[$a]."<br>";       
        ?>
    </body>
</html>
