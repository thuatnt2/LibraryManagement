/*
Navicat MySQL Data Transfer

Source Server         : vienlemai
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : librarydb

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2013-10-19 22:49:36
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `articles`
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL,
  `published` tinyint(1) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `sumary` text NOT NULL,
  `content` longtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `modified` datetime DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO articles VALUES ('1', 'Đừng xé sách lịch sử nữa các bạn nhé!', '2013-06-05 00:00:00', '1', '/files/images/Penguins.jpg', '(Dân trí) - Một đoạn video vừa được tung lên mạng, đưa hình ảnh hàng trăm học sinh của một trường THPT tại TPHCM xé đề cương môn lịch sử và hò reo sung sướng khi được thông báo năm nay môn học này không thi tốt nghiệp THPT.', '<div style=\"text-align: justify;\">\r\n	(D&acirc;n tr&iacute;) - Một đoạn video vừa được tung l&ecirc;n mạng, đưa h&igrave;nh ảnh h&agrave;ng trăm học sinh của một trường THPT tại TPHCM x&eacute; đề cương m&ocirc;n lịch sử v&agrave; h&ograve; reo sung sướng khi được th&ocirc;ng b&aacute;o năm nay m&ocirc;n học n&agrave;y kh&ocirc;ng thi tốt nghiệp THPT.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify; margin-left: 200px;\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img alt=\"\" src=\"http://localhost/library-project-graduation/project-library/public/img/gallery/images/2.jpg\" style=\"width: 338px; height: 247px;\" /></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Xem đoạn video m&agrave; ruột thắt, m&agrave; buồn đến n&atilde;o l&ograve;ng. Đề cương m&ocirc;n lịch sử bị x&eacute; n&aacute;t, vứt th&agrave;nh một đống r&aacute;c trắng x&oacute;a s&acirc;n trường. C&oacute; thể c&aacute;c bạn trong một l&uacute;c bột ph&aacute;t, bắt chước nhau thực hiện một h&agrave;nh động thiếu suy nghĩ. Nhưng c&oacute; thể h&agrave;nh động đ&oacute; c&oacute; nguy&ecirc;n nh&acirc;n s&acirc;u xa, đ&oacute; l&agrave; ch&aacute;n gh&eacute;t m&ocirc;n lịch sử.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Đ&atilde; bao m&ugrave;a thi rồi, lịch sử vẫn l&agrave; m&ocirc;n thi nhiều điểm 0 v&agrave; nhiều điểm k&eacute;m nhất. Mặc d&ugrave; người đứng đầu ng&agrave;nh gi&aacute;o dục từng ph&aacute;t biểu điểm 0 m&ocirc;n lịch sử nhiều l&agrave; chuyện b&igrave;nh thường, nhưng thực ra l&agrave; rất kh&ocirc;ng b&igrave;nh thường.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Thử đi t&igrave;m nguy&ecirc;n nh&acirc;n v&igrave; sao học sinh ch&aacute;n gh&eacute;t m&ocirc;n lịch sử, chỉ khi t&igrave;m đ&uacute;ng nguy&ecirc;n nh&acirc;n mới c&oacute; thể trị liệu được. Lịch sử l&agrave; m&ocirc;n học hấp dẫn, th&uacute; vị, gi&agrave;u kiến thức, phong ph&uacute; cảm x&uacute;c, nhưng c&aacute;c em nuốt kh&ocirc;ng tr&ocirc;i.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	C&oacute; lẽ l&agrave; do ch&uacute;ng ta dạy lịch sử với ti&ecirc;u ch&iacute; định sẵn, ta lu&ocirc;n thắng, địch to&agrave;n thua. Ta vĩ đại c&ograve;n địch tầm thường. Trận n&agrave;o ta cũng thắng, địch chạy d&agrave;i, ta thu được nhiều chiến lợi phẩm, đếm rất nhiều x&aacute;c qu&acirc;n th&ugrave;&hellip;</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Kh&ocirc;ng! Lịch sử kh&ocirc;ng chỉ c&oacute; h&agrave;o h&ugrave;ng m&agrave; c&ograve;n bi tr&aacute;ng, kh&ocirc;ng chỉ c&oacute; thắng lợi m&agrave; c&ograve;n thất bại, kh&ocirc;ng chỉ c&oacute; hạnh ph&uacute;c m&agrave; mu&ocirc;n triệu đắng cay. Để c&oacute; chiến thắng qu&acirc;n Minh, d&acirc;n Đại Việt phải trả gi&aacute; nhiều năm l&agrave;m n&ocirc; lệ cho giặc phương Bắc: &ldquo;Nướng d&acirc;n đen tr&ecirc;n ngọn lửa hung t&agrave;n - V&ugrave;i con đỏ xuống dưới hầm tai vạ&rdquo; (B&igrave;nh Ng&ocirc; đại c&aacute;o). Để c&oacute; &nbsp;chiến thắng tr&ecirc;n s&ocirc;ng Bạch Đằng năm 1288, d&acirc;n Đại Việt phải &ldquo;Nh&igrave;n thấy sứ giặc đi lại ngh&ecirc;nh ngang ngo&agrave;i đường, mang uốn lưỡi c&uacute; diều m&agrave; sỉ mắng triều đ&igrave;nh, đem th&acirc;n d&ecirc; ch&oacute; m&agrave; bắt nạt tổ phụ - Hịch Tướng sĩ&rdquo;. Đại Việt c&oacute; nhiều v&otilde; tướng t&agrave;i danh, văn quan nức tiếng th&igrave; cũng c&oacute; những Trần &Iacute;ch Tắc &ocirc;m ch&acirc;n ngoại bang.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Thời n&agrave;o cũng thế, ngo&agrave;i chiến thắng, lịch sử ghi lại những sai lầm phải trả gi&aacute; bằng m&aacute;u xương, bằng sự đ&oacute;i ngh&egrave;o, bằng những bước đi l&ugrave;i trong lạc hậu của d&acirc;n tộc. Nếu đừng &nbsp;t&ocirc; hồng m&agrave; dạy lịch sử bằng tất cả sự trung thực th&igrave; học sinh sẽ rơi nước mắt bởi những trang sử huy ho&agrave;ng đồng thời cũng sẽ thấu hiểu những kh&oacute; khăn m&agrave; đất nước đ&atilde; trải qua tại những thời điểm nhất định.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Lịch sử sống động về c&aacute;c trận hải chiến Ho&agrave;ng Sa, Trường Sa, bi&ecirc;n giới ph&iacute;a Bắc, bi&ecirc;n giới T&acirc;y Nam, ai đ&atilde; chiếm biển, chiếm đảo của Việt Nam? V&igrave; sao ch&uacute;ng ta để mất biển, mất đảo? Những trang sử đ&oacute; kh&ocirc;ng thể kh&ocirc;ng n&oacute;ng bỏng tr&ecirc;n bục giảng.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	C&aacute;c bạn trẻ đừng coi thường lịch sử bởi nếu được biết một c&aacute;ch ch&acirc;n thực, chắc chắn c&aacute;c bạn sẽ kh&oacute;c v&igrave; niềm tự h&agrave;o cũng như sự cay đắng. C&aacute;c bạn sẽ hiểu được sự thật v&agrave; y&ecirc;u lịch sử đất nước với tất cả cảm x&uacute;c, sẽ &acirc;n hận v&igrave; từng ch&aacute;n gh&eacute;t m&ocirc;n lịch sử.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Đừng x&eacute; s&aacute;ch lịch sử nữa c&aacute;c bạn nh&eacute;.</div>\r\n', '1', '2013-09-21 12:21:45', null);
INSERT INTO articles VALUES ('3', '10 bí quyết học tập hiệu quả', '2013-06-04 00:00:00', '1', '/files/images/Penguins.jpg', 'Tại sao có người học kém? Tại sao có người học giỏi? Thực ra học kém hay giỏi không phải là bản chất, mà phần nhiều là do họ chưa biết đâu là những bí quyết cần thiết để học giỏi mà thôi.', '<div>\r\n	1. Chọn thời điểm v&agrave; kh&ocirc;ng gian y&ecirc;n tĩnh.</div>\r\n<div>\r\n	Bạn cần một kh&ocirc;ng gian y&ecirc;n tĩnh, tr&aacute;nh ồn &agrave;o như vậy bạn sẽ dễ d&agrave;ng tập trung hơn. N&ecirc;n ngồi gần cửa sổ, c&agrave;ng tiếp x&uacute;c với &aacute;nh s&aacute;ng tự nhi&ecirc;n v&agrave; luồng kh&ocirc;ng kh&iacute; lưu th&ocirc;ng đều trong ph&ograve;ng.</div>\r\n<div style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost/library-project-graduation/project-library/public/img/gallery/images/5.jpg\" style=\"width: 290px; height: 174px;\" /></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	2. Học buổi s&aacute;ng l&agrave; tốt nhất. Kh&ocirc;ng thức đ&ecirc;m nhiều, nhất l&agrave; trước kỳ thi.</div>\r\n<div>\r\n	X&aacute;c định thời điểm học cũng rất quan trọng. Khả năng lao động tr&iacute; &oacute;c của con người tăng dần từ s&aacute;ng sớm tới gần trưa, sau đ&oacute; giảm dần - sau bữa ăn trưa n&ecirc;n c&oacute; ngủ trưa ch&uacute;t &iacute;t từ 20-30 ph&uacute;t cũng được. Hiệu suất học buổi trưa c&ograve;n cao hơn buổi s&aacute;ng, đặc biệt đối với những m&ocirc;n học kh&oacute;.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Buổi chiều c&oacute; hơi giảm v&agrave;o giờ ăn tối. Sau đ&oacute;, dường như c&oacute; một chu kỳ mới v&agrave; khả năng tr&iacute; &oacute;c lại tăng dần cho tới khoảng 21 giờ, sau đ&oacute; lại giảm. Kh&ocirc;ng n&ecirc;n thức sau 22 giờ - v&igrave; đầu &oacute;c sau một ng&agrave;y l&agrave;m việc dường như đ&atilde; b&atilde;o h&ograve;a, kh&ocirc;ng c&ograve;n tiếp thu th&ecirc;m được nữa. L&uacute;c rời b&agrave;n học, c&aacute;c bạn c&oacute; thể lật qua, lướt mau những d&ograve;ng đầu của c&aacute;c b&agrave;i đ&atilde; &ocirc;n từ đầu để x&aacute;c định m&igrave;nh đ&atilde; học được tới đ&acirc;u. L&agrave;m như vậy cũng tựa như m&igrave;nh gởi tất cả v&agrave;o tiềm thức bộ nhớ trước khi đưa n&atilde;o v&agrave;o giấc ngủ.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	3. Ngủ kh&ocirc;ng đủ sẽ l&agrave;m n&atilde;o bộ hoạt động k&eacute;m hơn b&igrave;nh thường.</div>\r\n<div>\r\n	Trung b&igrave;nh ch&uacute;ng ta cần ngủ khoảng 8 tiếng một ng&agrave;y, nhiều nhất l&agrave; về đ&ecirc;m, để cho ấn tượng ng&agrave;y h&ocirc;m trước dịu nhạt, những ấn tượng ng&agrave;y mới chưa h&igrave;nh th&agrave;nh, s&aacute;ng sớm tỉnh dậy c&oacute; một bộ &oacute;c &quot;mới tinh&quot;, c&oacute; khả năng hoạt động tốt nhất. Vả lại, c&oacute; ngủ được say th&igrave; trong giấc ngủ v&agrave;o giai đoạn c&oacute; giấc mơ, cũng l&agrave; l&uacute;c m&agrave; c&aacute;c k&iacute;ch th&iacute;ch tố tăng trưởng được tiết ra gi&uacute;p ch&uacute;ng m&igrave;nh mau lớn th&ecirc;m nữa.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	4. Đặt ra mục ti&ecirc;u v&agrave; cố gắng hết sức ho&agrave;n th&agrave;nh mục ti&ecirc;u đ&oacute;.</div>\r\n<div>\r\n	- Theo quy luật 90/10, cứ 10 ph&uacute;t bạn bỏ ra để lập kế hoạch th&igrave; bạn sẽ tiết kiệm được 90% thời gian ho&agrave;n th&agrave;nh v&agrave; hiệu quả c&ocirc;ng việc. - Từ b&acirc;y giờ bạn h&atilde;y lấy một tờ giấy v&agrave; x&aacute;c định lại mục ti&ecirc;u luyện thi đại học của m&igrave;nh:</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	+ Bạn định thi đỗ trường n&agrave;o?</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	+ Số điểm dự kiến l&agrave; bao nhi&ecirc;u?</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	+ Bạn thực sự muốn chiến thắng?</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Sau đ&oacute; bạn h&atilde;y l&ecirc;n lịch cho từng c&ocirc;ng việc cụ thể để tiến tới mục ti&ecirc;u đ&oacute;. C&oacute; ai đ&oacute; đ&atilde; n&oacute;i rằng ch&uacute;ng ta kh&ocirc;ng bao giờ c&oacute; đủ thời gian để l&agrave;m tất cả mọi việc, nhưng lu&ocirc;n c&oacute; đủ để l&agrave;m những việc quan trọng nhất.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Mỗi ng&agrave;y bạn đừng tham lam l&agrave;m hết tất cả mọi việc, &ocirc;n hết tất cả c&aacute;c m&ocirc;n m&agrave; h&atilde;y lập ra một bảng ưu ti&ecirc;n c&aacute;c m&ocirc;n v&agrave; kế hoạch &ocirc;n từng ng&agrave;y.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Khi bạn thi đại học, đương nhi&ecirc;n c&aacute;c m&ocirc;n thi đại học vẫn l&agrave; ưu ti&ecirc;n h&agrave;ng đầu, nhưng bạn cũng đừng c&oacute; bỏ qu&aacute; nhiều thời gian v&agrave;o đ&oacute;. Khoa học đ&atilde; chứng minh rằng, nếu bạn học một m&ocirc;n li&ecirc;n tục qu&aacute; 45 ph&uacute;t th&igrave; khả năng nhớ sẽ giảm rất nhanh trong thời gian sau đ&oacute;.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	T&oacute;m lại bạn h&atilde;y l&ecirc;n một c&aacute;i lịch cụ thể cho h&agrave;ng ng&agrave;y, h&agrave;ng tuần, h&agrave;ng th&aacute;ng, v&agrave;i th&aacute;ng. Định ra việc g&igrave; l&agrave; quan trọng hơn th&igrave; l&agrave;m trước.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	5. Tập trung cao độ trong khoảng 1 tiếng rồi nghỉ giải lao, tr&aacute;nh ngồi l&igrave; 3-4 tiếng li&ecirc;n tục.</div>\r\n<div>\r\n	Thời gian học hiệu quả thường khoảng 45 ph&uacute;t sau đ&oacute; h&atilde;y nghỉ ngơi thư gi&atilde;n một ch&uacute;t. V&agrave; nếu bạn cảm thấy qu&ecirc;n kiến thức th&igrave; cũng đừng c&oacute; cố gắng qu&aacute; để nhớ lại n&oacute; l&agrave;m g&igrave; cả. Nguy&ecirc;n tắc của học hiệu quả l&agrave; phải để cho đầu &oacute;c thư gi&atilde;n, rồi tự kiến thức n&oacute; sẽ về. Nếu bạn muốn &ocirc;n lại b&agrave;i th&igrave; h&atilde;y &ocirc;n lại sau đ&oacute; 10 ph&uacute;t, rồi 1 ng&agrave;y, rồi 1 tuần, v&agrave; một th&aacute;ng.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	6. D&ugrave;ng phương ph&aacute;p ghi nhớ hiệu quả như sơ đồ Mind map</div>\r\n<div>\r\n	L&agrave;m sao để nhớ cả bảng hệ thống tuần ho&agrave;n? Nhớ tất cả c&aacute;c sự kiện lịch sử trong s&aacute;ch? Bạn h&atilde;y thực hiện theo c&aacute;ch sau:</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Ghi th&agrave;nh d&agrave;n b&agrave;i:</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Nhẩm trong &oacute;c:</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Ghi ra giấy: &nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Nhất l&agrave; những c&ocirc;ng thức, những định l&yacute;, định đề. Khi ghi, bạn chỉ t&oacute;m tắt phần quan trọng, sao cho khi mở trang giấy ra nhắc nhở lại bạn hệ thống b&agrave;i học bằng tr&iacute; nhớ m&agrave; kh&ocirc;ng cần mở s&aacute;ch.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Tr&aacute;nh ghi rườm r&agrave;, dư thừa, vừa mất thời gan v&ocirc; &iacute;ch m&agrave; lại ph&iacute; sức. N&oacute;i chung l&agrave;m thế n&agrave;o để bạn c&oacute; thể tổng hợp c&aacute;c phương ph&aacute;p (nhẩm nhớ - ghi ch&eacute;p - v&agrave; lập d&agrave;n b&agrave;i) sao cho tạo được điều kiện để bạn đọc b&agrave;i mau thuộc đ&oacute; l&agrave; đ&iacute;ều quan trọng nhất.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	N&ecirc;n cố gắng tập trung v&agrave;o những kiến thức cơ bản. Khối kiến thức n&agrave;y thường tập trung ở một số mảng, v&iacute; dụ: kh&aacute;i niệm, giả thuyết, quy luật, l&yacute; luận...</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Khi học, cần hiểu r&otilde; bản chất của vấn đề, &nbsp;phải x&aacute;c định c&aacute;c đặc điểm, c&aacute;ch thức vận dụng những kh&aacute;i niệm, quy luật, l&yacute; thuyết... trong việc giải quyết những vấn đề cụ thể. Từ đ&oacute;, y&ecirc;u cầu tiếp theo l&agrave; phải luyện tập để h&igrave;nh th&agrave;nh kỹ năng giải quyết vấn đề (đề thi cũng l&agrave; một dạng vấn đề cụ thể cần giải quyết).</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	C&oacute; hai dạng: vận dụng theo mẫu v&agrave; vận dụng một c&aacute;ch s&aacute;ng tạo, linh hoạt. Khi &ocirc;n, n&ecirc;n ch&uacute; &yacute; vận dụng theo cả hai tuyến:</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Theo chiều dọc: trong phạm vi c&ugrave;ng loại vấn đề, c&ugrave;ng chuy&ecirc;n m&ocirc;n, lĩnh vực...</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Theo chiều ngang: trong phạm vi những chương mục, m&ocirc;n học kh&aacute;c nhau nhưng c&oacute; li&ecirc;n quan đến nhau... Sau khi đ&atilde; học xong l&yacute; thuyết, n&ecirc;n tự đặt ra những c&acirc;u hỏi li&ecirc;n quan đến nội dung &ocirc;n thi để kiểm tra tr&igrave;nh độ của m&igrave;nh. Đ&oacute; cũng l&agrave; một c&aacute;ch để nhớ l&acirc;u v&agrave; tạo cơ sở để tăng dung lượng tr&iacute; nhớ l&agrave;m việc (working memory).</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	7. Tận dụng cả 2 b&aacute;n cầu n&atilde;o để đạt hiệu quả tối đa.</div>\r\n<div>\r\n	Tại sao c&oacute; người học k&eacute;m? Tại sao c&oacute; người học giỏi? Thực ra học k&eacute;m hay giỏi kh&ocirc;ng phải l&agrave; bản chất, m&agrave; phần nhiều l&agrave; do họ chưa biết c&aacute;ch điều khiển bộ n&atilde;o của m&igrave;nh m&agrave; th&ocirc;i. N&atilde;o bạn c&oacute; 2 b&aacute;n cầu, n&atilde;o tr&aacute;i chủ yếu cho tư duy logic, ng&ocirc;n ngữ c&ograve;n n&atilde;o phải l&agrave; cho tưởng tượng h&igrave;nh ảnh.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Từ trước đến giờ người ta dạy c&aacute;c bạn l&agrave; đa số t&aacute;c động v&agrave;o n&atilde;o tr&aacute;i, tức l&agrave; giảng to&agrave;n chữ n&ecirc;n trong giờ học, n&atilde;o phải của bạn kh&ocirc;ng c&oacute; việc l&agrave;m, cứ tưởng tượng m&ocirc;ng lung dẫn đến kh&ocirc;ng tập trung g&igrave; cả. V&igrave; vậy, muốn học hiệu quả ch&uacute;ng ta phải t&igrave;m c&aacute;ch vận dụng cả 2 n&atilde;o của m&igrave;nh. Một phương ph&aacute;p đơn giản nhất gi&uacute;p học c&aacute;c m&ocirc;n học thuộc dễ hơn cả ch&iacute;nh l&agrave; tưởng tượng. Từ b&acirc;y giờ bạn h&atilde;y t&igrave;m c&aacute;ch tưởng tượng thật nhiều v&agrave;o.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	8. Hạn chế nghe nhạc trong khi học. Trừ nhạc Baroque.</div>\r\n<div>\r\n	Nếu c&oacute; thể, bạn h&atilde;y t&igrave;m loại nhạc Baroque để l&agrave;m nền khi học. Người ta n&oacute;i rằng loại nhạc n&agrave;y c&oacute; thể r&uacute;t ngắn thời gian học tiếng anh hiệu quả từ 3 năm xuống c&ograve;n 3 th&aacute;ng. Bạn c&oacute; nghe thử 1 bản nhạc Baroque dưới đ&acirc;y được tr&iacute;ch trong bản giao hưởng Bốn m&ugrave;a của Vivaldi.Tất nhi&ecirc;n nếu bạn l&agrave; một người &quot;nhạy cảm&quot; với &acirc;m thanh khi học thấy kh&ocirc;ng hiệu quả hoặc kh&ocirc;ng tập trung được th&igrave; tốt nhất kh&ocirc;ng n&ecirc;n nghe loại nhạc n&agrave;o hết.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	9. Kh&ocirc;ng học khi vừa ăn xong.</div>\r\n<div>\r\n	&quot;Căng da bụng, ch&ugrave;ng da mắt&quot;, điều n&agrave;y khỏi phải b&agrave;n c&atilde;i nữa nhỉ.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	10. Kết hợp giải lao vận động nhẹ nh&agrave;ng như đi dạo, đạp xe, chơi Wii&hellip;</div>\r\n<div>\r\n	Những ph&uacute;t giải lao n&agrave;y c&oacute; mục đ&iacute;ch l&agrave;m thư gi&atilde;n thần kinh, tr&iacute; &oacute;c. N&ecirc;n đi đi, lại lại, giải tr&iacute; bằng tr&ograve; chơi nhẹ nh&agrave;ng, vui vẻ, tr&aacute;nh vận động nhiều v&agrave; mạnh.</div>\r\n', '1', '2013-09-21 12:30:46', null);
INSERT INTO articles VALUES ('4', 'Nên nói gì khi nói về dịch thuật', '2013-06-05 00:00:00', '1', '/files/images/Chrysanthemum.jpg', 'TT - Nếu tính từ lỗi sai \"bố mất vì ung thư tử cung\" trong bản dịch Hạt cơ bản đến lỗi \"thuốc bôi chân của bác sĩ Scholl\" (Dr. Scholl foot powder) trong quyển Những thứ họ mang, độc giả hẳn sẽ rất hoang mang khi cầm trên tay bản dịch một danh tác mà không biết liệu nó có lỗi sai nào \"bất hủ\" kiểu như thế không.', '<p>\r\n	ssas</p>\r\n', '1', '2013-09-21 12:22:06', null);
INSERT INTO articles VALUES ('5', 'Thông báo về Kế hoạch tổ chức cuộc thi viết chủ đề \"Quyển sách làm tôi thay đổi\" (29/5/13)', '2013-06-14 00:00:00', '1', '/files/images/Penguins(1).jpg', 'Thông báo về Kế hoạch tổ chức cuộc thi viết chủ đề \"Quyển sách làm tôi thay đổi\" (29/5/13)\r\n', '<p>\r\n	TRƯỜNG TRUNG CẤP CẢNH S&Aacute;T GIAO TH&Ocirc;NG T52<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PH&Ograve;NG ĐIỆN TO&Aacute;N &amp; TH&Ocirc;NG TIN TƯ LIỆU<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ----o0o----</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style=\"text-align: center;\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tp. Hồ Ch&iacute; Minh, ng&agrave;y 14 th&aacute;ng 05 năm 2013</p>\r\n<p style=\"text-align: center;\">\r\n	<strong>KẾ HOẠCH<br />\r\n	TỔ CHỨC CUỘC THI VIẾT<br />\r\n	CHỦ ĐỀ &ldquo;QUYỂN S&Aacute;CH L&Agrave;M T&Ocirc;I THAY ĐỔI &rdquo;</strong></p>\r\n<p style=\"text-align: justify;\">\r\n	<strong>I. Mục đ&iacute;ch v&agrave; Y&ecirc;u cầu</strong><br />\r\n	<strong>1. Mục đ&iacute;ch</strong><br />\r\n	- Cổ vũ văn h&oacute;a đọc, g&oacute;p phần ph&aacute;t triển văn h&oacute;a đọc trong học sinh - sinh vi&ecirc;n.<br />\r\n	- Tạo ra s&acirc;n chơi l&agrave;nh mạnh, k&iacute;ch th&iacute;ch nhu cầu đọc s&aacute;ch trong học sinh - sinh vi&ecirc;n.<br />\r\n	- N&acirc;ng cao nhận thức về tầm quan trọng của s&aacute;ch cho c&aacute;c bạn học sinh &ndash; sinh vi&ecirc;n.<br />\r\n	- G&oacute;p phần chia sẻ những cảm nhận, những b&agrave;i học r&uacute;t ra qua việc đọc s&aacute;ch.<br />\r\n	- Th&ocirc;ng qua c&aacute;c hoạt động của cuộc thi nhằm r&egrave;n luyện một số kỹ năng mềm cho cho sinh vi&ecirc;n: kỹ năng viết, kỹ năng tr&igrave;nh b&agrave;y&hellip;<br />\r\n	- Kết quả của cuộc thi sẽ l&agrave; th&agrave;nh t&iacute;ch ch&agrave;o mừng 16 năm ng&agrave;y th&agrave;nh lập trường v&agrave; 01 năm th&agrave;nh lập Thư viện điện tử.<br />\r\n	- B&ecirc;n cạnh đ&oacute;, th&ocirc;ng qua kết quả của cuộc thi, sẽ g&oacute;p phần t&igrave;m kiếm c&aacute;c nh&acirc;n lực chủ chốt cho C&acirc;u lạc bộ đọc s&aacute;ch trong học sinh - sinh vi&ecirc;n.<br />\r\n	2. Y&ecirc;u cầu<br />\r\n	- C&aacute;c Khoa v&agrave; Ph&ograve;ng CTHS-SV vận động sinh vi&ecirc;n tham gia để cuộc thi diễn ra s&ocirc;i nổi, hấp dẫn.<br />\r\n	- Th&ocirc;ng tin rộng r&atilde;i về cuộc thi đến tất cả sinh vi&ecirc;n của trường.<br />\r\n	- C&aacute;c c&aacute; nh&acirc;n tham gia cuộc thi phải tu&acirc;n thủ thể lệ cuộc thi v&agrave; c&aacute;c qui định do Ban tổ chức đề ra trong suốt qu&aacute; tr&igrave;nh tham gia cuộc thi.<br />\r\n	<strong>II. THỜI GIAN</strong><br />\r\n	- Thời gian dự kiến: Từ ng&agrave;y 08/07/2013 đến ng&agrave;y 31/08/2013.</p>\r\n<p style=\"text-align: justify;\">\r\n	<strong>III. Đối tượng dự thi</strong><br />\r\n	Tất cả học sinh &ndash; sinh vi&ecirc;n Trường đại học T&ocirc;n Đức Thắng.<br />\r\n	<strong>IV. Chủ đề - H&igrave;nh thức &ndash; Thể lệ</strong><br />\r\n	<strong>1. Chủ đề cuộc thi:</strong><br />\r\n	&ldquo;Quyển s&aacute;ch l&agrave;m t&ocirc;i thay đổi&rdquo;.<br />\r\n	<strong>2. H&igrave;nh thức thi:</strong><br />\r\n	Thi viết cảm nhận về s&aacute;ch.<br />\r\n	<strong>3. Thể lệ cuộc thi:</strong><br />\r\n	- B&agrave;i viết cần tr&igrave;nh b&agrave;y c&aacute;c nội dung: giới thiệu những th&ocirc;ng tin chung của s&aacute;ch (t&ecirc;n s&aacute;ch, t&aacute;c giả, nh&agrave; xuất bản, năm xuất bản), tr&igrave;nh b&agrave;y cảm nhận về quyển s&aacute;ch đ&atilde; l&agrave;m thay đổi nhận thức, h&agrave;nh vi, lối sống&hellip; v&agrave; mang lại những gi&aacute; trị t&iacute;ch cực cho cuộc đời bạn.<br />\r\n	- B&agrave;i viết phải phản &aacute;nh trung thực sự t&aacute;c động của s&aacute;ch đối với người đọc<br />\r\n	- Độ d&agrave;i của b&agrave;i viết tối thiểu 1.000 chữ<br />\r\n	- B&agrave;i viết dự thi chưa từng c&ocirc;ng bố tr&ecirc;n c&aacute;c phương tiện th&ocirc;ng tin đại ch&uacute;ng hoặc c&aacute;c loại ấn phẩm kh&aacute;c.<br />\r\n	- Khi kết quả cuộc thi chưa c&ocirc;ng bố, t&aacute;c giả c&oacute; b&agrave;i dự thi kh&ocirc;ng d&ugrave;ng b&agrave;i viết n&agrave;y để đồng thời gửi cho c&aacute;c cuộc thi hay c&ocirc;ng bố tr&ecirc;n phương tiện th&ocirc;ng tin đại ch&uacute;ng n&agrave;o kh&aacute;c trong suốt thời gian cuộc thi diễn ra.<br />\r\n	- B&agrave;i dự thi được viết bằng tiếng Việt, c&oacute; thể viết tay r&otilde; r&agrave;ng, sạch sẽ hoặc đ&aacute;nh m&aacute;y (font Times New Roman, cỡ chữ 12, m&atilde; Unicode) tr&ecirc;n 01 mặt giấy, khổ A4.<br />\r\n	- Mỗi t&aacute;c giả c&oacute; thể tham dự một hoặc nhiều b&agrave;i viết.<br />\r\n	- B&ecirc;n cạnh b&uacute;t danh (nếu c&oacute;), t&aacute;c giả cần ghi r&otilde; r&agrave;ng họ t&ecirc;n thật, m&atilde; số sinh vi&ecirc;n, Khoa/Trung t&acirc;m, số điện thoại, địa chỉ email&hellip; ở cuối b&agrave;i dự thi.<br />\r\n	- B&agrave;i viết đạt giải thuộc bản quyền của website Thư viện (lib.tdt.edu.vn)<br />\r\n	- B&agrave;i dự thi kh&ocirc;ng được giải, ban tổ chức kh&ocirc;ng trả lại bản thảo.<br />\r\n	- S&aacute;ch giới thiệu phải được xuất bản theo c&aacute;c quy định của ph&aacute;p luật Việt Nam<br />\r\n	<strong>V. Th&agrave;nh lập Ban Tổ chức &ndash; Ban Gi&aacute;m khảo</strong><br />\r\n	<strong>1. Ban Tổ chức</strong><br />\r\n	- B&ugrave;i Loan Th&ugrave;y&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp; Trưởng ph&ograve;ng ĐT&amp;TTTL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ndash;&nbsp; Trưởng ban<br />\r\n	- Phạm Nhất Phương&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp; Ph&oacute; trưởng ph&ograve;ng CTHS-SV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ndash;&nbsp; Ph&oacute; trưởng ban<br />\r\n	- Trịnh Thanh Li&ecirc;m&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp; Ph&oacute; Trưởng ph&ograve;ng ĐT&amp;TTTL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ndash;&nbsp; Th&agrave;nh vi&ecirc;n<br />\r\n	- Trịnh Phi Cường&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp; Trợ l&yacute; Trưởng ph&ograve;ng ĐT&amp;TTTL&nbsp;&nbsp;&nbsp;&nbsp; &ndash;&nbsp;&nbsp; Th&agrave;nh vi&ecirc;n<br />\r\n	- H&agrave; Thị Th&ugrave;y Trang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp; Tổ trưởng Tổ Thư viện điện tử&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ndash;&nbsp;&nbsp; Th&agrave;nh vi&ecirc;n<br />\r\n	- Trương Thị Ngọc Mai&nbsp;&nbsp; -&nbsp; Tổ trưởng Tổ Thư viện truyền thống &ndash;&nbsp; Th&agrave;nh vi&ecirc;n<br />\r\n	- Huỳnh Thiện Khi&ecirc;m&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp; Chuy&ecirc;n vi&ecirc;n Thư viện&nbsp;&nbsp;&nbsp; &ndash;&nbsp;&nbsp;&nbsp; Th&agrave;nh vi&ecirc;n<br />\r\n	- T&ocirc; Sanya Minh Kha&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Chuy&ecirc;n vi&ecirc;n Thư viện&nbsp;&nbsp;&nbsp;&nbsp; &ndash;&nbsp;&nbsp;&nbsp; Th&agrave;nh vi&ecirc;n<br />\r\n	<strong>2. Ban Gi&aacute;m khảo</strong><br />\r\n	- L&ecirc; Thị Mai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp; Ph&oacute; trưởng khoa KHXH&amp;NV&nbsp;&nbsp;&nbsp;&nbsp; &ndash; Trưởng ban<br />\r\n	- B&ugrave;i Loan Th&ugrave;y&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp; Trưởng ph&ograve;ng ĐT&amp;TTTL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ndash;&nbsp; Ph&oacute; trưởng ban<br />\r\n	- Phạm Nhất Phương&nbsp;&nbsp; -&nbsp; Ph&oacute; trưởng ph&ograve;ng CTHS-SV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ndash; Ph&oacute; trưởng ban<br />\r\n	<strong>VI. Cơ cấu giải thưởng</strong><br />\r\n	- 01 giải nhất: 500.000 đồng + giấy khen của Hiệu trưởng Trường đại học T&ocirc;n Đức Thắng + 04 quyển s&aacute;ch + 03 th&aacute;ng sử dụng miễn ph&iacute; m&aacute;y t&iacute;nh tại Thư viện điện tử của Trường<br />\r\n	- 02 giải nh&igrave;: 400.000 đồng + giấy khen của Hiệu trưởng Trường đại học T&ocirc;n Đức Thắng + 03 quyển s&aacute;ch + 03 th&aacute;ng sử dụng miễn ph&iacute; m&aacute;y t&iacute;nh tại Thư viện điện tử của Trường<br />\r\n	- 03 giải ba: 300.000 đồng + giấy khen của Hiệu trưởng Trường đại học T&ocirc;n Đức Thắng + 02 quyển s&aacute;ch + 02 th&aacute;ng sử dụng miễn ph&iacute; m&aacute;y t&iacute;nh tại Thư viện điện tử của Trường<br />\r\n	- 04 giải khuyến kh&iacute;ch: 200.000 đồng + giấy khen của Hiệu trưởng Trường đại học T&ocirc;n Đức Thắng + 01 quyển s&aacute;ch + 01 th&aacute;ng sử dụng miễn ph&iacute; m&aacute;y t&iacute;nh tại Thư viện điện tử của Trường</p>\r\n<p style=\"text-align: justify;\">\r\n	<strong>VII. Địa chỉ v&agrave; thời gian nhận b&agrave;i dự thi</strong><br />\r\n	- Địa chỉ: Thư viện Trường đại học T&ocirc;n Đức Thắng hoặc gửi về theo địa chỉ email: quyensachlamtoithaydoi@tdt.edu.vn<br />\r\n	- Thời gian nhận b&agrave;i dự thi: Từ ng&agrave;y 16/07/2013 đến hết ng&agrave;y 20/08/2013.</p>\r\n<p>\r\n	<br />\r\n	&nbsp;</p>\r\n', '2', '2013-09-21 12:25:39', null);
INSERT INTO articles VALUES ('7', 'Đừng xé sách lịch sử nữa các bạn nhé!', '2013-09-21 12:14:09', '1', 'files/images/Penguins(1).jpg', '(Dân trí) - Một đoạn video vừa được tung lên mạng, đưa hình ảnh hàng trăm học sinh của một trường THPT tại TPHCM xé đề cương môn lịch sử và hò reo sung sướng khi được thông báo năm nay môn học này không thi tốt nghiệp THPT.', '<div style=\"text-align: justify;\">\r\n	(D&acirc;n tr&iacute;) - Một đoạn video vừa được tung l&ecirc;n mạng, đưa h&igrave;nh ảnh h&agrave;ng trăm học sinh của một trường THPT tại TPHCM x&eacute; đề cương m&ocirc;n lịch sử v&agrave; h&ograve; reo sung sướng khi được th&ocirc;ng b&aacute;o năm nay m&ocirc;n học n&agrave;y kh&ocirc;ng thi tốt nghiệp THPT.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify; margin-left: 200px;\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img alt=\"\" src=\"http://localhost/library-project-graduation/project-library/public/img/gallery/images/2.jpg\" style=\"width: 338px; height: 247px;\" /></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Xem đoạn video m&agrave; ruột thắt, m&agrave; buồn đến n&atilde;o l&ograve;ng. Đề cương m&ocirc;n lịch sử bị x&eacute; n&aacute;t, vứt th&agrave;nh một đống r&aacute;c trắng x&oacute;a s&acirc;n trường. C&oacute; thể c&aacute;c bạn trong một l&uacute;c bột ph&aacute;t, bắt chước nhau thực hiện một h&agrave;nh động thiếu suy nghĩ. Nhưng c&oacute; thể h&agrave;nh động đ&oacute; c&oacute; nguy&ecirc;n nh&acirc;n s&acirc;u xa, đ&oacute; l&agrave; ch&aacute;n gh&eacute;t m&ocirc;n lịch sử.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Đ&atilde; bao m&ugrave;a thi rồi, lịch sử vẫn l&agrave; m&ocirc;n thi nhiều điểm 0 v&agrave; nhiều điểm k&eacute;m nhất. Mặc d&ugrave; người đứng đầu ng&agrave;nh gi&aacute;o dục từng ph&aacute;t biểu điểm 0 m&ocirc;n lịch sử nhiều l&agrave; chuyện b&igrave;nh thường, nhưng thực ra l&agrave; rất kh&ocirc;ng b&igrave;nh thường.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Thử đi t&igrave;m nguy&ecirc;n nh&acirc;n v&igrave; sao học sinh ch&aacute;n gh&eacute;t m&ocirc;n lịch sử, chỉ khi t&igrave;m đ&uacute;ng nguy&ecirc;n nh&acirc;n mới c&oacute; thể trị liệu được. Lịch sử l&agrave; m&ocirc;n học hấp dẫn, th&uacute; vị, gi&agrave;u kiến thức, phong ph&uacute; cảm x&uacute;c, nhưng c&aacute;c em nuốt kh&ocirc;ng tr&ocirc;i.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	C&oacute; lẽ l&agrave; do ch&uacute;ng ta dạy lịch sử với ti&ecirc;u ch&iacute; định sẵn, ta lu&ocirc;n thắng, địch to&agrave;n thua. Ta vĩ đại c&ograve;n địch tầm thường. Trận n&agrave;o ta cũng thắng, địch chạy d&agrave;i, ta thu được nhiều chiến lợi phẩm, đếm rất nhiều x&aacute;c qu&acirc;n th&ugrave;&hellip;</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Kh&ocirc;ng! Lịch sử kh&ocirc;ng chỉ c&oacute; h&agrave;o h&ugrave;ng m&agrave; c&ograve;n bi tr&aacute;ng, kh&ocirc;ng chỉ c&oacute; thắng lợi m&agrave; c&ograve;n thất bại, kh&ocirc;ng chỉ c&oacute; hạnh ph&uacute;c m&agrave; mu&ocirc;n triệu đắng cay. Để c&oacute; chiến thắng qu&acirc;n Minh, d&acirc;n Đại Việt phải trả gi&aacute; nhiều năm l&agrave;m n&ocirc; lệ cho giặc phương Bắc: &ldquo;Nướng d&acirc;n đen tr&ecirc;n ngọn lửa hung t&agrave;n - V&ugrave;i con đỏ xuống dưới hầm tai vạ&rdquo; (B&igrave;nh Ng&ocirc; đại c&aacute;o). Để c&oacute; &nbsp;chiến thắng tr&ecirc;n s&ocirc;ng Bạch Đằng năm 1288, d&acirc;n Đại Việt phải &ldquo;Nh&igrave;n thấy sứ giặc đi lại ngh&ecirc;nh ngang ngo&agrave;i đường, mang uốn lưỡi c&uacute; diều m&agrave; sỉ mắng triều đ&igrave;nh, đem th&acirc;n d&ecirc; ch&oacute; m&agrave; bắt nạt tổ phụ - Hịch Tướng sĩ&rdquo;. Đại Việt c&oacute; nhiều v&otilde; tướng t&agrave;i danh, văn quan nức tiếng th&igrave; cũng c&oacute; những Trần &Iacute;ch Tắc &ocirc;m ch&acirc;n ngoại bang.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Thời n&agrave;o cũng thế, ngo&agrave;i chiến thắng, lịch sử ghi lại những sai lầm phải trả gi&aacute; bằng m&aacute;u xương, bằng sự đ&oacute;i ngh&egrave;o, bằng những bước đi l&ugrave;i trong lạc hậu của d&acirc;n tộc. Nếu đừng &nbsp;t&ocirc; hồng m&agrave; dạy lịch sử bằng tất cả sự trung thực th&igrave; học sinh sẽ rơi nước mắt bởi những trang sử huy ho&agrave;ng đồng thời cũng sẽ thấu hiểu những kh&oacute; khăn m&agrave; đất nước đ&atilde; trải qua tại những thời điểm nhất định.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Lịch sử sống động về c&aacute;c trận hải chiến Ho&agrave;ng Sa, Trường Sa, bi&ecirc;n giới ph&iacute;a Bắc, bi&ecirc;n giới T&acirc;y Nam, ai đ&atilde; chiếm biển, chiếm đảo của Việt Nam? V&igrave; sao ch&uacute;ng ta để mất biển, mất đảo? Những trang sử đ&oacute; kh&ocirc;ng thể kh&ocirc;ng n&oacute;ng bỏng tr&ecirc;n bục giảng.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	C&aacute;c bạn trẻ đừng coi thường lịch sử bởi nếu được biết một c&aacute;ch ch&acirc;n thực, chắc chắn c&aacute;c bạn sẽ kh&oacute;c v&igrave; niềm tự h&agrave;o cũng như sự cay đắng. C&aacute;c bạn sẽ hiểu được sự thật v&agrave; y&ecirc;u lịch sử đất nước với tất cả cảm x&uacute;c, sẽ &acirc;n hận v&igrave; từng ch&aacute;n gh&eacute;t m&ocirc;n lịch sử.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Đừng x&eacute; s&aacute;ch lịch sử nữa c&aacute;c bạn nh&eacute;.</div>\r\n', '1', '2013-09-21 12:25:42', null);
INSERT INTO articles VALUES ('8', 'Đừng xé sách lịch sử nữa các bạn nhé!', '2013-09-21 12:14:57', '1', '', '(Dân trí) - Một đoạn video vừa được tung lên mạng, đưa hình ảnh hàng trăm học sinh của một trường THPT tại TPHCM xé đề cương môn lịch sử và hò reo sung sướng khi được thông báo năm nay môn học này không thi tốt nghiệp THPT.', '<div style=\"text-align: justify;\">\r\n	(D&acirc;n tr&iacute;) - Một đoạn video vừa được tung l&ecirc;n mạng, đưa h&igrave;nh ảnh h&agrave;ng trăm học sinh của một trường THPT tại TPHCM x&eacute; đề cương m&ocirc;n lịch sử v&agrave; h&ograve; reo sung sướng khi được th&ocirc;ng b&aacute;o năm nay m&ocirc;n học n&agrave;y kh&ocirc;ng thi tốt nghiệp THPT.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify; margin-left: 200px;\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img alt=\"\" src=\"http://localhost/library-project-graduation/project-library/public/img/gallery/images/2.jpg\" style=\"width: 338px; height: 247px;\" /></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Xem đoạn video m&agrave; ruột thắt, m&agrave; buồn đến n&atilde;o l&ograve;ng. Đề cương m&ocirc;n lịch sử bị x&eacute; n&aacute;t, vứt th&agrave;nh một đống r&aacute;c trắng x&oacute;a s&acirc;n trường. C&oacute; thể c&aacute;c bạn trong một l&uacute;c bột ph&aacute;t, bắt chước nhau thực hiện một h&agrave;nh động thiếu suy nghĩ. Nhưng c&oacute; thể h&agrave;nh động đ&oacute; c&oacute; nguy&ecirc;n nh&acirc;n s&acirc;u xa, đ&oacute; l&agrave; ch&aacute;n gh&eacute;t m&ocirc;n lịch sử.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Đ&atilde; bao m&ugrave;a thi rồi, lịch sử vẫn l&agrave; m&ocirc;n thi nhiều điểm 0 v&agrave; nhiều điểm k&eacute;m nhất. Mặc d&ugrave; người đứng đầu ng&agrave;nh gi&aacute;o dục từng ph&aacute;t biểu điểm 0 m&ocirc;n lịch sử nhiều l&agrave; chuyện b&igrave;nh thường, nhưng thực ra l&agrave; rất kh&ocirc;ng b&igrave;nh thường.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Thử đi t&igrave;m nguy&ecirc;n nh&acirc;n v&igrave; sao học sinh ch&aacute;n gh&eacute;t m&ocirc;n lịch sử, chỉ khi t&igrave;m đ&uacute;ng nguy&ecirc;n nh&acirc;n mới c&oacute; thể trị liệu được. Lịch sử l&agrave; m&ocirc;n học hấp dẫn, th&uacute; vị, gi&agrave;u kiến thức, phong ph&uacute; cảm x&uacute;c, nhưng c&aacute;c em nuốt kh&ocirc;ng tr&ocirc;i.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	C&oacute; lẽ l&agrave; do ch&uacute;ng ta dạy lịch sử với ti&ecirc;u ch&iacute; định sẵn, ta lu&ocirc;n thắng, địch to&agrave;n thua. Ta vĩ đại c&ograve;n địch tầm thường. Trận n&agrave;o ta cũng thắng, địch chạy d&agrave;i, ta thu được nhiều chiến lợi phẩm, đếm rất nhiều x&aacute;c qu&acirc;n th&ugrave;&hellip;</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Kh&ocirc;ng! Lịch sử kh&ocirc;ng chỉ c&oacute; h&agrave;o h&ugrave;ng m&agrave; c&ograve;n bi tr&aacute;ng, kh&ocirc;ng chỉ c&oacute; thắng lợi m&agrave; c&ograve;n thất bại, kh&ocirc;ng chỉ c&oacute; hạnh ph&uacute;c m&agrave; mu&ocirc;n triệu đắng cay. Để c&oacute; chiến thắng qu&acirc;n Minh, d&acirc;n Đại Việt phải trả gi&aacute; nhiều năm l&agrave;m n&ocirc; lệ cho giặc phương Bắc: &ldquo;Nướng d&acirc;n đen tr&ecirc;n ngọn lửa hung t&agrave;n - V&ugrave;i con đỏ xuống dưới hầm tai vạ&rdquo; (B&igrave;nh Ng&ocirc; đại c&aacute;o). Để c&oacute; &nbsp;chiến thắng tr&ecirc;n s&ocirc;ng Bạch Đằng năm 1288, d&acirc;n Đại Việt phải &ldquo;Nh&igrave;n thấy sứ giặc đi lại ngh&ecirc;nh ngang ngo&agrave;i đường, mang uốn lưỡi c&uacute; diều m&agrave; sỉ mắng triều đ&igrave;nh, đem th&acirc;n d&ecirc; ch&oacute; m&agrave; bắt nạt tổ phụ - Hịch Tướng sĩ&rdquo;. Đại Việt c&oacute; nhiều v&otilde; tướng t&agrave;i danh, văn quan nức tiếng th&igrave; cũng c&oacute; những Trần &Iacute;ch Tắc &ocirc;m ch&acirc;n ngoại bang.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Thời n&agrave;o cũng thế, ngo&agrave;i chiến thắng, lịch sử ghi lại những sai lầm phải trả gi&aacute; bằng m&aacute;u xương, bằng sự đ&oacute;i ngh&egrave;o, bằng những bước đi l&ugrave;i trong lạc hậu của d&acirc;n tộc. Nếu đừng &nbsp;t&ocirc; hồng m&agrave; dạy lịch sử bằng tất cả sự trung thực th&igrave; học sinh sẽ rơi nước mắt bởi những trang sử huy ho&agrave;ng đồng thời cũng sẽ thấu hiểu những kh&oacute; khăn m&agrave; đất nước đ&atilde; trải qua tại những thời điểm nhất định.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Lịch sử sống động về c&aacute;c trận hải chiến Ho&agrave;ng Sa, Trường Sa, bi&ecirc;n giới ph&iacute;a Bắc, bi&ecirc;n giới T&acirc;y Nam, ai đ&atilde; chiếm biển, chiếm đảo của Việt Nam? V&igrave; sao ch&uacute;ng ta để mất biển, mất đảo? Những trang sử đ&oacute; kh&ocirc;ng thể kh&ocirc;ng n&oacute;ng bỏng tr&ecirc;n bục giảng.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	C&aacute;c bạn trẻ đừng coi thường lịch sử bởi nếu được biết một c&aacute;ch ch&acirc;n thực, chắc chắn c&aacute;c bạn sẽ kh&oacute;c v&igrave; niềm tự h&agrave;o cũng như sự cay đắng. C&aacute;c bạn sẽ hiểu được sự thật v&agrave; y&ecirc;u lịch sử đất nước với tất cả cảm x&uacute;c, sẽ &acirc;n hận v&igrave; từng ch&aacute;n gh&eacute;t m&ocirc;n lịch sử.</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	Đừng x&eacute; s&aacute;ch lịch sử nữa c&aacute;c bạn nh&eacute;.</div>\r\n', '1', '2013-10-02 11:51:39', null);

-- ----------------------------
-- Table structure for `authors`
-- ----------------------------
DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of authors
-- ----------------------------
INSERT INTO authors VALUES ('1', 'Nguyễn Hiến Lê', '2013-10-04', '2013-10-04');
INSERT INTO authors VALUES ('2', 'Phan Bội Châu', '2013-10-04', '2013-10-04');
INSERT INTO authors VALUES ('3', 'Phan Huy Khải', '2013-10-04', '2013-10-04');
INSERT INTO authors VALUES ('4', 'Lê Văn Lan', '2013-10-04', '2013-10-04');
INSERT INTO authors VALUES ('5', 'Hồ Chí Minh', '2013-10-04', '2013-10-04');
INSERT INTO authors VALUES ('6', 'Võ Nguyên Giáp', '2013-10-04', '2013-10-04');
INSERT INTO authors VALUES ('7', 'Phan Chu Trinh', '2013-10-05', '2013-10-05');
INSERT INTO authors VALUES ('8', 'Huy Đức', '2013-10-13', '2013-10-13');

-- ----------------------------
-- Table structure for `books`
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL COMMENT 'Tên cuốn sách',
  `number_of_pages` int(11) DEFAULT NULL COMMENT 'Tổng số trang',
  `publisher` varchar(45) NOT NULL COMMENT 'Nhà xuất bản',
  `year_of_publish` date DEFAULT NULL COMMENT 'Năm xuất bản',
  `total` int(11) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL COMMENT 'Giá sách',
  `created` date DEFAULT NULL COMMENT 'Ngày tạo biên mục cho cuốn sách',
  `paper_size` varchar(15) DEFAULT NULL COMMENT 'Khổ giấy',
  `user_created` varchar(45) DEFAULT NULL COMMENT 'Người biên mục',
  `location` varchar(45) DEFAULT NULL COMMENT 'Vị trí cuốn sách',
  `description` mediumtext COMMENT 'Mô tả nội dung cơ bản của cuốn sách',
  `used_as` tinyint(4) DEFAULT NULL COMMENT '0 - chỉ đọc tại chỗ\n1- Có thể mượn về',
  `language` varchar(11) DEFAULT NULL COMMENT 'Ngôn ngữ của tài liệu',
  `book_type_id` int(11) DEFAULT NULL COMMENT 'Loại tài liệu (sách,tài liệu,giáo trình,truyện,tiểu thuyết,sách tham khảo)',
  `book_category_id` int(11) DEFAULT NULL COMMENT 'The loai sach: tu nhien, Xa hoi, Tin hoc',
  `teacher_only` tinyint(4) DEFAULT NULL,
  `authors` varchar(255) NOT NULL,
  `borrow_type` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lib_BookStores_lib_BookLanguages1_idx` (`language`),
  KEY `fk_lib_BookStores_lib_BookType1_idx` (`book_type_id`),
  KEY `fk_lib_BookStores_lib_BookCategories1_idx` (`book_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin của một tập các cuốn sách cùng tên';

-- ----------------------------
-- Records of books
-- ----------------------------
INSERT INTO books VALUES ('1', 'Hồi ký Nguyễn Hiến Lê', '160', 'NXB Giáo Dục', '0000-00-00', '3', '', '2013-10-11', null, null, '1', 'Hồi ký Nguyễn Hiến Lê (Phần chưa được công bố)', null, '1', '2', '2', '1', 'Nguyễn Hiến Lê, ', '1');
INSERT INTO books VALUES ('2', 'Bên thắng cuộc', '200', 'NXB Giáo Dục', '0000-00-00', '0', '100 vnd', '2013-10-13', null, null, '2', 'sách hay nhất', null, 'Vietnamese', '2', '10', '1', 'Huy Đức', '1');
INSERT INTO books VALUES ('3', 'Bên thắng cuộc (phần 2)', '200', 'NXB Văn Học', '0000-00-00', '0', '', '2013-10-13', null, null, '1', '', null, 'Vietnamese', '1', '10', '1', 'Huy Đức, ', '1');

-- ----------------------------
-- Table structure for `book_authors`
-- ----------------------------
DROP TABLE IF EXISTS `book_authors`;
CREATE TABLE `book_authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lib_BookAuthor_lib_BookStores1_idx` (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_authors
-- ----------------------------
INSERT INTO book_authors VALUES ('1', '0', '129');
INSERT INTO book_authors VALUES ('2', '0', '130');
INSERT INTO book_authors VALUES ('3', '0', '131');
INSERT INTO book_authors VALUES ('4', '0', '131');
INSERT INTO book_authors VALUES ('5', '0', '132');
INSERT INTO book_authors VALUES ('6', '0', '132');
INSERT INTO book_authors VALUES ('7', '0', '133');
INSERT INTO book_authors VALUES ('8', '0', '133');
INSERT INTO book_authors VALUES ('9', '0', '134');
INSERT INTO book_authors VALUES ('10', '0', '134');
INSERT INTO book_authors VALUES ('11', '0', '135');
INSERT INTO book_authors VALUES ('12', '0', '135');
INSERT INTO book_authors VALUES ('13', '0', '136');
INSERT INTO book_authors VALUES ('14', '0', '136');
INSERT INTO book_authors VALUES ('15', '0', '137');
INSERT INTO book_authors VALUES ('16', '0', '137');
INSERT INTO book_authors VALUES ('17', '0', '138');
INSERT INTO book_authors VALUES ('18', '0', '138');
INSERT INTO book_authors VALUES ('19', '0', '139');
INSERT INTO book_authors VALUES ('20', '0', '139');
INSERT INTO book_authors VALUES ('21', '0', '12345');
INSERT INTO book_authors VALUES ('22', '0', '12345');
INSERT INTO book_authors VALUES ('23', '0', '140');
INSERT INTO book_authors VALUES ('24', '0', '140');
INSERT INTO book_authors VALUES ('25', '0', '140');
INSERT INTO book_authors VALUES ('26', '0', '141');
INSERT INTO book_authors VALUES ('27', '0', '142');
INSERT INTO book_authors VALUES ('28', '0', '12346');
INSERT INTO book_authors VALUES ('29', '0', '12347');
INSERT INTO book_authors VALUES ('30', '0', '12348');
INSERT INTO book_authors VALUES ('31', '0', '12349');
INSERT INTO book_authors VALUES ('32', '0', '12350');

-- ----------------------------
-- Table structure for `book_categories`
-- ----------------------------
DROP TABLE IF EXISTS `book_categories`;
CREATE TABLE `book_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` tinytext,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `user_created` varchar(100) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='The loai sach: tu nhien, Xa hoi, Tin hoc';

-- ----------------------------
-- Records of book_categories
-- ----------------------------
INSERT INTO book_categories VALUES ('1', 'Tin học nnnn', '', null, '2013-10-05', null, '0');
INSERT INTO book_categories VALUES ('2', 'Triết học', '', null, '2013-10-05', null, '1');
INSERT INTO book_categories VALUES ('3', 'Tôn giáo', null, null, null, null, '1');
INSERT INTO book_categories VALUES ('4', 'Khoa học - Xã hội', null, null, null, null, '1');
INSERT INTO book_categories VALUES ('5', 'Ngôn ngữ', null, null, null, null, '1');
INSERT INTO book_categories VALUES ('6', 'KHTN và toán học', null, null, null, null, '1');
INSERT INTO book_categories VALUES ('7', 'Công nghệ', null, null, null, null, '1');
INSERT INTO book_categories VALUES ('8', 'Nghệ Thuật', null, null, null, null, '1');
INSERT INTO book_categories VALUES ('9', 'Văn học', null, null, null, null, '1');
INSERT INTO book_categories VALUES ('10', 'Lịch sử', null, null, null, null, '1');
INSERT INTO book_categories VALUES ('12', 'Giáo trình', 'skdfjsdlfjsd', '2013-10-05', '2013-10-05', ' (Admin)', '1');

-- ----------------------------
-- Table structure for `book_languages`
-- ----------------------------
DROP TABLE IF EXISTS `book_languages`;
CREATE TABLE `book_languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` tinytext,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `user_created` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_languages
-- ----------------------------
INSERT INTO book_languages VALUES ('1', 'Vietnamese', null, null, null, null);
INSERT INTO book_languages VALUES ('2', 'English', '', null, '2013-09-28', null);
INSERT INTO book_languages VALUES ('3', 'French', null, null, null, null);
INSERT INTO book_languages VALUES ('4', 'China', '', null, '2013-09-28', null);
INSERT INTO book_languages VALUES ('5', 'Japan', null, null, null, null);
INSERT INTO book_languages VALUES ('6', 'Korea', null, null, null, null);

-- ----------------------------
-- Table structure for `book_serials`
-- ----------------------------
DROP TABLE IF EXISTS `book_serials`;
CREATE TABLE `book_serials` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL COMMENT 'Số thứ tự cuốn sách',
  `created` datetime NOT NULL COMMENT 'Ngày khởi đã khởi tạo',
  `user_creater` varchar(45) NOT NULL COMMENT 'Người khởi tạo',
  `status` tinyint(1) NOT NULL COMMENT 'Tình trạng cuốn sách cụ thể',
  `modified` datetime NOT NULL,
  `barcode` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='Một cuốn sách cụ thể';

-- ----------------------------
-- Records of book_serials
-- ----------------------------
INSERT INTO book_serials VALUES ('1', '1', '2013-10-13 00:44:07', '', '0', '2013-10-19 01:48:15', '001100');
INSERT INTO book_serials VALUES ('2', '1', '2013-10-13 00:44:31', '', '0', '2013-10-14 10:55:19', '001101');
INSERT INTO book_serials VALUES ('3', '1', '2013-10-13 00:44:39', '', '0', '2013-10-14 10:57:17', '001102');
INSERT INTO book_serials VALUES ('4', '0', '2013-10-13 05:46:36', '', '1', '2013-10-13 05:46:36', '001103');
INSERT INTO book_serials VALUES ('5', '0', '2013-10-13 05:47:07', '', '1', '2013-10-13 05:47:07', '001104');

-- ----------------------------
-- Table structure for `book_types`
-- ----------------------------
DROP TABLE IF EXISTS `book_types`;
CREATE TABLE `book_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` tinytext,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `user_created` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='Sach tham khao, sach giao trinh,...';

-- ----------------------------
-- Records of book_types
-- ----------------------------
INSERT INTO book_types VALUES ('1', 'Giáo trình', null, null, null, null);
INSERT INTO book_types VALUES ('2', 'Sách Tham khảo', '', null, '2013-10-02', null);
INSERT INTO book_types VALUES ('3', 'Đề tài khoa học', null, null, null, null);
INSERT INTO book_types VALUES ('4', 'Luận án', null, null, null, null);
INSERT INTO book_types VALUES ('5', 'Báo, Tạp chí', null, null, null, null);
INSERT INTO book_types VALUES ('6', 'Tiểu thuyết', null, null, null, null);
INSERT INTO book_types VALUES ('7', 'Sách trinh thám', '', '2013-09-28', '2013-09-28', null);
INSERT INTO book_types VALUES ('8', 'Luận văn', 'Luận văn', '2013-09-28', '2013-09-28', ' (Admin)');

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `description` tinytext CHARACTER SET utf8,
  `user_created` varchar(200) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO categories VALUES ('1', null, 'Trang chủ', 'trang-chu', '1', 'mô tả\r\n', ' (Admin)', null, '2013-09-26');
INSERT INTO categories VALUES ('2', '5', 'Giới thiệu', 'gioi-thieu', '1', '', ' (Admin)', null, '2013-09-26');
INSERT INTO categories VALUES ('3', null, 'Tin tức', '', '1', '', ' (Admin)', null, '2013-09-24');
INSERT INTO categories VALUES ('4', null, 'Hình ảnh hoạt động', '', '1', null, null, null, '2013-09-24');
INSERT INTO categories VALUES ('5', null, 'Hướng dẫn sử dụng', '', '1', null, null, null, '2013-09-26');

-- ----------------------------
-- Table structure for `ciculations`
-- ----------------------------
DROP TABLE IF EXISTS `ciculations`;
CREATE TABLE `ciculations` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'chi tiết mượn trả sách',
  `created` date DEFAULT NULL COMMENT 'Ngày mượn',
  `date_return` date DEFAULT NULL COMMENT 'Ngày trã',
  `librarian` varchar(45) DEFAULT NULL COMMENT 'Tên cán bộ thư viện thực hiện hoạt động này',
  `extensions` tinyint(4) DEFAULT NULL,
  `reader` varchar(30) DEFAULT NULL COMMENT 'Mã bạn đọc mượn',
  `book_serial_id` int(11) DEFAULT NULL COMMENT 'Quyển sách được mượn',
  PRIMARY KEY (`id`),
  KEY `fk_lib_Ciculations_lib_Readers1_idx` (`reader`),
  KEY `fk_lib_Ciculations_lib_SerialBooks1_idx` (`book_serial_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Bảng chi tiết mượn trả sách (Nếu có người mượn thì thêm vào  /* comment truncated */ /*1 record, Nếu trã sách thì xóa record đó)*/';

