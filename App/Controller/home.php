<?php

class home extends Controller {


    //根据情况进行跳转
    public function doIndex(){

        if(!$this->user->islogin()){
            //跳登陆
            $this->Redirect('/s/home/login');
        }elseif($this->user->islock()){
            //跳锁定
            $this->Redirect('/s/home/locked');
        }else{
            //跳主页
            $this->Redirect('/s/home/main');
        }
        //登陆 跳主页
        //未登陆，跳登陆页
        //锁定，跳锁定也


        //默认跳转到s模块
//        $this->redirect("/home/login");
    }

    //登陆
    public function doLogin(){
        $this->display('',[
            'title'=>'登陆',
        ]);       //默认的index.php
    }

    //404错误
    public function doE404(){
        $this->display('',[
            'title'=>'错误',
        ]);       //默认的index.php
    }

    public function doProfile()
    {
        echo '修改个人资料';
    }

    //帮助
    public function doSet(){
        echo '设置';
    }


    //帮助
    public function doHelp(){
        echo '帮助';
    }

    //锁定
    public function doLocked(){
        $this->display('',[
            'title'=>'锁定',
        ]);       //默认的index.php
    }

    //登出
    public function doLogout(){
        echo '退出';
    }





















    public function doDis(){
        //默认跳转到s模块
        echo '<pre>
1 : 后台
2 :    --- 接口管理 [登陆]
2 :    --- 文档管理 [登陆]
2 :    --- 个人管理 [登陆]
3 : 接口

仪表盘用作系统的各项数据统计
管理员系统具有严格的权限判断机制，只允许特定的账号访问
文档，模块和框架同步进行

在系统建设中，不断完善框架/文档/模块
</pre>';
    }

}
