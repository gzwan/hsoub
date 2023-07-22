<?php


// Associative Arrays 


$person = [
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

echo $person[0]['name'];
echo '<br />';
echo $person[1]['name'];

