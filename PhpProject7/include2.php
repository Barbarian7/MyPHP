<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>include2</title>
    </head>
    <body>
        <table width="100%" border="1">
            <tr><td>網頁内容：</td></tr>
            <tr><td>
                <?php
                if (!(@include("copyright.php")))
                    echo "<u><i>網頁引用產生狀況！</i></u>";
        ?></td></tr>
        </table>
        <div>試試看會如何顯示</div>
    </body>
</html>