
<?php
    $mysqli = mysqli_connect("localhost", "team03", "team03", "team03");

    if(mysqli_connect_error()){
        prinf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }else{
        $sql="CREATE TABLE withAnimalTable(POI_NM VARCHAR(75) PRIMARY KEY, CATEGORY VARCHAR(75), CITY VARCHAR(75), DONG VARCHAR(75), LI VARCHAR(75), ROAD_NAME VARCHAR(75))";
$res=mysqli_query($mysqli, $sql);

$sql="INSERT INTO withAnimalTable(POI_NM, CATEGORY, CITY, DONG, LI, ROAD_NAME)
VALUES
('오월드', '동물원', '대전', '사정동', '-', '사정공원로'),
('30CUBE아쿠아', '아쿠아리움/대형수족관', '경주', '황성동', '-', '용담로92번길'),
('CGN아쿠아리움', '아쿠아리움/대형수족관', '부산', '대저1동', '-', '체육공원로52번길'),
('헬로애니멀', '동물원', '서울', '방학동', '-', '마들로'),
('부산씨라이프아쿠아리움', '아쿠아리움/대형수족관', '부산', '중동', '-', '해운대해변로'),
('화조원', '동물원', '제주', '애월읍', '납읍리', '애원로'),
('돈키쥬쥬', '동물원', '제주', '아라이동', '-', '-'),
('피쉬랜드', '아쿠아리움/대형수족관', '여수', '덕충동', '-', '박람회길'),
('한화아쿠아플라넷', '아쿠아리움/대형수족관', '여수', '수정동', '-', '오동도로'),
('63빌딩한화아쿠아플라넷', '아쿠아리움/대형수족관', '서울', '여의도동', '-', '63로'),
('토이빌리지', '아쿠아리움/대형수족관', '경주', '신평동', '-', '보문로'),
('전주동물원', '동물원', '전주', '덕진동1가', '-', '소리로'),
('재리쥬', '동물원', '제주', '표선면', '세화리', '가시로'),
('대전애니멀파크', '동물원', '대전', '화암동', '-', '-'),
('경포아쿠아리움', '아쿠아리움/대형수족관', '강릉', '운정동', '-', '난설헌로'),
('롯데월드몰롯데월드아쿠아리움', '아쿠아리움/대형수족관', '서울', '신천동', '-', '올림픽로'),
('새별프렌즈', '동물원', '제주', '애월읍', '봉성리', '평화로'),
('아쿠아플라넷', '아쿠아리움/대형수족관', '제주', '성산읍', '고성리', '섭지코지로'),
('코엑스아쿠아리움', '아쿠아리움/대형수족관', '서울', '삼성동', '-', '영동대로'),
('경주버드파크', '동물원', '경주', '북군동', '-', '보문로'),
('대전아쿠아리움', '아쿠아리움/대형수족관', '대전', '대사동', '-', '보문산공원로'),
('대전엑스포아쿠아리움', '아쿠아리움/대형수족관', '대전', '도룡동', '-', '엑스포로'),
('캐니언파크', '동물원', '부산', '문현동', '-', '전포대로'),
('캐니언파크', '동물원', '제주', '연동', '-', '삼무로')";
$res=mysqli_query($mysqli, $sql);

        $res = mysqli_query($mysqli, $sql);
        
        if($res === TRUE){
            echo "withAnimalTable Table records are succesfully inserted.";
        }else{
            printf("Could not create table: %s\n", mysqli_error($mysqli));
        }
        
        mysqli_close($mysqli);
    }
?>