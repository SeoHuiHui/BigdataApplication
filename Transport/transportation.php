<!doctype html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  
  <link rel="stylesheet" href="../css/style.css">

  <title>Transportation</title>
</head>
<body>
    <div class="center-search">
    <h1 class="heading-title">서울 출발 교통편 검색하기</h1>
        
    </div>
    <div>
        <form action="transSelect.php" method = "post" class="">
          <select name="destination">
            <option value="강릉">강릉</option>
            <option value="경주">경주</option>
            <option value="군산">군산</option>
            <option value="대전">대전</option>
            <option value="목포">목포</option>
            <option value="부산" selected>부산</option>
            <option value="속초">속초</option>
            <option value="여수">여수</option>
            <option value="전주">전주</option>
            <option value="제주">제주</option>
        </select>

        <input type="submit" value="검색">
        </form>
    </div>
</body>
</html>