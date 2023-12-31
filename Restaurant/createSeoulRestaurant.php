<?php
    $mysqli = mysqli_connect("localhost", "team03", "team03", "team03");

    if(mysqli_connect_error()){
        prinf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }else{
        $sql = "CREATE TABLE SeoulRestaurant(ID INT(10) NOT NULL AUTO_INCREMENT, 
	NAME VARCHAR(100) NOT NULL,  TYPE VARCHAR(100), MENU VARCHAR(100), 
	GU VARCHAR(50), ADDRESS VARCHAR(200), RATE INT(10), PRICE INT(50), 
	CONSTRAINT SeoulRestaurant_PK PRIMARY KEY(ID))";

        $res = mysqli_query($mysqli, $sql);
        
        $sql = "INSERT INTO SeoulRestaurant(NAME, TYPE, MENU, GU, ADDRESS, RATE, PRICE)
	VALUES

    ('와라와라', '양식', '스테이크', '강남구', '서울특별시 강남구 남부순환로 2933', 2, 11700),
    ('빈코', '양식', '스테이크', '강남구', '서울특별시 강남구 선릉로93길 6', 4, 14300),
    ('강남', '양식', '파스타', '강남구', '서울특별시 강남구 도곡로 441', 1, 12900),
    ('바빈스', '양식', '파스타', '강남구', '서울특별시 강남구 테헤란로 156', 4, 11600),
    ('오키토', '일식', '초밥', '강남구', '서울특별시 강남구 강남대로152길 19', 1, 9200),
    ('마깐바냑', '일식', '초밥', '강남구', '서울특별시 강남구 역삼로 109', 4, 9100),
    ('소노야', '일식', '회', '강남구', '서울특별시 강남구 영동대로 513', 2, 9800),
    ('쉼터', '패스트푸드', '햄버거', '강남구', '서울특별시 강남구 봉은사로 524', 2, 13600),
    ('김반장', '한식', '백반', '강남구', '서울특별시 강남구 봉은사로48길 10', 2, 10800),
    ('산울FNC', '한식', '백반', '강남구', '서울특별시 강남구 언주로30길 57', 1, 10300),
    ('완도세꼬시', '일식', '회', '강동구', '서울특별시 강동구 양재대로113길 7', 4, 14900),
    ('파파존스', '패스트푸드', '피자', '강동구', '서울특별시 강동구 구천면로 506', 2, 11400),
    ('놀부숯불', '한식', '감자탕', '강동구', '서울특별시 강동구 천호옛길 99', 4, 11500),
    ('우리집', '일식', '초밥', '강북구', '서울특별시 강북구 숭인로 69', 2, 14200),
    ('금조홍어', '일식', '회', '강북구', '서울특별시 강북구 도봉로71길 16', 1, 14100),
    ('허술한집', '패스트푸드', '햄버거', '강서구', '서울특별시 강서구 공항대로3길 9', 3, 13500),
    ('홍능갈비', '한식', '백반', '강서구', '서울특별시 강서구 화곡로18길 31', 1, 10700),
    ('프렌치', '한식', '감자탕', '강서구', '서울특별시 강서구 하늘길 38', 2, 11300),
    ('도미노', '패스트푸드', '피자', '관악구', '서울특별시 관악구 남부순환로 1610', 2, 11000),
    ('굽네치킨', '패스트푸드', '치킨', '관악구', '서울특별시 관악구 관악로 161', 3, 9200),
    ('동해바다', '일식', '회', '광진구', '서울특별시 광진구 능동로 179', 5, 12700),
    ('샘터', '중식', '코스요리', '광진구', '서울특별시 광진구 능동로35길 7', 4, 12200),
    ('석봉', '패스트푸드', '햄버거', '광진구', '서울특별시 광진구 자양로39길 20', 3, 12900),
    ('솔로몬버거', '패스트푸드', '햄버거', '광진구', '서울특별시 광진구 군자로 99-2', 4, 10600),
    ('우리식당', '한식', '백반', '광진구', '서울특별시 광진구 광나루로26길 16', 1, 10800),
    ('구의식당', '한식', '갈비', '광진구', '서울특별시 광진구 아차산로 384', 2, 12900),
    ('비엔나', '양식', '파스타', '구로구', '서울특별시 구로구 경인로 662', 3, 12800),
    ('푸른숲', '중식', '코스요리', '구로구', '서울특별시 구로구 구로중앙로7길 28', 2, 11200),
    ('전주식당', '한식', '백반', '구로구', '서울특별시 구로구 경인로 577', 2, 11200),
    ('프로포즈', '양식', '스테이크', '금천구', '서울특별시 금천구 가산로 34-6', 1, 14400),
    ('코롱식당', '한식', '백반', '금천구', '서울특별시 금천구 디지털로9길 56', 4, 14100),
    ('청암회관', '한식', '백반', '노원구', '서울특별시 노원구 한글비석로8길 29', 1, 9700),
    ('크리스피', '패스트푸드', '햄버거', '동대문구', '서울특별시 동대문구 왕산로 200', 3, 12400),
    ('동화장', '중식', '짜장면', '동작구', '서울특별시 동작구 여의대방로24길 137', 4, 12800),
    ('포마토', '중식', '짜장면', '동작구', '서울특별시 동작구 만양로14가길 22', 3, 9700),
    ('우림', '한식', '백반', '동작구', '서울특별시 동작구 동작대로7길 28', 3, 9200),
    ('벌떼식당', '한식', '갈비', '마포구', '서울특별시 마포구 신촌로20길 12', 3, 14200),
    ('에브리돈', '한식', '백반', '서대문구', '서울특별시 서대문구 응암로 65', 3, 12900),
    ('피빈', '양식', '스테이크', '서초구', '서울특별시 서초구 서초중앙로 118', 2, 14000),
    ('JBar', '양식', '파스타', '서초구', '서울특별시 서초구 반포대로 32', 4, 14800),
    ('필로네', '양식', '파스타', '서초구', '서울특별시 서초구 남부순환로 2583', 4, 9700),
    ('샤브힐', '한식', '감자탕', '서초구', '서울특별시 서초구 서초대로4길 3', 2, 9800),
    ('김가네', '한식', '갈비', '서초구', '서울특별시 서초구 태봉로 70', 2, 11600),
    ('해마로', '양식', '파스타', '성동구', '서울특별시 성동구 금호산길 62', 5, 12400),
    ('홍콩', '중식', '코스요리', '성동구', '서울특별시 성동구 아차산로7길 17-1', 3, 13800),
    ('산천', '중식', '코스요리', '성동구', '서울특별시 성동구 무학로2길 46', 5, 13300),
    ('미야꼬', '패스트푸드', '피자', '성동구', '서울특별시 성동구 성수이로 126', 5, 10700),
    ('깐부치킨', '패스트푸드', '치킨', '성동구', '서울특별시 성동구 행당로 82', 3, 9600),
    ('사계절', '한식', '감자탕', '성동구', '서울특별시 성동구 광나루로9길 2', 2, 12800),
    ('Mr박의돈워리', '한식', '갈비', '성동구', '서울특별시 성동구 무학로 50', 2, 9500),
    ('첨벙', '일식', '초밥', '성북구', '서울특별시 성북구 동소문로 315', 4, 13500),
    ('쎄리오', '중식', '짜장면', '성북구', '서울특별시 성북구 안암로 145', 4, 12500),
    ('BBQ', '패스트푸드', '치킨', '성북구', '서울특별시 성북구 안암로 63', 4, 11100),
    ('초밥왕', '일식', '초밥', '송파구', '서울특별시 송파구 올림픽로 293-19', 1, 10100),
    ('Mr.피터팬', '패스트푸드', '햄버거', '송파구', '서울특별시 송파구 올림픽로45길 22', 2, 13200),
    ('피자헛', '패스트푸드', '피자', '양천구', '서울특별시 양천구 남부순환로40길 22', 3, 12600),
    ('스완카페트', '양식', '파스타', '영등포구', '서울특별시 영등포구 도신로10가길 11-1', 4, 11100),
    ('kfc', '패스트푸드', '치킨', '영등포구', '서울특별시 영등포구 영중로 15', 3, 11600),
    ('대박', '한식', '백반', '영등포구', '서울특별시 영등포구 당산로30길 6-1', 2, 10300),
    ('하이', '한식', '감자탕', '영등포구', '서울특별시 영등포구 국회대로44길 10', 1, 13700),
    ('원일보신탕', '한식', '감자탕', '영등포구', '서울특별시 영등포구 디지털로 352', 4, 14700),
    ('진양평해장국', '한식', '감자탕', '영등포구', '서울특별시 영등포구 영신로20길 2', 4, 12700),
    ('월당', '일식', '회', '용산구', '서울특별시 용산구 이태원로42길 42', 4, 11900),
    ('엠비씨', '양식', '파스타', '종로구', '서울특별시 종로구 삼일대로17길 46', 3, 12200),
    ('띵호와', '중식', '코스요리', '종로구', '서울특별시 종로구 대명길 25', 4, 14600),
    ('청운', '한식', '감자탕', '종로구', '서울특별시 종로구 자하문로 116', 5, 10500),
    ('큰기와집한정식', '한식', '갈비', '종로구', '서울특별시 종로구 북촌로5길 62', 2, 12300),
    ('은하', '일식', '회', '중구', '서울특별시 중구 퇴계로87길 15-12', 3, 11700),
    ('왕실', '중식', '짜장면', '중구', '서울특별시 중구 남대문로 52-13', 4, 9900),
    ('버거마루', '패스트푸드', '햄버거', '중구', '서울특별시 중구 동호로7길 37', 2, 10800),
    ('맛생맛사', '한식', '감자탕', '중구', '서울특별시 중구 을지로9길 16', 4, 10900),
    ('맘스터치', '패스트푸드', '치킨', '중랑구', '서울특별시 중랑구 망우로30길 3', 1, 9100)";



        $res = mysqli_query($mysqli, $sql);
        
        if($res === TRUE){
            echo "SeoulRestaurant Table records are succesfully inserted.";
        }else{
            printf("Could not create table: %s\n", mysqli_error($mysqli));
        }
        
        mysqli_close($mysqli);
    }
?>