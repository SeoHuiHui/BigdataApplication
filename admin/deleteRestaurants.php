<meta charset="utf-8">
<?php
    $mysqli = mysqli_connect("localhost", "team03", "team03", "team03");
    if(mysqli_connect_error()){
        prinf("Connect failed: %s", mysqli_connect_error());
        exit();
    }else {
        $restaurant_name = isset($_POST['restaurant_name']) ? $_POST['restaurant_name'] : '';
        $city = isset($_POST['city']) ? $_POST['city'] : '';
        $table_name = ($city === 'Seoul') ? 'SeoulRestaurant' : 'BusanRestaurant';

        $sql ="DELETE FROM $table_name WHERE NAME = '$restaurant_name'";
        $res = mysqli_query($mysqli, $sql);

        if ($res) {
            echo "<script>alert('식당이 성공적으로 삭제되었습니다.');</script>";
            echo "<script>window.location.href='manager.php';</script>";
        } else {
            printf("Could not delete record: %s", mysqli_error($mysqli));
        }
    mysqli_close($mysqli);
    }
?>