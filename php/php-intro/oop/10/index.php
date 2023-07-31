<?php

//Magic Methods

use Example as GlobalExample;

class Example {

  private $test ;

  public function __construct()
  {

    echo "construct initialised <br/>";

  }

  public function __destruct()
  {

    echo "Object gets destroyed automatically <br/>";

  }

  public function __call($method, $arguments)
  {
    echo "Unknown method {$method} <br/>";
  }

  public function __get($name)
  {
    echo "Unknown property {$name} <br/>";
  }

  public function __set($name, $value)
  {
  echo "{$name} is {$value}<br/>";
  }

}


$example = new Example();

$example->hello();

$example->test = 'text';