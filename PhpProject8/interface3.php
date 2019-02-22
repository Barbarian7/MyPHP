<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>界面3</title>
    </head>
    <body>
        <?php
        interface plane
        {public function fly();}
        interface car
        {public function run();}
        interface army extends plane, car
        {public function fire();}
        class arms implements army
        {
            public function fly() {
                echo "可以飛"."<br>";
            }
            public function run() {
                echo "可以跑"."<br>";
            }
            public function fire() {
                echo "最新國防武器"."<br>";
            }
        }
        $newmachine = new arms;
        $newmachine->fly();
        $newmachine->run();
        $newmachine->fire();
        ?>
    </body>
</html>
