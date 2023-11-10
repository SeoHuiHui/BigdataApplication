<!DOCTYPE html>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css">


<?php
                
             
                $mysqli = mysqli_connect("localhost", "team03", "team03", "team03");

                if(mysqli_connect_error()){
                    prinf("Connect failed: %s\n", mysqli_connect_error());
                    exit();
                }else{
    
                    $sql = "SELECT AVG(PRICE) AS avg_price FROM BusanRestaurant WHERE TYPE = '".$_POST['type']."'";
                    $res = mysqli_query($mysqli, $sql);
                    

                    if($res){
                        $row = mysqli_fetch_assoc($res);
                        $averagePrice = $row['avg_price'];
                        echo "<span style='color:white; font-size:20px'>";
                        if ($averagePrice === null) {
                            echo '<div class="white-text">'.$_POST['type'].'종류 음식을 먹을 경우 평균 식비는 0 원입니다.</div>';

                        } else {
                            echo '<div class="white-text">'.$_POST['type'].'종류 음식을 먹을 경우 평균 식비는 ' . number_format($averagePrice) . ' 원입니다.</div>';
                        }
                        echo "</span>";
                        
                    }else{
                        printf("Could not retrieve records: %s\n",mysqli_error($mysqli));
                    }
                    mysqli_free_result($res);
                    mysqli_close($mysqli);
                }
?>



<?php
                
             
                $mysqli = mysqli_connect("localhost", "team03", "team03", "team03");

                if(mysqli_connect_error()){
                    prinf("Connect failed: %s\n", mysqli_connect_error());
                    exit();
                }else{
    
                            $sql = "SELECT NAME, MENU, PRICE, GU FROM BusanRestaurant WHERE TYPE = '" . $_POST['type'] . "'";
                            $res = mysqli_query($mysqli, $sql);
                            

                            if ($res && mysqli_num_rows($res) > 0) {
                                echo "<span style='color:#FFB6C1; font-size:20px'>";
                                echo "<table border cols=4>\n";
                                echo "<tr><th>Name</th><th>Menu</th><th>GU</th><th>Price</th></tr>";
                                echo '부산 '.$_POST['type'].' 식당의 대표메뉴와 가격';

                                
                                while ($row = mysqli_fetch_assoc($res)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['NAME'] . "</td>";
                                    echo "<td>" . $row['GU'] . "</td>";
                                    echo "<td>" . $row['MENU'] . "</td>";
                                    echo "<td>" . $row['PRICE'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                echo "</span>";
                                $sql2 = "SELECT AVG(PRICE) AS avg_price FROM BusanRestaurant WHERE TYPE = '".$_POST['type']."'";
                                $res2 = mysqli_query($mysqli, $sql2);
                                

                                if($res2){
                                    $row = mysqli_fetch_assoc($res2);
                                    $averagePrice = $row['avg_price'];
                                    echo "<span style='color:white; font-size:20px'>";
                                    if ($averagePrice === null) {
                                        echo '<div class="white-text">'.$_POST['type'].'종류 음식을 먹을 경우 평균 식비는 0 원입니다.</div>';

                                    } else {
                                        echo '<div class="white-text">'.$_POST['type'].'종류 음식을 먹을 경우 평균 식비는 ' . number_format($averagePrice) . ' 원입니다.</div>';
                                    }
                                    echo "</span>";
                                    
                                }else{
                                    printf("Could not retrieve records: %s\n",mysqli_error($mysqli));
                                }
                            } else {
                                echo "No items found for this type.";
                            }
                                }
                        echo "</span>";
                            
                    mysqli_free_result($res);
                    mysqli_free_result($res2);
                    mysqli_close($mysqli);
                
?>





