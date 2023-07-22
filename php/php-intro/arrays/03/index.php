<?php

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

$count = count($person);

//for ($i = 0 ; $i < $count ; $i++){
//  echo $person[$i]['name'] . ' - ' . $person[$i]['job'];
//  echo '<br />';
//}

$i = $count -1 ;

while($i >= 0 ){

  echo $person[$i]['name'] . ' - ' . $person[$i]['job'];
  echo '<br />';
  $i--;
}