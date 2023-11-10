<!DOCTYPE html>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<h1 class="heading-title"><span style="font-size:50px">Sites for Sea and Beaches</span></h1>
<br>

<?php

$mysqli = mysqli_connect("localhost", "team03", "team03", "team03");

$sql="SELECT *
FROM seaAndBeachesTable
WHERE CITY='".$_POST['location']."'";

// print($sql);
$res=mysqli_query($mysqli, $sql);
if ($res) {
    echo "<span style='color:#FFB6C1; font-size:20px'>";
    echo "<table border cols=5 width='1000' height='200'>\n";
    echo "<tr><td>이름</td><td>도시</td><td>행정동</td><td>리명</td><td>도로명 주소</td></tr>\n";
    while ($newArray=mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        $poiName=$newArray['POI_NM'];
        $city=$newArray['CITY'];
        $dong=$newArray['DONG'];
        $li=$newArray['LI'];
        $roadName=$newArray['ROAD_NAME'];
        echo "<tr><td>".$poiName."</td><td>".$city."</td><td>".$dong."</td><td>".$li."</td><td>".$roadName."</td></tr>\n";
    } echo "</table></span>";
} else {
    printf("Could not retrieve information: %s\n", mysqli_error($mysqli));
}
mysqli_free_result($res);
mysqli_close($mysqli);

?>