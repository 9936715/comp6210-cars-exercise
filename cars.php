<?php
class Car{

private $id;
private $make;
private $models;

public function __construct($_id, $_make, $_models = []){
    $this->id = $_id;
    $this->make = $_make;
    $this->models = $_models;
}

public function __get($property){
    if(property_exists($this, $property)){
        return $this->$property;
    }
}

}
?>