-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2013 at 02:17 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `librarydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `lib_articles`
--

CREATE TABLE IF NOT EXISTS `lib_articles` (
  `articleID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `dateCreated` date NOT NULL,
  `isPublisher` tinyint(1) NOT NULL,
  `pictureThumnail` varchar(105) DEFAULT NULL,
  `description` text NOT NULL,
  `contentDetail` longtext NOT NULL,
  `subCategoryID` int(11) NOT NULL,
  PRIMARY KEY (`articleID`),
  KEY `fk_lib_articles_lib_subCategoryArticle1_idx` (`subCategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lib_articles`
--

INSERT INTO `lib_articles` (`articleID`, `title`, `dateCreated`, `isPublisher`, `pictureThumnail`, `description`, `contentDetail`, `subCategoryID`) VALUES
(1, 'Đừng xé sách lịch sử nữa các bạn nhé!', '2013-06-05', 1, '/img/gallery/thumnail/1370458304.jpg', '(Dân trí) - Một đoạn video vừa được tung lên mạng, đưa hình ảnh hàng trăm học sinh của một trường THPT tại TPHCM xé đề cương môn lịch sử và hò reo sung sướng khi được thông báo năm nay môn học này không thi tốt nghiệp THPT.', '<div style="text-align: justify;">\r\n	(D&acirc;n tr&iacute;) - Một đoạn video vừa được tung l&ecirc;n mạng, đưa h&igrave;nh ảnh h&agrave;ng trăm học sinh của một trường THPT tại TPHCM x&eacute; đề cương m&ocirc;n lịch sử v&agrave; h&ograve; reo sung sướng khi được th&ocirc;ng b&aacute;o năm nay m&ocirc;n học n&agrave;y kh&ocirc;ng thi tốt nghiệp THPT.</div>\r\n<div style="text-align: justify;">\r\n	&nbsp;</div>\r\n<div style="text-align: justify; margin-left: 200px;">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img alt="" src="http://localhost/library-project-graduation/project-library/public/img/gallery/images/2.jpg" style="width: 338px; height: 247px;" /></div>\r\n<div style="text-align: justify;">\r\n	&nbsp;</div>\r\n<div style="text-align: justify;">\r\n	Xem đoạn video m&agrave; ruột thắt, m&agrave; buồn đến n&atilde;o l&ograve;ng. Đề cương m&ocirc;n lịch sử bị x&eacute; n&aacute;t, vứt th&agrave;nh một đống r&aacute;c trắng x&oacute;a s&acirc;n trường. C&oacute; thể c&aacute;c bạn trong một l&uacute;c bột ph&aacute;t, bắt chước nhau thực hiện một h&agrave;nh động thiếu suy nghĩ. Nhưng c&oacute; thể h&agrave;nh động đ&oacute; c&oacute; nguy&ecirc;n nh&acirc;n s&acirc;u xa, đ&oacute; l&agrave; ch&aacute;n gh&eacute;t m&ocirc;n lịch sử.</div>\r\n<div style="text-align: justify;">\r\n	&nbsp;</div>\r\n<div style="text-align: justify;">\r\n	Đ&atilde; bao m&ugrave;a thi rồi, lịch sử vẫn l&agrave; m&ocirc;n thi nhiều điểm 0 v&agrave; nhiều điểm k&eacute;m nhất. Mặc d&ugrave; người đứng đầu ng&agrave;nh gi&aacute;o dục từng ph&aacute;t biểu điểm 0 m&ocirc;n lịch sử nhiều l&agrave; chuyện b&igrave;nh thường, nhưng thực ra l&agrave; rất kh&ocirc;ng b&igrave;nh thường.</div>\r\n<div style="text-align: justify;">\r\n	&nbsp;</div>\r\n<div style="text-align: justify;">\r\n	Thử đi t&igrave;m nguy&ecirc;n nh&acirc;n v&igrave; sao học sinh ch&aacute;n gh&eacute;t m&ocirc;n lịch sử, chỉ khi t&igrave;m đ&uacute;ng nguy&ecirc;n nh&acirc;n mới c&oacute; thể trị liệu được. Lịch sử l&agrave; m&ocirc;n học hấp dẫn, th&uacute; vị, gi&agrave;u kiến thức, phong ph&uacute; cảm x&uacute;c, nhưng c&aacute;c em nuốt kh&ocirc;ng tr&ocirc;i.</div>\r\n<div style="text-align: justify;">\r\n	&nbsp;</div>\r\n<div style="text-align: justify;">\r\n	C&oacute; lẽ l&agrave; do ch&uacute;ng ta dạy lịch sử với ti&ecirc;u ch&iacute; định sẵn, ta lu&ocirc;n thắng, địch to&agrave;n thua. Ta vĩ đại c&ograve;n địch tầm thường. Trận n&agrave;o ta cũng thắng, địch chạy d&agrave;i, ta thu được nhiều chiến lợi phẩm, đếm rất nhiều x&aacute;c qu&acirc;n th&ugrave;&hellip;</div>\r\n<div style="text-align: justify;">\r\n	&nbsp;</div>\r\n<div style="text-align: justify;">\r\n	Kh&ocirc;ng! Lịch sử kh&ocirc;ng chỉ c&oacute; h&agrave;o h&ugrave;ng m&agrave; c&ograve;n bi tr&aacute;ng, kh&ocirc;ng chỉ c&oacute; thắng lợi m&agrave; c&ograve;n thất bại, kh&ocirc;ng chỉ c&oacute; hạnh ph&uacute;c m&agrave; mu&ocirc;n triệu đắng cay. Để c&oacute; chiến thắng qu&acirc;n Minh, d&acirc;n Đại Việt phải trả gi&aacute; nhiều năm l&agrave;m n&ocirc; lệ cho giặc phương Bắc: &ldquo;Nướng d&acirc;n đen tr&ecirc;n ngọn lửa hung t&agrave;n - V&ugrave;i con đỏ xuống dưới hầm tai vạ&rdquo; (B&igrave;nh Ng&ocirc; đại c&aacute;o). Để c&oacute; &nbsp;chiến thắng tr&ecirc;n s&ocirc;ng Bạch Đằng năm 1288, d&acirc;n Đại Việt phải &ldquo;Nh&igrave;n thấy sứ giặc đi lại ngh&ecirc;nh ngang ngo&agrave;i đường, mang uốn lưỡi c&uacute; diều m&agrave; sỉ mắng triều đ&igrave;nh, đem th&acirc;n d&ecirc; ch&oacute; m&agrave; bắt nạt tổ phụ - Hịch Tướng sĩ&rdquo;. Đại Việt c&oacute; nhiều v&otilde; tướng t&agrave;i danh, văn quan nức tiếng th&igrave; cũng c&oacute; những Trần &Iacute;ch Tắc &ocirc;m ch&acirc;n ngoại bang.</div>\r\n<div style="text-align: justify;">\r\n	&nbsp;</div>\r\n<div style="text-align: justify;">\r\n	Thời n&agrave;o cũng thế, ngo&agrave;i chiến thắng, lịch sử ghi lại những sai lầm phải trả gi&aacute; bằng m&aacute;u xương, bằng sự đ&oacute;i ngh&egrave;o, bằng những bước đi l&ugrave;i trong lạc hậu của d&acirc;n tộc. Nếu đừng &nbsp;t&ocirc; hồng m&agrave; dạy lịch sử bằng tất cả sự trung thực th&igrave; học sinh sẽ rơi nước mắt bởi những trang sử huy ho&agrave;ng đồng thời cũng sẽ thấu hiểu những kh&oacute; khăn m&agrave; đất nước đ&atilde; trải qua tại những thời điểm nhất định.</div>\r\n<div style="text-align: justify;">\r\n	&nbsp;</div>\r\n<div style="text-align: justify;">\r\n	Lịch sử sống động về c&aacute;c trận hải chiến Ho&agrave;ng Sa, Trường Sa, bi&ecirc;n giới ph&iacute;a Bắc, bi&ecirc;n giới T&acirc;y Nam, ai đ&atilde; chiếm biển, chiếm đảo của Việt Nam? V&igrave; sao ch&uacute;ng ta để mất biển, mất đảo? Những trang sử đ&oacute; kh&ocirc;ng thể kh&ocirc;ng n&oacute;ng bỏng tr&ecirc;n bục giảng.</div>\r\n<div style="text-align: justify;">\r\n	&nbsp;</div>\r\n<div style="text-align: justify;">\r\n	C&aacute;c bạn trẻ đừng coi thường lịch sử bởi nếu được biết một c&aacute;ch ch&acirc;n thực, chắc chắn c&aacute;c bạn sẽ kh&oacute;c v&igrave; niềm tự h&agrave;o cũng như sự cay đắng. C&aacute;c bạn sẽ hiểu được sự thật v&agrave; y&ecirc;u lịch sử đất nước với tất cả cảm x&uacute;c, sẽ &acirc;n hận v&igrave; từng ch&aacute;n gh&eacute;t m&ocirc;n lịch sử.</div>\r\n<div style="text-align: justify;">\r\n	&nbsp;</div>\r\n<div style="text-align: justify;">\r\n	Đừng x&eacute; s&aacute;ch lịch sử nữa c&aacute;c bạn nh&eacute;.</div>\r\n', 1),
(3, '10 bí quyết học tập hiệu quả', '2013-06-04', 1, '/img/gallery/thumnail/1370458497.jpg', 'Tại sao có người học kém? Tại sao có người học giỏi? Thực ra học kém hay giỏi không phải là bản chất, mà phần nhiều là do họ chưa biết đâu là những bí quyết cần thiết để học giỏi mà thôi.', '<div>\r\n	1. Chọn thời điểm v&agrave; kh&ocirc;ng gian y&ecirc;n tĩnh.</div>\r\n<div>\r\n	Bạn cần một kh&ocirc;ng gian y&ecirc;n tĩnh, tr&aacute;nh ồn &agrave;o như vậy bạn sẽ dễ d&agrave;ng tập trung hơn. N&ecirc;n ngồi gần cửa sổ, c&agrave;ng tiếp x&uacute;c với &aacute;nh s&aacute;ng tự nhi&ecirc;n v&agrave; luồng kh&ocirc;ng kh&iacute; lưu th&ocirc;ng đều trong ph&ograve;ng.</div>\r\n<div style="text-align: center;">\r\n	<img alt="" src="http://localhost/library-project-graduation/project-library/public/img/gallery/images/5.jpg" style="width: 290px; height: 174px;" /></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	2. Học buổi s&aacute;ng l&agrave; tốt nhất. Kh&ocirc;ng thức đ&ecirc;m nhiều, nhất l&agrave; trước kỳ thi.</div>\r\n<div>\r\n	X&aacute;c định thời điểm học cũng rất quan trọng. Khả năng lao động tr&iacute; &oacute;c của con người tăng dần từ s&aacute;ng sớm tới gần trưa, sau đ&oacute; giảm dần - sau bữa ăn trưa n&ecirc;n c&oacute; ngủ trưa ch&uacute;t &iacute;t từ 20-30 ph&uacute;t cũng được. Hiệu suất học buổi trưa c&ograve;n cao hơn buổi s&aacute;ng, đặc biệt đối với những m&ocirc;n học kh&oacute;.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Buổi chiều c&oacute; hơi giảm v&agrave;o giờ ăn tối. Sau đ&oacute;, dường như c&oacute; một chu kỳ mới v&agrave; khả năng tr&iacute; &oacute;c lại tăng dần cho tới khoảng 21 giờ, sau đ&oacute; lại giảm. Kh&ocirc;ng n&ecirc;n thức sau 22 giờ - v&igrave; đầu &oacute;c sau một ng&agrave;y l&agrave;m việc dường như đ&atilde; b&atilde;o h&ograve;a, kh&ocirc;ng c&ograve;n tiếp thu th&ecirc;m được nữa. L&uacute;c rời b&agrave;n học, c&aacute;c bạn c&oacute; thể lật qua, lướt mau những d&ograve;ng đầu của c&aacute;c b&agrave;i đ&atilde; &ocirc;n từ đầu để x&aacute;c định m&igrave;nh đ&atilde; học được tới đ&acirc;u. L&agrave;m như vậy cũng tựa như m&igrave;nh gởi tất cả v&agrave;o tiềm thức bộ nhớ trước khi đưa n&atilde;o v&agrave;o giấc ngủ.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	3. Ngủ kh&ocirc;ng đủ sẽ l&agrave;m n&atilde;o bộ hoạt động k&eacute;m hơn b&igrave;nh thường.</div>\r\n<div>\r\n	Trung b&igrave;nh ch&uacute;ng ta cần ngủ khoảng 8 tiếng một ng&agrave;y, nhiều nhất l&agrave; về đ&ecirc;m, để cho ấn tượng ng&agrave;y h&ocirc;m trước dịu nhạt, những ấn tượng ng&agrave;y mới chưa h&igrave;nh th&agrave;nh, s&aacute;ng sớm tỉnh dậy c&oacute; một bộ &oacute;c &quot;mới tinh&quot;, c&oacute; khả năng hoạt động tốt nhất. Vả lại, c&oacute; ngủ được say th&igrave; trong giấc ngủ v&agrave;o giai đoạn c&oacute; giấc mơ, cũng l&agrave; l&uacute;c m&agrave; c&aacute;c k&iacute;ch th&iacute;ch tố tăng trưởng được tiết ra gi&uacute;p ch&uacute;ng m&igrave;nh mau lớn th&ecirc;m nữa.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	4. Đặt ra mục ti&ecirc;u v&agrave; cố gắng hết sức ho&agrave;n th&agrave;nh mục ti&ecirc;u đ&oacute;.</div>\r\n<div>\r\n	- Theo quy luật 90/10, cứ 10 ph&uacute;t bạn bỏ ra để lập kế hoạch th&igrave; bạn sẽ tiết kiệm được 90% thời gian ho&agrave;n th&agrave;nh v&agrave; hiệu quả c&ocirc;ng việc. - Từ b&acirc;y giờ bạn h&atilde;y lấy một tờ giấy v&agrave; x&aacute;c định lại mục ti&ecirc;u luyện thi đại học của m&igrave;nh:</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	+ Bạn định thi đỗ trường n&agrave;o?</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	+ Số điểm dự kiến l&agrave; bao nhi&ecirc;u?</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	+ Bạn thực sự muốn chiến thắng?</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Sau đ&oacute; bạn h&atilde;y l&ecirc;n lịch cho từng c&ocirc;ng việc cụ thể để tiến tới mục ti&ecirc;u đ&oacute;. C&oacute; ai đ&oacute; đ&atilde; n&oacute;i rằng ch&uacute;ng ta kh&ocirc;ng bao giờ c&oacute; đủ thời gian để l&agrave;m tất cả mọi việc, nhưng lu&ocirc;n c&oacute; đủ để l&agrave;m những việc quan trọng nhất.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Mỗi ng&agrave;y bạn đừng tham lam l&agrave;m hết tất cả mọi việc, &ocirc;n hết tất cả c&aacute;c m&ocirc;n m&agrave; h&atilde;y lập ra một bảng ưu ti&ecirc;n c&aacute;c m&ocirc;n v&agrave; kế hoạch &ocirc;n từng ng&agrave;y.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Khi bạn thi đại học, đương nhi&ecirc;n c&aacute;c m&ocirc;n thi đại học vẫn l&agrave; ưu ti&ecirc;n h&agrave;ng đầu, nhưng bạn cũng đừng c&oacute; bỏ qu&aacute; nhiều thời gian v&agrave;o đ&oacute;. Khoa học đ&atilde; chứng minh rằng, nếu bạn học một m&ocirc;n li&ecirc;n tục qu&aacute; 45 ph&uacute;t th&igrave; khả năng nhớ sẽ giảm rất nhanh trong thời gian sau đ&oacute;.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	T&oacute;m lại bạn h&atilde;y l&ecirc;n một c&aacute;i lịch cụ thể cho h&agrave;ng ng&agrave;y, h&agrave;ng tuần, h&agrave;ng th&aacute;ng, v&agrave;i th&aacute;ng. Định ra việc g&igrave; l&agrave; quan trọng hơn th&igrave; l&agrave;m trước.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	5. Tập trung cao độ trong khoảng 1 tiếng rồi nghỉ giải lao, tr&aacute;nh ngồi l&igrave; 3-4 tiếng li&ecirc;n tục.</div>\r\n<div>\r\n	Thời gian học hiệu quả thường khoảng 45 ph&uacute;t sau đ&oacute; h&atilde;y nghỉ ngơi thư gi&atilde;n một ch&uacute;t. V&agrave; nếu bạn cảm thấy qu&ecirc;n kiến thức th&igrave; cũng đừng c&oacute; cố gắng qu&aacute; để nhớ lại n&oacute; l&agrave;m g&igrave; cả. Nguy&ecirc;n tắc của học hiệu quả l&agrave; phải để cho đầu &oacute;c thư gi&atilde;n, rồi tự kiến thức n&oacute; sẽ về. Nếu bạn muốn &ocirc;n lại b&agrave;i th&igrave; h&atilde;y &ocirc;n lại sau đ&oacute; 10 ph&uacute;t, rồi 1 ng&agrave;y, rồi 1 tuần, v&agrave; một th&aacute;ng.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	6. D&ugrave;ng phương ph&aacute;p ghi nhớ hiệu quả như sơ đồ Mind map</div>\r\n<div>\r\n	L&agrave;m sao để nhớ cả bảng hệ thống tuần ho&agrave;n? Nhớ tất cả c&aacute;c sự kiện lịch sử trong s&aacute;ch? Bạn h&atilde;y thực hiện theo c&aacute;ch sau:</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Ghi th&agrave;nh d&agrave;n b&agrave;i:</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Nhẩm trong &oacute;c:</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Ghi ra giấy: &nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Nhất l&agrave; những c&ocirc;ng thức, những định l&yacute;, định đề. Khi ghi, bạn chỉ t&oacute;m tắt phần quan trọng, sao cho khi mở trang giấy ra nhắc nhở lại bạn hệ thống b&agrave;i học bằng tr&iacute; nhớ m&agrave; kh&ocirc;ng cần mở s&aacute;ch.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Tr&aacute;nh ghi rườm r&agrave;, dư thừa, vừa mất thời gan v&ocirc; &iacute;ch m&agrave; lại ph&iacute; sức. N&oacute;i chung l&agrave;m thế n&agrave;o để bạn c&oacute; thể tổng hợp c&aacute;c phương ph&aacute;p (nhẩm nhớ - ghi ch&eacute;p - v&agrave; lập d&agrave;n b&agrave;i) sao cho tạo được điều kiện để bạn đọc b&agrave;i mau thuộc đ&oacute; l&agrave; đ&iacute;ều quan trọng nhất.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	N&ecirc;n cố gắng tập trung v&agrave;o những kiến thức cơ bản. Khối kiến thức n&agrave;y thường tập trung ở một số mảng, v&iacute; dụ: kh&aacute;i niệm, giả thuyết, quy luật, l&yacute; luận...</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Khi học, cần hiểu r&otilde; bản chất của vấn đề, &nbsp;phải x&aacute;c định c&aacute;c đặc điểm, c&aacute;ch thức vận dụng những kh&aacute;i niệm, quy luật, l&yacute; thuyết... trong việc giải quyết những vấn đề cụ thể. Từ đ&oacute;, y&ecirc;u cầu tiếp theo l&agrave; phải luyện tập để h&igrave;nh th&agrave;nh kỹ năng giải quyết vấn đề (đề thi cũng l&agrave; một dạng vấn đề cụ thể cần giải quyết).</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	C&oacute; hai dạng: vận dụng theo mẫu v&agrave; vận dụng một c&aacute;ch s&aacute;ng tạo, linh hoạt. Khi &ocirc;n, n&ecirc;n ch&uacute; &yacute; vận dụng theo cả hai tuyến:</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Theo chiều dọc: trong phạm vi c&ugrave;ng loại vấn đề, c&ugrave;ng chuy&ecirc;n m&ocirc;n, lĩnh vực...</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Theo chiều ngang: trong phạm vi những chương mục, m&ocirc;n học kh&aacute;c nhau nhưng c&oacute; li&ecirc;n quan đến nhau... Sau khi đ&atilde; học xong l&yacute; thuyết, n&ecirc;n tự đặt ra những c&acirc;u hỏi li&ecirc;n quan đến nội dung &ocirc;n thi để kiểm tra tr&igrave;nh độ của m&igrave;nh. Đ&oacute; cũng l&agrave; một c&aacute;ch để nhớ l&acirc;u v&agrave; tạo cơ sở để tăng dung lượng tr&iacute; nhớ l&agrave;m việc (working memory).</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	7. Tận dụng cả 2 b&aacute;n cầu n&atilde;o để đạt hiệu quả tối đa.</div>\r\n<div>\r\n	Tại sao c&oacute; người học k&eacute;m? Tại sao c&oacute; người học giỏi? Thực ra học k&eacute;m hay giỏi kh&ocirc;ng phải l&agrave; bản chất, m&agrave; phần nhiều l&agrave; do họ chưa biết c&aacute;ch điều khiển bộ n&atilde;o của m&igrave;nh m&agrave; th&ocirc;i. N&atilde;o bạn c&oacute; 2 b&aacute;n cầu, n&atilde;o tr&aacute;i chủ yếu cho tư duy logic, ng&ocirc;n ngữ c&ograve;n n&atilde;o phải l&agrave; cho tưởng tượng h&igrave;nh ảnh.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Từ trước đến giờ người ta dạy c&aacute;c bạn l&agrave; đa số t&aacute;c động v&agrave;o n&atilde;o tr&aacute;i, tức l&agrave; giảng to&agrave;n chữ n&ecirc;n trong giờ học, n&atilde;o phải của bạn kh&ocirc;ng c&oacute; việc l&agrave;m, cứ tưởng tượng m&ocirc;ng lung dẫn đến kh&ocirc;ng tập trung g&igrave; cả. V&igrave; vậy, muốn học hiệu quả ch&uacute;ng ta phải t&igrave;m c&aacute;ch vận dụng cả 2 n&atilde;o của m&igrave;nh. Một phương ph&aacute;p đơn giản nhất gi&uacute;p học c&aacute;c m&ocirc;n học thuộc dễ hơn cả ch&iacute;nh l&agrave; tưởng tượng. Từ b&acirc;y giờ bạn h&atilde;y t&igrave;m c&aacute;ch tưởng tượng thật nhiều v&agrave;o.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	8. Hạn chế nghe nhạc trong khi học. Trừ nhạc Baroque.</div>\r\n<div>\r\n	Nếu c&oacute; thể, bạn h&atilde;y t&igrave;m loại nhạc Baroque để l&agrave;m nền khi học. Người ta n&oacute;i rằng loại nhạc n&agrave;y c&oacute; thể r&uacute;t ngắn thời gian học tiếng anh hiệu quả từ 3 năm xuống c&ograve;n 3 th&aacute;ng. Bạn c&oacute; nghe thử 1 bản nhạc Baroque dưới đ&acirc;y được tr&iacute;ch trong bản giao hưởng Bốn m&ugrave;a của Vivaldi.Tất nhi&ecirc;n nếu bạn l&agrave; một người &quot;nhạy cảm&quot; với &acirc;m thanh khi học thấy kh&ocirc;ng hiệu quả hoặc kh&ocirc;ng tập trung được th&igrave; tốt nhất kh&ocirc;ng n&ecirc;n nghe loại nhạc n&agrave;o hết.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	9. Kh&ocirc;ng học khi vừa ăn xong.</div>\r\n<div>\r\n	&quot;Căng da bụng, ch&ugrave;ng da mắt&quot;, điều n&agrave;y khỏi phải b&agrave;n c&atilde;i nữa nhỉ.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	10. Kết hợp giải lao vận động nhẹ nh&agrave;ng như đi dạo, đạp xe, chơi Wii&hellip;</div>\r\n<div>\r\n	Những ph&uacute;t giải lao n&agrave;y c&oacute; mục đ&iacute;ch l&agrave;m thư gi&atilde;n thần kinh, tr&iacute; &oacute;c. N&ecirc;n đi đi, lại lại, giải tr&iacute; bằng tr&ograve; chơi nhẹ nh&agrave;ng, vui vẻ, tr&aacute;nh vận động nhiều v&agrave; mạnh.</div>\r\n', 1),
(4, 'Nên nói gì khi nói về dịch thuật', '2013-06-05', 1, '/img/gallery/thumnail/1371091949.jpg', 'TT - Nếu tính từ lỗi sai "bố mất vì ung thư tử cung" trong bản dịch Hạt cơ bản đến lỗi "thuốc bôi chân của bác sĩ Scholl" (Dr. Scholl foot powder) trong quyển Những thứ họ mang, độc giả hẳn sẽ rất hoang mang khi cầm trên tay bản dịch một danh tác mà không biết liệu nó có lỗi sai nào "bất hủ" kiểu như thế không.', '<p>\r\n	ssas</p>\r\n', 1),
(5, 'Thông báo về Kế hoạch tổ chức cuộc thi viết chủ đề "Quyển sách làm tôi thay đổi" (29/5/13)', '2013-06-14', 1, NULL, 'Thông báo về Kế hoạch tổ chức cuộc thi viết chủ đề "Quyển sách làm tôi thay đổi" (29/5/13)\r\n', '<p>\r\n	TRƯỜNG TRUNG CẤP CẢNH S&Aacute;T GIAO TH&Ocirc;NG T52<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PH&Ograve;NG ĐIỆN TO&Aacute;N &amp; TH&Ocirc;NG TIN TƯ LIỆU<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ----o0o----</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style="text-align: center;">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tp. Hồ Ch&iacute; Minh, ng&agrave;y 14 th&aacute;ng 05 năm 2013</p>\r\n<p style="text-align: center;">\r\n	<strong>KẾ HOẠCH<br />\r\n	TỔ CHỨC CUỘC THI VIẾT<br />\r\n	CHỦ ĐỀ &ldquo;QUYỂN S&Aacute;CH L&Agrave;M T&Ocirc;I THAY ĐỔI &rdquo;</strong></p>\r\n<p style="text-align: justify;">\r\n	<strong>I. Mục đ&iacute;ch v&agrave; Y&ecirc;u cầu</strong><br />\r\n	<strong>1. Mục đ&iacute;ch</strong><br />\r\n	- Cổ vũ văn h&oacute;a đọc, g&oacute;p phần ph&aacute;t triển văn h&oacute;a đọc trong học sinh - sinh vi&ecirc;n.<br />\r\n	- Tạo ra s&acirc;n chơi l&agrave;nh mạnh, k&iacute;ch th&iacute;ch nhu cầu đọc s&aacute;ch trong học sinh - sinh vi&ecirc;n.<br />\r\n	- N&acirc;ng cao nhận thức về tầm quan trọng của s&aacute;ch cho c&aacute;c bạn học sinh &ndash; sinh vi&ecirc;n.<br />\r\n	- G&oacute;p phần chia sẻ những cảm nhận, những b&agrave;i học r&uacute;t ra qua việc đọc s&aacute;ch.<br />\r\n	- Th&ocirc;ng qua c&aacute;c hoạt động của cuộc thi nhằm r&egrave;n luyện một số kỹ năng mềm cho cho sinh vi&ecirc;n: kỹ năng viết, kỹ năng tr&igrave;nh b&agrave;y&hellip;<br />\r\n	- Kết quả của cuộc thi sẽ l&agrave; th&agrave;nh t&iacute;ch ch&agrave;o mừng 16 năm ng&agrave;y th&agrave;nh lập trường v&agrave; 01 năm th&agrave;nh lập Thư viện điện tử.<br />\r\n	- B&ecirc;n cạnh đ&oacute;, th&ocirc;ng qua kết quả của cuộc thi, sẽ g&oacute;p phần t&igrave;m kiếm c&aacute;c nh&acirc;n lực chủ chốt cho C&acirc;u lạc bộ đọc s&aacute;ch trong học sinh - sinh vi&ecirc;n.<br />\r\n	2. Y&ecirc;u cầu<br />\r\n	- C&aacute;c Khoa v&agrave; Ph&ograve;ng CTHS-SV vận động sinh vi&ecirc;n tham gia để cuộc thi diễn ra s&ocirc;i nổi, hấp dẫn.<br />\r\n	- Th&ocirc;ng tin rộng r&atilde;i về cuộc thi đến tất cả sinh vi&ecirc;n của trường.<br />\r\n	- C&aacute;c c&aacute; nh&acirc;n tham gia cuộc thi phải tu&acirc;n thủ thể lệ cuộc thi v&agrave; c&aacute;c qui định do Ban tổ chức đề ra trong suốt qu&aacute; tr&igrave;nh tham gia cuộc thi.<br />\r\n	<strong>II. THỜI GIAN</strong><br />\r\n	- Thời gian dự kiến: Từ ng&agrave;y 08/07/2013 đến ng&agrave;y 31/08/2013.</p>\r\n<p style="text-align: justify;">\r\n	<strong>III. Đối tượng dự thi</strong><br />\r\n	Tất cả học sinh &ndash; sinh vi&ecirc;n Trường đại học T&ocirc;n Đức Thắng.<br />\r\n	<strong>IV. Chủ đề - H&igrave;nh thức &ndash; Thể lệ</strong><br />\r\n	<strong>1. Chủ đề cuộc thi:</strong><br />\r\n	&ldquo;Quyển s&aacute;ch l&agrave;m t&ocirc;i thay đổi&rdquo;.<br />\r\n	<strong>2. H&igrave;nh thức thi:</strong><br />\r\n	Thi viết cảm nhận về s&aacute;ch.<br />\r\n	<strong>3. Thể lệ cuộc thi:</strong><br />\r\n	- B&agrave;i viết cần tr&igrave;nh b&agrave;y c&aacute;c nội dung: giới thiệu những th&ocirc;ng tin chung của s&aacute;ch (t&ecirc;n s&aacute;ch, t&aacute;c giả, nh&agrave; xuất bản, năm xuất bản), tr&igrave;nh b&agrave;y cảm nhận về quyển s&aacute;ch đ&atilde; l&agrave;m thay đổi nhận thức, h&agrave;nh vi, lối sống&hellip; v&agrave; mang lại những gi&aacute; trị t&iacute;ch cực cho cuộc đời bạn.<br />\r\n	- B&agrave;i viết phải phản &aacute;nh trung thực sự t&aacute;c động của s&aacute;ch đối với người đọc<br />\r\n	- Độ d&agrave;i của b&agrave;i viết tối thiểu 1.000 chữ<br />\r\n	- B&agrave;i viết dự thi chưa từng c&ocirc;ng bố tr&ecirc;n c&aacute;c phương tiện th&ocirc;ng tin đại ch&uacute;ng hoặc c&aacute;c loại ấn phẩm kh&aacute;c.<br />\r\n	- Khi kết quả cuộc thi chưa c&ocirc;ng bố, t&aacute;c giả c&oacute; b&agrave;i dự thi kh&ocirc;ng d&ugrave;ng b&agrave;i viết n&agrave;y để đồng thời gửi cho c&aacute;c cuộc thi hay c&ocirc;ng bố tr&ecirc;n phương tiện th&ocirc;ng tin đại ch&uacute;ng n&agrave;o kh&aacute;c trong suốt thời gian cuộc thi diễn ra.<br />\r\n	- B&agrave;i dự thi được viết bằng tiếng Việt, c&oacute; thể viết tay r&otilde; r&agrave;ng, sạch sẽ hoặc đ&aacute;nh m&aacute;y (font Times New Roman, cỡ chữ 12, m&atilde; Unicode) tr&ecirc;n 01 mặt giấy, khổ A4.<br />\r\n	- Mỗi t&aacute;c giả c&oacute; thể tham dự một hoặc nhiều b&agrave;i viết.<br />\r\n	- B&ecirc;n cạnh b&uacute;t danh (nếu c&oacute;), t&aacute;c giả cần ghi r&otilde; r&agrave;ng họ t&ecirc;n thật, m&atilde; số sinh vi&ecirc;n, Khoa/Trung t&acirc;m, số điện thoại, địa chỉ email&hellip; ở cuối b&agrave;i dự thi.<br />\r\n	- B&agrave;i viết đạt giải thuộc bản quyền của website Thư viện (lib.tdt.edu.vn)<br />\r\n	- B&agrave;i dự thi kh&ocirc;ng được giải, ban tổ chức kh&ocirc;ng trả lại bản thảo.<br />\r\n	- S&aacute;ch giới thiệu phải được xuất bản theo c&aacute;c quy định của ph&aacute;p luật Việt Nam<br />\r\n	<strong>V. Th&agrave;nh lập Ban Tổ chức &ndash; Ban Gi&aacute;m khảo</strong><br />\r\n	<strong>1. Ban Tổ chức</strong><br />\r\n	- B&ugrave;i Loan Th&ugrave;y&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp; Trưởng ph&ograve;ng ĐT&amp;TTTL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ndash;&nbsp; Trưởng ban<br />\r\n	- Phạm Nhất Phương&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp; Ph&oacute; trưởng ph&ograve;ng CTHS-SV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ndash;&nbsp; Ph&oacute; trưởng ban<br />\r\n	- Trịnh Thanh Li&ecirc;m&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp; Ph&oacute; Trưởng ph&ograve;ng ĐT&amp;TTTL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ndash;&nbsp; Th&agrave;nh vi&ecirc;n<br />\r\n	- Trịnh Phi Cường&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp; Trợ l&yacute; Trưởng ph&ograve;ng ĐT&amp;TTTL&nbsp;&nbsp;&nbsp;&nbsp; &ndash;&nbsp;&nbsp; Th&agrave;nh vi&ecirc;n<br />\r\n	- H&agrave; Thị Th&ugrave;y Trang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp; Tổ trưởng Tổ Thư viện điện tử&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ndash;&nbsp;&nbsp; Th&agrave;nh vi&ecirc;n<br />\r\n	- Trương Thị Ngọc Mai&nbsp;&nbsp; -&nbsp; Tổ trưởng Tổ Thư viện truyền thống &ndash;&nbsp; Th&agrave;nh vi&ecirc;n<br />\r\n	- Huỳnh Thiện Khi&ecirc;m&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp; Chuy&ecirc;n vi&ecirc;n Thư viện&nbsp;&nbsp;&nbsp; &ndash;&nbsp;&nbsp;&nbsp; Th&agrave;nh vi&ecirc;n<br />\r\n	- T&ocirc; Sanya Minh Kha&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Chuy&ecirc;n vi&ecirc;n Thư viện&nbsp;&nbsp;&nbsp;&nbsp; &ndash;&nbsp;&nbsp;&nbsp; Th&agrave;nh vi&ecirc;n<br />\r\n	<strong>2. Ban Gi&aacute;m khảo</strong><br />\r\n	- L&ecirc; Thị Mai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp; Ph&oacute; trưởng khoa KHXH&amp;NV&nbsp;&nbsp;&nbsp;&nbsp; &ndash; Trưởng ban<br />\r\n	- B&ugrave;i Loan Th&ugrave;y&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp; Trưởng ph&ograve;ng ĐT&amp;TTTL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ndash;&nbsp; Ph&oacute; trưởng ban<br />\r\n	- Phạm Nhất Phương&nbsp;&nbsp; -&nbsp; Ph&oacute; trưởng ph&ograve;ng CTHS-SV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ndash; Ph&oacute; trưởng ban<br />\r\n	<strong>VI. Cơ cấu giải thưởng</strong><br />\r\n	- 01 giải nhất: 500.000 đồng + giấy khen của Hiệu trưởng Trường đại học T&ocirc;n Đức Thắng + 04 quyển s&aacute;ch + 03 th&aacute;ng sử dụng miễn ph&iacute; m&aacute;y t&iacute;nh tại Thư viện điện tử của Trường<br />\r\n	- 02 giải nh&igrave;: 400.000 đồng + giấy khen của Hiệu trưởng Trường đại học T&ocirc;n Đức Thắng + 03 quyển s&aacute;ch + 03 th&aacute;ng sử dụng miễn ph&iacute; m&aacute;y t&iacute;nh tại Thư viện điện tử của Trường<br />\r\n	- 03 giải ba: 300.000 đồng + giấy khen của Hiệu trưởng Trường đại học T&ocirc;n Đức Thắng + 02 quyển s&aacute;ch + 02 th&aacute;ng sử dụng miễn ph&iacute; m&aacute;y t&iacute;nh tại Thư viện điện tử của Trường<br />\r\n	- 04 giải khuyến kh&iacute;ch: 200.000 đồng + giấy khen của Hiệu trưởng Trường đại học T&ocirc;n Đức Thắng + 01 quyển s&aacute;ch + 01 th&aacute;ng sử dụng miễn ph&iacute; m&aacute;y t&iacute;nh tại Thư viện điện tử của Trường</p>\r\n<p style="text-align: justify;">\r\n	<strong>VII. Địa chỉ v&agrave; thời gian nhận b&agrave;i dự thi</strong><br />\r\n	- Địa chỉ: Thư viện Trường đại học T&ocirc;n Đức Thắng hoặc gửi về theo địa chỉ email: quyensachlamtoithaydoi@tdt.edu.vn<br />\r\n	- Thời gian nhận b&agrave;i dự thi: Từ ng&agrave;y 16/07/2013 đến hết ng&agrave;y 20/08/2013.</p>\r\n<p>\r\n	<br />\r\n	&nbsp;</p>\r\n', 2),
(6, 'Thông báo về địa điểm sinh viên học nhóm, thảo luận nhóm từ ngày 15/3/2013', '2013-03-12', 1, NULL, 'Thông báo về địa điểm sinh viên học nhóm, thảo luận nhóm từ ngày 15/3/2013', '<p>\r\n	TRƯỜNG TRUNG CẤP CẢNH S&Aacute;T GIAO TH&Ocirc;NG T52</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PH&Ograve;NG ĐIỆN TO&Aacute;N &amp; TH&Ocirc;NG TIN TƯ LIỆU</p>\r\n<p style="text-align: center;">\r\n	<strong>TH&Ocirc;NG B&Aacute;O</strong></p>\r\n<p style="text-align: justify;">\r\n	<strong>Về địa điểm sinh vi&ecirc;n học nh&oacute;m, thảo luận nh&oacute;m</strong></p>\r\n<p style="text-align: justify;">\r\n	Theo chỉ đạo của Ban Gi&aacute;m hiệu, kể từ ng&agrave;y 15/3/2013 c&aacute;c khu vực đọc tại chỗ thư viện tầng 8, 9 v&agrave; thư viện điện tử (tầng 10) l&agrave; những khu vực cần giữ g&igrave;n trật tự để tăng hiệu quả sử dụng s&aacute;ch b&aacute;o v&agrave; tra cứu t&igrave;m tin c&aacute; nh&acirc;n. V&igrave; vậy, tất cả c&aacute;c hoạt động: thảo luận nh&oacute;m, học nh&oacute;m tại thư viện chỉ phục vụ trong ph&ograve;ng Thảo luận nh&oacute;m (tầng 9). Ngo&agrave;i ra, sinh vi&ecirc;n c&oacute; thể thảo luận nh&oacute;m, học nh&oacute;m tại c&aacute;c b&agrave;n, ghế đ&aacute; được đặt ở sảnh c&aacute;c t&ograve;a nh&agrave;.</p>\r\n<p style="text-align: right;">\r\n	PH&Ograve;NG ĐIỆN TO&Aacute;N &amp; TH&Ocirc;NG TIN TƯ LIỆU</p>\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lib_bookauthors`
--

CREATE TABLE IF NOT EXISTS `lib_bookauthors` (
  `bookAuthorID` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(45) NOT NULL,
  `bookBarcode` int(11) NOT NULL,
  PRIMARY KEY (`bookAuthorID`),
  KEY `fk_lib_BookAuthor_lib_BookStores1_idx` (`bookBarcode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `lib_bookauthors`
--

INSERT INTO `lib_bookauthors` (`bookAuthorID`, `author`, `bookBarcode`) VALUES
(1, 'Nguyễn Trường Thuật', 129),
(2, 'Nguyễn Văn A', 130),
(3, 'Nguyễn Văn C', 131),
(4, 'Trần Văn D', 131),
(5, 'Nguyễn Văn E', 132),
(6, 'Trần Văn F', 132),
(7, 'Nguyễn Văn E', 133),
(8, 'Trần Văn F', 133),
(9, 'Nguyễn Văn E', 134),
(10, 'Trần Văn F', 134),
(11, 'Nguyễn Văn E', 135),
(12, 'Trần Văn F', 135),
(13, 'Nguyễn Văn E', 136),
(14, 'Trần Văn F', 136),
(15, 'Nguyễn Văn E', 137),
(16, 'Trần Văn F', 137),
(17, 'Nguyễn Văn E', 138),
(18, 'Trần Văn F', 138),
(19, 'Nguyễn Văn X', 139),
(20, 'Trần Văn Y', 139),
(21, 'Nguyễn Văn E', 12345),
(22, 'Trần Văn F', 12345),
(23, 'Phạm Hoàng Dũng', 140),
(24, 'Hoàng Đức Hải', 140),
(25, 'Nguyễn Văn X', 140),
(26, 'Marc Levy', 141),
(27, 'Marc Levy', 142),
(28, 'Nguyễn Văn Ba', 12346),
(29, 'Hoàng Đình Thu', 12347),
(30, 'dsfs', 12348),
(31, 'Lê Thế Lạng', 12349),
(32, 'Nguyễn Hồng Sơn', 12350);

-- --------------------------------------------------------

--
-- Table structure for table `lib_bookcategories`
--

CREATE TABLE IF NOT EXISTS `lib_bookcategories` (
  `bookCategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `bookCategoryName` varchar(45) NOT NULL,
  `comment` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`bookCategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='The loai sach: tu nhien, Xa hoi, Tin hoc' AUTO_INCREMENT=11 ;

--
-- Dumping data for table `lib_bookcategories`
--

INSERT INTO `lib_bookcategories` (`bookCategoryID`, `bookCategoryName`, `comment`) VALUES
(1, 'Tin học', NULL),
(2, 'Triết học', NULL),
(3, 'Tôn giáo', NULL),
(4, 'Khoa học - Xã hội', NULL),
(5, 'Ngôn ngữ', NULL),
(6, 'KHTN và toán học', NULL),
(7, 'Công nghệ', NULL),
(8, 'Nghệ Thuật', NULL),
(9, 'Văn học', NULL),
(10, 'Lịch sử', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lib_booklanguages`
--

CREATE TABLE IF NOT EXISTS `lib_booklanguages` (
  `languageID` int(11) NOT NULL AUTO_INCREMENT,
  `languageName` varchar(45) NOT NULL,
  `comment` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`languageID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `lib_booklanguages`
--

INSERT INTO `lib_booklanguages` (`languageID`, `languageName`, `comment`) VALUES
(1, 'Vietnamese', NULL),
(2, 'English', NULL),
(3, 'French', NULL),
(4, 'China', NULL),
(5, 'Japan', NULL),
(6, 'Korea', NULL),
(7, 'Thailan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lib_bookstores`
--

CREATE TABLE IF NOT EXISTS `lib_bookstores` (
  `bookBarcode` int(11) NOT NULL,
  `title` varchar(45) NOT NULL COMMENT 'Tên cuốn sách',
  `numberOfPages` int(11) NOT NULL COMMENT 'Tổng số trang',
  `publisher` varchar(45) NOT NULL COMMENT 'Nhà xuất bản',
  `yearOfPublish` date NOT NULL COMMENT 'Năm xuất bản',
  `totalNumber` int(11) NOT NULL,
  `price` varchar(20) NOT NULL COMMENT 'Giá sách',
  `createdTime` date NOT NULL COMMENT 'Ngày tạo biên mục cho cuốn sách',
  `paperSize` varchar(15) NOT NULL COMMENT 'Khổ giấy',
  `personCreated` varchar(45) NOT NULL COMMENT 'Người biên mục',
  `location` varchar(45) NOT NULL COMMENT 'Vị trí cuốn sách',
  `bookDescription` mediumtext NOT NULL COMMENT 'Mô tả nội dung cơ bản của cuốn sách',
  `usedAs` tinyint(4) NOT NULL COMMENT '0 - chỉ đọc tại chỗ\n1- Có thể mượn về',
  `languageID` int(11) NOT NULL COMMENT 'Ngôn ngữ của tài liệu',
  `bookTypeID` int(11) NOT NULL COMMENT 'Loại tài liệu (sách,tài liệu,giáo trình,truyện,tiểu thuyết,sách tham khảo)',
  `bookCategoryID` int(11) NOT NULL COMMENT 'The loai sach: tu nhien, Xa hoi, Tin hoc',
  PRIMARY KEY (`bookBarcode`),
  KEY `fk_lib_BookStores_lib_BookLanguages1_idx` (`languageID`),
  KEY `fk_lib_BookStores_lib_BookType1_idx` (`bookTypeID`),
  KEY `fk_lib_BookStores_lib_BookCategories1_idx` (`bookCategoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin của một tập các cuốn sách cùng tên';

--
-- Dumping data for table `lib_bookstores`
--

INSERT INTO `lib_bookstores` (`bookBarcode`, `title`, `numberOfPages`, `publisher`, `yearOfPublish`, `totalNumber`, `price`, `createdTime`, `paperSize`, `personCreated`, `location`, `bookDescription`, `usedAs`, `languageID`, `bookTypeID`, `bookCategoryID`) VALUES
(125, 'Bài tập lập trình', 250, 'NXB Giáo Dục', '2005-05-17', 10, '50.000', '2013-05-14', '18 x 6', '18 x 6', 'Giáo trình', 'fskfjslfkskfls', 0, 1, 1, 1),
(126, 'Bài tập lập trình', 250, 'NXB Giáo Dục', '2005-05-17', 10, '50.000', '2013-05-14', '18 x 6', '18 x 6', 'Giáo trình', 'fskfjslfkskfls', 0, 1, 1, 1),
(127, 'Bài tập lập trình', 250, 'NXB Giáo Dục', '2005-05-17', 10, '50.000', '2013-05-14', '18 x 6', '18 x 6', 'Giáo trình', 'fskfjslfkskfls', 0, 1, 1, 1),
(128, 'Bài tập lập trình', 250, 'NXB Giáo Dục', '2005-05-17', 10, '50.000', '2013-05-14', '18 x 6', '18 x 6', 'Giáo trình', 'fskfjslfkskfls', 0, 1, 1, 1),
(129, 'Bài tập lập trình', 250, 'NXB Giáo Dục', '2005-05-17', 10, '50.000', '2013-05-14', '18 x 6', '18 x 6', 'Giáo trình', 'fskfjslfkskfls', 0, 1, 1, 1),
(130, 'Bài tập lập trình', 250, 'NXB Giáo Dục', '2005-05-17', 10, '50.000', '2013-05-14', '18 x 6', '18 x 6', 'Giáo trình', 'fskfjslfkskfls', 0, 1, 1, 1),
(131, 'Bài tập lập trình', 250, 'NXB Giáo Dục', '2005-05-17', 10, '50.000', '2013-05-14', '18 x 6', '18 x 6', 'Giáo trình', 'fskfjslfkskfls', 0, 1, 1, 1),
(132, 'Bài tập lập trình', 250, 'NXB Giáo Dục', '2005-05-17', 10, '50.000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'fskfjslfkskfls', 0, 1, 1, 1),
(133, 'Bài tập lập trình', 250, 'NXB Giáo Dục', '2005-05-17', 10, '50.000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'fskfjslfkskfls', 0, 1, 1, 1),
(134, 'Bài tập lập trình', 250, 'NXB Giáo Dục', '2005-05-17', 10, '50.000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'fskfjslfkskfls', 0, 1, 1, 1),
(135, 'Bài tập lập trình', 250, 'NXB Giáo Dục', '2005-05-17', 10, '50.000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'fskfjslfkskfls', 0, 1, 1, 1),
(136, 'Bài tập lập trình', 250, 'NXB Giáo Dục', '2005-05-17', 10, '50.000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'fskfjslfkskfls', 0, 1, 1, 1),
(137, 'Bài tập lập trình', 250, 'NXB Giáo Dục', '2005-05-17', 10, '50.000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'fskfjslfkskfls', 0, 1, 1, 1),
(138, 'Bài tập lập trình', 250, 'NXB Giáo Dục', '2005-05-17', 10, '50.000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'fskfjslfkskfls', 0, 1, 1, 1),
(139, 'Phân tích thiêt kế web', 250, 'NXB Tuổi Trẽ', '2010-05-17', 5, '25.0000', '2013-05-14', '18 x 6', 'user01', 'Tham Khảo', 'fsfhkfhweudfdslkfjslfjslfsn', 0, 1, 2, 3),
(140, 'Làm chủ windows 2000 server', 676, 'NXB Thanh Niên', '2001-05-01', 10, '89.000', '2013-05-15', '15,5 x15,5', 'user01', 'Sách tham khảo', 'fsmfnslfshweueowns', 0, 1, 2, 3),
(141, 'Đêm Đầu tiên', 545, 'NXB Nhã Nam', '2011-10-04', 10, '105.000', '2013-05-16', '14 x 20,5 cm', 'user01', 'Truyện đọc', 'sffdsdsf', 0, 1, 1, 1),
(142, 'Phút Đầu Tiên', 545, 'NXB Nhã Nam', '2011-10-04', 10, '105.000', '2013-05-16', '14 x 20,5 cm', 'user01', 'Truyện đọc', 'sffdsdsf', 0, 1, 1, 1),
(12345, 'Lập trinh c++', 100, 'NXB Giáo Dục', '2010-05-08', 10, '25.0000', '2013-05-14', '18 x 6', 'user01', 'Giáo trình', 'hhghghgfh', 0, 2, 1, 1),
(12346, 'Phân tích và thiết kế hệ thống thông tin', 200, 'NXB Giáo Dục', '2005-05-17', 15, '30.000', '2013-05-29', '14 x 20,5 cm', 'user01', 'Tham Khảo', 'Trình bày các phương pháp phân tích thiết kế có cấu trúc dọc theo các giai đoạn của chu trình phát triển', 1, 1, 1, 1),
(12347, 'Giáo trình cấp thoát nước bên trong công trìn', 203, 'Nxb Hà Nội', '2006-06-14', 10, '27500', '2013-06-01', '24cm', 'user01', 'Tài liệu tham khảo', 'Kiến thức cơ bản về hệ thống cấp thoát nước, nguyên lý hoạt động, cấu tạo, quy trình thiết kế và các', 0, 1, 1, 1),
(12348, 'dfs', 2000, 'sdfs', '2013-06-03', 10, '150000', '2013-06-09', '14 x 20,5 cm', 'user01', 'sách tham khảo', 'dfggfg', 0, 1, 1, 1),
(12349, 'Giáo trình chính trị', 247, 'NXB Giáo Dục', '2005-06-13', 4, '23000', '2013-06-16', '24cm', 'user01', 'Giáo trình', 'Nêu chủ nghĩa duy vật khoa học và hoạt động thực tiễn của con người. Quan điểm, đường lối chủ trương chính sách của Đảng Cộng sản Việt Nam', 0, 1, 1, 2),
(12350, 'Giáo trình hệ thống mạng máy tính CCNA semest', 443, 'Lao động xã hộ', '2004-06-13', 4, '86000', '2013-06-16', '24cm', 'user01', 'Giáo trình', 'Tái bản lần thứ 1, cập nhật version 3.0.', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lib_booktypes`
--

CREATE TABLE IF NOT EXISTS `lib_booktypes` (
  `bookTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `bookTypeName` varchar(30) NOT NULL,
  `comment` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`bookTypeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Sach tham khao, sach giao trinh,...' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lib_booktypes`
--

INSERT INTO `lib_booktypes` (`bookTypeID`, `bookTypeName`, `comment`) VALUES
(1, 'Giáo trình', NULL),
(2, 'Sách Tham khảo', NULL),
(3, 'Đề tài khoa học', NULL),
(4, 'Luận án', NULL),
(5, 'Báo, Tạp chí', NULL),
(6, 'Tiểu thuyết', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lib_categoryarticle`
--

CREATE TABLE IF NOT EXISTS `lib_categoryarticle` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(50) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `lib_categoryarticle`
--

INSERT INTO `lib_categoryarticle` (`categoryID`, `categoryName`) VALUES
(1, 'Trang chủ'),
(2, 'Giới thiệu'),
(3, 'Tin tức'),
(4, 'Hình ảnh hoạt động'),
(5, 'Hướng dẫn sử dụng'),
(6, 'Tìm kiếm'),
(7, 'Sản Phẩm'),
(8, 'Dịch vụ'),
(9, 'Liên hệ');

-- --------------------------------------------------------

--
-- Table structure for table `lib_ciculationpolicies`
--

CREATE TABLE IF NOT EXISTS `lib_ciculationpolicies` (
  `policyID` varchar(20) NOT NULL,
  `policyName` varchar(45) NOT NULL,
  `amount` varchar(45) NOT NULL,
  `unitOf` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`policyID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lib_ciculationpolicies`
--

INSERT INTO `lib_ciculationpolicies` (`policyID`, `policyName`, `amount`, `unitOf`) VALUES
('SLGH', 'Số lần gia hạn tài liệu tối đa', '1', 'lần'),
('STLM', 'Số tài liệu tối đa mượn', '5', 'cuốn'),
('TGGH', 'Thời gian gia hạn', '90', 'ngày'),
('TGLT', 'Thời gian lưu thông', '365', 'ngày'),
('TGMS', 'Thời gian mượn tài liệu', '90', 'ngày');

-- --------------------------------------------------------

--
-- Table structure for table `lib_ciculations`
--

CREATE TABLE IF NOT EXISTS `lib_ciculations` (
  `ciculationID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'chi tiết mượn trả sách',
  `dateBorrow` date NOT NULL COMMENT 'Ngày mượn',
  `dateReturn` date NOT NULL COMMENT 'Ngày trã',
  `librarianName` varchar(45) NOT NULL COMMENT 'Tên cán bộ thư viện thực hiện hoạt động này',
  `addTime` tinyint(4) NOT NULL,
  `cardBarcode` varchar(30) NOT NULL COMMENT 'Mã bạn đọc mượn',
  `bookID` int(11) NOT NULL COMMENT 'Quyển sách được mượn',
  PRIMARY KEY (`ciculationID`),
  KEY `fk_lib_Ciculations_lib_Readers1_idx` (`cardBarcode`),
  KEY `fk_lib_Ciculations_lib_SerialBooks1_idx` (`bookID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Bảng chi tiết mượn trả sách (Nếu có người mượn thì thêm vào  /* comment truncated */ /*1 record, Nếu trã sách thì xóa record đó)*/' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `lib_ciculations`
--

INSERT INTO `lib_ciculations` (`ciculationID`, `dateBorrow`, `dateReturn`, `librarianName`, `addTime`, `cardBarcode`, `bookID`) VALUES
(4, '2013-01-18', '2013-04-18', 'user01', 0, '331.08.0001', 17),
(5, '2013-05-18', '2014-03-17', 'user01', 0, '331.08.0001', 12),
(6, '2013-05-30', '2014-02-24', 'user01', 0, '331.08.0001', 20),
(7, '2013-06-16', '2013-09-14', 'user01', 0, '331.08.0003', 30);

-- --------------------------------------------------------

--
-- Table structure for table `lib_historyciculations`
--

CREATE TABLE IF NOT EXISTS `lib_historyciculations` (
  `historyCiculationID` int(11) NOT NULL AUTO_INCREMENT,
  `timeSave` date NOT NULL COMMENT 'Thời gian lưu thông',
  `librarianName` varchar(45) NOT NULL COMMENT 'Tên cán bộ thư viện thực hiện hoạt động này',
  `historyCiculationStatus` tinyint(1) NOT NULL COMMENT 'Trạng thái lịch sử lưu thông (0 - Đã trã, 1 - Mới cho mượn)',
  `cardBarcode` varchar(30) NOT NULL COMMENT 'Mã thẻ người mượn',
  `bookID` int(11) NOT NULL COMMENT 'Mã sách mượn',
  PRIMARY KEY (`historyCiculationID`),
  KEY `fk_lib_HistoryCiculations_lib_Readers1_idx` (`cardBarcode`),
  KEY `fk_lib_HistoryCiculations_lib_SerialBooks1_idx` (`bookID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Lịch sử lưu thông của tài liệu (Dùng để thống kê tài liệu mư /* comment truncated */ /*ợn/trã trong quá trình hoạt động của thư viện)*/' AUTO_INCREMENT=14 ;

--
-- Dumping data for table `lib_historyciculations`
--

INSERT INTO `lib_historyciculations` (`historyCiculationID`, `timeSave`, `librarianName`, `historyCiculationStatus`, `cardBarcode`, `bookID`) VALUES
(5, '2013-06-07', 'user01', 0, '331.08.0001', 12),
(9, '2013-06-08', 'user01', 1, '331.08.0001', 12),
(10, '2013-06-08', 'user01', 1, '331.08.0001', 10),
(11, '2013-06-09', 'user01', 0, '331.08.0001', 10),
(12, '2013-06-03', 'user01', 1, '331.08.0001', 20),
(13, '2013-06-16', 'user01', 1, '331.08.0003', 30);

-- --------------------------------------------------------

--
-- Table structure for table `lib_orderonline`
--

CREATE TABLE IF NOT EXISTS `lib_orderonline` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `dateOrder` varchar(45) NOT NULL,
  `orderStatus` tinyint(4) NOT NULL,
  `cardBarcode` varchar(30) NOT NULL,
  `bookID` int(11) NOT NULL,
  PRIMARY KEY (`orderID`),
  KEY `fk_lib_orderOnline_lib_Readers1_idx` (`cardBarcode`),
  KEY `fk_lib_orderOnline_lib_SerialBooks1_idx` (`bookID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lib_orderonline`
--

INSERT INTO `lib_orderonline` (`orderID`, `dateOrder`, `orderStatus`, `cardBarcode`, `bookID`) VALUES
(1, '2013-06-01', 1, '331.08.0001', 21),
(2, '2013-06-01', 0, '331.08.0001', 18),
(3, '2013-06-01', 0, '331.08.0001', 10),
(4, '2013-06-01', 0, '331.08.0001', 11),
(5, '2013-06-01', 0, '331.08.0001', 19),
(6, '2013-06-06', 0, '331.08.0001', 23);

-- --------------------------------------------------------

--
-- Table structure for table `lib_readers`
--

CREATE TABLE IF NOT EXISTS `lib_readers` (
  `cardBarcode` varchar(30) NOT NULL,
  `dateCreated` date NOT NULL COMMENT 'Ngày tạo thẻ bạn đọc',
  `dateExpiry` date NOT NULL COMMENT 'Ngày hết hạn sử dụng',
  `yearLearn` varchar(45) NOT NULL COMMENT 'Khóa học',
  `isActive` tinyint(1) NOT NULL COMMENT 'Tình trạng của thẻ (1 - lưu thông,0 - tạm khóa)',
  `totalBorrow` tinyint(4) NOT NULL,
  `userID` int(11) NOT NULL,
  `classID` int(11) NOT NULL,
  PRIMARY KEY (`cardBarcode`),
  KEY `fk_lib_Reader_lib_User1_idx` (`userID`),
  KEY `fk_lib_Reader_tbl_Class1_idx` (`classID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin về một thẻ bạn đọc';

--
-- Dumping data for table `lib_readers`
--

INSERT INTO `lib_readers` (`cardBarcode`, `dateCreated`, `dateExpiry`, `yearLearn`, `isActive`, `totalBorrow`, `userID`, `classID`) VALUES
('331.08.0001', '2013-05-13', '2014-04-13', '2000 - 2005', 1, 3, 4, 2),
('331.08.0002', '2013-05-16', '2014-05-16', '2008 - 2013', 2, 0, 5, 3),
('331.08.0003', '2013-05-17', '2014-05-17', '2000 - 2005', 1, 1, 6, 1),
('331.08.0004', '2013-05-18', '2014-05-18', '2008 - 2013', 1, 0, 7, 4),
('331.08.0005', '2013-05-18', '2014-05-18', '2008 - 2013', 0, 0, 8, 9),
('331.09.0001', '2013-06-01', '2014-06-01', '2009 - 2014', 1, 0, 9, 3),
('331.12.0001', '2013-06-14', '2014-06-14', '2000 - 2005', 0, 0, 11, 9),
('331.12.0002', '2013-06-14', '2014-06-14', '2012 - 2017', 0, 0, 12, 9),
('331.12.0003', '2013-06-14', '2014-06-14', '2012 - 2017', 0, 0, 13, 5);

-- --------------------------------------------------------

--
-- Table structure for table `lib_roles`
--

CREATE TABLE IF NOT EXISTS `lib_roles` (
  `roleID` int(11) NOT NULL AUTO_INCREMENT,
  `roleName` varchar(20) NOT NULL COMMENT 'Tên phân quyền',
  `description` tinytext COMMENT 'Miêu tả về quyền trong thư viện',
  PRIMARY KEY (`roleID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Bảng phân quyền' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lib_roles`
--

INSERT INTO `lib_roles` (`roleID`, `roleName`, `description`) VALUES
(1, 'admin', 'Quyền cao nhất, quản lý mọi hoạt động của thư viện'),
(2, 'Biên mục', 'Nhập sách vào kho, biên mục tài liệu'),
(3, 'Thủ thư', 'Nhân viên phụ trách mượn trả tài liệu'),
(4, 'Bạn đọc', 'bạn đọc của thư viện');

-- --------------------------------------------------------

--
-- Table structure for table `lib_serialbooks`
--

CREATE TABLE IF NOT EXISTS `lib_serialbooks` (
  `bookID` int(11) NOT NULL AUTO_INCREMENT,
  `bookBarcode` int(11) NOT NULL,
  `serial` int(11) NOT NULL COMMENT 'Số thứ tự cuốn sách',
  `dateCreated` date NOT NULL COMMENT 'Ngày khởi đã khởi tạo',
  `personCreated` varchar(45) NOT NULL COMMENT 'Người khởi tạo',
  `bookStatus` tinyint(1) NOT NULL COMMENT 'Tình trạng cuốn sách cụ thể',
  PRIMARY KEY (`bookID`),
  KEY `fk_lib_SerialBook_lib_BookStore1_idx` (`bookBarcode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Một cuốn sách cụ thể' AUTO_INCREMENT=34 ;

--
-- Dumping data for table `lib_serialbooks`
--

INSERT INTO `lib_serialbooks` (`bookID`, `bookBarcode`, `serial`, `dateCreated`, `personCreated`, `bookStatus`) VALUES
(10, 12345, 1, '2013-05-14', 'user01', 0),
(11, 12345, 2, '2013-05-14', 'user01', 0),
(12, 12345, 3, '2013-05-14', 'user01', 1),
(13, 140, 1, '2013-05-15', 'user01', 0),
(14, 140, 2, '2013-05-15', 'user01', 0),
(15, 140, 3, '2013-05-15', 'user01', 0),
(16, 140, 4, '2013-05-15', 'user01', 0),
(17, 141, 1, '2013-05-16', 'user01', 1),
(18, 141, 2, '2013-05-16', 'user01', 0),
(19, 141, 3, '2013-05-16', 'user01', 0),
(20, 12346, 1, '2013-05-29', 'user01', 1),
(21, 12346, 2, '2013-05-29', 'user01', 0),
(22, 12346, 3, '2013-05-29', 'user01', 0),
(23, 12347, 1, '2013-06-01', 'user01', 0),
(24, 12347, 2, '2013-06-01', 'user01', 0),
(25, 12347, 3, '2013-06-01', 'user01', 0),
(26, 12349, 1, '2013-06-16', 'user01', 0),
(27, 12349, 2, '2013-06-16', 'user01', 0),
(28, 12349, 3, '2013-06-16', 'user01', 0),
(29, 12349, 4, '2013-06-16', 'user01', 0),
(30, 12350, 1, '2013-06-16', 'user01', 1),
(31, 12350, 2, '2013-06-16', 'user01', 0),
(32, 12350, 3, '2013-06-16', 'user01', 0),
(33, 12350, 4, '2013-06-16', 'user01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lib_subcategoryarticle`
--

CREATE TABLE IF NOT EXISTS `lib_subcategoryarticle` (
  `subCategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `subCategoryName` varchar(60) NOT NULL,
  `categoryID` int(11) NOT NULL,
  PRIMARY KEY (`subCategoryID`),
  KEY `fk_lib_subCategoryArticle_lib_categoryArticle1_idx` (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `lib_subcategoryarticle`
--

INSERT INTO `lib_subcategoryarticle` (`subCategoryID`, `subCategoryName`, `categoryID`) VALUES
(1, 'Tin tức', 3),
(2, 'Thông báo', 3),
(3, 'Sứ mệnh, chức nawg và nhiệm vụ', 2),
(4, 'Cơ cấu tổ chức', 2),
(5, 'Tài nguyên và cơ sở vật chất', 2),
(6, 'Nộ quy', 2),
(7, 'Thư viện điện tử', 4),
(8, 'Thư viện truyền thống', 4),
(9, 'Thư viện điện tử', 5),
(10, 'Thư viện truyền thống', 5);

-- --------------------------------------------------------

--
-- Table structure for table `lib_users`
--

CREATE TABLE IF NOT EXISTS `lib_users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `roleID` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL COMMENT 'Có thể một tên bất kỳ hoặc là mã sinh viên và  không được trùng',
  `password` varchar(30) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `sex` tinyint(4) NOT NULL COMMENT 'Giới tính',
  `birthday` date NOT NULL COMMENT 'Ngày sinh',
  `email` varchar(50) DEFAULT NULL,
  `phoneNumber` int(11) DEFAULT NULL COMMENT 'Số đt liên hệ',
  `residentAddress` varchar(30) DEFAULT NULL COMMENT 'Nơi ở (Địa chỉ)',
  `nativePlace` varchar(30) DEFAULT NULL COMMENT 'Quê quán',
  `profilePhoto` varchar(45) DEFAULT NULL COMMENT 'lưu dạng url',
  `description` tinytext,
  PRIMARY KEY (`userID`),
  KEY `fk_lib_User_lib_Role_idx` (`roleID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin về người dùng liên quan đến thư viện và hệ thố /* comment truncated */ /*ng*/' AUTO_INCREMENT=14 ;

--
-- Dumping data for table `lib_users`
--

INSERT INTO `lib_users` (`userID`, `roleID`, `userName`, `password`, `fullName`, `lastName`, `sex`, `birthday`, `email`, `phoneNumber`, `residentAddress`, `nativePlace`, `profilePhoto`, `description`) VALUES
(1, 1, 'user01', 'user01', 'user', '01', 1, '0000-00-00', 'trandinhnam08t4@gmail.com', 0, 'user01', 'Quảng Bình', '/img/profilePhotos/user01.JPG', ''),
(3, 3, 'user03', '1234566', 'user', '03', 1, '0000-00-00', '', 1245678123, 'user01', '', NULL, ''),
(4, 4, '331.08.0001', '331.08.0001', 'Dương Văn sơn', NULL, 1, '1990-04-08', 'vansonbk08@gmail.com', 123456789, 'KTX - ĐHBK', 'Hà Tĩnh', '/img/profilePhotos/331080001.JPG', NULL),
(5, 4, '331.08.0002', '331.08.0002', 'Dương Văn Sơn', NULL, 1, '1989-06-06', 'tienlam214@gmail.com', 0, '123 Phạm Như Sương', 'Quảng Nam', '/img/profilePhotos/331080002.JPG', NULL),
(6, 4, '331.08.0003', '331.08.0003', 'Nguyễn Trường Thuật', NULL, 1, '0000-00-00', 'thuatnt2@gmail.com', 1642906837, 'KTX - ĐHBK', 'Quảng Bình', '/img/profilePhotos/.jpg', ''),
(7, 4, '331.08.0004', '331.08.0004', 'Nguyễn Bá Huynh', NULL, 1, '2007-05-04', 'hoangphuong23122000@', 1689955354, 'KTX - ĐHBK', 'Quảng Ngãi', '/img/profilePhotos/331080004.jpg', NULL),
(8, 4, '331.08.0005', '331.08.0005', 'Nguyễn Văn Cường', NULL, 1, '1990-06-09', '', 0, 'KTX - ĐHBK', 'Hà Tĩnh', '/img/profilePhotos/331080005.JPG', NULL),
(9, 4, '331.09.0001', '331.09.0001', 'Nguyễn Văn Dung', NULL, 1, '2008-06-05', '', 0, '123 Phạm Như Sương', 'Quảng Bình', '/img/profilePhotos/331090001.JPG', NULL),
(10, 2, 'cuongcc', '12345', 'Nguyễn Văn Cường', NULL, 1, '2009-03-02', 'thuatnt2@gmail.com', 1234567890, 'KTX - ĐHBK', 'Đà Nẵng', '/img/profilePhotos/cuongcc.JPG', NULL),
(11, 4, '331.12.0001', '331.12.0001', 'Lê Thị Hương abc', NULL, 1, '0000-00-00', 'huong@gmail.com', 1234567890, 'KTX-ĐHBK', 'Nghệ An', NULL, ''),
(12, 4, '331.12.0002', 'user01', 'Nguyễn Thị Bích', NULL, 2, '2010-01-05', 'bich@gmail.com', 1642903837, 'KTX-ĐHBK', 'Nghệ An', NULL, NULL),
(13, 4, '331.12.0003', '331.12.0003', 'Nguyễn Tấn Long', NULL, 1, '0000-00-00', 'long@gmail.com', 1642903837, 'KTX-ĐHBK', 'Nghệ An', '/img/profilePhotos/.JPG', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE IF NOT EXISTS `tbl_class` (
  `classID` int(11) NOT NULL AUTO_INCREMENT,
  `className` varchar(45) NOT NULL COMMENT 'Tên lớp',
  `description` tinytext,
  `facultyID` int(11) NOT NULL,
  PRIMARY KEY (`classID`),
  KEY `fk_tbl_Class_tbl_Faculty1_idx` (`facultyID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`classID`, `className`, `description`, `facultyID`) VALUES
(1, '08T1', NULL, 1),
(2, '08T2', NULL, 1),
(3, '08T3', NULL, 1),
(4, '08T4', NULL, 1),
(5, '08ĐT1', NULL, 2),
(6, '08ĐT2', NULL, 2),
(7, '08ĐT3', NULL, 2),
(8, '08ĐT4', NULL, 2),
(9, '08MT1', NULL, 6),
(10, '08MT2', NULL, 6),
(11, '08X3B', NULL, 4),
(12, '08X3C', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculties`
--

CREATE TABLE IF NOT EXISTS `tbl_faculties` (
  `facultyID` int(11) NOT NULL AUTO_INCREMENT,
  `facultyName` varchar(20) NOT NULL COMMENT 'Tên khoa',
  `description` tinytext,
  PRIMARY KEY (`facultyID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_faculties`
--

INSERT INTO `tbl_faculties` (`facultyID`, `facultyName`, `description`) VALUES
(1, 'CNTT', 'Khoa công nghệ thông tin'),
(2, 'DTVT', 'Khoa điện tử viễn thông'),
(3, 'XDDD', 'Khoa xây dựn dân dụng'),
(4, 'XDCĐ', 'Khoa xây dựng cầu đường'),
(5, 'TLTĐ', 'Khoa thủy lợi thủy điện'),
(6, 'MT', 'Khoa môi trường');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lib_articles`
--
ALTER TABLE `lib_articles`
  ADD CONSTRAINT `fk_lib_articles_lib_subCategoryArticle1` FOREIGN KEY (`subCategoryID`) REFERENCES `lib_subcategoryarticle` (`subCategoryID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lib_subcategoryarticle`
--
ALTER TABLE `lib_subcategoryarticle`
  ADD CONSTRAINT `fk_lib_subCategoryArticle_lib_categoryArticle1` FOREIGN KEY (`categoryID`) REFERENCES `lib_categoryarticle` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
