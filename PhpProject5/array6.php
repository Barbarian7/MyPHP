<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $Chinese=array(
        1=>80,
        2=>22,    
        3=>60,
        4=>44,    
        6=>90,
        7=>77,    
        8=>50,
        9=>70
        );
        for ($a=0;$a<=10;$a++)
        {
            if(isset($Chinese[$a]))
                echo "座號".$a."同學的成績為："."$Chinese[$a]"."<br>";       }
        ?>
    </body>
</html>
