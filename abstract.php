<?php 

// Abstract class requires atleast 1 abstract function.
// Abstract function need to declare only not to implement.
// We cannot make an object for Abstract class.
// Child class must contain abstract method of abstract class.


abstract class bank{
   abstract function deposit();

    abstract function withdraw();

    function transfer(){
        echo "Transfered";
    }
}

class icici extends bank{

    function deposit(){
        echo "Deposited!";
    }

    function withdraw(){
        echo "Hello";
    }

    function kyc(){
        echo "KYC Required";
    }
}

class hdfc extends icici{

}

$obj = new hdfc;
$obj->kyc();
?>