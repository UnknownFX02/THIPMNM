-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 06, 2019 lúc 01:18 PM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `alivemanga`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chapters`
--

DROP TABLE IF EXISTS `chapters`;
CREATE TABLE IF NOT EXISTS `chapters` (
  `chapter_id` varchar(100) NOT NULL,
  `chapter_name` int(100) NOT NULL,
  `mangaid` int(11) NOT NULL,
  `updated_time` date DEFAULT NULL,
  `viewer` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`chapter_id`),
  KEY `so luong chap` (`mangaid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chapters`
--

INSERT INTO `chapters` (`chapter_id`, `chapter_name`, `mangaid`, `updated_time`, `viewer`) VALUES
('black-clover-chap-1', 1, 5, '2019-11-29', 1),
('black-clover-chap-10', 10, 5, '2019-11-29', 0),
('black-clover-chap-2', 2, 5, '2019-11-29', 0),
('black-clover-chap-3', 3, 5, '2019-11-29', 0),
('black-clover-chap-4', 4, 5, '2019-11-29', 0),
('black-clover-chap-5', 5, 5, '2019-11-29', 0),
('black-clover-chap-6', 6, 5, '2019-11-29', 0),
('black-clover-chap-7', 7, 5, '2019-11-29', 0),
('black-clover-chap-8', 8, 5, '2019-11-29', 0),
('black-clover-chap-9', 9, 5, '2019-11-29', 0),
('Boku-No-Hero-Academia-chap-1', 1, 7, '2019-12-01', 0),
('Boku-No-Hero-Academia-chap-10', 10, 7, '2019-12-01', 0),
('Boku-No-Hero-Academia-chap-2', 2, 7, '2019-12-01', 0),
('Boku-No-Hero-Academia-chap-3', 3, 7, '2019-12-01', 0),
('Boku-No-Hero-Academia-chap-4', 4, 7, '2019-12-01', 0),
('Boku-No-Hero-Academia-chap-5', 5, 7, '2019-12-01', 0),
('Boku-No-Hero-Academia-chap-6', 6, 7, '2019-12-01', 0),
('Boku-No-Hero-Academia-chap-7', 7, 7, '2019-12-01', 0),
('Boku-No-Hero-Academia-chap-8', 8, 7, '2019-12-01', 0),
('Boku-No-Hero-Academia-chap-9', 9, 7, '2019-12-01', 0),
('Death-note-chap-1', 1, 14, '2019-12-02', 0),
('Karada-Sagashi-chap-1', 1, 6, '2019-12-01', 0),
('Karada-Sagashi-chap-10', 10, 6, '2019-12-01', 0),
('Karada-Sagashi-chap-2', 2, 6, '2019-12-01', 0),
('Karada-Sagashi-chap-3', 3, 6, '2019-12-01', 0),
('Karada-Sagashi-chap-4', 4, 6, '2019-12-01', 0),
('Karada-Sagashi-chap-5', 5, 6, '2019-12-01', 0),
('Karada-Sagashi-chap-6', 6, 6, '2019-12-01', 0),
('Karada-Sagashi-chap-7', 7, 6, '2019-12-01', 0),
('Karada-Sagashi-chap-8', 8, 6, '2019-12-01', 0),
('Karada-Sagashi-chap-9', 9, 6, '2019-12-01', 0),
('kimetsu-no-yaiba-chap-1', 1, 2, '2019-11-29', 0),
('kimetsu-no-yaiba-chap-10', 10, 2, '2019-11-29', 0),
('kimetsu-no-yaiba-chap-2', 2, 2, '2019-11-29', 0),
('kimetsu-no-yaiba-chap-3', 3, 2, '2019-11-29', 0),
('kimetsu-no-yaiba-chap-4', 4, 2, '2019-11-29', 0),
('kimetsu-no-yaiba-chap-5', 5, 2, '2019-11-29', 0),
('kimetsu-no-yaiba-chap-6', 6, 2, '2019-11-29', 0),
('kimetsu-no-yaiba-chap-7', 7, 2, '2019-11-29', 0),
('kimetsu-no-yaiba-chap-8', 8, 2, '2019-11-29', 0),
('kimetsu-no-yaiba-chap-9', 9, 2, '2019-11-29', 0),
('Nanatsu-No-Taizai-chap-1', 1, 3, '2019-11-29', 0),
('Nanatsu-No-Taizai-chap-10', 10, 3, '2019-12-01', 0),
('Nanatsu-No-Taizai-chap-2', 2, 3, '2019-11-29', 0),
('Nanatsu-No-Taizai-chap-3', 3, 3, '2019-11-29', 0),
('Nanatsu-No-Taizai-chap-4', 4, 3, '2019-12-01', 0),
('Nanatsu-No-Taizai-chap-5', 5, 3, '2019-12-01', 0),
('Nanatsu-No-Taizai-chap-6', 6, 3, '2019-12-01', 0),
('Nanatsu-No-Taizai-chap-7', 7, 3, '2019-12-01', 0),
('Nanatsu-No-Taizai-chap-8', 8, 3, '2019-12-01', 0),
('Nanatsu-No-Taizai-chap-9', 9, 3, '2019-12-01', 0),
('Naruto-chap-1', 1, 1, '2019-11-29', 2),
('Naruto-chap-10', 10, 1, '2019-11-29', 0),
('Naruto-chap-2', 2, 1, '2019-11-29', 0),
('Naruto-chap-3', 3, 1, '2019-11-29', 0),
('Naruto-chap-4', 4, 1, '2019-11-29', 0),
('Naruto-chap-5', 5, 1, '2019-11-29', 0),
('Naruto-chap-6', 6, 1, '2019-11-29', 0),
('Naruto-chap-7', 7, 1, '2019-11-29', 0),
('Naruto-chap-8', 8, 1, '2019-11-29', 0),
('Naruto-chap-9', 9, 1, '2019-11-29', 0),
('Naruto-gaiden-chap-1', 1, 8, '2019-10-01', 2),
('Naruto-gaiden-chap-2', 2, 8, '2019-12-01', 2),
('Naruto-gaiden-chap-3', 3, 8, '2019-12-01', 3),
('Naruto-gaiden-chap-4', 4, 8, '2019-12-01', 4),
('The-promised-neverland-chap-1', 1, 4, '2019-12-01', 0),
('The-promised-neverland-chap-10', 10, 4, '2019-12-01', 0),
('The-promised-neverland-chap-2', 2, 4, '2019-12-01', 0),
('The-promised-neverland-chap-3', 3, 4, '2019-12-01', 0),
('The-promised-neverland-chap-4', 4, 4, '2019-12-01', 0),
('The-promised-neverland-chap-5', 5, 4, '2019-12-01', 0),
('The-promised-neverland-chap-6', 6, 4, '2019-12-01', 0),
('The-promised-neverland-chap-7', 7, 4, '2019-12-01', 0),
('The-promised-neverland-chap-8', 8, 4, '2019-12-01', 0),
('The-promised-neverland-chap-9', 9, 4, '2019-12-01', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groupmanga`
--

