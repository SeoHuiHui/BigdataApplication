<!DOCTYPE html>
<html>
    <!--각 파일마다 
    include 'header.php'; 
    넣어서 헤더 추가해야 하는데 파일이 많아서 시간이 오래 걸리면
    깃허브에 pr 날릴게요..!
    -->
    <head>
        <link rel="stylesheet" type="text/css" href="css\style.css">
    </head>
    <body>
        <header>
            <div id="menu">
                <div id="logo">
                    <a href="../home.php"><h1>Big Picture</h1></a>
                </div>
                <nav>
                    <ul id="topMenu">
                        <!-- <a href="javascript:history.back()">Go Back</a> -->
                        <a href="./Themes/themes.php">Travel Themes</a>
                        <a href="./Ranking/ranking.php">Travel Ranking</a>
                        <a href="./Transport/transportation.php">Transport</a>
                        <a href="./Restaurant/restaurant.php">Restaurants</a>
                        <a href="./Hotel/accommodation.php">Accomodation</a>
                        <a href="logout.php">Logout</a>
                    </ul>
                </nav>
            </div>
        </header>
    </body>
</html>