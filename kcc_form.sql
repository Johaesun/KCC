-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-09-28 16:47
-- 서버 버전: 10.1.16-MariaDB
-- PHP 버전: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `kcc`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `kcc_form`
--

CREATE TABLE `kcc_form` (
  `name_Ko` varchar(225) NOT NULL,
  `name_En` varchar(225) NOT NULL,
  `birth_Year` int(100) NOT NULL,
  `birth_Month` int(100) NOT NULL,
  `birth_Day` int(100) NOT NULL,
  `id` varchar(225) NOT NULL,
  `pw` varchar(225) NOT NULL,
  `pw_Re` varchar(225) NOT NULL,
  `number_1` int(100) NOT NULL,
  `number_2` int(100) NOT NULL,
  `number_3` int(100) NOT NULL,
  `phonNum_1` int(100) NOT NULL,
  `phonNum_2` int(100) NOT NULL,
  `phonNum_3` int(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `home_post` int(100) NOT NULL,
  `home_post2` int(100) NOT NULL,
  `home_address1` int(100) NOT NULL,
  `home_address2` int(100) NOT NULL,
  `stay` varchar(100) NOT NULL,
  `work_name` varchar(100) NOT NULL,
  `work_kinds` varchar(100) NOT NULL,
  `work_spot` varchar(100) NOT NULL,
  `work_post1` int(100) NOT NULL,
  `work_post2` int(100) NOT NULL,
  `work_address1` int(100) NOT NULL,
  `work_address2` int(100) NOT NULL,
  `work_number1` int(100) NOT NULL,
  `work_number2` int(100) NOT NULL,
  `work_number3` int(100) NOT NULL,
  `fax_number1` int(100) NOT NULL,
  `fax_number2` int(100) NOT NULL,
  `fax_number3` int(100) NOT NULL,
  `wed` varchar(100) NOT NULL,
  `wed_year` int(100) NOT NULL,
  `wed_month` int(100) NOT NULL,
  `wed_day` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `kcc_form`
--
ALTER TABLE `kcc_form`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
