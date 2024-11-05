<?php 
//Public Access Modifier
class Vehicle_p{
    public $make;
    public $model;

    public function setMakeModel($make, $model){
        $this->make = $make;
        $this->model = $model;
    }

    public function getMakeModel(){
        return "Make: $this->make, Model: $this->model";
    }
}

class Vehicle_r{
    private $make;
    private $model;

    public function setMakeModel($make, $model){
        $this->make = $make;
        $this->model = $model;
    }

    public function getMakeModel(){
        return "Private Make: $this->make, Private Model: $this->model";
    }
}


class Vehicle_t{
    protected $make;
    protected $model;

    public function setMakeModel($make, $model){
        $this->make = $make;
        $this->model = $model;
    }

    private function getMakeModel(){
        return "Protected Make: $this->make, Protected Model: $this->model";
    }
}


class Car extends Vehicle_t{
    public function displayMakeModel(){
        return $this->getMakeModel();
    }
}



$car = new Car();
$car->setMakeModel("Ford", "Mustang");
echo $car->displayMakeModel();
?>