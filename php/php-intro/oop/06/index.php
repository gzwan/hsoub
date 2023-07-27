<?php

//Classes


class Vehicle {

  // Attributes
  protected $model ;
  protected $year ;
  public static $CONSTANT    = 'constant value';

  //constructor
  public function __construct($model , $year)
  {
    $this->model = $model ;
    $this->year  = $year  ;
  }
  
  // Methods

  public function setModel ($model) {
    $this->model = $model ;
  }

  public function getModel () {
    return $this->model ;
  }

public static function showConstant() {

  echo self::$CONSTANT;
}

}


//Object


$car = new Vehicle('HONDA' , 2021) ;

Vehicle::showConstant();




