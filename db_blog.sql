-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2020 年 12 月 24 日 11:58
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL,
  `ausername` varchar(20) DEFAULT NULL,
  `apassword` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `admin`
--

INSERT INTO `admin` (`aid`, `ausername`, `apassword`) VALUES
(4, 'test', '123'),
(0, '123', '123');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `create_time` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `article_id`, `user_id`, `content`, `create_time`) VALUES
(1, 21, 7, '666', '0000-00-00'),
(0, 1, 2, 'ChongQing', '0000-00-00'),


-- --------------------------------------------------------

--
-- 表的结构 `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `pid` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` char(1) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `intime` int(11) DEFAULT NULL,
  `uptime` int(11) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `page`
--

INSERT INTO `page` (`pid`, `title`, `content`, `author`, `intime`, `uptime`) VALUES
(517, 'shui', '是', '是啊', 132, 123),
(1, '111', '<', '222', 1608722047, 1608730189),
(0, '111', '<', 'sss', 1608730256, 0);

-- --------------------------------------------------------

--
-- 表的结构 `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `sid` int(11) DEFAULT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `key` varchar(50) DEFAULT NULL,
  `val` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `setting`
--

INSERT INTO `setting` (`sid`, `cname`, `key`, `val`) VALUES
(1, '标题', 'title', 'BLOG'),
(2, '简介', 'intro', '个人博客'),
(3, '分页数量', 'pagenum', '10');
