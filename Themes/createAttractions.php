
<?php
    $mysqli = mysqli_connect("localhost", "team03", "team03", "team03");

    if(mysqli_connect_error()){
        prinf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }else{
        $sql="CREATE TABLE attractionsTable(POI_NM VARCHAR(75) PRIMARY KEY, CATEGORY VARCHAR(75), CITY VARCHAR(75), DONG VARCHAR(75), LI VARCHAR(75), ROAD_NAME VARCHAR(75))";
        $res=mysqli_query($mysqli, $sql);

        $sql="INSERT INTO attractionsTable(POI_NM, CATEGORY, CITY, DONG, LI, ROAD_NAME)
        VALUES 
        ('동춘당문화제', '지역축제', '대전', '송촌동','-', '동춘당로 94번길'),
        ('신탄진봄꽃축제', '지역축제', '대전', '평촌동','-', '벚꽃길'),
        ('군산에어쇼', '지역축제', '군산', '비응도동','-','-'),
        ('서울DMC컬쳐오픈', '지역축제', '서울', '상암동','-', '월드컵북로'),
        ('토요명품공연', '지역축제', '서울', '서초동','-','-'),
        ('한림공원수선화축제', '지역축제', '제주', '한림읍', '협재리','-'),
        ('모던태권도킥스', '지역축제', '서울', '방이동','-','-'),
        ('전주대사습놀이전국대회', '지역축제', '전주', '교동','-','-'),
        ('르미에르오월드', '지역축제', '대전', '사정동','-','-'),
        ('부산록페스티벌', '지역축제', '부산', '삼락동','-','-'),
        ('쇠소깍축제', '지역축제', '제주', '하효동','-','-'),
        ('경기전사람들이야기술사', '지역축제', '전주', '풍남동3가','-','-'),
        ('제주도세계지질공원', '테마공원/대형놀이공원', '제주', '조천읍', '선흘리', '선교로'),
        ('치치핑핑LCT원터파크', '테마공원/대형놀이공원', '부산', '중동','-', '달맞이길'),
        ('죽도공원', '일반유원지/일반놀이공원', '부산', '송정동','-', '송정해변로'),
        ('방어축제', '지역축제', '제주', '대정읍', '하모리', '신영로 36번길'),
        ('전주작은문화축전', '지역축제', '전주', '효자동2가','-', '쑥고개로'),
        ('국기원태권도시범단상설공연위대한태권도', '지역축제', '서울', '역삼동','-', '테헤란로 7길'),
        ('내나라여행박람회', '지역축제', '서울', '삼성동','-', '테헤란로 87길'),
        ('풍호마을연꽃축제', '지역축제', '강릉', '강동면', '하시동리','-'),
        ('제주카페스타', '지역축제', '제주', '중문동','-', '중문관광로'),
        ('한강물싸움축제', '지역축제', '서울', '상암동','-','-'),
        ('사회혁신한마당인대전', '지역축제', '대전', '선화동','-', '중앙로 79번길'),
        ('2020서울아시테지겨울축제', '지역축제', '서울', '혜화동','-', '창경궁로 35길'),
        ('전주독서대전', '지역축제', '전주', '동서학동','-', '춘향로'),
        ('에코랜드테마파크', '일반유원지/일반놀이공원', '제주', '조천읍', '교래리', '번영로'),
        ('하늘공원해맞이행사', '지역축제', '서울', '상암동','-', '하늘공원로'),
        ('디자인아트페어', '지역축제', '서울', '서초동','-','-'),
        ('한강봄꽃피크닉페스티벌', '지역축제', '서울', '여의도동','-','-'),
        ('서울명산트레킹', '지역축제', '서울', '필동2가','-', '퇴계로 34길'),
        ('남대구관광특구아동복대축제', '지역축제', '서울', '남창동','-', '퇴계로'),
        ('부산공연예술축제', '지역축제', '부산', '명륜동','-', '문화로'),
        ('전국청소년연극제', '지역축제', '서울', '동숭동','-', '동숭길'),
        ('경포썸머페스티벌', '지역축제', '강릉', '강문동','-','-'),
        ('제주드라이브잇쇼', '지역축제', '제주', '오라일동','', '서광로 2길'),
        ('로데오거리축제', '지역축제', '목포', '대안동','-','-'),
        ('세종예술시장소소', '지역축제', '서울', '세종로','-', '세종대로'),
        ('관광산업채용박람회', '지역축제', '서울', '삼성동','-', '테헤란로 87길'),
        ('K핸드메이드&일러스트레이션페어부산', '지역축제', '부산', '우동','-', 'APEC로'),
        ('코리아세일페스타', '지역축제', '서울', '남대문로4가','-', '세종대로'),
        ('한양도성문화제', '지역축제', '서울', '회현동1가','-', '남산공원길'),
        ('전주한옥마을전통연희퍼레이드', '지역축제', '전주', '풍남동3가','-','-'),
        ('부산어린이대공원', '테마공원/대형놀이공원', '부산', '초읍동','-', '새싹로'),
        ('한국음식관광축제', '지역축제', '전주', '풍남동3가','-','-'),
        ('신라의달밤165리걷기대회', '지역축제', '경주', '황성동','-', '용담로'),
        ('창무국제공연예술제', '지역축제', '서울', '동숭동','-', '대학로 8길'),
        ('서울국제대안영상예술페스티벌', '지역축제', '서울', '서교동','-','-'),
        ('올림픽공원장미전시회', '지역축제', '서울', '방이동','-','-'),
        ('정동문화축제', '지역축제', '서울', '정동','-', '정동길')";
        
        $res = mysqli_query($mysqli, $sql);
        
        if($res === TRUE){
            echo "attractionsTable Table records are succesfully inserted.";
        }else{
            printf("Could not create table: %s\n", mysqli_error($mysqli));
        }
        
        mysqli_close($mysqli);
    }
?>