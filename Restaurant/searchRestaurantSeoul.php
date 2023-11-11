<!DOCTYPE html>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<h1 class="heading-title"><span style="font-size:30px">가까운 식당 찾기 [서울] </span></h1>
<?php include '../header.php'; ?>
<br></br>
<form action = "selectSeoul.php" method = "post">

    <select name="gu">
        <option value="강남구" selected>강남구</option>
        <option value="강동구">강동구</option>
        <option value="강북구">강북구</option>
        <option value="강서구">강서구</option>
        <option value="관악구">관악구</option>
        <option value="광진구">광진구</option>
        <option value="구로구">구로구</option>
        <option value="금천구">금천구</option>
        <option value="노원구">노원구</option>
        <option value="동대문구">동대문구</option>
        <option value="동작구">동작구</option>
        <option value="마포구">마포구</option>
        <option value="서대문구">서대문구</option>
        <option value="서초구">서초구</option>
        <option value="성동구">성동구</option>
        <option value="성북구">성북구</option>
        <option value="송파구">송파구</option>
        <option value="양천구">양천구</option>
        <option value="영등포구">영등포구</option>
        <option value="용산구">용산구</option>
        <option value="종로구">종로구</option>
        <option value="중구">중구</option>
        <option value="중랑구">중랑구</option>
    </select>
    
    <select name="type">
        <option value="한식" selected>한식</option>
        <option value="양식">양식</option>
        <option value="중식">중식</option>
        <option value="일식">일식</option>
        <option value="패스트푸드">패스트푸드</option>
    </select>
    
    <select name="rate">
        <option value="1" selected>1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    

<input type="submit" value=확인>
</form>
<!-- <div class="card-footer"><a class="btn btn-primary btn-sm" href="selectSeoul.php">결과보기</a></div> -->

</body> </html>