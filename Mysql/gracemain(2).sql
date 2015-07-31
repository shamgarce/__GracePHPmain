-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-07-31 18:10:19
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `dy_user`
--

INSERT INTO `dy_user` (`uid`, `uname`, `tname`, `pwd`, `groupid`, `authkey`, `accessToken`, `logtime`, `logip`, `enable`, `regtime`) VALUES
(16, 'irones', '杨俊', 'irones', 0, '', '', 192168, '192.168.1.200', 1, 1438159637),
(17, 'iron123', '', 'iron2es', 0, '', '', 0, '', 0, 1436146751),
(18, 'Avatarar', '', 'avatarar', 0, '', '', 1436322516, '192.168.1.200', 1, 1436147014),
(19, 'irones2', '洋洋2', 'irones2', 0, NULL, NULL, NULL, NULL, 1, NULL),
(20, '12', '12', '123123123', 0, NULL, NULL, NULL, NULL, 1, NULL),
(21, '12123', '12', '123123123', 0, NULL, NULL, NULL, NULL, 1, NULL),
(22, '1212312', '12', '123123123', 23, NULL, NULL, NULL, NULL, 1, NULL);

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

--
-- 转存表中的数据 `g_accessrules`
--

INSERT INTO `g_accessrules` (`id`, `uname`, `rid`, `deny`, `allow`) VALUES
(1, 'irones', 1, 1, 1),
(2, '2', 2, 2, 0),
(3, '2', 2, 2, 2);

-- --------------------------------------------------------

--
-- 表的结构 `g_book`
--

