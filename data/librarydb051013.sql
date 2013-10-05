/*
Navicat MySQL Data Transfer

Source Server         : vienlemai
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : librarydb

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2013-10-05 20:09:30
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

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

-- ----------------------------
-- Table structure for `books`
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL COMMENT 'Tên cuốn sách',
  `number_of_pages` int(11) NOT NULL COMMENT 'Tổng số trang',
  `publisher` varchar(45) NOT NULL COMMENT 'Nhà xuất bản',
  `year_of_publish` date NOT NULL COMMENT 'Năm xuất bản',
  `total` int(11) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL COMMENT 'Giá sách',
  `created` date DEFAULT NULL COMMENT 'Ngày tạo biên mục cho cuốn sách',
  `paper_size` varchar(15) DEFAULT NULL COMMENT 'Khổ giấy',
  `user_created` varchar(45) DEFAULT NULL COMMENT 'Người biên mục',
  `location` varchar(45) DEFAULT NULL COMMENT 'Vị trí cuốn sách',
  `description` mediumtext COMMENT 'Mô tả nội dung cơ bản của cuốn sách',
  `used_as` tinyint(4) NOT NULL COMMENT '0 - chỉ đọc tại chỗ\n1- Có thể mượn về',
  `book_language_id` int(11) NOT NULL COMMENT 'Ngôn ngữ của tài liệu',
  `book_type_id` int(11) NOT NULL COMMENT 'Loại tài liệu (sách,tài liệu,giáo trình,truyện,tiểu thuyết,sách tham khảo)',
  `book_category_id` int(11) NOT NULL COMMENT 'The loai sach: tu nhien, Xa hoi, Tin hoc',
  `teacher_only` tinyint(4) DEFAULT NULL,
  `authors` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lib_BookStores_lib_BookLanguages1_idx` (`book_language_id`),
  KEY `fk_lib_BookStores_lib_BookType1_idx` (`book_type_id`),
  KEY `fk_lib_BookStores_lib_BookCategories1_idx` (`book_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12351 DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin của một tập các cuốn sách cùng tên';

-- ----------------------------
-- Records of books
-- ----------------------------
INSERT INTO books VALUES ('125', 'Bài tập lập trình', '250', 'NXB Giáo Dục', '2005-05-17', '10', '50.000', '2013-05-14', '18 x 6', '18 x 6', 'Giáo trình', 'fskfjslfkskfls', '0', '1', '1', '1', null, 'Nguyễn Hiến Lê');
INSERT INTO books VALUES ('126', 'Bài tập lập trình', '250', 'NXB Giáo Dục', '2005-05-17', '10', '50.000', '2013-05-14', '18 x 6', '18 x 6', 'Giáo trình', 'fskfjslfkskfls', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('127', 'Bài tập lập trình', '250', 'NXB Giáo Dục', '2005-05-17', '10', '50.000', '2013-05-14', '18 x 6', '18 x 6', 'Giáo trình', 'fskfjslfkskfls', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('128', 'Bài tập lập trình', '250', 'NXB Giáo Dục', '2005-05-17', '10', '50.000', '2013-05-14', '18 x 6', '18 x 6', 'Giáo trình', 'fskfjslfkskfls', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('129', 'Bài tập lập trình', '250', 'NXB Giáo Dục', '2005-05-17', '10', '50.000', '2013-05-14', '18 x 6', '18 x 6', 'Giáo trình', 'fskfjslfkskfls', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('130', 'Bài tập lập trình', '250', 'NXB Giáo Dục', '2005-05-17', '10', '50.000', '2013-05-14', '18 x 6', '18 x 6', 'Giáo trình', 'fskfjslfkskfls', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('131', 'Bài tập lập trình', '250', 'NXB Giáo Dục', '2005-05-17', '10', '50.000', '2013-05-14', '18 x 6', '18 x 6', 'Giáo trình', 'fskfjslfkskfls', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('132', 'Bài tập lập trình', '250', 'NXB Giáo Dục', '2005-05-17', '10', '50.000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'fskfjslfkskfls', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('133', 'Bài tập lập trình', '250', 'NXB Giáo Dục', '2005-05-17', '10', '50.000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'fskfjslfkskfls', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('134', 'Bài tập lập trình', '250', 'NXB Giáo Dục', '2005-05-17', '10', '50.000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'fskfjslfkskfls', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('135', 'Bài tập lập trình', '250', 'NXB Giáo Dục', '2005-05-17', '10', '50.000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'fskfjslfkskfls', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('136', 'Bài tập lập trình', '250', 'NXB Giáo Dục', '2005-05-17', '10', '50.000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'fskfjslfkskfls', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('137', 'Bài tập lập trình', '250', 'NXB Giáo Dục', '2005-05-17', '10', '50.000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'fskfjslfkskfls', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('138', 'Bài tập lập trình', '250', 'NXB Giáo Dục', '2005-05-17', '10', '50.000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'fskfjslfkskfls', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('139', 'Phân tích thiêt kế web', '250', 'NXB Tuổi Trẽ', '2010-05-17', '5', '25.0000', '2013-05-14', '18 x 6', 'user01', 'Tham Khảo', 'fsfhkfhweudfdslkfjslfjslfsn', '0', '1', '2', '3', null, null);
INSERT INTO books VALUES ('140', 'Làm chủ windows 2000 server', '676', 'NXB Thanh Niên', '2001-05-01', '10', '89.000', '2013-05-15', '15,5 x15,5', 'user01', 'Sách tham khảo', 'fsmfnslfshweueowns', '0', '1', '2', '3', null, null);
INSERT INTO books VALUES ('141', 'Đêm Đầu tiên', '545', 'NXB Nhã Nam', '2011-10-04', '10', '105.000', '2013-05-16', '14 x 20,5 cm', 'user01', 'Truyện đọc', 'sffdsdsf', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('142', 'Phút Đầu Tiên', '545', 'NXB Nhã Nam', '2011-10-04', '10', '105.000', '2013-05-16', '14 x 20,5 cm', 'user01', 'Truyện đọc', 'sffdsdsf', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('12345', 'Lập trinh c++', '100', 'NXB Giáo Dục', '2010-05-08', '10', '25.0000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'hhghghgfh', '0', '2', '1', '1', null, null);
INSERT INTO books VALUES ('12346', 'Phân tích và thiết kế hệ thống thông tin', '200', 'NXB Giáo Dục', '2005-05-17', '15', '30.000', '2013-05-29', '14 x 20,5 cm', 'user01', 'Tham Khảo', 'Trình bày các phương pháp phân tích thiết kế có cấu trúc dọc theo các giai đoạn của chu trình phát triển', '1', '1', '1', '1', null, null);
INSERT INTO books VALUES ('12347', 'Giáo trình cấp thoát nước bên trong công trìn', '203', 'Nxb Hà Nội', '2006-06-14', '10', '27500', '2013-06-01', '24cm', 'user01', 'Tài liệu tham khảo', 'Kiến thức cơ bản về hệ thống cấp thoát nước, nguyên lý hoạt động, cấu tạo, quy trình thiết kế và các', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('12348', 'dfs', '2000', 'sdfs', '2013-06-03', '10', '150000', '2013-06-09', '14 x 20,5 cm', 'user01', 'sách tham khảo', 'dfggfg', '0', '1', '1', '1', null, null);
INSERT INTO books VALUES ('12349', 'Giáo trình chính trị', '247', 'NXB Giáo Dục', '2005-06-13', '4', '23000', '2013-06-16', '24cm', 'user01', 'Giáo trình', 'Nêu chủ nghĩa duy vật khoa học và hoạt động thực tiễn của con người. Quan điểm, đường lối chủ trương chính sách của Đảng Cộng sản Việt Nam', '0', '1', '1', '2', null, null);
INSERT INTO books VALUES ('12350', 'Giáo trình hệ thống mạng máy tính CCNA semest', '443', 'Lao động xã hộ', '2004-06-13', '4', '86000', '2013-06-16', '24cm', 'user01', 'Giáo trình', 'Tái bản lần thứ 1, cập nhật version 3.0.', '1', '1', '1', '1', null, null);

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
  `id` varchar(50) NOT NULL,
  `book_id` int(11) NOT NULL COMMENT 'Số thứ tự cuốn sách',
  `created` datetime DEFAULT NULL COMMENT 'Ngày khởi đã khởi tạo',
  `user_creater` varchar(45) DEFAULT NULL COMMENT 'Người khởi tạo',
  `status` tinyint(1) DEFAULT NULL COMMENT 'Tình trạng cuốn sách cụ thể',
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Một cuốn sách cụ thể';

-- ----------------------------
-- Records of book_serials
-- ----------------------------
INSERT INTO book_serials VALUES ('11111111', '125', '2013-10-05 06:37:56', null, '0', '2013-10-05 06:37:56');
INSERT INTO book_serials VALUES ('1234', '125', '2013-10-05 06:37:20', null, '0', '2013-10-05 06:37:20');
INSERT INTO book_serials VALUES ('12345', '125', '2013-10-05 05:50:17', null, '0', '2013-10-05 05:50:17');
INSERT INTO book_serials VALUES ('123467', '125', '2013-10-05 05:53:17', null, '0', '2013-10-05 05:53:17');
INSERT INTO book_serials VALUES ('12354', '125', '2013-10-05 06:19:23', null, '0', '2013-10-05 06:19:23');
INSERT INTO book_serials VALUES ('1236', '125', '2013-10-05 05:53:10', null, '0', '2013-10-05 05:53:10');
INSERT INTO book_serials VALUES ('333333333333333333333', '125', '2013-10-05 06:39:50', null, '0', '2013-10-05 06:39:57');
INSERT INTO book_serials VALUES ('7689', '125', '2013-10-05 06:32:10', null, '0', '2013-10-05 06:32:10');
INSERT INTO book_serials VALUES ('98765', '125', '2013-10-05 06:19:12', null, '0', '2013-10-05 06:19:12');

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
  `date_borrow` date NOT NULL COMMENT 'Ngày mượn',
  `date_return` date NOT NULL COMMENT 'Ngày trã',
  `librarian_name` varchar(45) NOT NULL COMMENT 'Tên cán bộ thư viện thực hiện hoạt động này',
  `add_time` tinyint(4) NOT NULL,
  `reader_id` varchar(30) NOT NULL COMMENT 'Mã bạn đọc mượn',
  `book_serial_id` int(11) NOT NULL COMMENT 'Quyển sách được mượn',
  PRIMARY KEY (`id`),
  KEY `fk_lib_Ciculations_lib_Readers1_idx` (`reader_id`),
  KEY `fk_lib_Ciculations_lib_SerialBooks1_idx` (`book_serial_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='Bảng chi tiết mượn trả sách (Nếu có người mượn thì thêm vào  /* comment truncated */ /*1 record, Nếu trã sách thì xóa record đó)*/';

