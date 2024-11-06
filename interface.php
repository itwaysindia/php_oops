<?php 

// Interface can contain only abstract function
// we cannot define variables in interface
// we cannot make constructor in interface
// All method must be public
// Interface supports multiple inheritence

interface class1{
   public function fun1();
}
interface class2{
    public function fun2();
}
interface class3{
    public function fun3();
}
abstract class class5{
    abstract function fun3();
}

class class4 implements class1, class3, class2{

    function fun1(){
        echo "fun1";
    }
    function fun3(){
        echo "fun3";
    }
    function fun2(){
        echo "fun2";
    }
}
class class40 extends class5{
function fun3(){
    echo "func3";
}
}
$obj = new class4;
$obj->fun1();

?>