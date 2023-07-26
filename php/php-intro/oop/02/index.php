<?php

//Classes

use Vehicle as GlobalVehicle;

class Vehicle {

  // Attributes
  public $model ;
  public $year ;
  //constructor
  public function __construct($model , $year)
  {
    
    $this->model = $model ;
    $this->year  = $year  ;

  }
  
  // Methods
  public function start () {


    echo " {$this->model} Engine started!" ;
  }

  public function stop () {


    echo " {$this->model} Engine stopped!" ;
  }



}



//Object


$vehicle = new Vehicle("BMW",2021);

$vehicle->start();


$anothVehicle = new Vehicle("Honda",2021);

$anothVehicle->start();

