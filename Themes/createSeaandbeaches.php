
<?php
    $mysqli = mysqli_connect("localhost", "team03", "team03", "team03");

    if(mysqli_connect_error()){
        prinf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }else{
        $sql="CREATE TABLE seaAndBeachesTable(POI_NM VARCHAR(75) PRIMARY KEY, CATEGORY VARCHAR(75), CITY VARCHAR(75), DONG VARCHAR(75), LI VARCHAR(75), ROAD_NAME VARCHAR(75))";
        $res=mysqli_query($mysqli, $sql);

        $sql="INSERT INTO seaAndBeachesTable(POI_NM, CATEGORY, CITY, DONG, LI, ROAD_NAME)
        VALUES 
        ('이호테우해수욕장', '해수욕장', '제주', '이호일동','-','-'),
        ('종달리해변', '해수욕장', '제주', '구좌읍', '종달리','-'),
        ('사천진해수욕장', '해수욕장', '강릉', '사천면', '사천진리','-'),
        ('손죽해수욕장', '해수욕장', '여수', '삼산면', '손죽리','-'),
        ('표선해수욕장', '해수욕장', '제주', '표선면', '표선리','-'),
        ('하모해수욕장', '해수욕장', '제주', '대정읍', '하모리','-'),
        ('안목해변', '해수욕장', '강릉', '견소동','-','-'),
        ('봉길대왕암해수욕장', '해수욕장', '경주', '문무대왕면', '봉길리','-'),
        ('사근진해수욕장', '해수욕장', '강릉', '안현동','-','-'),
        ('오류고아라해수욕장', '해수욕장', '경주', '감포읍', '오류리','-'),
        ('신덕해수욕장', '해수욕장', '여수', '신덕동','-','-'),
        ('정강해수욕장', '해수욕장', '여수', '삼산면', '초도리','-'),
        ('금능해수욕장', '해수욕장', '제주', '한림읍', '금능리','-'),
        ('사계해안', '해수욕장', '제주', '안덕면', '사계리','-'),
        ('거문도해수욕장', '해수욕장', '여수', '삼산면', '덕촌리','-'),
        ('안도해수욕장', '해수욕장', '여수', '남면', '안도리','-'),
        ('율도해수욕장', '해수욕장', '목포', '율도동','-','-'),
        ('안인해수욕장', '해수욕장', '강릉', '강동면', '안인진리','-'),
        ('고성목해수욕장', '해수욕장', '강릉', '강동면', '정동진리','-'),
        ('방죽포해수욕장', '해수욕장', '여수', '돌산읍', '죽포리','-'),
        ('연곡해수욕장', '해수욕장', '강릉', '연곡면', '동덕리','-'),
        ('외옹치해수욕장', '해수욕장', '속초', '대포동','-','-'),
        ('서도해수욕장', '해수욕장', '여수', '삼산면', '서도리','-'),
        ('주문진해수욕장', '해수욕장', '강릉', '주문진읍', '향호리','-'),
        ('경포해수욕장', '해수욕장', '강릉', '안현동','-','-'),
        ('김녕해수욕장', '해수욕장', '제주', '구좌읍', '감녕리','-'),
        ('등대해수욕장', '해수욕장', '속초', '영랑동','-','-'),
        ('진리해수욕장', '해수욕장', '경주', '양남면', '하서리','-'),
        ('낭도해수욕장', '해수욕장', '여수', '화정면', '낭도리','-'),
        ('하평해수욕장', '해수욕장', '강릉', '사천면', '사천진리','-'),
        ('청호해수욕장', '해수욕장', '속초', '청호동','-','-'),
        ('옥돌해수욕장', '해수욕장', '군산', '옥도면', '선유도리', '선유남길'),
        ('하고수동해수욕장', '해수욕장', '제주', '우도면', '연평리','-'),
        ('월정리해수욕장', '해수욕장', '제주', '구좌읍', '월정리','-'),
        ('만성리해수욕장', '해수욕장', '여수', '만흥동','-','-'),
        ('코난해변', '해수욕장', '제주', '구좌읍', '행원리','-'),
        ('검멀레해수욕장', '해수욕장', '제주', '우도면', '연평리','-'),
        ('신양섭지해수욕장', '해수욕장', '제주', '성산읍', '고성리', '신양로 122번길'),
        ('직포해수욕장', '해수욕장', '여수', '남면', '두모리','-'),
        ('선유도해수욕장', '해수욕장', '군산', '옥도면', '선유도리','-'),
        ('송정해수욕장', '해수욕장', '강릉', '송정동','-','-'),
        ('하도해수욕장', '해수욕장', '제주', '구좌읍', '하도리','-'),
        ('모진이해수욕장', '해수욕장', '제주', '추자면', '신양리','-'),
        ('정동진해수욕장', '해수욕장', '강릉', '강동면', '정동진리','-'),
        ('협재해수욕장', '해수욕장', '제주', '한림읍', '협재리','-'),
        ('순포해수욕장', '해수욕장', '강릉', '사천면', '산대월리','-'),
        ('영진해수욕장', '해수욕장', '강릉', '연곡면', '영진리','-'),
        ('신대해안', '해수욕장', '제주', '추자면', '예초리','-'),
        ('남원큰엉해변', '해수욕장', '제주', '남원읍', '남원리', '태위로')";
        
        $res = mysqli_query($mysqli, $sql);
        
        if($res === TRUE){
            echo "seaAndBeachesTable Table records are succesfully inserted.";
        }else{
            printf("Could not create table: %s\n", mysqli_error($mysqli));
        }
        
        mysqli_close($mysqli);
    }
?>