-- ----------------------------
-- Records of ciculations
-- ----------------------------
INSERT INTO ciculations VALUES ('2', '2013-10-14', '2014-07-11', '', '1', '331.08.0001', '2');
INSERT INTO ciculations VALUES ('3', '2013-10-14', '2014-07-11', '', '1', '331.08.0001', '3');
INSERT INTO ciculations VALUES ('4', '2013-10-19', '2014-01-17', '', '0', '331.08.0001', '1');

-- ----------------------------
-- Table structure for `ciculation_policies`
-- ----------------------------
DROP TABLE IF EXISTS `ciculation_policies`;
CREATE TABLE `ciculation_policies` (
  `id` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `unit_of` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ciculation_policies
-- ----------------------------
INSERT INTO ciculation_policies VALUES ('PMTC', 'Phạt vi phạm không trả sách mượn tại chỗ', '7', 'ngày khóa thẻ');
INSERT INTO ciculation_policies VALUES ('PQHM', 'Phạt vi phạm quá hạn mượn sách', '1000', 'đồng/ngày');
INSERT INTO ciculation_policies VALUES ('SLGH', 'Số lần gia hạn tài liệu tối đa', '1', 'lần');
INSERT INTO ciculation_policies VALUES ('STLM', 'Số tài liệu tối đa mượn', '5', 'cuốn');
INSERT INTO ciculation_policies VALUES ('TGGH', 'Thời gian gia hạn', '90', 'ngày');
INSERT INTO ciculation_policies VALUES ('TGLT', 'Thời gian lưu thông', '730', 'ngày');
INSERT INTO ciculation_policies VALUES ('TGMS', 'Thời gian mượn tài liệu', '90', 'ngày');

-- ----------------------------
-- Table structure for `departments`
-- ----------------------------
DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL COMMENT 'Tên lớp',
  `description` tinytext,
  `faculty_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `actived` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tbl_Class_tbl_Faculty1_idx` (`faculty_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of departments
-- ----------------------------
INSERT INTO departments VALUES ('1', '08T2', '08t2', '1', '2013-09-20 23:07:44', '2013-09-22 11:15:17', '1');
INSERT INTO departments VALUES ('2', '08T1', '08T1', '1', '2013-09-20 23:08:27', '2013-09-20 23:09:47', '1');
INSERT INTO departments VALUES ('3', '08T3', 'lớp 08T3', '1', '2013-09-20 23:21:43', '2013-09-20 23:22:59', '1');
INSERT INTO departments VALUES ('4', '08T4', 'lớp 08T4', '1', '2013-09-20 23:23:20', '2013-09-20 23:23:20', '1');
INSERT INTO departments VALUES ('5', '08DT1', '', '2', '2013-10-05 10:39:45', '2013-10-05 10:42:12', null);
INSERT INTO departments VALUES ('6', '08DT2', '', '1', '2013-10-05 10:42:38', '2013-10-05 10:42:38', null);

-- ----------------------------
-- Table structure for `faculties`
-- ----------------------------
DROP TABLE IF EXISTS `faculties`;
CREATE TABLE `faculties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT 'Tên khoa',
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of faculties
-- ----------------------------
INSERT INTO faculties VALUES ('1', 'Công nghệ thông tin', 'Khoa công nghệ thông tin', null, '2013-09-22 11:48:16', '1');
INSERT INTO faculties VALUES ('2', 'Điện tử viễn thông', 'Khoa điện tử viễn thông', null, '2013-09-21 03:11:17', '1');
INSERT INTO faculties VALUES ('3', 'Xây dựng dân dụng', 'Khoa xây dựn dân dụng', null, '2013-09-21 02:23:43', '1');
INSERT INTO faculties VALUES ('4', 'Xây dựng cầu đường', 'Khoa xây dựng cầu đường', null, '2013-09-21 02:23:54', '1');
INSERT INTO faculties VALUES ('7', 'Môi trường', 'Khoa môi trường', '2013-09-20 22:20:13', '2013-09-22 11:48:31', '1');
INSERT INTO faculties VALUES ('8', 'Tin học xây dựng', 'Khoa tin học xây dựng', '2013-09-20 22:22:02', '2013-09-20 22:23:14', '1');
INSERT INTO faculties VALUES ('9', 'Cơ điện tử', 'khoa cơ điện tử', '2013-09-20 22:23:11', '2013-09-21 03:11:29', '1');

-- ----------------------------
-- Table structure for `history_ciculations`
-- ----------------------------
DROP TABLE IF EXISTS `history_ciculations`;
CREATE TABLE `history_ciculations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL COMMENT 'Thời gian lưu thông',
  `user_created` varchar(45) NOT NULL COMMENT 'Tên cán bộ thư viện thực hiện hoạt động này',
  `status` tinyint(1) NOT NULL COMMENT 'Trạng thái lịch sử lưu thông (0 - Đã trã, 1 - Mới cho mượn)',
  `reader_id` varchar(50) NOT NULL COMMENT 'Mã thẻ người mượn',
  `book_serial_id` varchar(50) NOT NULL COMMENT 'Mã sách mượn',
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lib_HistoryCiculations_lib_Readers1_idx` (`reader_id`),
  KEY `fk_lib_HistoryCiculations_lib_SerialBooks1_idx` (`book_serial_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='Lịch sử lưu thông của tài liệu (Dùng để thống kê tài liệu mư /* comment truncated */ /*ợn/trã trong quá trình hoạt động của thư viện)*/';

-- ----------------------------
-- Records of history_ciculations
-- ----------------------------
INSERT INTO history_ciculations VALUES ('5', '2013-06-07 00:00:00', 'user01', '0', '331.08.0001', '12', null);
INSERT INTO history_ciculations VALUES ('9', '2013-06-08 00:00:00', 'user01', '1', '331.08.0001', '12', null);
INSERT INTO history_ciculations VALUES ('10', '2013-06-08 00:00:00', 'user01', '1', '331.08.0001', '10', null);
INSERT INTO history_ciculations VALUES ('11', '2013-06-09 00:00:00', 'user01', '0', '331.08.0001', '10', null);
INSERT INTO history_ciculations VALUES ('12', '2013-06-03 00:00:00', 'user01', '1', '331.08.0001', '20', null);
INSERT INTO history_ciculations VALUES ('13', '2013-06-16 00:00:00', 'user01', '1', '331.08.0003', '30', null);

-- ----------------------------
-- Table structure for `i18n`
-- ----------------------------
DROP TABLE IF EXISTS `i18n`;
CREATE TABLE `i18n` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of i18n
-- ----------------------------

-- ----------------------------
-- Table structure for `lib_categoryarticle`
-- ----------------------------
DROP TABLE IF EXISTS `lib_categoryarticle`;
CREATE TABLE `lib_categoryarticle` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(50) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lib_categoryarticle
-- ----------------------------
INSERT INTO lib_categoryarticle VALUES ('1', 'Trang chủ');
INSERT INTO lib_categoryarticle VALUES ('2', 'Giới thiệu');
INSERT INTO lib_categoryarticle VALUES ('3', 'Tin tức');
INSERT INTO lib_categoryarticle VALUES ('4', 'Hình ảnh hoạt động');
INSERT INTO lib_categoryarticle VALUES ('5', 'Hướng dẫn sử dụng');
INSERT INTO lib_categoryarticle VALUES ('6', 'Tìm kiếm');
INSERT INTO lib_categoryarticle VALUES ('7', 'Sản Phẩm');
INSERT INTO lib_categoryarticle VALUES ('8', 'Dịch vụ');
INSERT INTO lib_categoryarticle VALUES ('9', 'Liên hệ');

-- ----------------------------
-- Table structure for `login_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `login_tokens`;
CREATE TABLE `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_tokens
-- ----------------------------
INSERT INTO login_tokens VALUES ('5', '2', 'a79d3210be788742b28ba0f8fd61a3b2', '2 weeks', '0', '2013-09-17 06:27:04', '2013-10-01 06:27:04');

-- ----------------------------
-- Table structure for `logs`
-- ----------------------------
DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reader_code` varchar(30) DEFAULT NULL,
  `reader_name` varchar(100) DEFAULT NULL,
  `librarian` varchar(100) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of logs
-- ----------------------------
INSERT INTO logs VALUES ('1', '331.08.0001', 'Le Mai Vien', '', 'Trả tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:07', 'return');
INSERT INTO logs VALUES ('2', '331.08.0001', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('3', '331.08.0001', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('4', '331.08.0001', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('5', '331.08.0001', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('6', '331.08.0001', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('7', '331.08.0001', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('8', '331.08.0001', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('9', '331.08.0002', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('10', '331.08.0002', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('11', '331.08.0002', 'Le Mai Vien', '', 'Trả tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:07', 'return');
INSERT INTO logs VALUES ('12', '331.08.0002', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('13', '331.08.0002', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('14', '331.08.0002', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('15', '331.08.0002', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('16', '331.08.0002', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('17', '331.08.0002', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('18', '331.08.0002', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('19', '331.08.0002', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('20', '331.08.0002', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('21', '331.08.0003', 'Le Mai Vien', '', 'Trả tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:07', 'return');
INSERT INTO logs VALUES ('22', '331.08.0003', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('23', '331.08.0003', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('24', '331.08.0003', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('25', '331.08.0003', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('26', '331.08.0003', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('27', '331.08.0003', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('28', '331.08.0003', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('29', '331.08.0003', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('30', '331.08.0003', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('31', '331.08.0004', 'Le Mai Vien', '', 'Trả tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:07', 'return');
INSERT INTO logs VALUES ('32', '331.08.0004', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('33', '331.08.0004', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('34', '331.08.0004', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('35', '331.08.0004', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('36', '331.08.0004', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('37', '331.08.0005', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('38', '331.08.0005', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('39', '331.08.0005', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');
INSERT INTO logs VALUES ('40', '331.08.0005', 'Le Mai Vien', '', 'Mượn tài liệu \"Hồi ký Nguyễn Hiến Lê\"', '2013-10-19 01:48:15', 'borrow');

-- ----------------------------
-- Table structure for `menus`
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ordering` int(11) NOT NULL,
  `published` tinyint(1) DEFAULT '1',
  `controller` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `action` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ext` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `module` tinyint(1) DEFAULT '0',
  `view` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `position` enum('right','left','top') CHARACTER SET utf8 DEFAULT NULL,
  `user_created` varchar(100) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO menus VALUES ('2', 'trang-chu', 'Trang chủ', null, 'http://localhost/LibraryManagement/articles/view/id:7/slug:trang_chu', '3', '1', 'articles', 'view', '7', '0', 'Đừng xé sách lịch sử nữa các bạn nhé!', null, null, null, '1');

-- ----------------------------
-- Table structure for `order_online`
-- ----------------------------
DROP TABLE IF EXISTS `order_online`;
CREATE TABLE `order_online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `reader_id` varchar(50) NOT NULL,
  `book_serial_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lib_orderOnline_lib_Readers1_idx` (`reader_id`),
  KEY `fk_lib_orderOnline_lib_SerialBooks1_idx` (`book_serial_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_online
-- ----------------------------
INSERT INTO order_online VALUES ('1', '2013-06-01', '1', '331.08.0001', '21');
INSERT INTO order_online VALUES ('2', '2013-06-01', '0', '331.08.0001', '18');
INSERT INTO order_online VALUES ('3', '2013-06-01', '0', '331.08.0001', '10');
INSERT INTO order_online VALUES ('4', '2013-06-01', '0', '331.08.0001', '11');
INSERT INTO order_online VALUES ('5', '2013-06-01', '0', '331.08.0001', '19');
INSERT INTO order_online VALUES ('6', '2013-06-06', '0', '331.08.0001', '23');

-- ----------------------------
-- Table structure for `publishers`
-- ----------------------------
DROP TABLE IF EXISTS `publishers`;
CREATE TABLE `publishers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of publishers
-- ----------------------------
INSERT INTO publishers VALUES ('1', 'NXB Giáo Dục');
INSERT INTO publishers VALUES ('2', 'NXB Văn Học');
INSERT INTO publishers VALUES ('3', 'NXB Kim Đồng');
INSERT INTO publishers VALUES ('4', 'NXB Thanh Niên');
INSERT INTO publishers VALUES ('5', 'NXB Đà Nẵng');

-- ----------------------------
-- Table structure for `readers`
-- ----------------------------
DROP TABLE IF EXISTS `readers`;
CREATE TABLE `readers` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `created` date NOT NULL COMMENT 'Ngày tạo thẻ bạn đọc',
  `date_expiry` date NOT NULL COMMENT 'Ngày hết hạn sử dụng',
  `year_learn` varchar(45) NOT NULL COMMENT 'Khóa học',
  `total_borrow` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `is_teacher` tinyint(4) DEFAULT NULL,
  `is_locked` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lib_Reader_lib_User1_idx` (`user_id`),
  KEY `fk_lib_Reader_tbl_Class1_idx` (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin về một thẻ bạn đọc';

-- ----------------------------
-- Records of readers
-- ----------------------------
INSERT INTO readers VALUES ('1', '2013-10-06', '2014-06-10', '', '0', '24', '1', '1', '0');
INSERT INTO readers VALUES ('2', '2013-10-06', '2014-10-06', '', '0', '25', '1', '1', '0');
INSERT INTO readers VALUES ('3', '2013-10-06', '2014-10-06', '', '0', '26', '1', '1', '0');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `salt` text CHARACTER SET latin1,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email_verified` int(1) DEFAULT '0',
  `is_active` int(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `sex` tinyint(4) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `resident_address` varchar(255) DEFAULT NULL,
  `native_place` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `description` tinytext,
  `avatar` varchar(255) DEFAULT NULL,
  `is_password_change` tinyint(4) DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO users VALUES ('1', '1', 'admin', '146d1faa8db8b0a5725919567e36968c', '541981634e064d9d0f38f72c0a20c70d', 'admin@admin.com', '', '1', '1', '', '2013-09-16 13:11:33', '2013-10-13 11:50:37', null, null, null, null, null, null, null, null, null);
INSERT INTO users VALUES ('2', '2', 'vienlemai', '6eb88ce0c322a3e9cc0832938153fa5b', '607a7d89920dfd96624f3a97366f9dc1', 'lemaibk08@gmail.com', 'Mai Vien', '1', '1', null, '2013-09-17 06:26:43', '2013-09-17 06:26:43', null, null, null, null, null, null, null, null, null);
INSERT INTO users VALUES ('24', '4', '331.08.0001', 'dc1073c02862a607df7030d72cf5d696', 'b013d5a566191ef7ade9fae619e90af9', '', 'Le Mai Vien', '1', '0', '127.0.0.1', '2013-10-06 04:24:53', '2013-10-06 04:53:15', null, null, null, null, null, null, null, '0', null);
INSERT INTO users VALUES ('25', '4', '331.08.0002', '5871fe7b12f541c7a0180a9d7fcfb7c5', '71abb28b61fec824316b3a84fcb85dd6', '', 'Le Mai Vien', '1', '0', '127.0.0.1', '2013-10-06 04:25:54', '2013-10-06 04:53:28', null, null, null, null, null, null, null, '0', null);
INSERT INTO users VALUES ('26', '4', '331.08.0003', 'b12df2d63458a68ae264b3e4853251bd', '241518c693082f004831079a26e55f64', '', 'Le Mai Vien', '1', '0', '127.0.0.1', '2013-10-06 04:26:32', '2013-10-06 05:19:12', null, null, null, null, null, null, null, '0', '1');
INSERT INTO users VALUES ('27', '3', 'bienmuc', '1f840f28a9fa61cfba81a6946ec169a0', 'c33794a4daa228d5a2fd373e143b2efa', 'bienmuc@gmail.com', 'Tôi là biên mục', '1', '0', null, '2013-10-17 11:27:10', '2013-10-17 11:27:10', null, null, null, null, null, null, null, null, null);
INSERT INTO users VALUES ('28', '3', 'bienmuc2', 'cd3b66e59bf47e0b6f3ef35d18b95270', '581ecd349ea510fbaa9bd34644cb874c', 'bienmuc2@gmail.com', 'Biên mục viên 2', '1', '0', null, '2013-10-17 11:29:06', '2013-10-17 11:29:06', null, null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `user_groups`
-- ----------------------------
DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_groups
-- ----------------------------
INSERT INTO user_groups VALUES ('1', 'Admin', 'Admin', '0', '2013-09-16 13:11:33', '2013-09-16 13:11:33', null);
INSERT INTO user_groups VALUES ('2', 'Thủ thư', 'Librian', '1', null, null, null);
INSERT INTO user_groups VALUES ('3', 'Biên mục', 'Editor', '1', '2013-10-05 22:12:51', '2013-10-05 22:12:51', null);
INSERT INTO user_groups VALUES ('4', 'Bạn đọc', 'Reader', '1', '2013-10-05 22:13:49', '2013-10-05 22:13:49', null);
INSERT INTO user_groups VALUES ('5', 'Khách', 'Guest', '1', '2013-10-05 22:14:32', '2013-10-05 22:14:32', null);

-- ----------------------------
-- Table structure for `user_group_permissions`
-- ----------------------------
DROP TABLE IF EXISTS `user_group_permissions`;
CREATE TABLE `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=648 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_group_permissions
-- ----------------------------
INSERT INTO user_group_permissions VALUES ('1', '1', 'Pages', 'display', '1');
INSERT INTO user_group_permissions VALUES ('2', '2', 'Pages', 'display', '1');
INSERT INTO user_group_permissions VALUES ('3', '3', 'Pages', 'display', '1');
INSERT INTO user_group_permissions VALUES ('4', '1', 'UserGroupPermissions', 'index', '1');
INSERT INTO user_group_permissions VALUES ('5', '2', 'UserGroupPermissions', 'index', '0');
INSERT INTO user_group_permissions VALUES ('6', '3', 'UserGroupPermissions', 'index', '0');
INSERT INTO user_group_permissions VALUES ('7', '1', 'UserGroupPermissions', 'update', '1');
INSERT INTO user_group_permissions VALUES ('8', '2', 'UserGroupPermissions', 'update', '0');
INSERT INTO user_group_permissions VALUES ('9', '3', 'UserGroupPermissions', 'update', '0');
INSERT INTO user_group_permissions VALUES ('10', '1', 'UserGroups', 'index', '1');
INSERT INTO user_group_permissions VALUES ('11', '2', 'UserGroups', 'index', '0');
INSERT INTO user_group_permissions VALUES ('12', '3', 'UserGroups', 'index', '0');
INSERT INTO user_group_permissions VALUES ('13', '1', 'UserGroups', 'addGroup', '1');
INSERT INTO user_group_permissions VALUES ('14', '2', 'UserGroups', 'addGroup', '0');
INSERT INTO user_group_permissions VALUES ('15', '3', 'UserGroups', 'addGroup', '0');
INSERT INTO user_group_permissions VALUES ('16', '1', 'UserGroups', 'editGroup', '1');
INSERT INTO user_group_permissions VALUES ('17', '2', 'UserGroups', 'editGroup', '0');
INSERT INTO user_group_permissions VALUES ('18', '3', 'UserGroups', 'editGroup', '0');
INSERT INTO user_group_permissions VALUES ('19', '1', 'UserGroups', 'deleteGroup', '1');
INSERT INTO user_group_permissions VALUES ('20', '2', 'UserGroups', 'deleteGroup', '0');
INSERT INTO user_group_permissions VALUES ('21', '3', 'UserGroups', 'deleteGroup', '0');
INSERT INTO user_group_permissions VALUES ('22', '1', 'Users', 'index', '1');
INSERT INTO user_group_permissions VALUES ('23', '2', 'Users', 'index', '0');
INSERT INTO user_group_permissions VALUES ('24', '3', 'Users', 'index', '0');
INSERT INTO user_group_permissions VALUES ('25', '1', 'Users', 'viewUser', '1');
INSERT INTO user_group_permissions VALUES ('26', '2', 'Users', 'viewUser', '0');
INSERT INTO user_group_permissions VALUES ('27', '3', 'Users', 'viewUser', '0');
INSERT INTO user_group_permissions VALUES ('28', '1', 'Users', 'myprofile', '1');
INSERT INTO user_group_permissions VALUES ('29', '2', 'Users', 'myprofile', '1');
INSERT INTO user_group_permissions VALUES ('30', '3', 'Users', 'myprofile', '1');
INSERT INTO user_group_permissions VALUES ('31', '1', 'Users', 'login', '1');
INSERT INTO user_group_permissions VALUES ('32', '2', 'Users', 'login', '1');
INSERT INTO user_group_permissions VALUES ('33', '3', 'Users', 'login', '1');
INSERT INTO user_group_permissions VALUES ('34', '1', 'Users', 'logout', '1');
INSERT INTO user_group_permissions VALUES ('35', '2', 'Users', 'logout', '1');
INSERT INTO user_group_permissions VALUES ('36', '3', 'Users', 'logout', '1');
INSERT INTO user_group_permissions VALUES ('37', '1', 'Users', 'register', '1');
INSERT INTO user_group_permissions VALUES ('38', '2', 'Users', 'register', '1');
INSERT INTO user_group_permissions VALUES ('39', '3', 'Users', 'register', '1');
INSERT INTO user_group_permissions VALUES ('40', '1', 'Users', 'changePassword', '1');
INSERT INTO user_group_permissions VALUES ('41', '2', 'Users', 'changePassword', '0');
INSERT INTO user_group_permissions VALUES ('42', '3', 'Users', 'changePassword', '0');
INSERT INTO user_group_permissions VALUES ('43', '1', 'Users', 'changeUserPassword', '1');
INSERT INTO user_group_permissions VALUES ('44', '2', 'Users', 'changeUserPassword', '1');
INSERT INTO user_group_permissions VALUES ('45', '3', 'Users', 'changeUserPassword', '1');
INSERT INTO user_group_permissions VALUES ('46', '1', 'Users', 'addUser', '1');
INSERT INTO user_group_permissions VALUES ('47', '2', 'Users', 'addUser', '1');
INSERT INTO user_group_permissions VALUES ('48', '3', 'Users', 'addUser', '0');
INSERT INTO user_group_permissions VALUES ('49', '1', 'Users', 'editUser', '1');
INSERT INTO user_group_permissions VALUES ('50', '2', 'Users', 'editUser', '0');
INSERT INTO user_group_permissions VALUES ('51', '3', 'Users', 'editUser', '0');
INSERT INTO user_group_permissions VALUES ('52', '1', 'Users', 'dashboard', '1');
INSERT INTO user_group_permissions VALUES ('53', '2', 'Users', 'dashboard', '1');
INSERT INTO user_group_permissions VALUES ('54', '3', 'Users', 'dashboard', '1');
INSERT INTO user_group_permissions VALUES ('55', '1', 'Users', 'deleteUser', '1');
INSERT INTO user_group_permissions VALUES ('56', '2', 'Users', 'deleteUser', '0');
INSERT INTO user_group_permissions VALUES ('57', '3', 'Users', 'deleteUser', '0');
INSERT INTO user_group_permissions VALUES ('58', '1', 'Users', 'makeActive', '1');
INSERT INTO user_group_permissions VALUES ('59', '2', 'Users', 'makeActive', '0');
INSERT INTO user_group_permissions VALUES ('60', '3', 'Users', 'makeActive', '0');
INSERT INTO user_group_permissions VALUES ('61', '1', 'Users', 'accessDenied', '1');
INSERT INTO user_group_permissions VALUES ('62', '2', 'Users', 'accessDenied', '1');
INSERT INTO user_group_permissions VALUES ('63', '3', 'Users', 'accessDenied', '1');
INSERT INTO user_group_permissions VALUES ('64', '1', 'Users', 'userVerification', '1');
INSERT INTO user_group_permissions VALUES ('65', '2', 'Users', 'userVerification', '1');
INSERT INTO user_group_permissions VALUES ('66', '3', 'Users', 'userVerification', '1');
INSERT INTO user_group_permissions VALUES ('67', '1', 'Users', 'forgotPassword', '1');
INSERT INTO user_group_permissions VALUES ('68', '2', 'Users', 'forgotPassword', '1');
INSERT INTO user_group_permissions VALUES ('69', '3', 'Users', 'forgotPassword', '1');
INSERT INTO user_group_permissions VALUES ('70', '1', 'Users', 'makeActiveInactive', '1');
INSERT INTO user_group_permissions VALUES ('71', '2', 'Users', 'makeActiveInactive', '0');
INSERT INTO user_group_permissions VALUES ('72', '3', 'Users', 'makeActiveInactive', '0');
INSERT INTO user_group_permissions VALUES ('73', '1', 'Users', 'verifyEmail', '1');
INSERT INTO user_group_permissions VALUES ('74', '2', 'Users', 'verifyEmail', '0');
INSERT INTO user_group_permissions VALUES ('75', '3', 'Users', 'verifyEmail', '0');
INSERT INTO user_group_permissions VALUES ('76', '1', 'Users', 'activatePassword', '1');
INSERT INTO user_group_permissions VALUES ('77', '2', 'Users', 'activatePassword', '0');
INSERT INTO user_group_permissions VALUES ('78', '3', 'Users', 'activatePassword', '0');
INSERT INTO user_group_permissions VALUES ('79', '1', 'LibArticles', 'index', '1');
INSERT INTO user_group_permissions VALUES ('80', '2', 'LibArticles', 'index', '0');
INSERT INTO user_group_permissions VALUES ('81', '3', 'LibArticles', 'index', '0');
INSERT INTO user_group_permissions VALUES ('82', '1', 'LibArticles', 'view', '1');
INSERT INTO user_group_permissions VALUES ('83', '2', 'LibArticles', 'view', '0');
INSERT INTO user_group_permissions VALUES ('84', '3', 'LibArticles', 'view', '0');
INSERT INTO user_group_permissions VALUES ('85', '1', 'LibArticles', 'add', '1');
INSERT INTO user_group_permissions VALUES ('86', '2', 'LibArticles', 'add', '0');
INSERT INTO user_group_permissions VALUES ('87', '3', 'LibArticles', 'add', '0');
INSERT INTO user_group_permissions VALUES ('88', '1', 'LibArticles', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('89', '2', 'LibArticles', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('90', '3', 'LibArticles', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('91', '7', 'UserGroupPermissions', 'index', '0');
INSERT INTO user_group_permissions VALUES ('92', '7', 'UserGroups', 'index', '0');
INSERT INTO user_group_permissions VALUES ('93', '1', 'Departments', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('94', '2', 'Departments', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('95', '3', 'Departments', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('96', '4', 'Departments', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('97', '1', 'Categories', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('98', '2', 'Categories', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('99', '3', 'Categories', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('100', '4', 'Categories', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('101', '1', 'Menus', 'index', '1');
INSERT INTO user_group_permissions VALUES ('102', '2', 'Menus', 'index', '1');
INSERT INTO user_group_permissions VALUES ('103', '3', 'Menus', 'index', '1');
INSERT INTO user_group_permissions VALUES ('104', '4', 'Menus', 'index', '1');
INSERT INTO user_group_permissions VALUES ('105', '1', 'Categories', 'index', '1');
INSERT INTO user_group_permissions VALUES ('106', '2', 'Categories', 'index', '1');
INSERT INTO user_group_permissions VALUES ('107', '3', 'Categories', 'index', '0');
INSERT INTO user_group_permissions VALUES ('108', '4', 'Categories', 'index', '0');
INSERT INTO user_group_permissions VALUES ('109', '1', 'Books', 'index', '1');
INSERT INTO user_group_permissions VALUES ('110', '2', 'Books', 'index', '1');
INSERT INTO user_group_permissions VALUES ('111', '3', 'Books', 'index', '1');
INSERT INTO user_group_permissions VALUES ('112', '4', 'Books', 'index', '0');
INSERT INTO user_group_permissions VALUES ('113', '1', 'Admin', 'dashboard', '1');
INSERT INTO user_group_permissions VALUES ('114', '2', 'Admin', 'dashboard', '1');
INSERT INTO user_group_permissions VALUES ('115', '3', 'Admin', 'dashboard', '1');
INSERT INTO user_group_permissions VALUES ('116', '4', 'Admin', 'dashboard', '0');
INSERT INTO user_group_permissions VALUES ('117', '5', 'Admin', 'dashboard', '0');
INSERT INTO user_group_permissions VALUES ('118', '1', 'App', 'active', '1');
INSERT INTO user_group_permissions VALUES ('119', '2', 'App', 'active', '1');
INSERT INTO user_group_permissions VALUES ('120', '3', 'App', 'active', '1');
INSERT INTO user_group_permissions VALUES ('121', '4', 'App', 'active', '0');
INSERT INTO user_group_permissions VALUES ('122', '5', 'App', 'active', '0');
INSERT INTO user_group_permissions VALUES ('123', '1', 'App', 'getLog', '1');
INSERT INTO user_group_permissions VALUES ('124', '2', 'App', 'getLog', '0');
INSERT INTO user_group_permissions VALUES ('125', '3', 'App', 'getLog', '0');
INSERT INTO user_group_permissions VALUES ('126', '4', 'App', 'getLog', '0');
INSERT INTO user_group_permissions VALUES ('127', '5', 'App', 'getLog', '0');
INSERT INTO user_group_permissions VALUES ('128', '1', 'Articles', 'index', '1');
INSERT INTO user_group_permissions VALUES ('129', '2', 'Articles', 'index', '1');
INSERT INTO user_group_permissions VALUES ('130', '3', 'Articles', 'index', '0');
INSERT INTO user_group_permissions VALUES ('131', '4', 'Articles', 'index', '0');
INSERT INTO user_group_permissions VALUES ('132', '5', 'Articles', 'index', '0');
INSERT INTO user_group_permissions VALUES ('133', '1', 'Articles', 'view', '1');
INSERT INTO user_group_permissions VALUES ('134', '2', 'Articles', 'view', '1');
INSERT INTO user_group_permissions VALUES ('135', '3', 'Articles', 'view', '0');
INSERT INTO user_group_permissions VALUES ('136', '4', 'Articles', 'view', '0');
INSERT INTO user_group_permissions VALUES ('137', '5', 'Articles', 'view', '0');
INSERT INTO user_group_permissions VALUES ('138', '1', 'Articles', 'add', '1');
INSERT INTO user_group_permissions VALUES ('139', '2', 'Articles', 'add', '1');
INSERT INTO user_group_permissions VALUES ('140', '3', 'Articles', 'add', '0');
INSERT INTO user_group_permissions VALUES ('141', '4', 'Articles', 'add', '0');
INSERT INTO user_group_permissions VALUES ('142', '5', 'Articles', 'add', '0');
INSERT INTO user_group_permissions VALUES ('143', '1', 'Articles', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('144', '2', 'Articles', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('145', '3', 'Articles', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('146', '4', 'Articles', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('147', '5', 'Articles', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('148', '1', 'Articles', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('149', '2', 'Articles', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('150', '3', 'Articles', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('151', '4', 'Articles', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('152', '5', 'Articles', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('153', '1', 'Articles', 'pulished', '1');
INSERT INTO user_group_permissions VALUES ('154', '2', 'Articles', 'pulished', '1');
INSERT INTO user_group_permissions VALUES ('155', '3', 'Articles', 'pulished', '0');
INSERT INTO user_group_permissions VALUES ('156', '4', 'Articles', 'pulished', '0');
INSERT INTO user_group_permissions VALUES ('157', '5', 'Articles', 'pulished', '0');
INSERT INTO user_group_permissions VALUES ('158', '1', 'Articles', 'userView', '1');
INSERT INTO user_group_permissions VALUES ('159', '2', 'Articles', 'userView', '1');
INSERT INTO user_group_permissions VALUES ('160', '3', 'Articles', 'userView', '1');
INSERT INTO user_group_permissions VALUES ('161', '4', 'Articles', 'userView', '1');
INSERT INTO user_group_permissions VALUES ('162', '5', 'Articles', 'userView', '1');
INSERT INTO user_group_permissions VALUES ('163', '1', 'Articles', 'userIndex', '1');
INSERT INTO user_group_permissions VALUES ('164', '2', 'Articles', 'userIndex', '1');
INSERT INTO user_group_permissions VALUES ('165', '3', 'Articles', 'userIndex', '1');
INSERT INTO user_group_permissions VALUES ('166', '4', 'Articles', 'userIndex', '1');
INSERT INTO user_group_permissions VALUES ('167', '5', 'Articles', 'userIndex', '1');
INSERT INTO user_group_permissions VALUES ('168', '1', 'Authors', 'index', '1');
INSERT INTO user_group_permissions VALUES ('169', '2', 'Authors', 'index', '1');
INSERT INTO user_group_permissions VALUES ('170', '3', 'Authors', 'index', '1');
INSERT INTO user_group_permissions VALUES ('171', '4', 'Authors', 'index', '0');
INSERT INTO user_group_permissions VALUES ('172', '5', 'Authors', 'index', '0');
INSERT INTO user_group_permissions VALUES ('173', '1', 'Authors', 'view', '1');
INSERT INTO user_group_permissions VALUES ('174', '2', 'Authors', 'view', '1');
INSERT INTO user_group_permissions VALUES ('175', '3', 'Authors', 'view', '1');
INSERT INTO user_group_permissions VALUES ('176', '4', 'Authors', 'view', '0');
INSERT INTO user_group_permissions VALUES ('177', '5', 'Authors', 'view', '0');
INSERT INTO user_group_permissions VALUES ('178', '1', 'Authors', 'add', '1');
INSERT INTO user_group_permissions VALUES ('179', '2', 'Authors', 'add', '1');
INSERT INTO user_group_permissions VALUES ('180', '3', 'Authors', 'add', '1');
INSERT INTO user_group_permissions VALUES ('181', '4', 'Authors', 'add', '1');
INSERT INTO user_group_permissions VALUES ('182', '5', 'Authors', 'add', '0');
INSERT INTO user_group_permissions VALUES ('183', '1', 'Authors', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('184', '2', 'Authors', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('185', '3', 'Authors', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('186', '4', 'Authors', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('187', '5', 'Authors', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('188', '1', 'Authors', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('189', '2', 'Authors', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('190', '3', 'Authors', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('191', '4', 'Authors', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('192', '5', 'Authors', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('193', '1', 'BookCategories', 'index', '1');
INSERT INTO user_group_permissions VALUES ('194', '2', 'BookCategories', 'index', '1');
INSERT INTO user_group_permissions VALUES ('195', '3', 'BookCategories', 'index', '1');
INSERT INTO user_group_permissions VALUES ('196', '4', 'BookCategories', 'index', '0');
INSERT INTO user_group_permissions VALUES ('197', '5', 'BookCategories', 'index', '0');
INSERT INTO user_group_permissions VALUES ('198', '1', 'BookCategories', 'view', '1');
INSERT INTO user_group_permissions VALUES ('199', '2', 'BookCategories', 'view', '1');
INSERT INTO user_group_permissions VALUES ('200', '3', 'BookCategories', 'view', '1');
INSERT INTO user_group_permissions VALUES ('201', '4', 'BookCategories', 'view', '0');
INSERT INTO user_group_permissions VALUES ('202', '5', 'BookCategories', 'view', '0');
INSERT INTO user_group_permissions VALUES ('203', '1', 'BookCategories', 'add', '1');
INSERT INTO user_group_permissions VALUES ('204', '2', 'BookCategories', 'add', '1');
INSERT INTO user_group_permissions VALUES ('205', '3', 'BookCategories', 'add', '1');
INSERT INTO user_group_permissions VALUES ('206', '4', 'BookCategories', 'add', '0');
INSERT INTO user_group_permissions VALUES ('207', '5', 'BookCategories', 'add', '0');
INSERT INTO user_group_permissions VALUES ('208', '1', 'BookCategories', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('209', '2', 'BookCategories', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('210', '3', 'BookCategories', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('211', '4', 'BookCategories', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('212', '5', 'BookCategories', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('213', '1', 'BookCategories', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('214', '2', 'BookCategories', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('215', '3', 'BookCategories', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('216', '4', 'BookCategories', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('217', '5', 'BookCategories', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('218', '1', 'BookCategories', 'getBookCategories', '1');
INSERT INTO user_group_permissions VALUES ('219', '2', 'BookCategories', 'getBookCategories', '1');
INSERT INTO user_group_permissions VALUES ('220', '3', 'BookCategories', 'getBookCategories', '1');
INSERT INTO user_group_permissions VALUES ('221', '4', 'BookCategories', 'getBookCategories', '1');
INSERT INTO user_group_permissions VALUES ('222', '5', 'BookCategories', 'getBookCategories', '0');
INSERT INTO user_group_permissions VALUES ('223', '1', 'BookCategories', 'userIndex', '1');
INSERT INTO user_group_permissions VALUES ('224', '2', 'BookCategories', 'userIndex', '1');
INSERT INTO user_group_permissions VALUES ('225', '3', 'BookCategories', 'userIndex', '1');
INSERT INTO user_group_permissions VALUES ('226', '4', 'BookCategories', 'userIndex', '1');
INSERT INTO user_group_permissions VALUES ('227', '5', 'BookCategories', 'userIndex', '0');
INSERT INTO user_group_permissions VALUES ('228', '1', 'BookCategories', 'userView', '1');
INSERT INTO user_group_permissions VALUES ('229', '2', 'BookCategories', 'userView', '1');
INSERT INTO user_group_permissions VALUES ('230', '3', 'BookCategories', 'userView', '1');
INSERT INTO user_group_permissions VALUES ('231', '4', 'BookCategories', 'userView', '1');
INSERT INTO user_group_permissions VALUES ('232', '5', 'BookCategories', 'userView', '0');
INSERT INTO user_group_permissions VALUES ('233', '1', 'BookLanguages', 'index', '1');
INSERT INTO user_group_permissions VALUES ('234', '2', 'BookLanguages', 'index', '1');
INSERT INTO user_group_permissions VALUES ('235', '3', 'BookLanguages', 'index', '1');
INSERT INTO user_group_permissions VALUES ('236', '4', 'BookLanguages', 'index', '0');
INSERT INTO user_group_permissions VALUES ('237', '5', 'BookLanguages', 'index', '0');
INSERT INTO user_group_permissions VALUES ('238', '1', 'BookLanguages', 'view', '1');
INSERT INTO user_group_permissions VALUES ('239', '2', 'BookLanguages', 'view', '1');
INSERT INTO user_group_permissions VALUES ('240', '3', 'BookLanguages', 'view', '1');
INSERT INTO user_group_permissions VALUES ('241', '4', 'BookLanguages', 'view', '0');
INSERT INTO user_group_permissions VALUES ('242', '5', 'BookLanguages', 'view', '0');
INSERT INTO user_group_permissions VALUES ('243', '1', 'BookLanguages', 'add', '1');
INSERT INTO user_group_permissions VALUES ('244', '2', 'BookLanguages', 'add', '1');
INSERT INTO user_group_permissions VALUES ('245', '3', 'BookLanguages', 'add', '1');
INSERT INTO user_group_permissions VALUES ('246', '4', 'BookLanguages', 'add', '0');
INSERT INTO user_group_permissions VALUES ('247', '5', 'BookLanguages', 'add', '0');
INSERT INTO user_group_permissions VALUES ('248', '1', 'BookLanguages', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('249', '2', 'BookLanguages', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('250', '3', 'BookLanguages', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('251', '4', 'BookLanguages', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('252', '5', 'BookLanguages', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('253', '1', 'BookLanguages', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('254', '2', 'BookLanguages', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('255', '3', 'BookLanguages', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('256', '4', 'BookLanguages', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('257', '5', 'BookLanguages', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('258', '1', 'BookSearch', 'userIndex', '1');
INSERT INTO user_group_permissions VALUES ('259', '2', 'BookSearch', 'userIndex', '1');
INSERT INTO user_group_permissions VALUES ('260', '3', 'BookSearch', 'userIndex', '1');
INSERT INTO user_group_permissions VALUES ('261', '4', 'BookSearch', 'userIndex', '1');
INSERT INTO user_group_permissions VALUES ('262', '5', 'BookSearch', 'userIndex', '0');
INSERT INTO user_group_permissions VALUES ('263', '1', 'BookSerials', 'index', '1');
INSERT INTO user_group_permissions VALUES ('264', '2', 'BookSerials', 'index', '1');
INSERT INTO user_group_permissions VALUES ('265', '3', 'BookSerials', 'index', '0');
INSERT INTO user_group_permissions VALUES ('266', '4', 'BookSerials', 'index', '0');
INSERT INTO user_group_permissions VALUES ('267', '5', 'BookSerials', 'index', '0');
INSERT INTO user_group_permissions VALUES ('268', '1', 'BookSerials', 'view', '1');
INSERT INTO user_group_permissions VALUES ('269', '2', 'BookSerials', 'view', '1');
INSERT INTO user_group_permissions VALUES ('270', '3', 'BookSerials', 'view', '0');
INSERT INTO user_group_permissions VALUES ('271', '4', 'BookSerials', 'view', '0');
INSERT INTO user_group_permissions VALUES ('272', '5', 'BookSerials', 'view', '0');
INSERT INTO user_group_permissions VALUES ('273', '1', 'BookSerials', 'add', '1');
INSERT INTO user_group_permissions VALUES ('274', '2', 'BookSerials', 'add', '1');
INSERT INTO user_group_permissions VALUES ('275', '3', 'BookSerials', 'add', '0');
INSERT INTO user_group_permissions VALUES ('276', '4', 'BookSerials', 'add', '0');
INSERT INTO user_group_permissions VALUES ('277', '5', 'BookSerials', 'add', '0');
INSERT INTO user_group_permissions VALUES ('278', '1', 'BookSerials', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('279', '2', 'BookSerials', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('280', '3', 'BookSerials', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('281', '4', 'BookSerials', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('282', '5', 'BookSerials', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('283', '1', 'BookSerials', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('284', '2', 'BookSerials', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('285', '3', 'BookSerials', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('286', '4', 'BookSerials', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('287', '5', 'BookSerials', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('288', '1', 'BookSerials', 'getBook', '1');
INSERT INTO user_group_permissions VALUES ('289', '2', 'BookSerials', 'getBook', '1');
INSERT INTO user_group_permissions VALUES ('290', '3', 'BookSerials', 'getBook', '0');
INSERT INTO user_group_permissions VALUES ('291', '4', 'BookSerials', 'getBook', '0');
INSERT INTO user_group_permissions VALUES ('292', '5', 'BookSerials', 'getBook', '0');
INSERT INTO user_group_permissions VALUES ('293', '1', 'BookTypes', 'index', '1');
INSERT INTO user_group_permissions VALUES ('294', '2', 'BookTypes', 'index', '1');
INSERT INTO user_group_permissions VALUES ('295', '3', 'BookTypes', 'index', '1');
INSERT INTO user_group_permissions VALUES ('296', '4', 'BookTypes', 'index', '0');
INSERT INTO user_group_permissions VALUES ('297', '5', 'BookTypes', 'index', '0');
INSERT INTO user_group_permissions VALUES ('298', '1', 'BookTypes', 'view', '1');
INSERT INTO user_group_permissions VALUES ('299', '2', 'BookTypes', 'view', '1');
INSERT INTO user_group_permissions VALUES ('300', '3', 'BookTypes', 'view', '1');
INSERT INTO user_group_permissions VALUES ('301', '4', 'BookTypes', 'view', '0');
INSERT INTO user_group_permissions VALUES ('302', '5', 'BookTypes', 'view', '0');
INSERT INTO user_group_permissions VALUES ('303', '1', 'BookTypes', 'add', '1');
INSERT INTO user_group_permissions VALUES ('304', '2', 'BookTypes', 'add', '1');
INSERT INTO user_group_permissions VALUES ('305', '3', 'BookTypes', 'add', '1');
INSERT INTO user_group_permissions VALUES ('306', '4', 'BookTypes', 'add', '0');
INSERT INTO user_group_permissions VALUES ('307', '5', 'BookTypes', 'add', '0');
INSERT INTO user_group_permissions VALUES ('308', '1', 'BookTypes', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('309', '2', 'BookTypes', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('310', '3', 'BookTypes', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('311', '4', 'BookTypes', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('312', '5', 'BookTypes', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('313', '1', 'BookTypes', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('314', '2', 'BookTypes', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('315', '3', 'BookTypes', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('316', '4', 'BookTypes', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('317', '5', 'BookTypes', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('318', '1', 'BookTypes', 'getBookTypes', '1');
INSERT INTO user_group_permissions VALUES ('319', '2', 'BookTypes', 'getBookTypes', '1');
INSERT INTO user_group_permissions VALUES ('320', '3', 'BookTypes', 'getBookTypes', '1');
INSERT INTO user_group_permissions VALUES ('321', '4', 'BookTypes', 'getBookTypes', '0');
INSERT INTO user_group_permissions VALUES ('322', '5', 'BookTypes', 'getBookTypes', '0');
INSERT INTO user_group_permissions VALUES ('323', '5', 'Books', 'index', '0');
INSERT INTO user_group_permissions VALUES ('324', '1', 'Books', 'view', '1');
INSERT INTO user_group_permissions VALUES ('325', '2', 'Books', 'view', '1');
INSERT INTO user_group_permissions VALUES ('326', '3', 'Books', 'view', '1');
INSERT INTO user_group_permissions VALUES ('327', '4', 'Books', 'view', '0');
INSERT INTO user_group_permissions VALUES ('328', '5', 'Books', 'view', '0');
INSERT INTO user_group_permissions VALUES ('329', '1', 'Books', 'add', '1');
INSERT INTO user_group_permissions VALUES ('330', '2', 'Books', 'add', '1');
INSERT INTO user_group_permissions VALUES ('331', '3', 'Books', 'add', '1');
INSERT INTO user_group_permissions VALUES ('332', '4', 'Books', 'add', '0');
INSERT INTO user_group_permissions VALUES ('333', '5', 'Books', 'add', '0');
INSERT INTO user_group_permissions VALUES ('334', '1', 'Books', 'saveAuthor', '1');
INSERT INTO user_group_permissions VALUES ('335', '2', 'Books', 'saveAuthor', '1');
INSERT INTO user_group_permissions VALUES ('336', '3', 'Books', 'saveAuthor', '1');
INSERT INTO user_group_permissions VALUES ('337', '4', 'Books', 'saveAuthor', '0');
INSERT INTO user_group_permissions VALUES ('338', '5', 'Books', 'saveAuthor', '0');
INSERT INTO user_group_permissions VALUES ('339', '1', 'Books', 'savePublisher', '1');
INSERT INTO user_group_permissions VALUES ('340', '2', 'Books', 'savePublisher', '1');
INSERT INTO user_group_permissions VALUES ('341', '3', 'Books', 'savePublisher', '1');
INSERT INTO user_group_permissions VALUES ('342', '4', 'Books', 'savePublisher', '0');
INSERT INTO user_group_permissions VALUES ('343', '5', 'Books', 'savePublisher', '0');
INSERT INTO user_group_permissions VALUES ('344', '1', 'Books', 'saveLanguage', '1');
INSERT INTO user_group_permissions VALUES ('345', '2', 'Books', 'saveLanguage', '1');
INSERT INTO user_group_permissions VALUES ('346', '3', 'Books', 'saveLanguage', '1');
INSERT INTO user_group_permissions VALUES ('347', '4', 'Books', 'saveLanguage', '0');
INSERT INTO user_group_permissions VALUES ('348', '5', 'Books', 'saveLanguage', '0');
INSERT INTO user_group_permissions VALUES ('349', '1', 'Books', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('350', '2', 'Books', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('351', '3', 'Books', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('352', '4', 'Books', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('353', '5', 'Books', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('354', '1', 'Books', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('355', '2', 'Books', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('356', '3', 'Books', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('357', '4', 'Books', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('358', '5', 'Books', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('359', '1', 'Books', 'userView', '1');
INSERT INTO user_group_permissions VALUES ('360', '2', 'Books', 'userView', '1');
INSERT INTO user_group_permissions VALUES ('361', '3', 'Books', 'userView', '1');
INSERT INTO user_group_permissions VALUES ('362', '4', 'Books', 'userView', '0');
INSERT INTO user_group_permissions VALUES ('363', '5', 'Books', 'userView', '0');
INSERT INTO user_group_permissions VALUES ('364', '5', 'Categories', 'index', '0');
INSERT INTO user_group_permissions VALUES ('365', '1', 'Categories', 'view', '1');
INSERT INTO user_group_permissions VALUES ('366', '2', 'Categories', 'view', '1');
INSERT INTO user_group_permissions VALUES ('367', '3', 'Categories', 'view', '0');
INSERT INTO user_group_permissions VALUES ('368', '4', 'Categories', 'view', '0');
INSERT INTO user_group_permissions VALUES ('369', '5', 'Categories', 'view', '0');
INSERT INTO user_group_permissions VALUES ('370', '1', 'Categories', 'add', '1');
INSERT INTO user_group_permissions VALUES ('371', '2', 'Categories', 'add', '1');
INSERT INTO user_group_permissions VALUES ('372', '3', 'Categories', 'add', '0');
INSERT INTO user_group_permissions VALUES ('373', '4', 'Categories', 'add', '0');
INSERT INTO user_group_permissions VALUES ('374', '5', 'Categories', 'add', '0');
INSERT INTO user_group_permissions VALUES ('375', '1', 'Categories', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('376', '2', 'Categories', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('377', '3', 'Categories', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('378', '4', 'Categories', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('379', '5', 'Categories', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('380', '5', 'Categories', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('381', '1', 'CiculationPolicies', 'index', '1');
INSERT INTO user_group_permissions VALUES ('382', '2', 'CiculationPolicies', 'index', '1');
INSERT INTO user_group_permissions VALUES ('383', '3', 'CiculationPolicies', 'index', '0');
INSERT INTO user_group_permissions VALUES ('384', '4', 'CiculationPolicies', 'index', '0');
INSERT INTO user_group_permissions VALUES ('385', '5', 'CiculationPolicies', 'index', '0');
INSERT INTO user_group_permissions VALUES ('386', '1', 'CiculationPolicies', 'view', '1');
INSERT INTO user_group_permissions VALUES ('387', '2', 'CiculationPolicies', 'view', '1');
INSERT INTO user_group_permissions VALUES ('388', '3', 'CiculationPolicies', 'view', '0');
INSERT INTO user_group_permissions VALUES ('389', '4', 'CiculationPolicies', 'view', '0');
INSERT INTO user_group_permissions VALUES ('390', '5', 'CiculationPolicies', 'view', '0');
INSERT INTO user_group_permissions VALUES ('391', '1', 'CiculationPolicies', 'add', '1');
INSERT INTO user_group_permissions VALUES ('392', '2', 'CiculationPolicies', 'add', '1');
INSERT INTO user_group_permissions VALUES ('393', '3', 'CiculationPolicies', 'add', '0');
INSERT INTO user_group_permissions VALUES ('394', '4', 'CiculationPolicies', 'add', '0');
INSERT INTO user_group_permissions VALUES ('395', '5', 'CiculationPolicies', 'add', '0');
INSERT INTO user_group_permissions VALUES ('396', '1', 'CiculationPolicies', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('397', '2', 'CiculationPolicies', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('398', '3', 'CiculationPolicies', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('399', '4', 'CiculationPolicies', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('400', '5', 'CiculationPolicies', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('401', '1', 'CiculationPolicies', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('402', '2', 'CiculationPolicies', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('403', '3', 'CiculationPolicies', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('404', '4', 'CiculationPolicies', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('405', '5', 'CiculationPolicies', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('406', '1', 'Ciculations', 'index', '1');
INSERT INTO user_group_permissions VALUES ('407', '2', 'Ciculations', 'index', '1');
INSERT INTO user_group_permissions VALUES ('408', '3', 'Ciculations', 'index', '0');
INSERT INTO user_group_permissions VALUES ('409', '4', 'Ciculations', 'index', '0');
INSERT INTO user_group_permissions VALUES ('410', '5', 'Ciculations', 'index', '0');
INSERT INTO user_group_permissions VALUES ('411', '1', 'Ciculations', 'view', '1');
INSERT INTO user_group_permissions VALUES ('412', '2', 'Ciculations', 'view', '1');
INSERT INTO user_group_permissions VALUES ('413', '3', 'Ciculations', 'view', '0');
INSERT INTO user_group_permissions VALUES ('414', '4', 'Ciculations', 'view', '0');
INSERT INTO user_group_permissions VALUES ('415', '5', 'Ciculations', 'view', '0');
INSERT INTO user_group_permissions VALUES ('416', '1', 'Ciculations', 'add', '1');
INSERT INTO user_group_permissions VALUES ('417', '2', 'Ciculations', 'add', '1');
INSERT INTO user_group_permissions VALUES ('418', '3', 'Ciculations', 'add', '0');
INSERT INTO user_group_permissions VALUES ('419', '4', 'Ciculations', 'add', '0');
INSERT INTO user_group_permissions VALUES ('420', '5', 'Ciculations', 'add', '0');
INSERT INTO user_group_permissions VALUES ('421', '1', 'Ciculations', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('422', '2', 'Ciculations', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('423', '3', 'Ciculations', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('424', '4', 'Ciculations', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('425', '5', 'Ciculations', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('426', '1', 'Ciculations', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('427', '2', 'Ciculations', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('428', '3', 'Ciculations', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('429', '4', 'Ciculations', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('430', '5', 'Ciculations', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('431', '1', 'Ciculations', 'bookBorrowed', '1');
INSERT INTO user_group_permissions VALUES ('432', '2', 'Ciculations', 'bookBorrowed', '1');
INSERT INTO user_group_permissions VALUES ('433', '3', 'Ciculations', 'bookBorrowed', '0');
INSERT INTO user_group_permissions VALUES ('434', '4', 'Ciculations', 'bookBorrowed', '0');
INSERT INTO user_group_permissions VALUES ('435', '5', 'Ciculations', 'bookBorrowed', '0');
INSERT INTO user_group_permissions VALUES ('436', '1', 'Ciculations', 'getCiculation', '1');
INSERT INTO user_group_permissions VALUES ('437', '2', 'Ciculations', 'getCiculation', '1');
INSERT INTO user_group_permissions VALUES ('438', '3', 'Ciculations', 'getCiculation', '0');
INSERT INTO user_group_permissions VALUES ('439', '4', 'Ciculations', 'getCiculation', '0');
INSERT INTO user_group_permissions VALUES ('440', '5', 'Ciculations', 'getCiculation', '0');
INSERT INTO user_group_permissions VALUES ('441', '1', 'Ciculations', 'booksCiculation', '1');
INSERT INTO user_group_permissions VALUES ('442', '2', 'Ciculations', 'booksCiculation', '1');
INSERT INTO user_group_permissions VALUES ('443', '3', 'Ciculations', 'booksCiculation', '0');
INSERT INTO user_group_permissions VALUES ('444', '4', 'Ciculations', 'booksCiculation', '0');
INSERT INTO user_group_permissions VALUES ('445', '5', 'Ciculations', 'booksCiculation', '0');
INSERT INTO user_group_permissions VALUES ('446', '1', 'Ciculations', 'borrowBook', '1');
INSERT INTO user_group_permissions VALUES ('447', '2', 'Ciculations', 'borrowBook', '1');
INSERT INTO user_group_permissions VALUES ('448', '3', 'Ciculations', 'borrowBook', '0');
INSERT INTO user_group_permissions VALUES ('449', '4', 'Ciculations', 'borrowBook', '0');
INSERT INTO user_group_permissions VALUES ('450', '5', 'Ciculations', 'borrowBook', '0');
INSERT INTO user_group_permissions VALUES ('451', '1', 'Ciculations', 'returnBook', '1');
INSERT INTO user_group_permissions VALUES ('452', '2', 'Ciculations', 'returnBook', '1');
INSERT INTO user_group_permissions VALUES ('453', '3', 'Ciculations', 'returnBook', '0');
INSERT INTO user_group_permissions VALUES ('454', '4', 'Ciculations', 'returnBook', '0');
INSERT INTO user_group_permissions VALUES ('455', '5', 'Ciculations', 'returnBook', '0');
INSERT INTO user_group_permissions VALUES ('456', '1', 'Ciculations', 'renewBook', '1');
INSERT INTO user_group_permissions VALUES ('457', '2', 'Ciculations', 'renewBook', '1');
INSERT INTO user_group_permissions VALUES ('458', '3', 'Ciculations', 'renewBook', '0');
INSERT INTO user_group_permissions VALUES ('459', '4', 'Ciculations', 'renewBook', '0');
INSERT INTO user_group_permissions VALUES ('460', '5', 'Ciculations', 'renewBook', '0');
INSERT INTO user_group_permissions VALUES ('461', '1', 'Index', 'index', '1');
INSERT INTO user_group_permissions VALUES ('462', '2', 'Index', 'index', '1');
INSERT INTO user_group_permissions VALUES ('463', '3', 'Index', 'index', '1');
INSERT INTO user_group_permissions VALUES ('464', '4', 'Index', 'index', '1');
INSERT INTO user_group_permissions VALUES ('465', '5', 'Index', 'index', '1');
INSERT INTO user_group_permissions VALUES ('466', '5', 'Menus', 'index', '1');
INSERT INTO user_group_permissions VALUES ('467', '1', 'Menus', 'view', '1');
INSERT INTO user_group_permissions VALUES ('468', '2', 'Menus', 'view', '1');
INSERT INTO user_group_permissions VALUES ('469', '3', 'Menus', 'view', '0');
INSERT INTO user_group_permissions VALUES ('470', '4', 'Menus', 'view', '0');
INSERT INTO user_group_permissions VALUES ('471', '5', 'Menus', 'view', '0');
INSERT INTO user_group_permissions VALUES ('472', '1', 'Menus', 'add', '1');
INSERT INTO user_group_permissions VALUES ('473', '2', 'Menus', 'add', '1');
INSERT INTO user_group_permissions VALUES ('474', '3', 'Menus', 'add', '0');
INSERT INTO user_group_permissions VALUES ('475', '4', 'Menus', 'add', '0');
INSERT INTO user_group_permissions VALUES ('476', '5', 'Menus', 'add', '0');
INSERT INTO user_group_permissions VALUES ('477', '1', 'Menus', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('478', '2', 'Menus', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('479', '3', 'Menus', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('480', '4', 'Menus', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('481', '5', 'Menus', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('482', '1', 'Menus', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('483', '2', 'Menus', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('484', '3', 'Menus', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('485', '4', 'Menus', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('486', '5', 'Menus', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('487', '1', 'Menus', 'select_article', '1');
INSERT INTO user_group_permissions VALUES ('488', '2', 'Menus', 'select_article', '1');
INSERT INTO user_group_permissions VALUES ('489', '3', 'Menus', 'select_article', '0');
INSERT INTO user_group_permissions VALUES ('490', '4', 'Menus', 'select_article', '0');
INSERT INTO user_group_permissions VALUES ('491', '5', 'Menus', 'select_article', '0');
INSERT INTO user_group_permissions VALUES ('492', '1', 'Menus', 'select_category', '1');
INSERT INTO user_group_permissions VALUES ('493', '2', 'Menus', 'select_category', '1');
INSERT INTO user_group_permissions VALUES ('494', '3', 'Menus', 'select_category', '0');
INSERT INTO user_group_permissions VALUES ('495', '4', 'Menus', 'select_category', '0');
INSERT INTO user_group_permissions VALUES ('496', '5', 'Menus', 'select_category', '0');
INSERT INTO user_group_permissions VALUES ('497', '1', 'Menus', 'select_link', '1');
INSERT INTO user_group_permissions VALUES ('498', '2', 'Menus', 'select_link', '1');
INSERT INTO user_group_permissions VALUES ('499', '3', 'Menus', 'select_link', '0');
INSERT INTO user_group_permissions VALUES ('500', '4', 'Menus', 'select_link', '0');
INSERT INTO user_group_permissions VALUES ('501', '5', 'Menus', 'select_link', '0');
INSERT INTO user_group_permissions VALUES ('502', '1', 'Menus', 'get_link_menus', '1');
INSERT INTO user_group_permissions VALUES ('503', '2', 'Menus', 'get_link_menus', '1');
INSERT INTO user_group_permissions VALUES ('504', '3', 'Menus', 'get_link_menus', '0');
INSERT INTO user_group_permissions VALUES ('505', '4', 'Menus', 'get_link_menus', '0');
INSERT INTO user_group_permissions VALUES ('506', '5', 'Menus', 'get_link_menus', '0');
INSERT INTO user_group_permissions VALUES ('507', '1', 'Pages', 'index', '1');
INSERT INTO user_group_permissions VALUES ('508', '2', 'Pages', 'index', '1');
INSERT INTO user_group_permissions VALUES ('509', '3', 'Pages', 'index', '0');
INSERT INTO user_group_permissions VALUES ('510', '4', 'Pages', 'index', '0');
INSERT INTO user_group_permissions VALUES ('511', '5', 'Pages', 'index', '0');
INSERT INTO user_group_permissions VALUES ('512', '4', 'Pages', 'display', '1');
INSERT INTO user_group_permissions VALUES ('513', '5', 'Pages', 'display', '0');
INSERT INTO user_group_permissions VALUES ('514', '1', 'Departments', 'index', '1');
INSERT INTO user_group_permissions VALUES ('515', '2', 'Departments', 'index', '1');
INSERT INTO user_group_permissions VALUES ('516', '3', 'Departments', 'index', '0');
INSERT INTO user_group_permissions VALUES ('517', '4', 'Departments', 'index', '0');
INSERT INTO user_group_permissions VALUES ('518', '5', 'Departments', 'index', '0');
INSERT INTO user_group_permissions VALUES ('519', '1', 'Departments', 'view', '1');
INSERT INTO user_group_permissions VALUES ('520', '2', 'Departments', 'view', '1');
INSERT INTO user_group_permissions VALUES ('521', '3', 'Departments', 'view', '0');
INSERT INTO user_group_permissions VALUES ('522', '4', 'Departments', 'view', '0');
INSERT INTO user_group_permissions VALUES ('523', '5', 'Departments', 'view', '0');
INSERT INTO user_group_permissions VALUES ('524', '1', 'Departments', 'add', '1');
INSERT INTO user_group_permissions VALUES ('525', '2', 'Departments', 'add', '1');
INSERT INTO user_group_permissions VALUES ('526', '3', 'Departments', 'add', '0');
INSERT INTO user_group_permissions VALUES ('527', '4', 'Departments', 'add', '0');
INSERT INTO user_group_permissions VALUES ('528', '5', 'Departments', 'add', '0');
INSERT INTO user_group_permissions VALUES ('529', '1', 'Departments', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('530', '2', 'Departments', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('531', '3', 'Departments', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('532', '4', 'Departments', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('533', '5', 'Departments', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('534', '5', 'Departments', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('535', '1', 'Departments', 'loadDepartment', '1');
INSERT INTO user_group_permissions VALUES ('536', '2', 'Departments', 'loadDepartment', '1');
INSERT INTO user_group_permissions VALUES ('537', '3', 'Departments', 'loadDepartment', '0');
INSERT INTO user_group_permissions VALUES ('538', '4', 'Departments', 'loadDepartment', '0');
INSERT INTO user_group_permissions VALUES ('539', '5', 'Departments', 'loadDepartment', '0');
INSERT INTO user_group_permissions VALUES ('540', '1', 'Faculties', 'index', '1');
INSERT INTO user_group_permissions VALUES ('541', '2', 'Faculties', 'index', '1');
INSERT INTO user_group_permissions VALUES ('542', '3', 'Faculties', 'index', '0');
INSERT INTO user_group_permissions VALUES ('543', '4', 'Faculties', 'index', '0');
INSERT INTO user_group_permissions VALUES ('544', '5', 'Faculties', 'index', '0');
INSERT INTO user_group_permissions VALUES ('545', '1', 'Faculties', 'view', '1');
INSERT INTO user_group_permissions VALUES ('546', '2', 'Faculties', 'view', '1');
INSERT INTO user_group_permissions VALUES ('547', '3', 'Faculties', 'view', '0');
INSERT INTO user_group_permissions VALUES ('548', '4', 'Faculties', 'view', '0');
INSERT INTO user_group_permissions VALUES ('549', '5', 'Faculties', 'view', '0');
INSERT INTO user_group_permissions VALUES ('550', '1', 'Faculties', 'add', '1');
INSERT INTO user_group_permissions VALUES ('551', '2', 'Faculties', 'add', '1');
INSERT INTO user_group_permissions VALUES ('552', '3', 'Faculties', 'add', '0');
INSERT INTO user_group_permissions VALUES ('553', '4', 'Faculties', 'add', '0');
INSERT INTO user_group_permissions VALUES ('554', '5', 'Faculties', 'add', '0');
INSERT INTO user_group_permissions VALUES ('555', '1', 'Faculties', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('556', '2', 'Faculties', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('557', '3', 'Faculties', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('558', '4', 'Faculties', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('559', '5', 'Faculties', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('560', '1', 'Faculties', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('561', '2', 'Faculties', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('562', '3', 'Faculties', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('563', '4', 'Faculties', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('564', '5', 'Faculties', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('565', '1', 'Readers', 'index', '1');
INSERT INTO user_group_permissions VALUES ('566', '2', 'Readers', 'index', '1');
INSERT INTO user_group_permissions VALUES ('567', '3', 'Readers', 'index', '0');
INSERT INTO user_group_permissions VALUES ('568', '4', 'Readers', 'index', '0');
INSERT INTO user_group_permissions VALUES ('569', '5', 'Readers', 'index', '0');
INSERT INTO user_group_permissions VALUES ('570', '1', 'Readers', 'view', '1');
INSERT INTO user_group_permissions VALUES ('571', '2', 'Readers', 'view', '1');
INSERT INTO user_group_permissions VALUES ('572', '3', 'Readers', 'view', '0');
INSERT INTO user_group_permissions VALUES ('573', '4', 'Readers', 'view', '0');
INSERT INTO user_group_permissions VALUES ('574', '5', 'Readers', 'view', '0');
INSERT INTO user_group_permissions VALUES ('575', '1', 'Readers', 'add', '1');
INSERT INTO user_group_permissions VALUES ('576', '2', 'Readers', 'add', '1');
INSERT INTO user_group_permissions VALUES ('577', '3', 'Readers', 'add', '0');
INSERT INTO user_group_permissions VALUES ('578', '4', 'Readers', 'add', '0');
INSERT INTO user_group_permissions VALUES ('579', '5', 'Readers', 'add', '0');
INSERT INTO user_group_permissions VALUES ('580', '1', 'Readers', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('581', '2', 'Readers', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('582', '3', 'Readers', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('583', '4', 'Readers', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('584', '5', 'Readers', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('585', '1', 'Readers', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('586', '2', 'Readers', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('587', '3', 'Readers', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('588', '4', 'Readers', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('589', '5', 'Readers', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('590', '4', 'UserGroupPermissions', 'index', '0');
INSERT INTO user_group_permissions VALUES ('591', '5', 'UserGroupPermissions', 'index', '0');
INSERT INTO user_group_permissions VALUES ('592', '1', 'Users', 'reader', '1');
INSERT INTO user_group_permissions VALUES ('593', '2', 'Users', 'reader', '1');
INSERT INTO user_group_permissions VALUES ('594', '3', 'Users', 'reader', '0');
INSERT INTO user_group_permissions VALUES ('595', '4', 'Users', 'reader', '0');
INSERT INTO user_group_permissions VALUES ('596', '5', 'Users', 'reader', '0');
INSERT INTO user_group_permissions VALUES ('597', '4', 'Users', 'myprofile', '1');
INSERT INTO user_group_permissions VALUES ('598', '5', 'Users', 'myprofile', '0');
INSERT INTO user_group_permissions VALUES ('599', '4', 'Users', 'login', '1');
INSERT INTO user_group_permissions VALUES ('600', '5', 'Users', 'login', '0');
INSERT INTO user_group_permissions VALUES ('601', '4', 'Users', 'logout', '1');
INSERT INTO user_group_permissions VALUES ('602', '5', 'Users', 'logout', '0');
INSERT INTO user_group_permissions VALUES ('603', '4', 'Users', 'register', '1');
INSERT INTO user_group_permissions VALUES ('604', '5', 'Users', 'register', '0');
INSERT INTO user_group_permissions VALUES ('605', '4', 'Users', 'changePassword', '0');
INSERT INTO user_group_permissions VALUES ('606', '5', 'Users', 'changePassword', '0');
INSERT INTO user_group_permissions VALUES ('607', '4', 'Users', 'changeUserPassword', '1');
INSERT INTO user_group_permissions VALUES ('608', '5', 'Users', 'changeUserPassword', '0');
INSERT INTO user_group_permissions VALUES ('609', '4', 'Users', 'addUser', '0');
INSERT INTO user_group_permissions VALUES ('610', '5', 'Users', 'addUser', '0');
INSERT INTO user_group_permissions VALUES ('611', '4', 'Users', 'editUser', '0');
INSERT INTO user_group_permissions VALUES ('612', '5', 'Users', 'editUser', '0');
INSERT INTO user_group_permissions VALUES ('613', '4', 'Users', 'deleteUser', '0');
INSERT INTO user_group_permissions VALUES ('614', '5', 'Users', 'deleteUser', '0');
INSERT INTO user_group_permissions VALUES ('615', '1', 'Users', 'deleteReader', '1');
INSERT INTO user_group_permissions VALUES ('616', '2', 'Users', 'deleteReader', '1');
INSERT INTO user_group_permissions VALUES ('617', '3', 'Users', 'deleteReader', '0');
INSERT INTO user_group_permissions VALUES ('618', '4', 'Users', 'deleteReader', '0');
INSERT INTO user_group_permissions VALUES ('619', '5', 'Users', 'deleteReader', '0');
INSERT INTO user_group_permissions VALUES ('620', '4', 'Users', 'dashboard', '0');
INSERT INTO user_group_permissions VALUES ('621', '5', 'Users', 'dashboard', '0');
INSERT INTO user_group_permissions VALUES ('622', '1', 'Users', 'makeActiveInactived', '1');
INSERT INTO user_group_permissions VALUES ('623', '2', 'Users', 'makeActiveInactived', '0');
INSERT INTO user_group_permissions VALUES ('624', '3', 'Users', 'makeActiveInactived', '0');
INSERT INTO user_group_permissions VALUES ('625', '4', 'Users', 'makeActiveInactived', '0');
INSERT INTO user_group_permissions VALUES ('626', '5', 'Users', 'makeActiveInactived', '0');
INSERT INTO user_group_permissions VALUES ('627', '4', 'Users', 'accessDenied', '0');
INSERT INTO user_group_permissions VALUES ('628', '5', 'Users', 'accessDenied', '0');
INSERT INTO user_group_permissions VALUES ('629', '4', 'Users', 'forgotPassword', '1');
INSERT INTO user_group_permissions VALUES ('630', '5', 'Users', 'forgotPassword', '0');
INSERT INTO user_group_permissions VALUES ('631', '4', 'Users', 'activatePassword', '0');
INSERT INTO user_group_permissions VALUES ('632', '5', 'Users', 'activatePassword', '0');
INSERT INTO user_group_permissions VALUES ('633', '1', 'Users', 'emailVerification', '1');
INSERT INTO user_group_permissions VALUES ('634', '2', 'Users', 'emailVerification', '0');
INSERT INTO user_group_permissions VALUES ('635', '3', 'Users', 'emailVerification', '0');
INSERT INTO user_group_permissions VALUES ('636', '4', 'Users', 'emailVerification', '0');
INSERT INTO user_group_permissions VALUES ('637', '5', 'Users', 'emailVerification', '0');
INSERT INTO user_group_permissions VALUES ('638', '1', 'Users', 'actived', '1');
INSERT INTO user_group_permissions VALUES ('639', '2', 'Users', 'actived', '0');
INSERT INTO user_group_permissions VALUES ('640', '3', 'Users', 'actived', '0');
INSERT INTO user_group_permissions VALUES ('641', '4', 'Users', 'actived', '0');
INSERT INTO user_group_permissions VALUES ('642', '5', 'Users', 'actived', '0');
INSERT INTO user_group_permissions VALUES ('643', '1', 'Users', 'addReader', '1');
INSERT INTO user_group_permissions VALUES ('644', '2', 'Users', 'addReader', '1');
INSERT INTO user_group_permissions VALUES ('645', '3', 'Users', 'addReader', '0');
INSERT INTO user_group_permissions VALUES ('646', '4', 'Users', 'addReader', '0');
INSERT INTO user_group_permissions VALUES ('647', '5', 'Users', 'addReader', '0');
