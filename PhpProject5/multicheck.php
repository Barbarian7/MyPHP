<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>分類的核選框</title>
    </head>
    <body>
        <?php
        if(isset($_GET['win']))
        {
            echo "用過哪一種Windows系統："."<br>";
            foreach ($_GET['win'] as $win) {
                echo $win . "<br>";
            }
        }
        echo "<br><br><hr><br><br>";
        if(isset($_GET['linux']))
        {
            echo "用過哪一種Linux系統："."<br>";
            foreach ($_GET['linux'] as $linux) {
                echo $linux. "<br>";
            }
        }
        ?>
    </body>
</html>
