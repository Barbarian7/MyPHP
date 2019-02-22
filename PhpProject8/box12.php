<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Static Member</title>
    </head>
    <body>
        <?php
        class cbox {
            private $length1;
            private $breadth1;
            private $height1;
            static $number1=0;
            public function __construct($a,$b,$c) {
                echo "物件建立中"."<br>";
                $this->length1=$a;
                $this->breadth1=$b;
                $this->height1=$c;
                self::$number1++; //若沒有self::呢？
            }
            public function getdata() {
                return $this->breadth1*$this->height1*$this->length1;
            }
            public function __destruct() {
                echo "物件銷毀中";
            }
        }
        $box1 = new cbox(20,20,20);
        $box2 = new cbox(30,30,30);
        echo "第一個箱子體積=".$box1->getdata()."<br>";
        unset($box1);
        echo "第二個箱子體積=".$box2->getdata()."<br>";
        echo "共計產生了".cbox::$number1."箱子<br>";
        ?>
    </body>
</html>
