<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0038)http://endovascology.org/m2016/reg.asp -->
<html><head>
    <div id='wx_pic' style='margin:0 auto;display:none;'>
        <img src='http://www.diaoch.cn/register/4.jpg' />
    </div>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>第一届中国脊柱疼痛介入和微创外科学术会议</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <link rel="stylesheet" type="text/css" href="/register/Public/Home/css/global.css">
        <link href="/register/Public/Home/css/register.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="/register/Public/Home/css/jquery-1.8.2.min.js"></script>
		
		<script language="javascript" src="/register/Public/Home/css/WdatePicker.js"></script>
        <link href="/register/Public/Home/css/WdatePicker.css" rel="stylesheet" type="text/css">
        <script language="javascript" src="/register/Public/Home/css/workclass.js"></script>
        <script type="text/javascript">
            function checkform(myform)
            {
    //             if (myform.txt_Mobile.value == "") {
    //                 alert("请输入手机号码！");
    //                 return false;
    //             }
				// var reg=/^1[0-9]{10}/;
				// if(!reg.test(myform.txt_Mobile.value)){
				// 	alert("请正确填写手机号！");
				// 	myform.txt_Mobile.setfouce;
    //                 return false;
				// }
                if (myform.txt_Email.value == "") {
                    alert("请输入Email！");
                    return false;
                }
                if (myform.txt_Password.value == "") {
                    alert("请输入密码！");
                    return false;
                }
//                if (myform.txt_Password.value != myform.txt_Password2.value) {
//                    alert("两次密码输入不一致！");
//                    return false;
//                }
                if (myform.txt_UserName.value == '') {
                    alert('请输入姓名！');
                    return false
                }
                if (myform.txt_Zhicheng.value == "") {
                    alert("请输入职务/职称！");
                    return false;
                }
                // if (myform.txt_Danwei.value == "") {
                //     alert("请输入单位！");
                //     return false;
                // }
                /*if (myform.txt_Address.value == "") {
                    alert("请输入地址！");
                    return false;
                }
                if (myform.txt_Yb.value == "") {
                    alert("请输入邮编！");
                    return false;
                }
                if (myform.txt_Tel.value == "") {
                    alert("请输入电话！");
                    return false;
                }
                if (myform.txt_Keshi.value == "") {
                    alert("请输入科室！");
                    return false;
                }
                if (myform.txt_Hotel_name.value != "0") {
					if (myform.txt_Hotel_class.value == "0") {
						alert("请选择房型！");
						return false;
					}
                }*/
            }
            function addWxContact ()
            {
                if (typeof WeixinJSBridge == 'undefined') return false;
                WeixinJSBridge.invoke('addContact', {
                    webtype: '1',
                    username: 'gh_a7ee06e7e291'
                }, function(d) {
                    // 返回d.err_msg取值，d还有一个属性是err_desc
                    // add_contact:cancel 用户取消
                    // add_contact:fail　关注失败
                    // add_contact:ok 关注成功
                    // add_contact:added 已经关注
                    WeixinJSBridge.log(d.err_msg);
                });
            };
