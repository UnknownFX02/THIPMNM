-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2019 at 05:41 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alivemanga`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

DROP TABLE IF EXISTS `chapters`;
CREATE TABLE IF NOT EXISTS `chapters` (
  `chapter_id` varchar(100) NOT NULL,
  `chapter_name` int(100) NOT NULL,
  `mangaid` int(11) NOT NULL,
  PRIMARY KEY (`chapter_id`),
  KEY `so luong chap` (`mangaid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`chapter_id`, `chapter_name`, `mangaid`) VALUES
('NAR_1', 1, 1),
('NAR_10', 10, 1),
('NAR_2', 2, 1),
('NAR_3', 3, 1),
('NAR_4', 4, 1),
('NAR_5', 5, 1),
('NAR_6', 6, 1),
('NAR_7', 7, 1),
('NAR_8', 8, 1),
('NAR_9', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `groupmanga`
--

DROP TABLE IF EXISTS `groupmanga`;
CREATE TABLE IF NOT EXISTS `groupmanga` (
  `ma_loaitr` int(20) NOT NULL AUTO_INCREMENT,
  `loaitr` varchar(50) NOT NULL,
  PRIMARY KEY (`ma_loaitr`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groupmanga`
--

INSERT INTO `groupmanga` (`ma_loaitr`, `loaitr`) VALUES
(1, 'Viễn Tưởng'),
(2, 'Kinh Dị'),
(3, 'Siêu Nhiên'),
(4, 'Hài Hước'),
(5, 'Chuyển Sinh'),
(6, 'Hành Động'),
(7, 'Ngôn Tình'),
(8, 'Tâm Lý');

-- --------------------------------------------------------

--
-- Table structure for table `groupuser`
--

DROP TABLE IF EXISTS `groupuser`;
CREATE TABLE IF NOT EXISTS `groupuser` (
  `group_id` int(5) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(256) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groupuser`
--

INSERT INTO `groupuser` (`group_id`, `group_name`) VALUES
(1, 'admin'),
(2, 'thành viên'),
(3, 'người quản trị');

-- --------------------------------------------------------

--
-- Table structure for table `manga`
--

DROP TABLE IF EXISTS `manga`;
CREATE TABLE IF NOT EXISTS `manga` (
  `mangaid` int(20) NOT NULL AUTO_INCREMENT,
  `manganame` varchar(100) NOT NULL,
  `trans` varchar(50) NOT NULL,
  `newchap` varchar(50) NOT NULL,
  `updated` date NOT NULL,
  `other_name` varchar(250) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `viewer` int(50) NOT NULL,
  `actor` varchar(100) NOT NULL,
  `conditions` varchar(50) NOT NULL,
  `manga_cover` varchar(100) NOT NULL,
  `ma_loaitr` int(20) NOT NULL,
  PRIMARY KEY (`mangaid`),
  KEY `loaitr` (`ma_loaitr`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manga`
--

INSERT INTO `manga` (`mangaid`, `manganame`, `trans`, `newchap`, `updated`, `other_name`, `description`, `viewer`, `actor`, `conditions`, `manga_cover`, `ma_loaitr`) VALUES
(1, 'Naruto', 'truyenqq', '700.9', '2019-11-06', '', 'Bối cảnh Naruto xảy ra vào mười hai năm trước khi câu chuyện chính thức bắt đầu, một con hồ ly chín đuôi đã tấn công Konohagakure. Nó là một con quái vật có sức mạnh khủng khiếp, chỉ một cái vẫy từ một trong chín cái đuôi của nó có thể tạo ra những cơn sóng thần và san bằng nhiều ngọn núi. Nó gây ra sự hỗn loạn và giết chết rất nhiều người cho đến khi người đứng đầu làng Lá – Hokage đệ tứ – đã đánh bại nó bằng cách đổi lấy mạng sống của mình để phong ấn nó vào trong người một đứa trẻ mới sinh. Đứa trẻ đó tên là Uzumaki Naruto. Bộ truyện kể về cuộc hành trình đầy gian khổ với vô vàn khó khăn, thử thách của Naruto từ khi còn là một cậu bé tới khi trở thành một trong những nhẫn giả vĩ đại nhất. Không chỉ mô tả về một thế giới nhẫn giả huyền bí, Naruto còn mang trong nó nhiều ý nghĩa nhân sinh sâu sắc về tình bạn, tình đồng đội, tình yêu, ước mơ và hi vọng.', 0, 'Kishimoto Masashi', 'Hoàn Thành', 'naruto.jpg', 6),
(2, 'Kimetsu No Yaiba', '', '182', '2019-11-12', 'Thanh Gươm Diệt Quỷ', 'Tanjirou là con cả của gia đình vừa mất cha. Một ngày nọ, Tanjirou đến thăm thị trấn khác để bán than, khi đêm về cậu ở nghỉ tại nhà người khác thay vì về nhà vì lời đồn thổi về ác quỷ luôn rình mò gần núi vào buổi tối. Khi cậu về nhà vào ngày hôm sau, bị kịch đang đợi chờ cậu…', 0, 'Koyoharu Gotōge', 'Đang tiến hành', 'kimetsu-no-yaiba.jpg', 6),
(3, 'Nanatsu No Taizai', 'truyenqq', '0', '2019-11-04', 'Thất hình đại tội Suzuki Nakaba', '“Thất đại ác nhân”, một nhóm chiến binh có tham vọng lật đổ vương quốc Britannia, được cho là đã bị tiêu diệt bởi các “hiệp sĩ thánh chiến” mặc dù vẫn còn 1 số người cho rằng họ vẫn còn sống. 10 năm sau, Các hiệp sĩ thánh chiến đã làm 1 cuộc đảo chính và khống chế đức vua, họ trở thành người cai trị độc tài mới của vương quốc. Elizabeth, con gái duy nhất của nhà vua, đã lên đường tìm “thất đại ác nhân” để nhờ họ tái chiếm lại vương quốc. Công chúa có thành công trong việc tìm kiếm “thất đại ác nhân”, các “hiệp sĩ thánh chiến” sẽ làm gì để ngăn chăn cô? xem các chap truyện sau sẽ rõ.', 0, 'Suzuki Nakaba', 'Đang tiến hành', 'nanatsu-no-taizai.jpg', 1),
(4, 'The Promised Neverland', 'truyenqq', '158', '2019-11-13', 'Yakusoku No Neverland', 'Emma và những người bạn sống một cuộc sống bình yên tại trại trẻ mồ côi nơi họ lớn lên. Dù quy định tại đây khá nghiêm ngặt nhưng người mẹ chăm sóc họ thực sự tốt bụng. Nhưng tại sao những đứa trẻ lạibị cấm rời khỏi nơi này...?', 0, 'Kaiu Shirai, Posuka Demizu', 'Đang tiến hành', 'the-promised-neverland.jpg', 8),
(5, 'Black Clover', 'truyenqq', '228', '2019-11-06', 'Pháp Sư Không Phép Thuật ; Black Five Leaf Grass', 'Aster và Yuno là hai đứa trẻ bị bỏ rơi ở nhà thờ và cùng nhau lớn lên tại đó. Khi còn nhỏ, chúng đã hứa với nhau xem ai sẽ trở thành Ma pháp vương tiếp theo. Thế nhưng, khi cả hai lớn lên, mọi sô chuyện đã thay đổi. Yuno là thiên tài ma pháp với sức mạnh tuyệt đỉnh trong khi Aster lại không thể sử dụng ma pháp và cố gắng bù đắp bằng thể lực. Khi cả hai được nhận sách phép vào tuổi 15, Yuno đã được ban cuốn sách phép cỏ bốn bá (trong khi đa số là cỏ ba lá) mà Aster lại không có cuốn nào. Tuy nhiên, khi Yuno bị đe dọa, sự thật về sức mạnh của Aster đã được giải mã- cậu ta được ban cuốn sách phép cỏ năm lá, cuốn sách phá ma thuật màu đen. Bấy giờ, hai người bạn trẻ đang hướng ra thế giới, cùng chung mục tiêu.', 0, 'Tabata Yuuki', 'Đang tiến hành', 'black-clover.jpg', 1),
(6, 'Karada Sagashi', 'comicvn', '133', '2019-11-17', 'Trò Chơi Tìm Xác', 'Chuyện không kể lúc nửa đêm về người phụ nữ mặc đồ đỏ. \"Này, Asuka ... hãy tìm cơ thể giúp ta\". Tại trường học, vào nửa đêm, Asuka và bạn cô ấy phải tìm kiếm những phần cơ thể đã bị cắt của con ma. Nếu họ không tìm thấy, ngày 9/11 sẽ được lặp lại và người mang đồ đỏ sẽ đến giết họ. Ai là người mang đồ đỏ? Và vì sao lại yêu cầu họ tìm kiếm bộ phận cơ thể của mình.', 0, 'Đang cập nhật', 'Đang tiến hành', 'karada-sagashi.jpg', 2),
(7, 'Boku No Hero Academia', 'truyenqq', '249', '2019-11-13', 'My Hero Academia ; Học Viện Anh Hùng ; Trường Học Siêu Anh Hùng', 'Vào tương lai, lúc mà con người với những sức mạnh siêu nhiên là điều thường thấy quanh thế giới. Đây là câu chuyện về Izuku Midoriya, từ một kẻ bất tài trở thành một siêu anh hùng. Tất cả ta cần là mơ ước.', 0, 'Horikoshi Kohei', 'Đang tiến hành', 'boku-no-hero-academia.jpg', 1),
(8, 'Naruto Gaiden: Hokage Đệ Thất', '', '10', '2019-10-01', '', 'Một mini-series của Masashi Kishimoto viết về Boruto Uzumaki(con trai của Naruto Uzumaki Hokage của Làng Lá…', 1, 'Kishimoto Masashi', 'Hoàn thành', 'naruto-gaiden-hokage-de-that.jpg', 4),
(9, 'Fairy Tail', 'truyenqq', '545', '2019-07-09', '', 'Xin đón chào các bạn đến với Fairy Tail – một thế giới tràn đầy phép thuật, những pháp sư có thể hô mưa, gọi gió, những con mèo biết bay và những quái vật trong truyền thuyết. Tại vùng đất Fiore, bạn sẽ gặp được tổ chức Fairy Tail, một tổ chức pháp sư có những thành viên vui tính, thú vị và mạnh mẽ nhất. Câu chuyện bắt đầu khi cô gái trẻ Lucy, người có khả năng kêu gọi các tinh linh và ước mơ được gia nhập một tổ chức phù thủy gặp được hỏa pháp sư Natsu đang trên đường tìm kiếm cha nuôi của mình tại thị trấn cảng Harujion… Trong Fairy Tail, bạn sẽ gặp gỡ cặp “chó mèo” Natsu “khạc ra lửa” và “xơi lửa” cùng Gray “băng giá”, Lucy, Erza tài giỏi và “sexy”, theo kèm là những chú mèo ngộ nghĩnh cùng rất nhiều các pháp sư với đủ loại phép thuật kỳ lạ.', 1, 'Hiro Mashima', 'Hoàn thành', 'fairy-tail.jpg', 1),
(10, 'Tate No Yuusha No Nariagari', 'truyenqq', '0', '2019-11-21', 'The Rising Of The Shield Hero ; Sự Trỗi Dậy Của Khiên Hiệp Sĩ', 'Là câu chuyện về một nam thanh niên otaku bị triệu hồi vào một Thế giới game nhập vai...', 0, 'Aneko Yusagi, Aiya Kyu', 'Đang Tiến Hành', 'tate-no-yuusha-no-nariagari.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uploaded`
--

DROP TABLE IF EXISTS `uploaded`;
CREATE TABLE IF NOT EXISTS `uploaded` (
  `upload_id` int(100) NOT NULL AUTO_INCREMENT,
  `manga_name` varchar(100) NOT NULL,
  `upload_name` varchar(100) NOT NULL,
  `chapter_id` varchar(100) NOT NULL,
  PRIMARY KEY (`upload_id`),
  KEY `noidungchap` (`chapter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uploaded`
--

INSERT INTO `uploaded` (`upload_id`, `manga_name`, `upload_name`, `chapter_id`) VALUES
(1, 'manga\\naruto\\chap 1\\', '0.jpg', 'NAR_1'),
(2, 'manga\\naruto\\chap 1\\', '1.jpg', 'NAR_1'),
(3, 'manga\\naruto\\chap 1\\', '2.jpg', 'NAR_1'),
(4, 'manga\\naruto\\chap 1\\', '3.jpg', 'NAR_1'),
(5, 'manga\\naruto\\chap 1\\', '4.jpg', 'NAR_1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `ngaysinh` date NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `group_id` int(5) NOT NULL DEFAULT '2',
  PRIMARY KEY (`user_ID`),
  KEY `loaitk` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `user_email`, `user_password`, `user_name`, `gioitinh`, `ngaysinh`, `avatar`, `group_id`) VALUES
(0, 'admin', '1', 'admin nè', '', '1998-06-20', 'mon2.jpg', 1),
(1, 'naruto@gmail.com', '123123', 'Naruto Uzumaki', 'Nam', '1999-11-15', 'naruto.jpg', 2),
(2, 'mondorae2006@gmail.com', '123123', 'Phương Thanh', 'nam', '1998-06-20', 'mon2.jpg', 3),
(3, 'thanhbui20698@gmail.com', '123123', 'Thanh Bùi', 'nam', '2019-04-17', 'default.jpg', 2),
(4, 'concac@gmail.com', '123456', 'Cac', 'Nam', '2019-01-31', '65382893_1181551202007978_4214044683304697856_n.jpg', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `so luong chap` FOREIGN KEY (`mangaid`) REFERENCES `manga` (`mangaid`) ON UPDATE CASCADE;

--
-- Constraints for table `manga`
--
ALTER TABLE `manga`
  ADD CONSTRAINT `loaitr` FOREIGN KEY (`ma_loaitr`) REFERENCES `groupmanga` (`ma_loaitr`);

--
-- Constraints for table `uploaded`
--
ALTER TABLE `uploaded`
  ADD CONSTRAINT `noidungchap` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`chapter_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `loaitk` FOREIGN KEY (`group_id`) REFERENCES `groupuser` (`group_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
