<?php

// break 

$i = 0 ;


while($i <= 10 ) {

  $i++ ;

  if( $i % 2 ) continue;

  echo "{$i} <br/>";

  if( $i == 5 ) break;


}
