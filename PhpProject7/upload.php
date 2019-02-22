<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>檔案上傳處理</title>
    </head>
    <body>
        <?php
        $uploaddir="./upload/";
        $tmpfile=$_FILES["userfile"]["tmp_name"];
        $file2=$_FILES["userfile"]["name"];
        if(move_uploaded_file($tmpfile, $uploaddir.$file2))
        {
            echo "上傳成功<br>";
            echo "檔案名稱：".$_FILES["userfile"]["name"]."<br>";
            echo "檔案類型：".$_FILES["userfile"]["type"]."<br>";
            echo "檔案大小：".$_FILES["userfile"]["size"]."<br>";
        }
        else
        {
            echo "上傳失敗！<br>";
            echo "檔案名稱：".$_FILES["userfile"]["name"]."<br>";
            echo "檔案類型".$_FILES["userfile"]["type"]."<br>";
            echo "檔案大小".$_FILES["userfile"]["size"]."<br>";
            echo "失敗原因".$_FILES["userfile"]["error"]."<br>";
        }
        ?>
    </body>
</html>
