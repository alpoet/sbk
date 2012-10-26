-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2012 年 10 月 26 日 10:34
-- 服务器版本: 5.5.21
-- PHP 版本: 5.3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `sbk`
--

-- --------------------------------------------------------

--
-- 表的结构 `sbk_admin`
--

CREATE TABLE IF NOT EXISTS `sbk_admin` (
  `admin_id` char(11) CHARACTER SET utf8mb4 NOT NULL,
  `admin_password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sbk_admin`
--

INSERT INTO `sbk_admin` (`admin_id`, `admin_password`) VALUES
('13874206508', '6508');

-- --------------------------------------------------------

--
-- 表的结构 `sbk_bk`
--

CREATE TABLE IF NOT EXISTS `sbk_bk` (
  `bk_id` int(11) NOT NULL AUTO_INCREMENT,
  `bk_data_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bk_equipment_id` char(11) NOT NULL,
  `bk_equipment_name` varchar(255) NOT NULL,
  `bk_equipment_specification` varchar(255) NOT NULL,
  `bk_quantity` int(11) NOT NULL,
  `bk_hospital_departments` varchar(255) NOT NULL,
  PRIMARY KEY (`bk_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `sbk_bk`
--

INSERT INTO `sbk_bk` (`bk_id`, `bk_data_time`, `bk_equipment_id`, `bk_equipment_name`, `bk_equipment_specification`, `bk_quantity`, `bk_hospital_departments`) VALUES
(1, '2012-10-26 02:06:16', '500002-016', '乐普国产药物支架（国产）[限额]', 'y', 22, '新生儿科'),
(2, '2012-10-26 02:06:16', '500471-012', '一次性正压无针连接式留置针（国产）[乙10%]', 'x', 23, '新生儿科'),
(3, '2012-10-26 02:08:34', '500002-016', '乐普国产药物支架（国产）[限额]', 'y', 17, '呼吸内科'),
(4, '2012-10-26 02:08:34', '500471-012', '一次性正压无针连接式留置针（国产）[乙10%]', 'x', 42, '呼吸内科');

-- --------------------------------------------------------

--
-- 表的结构 `sbk_bx`
--

CREATE TABLE IF NOT EXISTS `sbk_bx` (
  `bx_id` int(11) NOT NULL AUTO_INCREMENT,
  `bx_report_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bx_take_date_time` datetime DEFAULT NULL,
  `bx_done_date_time` datetime DEFAULT NULL,
  `bx_hospital_departments` varchar(255) NOT NULL,
  `bx_mobile` char(11) NOT NULL,
  `bx_equipment_name` varchar(255) NOT NULL,
  `bx_status_code` int(2) NOT NULL,
  `bx_status` varchar(11) NOT NULL,
  `bx_fault_description` text,
  `bx_member_id` char(11) DEFAULT NULL,
  PRIMARY KEY (`bx_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `sbk_bx`
--

INSERT INTO `sbk_bx` (`bx_id`, `bx_report_date_time`, `bx_take_date_time`, `bx_done_date_time`, `bx_hospital_departments`, `bx_mobile`, `bx_equipment_name`, `bx_status_code`, `bx_status`, `bx_fault_description`, `bx_member_id`) VALUES
(1, '2012-10-22 10:45:39', '2012-10-25 07:27:35', NULL, '老年老干病房', '15290876543', '黑白超', 2, '正在维修', '', '13907390739'),
(2, '2012-10-22 10:59:36', '2012-10-24 16:47:52', '2012-10-25 19:17:28', '肠胃、甲状腺、乳腺', '18907391987', '内窥镜', 3, '完成维修', '', '13874973412'),
(3, '2012-10-22 11:00:18', NULL, NULL, '产科', '13907390987', '呼吸机', 1, '等待接修', '', NULL),
(4, '2012-10-22 15:32:56', '2012-10-25 07:27:35', NULL, '医学整形美容中心', '15290876543', '电刀', 2, '正在维修', '', '13907390739'),
(5, '2012-10-23 01:43:45', '2012-10-24 16:47:52', '2012-10-24 17:10:52', '新生儿科', '18907391987', '监护仪', 3, '完成维修', '', '13874973412'),
(6, '2012-10-24 00:33:30', NULL, NULL, '小儿外科', '18907391987', '彩超', 1, '等待接修', '', NULL),
(7, '2012-10-22 10:45:39', NULL, NULL, '老年老干病房', '15290876543', '黑白超', 1, '等待接修', '', NULL),
(8, '2012-10-24 00:33:30', '2012-10-25 07:27:35', NULL, '小儿外科', '18907391987', '彩超', 2, '正在维修', '', '13907390739'),
(9, '2012-10-24 00:33:30', NULL, NULL, '小儿外科', '18907391987', '彩超', 1, '等待接修', '', NULL),
(10, '2012-10-22 10:59:36', NULL, NULL, '肠胃、甲状腺、乳腺', '18907391987', '内窥镜', 1, '等待接修', '', NULL),
(11, '2012-10-22 11:00:18', NULL, NULL, '产科', '13907390987', '呼吸机', 1, '等待接修', '', NULL),
(12, '2012-10-23 01:43:45', NULL, NULL, '新生儿科', '18907391987', '监护仪', 1, '等待接修', '', NULL),
(13, '2012-10-22 11:00:18', NULL, NULL, '产科', '13907390987', '呼吸机', 1, '等待接修', '', NULL),
(14, '2012-10-22 11:00:18', NULL, NULL, '产科', '13907390987', '呼吸机', 1, '等待接修', '', NULL),
(15, '2012-10-23 01:43:45', NULL, NULL, '新生儿科', '18907391987', '监护仪', 1, '等待接修', '', NULL),
(16, '2012-10-24 05:26:40', NULL, NULL, '关节骨伤外科', '13907390987', '彩超', 1, '等待接修', '', NULL),
(17, '2012-10-24 08:47:19', '2012-10-24 16:47:52', NULL, '关节骨伤外科', '15290876543', '电刀', 2, '正在维修', '', '13874973412'),
(18, '2012-10-24 09:50:38', NULL, NULL, '关节骨伤外科', '15134567809', 'X光机（500MA）', 1, '等待接修', '', NULL),
(19, '2012-10-25 11:14:34', NULL, NULL, '检验科', '13456780987', '其它设备', 1, '等待接修', '', NULL),
(20, '2012-10-25 11:16:05', '2012-10-25 19:16:41', '2012-10-25 19:16:52', '儿童重症监护室', '13907390987', '彩超', 3, '完成维修', '', '13874973412');

-- --------------------------------------------------------

--
-- 表的结构 `sbk_equipment`
--

CREATE TABLE IF NOT EXISTS `sbk_equipment` (
  `equipment_id` char(11) NOT NULL,
  `equipment_name` varchar(255) NOT NULL,
  `equipment_specification` varchar(255) NOT NULL,
  PRIMARY KEY (`equipment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sbk_equipment`
--

INSERT INTO `sbk_equipment` (`equipment_id`, `equipment_name`, `equipment_specification`) VALUES
('500002-016', '乐普国产药物支架（国产）[限额]', 'y'),
('500471-012', '一次性正压无针连接式留置针（国产）[乙10%]', 'x');

-- --------------------------------------------------------

--
-- 表的结构 `sbk_member`
--

CREATE TABLE IF NOT EXISTS `sbk_member` (
  `member_id` char(11) CHARACTER SET utf8mb4 NOT NULL,
  `member_password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sbk_member`
--

INSERT INTO `sbk_member` (`member_id`, `member_password`) VALUES
('13874973412', '3412'),
('13907390739', '0739');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
