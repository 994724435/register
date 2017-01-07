<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class IndexController extends CommonController {
	public function _initialize()
	{
		//引入WxPayPubHelper
		vendor('Weixinpay.WxPayPubHelper');
	}
    public function send(){
		print_r(sendMail('994724435@qq.com','你好!邮件标题','这是一款测试邮件正文！'));die;
        if(sendMail('994724435@qq.com','你好!邮件标题','这是一款测试邮件正文！')){
            echo '发送成功！';
        }
        else{
            echo '发送失败！';
        }
    }

	public function index1(){
		if($this->SendMail('994724435@qq.com','123','test email by postbird!')){
			echo 1;
		}
	}

function sendMail($to, $subject, $content) {
    vendor('PHPMailer.class#smtp');
    vendor('PHPMailer.class#phpmailer');
    $mail = new PHPMailer();
    // 装配邮件服务器
    if (C('MAIL_SMTP')) {
        $mail->IsSMTP();
    }
    $mail->Host = C('MAIL_HOST');
    $mail->SMTPAuth = C('MAIL_SMTPAUTH');
    $mail->Username = C('MAIL_USERNAME');
    $mail->Password = C('MAIL_PASSWORD');
    $mail->SMTPSecure = C('MAIL_SECURE');
    $mail->CharSet = C('MAIL_CHARSET');
    // 装配邮件头信息
    $mail->From = C('MAIL_USERNAME');
    $mail->AddAddress($to);
    $mail->FromName = C('MAIL_FROMNAME');
    $mail->IsHTML(C('MAIL_ISHTML'));
    // 装配邮件正文信息
    $mail->Subject = $subject;
    $mail->Body = $content;
    // 发送邮件
    if (!$mail->Send()) {
        return FALSE;
    } else {
        return TRUE;
    }
}

	/**
	 * 微信 公众号jssdk支付
	 */
//	public function weixinpay_js(){
//		// 此处根据实际业务情况生成订单 然后拿着订单去支付
//
//		// 用时间戳虚拟一个订单号  （请根据实际业务更改）
//		$out_trade_no=time();
//		// 组合url
//		$url=U('Api/Weixinpay/pay',array('out_trade_no'=>$out_trade_no));
//		// 前往支付
//		redirect($url);
//	}

	public function notify(){
		/**
		 * notify_url接收页面
		 */
		$email = $_GET['email'];
		if(empty($_GET['email'])||empty($_GET['type'])){
			echo "<script>alert('微信支付回调失败，请联系管理员');</script>";exit();
		}
		$user = M('user');
		$result = $user->where(array('email'=>$_GET['email']))->save(array('ispay'=>1,'paytype'=>$_GET['type']));
		if($result){
			echo "<script>window.location.href='/register/index.php/Home/Index/paysuccess/email/{$email}';</script>";
		}else{
			echo "<script>alert('您已经支付过了，请联系管理员');window.location.href='/register/index.php/Home/Index/paytype';</script>";
		}

	}

	public function pay(){
		if(session('email')){
			$user = M('user');
			$res_user = $user->where(array('email'=>session('email')))->select();
			$pay = $res_user[0]['ispay'];
		}

//		print_r($_REQUEST);
		$jsApi = new \JsApi_pub();
		$code = $_GET['code'];
		$jsApi->setCode($code);
		$openid = $jsApi->getOpenId();//openid
		$NOTIFY_URL="www.diaoch.cn/register/index.php/Home/Index/notify";
		//使用统一支付接口
//		echo $openid;
		$unifiedOrder = new \UnifiedOrder_pub();
		$unifiedOrder->setParameter("openid",$openid);//openid
		$unifiedOrder->setParameter("body",'商品的名字');//商品描述
		$trad_no = date('ymd',time());
		$unifiedOrder->setParameter("out_trade_no", $trad_no.rand(1,30000));//商户订单号
		$unifiedOrder->setParameter("total_fee",1*100);//总金额 微信的钱1*100等于1
		$unifiedOrder->setParameter("notify_url",$NOTIFY_URL);//通知地址
		$unifiedOrder->setParameter("trade_type","JSAPI");//交易类型
		print_r($unifiedOrder);
		$prepay_id = $unifiedOrder->getPrepayId();
		print_r('****'.$prepay_id);
		//=========步骤3：使用jsapi调起支付============
		$jsApi->setPrepayId($unifiedOrder);
		$jsApi->prepay_id = $prepay_id;

		if(!$prepay_id){
			$result = $unifiedOrder->result;
			$error_message =$result['err_code_des'];
			echo $error_message;
			echo "<script>alert('{$error_message}');window.location.href='/register/index.php/Home/Index/paytype';</script>";
		}
		$jsApiParameters = $jsApi->getParameters();
//		print_r($jsApiParameters);
		$WEB_HOST=' http://www.diaoch.cn';//填写的话 如 http://nicaicai.imwork.net 最后面不用加 /
		$this->assign('HOSTS',$WEB_HOST);
		$this->assign('jsApiParameters',$jsApiParameters);
		$this->display();
//		print_r($openid);die;
	}

	public function paytype(){
		$user = M('user');
		$email =$_GET['email'];
		if($email){
			$res_user = $user->where(array('email'=>$email))->select();
			$pay = $res_user[0]['ispay'];
		}

		if($_POST){   # 支付
			$type = $_POST['pay'];
//			$email =session('email');
//			$email =$_GET['email'];
			$res_user = $user->where(array('email'=>$email))->select();
			$uid = $res_user[0]['id'];
//			$url ="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxd23854d562b8d4bc&redirect_uri=http://www.diaoch.cn/register/index.php/Home/Index/pay&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect";
			$url ="http://www.diaoch.cn/pay/example/jsapi.php?type=$type&email=$email&uid=$uid";
			echo "<script language=\"javascript\">";
			echo "location.href=\"$url\"";
			echo "</script>";
		}
		if($pay==0){
			$this->display();
		}else{
			$this->assign('name',$res_user[0]['name']);
			$this->assign('userid',$res_user[0]['id']);
			$this->assign('email',$email);
			$this->display('usercenter');
		}

	}

	public function successuser(){
		$user = M('user');
		$email =$_GET['email'];
		$res_user = $user->where(array('email'=>$email))->select();
		if($res_user[0]['paytype']==400){
			$message = '在校学生代表400元(现场报到需提供有效身份证明)';
		}else{
			$message = '普通代表800元';
		}
		$this->assign('message',$message);
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
			$data['fapiao']   =$_POST['fapiao'];
            $data['addtime']  = date('Y-m-d H:i:s',time());
            $user_res= $user->where(array('email'=>$_POST['email']))->select();
            if($user_res[0]['id']){
 echo "<script>alert('用户名已存在！请登录');window.location.href='/register/index.php/Home/Index/login';</script>";
            }else{
            	$res= $user->add($data);
				if($res){
					session('email',$_POST['email']);
					session('id',$res);
					$content = '******本邮件为系统邮件，请勿回复******<br><br>'.$_POST['name'].'老师，'.'&nbsp;&nbsp;您好！<br>'.'&nbsp;&nbsp;恭喜您成为第一届中国脊柱疼痛介入和微创外科学术会议注册会员，请您收到此邮件后，尽快登录网站进行注册缴费。缴费成功后，请于参会注册日提供有效身份证明，完成现场注册报到。<br>'.'您好！<br>&nbsp;&nbsp;您在第一届中国脊柱疼痛介入和微创外科学术会议注册用的邮箱地址是：'.$_POST['email'].'。登录密码：'.$_POST['pwd1'].'官网地址：http://www.zgjztt.com/'.'<br><br>感谢您的访问及注册，祝您使用愉快！'.'<br><br><br>此致'.'<br>第一届中国脊柱疼痛介入和微创外科学术会议管理团队.'.'<br>会务咨询'.'<br>联系人：李先生'.'<br>联系电话：17740800901'.'<br>邮箱：ericli@shgeenam.com';
					sendMail($_POST['email'],'注册成功！',$content);
					$email =$_POST['email'];
					echo "<script>alert('注册成功');window.location.href='/register/index.php/Home/Index/paytype/email/{$email}';</script>";
					exit();
				}else{
					echo "<script>alert('注册失败');window.location.href='/register/index.php/Home/Index/index';</script>";
					exit();
				}
            }
            
			}	
		$this->display();
	}

