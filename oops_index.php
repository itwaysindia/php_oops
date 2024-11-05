<?php 
/*
1. class/object/instance
2. constructor
3. destructor
4. access modifiers (Public, private, protected)
5. Inheritance
6. constants
7. abstract classes
8. interfaces
9. traits
10. namespace
11. static method
12. static properties
*/

require_once('access_modifier.php');

$i = new Vehicle_p();
$i->setMakeModel("Tata", "Altroz");

//echo $i->getMakeModel();
echo "<br />";
echo $i->make;
echo $i->model;



$car = new Vehicle_t();
$car->setMakeModel("Honda", "Civic");
echo $car->getMakeModel();

echo "<hr>";
echo $car->make;
echo $car->model;
echo "<hr>";