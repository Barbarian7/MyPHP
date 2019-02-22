<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>第一個陣列，不給予索引值編號</title>
    </head>
    <body>
        <?php
        $Chinese[]=80;
        $Chinese[]=60;
        $Chinese[]=90;
        $Chinese[]=50;
        $Chinese[]=70;
        for ($a=0; $a<5; $a++)
            echo $Chinese[$a]."<br>";       
        ?>
    </body>
</html>
