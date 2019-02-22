<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>抽象類別</title>
    </head>
    <body>
        <?php
        abstract class Shape {
            protected $x, $y;
            public function setCenter($x, $y) {
                $this->x = $x;
                $this->y = $y;
            }
            abstract function draw();
        }
        class Square extends Shape {
            public function draw() {
                echo "Square<br>";
            }
            public function getCenter()
            {
                echo "x軸為:".$this->x." "."y軸為:".$this->y."<hr>";
            }
        }
        class Circle extends Shape {
             public function draw() {
                 echo "Circle<br>";
             }
             public function getCenter() {
                 echo "x軸為:".$this->x." "."y軸為:".$this->y."<br>";
             }
         }
         $Square1 = new Square;
         $Square1->draw();
         $Square1->setCenter(30, 40);
         $Square1->getCenter();
         $Circle1 = new Circle;
         $Circle1->draw();
         $Circle1->setCenter(50, 60);
         $Circle1->getCenter();
         $Shape1 = new Shape;
         $Sahpe1-> draw();
         $Sahpe1-> setCenter(30,40);
         $Sahpe1-> getCenter();
        ?>
    </body>
</html>
