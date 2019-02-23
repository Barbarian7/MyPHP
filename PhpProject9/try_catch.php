<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>抛出例外</title>
    </head>
    <body>
        <?php
        $day=32;
        try {
            if ($day>31) {
                throw new Exception("日期不對:$day");
            }
        } catch (Exception $e) {
           echo $e->getMessage()."<br>";
        }
        ?>
    </body>
</html>
