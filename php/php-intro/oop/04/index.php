<?php

//Classes


class Vehicle {

  // Attributes
  protected $model ;
  protected $year ;
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

// is-a Car is a Vehicle

class Car extends Vehicle {

  private $color ;

  public function __construct($model ,$year ,$color)
  {
    parent::__construct($model,$year);
    $this->color =$color ;

  }

  public function printInfo () {

    echo "{$this->color} / {$this->year}" ;

  }

}


//Object


$vehicle = new Vehicle("BMW",2021);

$car = new Car('HONDA' , 2021 , 'red') ;

$car->printInfo();




