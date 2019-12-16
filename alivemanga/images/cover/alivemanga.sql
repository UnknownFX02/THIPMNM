-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 08, 2019 lúc 07:05 AM
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
-- Cấu trúc bảng cho bảng `avatar`
--

DROP TABLE IF EXISTS `avatar`;
CREATE TABLE IF NOT EXISTS `avatar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(256) NOT NULL,
  `location` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chapter`
--

DROP TABLE IF EXISTS `chapter`;
CREATE TABLE IF NOT EXISTS `chapter` (
  `chapter_id` int(11) NOT NULL AUTO_INCREMENT,
  `chapter_name` varchar(50) NOT NULL,
  PRIMARY KEY (`chapter_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groupuser`
--

DROP TABLE IF EXISTS `groupuser`;
CREATE TABLE IF NOT EXISTS `groupuser` (
  `idgroup` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`idgroup`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `groupuser`
--

INSERT INTO `groupuser` (`idgroup`, `name`) VALUES
(1, 'admin'),
(2, 'thành viên'),
(3, 'người quản trị');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mangas`
--

DROP TABLE IF EXISTS `mangas`;
CREATE TABLE IF NOT EXISTS `mangas` (
  `mangaid` int(11) NOT NULL AUTO_INCREMENT,
  `manganame` varchar(50) NOT NULL,
  `trans` varchar(25) NOT NULL,
  `newchap` varchar(50) NOT NULL,
  `updated` datetime NOT NULL,
  `other_name` varchar(50) NOT NULL,
  `viewer` int(11) NOT NULL,
  `actor` varchar(50) NOT NULL,
  `condition` varchar(50) NOT NULL,
  PRIMARY KEY (`mangaid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `mangas`
--

INSERT INTO `mangas` (`mangaid`, `manganame`, `trans`, `newchap`, `updated`, `other_name`, `viewer`, `actor`, `condition`) VALUES
(1, 'Naruto', 'truyenqq', '700.9', '2019-11-06 00:00:00', 'Naruto', 500, 'Kishimoto Masashi', 'Hoàn Thành');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `upload`
--

DROP TABLE IF EXISTS `upload`;
CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(256) NOT NULL,
  `location` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_name` varchar(250) DEFAULT NULL,
  `ngaysinh` date NOT NULL,
  PRIMARY KEY (`user_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_ID`, `user_email`, `user_password`, `user_name`, `ngaysinh`) VALUES
(2, 'mondorae2006@gmail.com', '123123', 'Phương Thanh', '1998-06-20'),
(1, 'admin', '1', 'admin nè', '1998-06-20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
