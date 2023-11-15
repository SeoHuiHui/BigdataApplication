<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php
// session_start();
include '../header.php';

    $mysqli = mysqli_connect("localhost", "team03", "team03", "team03");

    if(mysqli_connect_error()){
        prinf("Connect failed: %s", mysqli_connect_error());
        exit();
    }else {
        $rate = isset($_POST['rate']) ? intval($_POST['rate']) : 0;
        $accom_name = isset($_POST['accomname']) ? $_POST['accomname'] : '';

        $sql = "UPDATE accomTable SET RATE = $rate WHERE ACCOM_NAME = '$accom_name'";
        $res = mysqli_query($mysqli, $sql);

        if ($res) {
            echo "<script>alert('교통수단이 성공적으로 삭제되었습니다.');</script>";

            $selectSql = "SELECT * FROM accomTable WHERE ACCOM_NAME = '$accom_name'";
            $selectRes = mysqli_query($mysqli, $selectSql);

            if ($selectRes && mysqli_num_rows($selectRes) > 0) {
                $updatedRecord = mysqli_fetch_assoc($selectRes);
                echo "<h3 style='color: white;>업데이트된 레코드:</h3><br>";
                echo "<pre style='color: white;>" . print_r($updatedRecord, true) . "</pre>";
            }

        // manager.php로 이동하는 버튼
            echo '<button onclick="window.location.href=\'manager.php\'">Manager 페이지로 이동</button>';
        } else {
            printf("Could not update record: %s", mysqli_error($mysqli));
        }
    mysqli_close($mysqli);
    }
?>
