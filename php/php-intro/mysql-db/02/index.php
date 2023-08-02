<?php

class Task {

  public $id ;
  public $description ;
  public $completed ;

}

try {

  $pdo = new PDO('mysql:host=localhost;dbname=php_basics', 'root', '');
} catch (PDOException $e) {

  die($e->getMessage());
}


$query = $pdo->prepare('SELECT * FROM tasks ');

$query->execute();

$tasks = $query->fetchAll(PDO::FETCH_OBJ ,'Task');



foreach($tasks as $task){

  echo "{$task->description} <br/>";

}


echo '<pre>';

var_dump($tasks);

echo '</pre>';

