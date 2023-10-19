-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 19, 2023 lúc 03:14 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ckd`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_aff`
--

DROP TABLE IF EXISTS `users_aff`;
CREATE TABLE IF NOT EXISTS `users_aff` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_create` varchar(255) NOT NULL,
  `date_update` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `users_aff`
--

INSERT INTO `users_aff` (`id`, `name`, `username`, `password`, `gender`, `birthday`, `email`, `phone`, `address`, `date_create`, `date_update`) VALUES
(1, '2121', '12111', '1', '1', '21313', '123213@eewq.ytryr', 'ỹ', '543534', '2023-10-18 10:27:56', ''),
(2, 'dang van', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '20/10/1994', 'ejwieji@ewewqe.vew', '1234567890', 'ewenew', '2023-10-18 10:32:45', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
