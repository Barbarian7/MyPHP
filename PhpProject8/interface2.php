<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>界面2</title>
    </head>
    <body>
        <?php
        interface machine
        {public function setname($name);}
interface plane extends machine
{public function operation();}
class military implements plane
{
    public function setname($machinename) {
        $this->machinename=$machinename;}
public function operation() {
    echo "機器名稱:".$this->machinename."<br>";
    echo "這是飛機"."<br>";
}
}
$plane = new military;
$plane->setname("F16");
$plane->operation();
        ?>
    </body>
</html>