public function login(){
	if($_POST['email']&&$_POST['pwd']){
			$email= $_POST['email'];
			$password= $_POST['pwd'];
		    if(!isset($email)||!isset($password)){
				echo "<script>alert('登录失败');window.location.href='/register/index.php/Home/Index/login';</script>";
				exit();
			}
			$userobj=M('user');
			$res1= $userobj->where(array('email'=>$email))->select();
		    if($res1[0]['password']==$password){
				session_start();
				session('email',$email);
				echo "<script>window.location.href='/register/index.php/Home/Index/paytype/email/{$email}';</script>";
				exit();
			}else{
				echo "<script>alert('登录失败');window.location.href='/register/index.php/Home/Index/login';</script>";
				exit();
			}
	}
    $this->display();
}

	public function user(){
		$user = M('user');
		$_SESSION['name'] =$_GET['email'];
		if($_POST['email']){
			$data['email'] = $_POST['email'];
			$email = $_POST['email'];
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
			$data['fapiao']   =$_POST['fapiao'];
			$result = $user->where(array('email'=>$_POST['email']))->save($data);
			if($result){
				echo "<script>alert('修改成功');window.location.href='/register/index.php/Home/Index/user/email/{$email}';</script>";
				exit();
			}else{
				echo "<script>alert('修改失败');window.location.href='/register/index.php/Home/Index/user/email/{$email}';</script>";
				exit();
			}
		}
		$user_res =$user->where(array('email'=>$_GET['email']))->select();
		$this->assign('user',$user_res[0]);
		$this->display();
	}
}