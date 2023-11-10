<?php

$mysqli = mysqli_connect("localhost", "team03", "team03", "team03");
if(mysqli_connect_error()){
    prinf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}else{
    $sql="CREATE TABLE rankTable(CITY VARCHAR(75), AREA_NAME VARCHAR(75), MOBILE_SEARCH INT NOT NULL, PC_SEARCH INT NOT NULL, SEARCH_SUM INT NOT NULL)";
    $res=mysqli_query($mysqli, $sql);
    $sql = "INSERT INTO rankTable(CITY, AREA_NAME, MOBILE_SEARCH, PC_SEARCH, SEARCH_SUM)
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

    $res = mysqli_query($mysqli, $sql);
        
       
    
    if($res === TRUE){
        echo "rankTable Table is succesfully created.";
    }else{
        printf("Could not create table: %s\n", mysqli_error($mysqli));
    }
    
    mysqli_close($mysqli);
}

?>