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

  <title>Accommodation</title>
</head>
<body>
    <div>
    <br></br>
    <center>
    <form action="guResultSeoul.php" method = "post" class="">
    <select name="gu">

    <option class="seoul-si" value="강남구" selected>강남구</option>
    <option class="seoul-si" value="강동구">강동구</option>
    <option class="seoul-si" value="강북구">강북구</option>
    <option class="seoul-si" value="강서구">강서구</option>
    <option class="seoul-si" value="관악구">관악구</option>
    <option class="seoul-si" value="광진구">광진구</option>
    <option class="seoul-si" value="구로구">구로구</option>
    <option class="seoul-si" value="금천구">금천구</option>
    <option class="seoul-si" value="노원구">노원구</option>
    <option class="seoul-si" value="동대문구">동대문구</option>
    <option class="seoul-si" value="동작구">동작구</option>
    <option class="seoul-si" value="마포구">마포구</option>
    <option class="seoul-si" value="서대문구">서대문구</option>
    <option class="seoul-si" value="서초구">서초구</option>
    <option class="seoul-si" value="성동구">성동구</option>
    <option class="seoul-si" value="성북구">성북구</option>
    <option class="seoul-si" value="송파구">송파구</option>
    <option class="seoul-si" value="양천구">양천구</option>
    <option class="seoul-si" value="영등포구">영등포구</option>
    <option class="seoul-si" value="용산구">용산구</option>
    <option class="seoul-si" value="종로구">종로구</option>
    <option class="seoul-si" value="중구">중구</option>
    <option class="seoul-si" value="중랑구">중랑구</option>

    </select>
    <input type="submit" value="검색">

</form>
</center>
</div>

<?php

    $mysqli=mysqli_connect("localhost", "team03", "team03", "team03");

    $sql="SELECT GU, COUNT(ACCOM_NAME) FROM accomTable WHERE SI='서울' GROUP BY GU WITH ROLLUP";
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