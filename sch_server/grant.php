<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2015/12/23
 * Time: 13:39
 */
//    $app_id = "wx001c62bef9841460";
//    $app_secret = "d62209d87c1c119b0285bcc53728fe19";
//    $access_token_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$app_id."&secret=".$app_secret."&code=".$_GET['code']."&grant_type=authorization_code";
//    $access_token_arr = json_decode(file_get_contents($access_token_url), true);
//    $refresh_url = "https://api.weixin.qq.com/sns/oauth2/refresh_token?appid=".$app_id."&grant_type=refresh_token&refresh_token=".$access_token_arr["refresh_token"];
//    $refresh_arr = json_decode(file_get_contents($refresh_url), true);
//    $userinfo_url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$refresh_arr["access_token"]."&openid=".$refresh_arr["openid"]."&lang=zh_CN";
//    $time = time();
//
//    $content = file_get_contents($userinfo_url);
//    $userinfo = json_decode(str_replace("\\","",$content), true);
//
//    require_once('../dbconnect.php');
//    $sql="select openid,tel from tb_*** where openid=".$userinfo[openid];          //根据数据库具体的表进行数据库查询openid以及联系方式
//    $result = mysql_query($sql);
//    $myquery=mysql_fetch_array($result);
    $myquery=array(0=>'aaa',1=>'65583485434','add'=>'ccc');//这条为测试代码。可以删除
    $result=true;//这条为测试代码。可以删除
    if($result){
        //查询得到数据就跳转到校友服务功能界面
        echo "<script language='javascript'>\n";
        echo "window.location.href='server_homepage.php?user_openid=".$myquery[0]."&user_tel=".$myquery[1]."'";//将信息统计表里的用户id以及用户联系方式传到下一个页面
        echo "</script>";
    }
    else{
        //没有查询到数据就跳转到信息统计界面
        echo "<script language='javascript'>\n";
        echo "window.location.href='../schoolmate/schoolmate-save.php?userinfo=".$content."'";
        echo "</script>";
    }


?>
