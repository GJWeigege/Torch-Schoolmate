<?php
      
	$app_id = "wx001c62bef9841460";
    $app_secret = "d62209d87c1c119b0285bcc53728fe19";
	
        if($_GET['code']){
                $access_token_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$app_id."&secret=".$app_secret."&code=".$_GET['code']."&grant_type=authorization_code";
                $access_token_arr = json_decode(file_get_contents($access_token_url), true);
                $refresh_url = "https://api.weixin.qq.com/sns/oauth2/refresh_token?appid=".$app_id."&grant_type=refresh_token&refresh_token=".$access_token_arr["refresh_token"];
                $refresh_arr = json_decode(file_get_contents($refresh_url), true);
                $userinfo_url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$refresh_arr["access_token"]."&openid=".$refresh_arr["openid"]."&lang=zh_CN";
                $time = time();

				require_once('dao/SchoolMateDao.php');
				$content = file_get_contents($userinfo_url);
				$userinfo = json_decode(str_replace("\\","",$content), true);
				$schoolMateDao = new SchoolMateDao();
				$model = $schoolMateDao -> find(array('mate_openid' => $userinfo['openid']));
				
				if(count($model) == 0)
					$goto_url = "schoolmate-save.php?userinfo=".$content;
				else
					$goto_url = "advice-make.php?mate_openid=".$userinfo['openid'];

                header("location: " . $goto_url);
        }

?>