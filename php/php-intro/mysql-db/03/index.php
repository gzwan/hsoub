<?php

require '_init.php';


$tasks = QueryBuilder::get('tasks');



foreach ($tasks as $task) {

  echo "{$task->description} <br/>";
}


echo '<pre>';

var_dump($tasks);

echo '</pre>';
