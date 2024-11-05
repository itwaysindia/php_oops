<?php 
// method Overriding Vs. Method Overloading

class Animal{

    function sound(){
        echo "Some Generic animal sound";
        
    }
}

class dog extends Animal{
     function sound(){
        echo "Bark<br />";
    }
}

class cat extends Animal{
    function sound(){
        echo "Meow <br />";
    }
}


// polimorphic behavior

$animals = [new dog(), new cat()];
foreach($animals as $animal){
    $animal->sound();
}
?>