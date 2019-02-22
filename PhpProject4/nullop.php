<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>null合併運算子</title>
    </head>
    <body>
        <?php
        $user = isset($_GET['username']) ? $_GET['username'] : 'not passed1';
        echo $user."<br>";
        $user = $_GET['username'] ?? $_GET['username'] ?? 'not passed2';
        echo $user."<br>";
        ?>
    </body>
</html>
