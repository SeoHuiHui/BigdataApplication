<!DOCTYPE html>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php include '../header.php'; ?>
<h1 class="heading-title"><span style="font-size:50px">Ranked Table</span></h1>
<br>

<?php

$mysqli = mysqli_connect("localhost", "team03", "team03", "team03");

$sql = "SELECT *
        FROM (
            SELECT *, 
                   @rank := @rank + 1 AS RANKING
            FROM rankTable, (SELECT @rank := 0) r
            ORDER BY SEARCH_SUM DESC
        ) RANKED
        WHERE RANKED.CITY='" . $_POST['city1'] . "' OR RANKED.CITY='" . $_POST['city2'] . "' OR RANKED.CITY='" . $_POST['city3'] . "'";
$res = mysqli_query($mysqli, $sql);

if ($res) {
    echo "<span style='color:#FFB6C1; font-size:20px'>";
    echo "<table border cols=6 width='1000' height='200'>\n";
    echo "<tr style='border-color:#FFB6C1'><th>순위</th><th>검색어명</th><th>지역명</th><th>모바일 검색량</th><th>PC 검색량</th><th>총 검색량</th></tr>\n";
    while ($newArray=mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        $ranking=$newArray['RANKING'];
        $city=$newArray['CITY'];
        $areaName=$newArray['AREA_NAME'];
        $mobileSearch=$newArray['MOBILE_SEARCH'];
        $pcSearch=$newArray['PC_SEARCH'];
        $searchSum=$newArray['SEARCH_SUM'];
        echo "<tr style='border-color:#FFB6C1'><td style='text-align:center'>".$ranking."</td><td style='text-align:center'>".$city."</td><td style='text-align:center'>".$areaName."</td><td style='text-align:center'>".$mobileSearch."</td><td style='text-align:center'>".$pcSearch."</td><td style='text-align:center'>".$searchSum."</td></tr>\n";
    } echo "</table>";
    echo "</span>";
} else {
    printf("Could not retrieve information: %s\n", mysqli_error($mysqli));
}


mysqli_free_result($res);
mysqli_close($mysqli);

?>