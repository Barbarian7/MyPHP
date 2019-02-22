<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>成員重置get與set</title>
    </head>
    <body>
        <?php
        $obj = new cbox;
        echo 'a並不存在，執行$obj->a = 1動作<br>';
        $obj->a = 1;
        echo '<hr>a並不存在，執行echo $obj->a動作<br>';
        echo $obj->a."<hr>";
        echo 'kiwi存在但是是私有，執行$obj->kiwi = 10 動作<br>';
        $obj->kiwi = 10;
        echo '<hr>kiwi存在但是是私有，執行echo $obj->kiwi動作<br>';
        echo $obj->kiwi."<hr>";        
        ?>
    </body>
</html>
