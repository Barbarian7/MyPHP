<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>你大於18歲嗎？</title>
    </head>
    <body>
        <?php
        if ($_POST['years'] > 18)
        echo "你的年齡合格！"."<br>";
    else 
        echo "你未成年！"."<br>";
        ?>
    </body>
</html>
