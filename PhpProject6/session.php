<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>session的刪除與銷毀</title>
    </head>
    <body>
        <?php
        function show(){
            echo "session_id = ".session_id()."<br>";
            if (isset($_SESSION['A'])){echo "A = ".$_SESSION['A']."<br>";}
            if (isset($_SESSION['B'])){echo "B = ".$_SESSION['B']."<br>";}
            if (isset($_SESSION['C'])){echo "C = ".$_SESSION['C'];}
            echo "<p>";
        }
        $_SESSION['A']=10;
        echo "session變數產生A並給值<br>";
        show();
        $_SESSION['B']=20;
        $_SESSION['C']=30;
        echo "session變數產生並給值<br>";
        show();
        unset($_SESSION['B']);
        echo "session變數刪除B<br>";
        show();
        echo "取消所有session變數<br>";
        session_unset();
        show();
        echo "銷毀session<br>";
        session_destroy();
        show();
        ?>
    </body>
</html>
