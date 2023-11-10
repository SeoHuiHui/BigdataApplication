<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
     <form action="login.php" method="post">
        <h2><span style="color:black; font-size:30px">LOGIN</style></h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label><span style="color:black; font-size:20px">User Name</style></label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label><span style="color:black; font-size:20px">Password</style></label>
        <input type="password" name="password" placeholder="Password"><br> 
        <button type="submit">Login</button>
     </form>
</body>
</html>