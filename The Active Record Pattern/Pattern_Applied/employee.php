<?php

class Employee{

  protected $connection = null;

  public function __construct()
  {
      $this->connection = new PDO("mysql:host=localhost;dbname=employees", 'username', 'password');
  }

  public function load($id)
  {
      $sql = 'SELECT * FROM employees WHERE employee_id = ' . (int) $id;
      $result = $this->connection->query($sql);
      $row = $result->fetch(PDO::FETCH_ASSOC);

      foreach($row as $column => $value) {
          $this->$column = $value;
      }
  }

}

 
