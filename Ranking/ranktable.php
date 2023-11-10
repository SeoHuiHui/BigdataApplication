<!DOCTYPE html>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<h1 class="heading-title"><span style="font-size:30px">Ranked Table</span></h1>

<?php

$mysqli = mysqli_connect("localhost", "team03", "team03", "team03");
$sql="SELECT *
FROM rankTable
WHERE CITY='".$_POST['city1']."' OR CITY='".$_POST['city2']."' OR CITY='".$_POST['city3']."'";
$res=mysqli_query($mysqli, $sql);
if ($res) {
    echo "<span style='color:#FFB6C1; font-size:20px'>";
    echo "<table border cols=5>\n";
    echo "<tr><th>검색어명</th><th>지역명</th><th>모바일 검색량</th><th>PC 검색량</th><th>총 검색량</th></tr>\n";
    while ($newArray=mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        $city=$newArray['CITY'];
        $areaName=$newArray['AREA_NAME'];
        $mobileSearch=$newArray['MOBILE_SEARCH'];
        $pcSearch=$newArray['PC_SEARCH'];
        $searchSum=$newArray['SEARCH_SUM'];
        echo "<tr><td>".$city."</td><td>".$areaName."</td><td>".$mobileSearch."</td><td>".$pcSearch."</td><td>".$searchSum."</td></tr>\n";
    } echo "</table>";
    echo "</span>";
} else {
    printf("Could not retrieve information: %s\n", mysqli_error($mysqli));
}
mysqli_free_result($res);
mysqli_close($mysqli);

?>