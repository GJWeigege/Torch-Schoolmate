<?php
session_start();
$_SESSION['job_name']=$_POST['job_name'];
$_SESSION['sel_profession']=$_POST['sel_profession'];
$_SESSION['sel_education']=$_POST['sel_education'];
$_SESSION['salary']=$_POST['salary'];
$_SESSION['num_person']=$_POST['num_person'];
$_SESSION['end_date']=$_POST['end_date'];                 //截止日期
$_SESSION['job_type']=$_POST['job_type'];
$_SESSION['company']=$_POST['company'];
$_SESSION['job_city']=$_POST['job_city'];                   //所在地区
$_SESSION['job_address']=$_POST['job_address'];
$_SESSION['job_require']=$_POST['job_require'];
$_SESSION['mail_address']=$_POST['mail_address'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>实习信息</title>
    <script src="jss/jquery-2.1.4.min.js"></script>
    <link href="css/preview.css" rel="stylesheet">
</head>
<body>
    <div class="contain">
        <div class="div_first">
            <h3>[<?php echo $_POST['job_type'];?>]<?php echo $_POST['job_name'];?></h3>
            <span class="company"><?php echo $_POST['company'];?></span><br>
            <span class="salary"><b><?php echo $_POST['salary'];?></b>|<?php echo $_POST['job_city'];?>|<?php echo $_POST['sel_education'];?><p><?php echo $_POST['end_date']."截止";?></p></span>
        </div><hr>
        <div class="div_second">
            <span><b>招聘人数：</b><?php echo $_POST['num_person'];?></span><span><b>所属行业：</b><?php echo $_POST['sel_profession'];?></span><br>
            <span><b>上班地点：</b><?php echo $_POST['job_address'];?></span>
        </div><hr>
        <div class="div_third">
            <span><b>职业描述：</b></span>
            <pre><?php echo $_POST['job_require'];?></pre>
            <span><b>联系方式：</b><?php echo $_POST['mail_address'];?></span>
        </div>
        <div class="div_fourth">
            <form action="sql/sql-recruitment.php">
                <button type="button" onclick="history.go(-1);">修改</button>
                <button type="submit">确认</button>
            </form>
        </div>
    </div>
</body>
</html>

