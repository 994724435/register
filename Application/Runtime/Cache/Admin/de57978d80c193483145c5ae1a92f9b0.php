<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="/register/Public/Admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/register/Public/Admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="/register/Public/Admin/css/lines.css" rel='stylesheet' type='text/css' />
<link href="/register/Public/Admin/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="/register/Public/Admin/js/jquery.min.js"></script>
<link href="/register/Public/Admin/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/register/Public/Admin/js/metisMenu.min.js"></script>
<script src="/register/Public/Admin/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="/register/Public/Admin/js/d3.v3.js"></script>
<script src="/register/Public/Admin/js/rickshaw.js"></script>
   <script src="/register/Public/Admin/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">当前登录员：<font color=red><?php echo ($name); ?></font></a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
        
      </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw nav_icon"></i>管理员列表</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>注册管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/register/index.php/Admin/Index/useradd">添加用户</a>
                                </li>
                                <li>
                                    <a href="/register/index.php/Admin/Index/userlist">用户列表</a>
                                </li>
                                <li>
                                    <a href="/register/index.php/Admin/Index/out">导出excel</a>
                                </li>
                            </ul>                         
                        </li>
                       <!--  <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>结果管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                  <li>
                                    <a href="/register/admin.php/Admin/record">结果列表</a>
                                </li>
                            
                            </ul>                         
                        </li> -->
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>文章管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/register/index.php/Admin/Article/index">文章列表</a>
                                </li>

                            </ul>
                        </li>
                          <li>
                            <a href="/register/index.php/admin/User/logOut"><i class="fa fa-flask fa-fw nav_icon"></i>退出系统</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3>注册用户</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">邮箱(用户名)</label>
									<div class="col-sm-8">
										<input type="text" name="email" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">密码</label>
									<div class="col-sm-8">
										<input type="password" name="psd1" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div> 
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">确认密码</label>
									<div class="col-sm-8">
										<input type="password" name="psd2" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div> 
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">姓名</label>
									<div class="col-sm-8">
										<input type="input" name="name" class="form-control1" id="inputPassword" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">拼音</label>
									<div class="col-sm-8">
										<input type="input" name="pingyin" class="form-control1" id="inputPassword" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">单位</label>
									<div class="col-sm-8">
										<input type="input" name="danwei" class="form-control1" id="inputPassword" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">职称</label>
									<div class="col-sm-8">
										<input type="input" name="job" class="form-control1" id="inputPassword" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">地址</label>
									<div class="col-sm-8">
										<input type="input" name="address" class="form-control1" id="inputPassword" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">邮编</label>
									<div class="col-sm-8">
										<input type="input" name="youbian" class="form-control1" id="inputPassword" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">电话</label>
									<div class="col-sm-8">
										<input type="input" name="phone" class="form-control1" id="inputPassword" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">是否需要学分</label>
									<div class="col-sm-8">
									        <select class="form-control1" name="xuefen">
								                  <option value="1">需要</option>
								                  <option value="2">不需要</option>
								      
								          </select>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">是否需要住宿</label>
									<div class="col-sm-8">
									        <select class="form-control1" name="zhusu">
								                  <option value="1">需要</option>
								                  <option value="2">不需要</option>
								      
								          </select>
									</div>
								</div>														    
							      <div class="panel-footer">
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<button class="btn-success btn">Submit</button>
										</div>
									</div>
								 </div>
								
								
							</form>
						</div>
					</div>

 
	
  </div>
  <div class="copy_layout">
      <p>Copyright &copy; 2016 name All rights reserved.</p>
  </div>
  </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="/register/Public/admin/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/register/Public/admin/js/metisMenu.min.js"></script>
<script src="/register/Public/admin/js/custom.js"></script>
 <script src="/register/Public/admin/js/bootstrap.min.js"></script>
</body>
</html>