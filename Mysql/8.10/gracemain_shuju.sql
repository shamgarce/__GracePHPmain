-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-08-10 13:28:06
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

--
-- 转存表中的数据 `dy_user`
--

INSERT INTO `dy_user` (`uid`, `uname`, `tname`, `pwd`, `groupid`, `authkey`, `accessToken`, `logtime`, `logip`, `enable`, `regtime`) VALUES
(16, 'irones', '杨俊', 'irones', 0, '', '', 192168, '192.168.1.200', 1, 1438588854),
(17, 'iron123', '', 'iron2es', 0, '', '', 0, '', 1, 1436146751),
(18, 'Avatarar', '', 'avatarar', 0, '', '', 1436322516, '192.168.1.200', 1, 1436147014),
(19, 'irones2', '洋洋2', 'irones2', 0, NULL, NULL, NULL, NULL, 1, NULL),
(20, '12', '12', '123123123', 0, NULL, NULL, NULL, NULL, 1, NULL),
(21, '12123', '12', '123123123', 0, NULL, NULL, NULL, NULL, 1, NULL),
(28, 'tetetete', 'tetetete23333', 'tetetete', 34, NULL, NULL, NULL, NULL, 1, NULL),
(29, 'tetetete2', 'tetetete2', 'tetetete', 33, NULL, NULL, NULL, NULL, 1, NULL),
(30, '123123123', NULL, '123123123', 999, NULL, NULL, NULL, NULL, 1, 1438766218);

--
-- 转存表中的数据 `g_accessrules`
--

INSERT INTO `g_accessrules` (`id`, `uname`, `rid`, `deny`, `allow`) VALUES
(1, 'irones', 1, 1, 1),
(2, '2', 2, 2, 0),
(3, '2', 2, 2, 2);

--
-- 转存表中的数据 `g_basicmsg`
--

