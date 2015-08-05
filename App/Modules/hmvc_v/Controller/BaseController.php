<?php

//hook

class BaseController extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function _init(){
        header("Content-Type:text/html; charset=utf-8");
        $this->model->logc->L();        //开始执行的时候 insert log
        //+--------------------------------------------------
        //在这里判断状态 是否停用 是否调试
        $router = C('router');
        $chr = $router['Controller'].'/'.$router['Action'];
//查询数据库
        $where = "api = '$chr'";
        $row = $this->table->g_userapi->where($where)->getrow();
        if(!$row['enable']){
            echo json_encode([
                'code'=>-500,
                'msg'=>'disable'
            ]);
            exit;
        }

        if($row['debug']){
            if($row['response']) {
                $res = $row['response'];
                $res = json_decode($res,true);
                $res['st'] = 'from controll';
                $res['getpost'] = print_r($this->request->post,true);
                echo json_encode($res);
                exit;
            }else{
                echo json_encode([
                    'code'=>400,
                    'getpost'=> print_r($this->request->post,true),
                    'msg'=>'empty response'
                ]);
                exit;
            }
        }

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
                'only' => [],
                'rules' => [
                    [
                        'actions' => ['signout'],
                        'allow' => true,
                        'roles' => ['G'],
                    ],
                ],
            ],
        ];
    }


} 
