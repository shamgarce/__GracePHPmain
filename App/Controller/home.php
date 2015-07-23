<?php

class home extends Controller {
    public function doIndex(){
        //默认跳转到s模块
        $this->redirect("/s");
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
