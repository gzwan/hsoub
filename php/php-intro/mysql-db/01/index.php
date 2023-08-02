<?php

try {

  $pdo = new PDO('mysql:host=localhost;dbname=php_basics', 'root', '');
} catch (PDOException $e) {

  die($e->getMessage());
}

