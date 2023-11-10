<!DOCTYPE html>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<h1 class="heading-title"><span style="font-size:30px">조건에 맞는 서울 식당</span></h1>
<?php
                $mysqli = mysqli_connect("localhost", "team03", "team03", "team03");

                if(mysqli_connect_error()){
                    prinf("Connect failed: %s\n", mysqli_connect_error());
                    exit();
                }else{
                    $sql ="SELECT NAME,ADDRESS,RATE FROM SeoulRestaurant where GU = '".$_POST['gu']."' and 
                    TYPE = '".$_POST['type']."' and RATE >= '".$_POST['rate']."'";
                    $res = mysqli_query($mysqli, $sql);
                  

                    if ($res) {
                        if (mysqli_num_rows($res) > 0) {
                            echo "<span style='color:#FFB6C1; font-size:20px'>";
                            echo "<table border cols=2>\n";
                            
                            echo "<tr><th>식당이름</th><th>주소</th><th>평점</th></tr>\n";
                            while ($newArray=mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                                $name = $newArray['NAME'];
                                $address = $newArray['ADDRESS'];
                                $rate = $newArray['RATE'];
                                
                                echo "<tr><td>".$name."</td><td>".$address."</td><td>".$rate."</td></tr>\n";
                            } echo "</table>";
                            echo "</span>";

                        } else {
                            echo '<div class="white-text">해당되는 식당이 없습니다.';
                        }
                        echo "</span>";
                    } else {
                        printf("Could not retrieve records: %s\n", mysqli_error($mysqli));
                    }
                    mysqli_free_result($res);
                    mysqli_close($mysqli);
                }
?>



