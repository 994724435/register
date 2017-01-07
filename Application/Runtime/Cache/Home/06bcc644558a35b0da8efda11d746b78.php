<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>第一届中国脊柱疼痛介入和微创外科学术会议微官网上线咯，欢迎大家围观注册！</title>
    <meta name="keywords" content=""/>
    <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
    <meta name=viewport content="width=device-width, minimum-scale=1.0">
    <link href="/register/Public/Home/home/base.css" rel="stylesheet" type="text/css">
    <link media="screen and (max-device-width:350px) " rel="stylesheet" href="/register/Public/Home/home/css.css" />
    <link media="screen and (min-device-width:350px) and (max-device-width:413px)" rel="stylesheet" href="/register/Public/Home/home/css1.css" />
    <link media="screen and (min-device-width:412px) and (max-device-width:900px)" rel="stylesheet" href="/register/Public/Home/home/css2.css" />
    <!--<link href="/register/Public/Home/home/css.css" rel="stylesheet" type="text/css" />-->
    <!--<link media="screen and (min-device-width:350px) and (max-device-width:363px)" rel="stylesheet" href="/register/Public/Home/home/css1.css" />-->
    <!--<link media="screen and (min-device-width:364px) and (max-device-width:413px)" rel="stylesheet" href="/register/Public/Home/home/css3.css" />-->
    <!--<link media="screen and (min-device-width:412px) and (max-device-width:900px)" rel="stylesheet" href="/register/Public/Home/home/css2.css" />-->
    <div id='wx_pic' style='margin:0 auto;display:none;'>
        <img src='http://www.diaoch.cn/register/4.jpg' />
    </div>
</head>
<body style="background-color: #ffffff;">
<div class="top"><IMG src="/register/Public/Home/images/logo9.jpg"></div>
<div class="Logo"><IMG src="/register/Public/Home/images/logo.jpg"></div>
<div class="content">
    <!--<h1><?php echo ($article["title"]); ?></h1>-->
    <p>
        <?php
 $str =stripslashes($article['content']); echo htmlspecialchars_decode($str); ?>
    </p>
</div>
<div class="back">
    <a href="/register/index.php/Home/Article/index"><img src="/register/Public/Home/images/back.jpg" alt=""><span>返回</span></a>
</div>
<div class=footer>
    <p>All Rights Reserved</p>
</div>
</body>
</html>