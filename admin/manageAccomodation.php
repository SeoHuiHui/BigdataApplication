<meta charset="utf-8">
<?php 
// session_start(); 
include '../header.php';
?>
<html>

    <head>
        <title>Manager</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <div class="mg-textarea">
            <h2>Accomodation Management</h2>
            <h3>호텔 별점 관리</h3>
        </div>
        <div class="mg-container">
            <div class="delete-box">
                <h4>숙소의 별점을 업데이트해주세요.</h4>
                <form action="updateAccomodation.php" method="post">
                    <label for="accom-name">별점을 변경할 숙소:</label>
                    <input type="text" name="accomname" id="accomname" required>
                    <label for="rate">별점(숫자, 5점 만점):</label>    
                    <input type="number" name="rate" id="rate" required>
                    <input type="submit" value=확인>
                </form>
            </div>
        </div>
    </body>
</html>