CREATE TABLE IF NOT EXISTS `g_book` (
  `bookid` int(11) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(16) CHARACTER SET utf8 DEFAULT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`bookid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `g_book`
--

INSERT INTO `g_book` (`bookid`, `bookname`, `enable`) VALUES
(1, '基础', 1),
(2, '进阶', 1);

-- --------------------------------------------------------

--
-- 表的结构 `g_booknode`
--

CREATE TABLE IF NOT EXISTS `g_booknode` (
  `nodeid` int(11) NOT NULL AUTO_INCREMENT,
  `bookid` int(11) DEFAULT NULL,
  `preid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `nr` text CHARACTER SET utf8,
  `nrcode` text CHARACTER SET utf8,
  `sort` int(11) DEFAULT '0',
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`nodeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `g_booknode`
--

INSERT INTO `g_booknode` (`nodeid`, `bookid`, `preid`, `title`, `nr`, `nrcode`, `sort`, `enable`) VALUES
(1, 1, 0, 'titleccc', ' > ?????????????????????????????\n\n        - ?? linux\n        - ???? Apache\n        - php?? php5.4+\n        - cms?? microphp\n        - ???? model\n        - ????\n\n?????????[??]\n\n        - ??\n??????????????\n        - ??\n        - ???\n        - ??\n        - ????\n        - ????\n        - debug\n        - ????\n- ROUTE\n- user\n > 为了更好运用这些数据，对这些数据进行分层整理：分为如下几层\n\n        - 系统 linux\n        - 发布工具 Apache\n        - php相关 php5.4+\n        - cms相关 microphp\n        - 模块相关 model\n        - 其他设定\n\n主要收集的数据包括[详细]\n\n        - 时间\n入口时间，当前时间，结束时间\n        - 时区\n        - 配置点\n        - 目录\n        - 入口参数\n        - 行为判断\n        - debug\n        - 输出【】\n- ROUTE\n- user\n', '>Seter\\Config\\Default.php\n\n    $config = [\n        //mysql\n        ''mysql'' => [\n            ''default'' => [\n                "hostname"  =>  ''127.0.0.1'',\n                "username"  =>  ''ns'',\n                "password"  =>  ''nsgd012003'',\n                "database"  =>  ''ns'',\n                "charset"   =>  ''utf8'',\n                "pconnect"  =>  ''0'',\n                "quiet"     =>  ''0''\n            ],\n        ],\n        ''ry'' => [\n        ],\n        ''db'' => [\n        ],\n        ''mdb'' => [\n        ],\n        ''request'' => [\n        ],\n        ''table'' => [\n        ],\n        ''user'' => [\n        ],\n        ''doc'' => [\n        ],\n    ];\n    \n    return $config;\n\n>调用\n\n    \\Seter\\$Seter->Config', 99, 1),
(2, 1, 0, 'title', '123nr', '>PSR-0 autoloader\n\n    public static function registerAutoloader()\n    {\n        spl_autoload_register(__NAMESPACE__ . "\\\\Seter::autoload");\n    }\n\n    public static function autoload($className)\n    {\n        $thisClass = str_replace(__NAMESPACE__ . ''\\\\'', '''', __CLASS__);\n        $baseDir = __DIR__;\n        if (substr($baseDir, -strlen($thisClass)) === $thisClass) {\n            $baseDir = substr($baseDir, 0, -strlen($thisClass));\n        }\n        $className = ltrim($className, ''\\\\'');\n        $fileName = $baseDir;\n        $namespace = '''';\n        if ($lastNsPos = strripos($className, ''\\\\'')) {\n            $namespace = substr($className, 0, $lastNsPos);\n            $className = substr($className, $lastNsPos + 1);\n            $fileName .= str_replace(''\\\\'', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;\n        }\n        $fileName .= str_replace(''_'', DIRECTORY_SEPARATOR, $className) . ''.php'';\n        if (file_exists($fileName)) {\n            require $fileName;\n        }\n    }\n\n>调用\n\n    \\Seter\\Seter::registerAutoloader();     //PSR-0', 0, 1),
(3, 1, 1, 'title', '123nr', '123code', 0, 1),
(4, 1, 1, 'title', '123nr', '123code', 0, 1),
(5, 1, 1, 'title', '123nr', '123code', 0, 1),
(6, 1, 1, 'title', '123nr', '123code', 0, 1),
(7, 1, 1, 'title', '123nr', '123code', 0, 1),
(8, 1, 1, 'title', '123nr', '123code', 0, 1),
(9, 1, 1, 'title', '123nr', '123code', 0, 1),
(10, 1, 1, 'title', '123nr', '123code', 0, 1),
(11, 1, 1, 'title', '123nr', '123code', 0, 1),
(12, 1, 1, 'title', '123nr', '123code', 0, 1),
(13, 1, 1, 'title', '123nr', '123code', 0, 1),
(14, 1, 2, 'title', '123nr', '123code', 0, 1),
(15, 1, 2, 'title', '123nr', '123code', 0, 1),
(16, 1, 2, 'title', '123nr', '123code', 0, 1),
(17, 1, 2, 'title', '123nr', '123code', 0, 1),
(18, 1, 2, 'title', '123nr', '123code', 0, 1),
(19, 1, 2, 'title', '123nr', '123code', 0, 1),
(20, 1, 2, 'title', '123nr', '123code', 0, 1),
(21, 1, 2, 'title', '123nr', '123code', 0, 1),
(22, 1, 2, 'title', '123nr', '123code', 0, 1),
(23, 1, 2, 'title', '123nr', '123code', 0, 1),
(24, 1, 2, 'title', '123nr', '123code', 0, 1),
(25, 1, 2, 'title', '123nr', '123code', 0, 1),
(26, 1, 2, 'title', '123nr', '123code', 0, 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `g_group`
--

INSERT INTO `g_group` (`groupid`, `groupname`, `groupchr`, `sort`, `enable`) VALUES
(21, '1', '2', 3, 1),
(22, '1', '2', 3, 1),
(23, '11', '22', 33, 1),
(24, '11a', '22a', 331, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `g_rulelib`
--

INSERT INTO `g_rulelib` (`rule_id`, `rule_group`, `rule_name`, `rule_dis`, `rule_module`, `rule_controller`, `rule_action`, `sort`, `enable`) VALUES
(1, '', '', NULL, 's', 'home', 'main', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
