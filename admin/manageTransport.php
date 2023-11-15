<meta charset="utf-8" />
<?php include '../header.php'; ?>
<html>

    <head>
        <title>Manager</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <div class="mg-textarea">
            <h2>Transport Management</h2>
            <p>교통 수단 관리</p>
        </div>
        <div class="mg-container">
            <center>
            <div class="delete-box">
                <h4>삭제할 교통 수단의 종류와 출발지-도착지를 입력해주세요.</h4>
                <form action="deleteTransport.php" method="post">
                    <label for="transport_name">교통수단:</label>
                    <select name="transport_name" id="transport_name" required>
                        <option value="KTX">KTX</option>
                        <option value="무궁화호">무궁화호</option>
                        <option value="ITX-새마을">ITX-새마을</option>
                        <option value="고속버스">고속버스</option>
                        <option value="비행기">비행기</option>
                        <option value="새마을호">새마을호</option>
                    </select>    
                    <label for="depart">출발지:</label>
                    <select name="depart" id="depart" required>
                        <option value="서울">서울</option>
                        <option value="김포">김포</option>
                    </select>
                    <label for="dest">도착지:</label>    
                    <input type="text" name="dest" id="dest" required>
                    <input type="submit" value=확인>
                </form>
            </div>
</center>
        </div>
    </body>
</html>