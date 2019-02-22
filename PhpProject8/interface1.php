<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>界面1</title>
    </head>
    <body>
        <?php
        interface machine
        {
        public function setname($name);
        public function operation();
        }
        class plane implements machine
        {
            private $machinename;
            public function setname($machinename)
            {$this->machinename=$machinename;}
        public function operation()
        {
    echo "機器名稱:".$this->machinename."<br>";
    echo "這是飛機"."<br>";
        }
        }
        class car implements machine 
        {
            private $machinename;
            public function setname($machinename) 
            {$this->machinename=$machinename;}
            public function operation() 
            {
                echo "機器名稱:".$this->machinename."<br>";
                echo "這是汽車"."<br>";
            }
        }
        $plane1 = new plane;
        $plane1->setname("F16");
        $plane1->operation();
        $car1 = new car;
        $car1->setname("BMW");
        $car1->operation();
        ?>
    </body>
</html>
