<?php
    include 'kcc.php';
    $insert = "select * from kcc_form order by idx desc";//desc=내림차순/최신순
    $result = $pdo -> query($insert);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        * { margin: 0; padding: 0; }
        #wrap{background: pink; border-bottom: 3px solid #ddd;  color: #fff; padding-bottom: 10px; }
        .pw_re{font-size: 0.7em; font-weight: bold; }
    </style>
</head>
<body>
<?php
    print phonNum_1;
    while($row = $result->fetch()){  
            $name_K=$row['name_Ko'];
            echo "<div id=wrap>";
            echo "<h1>".$row['name_Ko']."님의 회원정보</h1><br>";
            echo "한글이름 ".$name_K."<br>";
            echo "영문이름 : ".$row['name_En']."<br>";
            echo "생년월일 ".$row['birth_Year'].".".$row['birth_Month'].".".$row['birth_Day']."<br>";
            echo "ID : ".$row['id']."<br>";
            echo "PW : ".$row['pw'];
            
            if($row['pw'] == $row['pw_Re']){
                echo "<span class='pw_re'> &#40; 비밀번호 확인 완료&#41;</span><br>";
            } else if($row['pw'] != $row['pw_Re']) {
                echo "<span class='pw_re'>&#40; 비밀번호 확인이 안됨&#41;</span><br>";
            } else if(!isset($row['pw']))
            
            echo "<br>";
            echo "전화번호 : ".$row['number_1']."-".$row['number_2']."-".$row['number_3']."<br>";
            echo "핸드폰번호 : ".$row['phonNum_1']."</br>";
            echo "SNS 수신동의 여부 ".$row['answer']."</br>";
            echo "e-mail : ".$row['email']."</br>";
            echo "자택 우편번호 ".$row['home_post']."-".$row['home_post2']."<br>";
            echo "자택 주소 ".$row['home_address1']."<br>";
            echo "DM발송처 : ".$row['stay']."<br>";
            echo "직장명 ".$row['work_name']."<br>";
            echo "직종 ".$row['work_kinds']."<br>";
            echo "직위 ".$row['work_spot']."<br>";
            echo "직장 우편번호 ".$row['work_post1']."-".$row['work_post2']."<br>";
            echo "직장주소 ".$row['work_address1']." ".$row['work_address2']."<br>";
            echo "직장전화번호 ".$row['work_number1']."-".$row['work_number2']."-".$row['work_number3']."<br>";
            echo "팩스번호 ".$row['fax_number1']."-".$row['fax_number2']."-".$row['fax_number3']."<br>";
            echo "결혼여부 : ".$row['wed']."<br>";
            echo "결혼기념일 ".$row['wed_year'].".".$row['wed_month'].".".$row['wed_day']."<br>";
            echo "</div>";

    }
    ?>
    
    
</body>
</html>