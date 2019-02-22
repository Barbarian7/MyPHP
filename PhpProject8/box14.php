<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>static function</title>
    </head>
    <body>
        <?php
        class cbox {
            private $length1;
            private $breadth1;
            private $height;
            static $number1=0;
            public function __construct($a,$b,$c) {
                echo "物件建立中"."<br>";
                $this->length1=$a;
                $this->breadth1=$b;
                $this->height=$c;
            }
            public static function num1($object1)
            {
                if ($object1->getdata()>=12000)
                    self::$number1++;
            }
            public function __toString() {
                return "box"."<br>";
            }
            public function getdata() {
                return $this->length1*$this->breadth1*$this->height;
            }
            public function __destruct() {
                echo "物件銷毀中"."<br>";
            }
            public static function __callStatic($name, $arguments) {
                echo "呼叫的方法名稱為 '$name'<br> ";
                echo "傳送進來的内容為".implode(',', $arguments). "<hr>";
            }
        }
        $box1 = new cbox(20,20,20);
        $box2 = new cbox(30,30,30);
        echo "第一個箱子體積=".$box1->getdata()."<br>";
        cbox::num1($box1);
        echo $box1;
        unset($box1);
        echo "第二個箱子體積=".$box2->getdata()."<br>";
        cbox::num1($box2);
        echo "共計產生了".cbox::$number1."大箱子<br>";
        cbox::runTest('static');
        cbox::runTest2();
        ?>
    </body>
</html>
