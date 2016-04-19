<?php
	$subtime =intval(time())-intval($_GET['time']);
    if($subtime>1){
		$authorize_url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx001c62bef9841460&redirect_uri=grant.php&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect";
		header("location: " . $authorize_url);
	}
?>