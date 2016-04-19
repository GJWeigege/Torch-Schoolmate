<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2015/12/7
 * Time: 9:19
 */
//    echo $userinfo['openid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>在校证明材料</title>
    <link href="css/meterial.css" rel="stylesheet" type="text/css">
    <script src="jss/jquery-2.1.4.min.js"></script>
    <script>
        $(function(){
            $("#submit").bind("click",function(){
                //点击按钮之后检验输入是否为空
                //设置变量，利用循环语句检验input标签是否为空
                var input_index =3;
                while (input_index<7){
                    //循环判断是否为空
                    if ($("input:eq("+input_index+")").val()==""){
                        $("input:eq("+input_index+")").focus();
                        return false;
                    }
                    input_index++;          //索引自增
                }
                //检验材料是否输入为空
                if($("#material").val()==""){
                    $("#material").focus();
                    return false;
                }
                return true;
            });
        });
    </script>
</head>
<body>
<div id="container">
<!--    以下为输入表单-->
    <form action="../sql_controllers.php?" method="post">
        <input name="frm" type="hidden" value="frm_material">
        <input name="openid" type="hidden" value="<?php echo $_GET['user_openid']; ?>"/><br/>           <!--读取用户的openid-->
        <input name="tel" hidden value="<?php echo $_GET['user_tel']?>">
        姓&nbsp;&nbsp;&nbsp;名：<input name="name" type="text"><br/>
        辅导员：<input name="teacher_name" type="text"><br/>
        为了确认您的身份，请输入两个大学同学的姓名：
        <br/>
        <input id="schoolmate1" name="sch_mate_name1" type="text" >
        <input id="schoolmate2" name="sch_mate_name2" type="text" >
        <br/>
<!--        校友需要的具体证明材料-->
        材料详情：
        <textarea rows="10" id="material" placeholder="填写你所需要的材料，比如党员证明材料或学历证明材料……" name="material"></textarea>
        <br/>
        <div id="con_sub"><input id="submit" name="submit" type="submit" value="提      交"></div>
    </form>
</div>
</body>
</html>
