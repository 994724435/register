<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
	public function login(){
        if(IS_POST){
            $name = I('post.name');
            $pwd = I('post.pwd');
            if($name=='admin'&&$pwd=='123asd'){
                $_SESSION['name']='root';
                echo "<script>window.location.href='/register/index.php/Admin/Index/main';</script>";
            }else{
                    echo "<script>alert('用户名或密码不存在');";
                    echo "window.history.go(-1);";
                    echo "</script>";
                }
        }
        $this->display();
    }

    public function logOut(){
        session('login_state',null);
        cookie('is_login',null);
        echo "<script>window.location.href = '/register/index.php/Admin/User/login';</script>";
    }

}



 ?>