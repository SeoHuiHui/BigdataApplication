<!DOCTYPE html>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<h1 class="heading-title"><span style="font-size:30px">가까운 식당 찾기 [부산] </span></h1>
<?php include '../header.php'; ?>
<br></br>
<form action = "selectBusan.php" method = "post">
<select name="gu">
    <option value="강서구" selected>강서구</option>
    <option value="금정구">금정구</option>
    <option value="기장군">기장군</option>
    <option value="동구">동구</option>
    <option value="동래구">동래구</option>
    <option value="부산진구">부산진구</option>
    <option value="사상구">사상구</option>
    <option value="서구">서구</option>
    <option value="수영구">수영구</option>
    <option value="연제구">연제구</option>
    <option value="영도구">영도구</option>
    <option value="중구">중구</option>
    <option value="해운대구">해운대</option>
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

<input type=submit value=확인><br/>
</form>