INSERT INTO `g_basicmsg` (`ID`, `NO`, `NAME`, `SEX`, `AGE`, `FLAG`, `starttime`, `stoptime`, `allbeat`, `maxHR`, `minHR`, `meanHR`, `validbeat`, `invalidbeat`, `diag1`, `diag2`, `diag3`, `diag4`, `diag5`, `diag6`, `diag7`, `diag8`, `diag9`, `diag10`, `diag11`, `diag12`, `diag13`, `diag14`, `diag15`) VALUES
(1, 1111111, 'wang', 'F', 33, 100, '2015-07-16 01:01:01', '2015-07-18 01:01:01', 200000, 111, 44, 77, 190000, 10000, 44, 6, 7, 4, 44, 44, 55, 88, 8, 9, 1, 3, 4, 4, 6),
(2, 2222222, 'li', 'M', 22, 1, '2015-07-16 01:01:01', '2015-07-16 21:01:01', 80000, 222, 33, 55, 70000, 10000, 5, 7, 9, 0, 7, 5, 7, 7, 7, 7, 7, 7, 7, 7, 7),
(3, 2222223, 'ZHAO', 'M', 22, 1, '2015-07-16 01:01:01', '2015-07-16 21:01:01', 80000, 222, 33, 55, 70000, 10000, 5, 7, 9, 0, 7, 5, 7, 7, 7, 7, 7, 7, 7, 7, 7),
(4, 2222224, 'Cccc', 'M', 22, 1, '2015-07-16 01:01:01', '2015-07-16 21:01:01', 80000, 222, 33, 55, 70000, 10000, 5, 7, 9, 0, 7, 5, 7, 7, 7, 7, 7, 7, 7, 7, 7),
(5, 333333, 'Cccc', 'F', 0, 0, '2000-01-01 00:00:01', '2000-01-01 00:00:01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- 转存表中的数据 `g_book`
--

INSERT INTO `g_book` (`bookid`, `bookname`, `enable`) VALUES
(1, '基础', 1),
(2, '进阶', 1);

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

--
-- 转存表中的数据 `g_group`
--

INSERT INTO `g_group` (`groupid`, `groupname`, `groupchr`, `sort`, `enable`) VALUES
(33, '12224', '12324', 12424, 1),
(34, '管理员组', 'admin', 99, 1);

--
-- 转存表中的数据 `g_log`
--

INSERT INTO `g_log` (`id`, `code`, `msg`, `controller`, `action`, `time`, `_GET`, `_POST`, `_FILE`, `router`, `sign`) VALUES
(38, '', '', 'friend', 'search', 'a:2:{s:6:"timebe";d:1438758289.3618391;s:6:"timecu";i:1438758289;}', 'a:0:{}', 'a:2:{s:8:"username";s:6:"user02";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:6:"friend";s:6:"Action";s:6:"search";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/friend/search";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(39, '', '', 'friend', 'search', 'a:2:{s:6:"timebe";d:1438758291.0909369;s:6:"timecu";i:1438758291;}', 'a:0:{}', 'a:2:{s:8:"username";s:6:"user02";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:6:"friend";s:6:"Action";s:6:"search";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/friend/search";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(40, '', '', 'friend', 'search', 'a:2:{s:6:"timebe";d:1438758395.745923;s:6:"timecu";i:1438758395;}', 'a:0:{}', 'a:2:{s:8:"username";s:6:"user02";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:6:"friend";s:6:"Action";s:6:"search";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/friend/search";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(41, '', '', 'friend', 'search', 'a:2:{s:6:"timebe";d:1438759490.9473841;s:6:"timecu";i:1438759490;}', 'a:0:{}', 'a:2:{s:8:"username";s:6:"user02";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:6:"friend";s:6:"Action";s:6:"search";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/friend/search";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(42, '', '', 'friend', 'search', 'a:2:{s:6:"timebe";d:1438759491.91944;s:6:"timecu";i:1438759491;}', 'a:0:{}', 'a:2:{s:8:"username";s:6:"user02";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:6:"friend";s:6:"Action";s:6:"search";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/friend/search";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(43, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438764629.070668;s:6:"timecu";i:1438764629;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(44, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438764651.0927739;s:6:"timecu";i:1438764651;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(45, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438764654.8132401;s:6:"timecu";i:1438764654;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(46, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438764659.9646339;s:6:"timecu";i:1438764659;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(47, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438764664.1258719;s:6:"timecu";i:1438764664;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(48, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438764675.247508;s:6:"timecu";i:1438764675;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(49, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438764689.2773099;s:6:"timecu";i:1438764689;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(50, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438764717.437921;s:6:"timecu";i:1438764717;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(51, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438764740.898263;s:6:"timecu";i:1438764740;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(52, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438764744.1494491;s:6:"timecu";i:1438764744;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(53, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438764761.8394611;s:6:"timecu";i:1438764761;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(54, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438764779.7744861;s:6:"timecu";i:1438764779;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(55, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438764823.8300059;s:6:"timecu";i:1438764823;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(56, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438764835.469672;s:6:"timecu";i:1438764835;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(57, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438765020.0232279;s:6:"timecu";i:1438765020;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(58, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438765030.3028159;s:6:"timecu";i:1438765030;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(59, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438765041.847476;s:6:"timecu";i:1438765041;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(60, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438765048.1328361;s:6:"timecu";i:1438765048;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(61, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438765134.996959;s:6:"timecu";i:1438765134;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(62, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438765634.6302791;s:6:"timecu";i:1438765634;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(63, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438765650.1180811;s:6:"timecu";i:1438765650;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(64, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438765653.555932;s:6:"timecu";i:1438765653;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(65, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438765712.397841;s:6:"timecu";i:1438765712;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(66, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438765729.5117011;s:6:"timecu";i:1438765729;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(67, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438765790.990726;s:6:"timecu";i:1438765790;}', 'a:0:{}', 'a:3:{s:8:"username";s:0:"";s:3:"pwd";s:0:"";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(68, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438765817.7203071;s:6:"timecu";i:1438765817;}', 'a:0:{}', 'a:3:{s:8:"username";s:9:"123123123";s:3:"pwd";s:9:"123123123";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}'),
(69, '', '', 'user', 'register', 'a:2:{s:6:"timebe";d:1438766218.4196351;s:6:"timecu";i:1438766218;}', 'a:0:{}', 'a:3:{s:8:"username";s:9:"123123123";s:3:"pwd";s:9:"123123123";s:8:"type_cv1";s:16:"javascript_debug";}', 'a:0:{}', 'a:7:{s:6:"Module";s:1:"v";s:10:"Controller";s:4:"user";s:6:"Action";s:8:"register";s:10:"Action_ext";s:4:"post";s:6:"ispost";s:4:"post";s:5:"_path";s:15:"v/user/register";s:7:"params_";s:0:"";}', 'a:6:{s:4:"salt";s:4:"SALT";s:9:"timestamp";N;s:8:"deviceid";N;s:9:"signature";N;s:4:"user";N;s:4:"sign";b:0;}');

--
-- 转存表中的数据 `g_mea`
--

INSERT INTO `g_mea` (`id`, `tm`, `user`, `fname`, `enable`, `jx`) VALUES
(10, 1438239955, 'miss', './A/upload/v6/miss/201507/1438239955.mea', 1, 0),
(11, 1438239966, 'zhaiyingpeng', './A/upload/v6/zhaiyingpeng/201507/1438239966.mea', 1, 0),
(8, 1437542521, 'Cccc', './A/upload//v6/Cccc/201507/1437542521.mea', 1, 1),
(9, 1437542563, 'Cccc', './A/upload/v6/Cccc/201507/1437542563.mea', 1, 0),
(12, 1438246644, 'zhaiyingpeng', './A/upload/v6/zhaiyingpeng/201507/1438246644.mea', 1, 0),
(13, 1438394810, 'zhaiyingpeng', './A/upload/v6/zhaiyingpeng/201508/1438394810.mea', 1, 0),
(14, 1438757485, 'zhaiyingpeng', './A/upload/v6/zhaiyingpeng/201508/1438757485.mea', 1, 0),
(15, 1438758553, 'zhaiyingpeng', './A/upload/v6/zhaiyingpeng/201508/1438758553.mea', 1, 0);

--
-- 转存表中的数据 `g_relation`
--

INSERT INTO `g_relation` (`id`, `uname1`, `uname2`) VALUES
(1, 'Cccc', 'Cccc'),
(7, 'Cccc', 'Bbbb'),
(11, 'user01', 'user02'),
(12, 'Xxxx', 'Bbbb'),
(13, 'Bbbb', 'Kkkkk'),
(14, 'Cccc', 'Mmmm'),
(15, 'Baba', 'Cccc'),
(16, 'Cccc', 'Lp'),
(17, 'Lp', 'Ml'),
(18, 'Ml', 'Kl'),
(19, 'Lz', 'Cccc'),
(20, 'user01', 'user02'),
(21, '123', 'Yanmin'),
(22, 'Bbbb', 'Fffff'),
(23, 'dog', 'Cccc'),
(24, 'Zp', 'Cccc'),
(25, 'Zp', 'Lz'),
(26, 'Lz', 'Mmmm'),
(27, 'Cccc', 'Aq'),
(28, 'Cccc', 'Aq'),
(29, 'Cccc', 'Aq'),
(30, 'Aq', 'Cccc'),
(31, 'Aq', 'Cccc'),
(32, 'Rr', 'Cccc'),
(33, 'Ti', 'Ty'),
(34, 'Cccc', 'Ti'),
(35, 'Ti', 'Mmmm'),
(36, 'Ti', 'Mmmm'),
(37, 'Ti', 'Mmmm'),
(38, 'Ti', 'Mmmm'),
(39, 'Mmmm', 'Ti'),
(40, 'Ti', 'Mmmm'),
(41, 'Ti', 'Mmmm'),
(42, 'Ti', 'Mmmm'),
(43, 'Ti', 'Mmmm'),
(44, 'Ti', 'Mmmm'),
(45, 'Wangquan', 'Cccc'),
(46, 'user01', 'user02'),
(47, 'user01', 'user02');

--
-- 转存表中的数据 `g_rulelib`
--

INSERT INTO `g_rulelib` (`rule_id`, `rule_group`, `rule_name`, `rule_dis`, `rule_module`, `rule_controller`, `rule_action`, `sort`, `enable`) VALUES
(1, '', '', NULL, 's', 'home', 'main', 0, 1);

--
-- 转存表中的数据 `g_userapi`
--

INSERT INTO `g_userapi` (`id`, `name`, `v`, `api`, `dis`, `request`, `response`, `enable`, `debug`, `sort`, `type`) VALUES
(1, '查找好友', 'v', 'friend/search', '模块: 查找好友\n说明 :用户根据用户id查找好友，返回具有改id的用户\n参数 :username用户名\n成功 :\n失败 :', '{\n    "username": "user02"\n}', '{\n    "code": 200,\n    "msg": "succeed",\n    "data": {\n        "username": "li",\n        "userid": "li",\n        "portrait": "http://hebei.sinaimg.cn/2013/0104/U7459P1275DT20130104173656.jpg"\n    }\n}', 1, 0, 9999, 'GET'),
(2, '添加好友', 'v', 'friend/add', '模块 :添加好友\n说明 :\n参数 :targetid将要添加的好友的id,message添加好友附加的内容\n成功 :如果该好友列表中没有这个好友则发出好友添加请求，并反馈“添加好友请求发送成功”，否则其他提醒内容\n失败 :', '{"username":"user01",\n    "targetname":"user02"\n}', '{\n    "code": 200,\n    "msg": "succeed",\n    "data": "添加好友请求发送成功"\n}', 0, 0, 9999, 'GET'),
(3, '获取好友列表', 'v', 'friend/getfriends', '模块 :获取好友列表\n说明 :\n参数 :\n成功 :\n失败 :', '{\n    "username": "user01"\n}', '{\n    "code": 200,\n    "msg": "succeed",\n    "data": [\n         {\n            "userid": "zhang",\n            "username": "zhang",\n            "portrait": "http://img.zjolcdn.com/pic/0/06/58/52/6585256_962155.jpg"\n        },\n        {\n            "userid": "user03",\n            "username": "王五",\n            "portrait": "http://img.zjolcdn.com/pic/0/06/58/52/6585256_962155.jpg"\n        },\n        {\n            "userid": "user04",\n            "username": "麻子",\n            "portrait": "http://img.zjolcdn.com/pic/0/06/58/52/6585255_749157.jpg"\n        },\n        {\n            "userid": "user05",\n            "username": "高雷",\n            "portrait": "http://pic.159.com/desk/user/2012/10/26/Jiker201295211551156.jpg"\n        },\n        {\n            "userid": "user06",\n            "username": "苏醒",\n            "portrait": "http://img2.3lian.com/2014/f4/201/d/85.jpg"\n        },\n        {\n            "userid": "user07",\n            "username": "沙宝亮",\n            "portrait": "http://img.dapixie.com/uploads/allimg/111211/1-111211141406.jpg"\n        }\n    ]\n}', 1, 0, 9999, 'GET'),
(4, '获取用户token值', 'v', 'user/gettoken', '模块 :\n说明 :\n参数 :\n成功 :\n失败 :', '{\n    "username": "user01"\n}', '{\n    "code": 200,\n    "msg": "succeed",\n      "token": "nd787DeXGtYlJG9hc4enUQPdsFArjkVwRsE5q/VVOWVrtOYDQ0sqxJZogb1+7GEeueYpEnn25Dw="\n    \n}', 1, 1, 9, 'GET'),
(5, '用户获取消息队列', 'v', 'user/getmessage', '模块 :\n说明 :\n参数 :\n成功 :\n失败 :', '', '{\n    "code": 200,\n    "msg": "succeed",\n    "data": [\n        {\n            "msgtype": "1",\n            "username": "李四",\n            "userid": "user02",\n            "portrait": "http://dmimg.5054399.com/allimg/xztuku/130924007.jpg"\n        }\n    ]\n}', 1, 0, 9, 'GET'),
(6, 'friend.test', 'v', 'friend/test', '模块 :\n说明 :\n参数 :\n成功 :\n失败 :', '', '{"code":4104,"msg":"ok: wait for design ","data":"","getpost":{}}', 1, 1, -999, 'POST'),
(7, '请求对应科室的医生数据', 'v', 'docnav/hos_spec', '模块 :求医导航\n说明 :求医导航具体医院的专科医生信息\n参数 :hos_id医院id,spec_id专科id\n成功 :\n失败 :', '', '{\n    "code": 200,\n    "msg": "succeed",\n    "data": {\n"id":"0",\n"doc":[{"name":"张三","job":"专家","url":"xxxx"},{"name":"李四","job":"专家","url":"zzz"},{"name":"李四","job":"专家","url":"zzz"},{"name":"李四","job":"专家","url":"zzz"},{"name":"李四","job":"专家","url":"zzz"},{"name":"李四","job":"专家","url":"zzz"},{"name":"李四","job":"专家","url":"zzz"},{"name":"李四","job":"专家","url":"zzz"},{"name":"李四","job":"专家","url":"zzz"},{"name":"李四","job":"专家","url":"zzz"},{"name":"李四","job":"专家","url":"zzz"},{"name":"李四","job":"专家","url":"zzz"},{"name":"李四","job":"专家","url":"zzz"}]\n}\n    \n    \n}', 1, 1, -9, 'GET'),
(8, '获取专科医院排名的科室索引', 'v', 'docnav/special_list', '模块 :求医问药\n说明 :求医问药模块专科排行榜的科室索引\n参数 :\n成功 :\n失败 :', '', '{\n"code":200,\n"msg":"succeed",\n"data":{\n"department":["aa","bb","cc",\n"aa","bb","cc",\n"aa","bb","cc",\n"aa","bb","cc",\n"aa","bb","cc",\n"aa","bb","cc",\n"aa","bb","cc",\n"aa","bb","cc",\n"aa","bb","cc",\n"aa","bb","cc"]\n}\n}', 1, 1, -9, 'GET'),
(9, '获取对应科室的详细数据', 'v', 'docnav/spec_detail', '模块 :求医导航\n说明 :求医导航模块专科排名的对应科室的详细数据\n参数 :index表示对应科室的id\n成功 :\n失败 :', '', '{\n    "code": 200,\n    "msg": "succeed",\n    "data": {\n        "last": {\n            "id": "11",\n            "hospital_name": [\n                "北京大学附属肿瘤医院",\n                "第三医院"\n            ],\n            "hospital_rank": "11"\n        },\n        "rank": [\n            {\n                "id": "0",\n                "hospital_name": "复旦大学附属肿瘤医院",\n                "hospital_rank": "1",\n                "hospital_state": "不变",\n                "hospital_score": "8.8888"\n            },\n            {\n                "id": "1",\n                "hospital_name": "复旦大学附属肿瘤医院",\n                "hospital_rank": "2",\n                "hospital_state": "不变",\n                "hospital_score": "8.8888"\n            },\n            {\n                "id": "1",\n                "hospital_name": "复旦大学附属肿瘤医院",\n                "hospital_rank": "2",\n                "hospital_state": "不变",\n                "hospital_score": "8.8888"\n            },\n            {\n                "id": "1",\n                "hospital_name": "复旦大学附属肿瘤医院",\n                "hospital_rank": "2",\n                "hospital_state": "不变",\n                "hospital_score": "8.8888"\n            },\n            {\n                "id": "1",\n                "hospital_name": "复旦大学附属肿瘤医院",\n                "hospital_rank": "3",\n                "hospital_state": "不变",\n                "hospital_score": "8.8888"\n            },\n            {\n                "id": "1",\n                "hospital_name": "复旦大学附属肿瘤医院",\n                "hospital_rank": "5",\n                "hospital_state": "不变",\n                "hospital_score": "8.8888"\n            },\n            {\n                "id": "1",\n                "hospital_name": "复旦大学附属肿瘤医院",\n                "hospital_rank": "6",\n                "hospital_state": "不变",\n                "hospital_score": "8.8888"\n            },\n            {\n                "id": "1",\n                "hospital_name": "复旦大学附属肿瘤医院",\n                "hospital_rank": "2",\n                "hospital_state": "不变",\n                "hospital_score": "8.8888"\n            }\n        ]\n    }\n}', 1, 1, -9, 'GET'),
(10, '获取最佳医院排名', 'v', 'docnav/best_hosptail_list', '模块 :求医导航模块\n说明 :获取最佳医院排名及对应医院的科室排名\n参数 :缺省为获取最佳医院排名\n成功 :\n失败 :', '', '{\n"code":200,\n"msg":"succeed",\n"data":\n\n[{\n"id":"0",\n"hospital_name":"复旦大学附属肿瘤医院",\n"hospital_rank":"1",\n"hospital_spec":"5.5",\n"hospital_edu":"11",\n"hospital_score":"8.8888"\n\n},\n{\n"id":"0",\n"hospital_name":"复旦大学附属肿瘤医院",\n"hospital_rank":"2",\n"hospital_spec":"5.5",\n"hospital_edu":"11",\n"hospital_score":"8.8888"\n},\n{\n"id":"0",\n"hospital_name":"复旦大学附属肿瘤医院",\n"hospital_rank":"2",\n"hospital_spec":"5.5",\n"hospital_edu":"11",\n"hospital_score":"8.8888"\n},\n{\n"id":"0",\n"hospital_name":"复旦大学附属肿瘤医院",\n"hospital_rank":"2",\n"hospital_spec":"5.5",\n"hospital_edu":"11",\n"hospital_score":"8.8888"\n},\n{\n"id":"0",\n"hospital_name":"复旦大学附属肿瘤医院",\n"hospital_rank":"2",\n"hospital_spec":"5.5",\n"hospital_edu":"11",\n"hospital_score":"8.8888"\n},\n{\n"id":"0",\n"hospital_name":"复旦大学附属肿瘤医院",\n"hospital_rank":"2",\n"hospital_spec":"5.5",\n"hospital_edu":"11",\n"hospital_score":"8.8888"\n},\n{\n"id":"0",\n"hospital_name":"复旦大学附属肿瘤医院",\n"hospital_rank":"2",\n"hospital_spec":"5.5",\n"hospital_edu":"11",\n"hospital_score":"8.8888"\n},\n{\n"id":"0",\n"hospital_name":"复旦大学附属肿瘤医院",\n"hospital_rank":"2",\n"hospital_spec":"5.5",\n"hospital_edu":"11",\n"hospital_score":"8.8888"\n},\n{\n"id":"0",\n"hospital_name":"复旦大学附属肿瘤医院",\n"hospital_rank":"2",\n"hospital_spec":"5.5",\n"hospital_edu":"11",\n"hospital_score":"8.8888"\n},\n{\n"id":"0",\n"hospital_name":"复旦大学附属肿瘤医院",\n"hospital_rank":"2",\n"hospital_spec":"5.5",\n"hospital_edu":"11",\n"hospital_score":"8.8888"\n},\n{\n"id":"0",\n"hospital_name":"复旦大学附属肿瘤医院",\n"hospital_rank":"2",\n"hospital_spec":"5.5",\n"hospital_edu":"11",\n"hospital_score":"8.8888"\n}]\n}', 1, 1, -9, 'GET'),
(11, '请求某个最佳医院的详细信息', 'v', 'docnav/best_hosptail', '模块 :求医导航\n说明 :请求某个医院的详细信息.\n参数 :spec_index,为发起请求的医院id\n成功 :\n失败 :', '', '{\n    "code": 200,\n    "msg": "succeed",\n    "data": {\n        "id": "0",\n        "content": [\n            {\n                "rank_name": "第一名",\n                "rank_content": [\n                    "风湿病",\n                    "妇产科",\n                    "普通外科"\n                ]\n            },\n            {\n                "rank_name": "第二名",\n                "rank_content": [\n                    "病理科",\n                    "呼吸科",\n                    "麻醉科",\n                    "内分泌科"\n                ]\n            }\n        ]\n    }\n}', 1, 1, -9, 'GET'),
(12, '求医问药问题库', 'v', 'docnav/ask/', '模块 :求医问药\n说明 :求医问药模块问题库按照疾病名字请求数据\n参数 :diseaseName,疾病名称\n成功 :\n失败 :', '', '{\n"code":200,\n"msg":"succeed",\n"data":{\n"name":"青春痘",\n"symptom":"起了好多痘痘",\n"cause":"年青",\n"prevented":"变老",\n"asked":[\n{"question":"如何治疗0",\n"to":"不要放弃治疗0"\n},{"question":"如何治疗1",\n"to":"不要放弃治疗1"\n},{"question":"如何治疗2",\n"to":"不要放弃治疗2"\n},{"question":"如何治疗3",\n"to":"不要放弃治疗3"\n}\n]\n}\n}', 1, 1, -9, 'GET'),
(13, '院内导诊获取所有医院名字', 'v', 'docnav/hospitalguidelist', '模块 :求医导航之院内导诊\n说明 :获取所有有导航数据的医院的名字\n参数 :\n成功 :\n失败 :', '', '{\n    "code": 200,\n    "msg": "succeed",\n    "data": [\n        {\n            "name": "1北京人民医院",\n            "id": "1"\n        },\n        {\n            "name": "2北京人民医院",\n            "id": "1"\n        },\n        {\n            "name": "3北京人民医院",\n            "id": "1"\n        },\n        {\n            "name": "4北京人民医院",\n            "id": "1"\n        },\n        {\n            "name": "5北京人民医院",\n            "id": "1"\n        },\n        {\n            "name": "6北京人民医院",\n            "id": "1"\n        },\n        {\n            "name": "7北京人民医院",\n            "id": "1"\n        },\n        {\n            "name": "8北京人民医院",\n            "id": "1"\n        },\n        {\n            "name": "北京人民医院",\n            "id": "1"\n        },\n        {\n            "name": "2北京人民医院",\n            "id": "1"\n        },\n        {\n            "name": "3北京人民医院",\n            "id": "1"\n        },\n        {\n            "name": "4北京人民医院",\n            "id": "1"\n        },\n        {\n            "name": "5北京人民医院",\n            "id": "1"\n        },\n        {\n            "name": "6北京人民医院",\n            "id": "1"\n        },\n        {\n            "name": "7北京人民医院",\n            "id": "1"\n        },\n        {\n            "name": "8北京人民医院",\n            "id": "1"\n        },\n\n        {\n            "name": "北京人民医院",\n            "id": "1"\n        }, {\n            "name": "人民医院",\n            "id": "1"\n        }\n    ]\n}', 1, 1, -9, 'GET'),
(14, '获取院区分布图', 'v', 'docnav/hospitalmap', '模块 :求医导航院内导诊\n说明 :获取院区分布图\n参数 ::name医院名称\n成功 :\n失败 :', '', '{\n"code":200,\n"msg":"succeed",\n"data":{"route":"从南到北方","image":"http:192.168.0.200/mm"}\n}', 1, 1, -9, 'GET'),
(15, '获取门诊分布图', 'v', 'docnav/outpatientmap', '模块 :求医导航院内导诊\n说明 :获取门诊分布图\n参数 ::name医院名称\n成功 :\n失败 :', '', '{\n"code":200,\n"msg":"succeed",\n"data":{"route":"从南到北方","image":"http:192.168.0.200/mm"}\n}', 1, 1, -9, 'GET'),
(16, '登录', 'v', 'user/login', '模块 :登录模块\n说明 :\n参数 :username登录用户名,pwd用户密码\n成功 :\n失败 :', '{"username":"",\n"pwd":""\n}', '{\n"code":200,\n"msg":"succeed",\n"data":""\n}', 0, 0, 11111, 'GET'),
(17, '注册', 'v', 'user/register', '模块 :用户注册\n说明 :\n参数 :username用户名pwd用户密码\n成功 :\n失败 :', '{\n"username":"",\n"pwd":""\n\n}', '{"code":200,\n"msg":"succeed",\n"data":""\n}', 0, 0, 11111, 'GET'),
(18, '获取最新版本号', 'v', 'user/updateApp', '模块 :更新版本\n说明 :获取最新的app版本,url为最新版本的下载地址,version为最新版本号\n参数 :\n成功 :\n失败 :', '', '{"code":200,\n"msg":"succeed",\n"data":\n{\n"path":"http://gdown.baidu.com/data/wisegame/bd47bd249440eb5f/shenmiaotaowang2.apk",\n"version":"2.0",\n"description":"可以中大奖"\n}\n\n\n}', 1, 1, -999, 'GET'),
(19, '--------------------------------', 'v', '--------------------------------', '模块 :\n说明 :\n参数 :\n成功 :\n失败 :', '{\n"name":"zhangbo",\n"age":"23"\n}', '{\n"code":300,\n"msg":"898998899",\n"data":{\n"name":"zhangbo",\n"age":"23"\n}\n}', 0, 1, 10000, 'GET'),
(20, '保存以及更新用户个人信息', 'v', 'user/updateUserInfo', '模块 :个人信息设置\n说明 :保存以及更新个人信息\n参数 :\n"nickname":昵称,\n"name":姓名\n"gender":性别,\n"birth":生日,记录年月日,\n"stature":身高(单位cm),\n"weight":体重(单位kg)\n"region":地区\n"address":地址\n\n成功 :\n失败 :', '{\n"nickname":"zhai",\n"name":"name",\n"gender":"nan",\n"birth":"24",\n"stature":"1",\n"weight":"1",\n"region":"d",\n"address":"z"\n\n\n}', '{"code":200,\n"msg":"succeed",\n"data":""\n}', 1, 1, 11111, 'GET'),
(21, '意见反馈', 'v', 'user/feedback', '模块 :设置模块\n说明 :设置模块中的意见反馈\n参数 :content:用户反馈的内容\n成功 :\n失败 :', '{\n"content":"山东省地发斯蒂芬"\n}', '{"code":200,\n"msg":"succeed",\n"data":""\n}', 1, 0, -99, 'GET'),
(22, '获取用户信息', 'v', 'getUserInfo', '模块: 个人信息设置\n说明 :获取个人信息\n参数 :username用户名\n成功 :\n失败 :', '{\n"username":"张三"\n}', '{\n"code":200,\n"msg":"succeed",\n"data":{\n"nickname":"李白",\n"gender":"男",\n"birth":"1992.05",\n"stature":"180",\n"weight":"88"\n}\n}', 1, 1, 99, 'GET'),
(23, '修改用户密码', 'v', 'user/changepassword', '模块 :设置模块修改密码\n说明 :\n参数 :"username":用户名,\n"orgpwd":原来密码,\n"newpwd":新密码\n成功 :\n失败 :', '{"username":"张三",\n"orgpwd":"123456",\n"newpwd":"abcdefg"\n}\n', '{\n"code":200,\n"msg":"修改成功",\n"data":""\n}', 0, 0, 9, 'GET'),
(24, '获取养生文章', 'v', 'comm/healthknowledge', '模块 :获取养生文章\n说明 :\n参数 :"page":代表获取的第几页\n成功 :\n失败 :', '{\n"page":"1"\n}', '{\n    "code": 200,\n    "msg": "succeed",\n    "data": [\n        {\n            "article_id": "0010101",\n            "article_title": "别轻乎9个小征兆恐是心脏病前兆",\n            "article_detail": "现今由于医疗发达，健康饮食教育也更加普及，死于心脏疾病的人数已较过去少",\n            "article_url": "http://yidianzixun.com/n/08emCWIg/?s=9",\n            "article_author": "温州二手网",\n            "article_time": "2015-01-01"\n        },\n        {\n            "article_id": "0010102",\n            "article_title": "给心脏上道“康复险”",\n            "article_detail": "年龄不是心脏康复的障碍",\n            "article_url": "http://192.168.1.200/xx",\n            "article_author": "39健康网",\n            "article_time": "2015-01-01"\n        },\n        {\n            "article_id": "0010103",\n            "article_title": "老人勤刷牙_巧防心脏病",\n            "article_detail": "英国科学家日前发觉，口腔卫生状况不佳也会增加罹患心脏病的风险",\n            "article_url": "http://192.168.1.200/xx",\n            "article_author": "红牛养生堂",\n            "article_time": "2015-01-01"\n        }\n    ]\n}', 1, 1, -9, 'GET'),
(25, '获取心脏疾病列表', 'v', 'comm/heartdiseaselist', '模块 :健康科普\n说明 :获取疾病名字等信息的列表\n参数 :\n成功 :\n失败 :', '', '{\n    "code": 200,\n    "msg": "succeed",\n    "data": [\n        {\n            "disease_id": "h_001",\n            "disease_name": "冠心病",\n            "disease_detail": "许多冠心病发作是可以预防的",\n            "disease_url": "http://192.168.1.200/v3/comm/diseaseitem"\n        },\n        {\n            "disease_id": "h_002",\n            "disease_name": "心律不齐",\n            "disease_detail": "心律不齐小问题大反应",\n            "disease_url": "http://192.168.1.200/xx"\n        },\n        {\n            "disease_id": "h_003",\n            "disease_name": "心肌炎",\n    "disease_detail": "心肌,生命力的关键",\n            "disease_url": "http://192.168.1.200/xx"\n        },\n        {\n            "disease_id": "h_004",\n            "disease_name": "心血管",\n"disease_detail": "生命流通的通道",\n            "disease_url": "http://192.168.1.200/xx"\n        }\n    ]\n}', 1, 1, -9, 'GET'),
(26, '获取疾病的子条目', 'v', 'comm/diseaseitem', '模块 :知识模块\n说明 :获取疾病的详细条目\n参数 :disease_id要获取的疾病的id\n成功 :\n失败 :', '{\n"disease_id":"0001"\n}', '{\n    "code": 200,\n    "msg": "succeed",\n    "data": \n      [\n            {\n                "item_id": "01",\n                "item_title": "什么是冠心病发作？",\n                "item_url": "http://hao.360.cn/?a1004"\n            },\n            {\n                "item_id": "02",\n                "item_title": "引起冠心病发作和脑卒中的原因有哪些",\n                "item_url": "http://192.168.1.200"\n            },\n  {\n                "item_id": "02",\n                "item_title": "什么是冠心病发作的症状",\n                "item_url": "http://192.168.1.200"\n            }\n        ,\n{\n                "item_id": "02",\n                "item_title": "冠心病发作时怎样做",\n                "item_url": "http://192.168.1.200"\n            }\n        \n    ]\n}', 1, 1, -9, 'GET'),
(27, '获取糖尿病接口', 'v', 'comm/diabetes', '模块 :\n说明 :\n参数 :\n成功 :\n失败 :', '{\n"page":"1"\n}', '{\n    "code": 200,\n    "msg": "succeed",\n    "data": [\n        {\n            "article_id": "0010101",\n            "article_title": "糖尿病的早期症状",\n            "article_detail": "糖尿病是一组以高血糖为特征的代谢性疾病。",\n            "article_url": "http://baike.baidu.com/link?url=gQWynIzi6YldjmgmdAvjNfYWuF8FxT9Kc-l7eDIK_Rsy3RnCtb9kVJ0mzJi0fbph#2",\n            "article_author": "百科名医网",\n            "article_time": "2015-01-01"\n        },\n        {\n            "article_id": "0010102",\n            "article_title": "糖尿病的饮食治疗",\n            "article_detail": "糖尿病的饮食是很重要的，这也是很多患者都知道的问题.",\n            "article_url": "http://tnb.xywy.com/zhiliao/698037.html",\n            "article_author": "寻医问药社区",\n            "article_time": "2015-01-01"\n        },\n        {\n            "article_id": "0010103",\n            "article_title": "糖尿病的自我疗法",\n            "article_detail": "糖尿病的发病原因是因为患者身体内血糖过高，胰岛素是身体内控制、消耗血糖的唯一有效激素。",\n            "article_url": "http://jingyan.baidu.com/article/375c8e19a2d33b25f3a22944.html",\n            "article_author": "糖尿病",\n            "article_time": "2015-01-01"\n        },\n {\n            "article_id": "0010104",\n            "article_title": "糖尿病的最佳疗法",\n            "article_detail": "糖尿病的发病原因是因为患者身体内血糖过高，胰岛素是身体内控制、消耗血糖的唯一有效激素。",\n            "article_url":"http://tnb.xywy.com/teseliaofa/808026.html",\n            "article_author": "糖尿病",\n            "article_time": "2015-01-01"\n        }\n    ]\n}', 1, 1, -9, 'GET'),
(28, '获取糖尿病专家建议', 'v', 'comm/expertdiabetes', '模块 :\n说明 :\n参数 :\n成功 :\n失败 :', '{\n"page":"1"\n}', '{\n    "code": 200,\n    "msg": "succeed",\n    "data": [\n        {\n            "article_id": "0010101",\n            "article_title": "糖尿病并发症有哪些，怎么预防",\n            "article_detail": "关于糖尿病的危害可以说很多人都知道晚期的时候就很难治愈了，所以预防称为了糖尿病患者的主要活动项目。",\n            "article_url": "http://jingyan.baidu.com/article/e52e36158991b440c60c51f1.html",\n            "article_author": "保健养生",\n            "article_time": "2015-01-01"\n        },\n        {\n            "article_id": "0010102",\n            "article_title": "糖尿病酮症酸中毒 规范治疗五要点”",\n            "article_detail": "糖尿病酮症酸中毒是由于血糖控制差而发生的一种非常严重的情况，糖尿病患者能够充分认识到这一点，重视血糖的控制，是预防糖尿病酮症酸中毒发生的根本措施。",\n            "article_url": "http://www.haodf.com/jibing/zhuanti/tangniaobing.htm",\n            "article_author": "专家访谈",\n            "article_time": "2015-01-01"\n        },\n        {\n            "article_id": "0010103",\n            "article_title": "眼睛干涩 小心糖尿病视网膜病变",\n            "article_detail": "糖尿病视网膜病变（简称糖网）是糖尿病眼病中最严重的并发症，也是致盲的重要原因之一，在各种致盲眼病中约占8%",\n            "article_url": "http://www.haodf.com/jibing/zhuanti/tangniaobing/lable.htm?&page=2",\n            "article_author": "专家访谈",\n            "article_time": "2015-01-01"\n        }\n    ]\n}', 1, 1, -9, 'GET'),
(29, '登陆-电话', 'v', 'con/logintel', '模块 :\n说明 :\n参数 :\n成功 :\n失败 :', '{\n"usertel":"1388069199",\n"password":"Zhangbo",\n"verify":"asdfasdf"\n}', '{\n"code":"200",\n"msg":"succeed"\n}', 1, 1, -99, 'GET'),
(30, '--------------------------------', 'v', '--------------------------------', '模块 :\n说明 :\n参数 :\n成功 :\n失败 :', '', '', 0, 1, -1, 'GET'),
(31, '--------------------------------', 'v', '--------------------------------', '', '', '', 0, 1, 0, 'GET'),
(32, '知识页面获取疾病列表', 'v', 'comm/diseaselist', '模块 :知识模块\n说明 :获取知识页面的疾病列表\n参数 :\n成功 :\n失败 :', '', '{\n    "code": 200,\n    "msg": "succeed",\n    "data": [\n        {\n            "disease_id": "h_001",\n            "disease_name": "冠心病",\n          \n            "disease_url": "http://192.168.1.200/v3/comm/diseaseitem"\n        },\n        {\n            "disease_id": "h_002",\n            "disease_name": "糖尿病",\n         \n            "disease_url": "http://192.168.1.200/xx"\n        },\n        {\n            "disease_id": "h_003",\n            "disease_name": "痛风",\n        \n            "disease_url": "http://192.168.1.200/xx"\n        },\n        {\n            "disease_id": "h_004",\n            "disease_name": "高血压",\n          \n            "disease_url": "http://192.168.1.200/xx"\n        }\n    ]\n}', 1, 1, -9, 'GET'),
(33, '获取某疾病的一个条目', 'v', 'comm/diseasedetail', '模块 :\n说明 :\n参数 :\n成功 :\n失败 :', '{"disease_id":"001"\n"item_id":"001"\n}', '{\n    "code": 200,\n    "msg": "succeed",\n    "data": [\n        {\n            "disease_id": "h_001",\n"item_id":"001",\n            "item_title": "冠心病形成原因",\n          "item_content":"冠心病的形成原因是冠心病的形成原因是冠心病的形成原因是冠心病的形成原因是"\n           \n        }\n       \n        \n    ]\n}', 1, 1, -9, 'GET'),
(34, '帮助', 'v', 'user/helps', '模块 :帮助和隐私中获取帮助\n说明 :data中返回帮助页面所在的url\n参数 :\n成功 :\n失败 :', '', '{ "code": 200,\n    "msg": "succeed",\n    "data": "http://"\n}', 1, 1, -99, 'GET'),
(35, '申明', 'v', 'user/declare', '模块 :隐私和帮助模块用户获取申明内容\n说明 :data中返回申明内容所在的url\n参数 :\n成功 :\n失败 :', '', '{ "code": 200,\n    "msg": "succeed",\n    "data": "http://"\n}', 1, 1, -99, 'GET'),
(36, '--------------------------------', 'v', '--------------------------------', '模块 :\n说明 :\n参数 :\n成功 :\n失败 :', '3', '4', 0, 1, -19, 'GET'),
(37, '--------------------------------', 'v', '--------------------------------', '模块 :\n说明 :\n参数 :\n成功 :5\n失败 :', '3', '4', 0, 1, 9000, 'GET'),
(38, '上传每次测量的原始数据 ', 'v', 'heart/measure', '模块 :使用心电设备\n说明 :上传每次测量的原始数据\n参数 :\n成功 :\n失败 :', '{\n"data":"xxxx"\n}', '{ "code": 200,\n    "msg": "succeed1"\n}', 1, 1, 99999, 'GET');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
