<?php

// return

function sum (...$numbers) {

  $acc = 0 ;

  foreach ($numbers as $number ) $acc += $number ;
  
  return $acc ;

}


function is_odd ($number) {

  if ($number % 2 ) return true ;
  
 // else return false ;

}

echo is_odd(1) ;
