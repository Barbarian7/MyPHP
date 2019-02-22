<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>電影分級</title>
    </head>
    <body>
        <?php
        $yearsold=$_POST['years'];
        echo "您的年齡為$yearsold"."<br>";
        if ($yearsold > 18)
        echo "您可以看限制級電影"."<br>";
        elseif ($yearsold > 12)            
        echo "您可以看輔導級電影"."<br>";
        elseif ($yearsold > 6) 
        echo "您可以看保護級電影"."<br>";
        else {
        echo "您可以看普遍級電影"."<br>";}
        ?>
    </body>
</html>
