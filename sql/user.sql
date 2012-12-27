/*
Navicat MySQL Data Transfer

Source Server         : 10.0.1.53
Source Server Version : 50152
Source Host           : 10.0.1.53:3306
Source Database       : cibt

Target Server Type    : MYSQL
Target Server Version : 50152
File Encoding         : 65001

Date: 2012-11-26 16:07:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('000001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Root', '2012-10-22 15:27:26');
