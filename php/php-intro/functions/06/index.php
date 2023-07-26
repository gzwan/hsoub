<?php

//Arrow Functions (PHP >= 7.4)

$arr = [1,2,3,4,5];

$num = 3;

$func = function($valua) use ($num) {

  return $valua * $num ;

};

$afunc = fn($valua) => $valua * $num ;


print_r( array_map($afunc,$arr));