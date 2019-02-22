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
            public function __construct() {
                $get_arguments = func_get_args();
                $number_of_arguments = func_num_args();
                echo "建置中<br>";
                if (method_exists($this, $method_name = '__construct'.$number_of_arguments)) {
                    call_user_func_array(array($this, $method_name), $get_arguments);
                }
            }
             public function __construct1($argument1) {
                echo '一個參數：'.$argument1."<br>";
             }
             public function __construct2($argument1, $argument2) {
                echo '兩個參數：'.$argument1.''. $argument2."<br>";
             }
             public function __construct3($argument1, $argument2, $argument3) {
                 echo '三個函數：'.$argument1.''.$argument2.''.$argument3."<br>";
             }
        }
        $box0 = new cbox();
        $box1 = new cbox('參數1');
        $box2 = new cbox('參數2', '兩個');
        $box3 = new cbox('參數3', '三個', '確認');
            ?>
    </body>
</html>
