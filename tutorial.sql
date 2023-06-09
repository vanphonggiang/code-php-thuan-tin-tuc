-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 04:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `des` text DEFAULT NULL,
  `menu` text DEFAULT NULL,
  `tin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `title`, `des`, `menu`, `tin`) VALUES
(1, 'Code thuần PHP', 'Lập trình PHP web tin tức bằng code thuần', '{\"php\":{\"id\":\"1\",\"ten\":\"PHP\",\"slug\":\"php\",\"des\":\"L\\u1eadp tr\\u00ecnh PHP\",\"hinh\":\"php.jpg\"},\"html\":{\"id\":\"2\",\"ten\":\"HTML\",\"slug\":\"html\",\"des\":\"HTML l\\u00e0 si\\u00eau d\\u1eef li\\u1ec7u v\\u0103n b\\u1ea3n t\\u1eeb code thu\\u1ea7n PHP cung c\\u1ea5p\",\"hinh\":\"html.jpg\"},\"css\":{\"id\":\"3\",\"ten\":\"CSS\",\"slug\":\"css\",\"des\":\"CSS\",\"hinh\":\"css.jpg\"},\"jquery\":{\"id\":\"4\",\"ten\":\"jQuery\",\"slug\":\"jquery\",\"des\":\"Th\\u01b0 vi\\u1ec7n jQuery javascript\",\"hinh\":\"jquery.jpg\"},\"android\":{\"id\":\"6\",\"ten\":\"Android\",\"slug\":\"android\",\"des\":\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh Android\",\"hinh\":\"android.jpg\"}}', '[{\"slug\":\"he-dieu-hanh-moi-android\",\"hinh\":\"android-1.jpg\",\"ten\":\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh m\\u1edbi Android \",\"des\":\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh m\\u1edbi Android\"},{\"slug\":\"tin-1\",\"hinh\":\"tin-1.jpg\",\"ten\":\"Tin 1 update final\",\"des\":\"dsds\"},{\"slug\":\"lo-hong-bao-mat-ngon-ngu-lap-trinh-php\",\"hinh\":\"lo-hong-bao-mat-ngon-ngu-lap-trinh-php.jpg\",\"ten\":\"L\\u1ed7 h\\u1ed5ng b\\u1ea3o m\\u1eadt ng\\u00f4n ng\\u1eef l\\u1eadp tr\\u00ecnh PHP\",\"des\":\"Th\\u01b0\\u1eddng xuy\\u00ean c\\u1eadp nh\\u1eadt phi\\u00ean b\\u1ea3n PHP m\\u1edbi nh\\u1ea5t v\\u00e0 c\\u00e1c th\\u01b0 vi\\u1ec7n c\\u1ee7a n\\u00f3 \\u0111\\u1ec3 gi\\u1ea3m thi\\u1ec3u c\\u00e1c l\\u1ed7 h\\u1ed5ng b\\u1ea3o m\\u1eadt c\\u00f3 th\\u1ec3 x\\u1ea3y ra khi x\\u00e2y d\\u1ef1ng website b\\u1eb1ng ng\\u00f4n ng\\u1eef PHP\"},{\"slug\":\"quy-trinh-phat-trien-website-bang-ngon-ngu-php\",\"hinh\":\"quy-trinh-phat-trien-website-bang-ngon-ngu-php.jpg\",\"ten\":\"Quy tr\\u00ecnh ph\\u00e1t tri\\u1ec3n website b\\u1eb1ng ng\\u00f4n ng\\u1eef PHP\",\"des\":\"PHP l\\u00e0 m\\u1ed9t ng\\u00f4n ng\\u1eef l\\u1eadp tr\\u00ecnh ph\\u00eda Server d\\u00f9ng \\u0111\\u1ec3 x\\u00e2y d\\u1ef1ng c\\u00e1c \\u1ee9ng d\\u1ee5ng Website. \\u0110i\\u1ec3m m\\u1ea1nh c\\u1ee7a PHP l\\u00e0 t\\u00ednh c\\u1ed9ng \\u0111\\u1ed3ng c\\u1ee7a n\\u00f3 cao\"},{\"slug\":\"the-moi-trong-html5\",\"hinh\":\"the-moi-trong-html5.jpg\",\"ten\":\"Th\\u1ebb m\\u1edbi trong HTML5\",\"des\":\"HTML5 gi\\u00fap media v\\u00e0 vector tr\\u00ean website \\u0111\\u01b0\\u1ee3c x\\u1eed l\\u00fd v\\u00e0 th\\u1ef1c hi\\u1ec7n d\\u1ec5 d\\u00e0ng h\\u01a1n, nhanh h\\u01a1n m\\u00e0 ko c\\u1ea7n ph\\u1ea3i b\\u1ed5 sung b\\u1ea5t k\\u00ec ph\\u1ea7n m\\u1ec1m li\\u00ean quan ho\\u1eb7c th\\u01b0 vi\\u1ec7n API n\\u00e0o kh\\u00e1c\"},{\"slug\":\"chinh-sach-quy-dinh-chung\",\"hinh\":\"chinh-sach-quy-dinh-chung.jpg\",\"ten\":\"Ch\\u00ednh s\\u00e1ch quy \\u0111\\u1ecbnh chung\",\"des\":\"Quy \\u0111\\u1ecbnh v\\u1ec1 s\\u1eed d\\u1ee5ng t\\u00e0i kho\\u1ea3n, t\\u00e0i nguy\\u00ean t\\u1ea1i website codethuan.com\"},{\"slug\":\"dieu-khoan-su-dung-website-code-thuan\",\"hinh\":\"dieu-khoan-su-dung-website-code-thuan.jpg\",\"ten\":\"\\u0110i\\u1ec1u kho\\u1ea3n s\\u1eed d\\u1ee5ng website Code Thu\\u1ea7n\",\"des\":\"\\u0110i\\u1ec1u kho\\u1ea3n s\\u1eed d\\u1ee5ng tr\\u00ean website codethuan.com g\\u1ed3m chia s\\u1ebb b\\u00e0i vi\\u1ebft, b\\u00ecnh lu\\u1eadn\"},{\"slug\":\"chinh-sach-bao-mat-thong-tin\",\"hinh\":\"chinh-sach-bao-mat-thong-tin.jpg\",\"ten\":\"Ch\\u00ednh s\\u00e1ch b\\u1ea3o m\\u1eadt th\\u00f4ng tin\",\"des\":\"Quy \\u0111\\u1ecbnh v\\u1ec1 vi\\u1ec7c s\\u1eed d\\u1ee5ng th\\u00f4ng tin, l\\u01b0u tr\\u1eef th\\u00f4ng tin t\\u1ea1i website codethuan.com\"},{\"slug\":\"su-khac-biet-html-va-html5\",\"hinh\":\"su-khac-biet-html-va-html5.jpg\",\"ten\":\"S\\u1ef1 kh\\u00e1c bi\\u1ec7t HTML v\\u00e0 HTML5\",\"des\":\"HTML5 l\\u00e0 m\\u1ed9t ng\\u00f4n ng\\u1eef l\\u1eadp tr\\u00ecnh \\u0111\\u01b0\\u1ee3c ph\\u00e1t tri\\u1ec3n tr\\u00ean n\\u1ec1n t\\u1ea3ng ng\\u00f4n ng\\u1eef HTML v\\u00e0 quan tr\\u1ecdng nh\\u1ea5t c\\u1ee7a World Wide Web. N\\u00f3 \\u0111\\u01b0\\u1ee3c s\\u1eed d\\u1ee5ng \\u0111\\u1ec3 thi\\u1ebft k\\u1ebf v\\u00e0 c\\u1ea5u tr\\u00fac c\\u00e1c website, h\\u1ed7 tr\\u1ee3 cho \\u0111a ph\\u01b0\\u01a1ng ti\\u1ec7n t\\u1ed1i \\u0111a nh\\u01b0ng v\\u1eabn gi\\u00fap cho website th\\u00e2n thi\\u1ec7n v\\u1edbi m\\u1ecdi ng\\u01b0\\u1eddi d\\u00f9ng v\\u00e0 m\\u1ecdi thi\\u1ebft b\\u1ecb, c\\u00e1c ch\\u01b0\\u01a1ng tr\\u00ecnh m\\u00e1y t\\u00ednh, tr\\u00ecnh duy\\u1ec7t web\"},{\"slug\":\"danh-sach-dien-thoai-redmi-update-android-13\",\"hinh\":\"danh-sach-dien-thoai-redmi-update-android-13.jpg\",\"ten\":\"Danh s\\u00e1ch \\u0111i\\u1ec7n tho\\u1ea1i Redmi update Android 13\",\"des\":\"Ng\\u01b0\\u1eddi ta cho r\\u1eb1ng Redmi Note 8 2021 s\\u1ebd kh\\u00f4ng nh\\u1eadn \\u0111\\u01b0\\u1ee3c b\\u1ea3n c\\u1eadp nh\\u1eadt Android 13. Tuy nhi\\u00ean, Android 13 \\u0111\\u00e3 b\\u1eaft \\u0111\\u1ea7u \\u0111\\u01b0\\u1ee3c th\\u1eed nghi\\u1ec7m n\\u1ed9i b\\u1ed9 tr\\u00ean model n\\u00e0y\"},{\"slug\":\"gioi-thieu-code-thuan\",\"hinh\":\"gioi-thieu-code-thuan.jpg\",\"ten\":\"Gi\\u1edbi thi\\u1ec7u Code Thu\\u1ea7n\",\"des\":\"Code Thu\\u1ea7n website chia s\\u1ebb kinh nghi\\u1ec7m l\\u1eadp tr\\u00ecnh web PHP\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `ten` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `des` text DEFAULT NULL,
  `hinh` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `ten`, `slug`, `des`, `hinh`) VALUES
(1, 'PHP', 'php', 'Lập trình PHP', 'php.jpg'),
(2, 'HTML', 'html', 'HTML là siêu dữ liệu văn bản từ code thuần PHP cung cấp', 'html.jpg'),
(3, 'CSS', 'css', 'CSS', 'css.jpg'),
(4, 'jQuery', 'jquery', 'Thư viện jQuery javascript', 'jquery.jpg'),
(6, 'Android', 'android', 'Hệ điều hành Android', 'android.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nhom`
--

