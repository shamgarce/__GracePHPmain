<?php

class api extends Controller {

//'po',       //post  有post
//'ed',       //修改
//'de',       //删除
//'json',     // json
//'vf',       //显示

    //日志数据返回
    public function doList_json()
    {

    }
    //测试用 - 》页面右侧有日志
    public function doList_vf(){
        D('测试');
    }


    //修改保存
    public function doList_ed_post(){
        D('修改保存');
    }

    //修改一条记录
    public function doList_ed(){

        $this->display('list_edit',[
//            'rc'=>$this->table->g_userapi->order("sort desc,id desc")->getall(),
            'title'=>'用户列表'
        ]);

    }

    //删除一条记录 【调试】
    public function doList_de($params){
        $id = intval($params);
        $row = $this->table->g_userapi->where("id = $id")->getrow();
        $res['enable'] = $row['enable']?0:1;
        $this->table->g_userapi->where("id = $id")->update($res);
        echo json_encode([
            'code'=>200,
            'msg'=>'OK'.$params,
        ]);
    }




    //添加新数据
    public function doList_post(){
        $res = $this->request->post;
        if(!$res['name']){
            $re = [
                'code'=>-200,
                'code'=>'名称必须填写',
            ];
            echo json_encode($re);
            exit;
        }
        $this->table->g_userapi->insert($res);

        echo json_encode([
            'code'=>200,
            'msg'=>'操作完成'
        ]);
        exit;
    }

    //根据情况进行跳转
    public function doList(){
        $this->display('',[
            'rc'=>$this->table->g_userapi->order("sort desc,id desc")->getall(),
            'title'=>'用户列表'
        ]);
    }







}
