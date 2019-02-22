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
        <title>設定綜合練習刪除</title>
    </head>
    <body>
        <?php
        if (isset($_SERVER['HTTP_REFERER']))
            echo "前一頁為".$_SERVER['HTTP_REFERER']."<br>";
        else
            echo "沒有前一頁資訊";
        echo "1-設定保存1800秒，現在減1800秒"."<br>";
        echo "2-設定保存至2019年10月12日，現在内容變數内容沒了"."<br>";
        setcookie("a[0]","",time()-1800);
        setcookie("a[1]","");
        echo '<a href="cookie7.php">重新建立Cookies</a><br>';
        echo '<a href="cookie8.php">查詢Cookies</a><br>';
        ?>
    </body>
</html>
