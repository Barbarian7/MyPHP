<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>若兩個條件均成立才算成立</title>
    </head>
    <body>
        <?php
        $grade1=$_POST['grade1'];
        $grade2=$_POST['grade2'];
        echo "國文成績為".$grade1."<br>";
        echo "英文成績為".$grade2."<br>";
        if (($grade1>=90) or ($grade2>=90))
        {
            echo '其中一科成績大於90分，可領獎學金<br>';
            echo "or邏輯運算子成立<br>";
        }
 else {
            echo '兩科成績都低於90分，不可領獎學金<br>';
            echo "or邏輯運算子不成立<br>";
 }
        ?>
    </body>
</html>
