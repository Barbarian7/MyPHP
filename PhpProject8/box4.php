<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>箱子：建構子</title>
    </head>
    <body>
        <?php
        class cbox {
            private $length1;
            private $breadth1;
            private $height1;
            public function __construct($a,$b,$c) {
                echo "產生了物件<br>";
                $this->length1=$a;
                $this->breadth1=$b;
                $this->height1=$c;
            }
            public function getdata() {
             return $this->length1*$this->breadth1*$this->height1;
            }
        }
        $box1 = new cbox(20,20,20);
        echo "第一個箱子體積=".$box1->getdata()."<br>";
        ?>
    </body>
</html>
