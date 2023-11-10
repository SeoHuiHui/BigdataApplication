<!doctype html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  
  <link rel="stylesheet" type="" href="../css/style.css">


  <title>Transportation</title>
</head>
<body>
    
    <?php
        $mysqli = mysqli_connect("localhost","team03","team03","team03");

        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
            
        } else {
            $sql = "SELECT TRANS_TYPE, TRANS_PRICE, TRANS_TIME FROM transTable WHERE DESTINATION = '".$_POST['destination']."'";
            $res = mysqli_query($mysqli, $sql);

            if ($res) {

                $destination = $_POST['destination'];
                echo "<span style='color:#FFB6C1; font-size:20px'>";
                echo "서울 출발 ".$destination." 도착 교통편 검색 결과입니다.<br/>";
                echo "<br/>";

                while($newArray = mysqli_fetch_array($res,MYSQLI_ASSOC)){    
                $trans_type = $newArray['TRANS_TYPE'];
                $trans_price = $newArray['TRANS_PRICE'];
                $trans_time = $newArray['TRANS_TIME'];
                echo "교통편: ".$trans_type."<br>";
                echo "가격: ".$trans_price."<br/>";
                echo "소요시간(분): ".$trans_time."<br/>";
                echo "<br/>";
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

