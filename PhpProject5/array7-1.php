<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>以array方式建立陣列，索引值編號任意給</title>
    </head>
    <body>
        <?php
        $Chinese=array(
        1=>80,
        3=>60,
        90,
        8=>50,
        70
        );
        for ($a=0;$a<=10;$a++)
        {
            if(isset($Chinese[$a]))
                echo "座號".$a."同學的成績為：".$Chinese[$a]."<br>";       
                    }
        ?>
    </body>
</html>
