<?php

// Parameters

function foo($name) {

  echo "Hello {$name} ! ";

}

function is_odd($number) {

  echo $number % 2 ? 

  "{$number} is odd" : "{$number} is even";

}

function sum ($num1 , $num2 = 0) {

  echo $num1 + $num2 ;

}

sum(1);