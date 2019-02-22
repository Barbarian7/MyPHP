<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>箱子：類別與成員、方法->成員屬於物件的</title>
    </head>
    <body>
        <?php
        class cbox {
            public $test1;
            public function test() {
                $this->test1++;
                echo $this->test1."<br>";
            }
        }
        $box1 = new cbox();
        $box2 = new cbox();
        echo "box1->test:";
        $box1->test();
        echo "box2->test:";
        $box2->test();
        echo "box1->test:";
        $box1->test();
        ?>
    </body>
</html>
