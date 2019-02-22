<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>箱子：類別與成員</title>
    </head>
    <body>
        <?php
        class cbox {
            public $length1;
            public $breadth1;
            public $height1;
        }
        $box1 = new cbox();
        $box1->length1 = 20;
        $box1->breadth1 = 20;
        $box1->height1 = 20;
        $box2 = new cbox();
        $box2->length1 = 30;
        $box2->breadth1 = 30;
        $box2->height1 = 30;
        echo "箱子1體積=".$box1->breadth1*$box1->height1*$box1->length1."<br>";
        echo "箱子2體積=".($box2->breadth1+$box2->height1+$box2->length1)."<br>";
        ?>
    </body>
</html>
