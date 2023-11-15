<?php

$mysqli = mysqli_connect("localhost", "team03", "team03", "team03");

$sql="CREATE TABLE membership_users(membership_user VARCHAR(75), password VARCHAR(75), FOREIGN KEY(membership_user) REFERENCES users(user_name))";
$res=mysqli_query($mysqli, $sql);

$sql="INSERT INTO membership_users(membership_user, password)
VALUES 
('jane', '12345')";
$res=mysqli_query($mysqli, $sql);

?>