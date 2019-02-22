<?php
namespace App\Lib1;
const MYCONST1 = '123\MYCONST';
const MYCONST2 = '456\MYCONST';
function MyFunction() {
    return __FUNCTION__;   
}
function MyFunction2() {
    return __FUNCTION__;
}
class MyClass {
    static function WhoAmI() {
        return __METHOD__;
    }
}
class MyClass2 {
    static function WhoAmI() {
        return __METHOD__;
    }
}
?>