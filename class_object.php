<?php
class cars{
    // Properties
    public $company;
    public $name;

    //Methods
    function assign($company){
        $this->company  = $company;
    }

    function get_company(){
        echo $this->company;
    }
}


$car = new cars();
$car1 = new cars();
$car->assign('Ford');
$car1->assign('Suzuki');
 $car->get_company();
 $car1->get_company();

?>