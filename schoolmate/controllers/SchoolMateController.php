<?php 
	require_once('BaseController.php');
	require_once('../dao/SchoolMateDao.php');
	class SchoolMateController extends BaseController {
		
		public function __construct() {
			parent:: __construct(new SchoolMateDao());
		}
		
		public function save($model) {
			parent::save($model);
			header("location: ../advice-make.php?mate_openid=". $model['mate_openid']);
		}
	}
?>