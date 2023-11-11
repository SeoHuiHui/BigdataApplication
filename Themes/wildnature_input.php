<html>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php include '../header.php'; ?>
<section class="ranking">

    <h1 class="heading-title"><span style="font-size:50px">Travel Sites for Wild Nature</span></h1><br>

    <form action ="wildnature.php" method="POST">
        <p>Location<br>
        <input type="text" name="location" size="30"></p>
        <p><input type="submit" name="submit" value="Search"></p>
    </form>

