<?php

include_once 'employee.php';

$connection = new PDO("mysql:host=localhost;dbname=employees", 'username', 'password');

$sql = 'SELECT * FROM employees WHERE employee_id = 2';

$result = $connection->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);

$employee = new Employee();
$employee->employee_id = $row['employee_id'];
$employee->employee_first_name = $row['employee_first_name'];
$employee->user_last_name = $row['employee_last_name'];
$employee->employee_position = $row['employee_position'];
$employee->employee_email = $row['employee_email'];

echo '<pre>';
print_r($employee);