DROP TABLE IF EXISTS `groupmanga`;
CREATE TABLE IF NOT EXISTS `groupmanga` (
  `ma_loaitr` int(20) NOT NULL AUTO_INCREMENT,
  `loaitr` varchar(50) NOT NULL,
  PRIMARY KEY (`ma_loaitr`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `groupmanga`
--

INSERT INTO `groupmanga` (`ma_loaitr`, `loaitr`) VALUES
(1, 'Viễn Tưởng'),
(2, 'Kinh Dị'),
(3, 'Siêu Nhiên'),
(4, 'Hài Hước'),
(5, 'Phiêu Lưu'),
(6, 'Hành Động'),
(7, 'Ngôn Tình'),
(8, 'Tâm Lý'),
(9, 'Trinh Thám');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groupuser`
--

DROP TABLE IF EXISTS `groupuser`;
CREATE TABLE IF NOT EXISTS `groupuser` (
  `group_id` int(5) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(256) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `groupuser`
--

INSERT INTO `groupuser` (`group_id`, `group_name`) VALUES
(1, 'admin'),
(2, 'thành viên'),
(3, 'người quản trị');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manga`
--

DROP TABLE IF EXISTS `manga`;
CREATE TABLE IF NOT EXISTS `manga` (
  `mangaid` int(20) NOT NULL AUTO_INCREMENT,
  `manganame` varchar(100) NOT NULL,
  `trans` varchar(50) NOT NULL,
  `newchap` varchar(50) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `other_name` varchar(250) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `viewer` int(50) NOT NULL,
  `actor` varchar(100) NOT NULL,
  `conditions` varchar(50) NOT NULL,
  `manga_cover` varchar(100) NOT NULL,
  `ma_loaitr` int(20) NOT NULL,
  PRIMARY KEY (`mangaid`),
  KEY `loaitr` (`ma_loaitr`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `manga`
--

INSERT INTO `manga` (`mangaid`, `manganame`, `trans`, `newchap`, `updated`, `other_name`, `description`, `viewer`, `actor`, `conditions`, `manga_cover`, `ma_loaitr`) VALUES
(1, 'Naruto', 'truyenqq', '700.9', '2019-11-05 17:00:00', '', 'Bối cảnh Naruto xảy ra vào mười hai năm trước khi câu chuyện chính thức bắt đầu, một con hồ ly chín đuôi đã tấn công Konohagakure. Nó là một con quái vật có sức mạnh khủng khiếp, chỉ một cái vẫy từ một trong chín cái đuôi của nó có thể tạo ra những cơn sóng thần và san bằng nhiều ngọn núi. Nó gây ra sự hỗn loạn và giết chết rất nhiều người cho đến khi người đứng đầu làng Lá – Hokage đệ tứ – đã đánh bại nó bằng cách đổi lấy mạng sống của mình để phong ấn nó vào trong người một đứa trẻ mới sinh. Đứa trẻ đó tên là Uzumaki Naruto. Bộ truyện kể về cuộc hành trình đầy gian khổ với vô vàn khó khăn, thử thách của Naruto từ khi còn là một cậu bé tới khi trở thành một trong những nhẫn giả vĩ đại nhất. Không chỉ mô tả về một thế giới nhẫn giả huyền bí, Naruto còn mang trong nó nhiều ý nghĩa nhân sinh sâu sắc về tình bạn, tình đồng đội, tình yêu, ước mơ và hi vọng.', 0, 'Kishimoto Masashi', 'Hoàn Thành', 'naruto.jpg', 6),
(2, 'Kimetsu No Yaiba', '', '182', '2019-11-11 17:00:00', 'Thanh Gươm Diệt Quỷ', 'Tanjirou là con cả của gia đình vừa mất cha. Một ngày nọ, Tanjirou đến thăm thị trấn khác để bán than, khi đêm về cậu ở nghỉ tại nhà người khác thay vì về nhà vì lời đồn thổi về ác quỷ luôn rình mò gần núi vào buổi tối. Khi cậu về nhà vào ngày hôm sau, bị kịch đang đợi chờ cậu…', 0, 'Koyoharu Gotōge', 'Đang tiến hành', 'kimetsu-no-yaiba.jpg', 6),
(3, 'Nanatsu No Taizai', 'truyenqq', '0', '2019-11-03 17:00:00', 'Thất hình đại tội Suzuki Nakaba', '“Thất đại ác nhân”, một nhóm chiến binh có tham vọng lật đổ vương quốc Britannia, được cho là đã bị tiêu diệt bởi các “hiệp sĩ thánh chiến” mặc dù vẫn còn 1 số người cho rằng họ vẫn còn sống. 10 năm sau, Các hiệp sĩ thánh chiến đã làm 1 cuộc đảo chính và khống chế đức vua, họ trở thành người cai trị độc tài mới của vương quốc. Elizabeth, con gái duy nhất của nhà vua, đã lên đường tìm “thất đại ác nhân” để nhờ họ tái chiếm lại vương quốc. Công chúa có thành công trong việc tìm kiếm “thất đại ác nhân”, các “hiệp sĩ thánh chiến” sẽ làm gì để ngăn chăn cô? xem các chap truyện sau sẽ rõ.', 0, 'Suzuki Nakaba', 'Đang tiến hành', 'nanatsu-no-taizai.jpg', 1),
(4, 'The Promised Neverland', 'truyenqq', '158', '2019-11-12 17:00:00', 'Yakusoku No Neverland', 'Emma và những người bạn sống một cuộc sống bình yên tại trại trẻ mồ côi nơi họ lớn lên. Dù quy định tại đây khá nghiêm ngặt nhưng người mẹ chăm sóc họ thực sự tốt bụng. Nhưng tại sao những đứa trẻ lạibị cấm rời khỏi nơi này...?', 0, 'Kaiu Shirai, Posuka Demizu', 'Đang tiến hành', 'the-promised-neverland.jpg', 8),
(5, 'Black Clover', 'truyenqq', '228', '2019-11-05 17:00:00', 'Pháp Sư Không Phép Thuật ; Black Five Leaf Grass', 'Aster và Yuno là hai đứa trẻ bị bỏ rơi ở nhà thờ và cùng nhau lớn lên tại đó. Khi còn nhỏ, chúng đã hứa với nhau xem ai sẽ trở thành Ma pháp vương tiếp theo. Thế nhưng, khi cả hai lớn lên, mọi sô chuyện đã thay đổi. Yuno là thiên tài ma pháp với sức mạnh tuyệt đỉnh trong khi Aster lại không thể sử dụng ma pháp và cố gắng bù đắp bằng thể lực. Khi cả hai được nhận sách phép vào tuổi 15, Yuno đã được ban cuốn sách phép cỏ bốn bá (trong khi đa số là cỏ ba lá) mà Aster lại không có cuốn nào. Tuy nhiên, khi Yuno bị đe dọa, sự thật về sức mạnh của Aster đã được giải mã- cậu ta được ban cuốn sách phép cỏ năm lá, cuốn sách phá ma thuật màu đen. Bấy giờ, hai người bạn trẻ đang hướng ra thế giới, cùng chung mục tiêu.', 0, 'Tabata Yuuki', 'Đang tiến hành', 'black-clover.jpg', 1),
(6, 'Karada Sagashi', 'comicvn', '133', '2019-11-16 17:00:00', 'Trò Chơi Tìm Xác', 'Chuyện không kể lúc nửa đêm về người phụ nữ mặc đồ đỏ. \"Này, Asuka ... hãy tìm cơ thể giúp ta\". Tại trường học, vào nửa đêm, Asuka và bạn cô ấy phải tìm kiếm những phần cơ thể đã bị cắt của con ma. Nếu họ không tìm thấy, ngày 9/11 sẽ được lặp lại và người mang đồ đỏ sẽ đến giết họ. Ai là người mang đồ đỏ? Và vì sao lại yêu cầu họ tìm kiếm bộ phận cơ thể của mình.', 0, 'Đang cập nhật', 'Đang tiến hành', 'karada-sagashi.jpg', 2),
(7, 'Boku No Hero Academia', 'truyenqq', '249', '2019-11-12 17:00:00', 'My Hero Academia ; Học Viện Anh Hùng ; Trường Học Siêu Anh Hùng', 'Vào tương lai, lúc mà con người với những sức mạnh siêu nhiên là điều thường thấy quanh thế giới. Đây là câu chuyện về Izuku Midoriya, từ một kẻ bất tài trở thành một siêu anh hùng. Tất cả ta cần là mơ ước.', 0, 'Horikoshi Kohei', 'Đang tiến hành', 'boku-no-hero-academia.jpg', 1),
(8, 'Naruto Gaiden: Hokage Đệ Thất', '', '10', '2019-09-30 17:00:00', '', 'Một mini-series của Masashi Kishimoto viết về Boruto Uzumaki(con trai của Naruto Uzumaki Hokage của Làng Lá…', 2, 'Kishimoto Masashi', 'Hoàn thành', 'naruto-gaiden-hokage-de-that.jpg', 4),
(9, 'Fairy Tail', 'truyenqq', '545', '2019-07-08 17:00:00', '', 'Xin đón chào các bạn đến với Fairy Tail – một thế giới tràn đầy phép thuật, những pháp sư có thể hô mưa, gọi gió, những con mèo biết bay và những quái vật trong truyền thuyết. Tại vùng đất Fiore, bạn sẽ gặp được tổ chức Fairy Tail, một tổ chức pháp sư có những thành viên vui tính, thú vị và mạnh mẽ nhất. Câu chuyện bắt đầu khi cô gái trẻ Lucy, người có khả năng kêu gọi các tinh linh và ước mơ được gia nhập một tổ chức phù thủy gặp được hỏa pháp sư Natsu đang trên đường tìm kiếm cha nuôi của mình tại thị trấn cảng Harujion… Trong Fairy Tail, bạn sẽ gặp gỡ cặp “chó mèo” Natsu “khạc ra lửa” và “xơi lửa” cùng Gray “băng giá”, Lucy, Erza tài giỏi và “sexy”, theo kèm là những chú mèo ngộ nghĩnh cùng rất nhiều các pháp sư với đủ loại phép thuật kỳ lạ.', 1, 'Hiro Mashima', 'Hoàn thành', 'fairy-tail.jpg', 1),
(10, 'Tate No Yuusha No Nariagari', 'truyenqq', '0', '2019-11-20 17:00:00', 'The Rising Of The Shield Hero ; Sự Trỗi Dậy Của Khiên Hiệp Sĩ', 'Là câu chuyện về một nam thanh niên otaku bị triệu hồi vào một Thế giới game nhập vai...', 0, 'Aneko Yusagi, Aiya Kyu', 'Đang Tiến Hành', 'tate-no-yuusha-no-nariagari.jpg', 1),
(11, 'Fairy Tail 100 Year Quest', 'truyenqq', '0', '2019-11-30 17:00:00', 'Hội Pháp Sư Nhiệm Vụ Trăm Năm ; Fairy Tail 100 Years Quest', 'Tuyện tiếp nối chap 545 của Fairy Tail, khi nhóm Natsu đi làm nhiệm vụ trăm năm.', 0, 'Atsuo Ueda', 'Đang Tiến Hành', 'fairy-tail-100-year-quest.jpg', 1),
(12, 'Tôi Có Thể Nhìn Thấy Chúng', '', '0', '2019-11-30 17:00:00', 'Girl That Can See It', 'Một cô nữ sinh trung học vs. Những bóng ma lang thang. Nếu lơ nó đi thì sẽ được thôi, phải không nhỉ ? Phim kinh dị thường như vậy lắm mà!', 0, 'Đang Cập Nhật', 'Đang Tiến Hành', 'toi-co-the-nhin-thay-chun.jpg', 2),
(13, 'Sword Art Online - Hollow Realization', '', '0', '2019-11-30 17:00:00', '', 'Một sự chuyển thể manga của trò chơi phổ biến, Hollow Realization diễn ra trong trò chơi VRMMORPG Sword Art: Origin và thấy Kirito và bạn bè đi ngang qua vùng đất Ainground, một công trình xây dựng lại của Aincrad, khi họ gặp một cô gái bí ẩn của NPC tên là Premiere, được mã hoá vào trò chơi. Vince để bảo vệ cô, họ tìm kiếm để khám phá sự thật về mã số của cô trong khi vẫn tranh đấu với những người chơi muốn xoá đi sự tồn tại của cô từ trò chơi.', 0, 'Kawahara Reki', 'Đang Tiến Hành', 'sword-art-online-hollow-realization.jpg', 1),
(14, 'Death Note', 'truyenqq', '0', '2019-11-30 17:00:00', 'Quyển Sổ Thiên Mệnh', 'Light Yagami là một thiếu niên thiên tài với khả năng quan sát và suy luận tuyệt vời - và cậu cảm thấy cuộc sống của mình nhàm chán. Nhưng mọi việc hoàn toàn thay đổi khi cậu tìm thấy quyển sổ Thần Chết DeathNote, một quyển sổ do một thần chết cố tình đánh rơi. Bất cứ người nào bị ghi tên vào trong quyển sổ sẽ phải chết, và Light quyết định sử dụng quyển sổ để tiêu diệt cái ác trên thế giới ...', 0, 'Takeshi Obata', 'Đang Tiến Hành', 'death-note.jpg', 8),
(15, 'World Trigger', 'truyenqq', '0', '2019-12-04 17:00:00', 'Kỉ Nguyên Trigger', 'Một ấn phẩm mới trong năm 2013! Một thành phố đã mở cánh cổng đi vào thế giới song song... Từ thế giới bên kia cánh cổng, bọn xâm lược NAVER đã tiến vào gây náo động thành phố... Để bảo vệ cuộc sống của mọi người.... Một tổ chức đã được thành lập mang tên BORDER (Biên giới), thành viên của BORDER là những người mang sức mạnh TRIGGER Họ sẽ làm gì để bảo vệ thành phố của mình?', 0, 'Ashihara Daisuke', 'Đang Tiến Hành', 'world-trigger.jpg', 1),
(16, 'Conan', '', '0', '2019-12-04 17:00:00', 'Thám Tử Lừng Danh Conan', 'Nhân vật chính của truyện là một thám tử học sinh trung học có tên là Kudo Shinichi, người đã bị biến thành một cậu bé cỡ học sinh tiểu học và luôn cố gắng truy tìm tung tích tổ chức Áo Đen nhằm lấy lại hình dáng cũ.', 0, 'Aoyama Gōshō', 'Đang Tiến Hành', 'conan.jpg', 9),
(17, 'Karakai Jouzu No Takagi-San', '', '0', '2019-12-04 17:00:00', 'Nhất Quỷ Nhì Ma, Thứ Ba Takagi', '“Đỏ mặt là thua!”\r\n\r\nVới niềm tin như vậy, mỗi ngày đến trường với Nishikata là một ngày thua. Cậu học sinh trung học đáng thương luôn bị “quê” bởi những trò chọc phá của cô nàng ngồi cạnh bàn Takagi-san, và dẫu cho cậu bé luôn ấp ủ mộng báo thù cũng như không ngừng bày mưu tính kế, thì cuối cùng những chiêu trò của cậu lại “gậy ông đập lưng ông”.\r\n\r\nTheo đánh giá của giới chuyên môn, cách biệt kèo trên và kèo dưới là rất xa, cửa thắng cho cậu bé là cực thấp, bởi có vẻ như cô bé Takagi còn có khả năng nắm bắt được hết những suy nghĩ toan tính của cậu. Song, nhìn về những gì Yokoi đã làm được trước Seki-kun trong Tonari no Seki-kun, liệu chúng ta có nên đặt chút niềm tin vào màn lật kèo phút chót của Nishikata?', 0, 'Yamamoto Souichirou', 'Đang Tiến Hành', 'karakai-jouzu-no-takagi-san.jpg', 4),
(18, 'Sekai Maou', '', '0', '2019-12-04 17:00:00', '', '', 0, 'Futami Sui', 'Đang Tiến Hành', 'sekai-maou.jpg', 5),
(19, 'Attack On Titan', '', '0', '2019-12-05 17:00:00', 'Đại Chiến Titan ; Shingeki No Kyojin ; Tấn Công Người Khổng Lồ', 'Hơn 100 năm trước, giống người khổng lồ Titan đã tấn công và đẩy loài người tới bờ vực tuyệt chủng. Những con người sống sót tụ tập lại, xây bao quanh mình 1 tòa thành 3 lớp kiên cố và tự nhốt mình bên trong để trốn tránh những cuộc tấn công của người khổng lồ. Họ tìm mọi cách để tiêu diệt người khổng lồ nhưng không thành công. Và sau 1 thế kỉ hòa bình, giống khổng lồ đã xuất hiện trở lại, một lần nữa đe dọa sự tồn vong của con người....  Elen và Mikasa phải chứng kiến một cảnh tượng cực kinh khủng - mẹ của mình bị ăn thịt ngay trước mắt. Elen thề rằng cậu sẽ giết tất cả những tên khổng lồ mà cậu gặp.....', 0, 'Hajime Isayama', 'Đang Tiến Hành', 'attack-on-titan.jpg', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `uploaded`
--

DROP TABLE IF EXISTS `uploaded`;
CREATE TABLE IF NOT EXISTS `uploaded` (
  `upload_id` int(100) NOT NULL AUTO_INCREMENT,
  `manga_name` varchar(100) NOT NULL,
  `upload_name` varchar(100) NOT NULL,
  `chapter_id` varchar(100) NOT NULL,
  PRIMARY KEY (`upload_id`),
  KEY `noidungchap` (`chapter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `ngaysinh` date NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `group_id` int(5) NOT NULL DEFAULT '2',
  PRIMARY KEY (`user_ID`),
  KEY `loaitk` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_ID`, `user_email`, `user_password`, `user_name`, `gioitinh`, `ngaysinh`, `avatar`, `group_id`) VALUES
(0, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'admin nè', '', '1998-06-20', 'mon2.jpg', 1),
(1, 'naruto@gmail.com', '123123', 'Naruto Uzumaki', 'Nam', '1999-11-15', 'naruto.jpg', 2),
(2, 'mondorae2006@gmail.com', '123123', 'Phương Thanh', 'nam', '1998-06-20', 'mon2.jpg', 3),
(3, 'thanhbui20698@gmail.com', '123123', 'Thanh Bùi', 'nam', '2019-04-17', 'default.jpg', 2),
(5, 'thunghiem@gmail.com', '202cb962ac59075b964b07152d234b70', 'thu nghiem ne', 'Nam', '1333-02-01', 'nezuko.jpg', 2);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `so luong chap` FOREIGN KEY (`mangaid`) REFERENCES `manga` (`mangaid`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `manga`
--
ALTER TABLE `manga`
  ADD CONSTRAINT `loaitr` FOREIGN KEY (`ma_loaitr`) REFERENCES `groupmanga` (`ma_loaitr`);

--
-- Các ràng buộc cho bảng `uploaded`
--
ALTER TABLE `uploaded`
  ADD CONSTRAINT `noidungchap` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`chapter_id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `loaitk` FOREIGN KEY (`group_id`) REFERENCES `groupuser` (`group_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
