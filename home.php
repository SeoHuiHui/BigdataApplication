<?php 
session_start(); 
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>

    <html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" type="text\css\style.css" href="./css/style.css">
    </head>
    <body>
        <h1>Hello, <span style="color:#DA1884"><?php echo $_SESSION['user_name']; ?></span><br>
        Your adventure is about to start!<br></h1>
        <a href="services.php">Our Services</a>
        <a href="logout.php">Logout</a>
    </body>
    </html>
    <?php
}
else {
    header("Location: index.php");
    exit();
}
?>