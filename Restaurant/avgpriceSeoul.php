<!DOCTYPE html>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<h1 class="heading-title"><span style="font-size:30px">음식 종류별 평균 가격 [서울] </span></h1>
<?php include '../header.php'; ?>
<br></br>

<form action = "avgresultSeoul.php" method = "post">
원하는 음식 타입을 선택하세요. <br />
    <select name="type">
        <option value="한식" selected>한식</option>
        <option value="양식">양식</option>
        <option value="중식">중식</option>
        <option value="일식">일식</option>
        <option value="패스트푸드">패스트푸드</option>
    </select>
    

<input type="submit" value=확인>
</form>
