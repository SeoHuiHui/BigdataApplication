<!doctype html>

<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  
  <link rel="stylesheet" href="../css/style.css">
  <?php include '../header.php'; ?>
  <br></br>
  

  <title>Accommodation</title>
</head>
<body>

<?php

    $mysqli=mysqli_connect("localhost", "team03", "team03", "team03");

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    } else {
    
        $sql = "SELECT ACCOM_NAME, RATE, ACCOM_ADDRESS FROM accomTable WHERE SI = '서울' AND GU = '".$_POST['gu']."'";
        $res = mysqli_query($mysqli, $sql);

        if ($res) {

            $gu = $_POST['gu'];
            echo "<span style='color:#FFB6C1; font-size:20px'>";
            echo $gu." 숙소 검색 결과입니다.<br/>";
            echo "<br/>";

            if (mysqli_num_rows($res) == 0) {

                echo "숙소 검색 결과가 없습니다.<br/>";

            } else {
                
                while($newArray = mysqli_fetch_array($res,MYSQLI_ASSOC)){
                $accom_name = $newArray['ACCOM_NAME'];
                $rate = $newArray['RATE'];
                $accom_address = $newArray['ACCOM_ADDRESS'];
                echo "숙소명: ".$accom_name."<br>";
                echo "평점: ".$rate."/5<br/>";
                echo "주소: ".$accom_address."<br/>";
                echo "<br/>";
                }
            }
    
        } else {
            printf("Could not retrieve data: %s\n",mysqli_error($mysqli));
        }
        echo "</span>";
        mysqli_free_result($res);
        mysqli_close($mysqli);
}

?>
</body>
</html>