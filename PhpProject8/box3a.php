<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>箱子：類別與成員、方法與權限</title>
    </head>
    <body>
        <?php
        class cbox
        {
            private $length1;
            private $breadth1;
            private $height1;
            public function getdata($a,$b,$c)
            {
                if (($a<=0) || ($b<=0) || ($c<=0))
                    return "不合格產品";
                $this->length1=$a;
                $this->breadth1=$b;
                $this->height1=$c;
                return $this->length1*$this->breadth1*$this->height1;
            }
        }
        $box1 = new cbox();
        $box2 = new cbox();
        echo "第一個箱子體積=".$box1->getdata(20, -20, 20)."<br>";
        echo "第二個箱子體積=".$box2->getdata(30, 30, 30)."<br>";
        ?>
    </body>
</html>
