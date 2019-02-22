<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>繼承</title>
    </head>
    <body>
        <?php
        class cat extends animal
        {
            public function __construct() {
                parent::__construct();
                echo "產生一隻貓科動物"."<br>";
            }
        }
        class tiger extends cat
        {
            public function __construct() {
                echo "產生一隻老虎"."<br>";
            }
        }
        class animal
        {
            public function __construct() {
                echo "產生一隻動物"."<br>";
            }
        }
        $tiger1 = new tiger;
        echo "<hr>";
        $cat1 = new cat;
        echo "<hr>";
        $animal2 = new animal;
        echo "<hr>";
        ?>
    </body>
</html>
