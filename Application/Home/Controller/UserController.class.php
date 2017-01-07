<?php

namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class UserController extends Controller {

	public function login(){
		if($_POST){
			$email= $_POST['email'];
			$password= $_POST['pwd'];
			$userobj=M('user');
//		    print_r($_POST);die;
			$res1= $userobj->where(array('email'=>$email))->select();
			if($res1[0]['password']==$password){
				session_start();
//				session('email',$email);
				$_SESSION['email'] = $email;
//				print_r($res1);
//				print_r(session('email'));die;
				echo "<script>window.location.href='/register/index.php/Home/Index/paytype';</script>";
				exit();
			}else{
				echo "<script>alert('登录失败');window.location.href='/register/index.php/Home/Index/login';</script>";
				exit();
			}
		}
		$this->display();
	}

	public function index(){
		if ($_POST) {
			$user = M('user');
			$data['email'] = $_POST['email'];
			$data['password'] =$_POST['pwd1'];
			$data['name']   = $_POST['name'];
			$data['pingyin']  = $_POST['pinying'];
			$data['danwei']   = $_POST['danwei'];
			$data['job']      = $_POST['job'];
			$data['address']  = $_POST['address'];
			$data['youbian']  = $_POST['youbian'];
			$data['phone']    = $_POST['phone'];
			$data['xuefen']   = $_POST['xuefen'];
			$data['zhusu']    = $_POST['zhusu'];
			$data['addtime']  = date('Y-m-d H:i:s',time());
			$user_res= $user->where(array('email'=>$_POST['email']))->select();
			if($user_res[0]['id']){
				echo "<script>alert('用户名已存在！请登录');window.location.href='/register/index.php/Home/Index/login';</script>";
			}else{
				$res= $user->add($data);
				if($res){
					session('email',$_POST['email']);
					session('id',$res);
					$content = '登录用户名：'.$_POST['email'].'登录密码：'.$_POST['pwd1'];
					sendMail($_POST['email'],'注册成功！',$content);
					echo "<script>alert('注册成功');window.location.href='/register/index.php/Home/Index/paytype';</script>";
					exit();
				}else{
					echo "<script>alert('注册失败');window.location.href='/register/index.php/Home/Index/index';</script>";
					exit();
				}
			}

		}
		$this->display();
	}

	public function logout(){
		session(null);
		echo "<script>window.location.href='/index.php/Home/Index/index';</script>";
	}



}