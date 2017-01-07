<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
		// 所有方法调用之前，先执行
	public function _initialize(){
		if(!$_SESSION['name']){
			echo "<script>alert('请登录');";
	            echo "window.location.href='/register/index.php/Admin/User/login';";
	            echo "</script>";
				exit;
		}
		$this->assign('name',$_SESSION['name']);
	}
}