<?php
session_start();
include_once('../../dbconnect.php');
header("Content-Type:text/html;   charset=utf-8");
if(isset($_SESSION)){
	$job_name = $_SESSION['job_name'];
	$sel_profession = $_SESSION['sel_profession'];
	$sel_education = $_SESSION['sel_education'];
	$salary = $_SESSION['salary'];
	$num_person = $_SESSION['num_person'];
    $end_date = $_SESSION['end_date'];                 //截止日期
	$job_type = $_SESSION['job_type'];
	$company = $_SESSION['company'];
    $job_city = $_SESSION['job_city'];                   //所在地点
	$job_address = $_SESSION['job_address'];
	$job_require = $_SESSION['job_require'];
	$mail_address = $_SESSION['mail_address'];
	$result = mysql_query("insert into tb_recruitment VALUE ('$job_name','$sel_profession','$sel_education','$salary','$num_person','$end_date','$job_type','$company','$area','$job_address','$job_require','$mail_address')");
	if($result){
		//提交成功跳转到成功界面
		echo "<script>window.location.href='../sub_success.php';</script>";
	}
	else{
		//提交失败联系微信运营人员
		echo "<script>alert('数据插入失败，请联系微信公众号后台帮助解决~');</script>";
	}
}
