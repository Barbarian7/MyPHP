<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>只能有一個條件成立</title>
    </head>
    <body>
        <?php
        $grade1=$_POST['grade1'];
        $grade2=$_POST['grade2'];
        echo "國文成績為".$grade1."<br>";
        echo "英文成績為".$grade2."<br>";
        if (($grade1<60) xor ($grade2<60))
        {
            echo '只有一科成績低於60分，可以補考<br>';
            echo "xor邏輯運算子成立<br>";
        }
 else {
            echo '兩科都低於60或都大於60，all pass或bye bye<br>';
            echo "xor邏輯運算子不成立<br>";
 }
        ?>
    </body>
</html>