</script>
<script> 
$(document).ready(function(){
$("#isyes").click(function(){
	 $(this).addClass("red");
	 $("#isno").removeClass("red");
	 $("#sfz").show();
  });
$("#isno").click(function(){
	 $(this).addClass("red");
	 $("#isyes").removeClass("red");
	 $("#sfz").hide();
	 $("#sfzhm").val("");
  });
});
</script>
<style type="text/css">
	.registernow{
	display: block;width: 48%; text-align: center;color: #fff;background: #233E7F;height: 3em;line-height: 3em;border-radius: 0.3em;text-align: center;color: #fff;float: left;margin-left: 5px;
	}
    .top{width: 100%;height:58px;background: #254698;text-align: center;margin-top: -5px;}
    .top img{width: 100%;margin-top: 10px;}
    .Logo {text-align:center; width:100%;margin-bottom:10px;}
    .Logo img{width: 100%;height: 140px}
    .back{width: 100%;overflow: hidden;border-top: #990101 2px solid;margin-top: 10px;text-align: center;}
    .back img{height: 30px;margin-top: 6px;margin-right: 5px;}
    .back span{font-size: 28px;font-weight: bold;text-underline: none;}
    .back a{text-decoration: none;}
</style>
      <div id='wx_pic' style='margin:0 auto;display:none;'>
        <img src='http://www.diaoch.cn/register/4.jpg' />
    </div>
    </head>
    <body>
    <div class="top"><IMG src="/register/Public/Home/images/logo9.jpg"></div>
    <div class="Logo"><IMG src="/register/Public/Home/images/logo.jpg"></div>
        <div> 
           <form action="/register/index.php/Home/Index/user" method="POST" name="myform" id="myform" onsubmit="return checkform(this)">
                <div class="register_title">个人信息修改</div>
                <form action="" method="post" enctype="multipart/form-data">
                <section id="register">
                    <div>
                        <span><img src="/register/Public/Home/css/png_email.png" width="24" height="24"></span>
                        <input id="txt_Email" name="email1" type="text" value="<?php echo ($user["email"]); ?>" disabled="disabled">
                        <input type="hidden" name="email" value="<?php echo ($user["email"]); ?>">
                    </div>
                    <div>
                        <span><img src="/register/Public/Home/css/png_password.png" width="24" height="24"></span>
                        <input id="txt_Password" name="pwd1" type="password" value="<?php echo ($user["password"]); ?>" placeholder="密码（6～16个字符）">
                    </div>
                    <div>
                        <span><img src="/register/Public/Home/css/png_username.png" width="24" height="24"></span>
                        <input id="txt_UserName" name="name" type="text" value="<?php echo ($user["name"]); ?>" placeholder="姓名">
                    </div>
                    <div>
                        <span><img src="/register/Public/Home/css/png_danwei.png" width="24" height="24"></span>
                        <input id="txt_Danwei" name="pinying" type="text" value="<?php echo ($user["pingyin"]); ?>" placeholder="请填写拼音">
                    </div>
                    <div>
                        <span><img src="/register/Public/Home/css/png_danwei.png" width="24" height="24"></span>
                        <input id="txt_Danwei" name="danwei" type="text" value="<?php echo ($user["danwei"]); ?>" placeholder="请填写单位">
                    </div>
                    <div>
                        <span><img src="/register/Public/Home/css/png_zhicheng.png" width="24" height="24"></span>
                        <input id="txt_Zhicheng" name="job" type="text" value="<?php echo ($user["job"]); ?>" placeholder="请填写职称">
                    </div>
                    <div>
                        <span><img src="/register/Public/Home/css/png_address.png" width="24" height="24"></span>
                        <input id="txt_Address" name="address" type="text" value="<?php echo ($user["address"]); ?>" placeholder="请填写地址">
                    </div>
                    <div>
                        <span><img src="/register/Public/Home/css/png_yb.png" width="24" height="24"></span>
                        <input id="txt_Yb" name="youbian" type="text" value="<?php echo ($user["youbian"]); ?>" placeholder="请填写邮编">
                    </div>
 					<div>
                        <span><img src="/register/Public/Home/css/png_tel.png" width="24" height="24"></span>
                        <input id="txt_Mobile" name="phone" type="text" value="<?php echo ($user["phone"]); ?>" placeholder="手机号码，请正确填写，注册后不能更改！">
                    </div>
                    <div>
                        <span><img src="/register/Public/Home/css/png_sex.png" width="24" height="24"></span>
                        <select id="xueli" name="xuefen">
                            <option value="<?php echo ($user["xuefen"]); ?>"><?php if($user['xuefen']==1){echo '需要学分';}else{echo '不需要学分';} ?></option>
						<option value="1">需要学分</option>
						<option value="2">不需要学分</option>
						</select>
                    </div>
					<div>
                        <span><img src="/register/Public/Home/css/png_sex.png" width="24" height="24"></span>
                        <select id="xueli" name="zhusu">
                            <option value="<?php echo ($user["zhusu"]); ?>"><?php if($user['zhusu']==1){echo '需要住宿';}else{echo '不需要住宿';} ?></option>
						<option value="1">需要住宿</option>
						<option value="2">不需要住宿</option>
						</select>
                    </div>
                    <div>
                        <span><img src="/register/Public/Home/css/png_danwei.png" width="24" height="24"></span>
                        <input id="txt_Danwei" name="fapiao" value="<?php echo ($user["fapiao"]); ?>" type="text" placeholder="请填写发票抬头">
                    </div>
                    <input type="submit" value="修 改" class="registernow">
                    <a href="/register/index.php/Home/Index/successuser/email/<?php echo $_GET['email']; ?>" class="registernow">查看支付状态</a>
                    <br><br>

                    </form>
                </section>
            </form>
        </div>
    <div class="back">
        <!--<a href="#" onclick="addWxContact()">关注</a>-->
        <a href="/register/index.php/Home/Index/paytype/email/<?php echo $_GET['email']; ?>"><span>返回个人中心</span></a>
    </div>
<!--         
        <footer>
            <div id="loginstate">
                <a href="/index.php/member/login">登录</a><a href="/index.php/member/register">注册</a><span id="toTop">↑ TOP</span></div> 
    <p><a href="#" onClick="setMobileCookie()">电脑版</a>|<a href="index.html" target="_blank">客户端</a>
     |<a href="about.html">关于复医</a><p>
            <p>&copy;2014 Fumed.Com.Cn All Rights Reserved</p>
        </footer>
          -->
    

</body></html>