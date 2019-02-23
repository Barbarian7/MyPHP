<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>error</title>
    </head>
    <body>
        <?php
        $var = 1;
        try {
            $var->method();
        } catch (Error $e) {
            echo "操作錯誤<br>";
            }
            echo "若沒有進行例外處理<hr>";
            $var->method();
        ?>
    </body>
</html>
