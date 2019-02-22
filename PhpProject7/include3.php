<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>for迴圈内使用include</title>
    </head><body>
        <table width="100" border="1">
            <tr><td><?php
            for ($i=0; $i<=2; $i++)
            include("average2.php");?>    
                </td></tr>
            <tr><td><?php
            echo "總和為：".checknum(20, 50);
            ?></td></tr>
        </table>
    </body>
</html>
