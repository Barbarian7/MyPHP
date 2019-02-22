<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>靜態陣列</title>
    </head>
    <body>
        <?php  //php5.6
        const FRUITS = array(
            "Watermelon","Strawberries","Pomegranate","Blackberry"
        );
        echo FRUITS[0]."<hr>";
        var_dump(FRUITS);
        //FRUITS[0]="apple";
        define('sites',[
            'Google','Yahoo','Taobao']);
        echo "<hr>".sites[0]."<hr>";
        var_dump(sites);
        //sites[0]='php';
        ?>
    </body>
</html>
