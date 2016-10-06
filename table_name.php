<?php
include 'kcc.php';
$insert = "INSERT INTO kcc_form (name_Ko,name_En,birth_Year,birth_Month,birth_Day,id,pw,pw_Re,number_1,number_2,number_3,phonNum_1,answer,email,home_post,home_post2,home_address1,home_address2,stay,work_name,work_kinds,work_spot,work_post1,work_post2,work_address1,work_address2,work_number1,work_number2,work_number3,fax_number1,fax_number2,fax_number3,wed,wed_year,wed_month,wed_day)
VALUES('{$_POST['name_Ko']}','{$_POST['name_En']}','{$_POST['birth_Year']}','{$_POST['birth_Month']}','{$_POST['birth_Day']}','{$_POST['id']}','{$_POST['pw']}','{$_POST['pw_Re']}','{$_POST['number_1']}','{$_POST['number_2']}','{$_POST['number_3']}',{$phon_check}'{$_POST['answer']}','{$_POST['email']}','{$_POST['home_post']}','{$_POST['home_post2']}','{$_POST['home_address1']}','{$_POST['home_address2']}','{$_POST['stay']}','{$_POST['work_name']}','{$_POST['work_kinds']}','{$_POST['work_spot']}','{$_POST['work_post1']}','{$_POST['work_post2']}','{$_POST['work_address1']}','{$_POST['work_address2']}','{$_POST['work_number1']}','{$_POST['work_number2']}','{$_POST['work_number3']}','{$_POST['fax_number1']}','{$_POST['fax_number2']}','{$_POST['fax_number3']}','{$_POST['wed']}','{$_POST['wed_year']}','{$_POST['wed_month']}','{$_POST['wed_day']}')";

$result = $pdo -> query($insert);
$pnum= $_POST['phonN_1'].$_POST['phonN_2'].$_POST['phonN_3'];
$phon_check = preg_replace("/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/", "$1-$2-$3",$pnum );
?>

echo "<script>location.href='sub_show.php';</script>";
/*$pattern_mail = "/([a-zA-Z0-9_-]+)@([a-zA-Z0-9_.-]{3})/";
$email = {$_POST['email']};
echo preg_reolace_callback($pattern,"callback_func",$email);*/
?>