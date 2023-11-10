<!DOCTYPE html>



<?php
    $mysqli = mysqli_connect("localhost", "team03", "team03", "team03");

    if(mysqli_connect_error()){
        prinf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }else{
        $sql = "CREATE TABLE transTable(DEPARTURE VARCHAR(75), DESTINATION VARCHAR(75), TRANS_TYPE VARCHAR(75), TRANS_PRICE INT NOT NULL, TRANS_TIME INT NOT NULL)";
    $res=mysqli_query($mysqli, $sql);

    $sql="INSERT INTO transTable(DEPARTURE, DESTINATION, TRANS_TYPE, TRANS_PRICE, TRANS_TIME)
    VALUES 
    ('서울', '부산', 'KTX', 59800, 162),
    ('서울', '부산', '무궁화호', 28600, 324),
    ('서울', '부산', 'ITX-새마을', 42600, 280),
    ('서울', '부산', '고속버스', 26700, 240),
    ('서울', '경주', 'KTX', 49300, 134),
    ('서울', '경주', '고속버스', 22700, 210),
    ('서울', '여수', 'KTX', 47500, 196),
    ('서울', '여수', '무궁화호', 27600,	322),
    ('서울', '여수', 'ITX-새마을', 41100, 283),
    ('서울', '여수', '고속버스', 24500, 255),
    ('서울', '제주', '비행기', 41100, 70),
    ('서울', '제주', '비행기', 88200, 70),
    ('서울', '제주', '비행기', 100200, 70),
    ('김포', '제주', '비행기', 88200, 70),
    ('서울', '군산', '새마을호', 21600, 199),
    ('서울', '군산', '무궁화호', 14500, 207),
    ('서울', '전주', '무궁화호', 17600, 213),
    ('서울', '전주', 'KTX', 34600, 111),
    ('서울', '전주', 'ITX-새마을', 26200, 192),
    ('서울', '전주', '고속버스', 15000, 160),
    ('서울', '강릉', 'KTX', 27600, 112),
    ('서울', '속초', '고속버스', 17200, 140),
    ('서울', '목포', '고속버스', 33500, 220),
    ('서울', '목포', 'KTX', 53100, 165),
    ('서울', '목포', '무궁화호', 26600, 315),
    ('서울', '대전', 'KTX', 23700, 60),
    ('서울', '대전', '무궁화호', 10600, 139),
    ('서울', '대전', '고속버스', 16900, 120)";

    $res = mysqli_query($mysqli, $sql);

    if($res === TRUE){
        echo "transTable is succesfully created.";
    }else{
        printf("Could not create table: %s\n", mysqli_error($mysqli));
    }
    mysqli_close($mysqli);
    }

?>

