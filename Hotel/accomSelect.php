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
 

  <title>Accommodation</title>
</head>
<body>
    
<?php
    
    
    $mysqli = mysqli_connect("localhost", "team03", "team03", "team03");

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    } else {
        
        $sql = "SELECT ACCOM_NAME, RATE, ACCOM_ADDRESS FROM accomTable WHERE SI = '".$_POST['si']."'";
        $res = mysqli_query($mysqli, $sql);

        if ($res) {

            $si = $_POST['si'];
            echo "<span style='color:#FFB6C1; font-size:20px'>";
            echo $si."시 숙소 검색 결과입니다.<br/>";
            echo "<br/>";

                
            $totalRate = 0;
            $accommodationCount = 0;

            while($countArray = mysqli_fetch_array($res,MYSQLI_ASSOC)){    
                $countRate = $countArray['RATE'];
                $totalRate += $countRate;
                $accommodationCount++;
            }

            
            
            mysqli_data_seek($res, 0);

            while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                $accom_name = $newArray['ACCOM_NAME'];
                $rate = $newArray['RATE'];
                $accom_address = $newArray['ACCOM_ADDRESS'];
                echo "<span style='color:#FFB6C1; font-size:20px'>";
                echo "숙소명: " . $accom_name . "<br>";
                echo "평점: " . $rate . "/5<br>";
                echo "주소: " . $accom_address . "<br>";
                echo "</span><br/>";
            }

            $averageRate = $totalRate / $accommodationCount;
            echo "<span style='color:white; font-size:20px'>";
            echo "평균 평점은 " . number_format($averageRate, 1) . "점 입니다.<br/>";
            echo "</span><br/>";


            if ($si == "서울") {
                echo '<form action="guSelectSeoul.php" method = "post" class="">';
                echo '<input type="submit" value="구별 상세 검색">';
                echo "<br/><br/>";
            } else {
                echo '<form action="guSelectBusan.php" method = "post" class="">';
                echo '<input type="submit" value="구별 상세 검색">';
                echo "<br/><br/>";
            }
           
        } else {
            printf("Could not retrieve data: %s\n",mysqli_error($mysqli));
        }
        mysqli_free_result($res);
        mysqli_close($mysqli);
}

?>

</body>
</html>
