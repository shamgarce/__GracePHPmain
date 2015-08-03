<?php
/**
 * Class BaseController

'po',       //post  有post
'cg',       //修改
'de',       //删除
'json',     // json
'vf',       //显示

//hook
 */

class BaseController extends Controller{

    public function __construct()
    {
        parent::__construct();
    }


//  '*'     //所有
//  '@'     //登陆用户
//  'A'     //管理员
//  'G'     //游客
//  '?'     //查询数据库

    public function behaviors()
    {

        return [
            'access' => [
                'only' => ['index'],
//                'only' => [ 'login','logout', 'signup','main'],
                'rules' => [
                    [
                        'actions'   => ['index'],
                        'allow'     => true,
                        'roles'     => ['*'],
                    ],
//                    [
//                        'actions' => ['signout'],
//                        'allow' => true,
//                        'roles' => ['G'],
//                    ],
//                    [
//                        'actions' => ['main'],
//                        'allow' => true,
//                        'roles' => ['*'],
//                    ],
                ],
            ],
        ];
    }





} 
