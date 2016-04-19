<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>在校证明材料</title>
    <link href="css/part_time_job.css" rel="stylesheet" type="text/css">
    <script src="jss/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#submit").bind("click",function(){       //点击按钮之后判断输入是否为空
                if($("#op").val()==""){
                    $("#op").focus();
                    return false;
                }
                if($("#requirements").val()==""){       //点击按钮之后判断输入是否为空
                    $("#requirements").focus();
                    return false;
                }
                return true;
            });
        });
    </script>
</head>
<body>
    <form action="../sql_controllers.php" method="post">
<!--        提交成功后跳转到数据库操作页面-->
        <input name="openid" value="<?php echo $_GET['user_openid']; ?>" type="hidden"/><br/>
        <input name="frm" type="hidden" value="frm_part_time_job">
<!--        校友们的具体要求-->
        <div>
            亲爱的校友，请在下面的输入框中输入具体的兼职要求，包括时间、地点、联系方式等。
            <br/>
            <textarea rows="10" id="requirements" placeholder="具体要求……" name="requirements"></textarea>
            <div id="con_sub"><input id="submit" type="submit" name="submit" value="提      交"></div>
        </div>
    </form>

</body>
</html>
