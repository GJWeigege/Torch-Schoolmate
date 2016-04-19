<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2015/12/15
 * Time: 14:10
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>平台帮推</title>
    <link href="css/bussiness_need.css" rel="stylesheet" type="text/css">
    <script src="jss/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#submit").bind("click",function(){       //点击按钮之后判断输入是否为空
                if($("#op").val()==""){
                    $("#op").focus();
                    return false;
                }
                if($("textarea").val()==""){       //点击按钮之后判断输入是否为空
                    $("textarea").focus();
                    return false;
                }
                return true;
            });
        });
    </script>
</head>
<body>
<form action="../sql_controllers.php" method="post">
    <input type="hidden" name="openid" value="<?php echo $_GET['user_openid']; ?>"/><br/>
    <input name="frm" type="hidden" value="frm_bussiness_need">
    <div>
        亲爱的校友，平台帮推功能旨在帮助校友推广自己的创业项目或创业相关活动等。
        <br>
        您可以在直接下面的输入框中输入需要推送的内容链接。
        <br>
        但如果文章篇幅较长，建议将内容发送至：meTorch@163.com。
        <br/>
<!--        创业帮扶要求的内容-->
        <textarea rows="10"  placeholder="具体内容……" name="bsn_requirements"></textarea>
        <div id="con_sub"><input id="submit" type="submit" name="submit" value="提      交"></div>
    </div>
</form>

</body>
</html>
