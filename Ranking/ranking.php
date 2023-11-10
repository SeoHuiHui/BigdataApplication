<!DOCTYPE html>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
 <section class="ranking">
    <h1 class="heading-title"><span style="font-size:30px">Travel Ranking</span></h1>

    <button type="button" class="btn btn-secondary btn-square-md">강릉</button>
    <button type="button" class="btn btn-secondary btn-square-md">경주</button>
    <button type="button" class="btn btn-secondary btn-square-md">군산</button>
    <button type="button" class="btn btn-secondary btn-square-md">대전</button>
    <button type="button" class="btn btn-secondary btn-square-md">목포</button>
    <button type="button" class="btn btn-secondary btn-square-md">부산</button>
    <button type="button" class="btn btn-secondary btn-square-md">속초</button>
    <button type="button" class="btn btn-secondary btn-square-md">여수</button>
    <button type="button" class="btn btn-secondary btn-square-md">제주</button>
    <button type="button" class="btn btn-secondary btn-square-md">전주</button>
    <br>
    <br>
    <br>
    <br>

    <form action="ranktable.php" method="POST">
        <p>City 1<br>
        <input type="text" name="city1" size="30"></p>
        <p>City 2<br>
        <input type="text" name="city2" size="30"></p>
        <p>City 3<br>
        <input type="text" name="city3" size="30"></p>
        <p><input type="submit" name="submit" value="Rank"></p>
    </form>
