<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>沒有對應的方法與成員會如何呈現呢</title>
    </head>
    <body>
        <?php
        class cbox {
            private $length1;
            private $breadth1;
            private $height1;
            public function getdata() {
                return $this->length1*$this->breadth1*$this->height1;
            }
        }
        $box1 = new cbox;
        $box1->titlename="php";
        echo $box1->titlename;
        $box1->test2(123);
        ?>
    </body>
</html>
