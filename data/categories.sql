/*
Navicat MySQL Data Transfer

Source Server         : vienlemai
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : librarydb

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2013-09-22 22:51:23
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `ordering` int(11) DEFAULT NULL,
  `description` tinytext CHARACTER SET utf8,
  `user_created` varchar(200) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO categories VALUES ('1', null, 'Trang chủ', '', '1', '0', 'mô tả\r\n', ' (Admin)', null, '2013-09-21');
INSERT INTO categories VALUES ('2', null, 'Giới thiệu', '', '1', '0', '', ' (Admin)', null, '2013-09-21');
INSERT INTO categories VALUES ('3', null, 'Tin tức', '', '1', '0', '', ' (Admin)', null, '2013-09-21');
INSERT INTO categories VALUES ('4', null, 'Hình ảnh hoạt động', '', '1', '0', null, null, null, null);
INSERT INTO categories VALUES ('5', null, 'Hướng dẫn sử dụng', '', '1', '0', null, null, null, null);
INSERT INTO categories VALUES ('6', null, 'Tìm kiếm', '', '1', '0', null, null, null, null);
INSERT INTO categories VALUES ('7', null, 'Sản Phẩm', '', '1', '0', null, null, null, null);
INSERT INTO categories VALUES ('8', null, 'Dịch vụ', '', '1', '0', null, null, null, null);
INSERT INTO categories VALUES ('9', null, 'Liên hệ', '', '1', '0', null, null, null, '2013-09-21');
