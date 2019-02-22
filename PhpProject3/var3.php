<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>變數：單引號與雙引號</title>
    </head>
    <body><div>
        <?php
        $a="php";
        echo "這是".$a."網頁<br>";
        echo "這是"."$a"."網頁".'<br>';
        echo "這是".'$a'."網頁";
        ?>
        </div>
    </body>
</html>
