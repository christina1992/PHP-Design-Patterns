<?php

include_once 'employee.php';

$employee = new Employee();
$employee->load(2);

echo '<pre>';
print_r($employee);
