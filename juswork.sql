/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : juswork

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-06-28 09:50:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `role`
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', '管理员');
INSERT INTO `role` VALUES ('2', '群组管理员');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(36) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `role` tinyint(4) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` tinyint(4) DEFAULT NULL,
  `sex` enum('2','1') DEFAULT '1' COMMENT '1:男；2：女',
  `mobile` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin@juswork.com', '202cb962ac59075b964b07152d234b70', 'Ningbo Jus Internet Technology Co., Ltd.', '1', '张三', '30', '1', null);
INSERT INTO `users` VALUES ('2', 'app@juswork.com', '202cb962ac59075b964b07152d234b70', 'Ningbo Jus Internet Technology Co., Ltd.', '2', '李四', '28', '1', null);
INSERT INTO `users` VALUES ('3', 'admin@juphoon.com.cn', '202cb962ac59075b964b07152d234b70', 'juphoon.com.cn', '2', '王五', '30', '1', null);
INSERT INTO `users` VALUES ('4', 'magic.han@juphoon.com.cn', 'f3a5034076e0795316f6f8a77c155e1d', 'juphoon.com.cn', null, 'app@juswork.com', null, '1', null);
