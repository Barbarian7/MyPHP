<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>箱子：權限</title>
    </head>
    <body>
        <?php
        class cbox {
            public $length1;
            protected $breadth1;
            private $height1;
            }
        $box1 = new cbox();
        $box1->length1 = 20;
        //$box1->breadth1 = -20;
        $box1->height1 = 20;
        ?>
    </body>
</html>
