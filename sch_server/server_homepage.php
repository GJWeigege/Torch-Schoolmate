<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2015/12/23
 * Time: 12:16
 */
//    require_once('../grant.php');         //获取用户的微信信息
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>校内服务</title>
    <link href="css/home_page.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="contain">
    <div id="logo_image">               <!--校友会图标-->
        <img src="images/me.png"></div>
    <div id="but_ton">              <!--下层按钮-->
        <input value="在校证明材料" type="button" onClick="window.open('sch_material.php?user_openid=<?php echo $_GET['user_openid'];?>&user_tel=<?php echo $_GET['user_tel']?>')"><br/>
<!--        跳转到证明材料页面-->
        <input value="短期兼职发布" type="button" onClick="window.open('part_time_job.php?user_openid=<?php echo $_GET['user_openid'];?>')"><br/>
        <!--跳转到兼职发布页面-->
<!--        <input value="纪念品购买" type="button" onClick="window.open('sch_souvenir.php?userinfo=')">-->
        <!--跳转到纪念品购买页面-->
    </div>
</div>
</body>
</html>
