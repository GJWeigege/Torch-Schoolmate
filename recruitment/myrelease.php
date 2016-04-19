<?php
//根据用户openid获取数据
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>我发布的信息</title>
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
</head>
<body>
	<?php
	//输出信息
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
	?>
</body>
</html>