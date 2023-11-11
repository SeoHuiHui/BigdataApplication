<?php 
session_start(); 
include '../header.php';
?>
<html>
<meta charset="utf-8">
    <head>
        <title>Manager</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <div class="mg-textarea">
            <h1>Hello, Administrator.</h1>
            <h3>Choose category to manage.</h3>
        </div>
        <div class="mg-container">
        
        <button onclick="window.location.href='manageTransport.php'">Transport</button>
        <button onclick="window.location.href='manageRestaurants.php'">Restaurants</button>
        <button onclick="window.location.href='manageAccomodation.php'">Accomodation</button>
    </div>
    </body>
</html>