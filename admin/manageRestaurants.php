<meta charset="utf-8">
<?php include '../header.php'; ?>
<html>

    <head>
        <title>Manager</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        
    </head>
    <body>
    
        <div class="mg-textarea">
            <h2>Restaurants Management</h2>
            <h3>식당 폐업 관리</h3>
        </div>
        <div class="mg-container">
            <div class="delete-box">
            <center>
                <h4>영업이 종료된 식당의 이름을 적어주세요.</h4>
                
                <form action="deleteRestaurants.php" method="post">
                    <label for="restaurant_name">식당 이름:</label>    
                    <input type="text" name="restaurant_name" id="restaurant_name" required>
                    <label for="city">도시 선택:</label>
                    <select name="city" id="city" required>
                        <option value="Seoul">서울</option>
                        <option value="Busan">부산</option>
                    </select>
                    <input type="submit" value=확인>
                </form>
</center>
            </div>
        </div>
    </body>
</html>