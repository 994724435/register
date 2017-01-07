/*
Navicat MySQL Data Transfer

Source Server         : 本地开发
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : dev

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-01-07 10:57:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `p_article`
-- ----------------------------
DROP TABLE IF EXISTS `p_article`;
CREATE TABLE `p_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `addtime` varchar(255) DEFAULT NULL,
  `isshow` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_article
-- ----------------------------
INSERT INTO `p_article` VALUES ('1', '欢迎词', '<table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"ke-zeroborder\" style=\"color:#333333;font-size:14px;text-align:justify;font-family:微软雅黑;background-color:#FFFFFF;\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"font-size:14px;font-family:微软雅黑;\">\r\n				<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"ke-zeroborder\" style=\"text-align:justify;font-size:14px;\">\r\n					<tbody>\r\n						<tr>\r\n							<td height=\"272\" style=\"font-size:14px;font-family:微软雅黑;\">\r\n								<p>\r\n									<span style=\"font-size:16px;\"><span style=\"font-size:14px;\"><strong>尊敬的各位专家、同行：你们好！</strong></span></span> \r\n								</p>\r\n								<p>\r\n									由长海医院血管外科主办的2016年国际腔内血管学大会将于2016年10月13日至15日在上海隆重召开。\r\n								</p>\r\n								<p>\r\n									本次大会力求搭建国际平台，展示前沿技术，激发热点讨论，演示精彩手术。\r\n								</p>\r\n								<p>\r\n									<strong>国际平台</strong>—自1997年首次举办以来，国际腔内血管学大会始终担负着将国际血管外科学的进展引入中国、向全球展示中国血管外科学的最新成就的使命。数年来经过各界的共同努力，本会已经逐渐发展成为贯穿纽约Veith论坛、迈阿密ISET大会、凤凰城ETC、伦敦Charing Cross、巴黎PCR、华盛顿TCD等国际会议链中不可或缺的重要一环。 2012年国际腔内血管学大会得到了来自世界各地的血管外科学及相关学科专家、学者的大力支持，包括中国、美国、英国、德国、法国、加拿大、韩国、澳大利亚、埃及等五大洲近40个国家800多名国内外血管专家及代表参加了此次会议。\r\n								</p>\r\n								<p>\r\n									由美国纽约大学Pr. Frank Veith领衔的国际国内著名的血管外科专家学者相继做了精彩的专题讲座。\r\n								</p>\r\n								<p>\r\n									<strong>前沿技术</strong>—本次大会的专家发言将重点围绕目前血管腔内手术的技术点，突出新（最新技术）、难（如何克服）、细（手术细节处理），以满足临床工作中的实际需要，使参会者有所收获。\r\n								</p>\r\n								<p>\r\n									<strong>热点讨论</strong>—本次大会除专题发言外，将会就某些热点问题给予充分的讨论时间，而且将聘请在相关领域的专家来组织讨论，并且配备现场翻译，使中外学者得到充分的交流。\r\n								</p>\r\n								<p>\r\n									<strong>手术演示</strong>—三天全程安排各种血管系统疾病治疗和世界前沿技术的卫星现场转播手术演示。手术将由中外专家共同参与，并与参会者实时交流。融先进的理论和尖端的技术为一体，是一场多角度视听的学术盛宴。\r\n								</p>\r\n								<p>\r\n									<br />\r\n								</p>\r\n								<div>\r\n									<span style=\"line-height:1.5;color:#333333;\"> </span><strong>基础培训</strong><span style=\"line-height:1.5;color:#333333;\">—大会将更加重视和强化基础诊疗以及临床操作的规范，努力为血管外科一线临床医生搭建一个优良的学习和交流平台。</span> \r\n								</div>\r\n								<div>\r\n									<span style=\"line-height:1.5;color:#333333;\">新增专场—在继续保留护理专场外，大会将新增下肢糖尿病足专场、老年血管病专场以及临床研究专场，为腔内血管学领域相关的其它学者提供更多交流的机会，拓展交流的空间。</span> \r\n								</div>\r\n								<p>\r\n									<br />\r\n								</p>\r\n								<p>\r\n									大会以英语为交流语言。为了使国内学者能够更容易地学习并参与现场交流，大会采用同声传译技术。希望语言不会成为代表们交流的障碍。\r\n								</p>\r\n								<p>\r\n									<br />\r\n								</p>\r\n								<div>\r\n									<span style=\"line-height:1.5;color:#333333;\"> 为了使青年医师学者有更多的参会机会，主治及主治医师以下的参会者免费注册，并给予一定的帮扶政策。我们希望有更多的青年医师学者能够参与到大会，并能得到与国内外知名专家充分交流的机会，为我国的腔内血管学发展培养更多年轻力量。</span> \r\n								</div>\r\n								<div>\r\n									<span style=\"line-height:1.5;color:#333333;\">让我们欢聚上海，竞技相长，共襄盛会！</span> \r\n								</div>\r\n								<p>\r\n									<br />\r\n								</p>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"font-size:14px;font-family:微软雅黑;\">\r\n				<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"ke-zeroborder\" style=\"text-align:justify;font-size:14px;\">\r\n					<tbody>\r\n						<tr>\r\n							<td style=\"font-size:14px;font-family:微软雅黑;\">\r\n								<blockquote>\r\n									<p style=\"text-align:left;\">\r\n										<img src=\"http://endovascology.org/webcn/kindeditor/attached/image/20160701/20160701134940904090.JPG\" width=\"180\" height=\"236\" alt=\"\" style=\"height:auto;\" /> \r\n									</p>\r\n								</blockquote>\r\n<img src=\"http://endovascology.org/webcn/kindeditor/attached/image/20150713/20150713173312421242.jpg\" width=\"200\" height=\"80\" alt=\"\" style=\"height:auto;\" /><br />\r\n								<p>\r\n									<strong>景在平教授</strong><br />\r\n<span style=\"line-height:1.5;\"><strong>国际腔内血管学大会组委会主席<br />\r\n</strong></span><strong>中国医师协会腔内血管学专委会主任委员<br />\r\n</strong><strong>《中国外科年鉴》主编<br />\r\n</strong><strong>全军血管外科研究所所长<br />\r\n</strong><strong>上海市血管系统疾病临床医学中心主任<br />\r\n</strong><strong>上海长海医院血管外科主任</strong> \r\n								</p>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2016-10-09 22:21:10', '1');
INSERT INTO `p_article` VALUES ('2', '会议信息', '<span><span style=\"font-size:16px;line-height:24px;\">123</span></span>', '2016-10-11 22:16:50', '1');
INSERT INTO `p_article` VALUES ('3', '大会征文', '1', null, null);
INSERT INTO `p_article` VALUES ('4', '酒店预订', '2', null, null);
INSERT INTO `p_article` VALUES ('5', '大会议程', '3', null, null);
INSERT INTO `p_article` VALUES ('6', '会址', '4', null, null);
INSERT INTO `p_article` VALUES ('7', '交通', '5', null, null);

-- ----------------------------
-- Table structure for `p_user`
-- ----------------------------
DROP TABLE IF EXISTS `p_user`;
CREATE TABLE `p_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `pingyin` varchar(255) DEFAULT NULL,
  `danwei` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `youbian` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `xuefen` int(2) DEFAULT NULL,
  `zhusu` int(2) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  `ispay` int(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_user
-- ----------------------------
INSERT INTO `p_user` VALUES ('4', '123', '123', '12121', '1211', '1221', '12121', '121', '1211', '12121', '2', '2', '1475833954', '1');
INSERT INTO `p_user` VALUES ('5', '12311', '19911', '12311', '1211', '1211', 'q211', '213111', '1211', '1888328764511', '1', '1', '2016-10-07 20:14:21', '0');
INSERT INTO `p_user` VALUES ('6', 'weqw', '123456', 'weqw', null, 'wqe', 'eqwe', 'wqerwq', '123', '18883287645', null, '1', '2016-10-07 22:16:27', '0');
INSERT INTO `p_user` VALUES ('7', '123', '123', '12121', '1211', '1221', '12121', '121', '1211', '12121', '2', '2', '2016-10-07 22:19:25', '0');
INSERT INTO `p_user` VALUES ('8', '123', '123', '12121', '1211', '1221', '12121', '121', '1211', '12121', '2', '2', '2016-10-07 22:20:59', '0');
INSERT INTO `p_user` VALUES ('9', '123567', '123', '', '', '', '', '', '', '', '1', '1', '2016-10-08 00:22:56', '0');
INSERT INTO `p_user` VALUES ('10', '234', '', '', '', '', '', '', '', '', '1', '1', '2016-10-08 00:26:21', '0');
INSERT INTO `p_user` VALUES ('11', '994724435@qq.com', '123456', 'lijai', 'sda', '重庆', 'web', '重庆', '123545', '18883287649', '1', '1', '2016-10-08 11:56:42', '1');
