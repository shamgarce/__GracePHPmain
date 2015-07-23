<?php
/**
 * modules 可以在这里设置，并且覆盖前面的设置
 */

$config = [
    'error_manage' => '',

    'usertablename' => 'dy_user',                   //用户表

    //缓存路径
    'Cacheroot' => C('APP_PATH').'cache/',


    //'application_folder' => dirname(__FILE__),


    //入口系统模块 - hmvc必须
    'modules' => [
        's' => 'hmvc_s',
    ],


    'mysql'=>[
//        'default'=>[
//            "hostname"  =>  'rdsoyq134we31od4l8uwi.mysql.rds.aliyuncs.com',
//            "username"  =>  'nsv1',
//            "password"  =>  'nsv1nsv1',
//            "database"  =>  'rvfjbvj6il30zoiq',
//            "charset"   =>  'utf8',
//            "pconnect"  =>  0,
//            "quiet"     =>  0
//        ],
        'default'=>[
            "hostname"  =>  '127.0.0.1',
            "username"  =>  'root',
            "password"  =>  'root3306',
            "database"  =>  'gracephp',

            "charset"   =>  'utf8',
            "pconnect"  =>  0,
            "quiet"     =>  0
        ],

    ],

    //rbac相关设置
    'Rbacdb'=>[
        'accessrules'   =>'g_accessrules',
        'accessrules_lib'=>'g_rulelib',
    ],


    'User'=> [
        'AdminGroupid'=>[9,0],
        'UserField'=> [
//        'tablename'   => 'dy_user',
//        'uid'         => 'uid',
//        'fileduname'  => 'uname',
//        'filedtname'  => 'tname',
//        'filedpwd'    => 'pwd',
//        'filedauthkey'=> 'authkey',
//        'filedgroupid'=> 'groupid',
//        'filedenable' => 'enable',
//        'filedaccessToken' => 'accessToken',
//        'filedloginip' => 'logip',
//        'filedlogintm' => 'logtime',
//        'filedregtime' => 'regtime',
        ]
    ],


];
return $config;


//'APP_PATH' => '',     //这个不要设置，会不起作用
