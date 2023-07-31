<?php

// Traits

trait mytrait {

  public function hello() {


    echo "Hello World! ";

  }

}


class Example {

  use mytrait ;

}


$example = new Example() ;


$example->hello();

