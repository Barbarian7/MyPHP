<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> continue </title>
    </head>
    <body>
        <?php
        for ($i=1;$i<=2;$i++)
        {
        for ($j=1;$j<=4;$j++)
        {
            if ($j==3)
            {
                echo "迴圈停止<br>";
            continue;            
        }
        echo "j->".$j."<br>";        
        }
        echo "i->".$i."<br>";
        }
        echo "結束執行";
        ?>
    </body>
</html>
