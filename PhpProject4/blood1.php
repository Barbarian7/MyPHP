<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>接收血型</title>
    </head>
    <body>
        <?php
        $blood1 = $_POST["blood"];
        switch ($blood1)
        {
            case "A";
                echo "您是A型";
                break;
            case "B";
                echo "您是B型";
                break;
            case "AB";
                echo "您是AB型";
                break;
            case "O";
                echo "您是O型";
                break;
            
        }
        ?>
    </body>
</html>