CREATE TABLE `nhom` (
  `id` int(11) NOT NULL,
  `ten` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhom`
--

INSERT INTO `nhom` (`id`, `ten`) VALUES
(1, 'Amin'),
(2, 'Khách'),
(3, 'Super admin'),
(4, 'Kế toán toan'),
(5, 'Nhân sự');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `ten` text DEFAULT NULL,
  `ma` text DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `qr` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `ma`, `gia`, `qr`) VALUES
(1, 'a', 'a', 10000, 'a.png'),
(2, 'b', 'b', 3, 'b.png'),
(3, 'd', 'd', 3, 'd.png'),
(4, 'f', 'f', 45, 'f.png'),
(5, 'codethuan', 'codethuan', 10, 'codethuan.png');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `nhom` int(11) NOT NULL,
  `fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `user`, `pass`, `nhom`, `fullname`) VALUES
(1, 'codethuan', 'c4ca4238a0b923820dcc509a6f75849b', 1, 'Code Thuần'),
(2, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tin`
--

CREATE TABLE `tin` (
  `id` int(11) NOT NULL,
  `ten` text DEFAULT NULL,
  `hinh` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `menu` int(11) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `noidung` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tin`
--

INSERT INTO `tin` (`id`, `ten`, `hinh`, `slug`, `menu`, `des`, `noidung`) VALUES
(1, 'Giới thiệu Code Thuần', 'gioi-thieu-code-thuan.jpg', 'gioi-thieu-code-thuan', 3, 'Code Thuần website chia sẻ kinh nghiệm lập trình web PHP', '<p><strong>Code Thuần</strong>&nbsp;website&nbsp;chia sẻ tin tức, cẩm nang, tin c&ocirc;ng nghệ, thiết kế website. Rất mong c&aacute;c bạn sẽ ủng hộ ch&uacute;ng t&ocirc;i để c&oacute; một k&ecirc;nh th&ocirc;ng tin hữu &iacute;ch.</p>\r\n\r\n<p><img alt=\"Code Thuần website chia sẻ kinh nghiệm, thủ thuật\" src=\"/uploads/images/about/info.jpg\" style=\"height:429px; width:700px\" /></p>\r\n\r\n<p>Trang web do <strong>Code Thuần</strong>&nbsp;ph&aacute;t triển x&acirc;y dựng&nbsp;chuy&ecirc;n đề theo từng chuy&ecirc;n mục. C&oacute; nhiều b&agrave;i viết v&agrave; tại c&aacute;c b&agrave;i viết n&agrave;y ch&uacute;ng ta c&oacute; phần b&igrave;nh luận. B&igrave;nh luận&nbsp;cũng phải theo quy định của <strong>Code Thuần</strong>&nbsp;đề ra đ&uacute;ng kh&ocirc;ng c&aacute;c bạn. Lu&ocirc;n sống v&agrave; học tập theo quy định của nh&agrave; nước v&agrave; ph&aacute;p luật <strong>Việt Nam</strong>.</p>\r\n\r\n<p>Ngo&agrave;i k&ecirc;nh th&ocirc;ng tin từ website, trong thời gian tới <strong>Code Thuần</strong>&nbsp;hướng đến k&ecirc;nh <strong>Youtube</strong> để c&oacute; những video hữu &iacute;ch.</p>\r\n\r\n<p>V&igrave; một cộng đồng <strong>Việt Nam</strong>&nbsp;ph&aacute;t triển rất mong nhận được sự ủng hộ của c&aacute;c bạn lập tr&igrave;nh vi&ecirc;n, c&aacute;c độc giả tr&ecirc;n mọi miền đất nước. C&ugrave;ng nhau học tập, c&ugrave;ng nhau trao đổi v&agrave; c&ugrave;ng nhau ph&aacute;t triển!</p>\r\n'),
(2, 'Danh sách điện thoại Redmi update Android 13', 'danh-sach-dien-thoai-redmi-update-android-13.jpg', 'danh-sach-dien-thoai-redmi-update-android-13', 2, 'Người ta cho rằng Redmi Note 8 2021 sẽ không nhận được bản cập nhật Android 13. Tuy nhiên, Android 13 đã bắt đầu được thử nghiệm nội bộ trên model này', '<h2>Danh s&aacute;ch thiết bị Redmi l&ecirc;n Android 13</h2>\r\n\r\n<ul>\r\n	<li>Redmi Note 8 2021</li>\r\n	<li>Redmi Note 11 5G / Note 11T 5G</li>\r\n	<li>Redmi Note 10 5G / Note 11SE / Note 10T 5G</li>\r\n	<li>Redmi Note 11S 4G</li>\r\n	<li>Redmi Note 11E / Note 11R / 10 5G / 11 Prime 5G</li>\r\n	<li>Redmi Note 11S 5G</li>\r\n	<li>Redmi Note 11 Pro / Note 11 Pro+ / Note 11 Pro+ 5G</li>\r\n	<li>Redmi Note 10S / Note 11 SE India</li>\r\n	<li>Redmi 10 / 10 2022 / 10 Prime / Note 11 4G</li>\r\n	<li>Redmi Note 11 / 11 NFC</li>\r\n	<li>Redmi Note 11E Pro / Redmi Note 11 Pro 5G</li>\r\n	<li>Redmi Note 11 Pro 4G</li>\r\n	<li>Redmi Note 11T Pro / Pro+</li>\r\n	<li>Redmi 10C / Redmi 10 India</li>\r\n	<li>Redmi Note 10 Pro 5G</li>\r\n	<li>Redmi Note 10T</li>\r\n	<li>Redmi Note 10 Pro / Note 10 Pro Max</li>\r\n	<li>Redmi 11 Prime 4G</li>\r\n	<li>Redmi 12C</li>\r\n	<li>Redmi Note 12 5G</li>\r\n	<li>Redmi Note 12 Pro / Redmi Note 12 Pro+ / Redmi Note 12 Discovery / Redmi Note 12 YIBO Edition</li>\r\n	<li>Redmi Note 12 Pro Speed Edition</li>\r\n	<li>Redmi K40 / K40 Pro / K40 Pro+ / K40 Gaming / K40S</li>\r\n	<li>Redmi K50/ K50 Pro/ K50 Gaming/ K50i / K50i Pro / Redmi K50 Ultra</li>\r\n	<li>Redmi K60 / K60 Pro / K60E</li>\r\n</ul>\r\n'),
(3, 'Sự khác biệt HTML và HTML5', 'su-khac-biet-html-va-html5.jpg', 'su-khac-biet-html-va-html5', 1, 'HTML5 là một ngôn ngữ lập trình được phát triển trên nền tảng ngôn ngữ HTML và quan trọng nhất của World Wide Web. Nó được sử dụng để thiết kế và cấu trúc các website, hỗ trợ cho đa phương tiện tối đa nhưng vẫn giúp cho website thân thiện với mọi người dùng và mọi thiết bị, các chương trình máy tính, trình duyệt web', '<h2>HTML v&agrave; HTM5</h2>\r\n\r\n<p>HTML5 hỗ trợ cho nhiều ứng dụng hơn: Một số ứng dụng như SVG, canvas&hellip; được&nbsp;HTML5&nbsp;hỗ trợ, nhưng d&ugrave;ng trong HTML th&igrave; phải sử dụng th&ecirc;m c&aacute;c phương tiện bổ trợ.</p>\r\n\r\n<p>Lưu dữ liệu tạm:&nbsp;HTML5&nbsp;sử dụng web&nbsp;SQL databases,&nbsp;application cache&nbsp;c&ograve;n HTML chỉ d&ugrave;ng cache của tr&igrave;nh duyệt.</p>\r\n\r\n<p>JavaScript chạy trong web browser:&nbsp;HTML5&nbsp;hỗ trợ ho&agrave;n to&agrave;n cho JavaScript chạy tr&ecirc;n web browser, c&ograve;n HTML ở c&aacute;c phi&ecirc;n bản cũ hơn th&igrave; kh&ocirc;ng thể thực hiện được.</p>\r\n\r\n<p>SGML: Kh&aacute;c với HTML,&nbsp;HTML5&nbsp;kh&ocirc;ng dựa tr&ecirc;n SGML, nhờ vậy, sản phẩm lập tr&igrave;nh c&oacute; độ tương th&iacute;ch cao hơn.</p>\r\n\r\n<p>Sử dụng MathML v&agrave; SVG:&nbsp;HTML5&nbsp;cho ph&eacute;p sử dụng MathML v&agrave; SVG cho văn bản, nhưng trong HTML th&igrave; kh&ocirc;ng được hỗ trợ.</p>\r\n\r\n<p>C&aacute;c element:&nbsp;HTML5&nbsp;t&iacute;ch hợp c&aacute;c element mới mẻ v&agrave; quan trọng như summary, time, aside, audio, command, data, datalist, details, embed, wbr, figcaption, figure,&nbsp;footer, header, article, hgroup, bdi, canvas, keygen, mark, meter, nav, output, progress, rp, rt, ruby, section, source, track, video&hellip; B&ecirc;n cạnh đ&oacute;, n&oacute; cũng được loại bỏ c&aacute;c elements lỗi thời trong HTML như isindex, noframes, acronym, applet, basefont, dir, font, frame, frameset, big, center, strike&hellip;.</p>\r\n'),
(4, 'Chính sách bảo mật thông tin', 'chinh-sach-bao-mat-thong-tin.jpg', 'chinh-sach-bao-mat-thong-tin', 0, 'Quy định về việc sử dụng thông tin, lưu trữ thông tin tại website codethuan.com', '<h2>Thu thập th&ocirc;ng tin c&aacute; nh&acirc;n</h2>\r\n\r\n<p>- Nhằm minh bạch th&ocirc;ng tin trong b&igrave;nh luận, li&ecirc;n hệ, trao đổi th&ocirc;ng tin, bạn sẽ được y&ecirc;u cầu để lại c&aacute;c th&ocirc;ng tin tại trang&nbsp;<a href=\"https://codethuan.com/dang-ky-tai-khoan\">đăng k&yacute; t&agrave;i khoản</a>.</p>\r\n\r\n<p>- C&aacute;c th&ocirc;ng tin sử dụng tại form đăng k&yacute; th&agrave;nh vi&ecirc;n bao gồm t&ecirc;n, email, mật khẩu đăng nhập t&agrave;i khoản chỉ &aacute;p dụng cho t&agrave;i khoản tr&ecirc;n trang web&nbsp;<a href=\"https://codethuan.com\">codethuan.com</a></p>\r\n\r\n<p>- Mật khẩu ho&agrave;n to&agrave;n được m&atilde; ho&aacute; để đảm bảo t&iacute;nh ri&ecirc;ng tư của người d&ugrave;ng.</p>\r\n\r\n<p>- Ngo&agrave;i c&aacute;c th&ocirc;ng tin tại form đăng k&yacute; th&agrave;nh vi&ecirc;n. Ch&uacute;ng t&ocirc;i sử dụng trang&nbsp;<a href=\"https://codethuan.com/lien-he\">li&ecirc;n hệ</a>&nbsp;để tiếp nhận li&ecirc;n hệ nếu c&oacute; bất kỳ c&acirc;u hỏi li&ecirc;n quan đến nội dung trang web.</p>\r\n\r\n<p>- Kh&ocirc;ng sử dụng bất kỳ tool hay phần mềm b&ecirc;n thứ ba để thu thập th&ocirc;ng tin người d&ugrave;ng.</p>\r\n\r\n<p>- Tuyệt đối kh&ocirc;ng lưu trữ dữ liệu h&agrave;nh vi người d&ugrave;ng v&agrave;o website.</p>\r\n\r\n<p>- Kh&ocirc;ng ph&acirc;n t&iacute;ch h&agrave;nh vi người d&ugrave;ng tr&ecirc;n trang web.</p>\r\n'),
(5, 'Điều khoản sử dụng website Code Thuần', 'dieu-khoan-su-dung-website-code-thuan.jpg', 'dieu-khoan-su-dung-website-code-thuan', 0, 'Điều khoản sử dụng trên website codethuan.com gồm chia sẻ bài viết, bình luận', '<h2>Nội dung b&agrave;i viết</h2>\r\n\r\n<p>- Nội dung kh&ocirc;ng sử dụng h&igrave;nh ảnh phản cảm, kh&ocirc;ng g&acirc;y k&iacute;ch động, ph&ugrave; hợp với văn h&oacute;a v&agrave; truyền thống của Việt Nam.</p>\r\n\r\n<p>- C&aacute;c b&agrave;i viết được t&aacute;c giả bi&ecirc;n soạn, tổng hợp, nội dung ph&ugrave; hợp với từng chủ đề.</p>\r\n\r\n<p>- Nếu bạn cảm thấy b&agrave;i viết tr&ecirc;n&nbsp;<a href=\"https://codethuan.com\">Code Thuần</a>&nbsp;hay v&agrave; hữu &iacute;ch th&igrave; h&atilde;y chia sẻ để mọi người c&ugrave;ng biết.</p>\r\n\r\n<p>- Chia sẻ l&agrave; để mọi người c&ugrave;ng biết đồng thời sẽ gi&uacute;p kh&iacute;ch lệ c&aacute;c t&aacute;c giả tạo ra c&aacute;c nội dung hấp dẫn hơn để gửi tới độc giả.</p>\r\n\r\n<h2>Kh&ocirc;ng copy b&agrave;i</h2>\r\n\r\n<p>- B&agrave;i viết đăng tr&ecirc;n website <strong>Code Thuần</strong>&nbsp;sẽ ghi r&otilde; nguồn</p>\r\n\r\n<p>- Đối với h&igrave;nh ảnh th&igrave; ch&uacute;ng t&ocirc;i sử dụng internet v&igrave; đ&oacute; l&agrave; kho t&agrave;i nguy&ecirc;n miễn ph&iacute;. Với h&igrave;nh ảnh c&oacute; bản quyền ch&uacute;ng t&ocirc;i sẽ xin ph&eacute;p t&aacute;c giả của h&igrave;nh ảnh để được sử dụng.</p>\r\n\r\n<p>- Trong trường hợp b&agrave;i viết c&oacute; h&igrave;nh ảnh kh&ocirc;ng ph&ugrave; hợp xin h&atilde;y gửi b&aacute;o c&aacute;o để ch&uacute;ng t&ocirc;i update lại th&ocirc;ng tin h&igrave;nh ảnh nh&eacute;.</p>\r\n'),
(6, 'Chính sách quy định chung', 'chinh-sach-quy-dinh-chung.jpg', 'chinh-sach-quy-dinh-chung', 0, 'Quy định về sử dụng tài khoản, tài nguyên tại website codethuan.com', '<h2>Đặt t&ecirc;n t&agrave;i khoản</h2>\r\n\r\n<p>- Kh&ocirc;ng sử dụng c&aacute;c t&ecirc;n mang t&iacute;nh chất thiếu văn h&oacute;a l&agrave;m ảnh hưởng đến thuần phong mỹ tục</p>\r\n\r\n<p>- T&agrave;i khoản vi phạm quy định đặt t&ecirc;n c&oacute; thể bị x&oacute;a m&agrave; kh&ocirc;ng cần th&ocirc;ng b&aacute;o đến chủ t&agrave;i khoản</p>\r\n\r\n<h2>B&igrave;nh luận l&agrave; chia sẻ</h2>\r\n\r\n<p>- B&igrave;nh luận một c&aacute;ch lịch sự v&agrave; t&ocirc;n trọng mọi người.</p>\r\n\r\n<p>- Tất cả những b&igrave;nh luận sẽ được public ngay lập tức nhưng admin sẽ lu&ocirc;n theo d&otilde;i v&agrave; kiểm duyệt.</p>\r\n\r\n<p>- X&oacute;a b&igrave;nh luận với những b&igrave;nh luận kh&ocirc;ng ph&ugrave; hợp với thuần phong mỹ tục, g&acirc;y k&iacute;ch động, x&uacute;c phạm người kh&aacute;c, nội dung phản cảm...</p>\r\n\r\n<p>- H&atilde;y coi b&igrave;nh luận l&agrave; những g&oacute;p &yacute; đ&oacute;ng g&oacute;p để gi&uacute;p mọi người hiểu hơn về bạn, c&oacute; c&aacute;i nh&igrave;n về bạn tốt hơn.</p>\r\n'),
(7, 'Thẻ mới trong HTML5', 'the-moi-trong-html5.jpg', 'the-moi-trong-html5', 1, 'HTML5 giúp media và vector trên website được xử lý và thực hiện dễ dàng hơn, nhanh hơn mà ko cần phải bổ sung bất kì phần mềm liên quan hoặc thư viện API nào khác', '<h2>Thẻ mới HTML5</h2>\r\n\r\n<p>&lt; article &gt; thẻ n&agrave;y định nghĩa một b&agrave;i viết hoặc b&igrave;nh luận của người d&ugrave;ng. N&oacute; độc lập với content của website.</p>\r\n\r\n<p>&lt; aside &gt; thẻ n&agrave;y đ&aacute;nh dấu nội dung b&ecirc;n cạnh của trang hiện tại. V&iacute; dụ như một slidebar.</p>\r\n\r\n<p>&lt; header &gt;&lt; footer &gt; hai thẻ n&agrave;y gi&uacute;p bạn kh&ocirc;ng cần định nghĩa id cho ti&ecirc;u đề v&agrave; cuối trang.</p>\r\n\r\n<p>&lt; nav &gt; thẻ n&agrave;y định nghĩa phần menu điều hướng cho website.</p>\r\n\r\n<p>&lt; section &gt; đ&acirc;y l&agrave; một thẻ quan trọng, n&oacute; gi&uacute;p bạn x&aacute;c định c&aacute;c th&agrave;nh phần kh&aacute;c nhau trong website. Bạn c&oacute; thể gộp chung c&aacute;c div c&ugrave;ng nội dung v&agrave;o trong thẻ n&agrave;y để dễ d&agrave;ng quản l&yacute;.</p>\r\n\r\n<p>&lt; audio &gt;&lt; video &gt; hai thẻ n&agrave;y gi&uacute;p bạn hiển thị một đoạn phim hoặc một b&agrave;i h&aacute;t tr&ecirc;n website đơn giản hơn rất nhiều.</p>\r\n\r\n<p>&lt; embed &gt; thẻ n&agrave;y x&aacute;c định một container c&aacute;c plugin tương t&aacute;c với ứng dụng b&ecirc;n ngo&agrave;i.</p>\r\n\r\n<p>&lt; canvas &gt; thẻ th&uacute; vị n&agrave;y cho ph&eacute;p bạn vẽ đồ họa m&agrave; kh&ocirc;ng cần phải qua bất k&igrave; đoạn m&atilde; hỗ trợ n&agrave;o (chủ yếu l&agrave; javascript).</p>\r\n'),
(8, 'Quy trình phát triển website bằng ngôn ngữ PHP', 'quy-trinh-phat-trien-website-bang-ngon-ngu-php.jpg', 'quy-trinh-phat-trien-website-bang-ngon-ngu-php', 1, 'PHP là một ngôn ngữ lập trình phía Server dùng để xây dựng các ứng dụng Website. Điểm mạnh của PHP là tính cộng đồng của nó cao', '<h2>I. Giới thiệu về PHP</h2>\r\n\r\n<p>A. Lịch sử ph&aacute;t triển</p>\r\n\r\n<p>B. Ưu điểm v&agrave; nhược điểm</p>\r\n\r\n<p>C. C&agrave;i đặt PHP</p>\r\n\r\n<h2>II. C&uacute; ph&aacute;p cơ bản của PHP</h2>\r\n\r\n<p>A. Biến v&agrave; kiểu dữ liệu</p>\r\n\r\n<p>B. C&aacute;c to&aacute;n tử</p>\r\n\r\n<p>C. C&aacute;c c&acirc;u lệnh điều kiện v&agrave; v&ograve;ng lặp</p>\r\n\r\n<h2>III. X&acirc;y dựng website động với PHP</h2>\r\n\r\n<p>A. Cơ bản về HTML v&agrave; CSS</p>\r\n\r\n<p>B. Tạo trang đăng nhập v&agrave; đăng k&yacute;</p>\r\n\r\n<p>C. Quản l&yacute; người d&ugrave;ng</p>\r\n\r\n<p>D. Truy vấn cơ sở dữ liệu</p>\r\n\r\n<p>E. Hiển thị dữ liệu tr&ecirc;n trang web</p>\r\n\r\n<p>F. Tạo trang quản trị</p>\r\n\r\n<h2>IV. C&aacute;c framework PHP phổ biến</h2>\r\n\r\n<p>A. Laravel</p>\r\n\r\n<p>B. CodeIgniter</p>\r\n\r\n<p>C. Symfony</p>\r\n\r\n<p>D. CakePHP</p>\r\n\r\n<h2>V. Bảo mật trong lập tr&igrave;nh web PHP</h2>\r\n\r\n<p>A. Tấn c&ocirc;ng v&agrave; lỗ hổng bảo mật</p>\r\n\r\n<p>B. C&aacute;c phương ph&aacute;p bảo mật cơ bản</p>\r\n\r\n<p>C. X&aacute;c thực người d&ugrave;ng v&agrave; ph&acirc;n quyền</p>\r\n\r\n<h2>VI. Triển khai website PHP</h2>\r\n\r\n<p>A. Lựa chọn m&aacute;y chủ v&agrave; t&ecirc;n miền</p>\r\n\r\n<p>B. C&agrave;i đặt v&agrave; cấu h&igrave;nh web server</p>\r\n\r\n<p>C. Triển khai ứng dụng PHP tr&ecirc;n server</p>\r\n\r\n<h2>VII. T&agrave;i liệu tham khảo v&agrave; học tiếp</h2>\r\n\r\n<p>A. C&aacute;c trang web học PHP trực tuyến</p>\r\n\r\n<p>B. C&aacute;c s&aacute;ch về lập tr&igrave;nh web PHP</p>\r\n\r\n<p>C. C&aacute;c diễn đ&agrave;n v&agrave; cộng đồng lập tr&igrave;nh vi&ecirc;n PHP.</p>\r\n'),
(9, 'Lỗ hổng bảo mật ngôn ngữ lập trình PHP', 'lo-hong-bao-mat-ngon-ngu-lap-trinh-php.jpg', 'lo-hong-bao-mat-ngon-ngu-lap-trinh-php', 1, 'Thường xuyên cập nhật phiên bản PHP mới nhất và các thư viện của nó để giảm thiểu các lỗ hổng bảo mật có thể xảy ra khi xây dựng website bằng ngôn ngữ PHP', '<h2>Một số lỗ hổng bảo mật trong ng&ocirc;n ngữ PHP</h2>\r\n\r\n<p>Injection Attacks: Lỗ hổng n&agrave;y xảy ra khi attacker c&oacute; thể thực thi m&atilde; PHP trong một ứng dụng web. Injection attacks bao gồm SQL injection, code injection v&agrave; c&aacute;c loại tấn c&ocirc;ng kh&aacute;c.</p>\r\n\r\n<p>Cross-site Scripting (XSS): Lỗ hổng XSS cho ph&eacute;p attacker thực thi m&atilde; JavaScript tr&ecirc;n tr&igrave;nh duyệt của người d&ugrave;ng. Lỗ hổng n&agrave;y thường xảy ra khi người d&ugrave;ng đưa dữ liệu kh&ocirc;ng được kiểm tra v&agrave; xử l&yacute; đ&uacute;ng c&aacute;ch v&agrave;o trang web.</p>\r\n\r\n<p>Cross-site Request Forgery (CSRF): Lỗ hổng n&agrave;y cho ph&eacute;p attacker đưa ra c&aacute;c y&ecirc;u cầu tr&ecirc;n trang web m&agrave; kh&ocirc;ng cần sự cho ph&eacute;p của người d&ugrave;ng. Điều n&agrave;y c&oacute; thể dẫn đến việc thực hiện c&aacute;c h&agrave;nh động kh&ocirc;ng mong muốn.</p>\r\n\r\n<p>File inclusion vulnerabilities: Lỗ hổng n&agrave;y cho ph&eacute;p attacker đưa m&atilde; v&agrave;o một tệp đ&atilde; tồn tại hoặc tạo một tệp mới. Điều n&agrave;y c&oacute; thể dẫn đến việc thực hiện c&aacute;c h&agrave;nh động kh&ocirc;ng mong muốn, bao gồm đọc v&agrave; ghi dữ liệu.</p>\r\n\r\n<p>Session hijacking: Lỗ hổng n&agrave;y cho ph&eacute;p attacker đ&aacute;nh cắp phi&ecirc;n đăng nhập của người d&ugrave;ng v&agrave; sử dụng n&oacute; để truy cập trang web.</p>\r\n\r\n<h2>Để tr&aacute;nh c&aacute;c lỗ hổng bảo mật trong PHP</h2>\r\n\r\n<ul>\r\n	<li>Kiểm tra v&agrave; x&aacute;c thực đầu v&agrave;o, m&atilde; h&oacute;a dữ liệu, kiểm tra quyền truy cập</li>\r\n	<li>Cập nhật phi&ecirc;n bản PHP mới nhất v&agrave; c&aacute;c thư viện sử dụng</li>\r\n</ul>\r\n'),
(10, 'Tin 1 update final', 'tin-1.jpg', 'tin-1', 2, 'dsds', NULL),
(11, 'Hệ điều hành mới Android ', 'android-1.jpg', 'he-dieu-hanh-moi-android', 6, 'Hệ điều hành mới Android', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhom`
--
ALTER TABLE `nhom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nhom`
--
ALTER TABLE `nhom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tin`
--
ALTER TABLE `tin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
