<?php ob_start();?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cookies設定綜合查詢</title>
    </head>
    <body>
        <?php
        if (isset($_SERVER['HTTP_REFERER']))
            echo "前一頁為".$_SERVER['HTTP_REFERER']."<br>";
        else 
            echo "沒有前一頁資訊";
        foreach ($_COOKIE["a"] as $a => $value1) 
            echo "第".$a."的内容為".$value1."<br>";            
        echo '<a href="cookie7.php">重新建立Cookies</a><br>';
        echo '<a href="cookie9.php">刪除幾個Cookies</a><br>';
        
        ?>
    </body>
</html>
