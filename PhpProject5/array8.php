<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>以array方式建立文字型態索引值陣列</title>
    </head>
    <body>
        <?php
        $a=array(
            "Jan" => "一月",
            "Feb" => "二月",
            "Mar" => "三月"
        );
            echo $a["Mar"]."<br>";
        ?>
    </body>
</html>
