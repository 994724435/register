<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function _initialize(){
		    if(session('email')){
				$this->assign('email',session('email'));
			}
		    if($_SESSION['name']){
//				$_SESSION['name'] = $_SESSION['name'];
//				echo $_SESSION['name'];
			}
	}

}