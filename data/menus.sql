/*
Navicat MySQL Data Transfer

Source Server         : vienlemai
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : librarydb

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2013-09-22 22:51:30
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `menus`
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ordering` int(11) NOT NULL,
  `actived` tinyint(1) NOT NULL DEFAULT '1',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `controller` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `action` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ext` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `module` tinyint(1) DEFAULT '0',
  `view` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `position` enum('right','left','top') CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO menus VALUES ('2', 'trang-chu', 'Trang chủ', null, 'http://localhost/LibraryManagement/articles/view/id:7/slug:trang_chu', '3', '1', '1', 'articles', 'view', '7', '0', 'Đừng xé sách lịch sử nữa các bạn nhé!', null);
