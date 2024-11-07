<?php 

trait logger{
public function log($message){
    echo "Log: $message \n";
}
}

class user{
use logger;
    public function createUser($name){
        // code to crate user in db
        $this->log("User '$name' has been created!");
    }
}

class product{
use logger;
    function addProduct($product){
        //code for db
        $this->log("Product '$product' has been created!");
    }
}

$user = new user;
$user->createUser("XYZ");

$product = new product;
$product->addProduct("Laptop");



trait t1{
    function fun1(){
        echo "t1::fun1";
    }
}

trait t2{
    function fun1(){
        echo "t2::fun2";
    }
}

class class1{
    use t1, t2{
        t2::fun1 insteadof t1;
        t1::fun1 as fun2;
    }
    // function fun2(){
    //     echo "class1::fun2";
    // }
     
}
class class2 extends class1{

}
echo "<hr />";
$obj = new class2();
$obj->fun2();
?>