<?php

require '_init.php';

/*
QueryBuilder::insrst('tasks', [

  'description' => 'new Task 1',
  'completed'   => 0 

]);
*/
/*
QueryBuilder::update('tasks',4,[
  'description' => 'update new Task 1',
  'completed'   => 1 
]);
*/
QueryBuilder::delete('tasks' , 0 ,'id','>');

$tasks = QueryBuilder::get('tasks');

foreach ($tasks as $task){

  echo "{$task->description} <br/>";

}
