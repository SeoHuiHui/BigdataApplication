<?php

$mysqli = mysqli_connect("localhost", "team03", "team03", "team03");
/*
$sql="CREATE TABLE rankTable(CITY VARCHAR(75), AREA_NAME VARCHAR(75), MOBILE_SEARCH INT NOT NULL, PC_SEARCH INT NOT NULL, SEARCH_SUM INT NOT NULL)";
$res=mysqli_query($mysqli, $sql);

$sql="INSERT INTO rankTable(CITY, AREA_NAME, MOBILE_SEARCH, PC_SEARCH, SEARCH_SUM)
VALUES 
('강릉', '강원도', 217, 567, 784),
('경주', '경상북도', 369, 930, 1299),
('군산', '전라북도', 207, 766, 973),
('대전', '대전광역시', 168, 410, 578),
('목포', '전라남도', 153, 445, 598),
('부산', '부산광역시', 449, 1172, 1621),
('속초', '강원도', 162, 460, 622),
('여수', '전라남도', 293, 908, 1201),
('전주', '전라북도', 203, 630, 833),
('제주', '제주특별자치도', 246, 807, 1053)";
$res=mysqli_query($mysqli, $sql);
*/

$sql="SELECT *
FROM withAnimalsTable
WHERE CITY='".$_POST['location']."'";
$res=mysqli_query($mysqli, $sql);
if ($res) {
    echo "<table border cols=5>\n";
    echo "<tr><td>이름</td><td>도시</td><td>행정동</td><td>리명</td><td>도로명 주소</td></tr>\n";
    while ($newArray=mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        $poiName=$newArray['POI_NM'];
        $city=$newArray['CITY'];
        $dong=$newArray['DONG'];
        $li=$newArray['LI'];
        $roadName=$newArray['ROAD_NAME'];
        echo "<tr><td>".$poiName."</td><td>".$city."</td><td>".$dong."</td><td>".$li."</td><td>".$roadName."</td></tr>\n";
    } echo "</table>";
} else {
    printf("Could not retrieve information: %s\n", mysqli_error($mysqli));
}
mysqli_free_result($res);
mysqli_close($mysqli);

?>