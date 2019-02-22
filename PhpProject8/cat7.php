<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>繼承:子類別執行父類別方法</title>
    </head>
    <body>
        <?php
        class cat extends animal{
            public function __construct() {
                parent::__construct();
                echo "產生一隻貓科動物"."<br>";
            }
            public function run()
            {echo "貓科動物跑的快"."<br>"; }
        }
        class tiger extends cat {
        public function __construct()
        { echo "產生一隻老虎"."<br>";}  
public function run() 
{ echo "老虎跑的快"."<br>";
return parent::run();
}
        }
        class animal {
            public function __construct() {
                echo "產生一隻動物"."<br>";
            }
        }
        $tiger1 = new tiger;
        $tiger1->run();
        echo "<hr>";
       $cat1 = new cat;
       $cat1->run();
       echo "<hr>";
        ?>
    </body>
</html>
