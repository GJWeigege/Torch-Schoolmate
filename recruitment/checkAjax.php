<?php
$name = $_GET['name'];				//获取下拉框的name值，可删除
$value = $_GET['value'];				//获取下拉框的value值
//查询数据库，根据value进行查询
//查询内容包括：数据id，工作类型job_type，职位名称job_name，公司名company，工资salary，地址job_address，本科sel_education，截止日期end_date

if ($job_type == "实习") {
	echo "<div class='practice_bg'>实</div>";
}
else{
	echo "<div class='fullTime'>全</div>";
}
                
                <span class="salary"><b><?php echo $_POST['salary'];?></b>|<?php echo $_POST['job_city'];?>|<?php echo $_POST['sel_education'];?><p><?php echo $_POST['end_date']."截止";?></p></span>
echo "";
// echo($name);
// echo($value);
<div class="fullTime">
                <div class="fullTime_bg">实</div>
                <h3>[<?php echo $_POST['job_type'];?>]<?php echo $_POST['job_name'];?></h3>
                <span class="company"><?php echo $_POST['company'];?></span><br>
                <span><span class="salary"><?php echo $_POST['salary'];?></span>|<?php echo $_POST['job_city'];?>|<?php echo $_POST['sel_education'];?><p><?php echo $_POST['end_date']."截止";?></p></span>
            </div>
?>