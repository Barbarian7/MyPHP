<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>type 例外</title>
    </head>
    <body>
        <?php
        function add(int $left, int $right)
        {return $left + $right;}
        try {
            $value = add('left', 'right');
        } catch (TypeError $e) {
echo "data error<br>";
//echo $e->getMessage(), "\n";
        }
        echo "若沒有進行例外處理<hr>";
        $value = add('left', 'data');
        ?>
    </body>
</html>
