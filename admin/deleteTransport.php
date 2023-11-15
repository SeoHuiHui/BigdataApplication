<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php
// session_start();
include 'header.php';

    $mysqli = mysqli_connect("localhost", "team03", "team03", "team03");

    if(mysqli_connect_error()){
        prinf("Connect failed: %s", mysqli_connect_error());
        exit();
    }else {
        $transport_name = isset($_POST['transport_name']) ? $_POST['transport_name'] : '';
        $depart = isset($_POST['depart']) ? $_POST['depart'] : '';
        $dest = isset($_POST['dest']) ? $_POST['dest'] : '';

        $sql = "DELETE FROM transTable WHERE TRANS_TYPE = '$transport_name' AND DEPARTURE = '$depart' AND DESTINATION = '$dest'";
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