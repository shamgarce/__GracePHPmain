-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-08-10 13:27:47
-- 服务器版本： 5.5.40
-- PHP Version: 5.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gracemain`
--

-- --------------------------------------------------------

--
-- 表的结构 `dy_user`
--

CREATE TABLE IF NOT EXISTS `dy_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(32) NOT NULL,
  `tname` varchar(32) DEFAULT NULL,
  `pwd` varchar(32) DEFAULT NULL,
  `groupid` int(11) DEFAULT '0',
  `authkey` varchar(64) DEFAULT NULL,
  `accessToken` varchar(64) DEFAULT NULL,
  `logtime` int(11) DEFAULT NULL,
  `logip` varchar(32) DEFAULT NULL,
  `enable` tinyint(1) DEFAULT '1',
  `regtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `enable` (`enable`),
  KEY `groupid` (`groupid`),
  KEY `uname` (`uname`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

-- --------------------------------------------------------

--
-- 表的结构 `g_accessrules`
--

CREATE TABLE IF NOT EXISTS `g_accessrules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(64) NOT NULL,
  `rid` int(11) NOT NULL,
  `deny` int(2) NOT NULL,
  `allow` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uname` (`uname`),
  KEY `rid` (`rid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- 表的结构 `g_basicmsg`
--

CREATE TABLE IF NOT EXISTS `g_basicmsg` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NO` int(11) NOT NULL,
  `NAME` varchar(45) DEFAULT NULL,
  `SEX` char(1) DEFAULT 'F',
  `AGE` tinyint(3) DEFAULT '0',
  `FLAG` tinyint(4) DEFAULT '0',
  `starttime` datetime DEFAULT '2000-01-01 00:00:01',
  `stoptime` datetime DEFAULT '2000-01-01 00:00:01',
  `allbeat` int(11) DEFAULT '0',
  `maxHR` smallint(3) DEFAULT '0',
  `minHR` smallint(3) DEFAULT '0',
  `meanHR` smallint(3) DEFAULT '0',
  `validbeat` int(11) DEFAULT '0',
  `invalidbeat` int(11) DEFAULT '0',
  `diag1` int(11) DEFAULT '0',
  `diag2` int(11) DEFAULT '0',
  `diag3` int(11) DEFAULT '0',
  `diag4` int(11) DEFAULT '0',
  `diag5` int(11) DEFAULT '0',
  `diag6` int(11) DEFAULT '0',
  `diag7` int(11) DEFAULT '0',
  `diag8` int(11) DEFAULT '0',
  `diag9` int(11) DEFAULT '0',
  `diag10` int(11) DEFAULT '0',
  `diag11` int(11) DEFAULT '0',
  `diag12` int(11) DEFAULT '0',
  `diag13` int(11) DEFAULT '0',
  `diag14` int(11) DEFAULT '0',
  `diag15` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- 表的结构 `g_book`
--

CREATE TABLE IF NOT EXISTS `g_book` (
  `bookid` int(11) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(16) DEFAULT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`bookid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- 表的结构 `g_booknode`
--

CREATE TABLE IF NOT EXISTS `g_booknode` (
  `nodeid` int(11) NOT NULL AUTO_INCREMENT,
  `bookid` int(11) DEFAULT NULL,
  `preid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(64) DEFAULT NULL,
  `nr` text,
  `nrcode` text,
  `sort` int(11) DEFAULT '0',
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`nodeid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

-- --------------------------------------------------------

--
-- 表的结构 `g_group`
--

CREATE TABLE IF NOT EXISTS `g_group` (
  `groupid` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(32) DEFAULT NULL,
  `groupchr` varchar(16) DEFAULT NULL,
  `sort` int(5) NOT NULL DEFAULT '0',
  `enable` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

-- --------------------------------------------------------

--
-- 表的结构 `g_log`
--

CREATE TABLE IF NOT EXISTS `g_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(16) DEFAULT '0',
  `msg` varchar(16) DEFAULT NULL,
  `controller` varchar(16) DEFAULT NULL,
  `action` varchar(16) DEFAULT NULL,
  `time` text,
  `_GET` text,
  `_POST` text,
  `_FILE` text,
  `router` text,
  `sign` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

-- --------------------------------------------------------

--
-- 表的结构 `g_mea`
--

CREATE TABLE IF NOT EXISTS `g_mea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tm` int(11) NOT NULL,
  `user` varchar(32) NOT NULL,
  `fname` varchar(64) NOT NULL,
  `enable` int(1) NOT NULL DEFAULT '1',
  `jx` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- 表的结构 `g_relation`
--

CREATE TABLE IF NOT EXISTS `g_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname1` varchar(11) NOT NULL,
  `uname2` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uname1` (`uname1`),
  KEY `uname2` (`uname2`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

-- --------------------------------------------------------

--
-- 表的结构 `g_rulelib`
--

CREATE TABLE IF NOT EXISTS `g_rulelib` (
  `rule_id` int(11) NOT NULL AUTO_INCREMENT,
  `rule_group` varchar(64) NOT NULL,
  `rule_name` varchar(64) NOT NULL,
  `rule_dis` text,
  `rule_module` varchar(64) NOT NULL,
  `rule_controller` varchar(64) NOT NULL,
  `rule_action` varchar(64) NOT NULL,
  `sort` int(3) NOT NULL DEFAULT '0',
  `enable` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rule_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `g_userapi`
--

CREATE TABLE IF NOT EXISTS `g_userapi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `v` varchar(32) DEFAULT NULL,
  `api` varchar(128) DEFAULT NULL,
  `dis` varchar(256) DEFAULT NULL,
  `request` text,
  `response` text,
  `enable` tinyint(1) NOT NULL,
  `debug` tinyint(1) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `type` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
