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
    <div>

    <form action="guResultBusan.php" method = "post" class="">
    <select name="gu">

    <option class="busan-si" value="중구" selected>중구</option>
    <option class="busan-si" value="서구">서구</option>
    <option class="busan-si" value="동구">동구</option>
    <option class="busan-si" value="영도구">영도구</option>
    <option class="busan-si" value="부산진구">부산진구</option>
    <option class="busan-si" value="동래구">동래구</option>
    <option class="busan-si" value="남구">남구</option>
    <option class="busan-si" value="북구">북구</option>
    <option class="busan-si" value="해운대구">해운대구</option>
    <option class="busan-si" value="사하구">사하구</option>
    <option class="busan-si" value="금정구">금정구</option>
    <option class="busan-si" value="강서구">강서구</option>
    <option class="busan-si" value="연제구">연제구</option>
    <option class="busan-si" value="수영구">수영구</option>
    <option class="busan-si" value="사상구">사상구</option>
    <option class="busan-si" value="기장군">기장군</option>

    </select>
    <input type="submit" value="검색">

</form>
</div>

<?php

    $mysqli=mysqli_connect("localhost", "team03", "team03", "team03");

    $sql="SELECT GU, COUNT(ACCOM_NAME) FROM accomTable WHERE SI='부산' GROUP BY GU WITH ROLLUP";
    $res=mysqli_query($mysqli, $sql);
    
    if ($res) {

    echo "<br/>";
    echo "<span style='color:#FFB6C1; font-size:20px'>";
    echo "<table border cols=2>\n";
    echo "<tr><th>구</th><th>총 숙소 수</th></tr>\n";
    
    while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
    $gu = $newArray['GU'];
    $countAccom = $newArray['COUNT(ACCOM_NAME)'];
    
    echo "<tr><td>".$gu."</td><td>".$countAccom."</td></tr>\n";
    } echo "</table>";
    echo "</span>";

    } else {
        printf("Could not retrieve information: %s\n", mysqli_error($mysqli));
    }

    mysqli_free_result($res);
    mysqli_close($mysqli);

?>

</body>
</html>