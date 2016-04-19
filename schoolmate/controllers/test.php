<?php 
	require('../dao/SchoolMateDao.php');
	header("content-Type: text/html; charset = utf-8 ");
	$model = array('mate_openid' => 'q');
	
	$schoolMateDao = new SchoolMateDao();
	
	$result = $schoolMateDao -> find($model);
	echo count($result) == 0;
	
	
?>