<?php 
// session_start(); 
include 'header2.php'; 
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
    <html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="css\style.css">
    </head>
    <body>
        <h1>Hello, <span style="color:#DA1884"><?php echo $_SESSION['user_name']; ?></span><br>
        Your adventure is about to start!<br></h1>
    </body>
    </html>
<?php
}
else {
    header("Location: index.php");
    exit();
}
?>