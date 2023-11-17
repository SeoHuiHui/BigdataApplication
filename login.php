<?php 
session_start(); 
include "db_conn.php";
include 'header2.php'; 
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    if (empty($uname)) {
        echo "<script>alert('Please enter id.');</script>";
        echo "<script>window.location.href='index.php';</script>";
        exit();
        
    }else if(empty($pass)){
        echo "<script>alert('Please enter password.');</script>";
        echo "<script>window.location.href='index.php';</script>";
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
        $result = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
                echo "$uname Logged in!";
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                // header("Location: home.php");
                if ($uname === 'administrator') {
                    echo '<a href="admin/manager.php">Go to Manager Page</a>';
                }
                exit();
            }else{
                echo "<script>alert('wrong id/password.');</script>";
                echo "<script>window.location.href='index.php';</script>";
                exit();
            
            }
        }else{
            echo "<script>alert('wrong id/password.');</script>";
            echo "<script>window.location.href='index.php';</script>";
            exit();
            
        }
    }
    
}else{
    header("Location: index.php");
    exit();
}
?>