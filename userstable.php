<?php

$mysqli = mysqli_connect("localhost", "team03", "team03", "team03");

$sql="CREATE TABLE users(user_name VARCHAR(75), password VARCHAR(75))";
$res=mysqli_query($mysqli, $sql);

$sql="INSERT INTO users(user_name, password)
VALUES 
('jane', '12345'),
('administrator', '67890')";
$res=mysqli_query($mysqli, $sql);

?>