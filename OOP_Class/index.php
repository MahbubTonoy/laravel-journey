<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
require "db/Conn.php";

$conn = new Conn();

// echo $conn->createTable("test_table","id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50), reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");

// echo $conn->create("test_table","firstname, lastname", "'Mahbub Rashid', 'Tonoy'");

print_r($conn->read("test_table", "*", "id='1'"));


?>
</body>
</html>