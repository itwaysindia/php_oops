<?php
class cons{

    public $name;

function __destruct(){
 echo "<br />This is {$this->name} destruct <br />";
}


function a(){
    echo "<br />This is method a<br />";
}



function get_name(){
    return $this->name;
}

function __construct($name){
    echo "<br />This is Constructor!<br />";
    $this->name= $name;
}

}



$c = new cons("Hello");
$c->a();
echo $c->name;

$b = new cons("Hi");
echo $b->name;

?>