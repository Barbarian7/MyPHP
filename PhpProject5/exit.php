<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>exit</title>
    </head>
    <body>
        <?php
        for ($i=1;$i<=10;$i++)
        {
           if ($i==5)
           {
               echo "迴圈停止<br>";
           exit;
        }
        echo "i->".$i."<br>";
        }
        echo "結束執行";
        ?>
    </body>
</html>
