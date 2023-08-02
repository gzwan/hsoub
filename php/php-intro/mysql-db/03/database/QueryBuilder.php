<?php

class QueryBuilder
{
  private static $pdo;

  public static function make(PDO $pdo)
  {
    self::$pdo = $pdo ;
  }

  public static function get(string $table)
  {
    $query = self::$pdo->prepare("SELECT * FROM {$table} ");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
  }

  public static function insrst($table, $data)
  {
    $fields = array_keys($data);
    $fieldsStr = implode(',', $fields);
    $valuesStr = str_repeat('?,', count($fields) - 1) . '?';
    $query = "INSERT INTO {$table} ({$fieldsStr}) VALUES ({$valuesStr}) ";
    $statement = self::$pdo->prepare($query);
    $statement->execute(array_values($data));
  }

  public static function update($table , $id ,$data)
  {
    $fields = implode('= ? ,' ,array_keys($data)) . ' = ? ';
    $values = array_values($data);
    $query = "UPDATE {$table} SET {$fields} WHERE id = {$id} ";
    $statement = self::$pdo->prepare($query);
    $statement->execute($values);
  }

}
