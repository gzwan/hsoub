<?php

$employees = [
  [
    'name' => 'Mohammad' ,
    'age'  => 25 ,
    'job'  => 'web Developer',
    'skills' => ['PHP','Mysql','javaScript','HTML']   
  ],
  [
    'name' => 'Ibrahim' ,
    'age'  => 25 ,
    'job'  => 'web Developer',
    'skills' => ['PHP','Mysql','javaScript','HTML']   
  ]

];


// foreach 

foreach( $employees as $key => $employee) {

  echo $key .'-'. $employee['name'] . ' - ' . $employee['job'];
  echo '<br />';

}