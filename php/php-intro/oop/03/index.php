<?php

//Classes

use Vehicle as GlobalVehicle;

class Vehicle {

  // Attributes
  private $model ;
  private $year ;
  //constructor
  public function __construct($model , $year)
  {
    
    $this->model = $model ;
    $this->year  = $year  ;

  }
  
  // Methods

  public function setyear ($year) {

    if (is_int($year)) $this->year = $year ;
    else throw new Exception("Invalid year!");

  }

  public function getyear () {

    return $this->year ;

  }

  public function setModel ($model) {

    $this->model = $model ;

  }

  public function getModel () {

    return $this->model ;

  }

  public function start () {


    echo " {$this->model} Engine started!" ;
  }

  public function stop () {


    echo " {$this->model} Engine stopped!" ;
  }


}



//Object


$vehicle = new Vehicle("BMW",2021);

$vehicle->setyear(2022);

echo $vehicle->getyear();




