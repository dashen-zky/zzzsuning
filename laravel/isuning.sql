/*
Navicat MySQL Data Transfer

Source Server         : isuning
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : isuning

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-07-16 21:28:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for brands
-- ----------------------------
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键自增id',
  `cate_id` int(11) NOT NULL COMMENT '外键 商品分类id',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '品牌的名称',
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '品牌的图片',
  `status` tinyint(4) NOT NULL COMMENT '品牌的状态',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of brands
-- ----------------------------
INSERT INTO `brands` VALUES ('4', '27', 'fg发的', '/uploads/20160716/1468660444792303.jpg', '0', '2016-07-16 17:14:04', '2016-07-16 17:38:00');
INSERT INTO `brands` VALUES ('5', '28', '袜子', '/uploads/20160716/1468672111579058.jpg', '1', '2016-07-16 17:27:41', '2016-07-16 20:28:31');
INSERT INTO `brands` VALUES ('7', '30', '华为', '/uploads/20160716/1468672040130047.png', '0', '2016-07-16 20:26:56', '2016-07-16 20:27:20');
INSERT INTO `brands` VALUES ('8', '30', '该法是德国', '', '0', '2016-07-16 20:54:13', '2016-07-16 20:54:13');
INSERT INTO `brands` VALUES ('9', '30', 'fgets', '', '0', '2016-07-16 20:54:34', '2016-07-16 20:54:34');
INSERT INTO `brands` VALUES ('10', '29', '非法打工s', '', '0', '2016-07-16 20:54:45', '2016-07-16 20:54:45');
INSERT INTO `brands` VALUES ('11', '28', '该法是德国是', '', '0', '2016-07-16 20:54:52', '2016-07-16 20:54:52');
INSERT INTO `brands` VALUES ('12', '28', '佛挡杀佛', '', '0', '2016-07-16 20:55:02', '2016-07-16 20:55:02');
INSERT INTO `brands` VALUES ('13', '27', '付大哥是大法官', '', '0', '2016-07-16 20:55:24', '2016-07-16 20:55:24');
INSERT INTO `brands` VALUES ('14', '28', '发的所发生的', '', '0', '2016-07-16 20:55:30', '2016-07-16 20:55:30');
INSERT INTO `brands` VALUES ('15', '29', '范德萨发生', '', '0', '2016-07-16 20:55:46', '2016-07-16 20:55:46');

-- ----------------------------
-- Table structure for cates
-- ----------------------------
DROP TABLE IF EXISTS `cates`;
CREATE TABLE `cates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL COMMENT '分类名',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父类id',
  `path` char(50) NOT NULL DEFAULT '0' COMMENT '保存路径',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '分类状态 0 表示正常 1表示缺货 2 下线',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cates
-- ----------------------------
INSERT INTO `cates` VALUES ('27', '防守打法', '26', '0,26', '0');
INSERT INTO `cates` VALUES ('28', '东方闪电', '0', '0', '0');
INSERT INTO `cates` VALUES ('29', '发多少', '26', '0,26', '0');
INSERT INTO `cates` VALUES ('30', '手机', '0', '0', '1');

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键自增id',
  `type_id` int(11) NOT NULL COMMENT '外键 商品类别id',
  `cate_id` int(11) NOT NULL COMMENT '外键 商品分类id',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品的名称',
  `intro` text COLLATE utf8_unicode_ci NOT NULL COMMENT '商品的简介',
  `price` decimal(10,2) NOT NULL COMMENT '商品的价格',
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品的主图',
  `status` tinyint(4) NOT NULL COMMENT '商品的状态',
  `conntent` text COLLATE utf8_unicode_ci NOT NULL COMMENT '商品的内容',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of goods
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2016_07_13_151630_create_articles_table', '1');
INSERT INTO `migrations` VALUES ('2016_07_15_160836_create_types_table', '1');
INSERT INTO `migrations` VALUES ('2016_07_15_215913_create_Goods_table', '1');
INSERT INTO `migrations` VALUES ('2016_07_15_223643_create_Brands_table', '1');

-- ----------------------------
-- Table structure for types
-- ----------------------------
DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键自增id',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '类型的名称',
  `status` tinyint(4) NOT NULL COMMENT '类型状态',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of types
-- ----------------------------
INSERT INTO `types` VALUES ('1', '上衣', '1', '2016-07-15 22:07:11', '2016-07-16 15:54:15');
INSERT INTO `types` VALUES ('2', '裤子', '0', '2016-07-15 22:34:31', '2016-07-15 22:34:31');
INSERT INTO `types` VALUES ('3', '手机', '1', '2016-07-16 15:27:40', '2016-07-16 15:27:40');
INSERT INTO `types` VALUES ('4', '电脑', '1', '2016-07-16 15:37:57', '2016-07-16 15:37:57');
INSERT INTO `types` VALUES ('5', '数码', '1', '2016-07-16 15:38:47', '2016-07-16 15:38:47');

-- ----------------------------
-- Table structure for userdetails
-- ----------------------------
DROP TABLE IF EXISTS `userdetails`;
CREATE TABLE `userdetails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户的id',
  `sex` tinyint(1) NOT NULL DEFAULT '2' COMMENT '用户的性别 0 为 女 1 为男 2为保密',
  `gold` int(11) NOT NULL DEFAULT '0' COMMENT '用户的金币数量 ',
  `email` varchar(255) NOT NULL COMMENT '用户的邮箱',
  `registerTime` int(11) NOT NULL COMMENT '用户的注册时间',
  `registerIp` char(16) NOT NULL COMMENT '用户注册的ip',
  `bithDate` int(11) NOT NULL COMMENT '用户的出生年月',
  `address` varchar(255) NOT NULL COMMENT '用户的现居地址',
  `campous` varchar(255) NOT NULL COMMENT '用户的校园',
  `degree` tinyint(1) NOT NULL COMMENT '用户受教育的程度 0表是 高中及高中以下 1 表示大专/比本科 2表示研究生 3 表示博士及以上',
  `start_school` int(11) NOT NULL COMMENT '入学的时间',
  `qq` char(15) DEFAULT NULL COMMENT '用户 QQ',
  `cost` decimal(10,0) NOT NULL DEFAULT '0' COMMENT '所有 网上购物的总钱数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userdetails
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL COMMENT '用户名',
  `password` char(50) NOT NULL COMMENT '密码',
  `auth` tinyint(4) NOT NULL DEFAULT '0' COMMENT '用户的权限 0 表示普通会员 1 表示普通管理员 2 表示超级管理员',
  `nickName` varchar(60) NOT NULL COMMENT '昵称',
  `tel` char(15) NOT NULL COMMENT '手机号',
  `profile` varchar(255) NOT NULL DEFAULT 'default.jpg' COMMENT '头像',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态 0 表示正常 1 表示禁止登陆',
  `level` tinyint(1) NOT NULL DEFAULT '0' COMMENT '会员 等级',
  `cost` decimal(10,0) NOT NULL DEFAULT '0' COMMENT '所有 网上购物的总钱数',
  PRIMARY KEY (`id`),
  UNIQUE KEY `tel` (`tel`) USING HASH,
  UNIQUE KEY `username` (`username`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', 'g9115gxQK', '$2y$10$tC8anW8aj0/OGg8sETfFY.PcoIYLMwjqCCeOkA5.Hzs', '0', 'g9115gxQK', '53820448562', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('3', 'aGpnHcTPH', '$2y$10$24ROPNeCL0Zq2.LhSszhVulidgQkh5ov.vsrnjBWB5Z', '1', 'aGpnHcTPH', '77206335061', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('4', 'cLChWtHRf', '$2y$10$OCvU51Fi44zn/R.RwUX6Vellzs7fGprk.L48wnzLFF/', '1', 'cLChWtHRf', '87007354574', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('5', 'e4nj7SAZU', '$2y$10$euO9BzVwy2.gepF.yXS96etVPGW3uNyvMs/4cSTfeJC', '1', 'e4nj7SAZU', '40821450208', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('6', 'At4krRtZH', '$2y$10$TXIakfi9F4jXAZHgRgHz9uC4WAsUXncnFnSY7WjpdR/', '1', 'At4krRtZH', '84543338304', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('7', 'z9egebH2r', '$2y$10$MbwawJsxnQuvc8x4xUtUw.fWyzGlb/FL1Hw7pM/HE4O', '1', 'z9egebH2r', '82672335318', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('8', 'wgIy2srYC', '$2y$10$jEuhfDPJ1nw2zI5WXCehYef03L3YvP44qSG7OPtK1VC', '1', 'wgIy2srYC', '15946112416', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('9', 'zL9wMg3GD', '$2y$10$sVtsEQZiV9Y2WhRlyGLffuU.Csx9Yh6U9fKg6o/zHtv', '0', 'zL9wMg3GD', '25409367992', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('10', '0zkuRVOXh', '$2y$10$O.JmICgApA/bnnhTOmHh7.SzwTcT3mLFVpIKu0cRkuj', '1', '0zkuRVOXh', '72808312746', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('11', 'DrQTVLo32', '$2y$10$N31wuIqMVFfduvPdppB45.3G/pi5UJgieW4Akgg1fGG', '0', 'DrQTVLo32', '31181816243', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('12', 'kK5pgKU6U', '$2y$10$C6NmtvDdLnt75A3gEiD8cOMY.RlzgfAvQ7XXbwbyGIO', '0', 'kK5pgKU6U', '16968495459', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('13', 'A6YplpY80', '$2y$10$5dXOo9pjVQTniwBk4mTLwuRfZem5FEQyMt..C0/JoMI', '0', 'A6YplpY80', '23845297595', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('14', 'S5wKbbD2P', '$2y$10$sgkhfSdS1iezT20qp./eh.qwe3TOpKlAACDlD.66gR9', '1', 'S5wKbbD2P', '63706447938', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('15', 'Qpu68BnZz', '$2y$10$SnzSZXB9QFXF1aNhSTn0hOUCSlEFEHF1nEQSpeg/a/b', '1', 'Qpu68BnZz', '19485778612', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('16', 'lvPbfOLXa', '$2y$10$26DCqDg0ZtW5y.lqvm.IQ.Qb2/KmneJtIrZZB9ClQgo', '0', 'lvPbfOLXa', '13948948920', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('17', 'SjLiyQAOj', '$2y$10$Jtf/ZbBHtMzbPUMgN1D00uJr.ysLw6NY0Ks6RhQU4qw', '0', 'SjLiyQAOj', '17470923752', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('18', '5KUuIoCuv', '$2y$10$GYog3L0NB9QhP3J91vflL.rfiwlen8Z7g3df5L.sOLH', '0', '5KUuIoCuv', '27738145866', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('19', 'kiZzjhifd', '$2y$10$3/EofD8pNiCMO4X1uNUp1O3hHCjczpNWPtKJGQKcKBa', '1', 'kiZzjhifd', '79736693948', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('20', 'WGQKT8Wld', '$2y$10$KxIF/djlAm18C2SpBLg0Me1YhBCSFctDELNPUPZp.v.', '1', 'WGQKT8Wld', '63237742284', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('21', 'AdUy82mLc', '$2y$10$jVBq2KNa3KCN28KAMNaYae2lqiXiGk05eBxw0ApOK0e', '1', 'AdUy82mLc', '05231708553', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('22', 'Sc7p1oeBz', '$2y$10$InMWS3xUuhHt4wurdyLMYu34p95nx0RfYBlHfJo8bwJ', '1', 'Sc7p1oeBz', '97103373781', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('23', 'VWG6k0srN', '$2y$10$u1XhTBNkj1MFH8AeVT7.HO6vzYhuifosYD6hXPKDF8O', '0', 'VWG6k0srN', '05798791189', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('24', 'J0O8kS98c', '$2y$10$h8sN1fFrvlLFhkLFpigYwu6BYCYbVNr325ZwWyXSojD', '0', 'J0O8kS98c', '68643630668', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('25', 'yXXklQoyP', '$2y$10$ffLc1QUBp/UwG.NP1zBMfuxLjsI/lFmwpnehlEoIqky', '1', 'yXXklQoyP', '71632638922', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('26', 'ar3UzOfgP', '$2y$10$5UHxnDfVbXLBNUzQA32Y7O.YvkQNUtpKv7xiF7HaPmp', '1', 'ar3UzOfgP', '65395634589', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('27', '9A4yHjUlF', '$2y$10$v2ZHTIFKdAzQAOXiFH02l.ht1JVLfqAuv2s0xEvQZ7S', '1', '9A4yHjUlF', '60630654845', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('28', 'sp8pNLEMm', '$2y$10$aToTQr2S01XbCXOsprpJoOb13r4/nvVJKntWR0h8JtK', '1', 'sp8pNLEMm', '95505992647', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('29', 'fDW1nhbvV', '$2y$10$xdVIOP/rQbBC6kGeALzgHOQxX1M76WACIIY24XdBFue', '0', 'fDW1nhbvV', '44658852059', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('30', 'GE3o2r4fM', '$2y$10$UL.gw1A7sVZXyh2Ds5uMN.eZZHIHLr/anesOFZbGCdT', '0', 'GE3o2r4fM', '53422985622', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('31', 'iNvDMsdIQ', '$2y$10$COsw/WYTIujd3FA4ES/REOtCH73poLkSWoOJSmJENww', '1', 'iNvDMsdIQ', '38288381895', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('32', 'nwrpZGsJY', '$2y$10$YBHRFq.rQR8PsjWNMQXw0eFBu/YikjVddzhdEIumD0Q', '1', 'nwrpZGsJY', '47729253339', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('33', 'kCQ5Xt4Cv', '$2y$10$bVVLPk/r6.2gZ.yyqWo7ReG1aiINCb1H9L2lR2JKo6L', '0', 'kCQ5Xt4Cv', '96783278489', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('34', 'vNYcw5dyM', '$2y$10$Hz9GYPxCsaro2oDNBe0h3OqfsIj6zUZ9ZeWhyfgVTu0', '1', 'vNYcw5dyM', '63268648794', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('35', 'wE70xYhtg', '$2y$10$RjlZoj/z83gKjBaz1mOoW.r9t3lhLyHn2M5JIqhDYMh', '0', 'wE70xYhtg', '60740465621', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('36', '8SMMh4YeT', '$2y$10$11rl0LNV5MLHlAC9mwwehOGrWy0vqVwgqU6fNbO3Wb5', '0', '8SMMh4YeT', '80647713306', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('37', 'iq2r3n6VP', '$2y$10$1JrFGrrNGLdupJ3EL4vcfuFeH3GNanj8I2ujNwfEfq5', '1', 'iq2r3n6VP', '37983236571', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('38', 'PpYZjqQ7p', '$2y$10$CDyNfEKD8258QzEpGdiFY.ZkpTAKDvpze5jSQvpv5Fe', '0', 'PpYZjqQ7p', '29531860338', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('39', 'z6P8Ldzh7', '$2y$10$T7eNG5fUYnODWiq0ORtInObwh9eCVwT1aN8FM0KSB0j', '0', 'z6P8Ldzh7', '63832014310', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('40', 'zIgQuxxZM', '$2y$10$Zszg3bxbKU5TJ3fsOcGpzOfIeZ5wvLs2XpcB4nv.sfE', '1', 'zIgQuxxZM', '17064286788', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('41', '8DFDoIrxu', '$2y$10$n32HdZYb8D2Ekg1chJZUDef.odeFcTeziRNBRSURAbV', '0', '8DFDoIrxu', '39671633081', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('42', 'XiKjmwtD3', '$2y$10$fKQFGsCGA/p/njtthFwqi.s2DJACtzkte5igx7AKXOj', '1', 'XiKjmwtD3', '11204853158', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('43', '3KKFs25W8', '$2y$10$AqJMDYYaWUyE2BVmwrYhXeBqtrZEYQe2TkQXI4kCR8B', '0', '3KKFs25W8', '68743804253', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('44', 'xLoYesAqc', '$2y$10$vAOeBUmxNClyBPasZ6D3t.SvLC.nGAfKG5suQj8AjpS', '1', 'xLoYesAqc', '05332972248', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('45', 'zHmBZuLwj', '$2y$10$jZm3Sohyg9Ss3AF3wrGHC.HBt/nSm3ldXZB7E5n00wo', '1', 'zHmBZuLwj', '21703718097', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('46', 'YKYAaVOHd', '$2y$10$XkDQ/xwvlyEBL8ZJCoTqiuPfd7PWRt4Gy4/kDhNV01f', '0', 'YKYAaVOHd', '72206874696', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('47', '8ZihS8dJl', '$2y$10$qXmq2No3iRveUMtW/HwK5O.e2G09/JAWBDmSmpi9wLG', '1', '8ZihS8dJl', '71119850419', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('48', 'NFOSwbW0b', '$2y$10$5Mzxe1Chch3R.xPLR37x5eHbll.78ZU5oAZ7T1RIdFl', '1', 'NFOSwbW0b', '66246596704', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('49', 'aeFkCih2L', '$2y$10$mvFPBwkdS/2AeGaZEs9fc.7gd7DsgBG1cHgVkZf1y6H', '1', 'aeFkCih2L', '77982468324', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('50', 'E6PaDF2XH', '$2y$10$iZxtnpdL4zj8Q5W.CMwE5O.LlcrvkRhb1Gfya9nhtQ8', '1', 'E6PaDF2XH', '84190037458', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('51', 'dcPXInh0r', '$2y$10$kjsZI4b54YvevIF13aljWOFWz.zYthy6iFAyaKQpxP4', '0', 'dcPXInh0r', '41317648200', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('52', '6ZCzHKjxO', '$2y$10$tqVOBN7uFz/ODxFuiKJe9uGj.OdtjB17ykhlG8MtNrh', '1', '6ZCzHKjxO', '48247347930', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('53', '2l9EUjN0v', '$2y$10$IQFxnfjOkt0KJk.vBuJKZOepgylcJyk2vYU8/n6N0Nz', '1', '2l9EUjN0v', '15986954173', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('54', 'sVJZIpeds', '$2y$10$ArlSWoXuwuFMMo7ZZtIr8uT8OV01rb52zns6oz1OlM5', '1', 'sVJZIpeds', '70016697174', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('55', 'hNlyhlO2k', '$2y$10$eYHOMBMvAIYB1jXCU0DHa.RY2l9A970KNmi6e9Ymh1e', '1', 'hNlyhlO2k', '56095395882', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('56', '9jGDWt4Ok', '$2y$10$FZ5pVdlLs6VXcabKW83KOOg3BSmOvcutSDthVxqNBF0', '1', '9jGDWt4Ok', '62121951955', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('57', 'eL5cLuTwd', '$2y$10$UQv5ez/6oCT2gsYhwZiHK.sQ9sdLf1P0CH/bc/vpDA/', '1', 'eL5cLuTwd', '09405362168', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('58', 'zWJ2Qv36r', '$2y$10$0QhUBDawYnaBdK68.MkCZO0lqfq4LzStFoKUIS.fORE', '1', 'zWJ2Qv36r', '40615967451', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('59', 'hOv5EJ8Tk', '$2y$10$cPROawOIQfc7ebGfrvYzoOkS2n2XF7vPRPJfy2rhYi/', '1', 'hOv5EJ8Tk', '57430565557', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('60', 'FvOSlKLDV', '$2y$10$/ax6wxfhhk.iVTp7CtOe0ufEU.oKImdaUMw8rc1a4xv', '1', 'FvOSlKLDV', '76349616241', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('61', 'xzLwGJE7T', '$2y$10$.WyLZrkU7Uyl8.9/.GtKl.QRiKXOG5e1cXwN86Cp/Fh', '0', 'xzLwGJE7T', '66209843698', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('62', 'ZIKeXBdTW', '$2y$10$EvRSYVQiNhnLn2kLvaHokOLjeAuyX8Cxt/ujbaF1ytE', '1', 'ZIKeXBdTW', '19837005759', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('63', 'tqVwCucwz', '$2y$10$vo271QfaLiLzLpc4RCA.6.ZWam6McqfiSv/Yguo1zV9', '1', 'tqVwCucwz', '58158387384', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('64', 'YR8JAhthj', '$2y$10$hWM7oYOQmDIxj5aerka1x.pzmbrLC4M/JIf1GPKFz7B', '0', 'YR8JAhthj', '82597057127', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('65', 'NBIb8S5Wf', '$2y$10$uEd50o1t.cJG34jVOOjseOoMlujUNWdQyZFCb0OIYGg', '0', 'NBIb8S5Wf', '71998292298', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('66', 'xRP7wjz94', '$2y$10$QfuD4JUsMnhHfJYwnlSnhu0hzx5fB8CDQ3nLOUNURur', '0', 'xRP7wjz94', '77435222945', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('67', 'ttXe0KDFd', '$2y$10$4OapXZ18EuiUEk1eknMXEuJGV7ItF4oTRGmXWa7rFRq', '1', 'ttXe0KDFd', '92668334774', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('68', 'X4zj5OUXV', '$2y$10$Tr3hsUCa.I82ruzTL/NY5uAtr038zVigQiFCKGzyKC4', '1', 'X4zj5OUXV', '67126555067', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('69', 'RuWCkCPaD', '$2y$10$YBcArIiJ60Tnthr7QfYV3urBS3L.c5G3CcwtdVEP0Ub', '0', 'RuWCkCPaD', '52439952238', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('70', 'KCvrbZ7dO', '$2y$10$tmsb4wejSik1VUB.ebdIAONWldh/PXhklb.paQS0Kxd', '0', 'KCvrbZ7dO', '58448775290', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('71', 'iA6ioMGQi', '$2y$10$vkXdwAOsf3FN4q6j9SL4XurPtE/DK7TV0T.L78Mgg0O', '1', 'iA6ioMGQi', '74376623694', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('72', 'VUttSdUzB', '$2y$10$wxt10zrmdFPKC2Zf306BguCOcAGw3jAZvobE.NkeDvu', '1', 'VUttSdUzB', '03021754099', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('73', 'cVwaWmdU9', '$2y$10$fnSDG.qgjmWpUbg7RkoOqOb2qQMFHtmmw6qe3Wj.Vct', '0', 'cVwaWmdU9', '71136736473', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('74', 'Lq73snK63', '$2y$10$YlpzU2Lc7rGaRidWrviFz.76gsDW6boeCACIb7RB0QS', '1', 'Lq73snK63', '43438888599', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('75', '1Q8kQPR6k', '$2y$10$K4WahKEGnm7L53xWJMODOu2x21pxhErRUylWLCGMAUX', '0', '1Q8kQPR6k', '35680730657', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('76', 'ZX1buOSNC', '$2y$10$CUR3k9KG6x1Y4vxm8lzRnuptByMjnjXYNCdajggSDWd', '0', 'ZX1buOSNC', '88545833866', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('77', 'SbmNcvnmb', '$2y$10$BiX5IPe5aV3Jzj.8fJBpdumvu9xJV5vzr1hn0l0oUNJ', '1', 'SbmNcvnmb', '69155168872', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('78', 'zzlpj0Vxw', '$2y$10$ep.4b1z8WgKdaQKUlGw9GuuTtBbJ/LJho2uqOWpeQ4y', '1', 'zzlpj0Vxw', '75525586193', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('79', 'EAAlRX5y3', '$2y$10$842FCYclmf5uAWVCs.WeaeDIXHAnZWHc/C7Fn5N5.ej', '1', 'EAAlRX5y3', '70326981690', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('80', 'dMGPx9xXd', '$2y$10$vdW6nmVKhZv0gMnv6Arf1uKGqBWX1TTLMznUgFx7ryi', '1', 'dMGPx9xXd', '03482637417', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('81', '8cUdVzo4c', '$2y$10$znbIxNejCVVLU7eAigH5SOeeRwr87i1hBL3rUb8sqD8', '0', '8cUdVzo4c', '87799752370', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('82', 'SPOZ1VWMc', '$2y$10$i164gFgjWqhf/BJernLINuLCRnWTSOuCUfkmrSl6zpD', '0', 'SPOZ1VWMc', '24392312088', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('83', 'lPrprOvI5', '$2y$10$sQ.kXEumS9DtmgZCOw3JzeARvaTwfBSbb0BYaPlqBcD', '0', 'lPrprOvI5', '42482531045', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('84', 'Vt6ex028t', '$2y$10$dzsNQ6F0MRnwsHUI.p9lIOjGYeICuQASztPy/eCyaEP', '0', 'Vt6ex028t', '27184327515', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('85', 'WxiyXbY0Z', '$2y$10$qndVz51.z.aNTgSWqamnp.NhXIr7N/9cO8wU.eKtyv/', '1', 'WxiyXbY0Z', '55124049077', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('86', 'aAzch69YA', '$2y$10$99jpRd.1R/MUx41FzdCjuegxFOrPBXf6U7yKg.GrE7H', '0', 'aAzch69YA', '46847204406', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('87', 'chrlJ0UqA', '$2y$10$dHBOZqcv/8OvwbiSdOVWHObEcqOlG7kh4SaZOJpuPu0', '1', 'chrlJ0UqA', '36785828868', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('88', 'ywjE4UBZt', '$2y$10$JYeYD8v5hC2A/EKePdzSY.KYqT3hPmbuRuX9lhtyCKH', '0', 'ywjE4UBZt', '40557566180', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('89', 'ouKo05ukY', '$2y$10$ihmR5pgQQwT0A23iUS6WouwcmXVxfF2cFTrWCWIueTy', '0', 'ouKo05ukY', '66653935797', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('90', 'h5uFx2330', '$2y$10$gKMZLnA.Qy5NPzM4k7T4Zuu5bmHPdYXZLVeDB2pSI/P', '1', 'h5uFx2330', '19773594271', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('91', 'A3vPC2iyL', '$2y$10$c.A5DZ946Jsu0tp4ypPHteJLL5WVxe7qv0i4Mo4GBmD', '0', 'A3vPC2iyL', '92513416643', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('92', 'gowEjhUR2', '$2y$10$2Xi3pinYvcw31CyKlg0ss.yIQh.SIge3wS05BvjVPbl', '1', 'gowEjhUR2', '41921624893', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('93', 'KQSenxRjr', '$2y$10$yzqMeH2SPuQiKVpz/kl3Q.2I8zZjL.Z8rDQsNSVGMNP', '1', 'KQSenxRjr', '18243662620', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('94', 'Sy1Q9RNSV', '$2y$10$TjShRqAgDDFwH6N1zl/K7OzPujw.z4ddtTx3lxuMyxr', '1', 'Sy1Q9RNSV', '59180418816', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('95', 'UxEOd9v8y', '$2y$10$fRMPQ3TIxiMKhME1UkbO9OyQqv1fX8sI47lS4afFYYa', '0', 'UxEOd9v8y', '27512332257', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('96', 'm5NB5MzEL', '$2y$10$TFB75Jk/a1OkXTYWt4wv9.y3r7Zq5r9jrONFZvFYksS', '0', 'm5NB5MzEL', '11103336764', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('97', 'FwxxiYDqm', '$2y$10$CcohzKJby68pczcOa4Wkm.qeagrqPmLcb06t7rLM4BL', '1', 'FwxxiYDqm', '95496045481', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('98', 'tqw94GXOu', '$2y$10$elnYvSpTxaHWOKAUpBd3i.9AdCQjfxDbQ/YsvOxH4R9', '0', 'tqw94GXOu', '65651299945', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('99', 'mUwcaPQPN', '$2y$10$DWDUx0eSrf08sSb8tD7z1uIWC4iX.jbYuRksv7ytv53', '1', 'mUwcaPQPN', '62870241111', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('100', 'ylVFPwuBm', '$2y$10$kmu1dYe5uWAaOiXatsOGA.pQW4/jS3nhEDtaJ.REWwI', '1', 'ylVFPwuBm', '27433672576', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('101', 'yjRtMsuxw', '$2y$10$1vE0A.tFQtB/JnyKgxYtge3Y4oMtc./FC3Lu0W6uyH5', '0', 'yjRtMsuxw', '15279416389', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('102', 'RxiDSg2Xw', '$2y$10$SSsoCsSTV23vQBunpMH0l.Ux87/GHFtgWX7qFiWbzls', '0', 'RxiDSg2Xw', '54638204784', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('103', '10ACvJFrX', '$2y$10$FMifQ/9dD89kX7s.X4HqO.tPgF4pAuMrsFZaVidVcuO', '1', '10ACvJFrX', '21700618436', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('104', 'ywACkDkt4', '$2y$10$H52/dBudYZTqcO0DKHe7TuwpQOPtADhF6m2epMkodVv', '0', 'ywACkDkt4', '96645908989', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('105', 'Icb60cmHA', '$2y$10$LwmumIHShxQjLZomPsq1g.P0QMSRoRDU15uTd.VuamJ', '0', 'Icb60cmHA', '22955426457', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('106', 'Z5qtb3moX', '$2y$10$l5x8dmKNp/Q3Y77CDiq5POgsXzk.3fycIgdJf0MyAxv', '0', 'Z5qtb3moX', '94126042265', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('107', 'jxKgNbZoO', '$2y$10$VcgEQnrAGoQ9j2i0RJFV2OZewcLfiSW1divYqeX3Kvn', '0', 'jxKgNbZoO', '62893656358', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('108', 'MECBbS6FF', '$2y$10$pthAUDyOw74ZjowmWEZ4VOxpQ0o6PRMUbM/4078g8zX', '1', 'MECBbS6FF', '15871099819', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('109', 'sHb30Gssf', '$2y$10$QQQqYR4l8PrZ1B8C057cS.VRS05bWVf0JLNYO.PIJKi', '1', 'sHb30Gssf', '26141783180', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('110', 'iPAV2XTYW', '$2y$10$DwDYpUQvP2vrifjnHZTzIu3wcdMZFYrs5jBxn7k8qXW', '1', 'iPAV2XTYW', '81342240016', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('111', 'eoisaDkQJ', '$2y$10$C7X9i1pFthxJCUU8SDq9x.IuvwpVyHDJqfG2JXzDJQL', '0', 'eoisaDkQJ', '73416059012', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('112', 'FxSRtuYQu', '$2y$10$tPABLJm2ZKsigastFrKVcOlwBgaz2iSnL.I.NwGNWPh', '1', 'FxSRtuYQu', '28506192055', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('113', 'V3oh9O5lZ', '$2y$10$rK7I3Hkqpql8Pca8FoS0tOrSsdqyHuI1ytm/raxO1ys', '0', 'V3oh9O5lZ', '81814497120', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('114', 'wotiGoeYW', '$2y$10$FqpwiMl/pVgO1nDOXhjUSu72HsHy9VNX1.wSa7/sP7R', '0', 'wotiGoeYW', '03779418235', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('115', 'rPVE7ZLoa', '$2y$10$e96Zkqiijhma1qcjBL2B7eiyqaJnRfASpZb.Y.isV/R', '0', 'rPVE7ZLoa', '86968601041', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('116', 'Uvc8t3vXS', '$2y$10$zCGADuG3aY83k.TJRXc3IOXnFmL9SMwws.RDKatA4i.', '1', 'Uvc8t3vXS', '01172319268', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('117', 'Ej80Evg6l', '$2y$10$a8hxBS6er/Dc7DEqaxF3suHacL0HLFyNuAy5RSyrICU', '1', 'Ej80Evg6l', '37122870756', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('118', 'vvGPom3Te', '$2y$10$e5l/RKYoDQNgVQA9Wi4.R.MyJIAPP5kBfio4hWkju0E', '1', 'vvGPom3Te', '95534316981', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('119', 'rxB8zI2uo', '$2y$10$5z7wmUbykrPUaTQr5FYyI.wwGJVA0q9Gb0s34MEJ9wd', '1', 'rxB8zI2uo', '96954411283', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('120', 'Ims01RLBz', '$2y$10$13RETmuuJK/JmBi1tbbaMePY8Mo5dSv104N5CL4Lhio', '1', 'Ims01RLBz', '48484564687', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('121', '2wsJPlvHq', '$2y$10$8WCpkWkM/c60H3AmrrXkY.e2lUCo0DqqM/4N4LvEMOW', '1', '2wsJPlvHq', '46397839525', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('122', 'V39n2oJA0', '$2y$10$eS3mmSnDgNRHcou8b8s/1u0PH0hNMiKgfB86qmEuVO8', '1', 'V39n2oJA0', '37381763141', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('123', 'jUj9hLpby', '$2y$10$mVM4iguz36TqXfRQETM27.VYK3c4e3ZtoJ29jKQ.BCp', '1', 'jUj9hLpby', '65693151159', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('124', '301TiSCKe', '$2y$10$s8139HNyCYkyRxVKfEydH.nEuHXSKkrOZei8a84aKhx', '0', '301TiSCKe', '05793846666', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('125', '6V2o2VupN', '$2y$10$YGE9JkslbSeWQgvZadIr1u0.4ICjAoiYhIqvEUPrl3K', '1', '6V2o2VupN', '37466733904', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('126', 'aWDw6MqIa', '$2y$10$lphGIgcy3DEaiExlY/X4QOHjy3xMCP0kxUrVdW3Ropp', '1', 'aWDw6MqIa', '64050309175', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('127', 'dGdTQsOQW', '$2y$10$D/cC16Yoi8BTyqo7u690euivqwFNLGuncxwEfWQBWz1', '1', 'dGdTQsOQW', '88901652716', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('128', 'BEaj0lQoc', '$2y$10$BElZzOmqgjmHVvkcrKgPQuquAbEYoQkqEm0hMwrVPU/', '0', 'BEaj0lQoc', '05985090444', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('129', 'ohXR8RLx4', '$2y$10$DA8J/eBChuHGM0p6IigXMuVFkIsX2r7gYuKUXl/uI2I', '1', 'ohXR8RLx4', '74961349529', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('130', 'EuVDAKGwY', '$2y$10$V9tMCZyvTEerNnxxsY/EA.k7lYc351aut8Suj/uUFXa', '0', 'EuVDAKGwY', '55412755760', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('131', 'Kj4qfokQ7', '$2y$10$eWNihQdv28lcqPMZtnWjZu00D/HjRpPO.cVsmMFw7/l', '0', 'Kj4qfokQ7', '97877685568', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('132', 'UFeX20Eau', '$2y$10$xd8Bl8XKDWZyjpJobIiGsewj3/aF2Uw7.LXOj40tFcx', '0', 'UFeX20Eau', '95311285693', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('133', 'wPpoL6hzx', '$2y$10$pmx.9wwP9TNmuIAlw5.p6.xPlKogSVpiq/nkGwqng2B', '0', 'wPpoL6hzx', '94840138580', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('134', 'c7Xs0Cp27', '$2y$10$e8wYY9GkBFaH3DixUI2j1Ol8jyXhnUNx6/QltgnCJ7N', '0', 'c7Xs0Cp27', '54597878367', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('135', 'zUBgGZnIL', '$2y$10$ARTFSomhaAMSUcVj7z706ezMqtUXEWXEch8wdsvZ6NM', '1', 'zUBgGZnIL', '06136260470', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('136', 'rTtTPvwK5', '$2y$10$dNImralgkzseHW5MPjRG0uwhOTC8JIXfHXy2UFjwLkF', '0', 'rTtTPvwK5', '86967348232', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('137', 'kC3tDFZcH', '$2y$10$OA3OjCUcR4SkrJ4BBR5mzOv2lXSd9lzA0RcCpPGpLWP', '1', 'kC3tDFZcH', '62514886711', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('138', 'VkKjGTaXk', '$2y$10$L7dm08xcfvhuzQIo2fN/yeMxqo1y7.ZQOwFglnbD4V.', '0', 'VkKjGTaXk', '43958171871', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('139', 'yxtJ7idWh', '$2y$10$t9c.Hz7jmmEBHRr6OhFJ6u8Dqp7JEmB8UjIPsCDaZd1', '1', 'yxtJ7idWh', '58167079856', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('140', 'uiY78oQiO', '$2y$10$qFxoJSYsVtm4/lOa8B617uYkp39EncCtYjp0pR16PgD', '1', 'uiY78oQiO', '47804386935', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('141', 'mXaiir1wD', '$2y$10$rlHI7t9rmUznAaN.Ee9Q1.s5IVJQjZamPpIwcJ1zBK.', '1', 'mXaiir1wD', '96142953392', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('142', 'EDMSgvdfk', '$2y$10$rigY9ILaDR7z5Kv.BOjpJebSlomjNRLiLpvtepxR84C', '1', 'EDMSgvdfk', '65714610424', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('143', 'Vvnuon3at', '$2y$10$GNp10uy3h36e8qYC/Ju03uAbwTPgI2OT8n2iCXX4wXJ', '0', 'Vvnuon3at', '38415122852', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('144', 'mOvXjzIig', '$2y$10$db77dw5U0CHDO/ZXu0/wC.VswDcf6mib1rSNWxbUJZN', '0', 'mOvXjzIig', '79008015800', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('145', '5TiWqHOKW', '$2y$10$tY1npKKfjPAXmfCtjqOzmOVOfB4GlpejmXj5Cpbcxz6', '1', '5TiWqHOKW', '78924036057', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('146', '4b2nwcxv0', '$2y$10$wpyQhMFmMdSlyse7F2/J..O63LYxy2V5TQa7B68nkEp', '1', '4b2nwcxv0', '80568898031', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('147', 'dfGkkvOCq', '$2y$10$OApXtfnTXcxhks19494iQudfRv6gLEd3f5fCJdD8gaY', '0', 'dfGkkvOCq', '07350182980', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('148', 'iI8RIXFZG', '$2y$10$Im49w5BoEMVaRTATmSqOvuzvIY/M2xXte4FAvI88NJD', '0', 'iI8RIXFZG', '29830725431', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('149', 'X1FaAoRuh', '$2y$10$A9wSAmdqRFJQ05CedlX9U.or4u.P/ONdU35.wLc2QBR', '0', 'X1FaAoRuh', '19919775087', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('150', 'A8qN3vgIx', '$2y$10$LFSl3AW9dtO6EVM.FJOvbePzxW/eL1BAUawCY.T/Dx5', '0', 'A8qN3vgIx', '42408682033', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('151', 'XWY1VPlE7', '$2y$10$OaXdp6O.KwGzlc6ozdPEMOg3v8WBVPbKxgRW1Ax9Ya/', '0', 'XWY1VPlE7', '41526086919', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('152', 'QeqsqzcQg', '$2y$10$q0PJFUZJFU6u8TEuDsRHsO3GHB/MLPEL2sQtCB0quL6', '1', 'QeqsqzcQg', '20186150845', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('153', 'kvph2YLv3', '$2y$10$9r6mh/1lf6uRrBhTgVdl4.uXiHCgYVFlow0cjKKfZXQ', '1', 'kvph2YLv3', '90648677025', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('154', 'HQwKAO8Md', '$2y$10$/7bJOHh1rR5YRkuVCD7ny.j2LGjCm6Yi4V8ixQIVexm', '1', 'HQwKAO8Md', '33028584226', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('155', 'RETu7cTF7', '$2y$10$F1jn87DRkkrVGuPrN9gwieQGoxaPbnKYpxzVhDXrTQb', '0', 'RETu7cTF7', '11203590449', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('156', 'qUnh1GuoB', '$2y$10$sAYA6HrbfE8w8ZUFFYyweeV/BLtGbtFdsV9rA4Mhydr', '1', 'qUnh1GuoB', '29196380706', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('157', '7ZJSNwfbA', '$2y$10$RJzL5MneZOjrptVwURE.vu3lZA4BkuDNOQBcroFI49d', '0', '7ZJSNwfbA', '21169373353', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('158', '3GCUomF21', '$2y$10$awkzE81JWqvshLvnDof92.infFWj00VI35Qu6CoVfXl', '1', '3GCUomF21', '85346462962', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('159', 'cQjDzcOPO', '$2y$10$r/rpyT3isnRxZgwhYjtTZuS2k6k5ferZLCoWLrv0I1q', '0', 'cQjDzcOPO', '13147640348', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('160', 'Hs4a1Fpd0', '$2y$10$aQweeVxjfZsVJlxfk7/6c.2zVkEH2JHOc2WQ2Y1lC81', '0', 'Hs4a1Fpd0', '38866259124', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('161', 'V0ini0naQ', '$2y$10$tvYynVT7NtLtcCeDF/2FqO8VywMoo.3Clye6UXcYAst', '1', 'V0ini0naQ', '85673467603', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('162', 'T7pmSCB5G', '$2y$10$OBaNMXcTjPPBugSpRiiRf.q6cLUBIqaBiERYUln4xpR', '1', 'T7pmSCB5G', '79126827036', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('163', 'cbNmldKe9', '$2y$10$ZGQFEQat30wsrgHK0Giqf.8jflxkAS8g5WVsShFg1RY', '0', 'cbNmldKe9', '87405081109', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('164', 'CXVIG4ror', '$2y$10$xUk0pGmE6jzzNpS..7AI1u.NYi34jE9VSqd6/Xx6n5X', '1', 'CXVIG4ror', '14549838690', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('165', 'OZkv0TPVH', '$2y$10$Y7g9EPXO3k.MLZjIDpM7Y.1smauiiioDcel1fvLi0Q8', '0', 'OZkv0TPVH', '91339402067', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('166', 'LXNCutHsT', '$2y$10$9rM6aanBOtzOHb9gjb9Caez.3WIxvKSFnSBbAGPC8CK', '0', 'LXNCutHsT', '59386737988', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('167', '00YTfUOL2', '$2y$10$HAdD9c0OhxWNtSfBeGIiY.mrbsjYFXnDvhBDal0y6a6', '0', '00YTfUOL2', '21944760708', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('168', 'cYydx7CEt', '$2y$10$9Lbb2IOv5iNK4cVPylxJ6uUVYg/o8kfl2mEl.omEhxX', '1', 'cYydx7CEt', '60028071414', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('169', 'ZiDRGbvSU', '$2y$10$/jFhf.gBKa830Fv1bzTyduGBKiYgRYuafWaVFR/6cMf', '0', 'ZiDRGbvSU', '31677194468', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('170', 'YxBK8cQJg', '$2y$10$UEZkxft4KpSrRMp57SlO5e63MQIGEt/6u0aoHeHQFRE', '0', 'YxBK8cQJg', '86519693316', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('171', 'XQ3RDwDdW', '$2y$10$.JxuMS4wKeZ5YZ.hSI9r/OkttbPyigrlTQwN2QmwTTf', '0', 'XQ3RDwDdW', '73823432748', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('172', '5k4seHbkr', '$2y$10$okujv1ua1xgVZWC9MuBlAOrDFvOzzu363wodtStBEf3', '0', '5k4seHbkr', '62767957980', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('173', 'jOvb5boba', '$2y$10$emUv0kaC3wuEQO9S5sSaQeadnh/vxNwpbqxWetUgr0H', '0', 'jOvb5boba', '14427962987', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('174', 'yk9mhT2Rn', '$2y$10$etm89UNt271Zb0j4I5m3Turh9q3v/VJiILfA98FKScE', '0', 'yk9mhT2Rn', '23925464670', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('175', 'driylGvzW', '$2y$10$WkDMeJg87ed9R55R5p2S2e3zumU6CVBVmL87C42YIct', '1', 'driylGvzW', '32897025176', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('176', 'kZNcvgeid', '$2y$10$f02BiU1Zh/zbOuKYTmDgDehRl85GRdIypCm/0014UAH', '1', 'kZNcvgeid', '93359412404', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('177', '6kbIUQjvc', '$2y$10$Ukq9xT4u/grhKzHQVhnwVeoNe0JIUBKoCbMFYUYBbDt', '0', '6kbIUQjvc', '05218524278', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('178', 'gQZqtcCTn', '$2y$10$q69/72m84qjRmL72UfFrSemwK05aP8JzWpgS1wt4ydM', '1', 'gQZqtcCTn', '41186652765', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('179', 'FN6H69GWZ', '$2y$10$sf7yL1dRUmbPREoN15IyHO8wwQNeN62s/w9EFoi0p5r', '1', 'FN6H69GWZ', '57135402123', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('180', 'PLimjnKqS', '$2y$10$A7D0G.nQTKcwJ.W/CzsUlumyCzODqmw9h5sV2tiXedN', '1', 'PLimjnKqS', '40437525352', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('181', 'CyJqEZld9', '$2y$10$1qtHkstgsk.PiexObYTcJeaf8BnXe4q4oXcsDZsT4Zt', '1', 'CyJqEZld9', '30100429701', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('182', 'JesvdhXjg', '$2y$10$c5AJ0ZxE17idT0kQx3HxPuk/2z/lxDfh2GuX9jwmTjO', '0', 'JesvdhXjg', '74121232913', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('183', 'Q5ZbXPg3Q', '$2y$10$GWKWOAwmfjqIs8CHaMzqQu3e6fzTw79F4PsuK0B/aoj', '1', 'Q5ZbXPg3Q', '35572491938', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('184', '4w6m7S8zx', '$2y$10$s4vdQqs4aAilShziCQ631O03oLD52W5oMQjtUt1rSth', '1', '4w6m7S8zx', '06606020951', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('185', '1kl8O9WiL', '$2y$10$wNzpATPeBoHqhl3IbJgHQ.RFSt00XaIY7rE3qXPMk6G', '0', '1kl8O9WiL', '84493445910', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('186', 'eNw3k4L4J', '$2y$10$QV8WfDDuaKNbeH7l9AzxdOhIgeXRnUiqJVEXusrf2NA', '1', 'eNw3k4L4J', '12513699140', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('187', 'CMmDagzia', '$2y$10$nwjFdJ3ewnevfdyW4G7O7OB6YNXQv8x.gw13fWTl4rz', '0', 'CMmDagzia', '06117777023', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('188', '6EDTvSt3t', '$2y$10$V.A.GXcljKOxReH.Wd0Sj.VO1J9v09sQkAAF.hIw18a', '1', '6EDTvSt3t', '36427208675', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('189', 'XWe8tG9do', '$2y$10$p1dPAQhHPRSnIimhGpWb6OKnjX1PmkWov0YVO3tJjxh', '0', 'XWe8tG9do', '54145841195', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('190', 'MXVWQeJld', '$2y$10$ssjBL1rYxv5voWXKhK168uqvnXKWh.45MX8SOoK1UE6', '0', 'MXVWQeJld', '80561818687', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('191', 'NelLkoyNO', '$2y$10$5GnLUHcPFWuMnD1kPEgqS.724uyhGwbplKkuYUj42Dx', '1', 'NelLkoyNO', '86766567254', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('192', 'mx63se8Oq', '$2y$10$mN.UK1MEwwirEDz/KhA4hu28n8WV/taP8S5btzger5W', '1', 'mx63se8Oq', '55677793732', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('193', 'zy7WHWXDn', '$2y$10$WtwXjUGJkn5vijspy3eEvOtIvJjtDloyU7YUOqGFvdy', '0', 'zy7WHWXDn', '36769424061', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('194', 'OZc649p61', '$2y$10$L6gHYJKk/amw2T6Brezog.MO8DMnqfT75mFY8IG82oo', '0', 'OZc649p61', '86668382239', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('195', 'LAk8UOp3X', '$2y$10$kmwkZq4cUBnSlpr/Miwhou6jCoWfeCBfAFiIv7w.sE9', '1', 'LAk8UOp3X', '07438225034', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('196', '3YcciSuKU', '$2y$10$3uLJ9UaK0cLS.SdKNpDY8.suj5avOu0nnwVkV5zWHYU', '1', '3YcciSuKU', '28505785526', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('197', 'wemss3kIY', '$2y$10$Axb5Et7726h1PLfgWe7tg.uhqQ6HA9ipIhs43eriaiX', '1', 'wemss3kIY', '36211616928', 'default.jpg', '0', '0', '0');
INSERT INTO `users` VALUES ('198', 'g81tsLUdk', '$2y$10$eMJxsgoYNsJBnHMOv.YhFeWcWgo3GmF2VLWCjgN6JwX', '1', 'g81tsLUdk', '37923089238', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('199', 'jCiYazswk', '$2y$10$uu6M30LQGtywcYokFnoljuasi53ioGVyjfxEL0P4lhf', '1', 'jCiYazswk', '74137099519', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('200', 'AM5nHfhuP', '$2y$10$xoMxwruZkqMiOOft8rF8buKZiPwdKoUWz5Q4bFc51gY', '0', 'AM5nHfhuP', '38028198445', 'default.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('201', 'fc2Rj1fSB', '$2y$10$o/6PqUT6fqBtVR.nBEv0/eWIBeOoIX4Fs.fuOX8LTyv', '1', 'fc2Rj1fSB', '49004330490', 'default.jpg', '0', '0', '0');
