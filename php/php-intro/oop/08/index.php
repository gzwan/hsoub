<?php

// Interfaces
interface ShapeInterfaces {
  
  // Singnature
  public function perimeter();

}




// Abstract Classes

abstract class Shape {

  abstract function area();

}


class Square extends Shape implements ShapeInterfaces {

  private $length ;

  public function __construct($length)
  {

    $this->length = $length ;
    
  }

  public function area()
  {

    return $this->length * $this->length ;

  }


  public function perimeter()
  {
    return $this->length * 4 ;
  }


}

class Circle extends Shape {

  private $radius ;
  public function __construct($radius)
  {
    $this->radius = $radius ;
  }

  public function area()
  {

    return pi() * ($this->radius * $this->radius);

  }
}


//$sqrt = new Square(2);
//echo $sqrt->area();

$circle = new Circle(2);

echo $circle->area();