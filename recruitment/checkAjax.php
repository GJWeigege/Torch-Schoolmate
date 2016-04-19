<?php
//传过来一个json对象
$area = $_GET['area'];
$profession = $_GET['profession'];
//查询数据库，根据value进行查询
//查询内容包括：数据id，工作类型job_type，职位名称job_name，公司名company，工资salary，地址job_address，本科sel_education，截止日期end_date
	
if( $profession == "all"){
	//如果未选择筛选条件，则返回所有条目
	echo "<a class='practice' href='detail.php?id='".$id.">";
	echo "<div class='practice_bg'>实</div>";
	echo "<h3>[".$job_type."]".$job_name."</h3>";
	echo "<span class='company'>".$company."</span><br>";
	echo "<span><span class='salary'>".$salary."</span>|".$job_city."|".$sel_education."<p>".$end_date."截止</p></span>";
	echo "</a>";
	echo "<a class='practice' href='detail.php?id='".$id.">";
	echo "<div class='practice_bg'>实</div>";
	echo "<h3>[".$job_type."]".$job_name."</h3>";
	echo "<span class='company'>".$company."</span><br>";
	echo "<span><span class='salary'>".$salary."</span>|".$job_city."|".$sel_education."<p>".$end_date."截止</p></span>";
	echo "</a>";
}
else{
	if ($job_type == "实习") {
	echo "<a class='practice' href='detail.php?id='".$id.">";
	echo "<div class='practice_bg'>实</div>";
}
else{
	echo "<a class='fullTime' href='detail.php?id='".$id.">";
	echo "<div class='fullTime_bg'>全</div>";
}
echo "<h3>[".$job_type."]".$job_name."</h3>";
echo "<span class='company'>".$company."</span><br>";
echo "<span><span class='salary'>".$salary."</span>|".$job_city."|".$sel_education."<p>".$end_date."截止</p></span>";
echo "</a>";
}
            
                
            
?>