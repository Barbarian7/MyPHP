<?php
header('Content-type: text/plain');
include ('lib1.php');
include ('lib2.php');
use App\Lib1\{MyClass as C4,MyClass2 as C5};
use function  App\Lib1\{MyFunction as Cf4,MyFunction2 as Cf5};
use const App\Lib1\{MYCONST1 as Cont4,MYCONST2 as Cont5};
echo Cont5 . "\n";
echo Cf4() . "\n";
echo C4::WhoAmI() . "\n";
?>
