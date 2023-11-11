<!DOCTYPE html>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php include '../header.php'; ?>

<h1 class="heading-title"><span style="font-size:50px">Sites for With Animal</span></h1>
<br>


<?php

$mysqli=mysqli_connect("localhost", "team03", "team03", "team03");


$sql="SELECT *
FROM withAnimalTable
WHERE CITY='".$_POST['location']."'";
$res=mysqli_query($mysqli, $sql);
if ($res) {
    echo "<span style='color:#FFB6C1; font-size:20px'>";
    echo "<table border cols=6 width='1000' height='200'>\n";
    echo "<tr><th>이름</th><th>카테고리</th><th>도시</th><th>행정동</th><th>리명</th><th>도로명 주소</th></tr>\n";
    while ($newArray=mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        $poiName=$newArray['POI_NM'];
        $category=$newArray['CATEGORY'];
        $city=$newArray['CITY'];
        $dong=$newArray['DONG'];
        $li=$newArray['LI'];
        $roadName=$newArray['ROAD_NAME'];
        echo "<tr><td>".$poiName."</td><td>".$category."</td><td>".$city."</td><td>".$dong."</td><td>".$li."</td><td>".$roadName."</td></tr>\n";
    } echo "</table>";
    echo "</span>";
} else {
    printf("Could not retrieve information: %s\n", mysqli_error($mysqli));
}
mysqli_free_result($res);
mysqli_close($mysqli);

?>