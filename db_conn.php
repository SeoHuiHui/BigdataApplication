<?php
$mysqli = mysqli_connect("localhost", "team03", "team03", "team03");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>