-- ----------------------------
-- Records of ciculations
-- ----------------------------
INSERT INTO ciculations VALUES ('4', '2013-01-18', '2013-04-18', 'user01', '0', '331.08.0001', '17');
INSERT INTO ciculations VALUES ('5', '2013-05-18', '2014-03-17', 'user01', '0', '331.08.0001', '12');
INSERT INTO ciculations VALUES ('6', '2013-05-30', '2014-02-24', 'user01', '0', '331.08.0001', '20');
INSERT INTO ciculations VALUES ('7', '2013-06-16', '2013-09-14', 'user01', '0', '331.08.0003', '30');

-- ----------------------------
-- Table structure for `ciculation_policies`
-- ----------------------------
DROP TABLE IF EXISTS `ciculation_policies`;
CREATE TABLE `ciculation_policies` (
  `id` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `unit_of` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ciculation_policies
-- ----------------------------
INSERT INTO ciculation_policies VALUES ('SLGH', 'Số lần gia hạn tài liệu tối đa', '1', 'lần', null, null);
INSERT INTO ciculation_policies VALUES ('STLM', 'Số tài liệu tối đa mượn', '5', 'cuốn', null, null);
INSERT INTO ciculation_policies VALUES ('TGGH', 'Thời gian gia hạn', '90', 'ngày', null, null);
INSERT INTO ciculation_policies VALUES ('TGLT', 'Thời gian lưu thông', '365', 'ngày', null, null);
INSERT INTO ciculation_policies VALUES ('TGMS', 'Thời gian mượn tài liệu', '90', 'ngày', null, null);

-- ----------------------------
-- Table structure for `departments`
-- ----------------------------
DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(45) NOT NULL COMMENT 'Tên lớp',
  `description` tinytext,
  `faculty_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `actived` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tbl_Class_tbl_Faculty1_idx` (`faculty_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of departments
-- ----------------------------
INSERT INTO departments VALUES ('1', '08T2', '08t2', '1', '2013-09-20 23:07:44', '2013-09-22 11:15:17', '1');
INSERT INTO departments VALUES ('2', '08T1', '08T1', '1', '2013-09-20 23:08:27', '2013-09-20 23:09:47', '1');
INSERT INTO departments VALUES ('3', '08T3', 'lớp 08T3', '1', '2013-09-20 23:21:43', '2013-09-20 23:22:59', '1');
INSERT INTO departments VALUES ('4', '08T4', 'lớp 08T4', '1', '2013-09-20 23:23:20', '2013-09-20 23:23:20', '1');

-- ----------------------------
-- Table structure for `faculties`
-- ----------------------------
DROP TABLE IF EXISTS `faculties`;
CREATE TABLE `faculties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_name` varchar(255) NOT NULL COMMENT 'Tên khoa',
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `actived` int(11) DEFAULT NULL,
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
INSERT INTO login_tokens VALUES ('1', '1', 'eb60e987e273584c931fa3832847317f', '2 weeks', '1', '2013-09-16 02:14:14', '2013-09-30 02:14:14');
INSERT INTO login_tokens VALUES ('2', '1', '00e28c509c015fa82b94ce61efd73f6d', '2 weeks', '1', '2013-09-16 22:51:45', '2013-09-30 22:51:45');
INSERT INTO login_tokens VALUES ('3', '1', 'bf161d2e3e3348139fd5250041372343', '2 weeks', '0', '2013-09-17 04:59:51', '2013-10-01 04:59:51');
INSERT INTO login_tokens VALUES ('4', '1', '0fec05952b9a47468003ddde25b99cce', '2 weeks', '0', '2013-09-17 06:26:08', '2013-10-01 06:26:08');
INSERT INTO login_tokens VALUES ('5', '2', 'a79d3210be788742b28ba0f8fd61a3b2', '2 weeks', '0', '2013-09-17 06:27:04', '2013-10-01 06:27:04');
INSERT INTO login_tokens VALUES ('6', '1', '135336f0646f3d1f5f10ed7b10d1ea16', '2 weeks', '1', '2013-09-17 06:27:51', '2013-10-01 06:27:51');
INSERT INTO login_tokens VALUES ('7', '1', 'af7840d91f843dfea398d8a17d6c7381', '2 weeks', '0', '2013-09-17 21:42:25', '2013-10-01 21:42:25');
INSERT INTO login_tokens VALUES ('8', '1', 'd1336bbc10de111223181aca5bf17cc2', '2 weeks', '0', '2013-09-18 00:24:43', '2013-10-02 00:24:43');
INSERT INTO login_tokens VALUES ('9', '1', '82419fb887398e2f32535ca49fc06d2e', '2 weeks', '0', '2013-09-18 02:25:50', '2013-10-02 02:25:50');
INSERT INTO login_tokens VALUES ('10', '1', '3449d65fdac4b0c9184d89f8587d7fb8', '2 weeks', '0', '2013-09-18 02:29:41', '2013-10-02 02:29:41');
INSERT INTO login_tokens VALUES ('11', '1', 'f0b863ce88a44f0d0cd5d5ebf30147dd', '2 weeks', '0', '2013-09-18 02:30:27', '2013-10-02 02:30:27');
INSERT INTO login_tokens VALUES ('12', '1', '123058a0b8bd8cb07603a604069f9d15', '2 weeks', '0', '2013-09-18 05:36:43', '2013-10-02 05:36:43');
INSERT INTO login_tokens VALUES ('13', '1', '41006f4420b552cb2e15a6bc37d35729', '2 weeks', '1', '2013-09-24 02:17:46', '2013-10-08 02:17:46');
INSERT INTO login_tokens VALUES ('14', '1', '2f07d84ae38c062ecb302c251fe20eb1', '2 weeks', '0', '2013-09-24 02:57:01', '2013-10-08 02:57:01');

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
  `id` varchar(50) NOT NULL,
  `created` date NOT NULL COMMENT 'Ngày tạo thẻ bạn đọc',
  `date_expiry` date NOT NULL COMMENT 'Ngày hết hạn sử dụng',
  `year_learn` varchar(45) NOT NULL COMMENT 'Khóa học',
  `total_borrow` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lib_Reader_lib_User1_idx` (`user_id`),
  KEY `fk_lib_Reader_tbl_Class1_idx` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin về một thẻ bạn đọc';

-- ----------------------------
-- Records of readers
-- ----------------------------
INSERT INTO readers VALUES ('331.08.0001', '2013-05-13', '2013-09-07', '2000 - 2005', '3', '3', '2');
INSERT INTO readers VALUES ('331.08.0002', '2013-05-16', '2014-05-16', '2008 - 2013', '0', '4', '3');
INSERT INTO readers VALUES ('331.08.0003', '2013-05-17', '2014-05-17', '2000 - 2005', '1', '5', '1');
INSERT INTO readers VALUES ('331.08.0004', '2013-05-18', '2013-09-07', '2008 - 2013', '0', '6', '4');
INSERT INTO readers VALUES ('331.08.0005', '2013-05-18', '2014-05-18', '2008 - 2013', '0', '7', '9');
INSERT INTO readers VALUES ('331.09.0001', '2013-06-01', '2014-06-01', '2009 - 2014', '0', '8', '3');
INSERT INTO readers VALUES ('331.12.0001', '2013-06-14', '2014-06-14', '2000 - 2005', '0', '9', '9');
INSERT INTO readers VALUES ('331.12.0002', '2013-06-14', '2014-06-14', '2012 - 2017', '0', '10', '9');
INSERT INTO readers VALUES ('331.12.0003', '2013-06-14', '2014-06-14', '2012 - 2017', '0', '13', '5');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned DEFAULT NULL,
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
  `phoneNumber` int(11) DEFAULT NULL,
  `residentAddress` varchar(255) DEFAULT NULL,
  `nativePlace` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `profilePhoto` varchar(255) DEFAULT NULL,
  `description` tinytext,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO users VALUES ('1', '1', 'admin', '365caef7fccbdb1ee711f084be9317a7', '1e6d99570a4d37cc29b18c4a6b06e6ed', 'admin@admin.com', '', '1', '1', '', '2013-09-16 13:11:33', '2013-09-24 02:40:50', null, null, null, null, null, null, null);
INSERT INTO users VALUES ('2', '2', 'vienlemai', '6eb88ce0c322a3e9cc0832938153fa5b', '607a7d89920dfd96624f3a97366f9dc1', 'lemaibk08@gmail.com', 'Mai Vien', '1', '1', null, '2013-09-17 06:26:43', '2013-09-17 06:26:43', null, null, null, null, null, null, null);
INSERT INTO users VALUES ('3', '2', '331.08.0001', '3bb500954e1a9c9e5dcddb864bf5d518', 'cbabfcadae7b5f9d5ffd15641a988790', 'vienlm@ilucians.com', 'lemai', '1', '1', null, '2013-09-19 00:57:54', '2013-09-24 02:39:10', null, null, null, null, null, null, null);
INSERT INTO users VALUES ('4', '2', '331.08.0002', '123456', 'cbabfcadae7b5f9d5ffd15641a988790', 'vienlm@ilucians.com', 'mai vien', '1', '0', null, null, '2013-09-24 02:40:29', null, null, null, null, null, null, null);
INSERT INTO users VALUES ('5', null, '331.08.0003', '123456', null, 'vienlm@ilucians.com', null, '0', '0', null, null, '2013-09-24 02:40:27', null, null, null, null, null, null, null);
INSERT INTO users VALUES ('6', null, '331.08.0004', '123456', null, 'vienlm@ilucians.com', null, '0', '1', null, null, '2013-09-21 04:15:29', null, null, null, null, null, null, null);
INSERT INTO users VALUES ('7', null, '331.08.0005', '123456', null, 'vienlm@ilucians.com', null, '0', '1', null, null, '2013-09-21 04:15:31', null, null, null, null, null, null, null);
INSERT INTO users VALUES ('8', null, '331.09.0001', '123456', null, 'vienlm@ilucians.com', null, '0', '1', null, null, '2013-09-22 06:27:02', null, null, null, null, null, null, null);
INSERT INTO users VALUES ('9', null, '331.12.0001', '123456', null, 'vienlm@ilucians.com', null, '0', '1', null, null, '2013-09-24 02:40:38', null, null, null, null, null, null, null);
INSERT INTO users VALUES ('10', null, '331.12.0002', '123456', null, 'vienlm@ilucians.com', null, '0', '1', null, null, '2013-09-24 02:40:39', null, null, null, null, null, null, null);
INSERT INTO users VALUES ('11', null, '331.12.0003', '123456', null, 'vienlm@ilucians.com', null, '0', '0', null, null, null, null, null, null, null, null, null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_groups
-- ----------------------------
INSERT INTO user_groups VALUES ('1', 'Admin', 'Admin', '0', '2013-09-16 13:11:33', '2013-09-16 13:11:33', null);
INSERT INTO user_groups VALUES ('2', 'Reader', 'Reader', '1', '2013-09-16 13:11:33', '2013-09-19 01:10:32', null);
INSERT INTO user_groups VALUES ('3', 'Guest', 'Guest', '0', null, null, null);
INSERT INTO user_groups VALUES ('4', 'Thủ thư', 'thu_thu', '0', '2013-09-20 01:57:59', '2013-09-20 01:57:59', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

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
INSERT INTO user_group_permissions VALUES ('30', '3', 'Users', 'myprofile', '0');
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
INSERT INTO user_group_permissions VALUES ('41', '2', 'Users', 'changePassword', '1');
INSERT INTO user_group_permissions VALUES ('42', '3', 'Users', 'changePassword', '0');
INSERT INTO user_group_permissions VALUES ('43', '1', 'Users', 'changeUserPassword', '1');
INSERT INTO user_group_permissions VALUES ('44', '2', 'Users', 'changeUserPassword', '0');
INSERT INTO user_group_permissions VALUES ('45', '3', 'Users', 'changeUserPassword', '0');
INSERT INTO user_group_permissions VALUES ('46', '1', 'Users', 'addUser', '1');
INSERT INTO user_group_permissions VALUES ('47', '2', 'Users', 'addUser', '0');
INSERT INTO user_group_permissions VALUES ('48', '3', 'Users', 'addUser', '0');
INSERT INTO user_group_permissions VALUES ('49', '1', 'Users', 'editUser', '1');
INSERT INTO user_group_permissions VALUES ('50', '2', 'Users', 'editUser', '0');
INSERT INTO user_group_permissions VALUES ('51', '3', 'Users', 'editUser', '0');
INSERT INTO user_group_permissions VALUES ('52', '1', 'Users', 'dashboard', '1');
INSERT INTO user_group_permissions VALUES ('53', '2', 'Users', 'dashboard', '1');
INSERT INTO user_group_permissions VALUES ('54', '3', 'Users', 'dashboard', '0');
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
INSERT INTO user_group_permissions VALUES ('77', '2', 'Users', 'activatePassword', '1');
INSERT INTO user_group_permissions VALUES ('78', '3', 'Users', 'activatePassword', '1');
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
INSERT INTO user_group_permissions VALUES ('94', '2', 'Departments', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('95', '3', 'Departments', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('96', '4', 'Departments', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('97', '1', 'Categories', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('98', '2', 'Categories', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('99', '3', 'Categories', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('100', '4', 'Categories', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('101', '1', 'Menus', 'index', '0');
INSERT INTO user_group_permissions VALUES ('102', '2', 'Menus', 'index', '0');
INSERT INTO user_group_permissions VALUES ('103', '3', 'Menus', 'index', '0');
INSERT INTO user_group_permissions VALUES ('104', '4', 'Menus', 'index', '0');
INSERT INTO user_group_permissions VALUES ('105', '1', 'Categories', 'index', '1');
INSERT INTO user_group_permissions VALUES ('106', '2', 'Categories', 'index', '0');
INSERT INTO user_group_permissions VALUES ('107', '3', 'Categories', 'index', '0');
INSERT INTO user_group_permissions VALUES ('108', '4', 'Categories', 'index', '0');
INSERT INTO user_group_permissions VALUES ('109', '1', 'Books', 'index', '1');
INSERT INTO user_group_permissions VALUES ('110', '2', 'Books', 'index', '0');
INSERT INTO user_group_permissions VALUES ('111', '3', 'Books', 'index', '0');
INSERT INTO user_group_permissions VALUES ('112', '4', 'Books', 'index', '0');
