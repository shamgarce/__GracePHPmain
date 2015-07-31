<?php

class user extends Controller {
/*通常操作
delete=999     //删除

 * */


    //根据情况进行跳转
    public function doUserlist(){
        if($this->ispost){
            $res = $this->request->post;
            //重复
            if($this->user->getuserinfo($res['uname'])){
                $mr = [
                    'code' =>-200,
                    'msg' =>'该用户名存在'
                ];
                echo json_encode($mr);
            }else{
                $this->table->dy_user->insert($res);
                $mr = [
                    'code' =>200,
                    'msg' =>'操作完成'
                ];
                echo json_encode($mr);
            }
            exit;
        }

        $this->display('',[
            'title'     =>'用户列表',
            'grouplist' => $this->table->g_group->getall(),
            'list'      => $this->table->dy_user->order("uid desc")->getall(),
        ]);
    }

    //根据情况进行跳转
    public function doUsereditprofile(){

        if($this->ispost){
            $uid = $this->user->getuserinfo()['uid'];
            //更改用户信息
            $res = $this->request->post;
            $this->table->dy_user->where("uid = $uid")->update($res);

            echo json_encode([
                'code' =>200,
                'msg' =>'ok'
            ]);
            exit;
        }
        $this->display('',[
            'title'=>'用户个人信息'
        ]);
    }

    public function doGroupedit($params)
    {
        if($this->ispost) {
            $res['groupname'] = $this->request->post['groupname'];
            $res['groupchr'] = $this->request->post['groupchr'];
            $res['sort'] = $this->request->post['sort'];
            $id = $this->request->post['groupid'];
            $this->table->g_group->where("groupid =  $id")->update($res);

            echo json_encode([
                'code' =>200,
                'msg' =>'ok'
            ]);
            exit;
        }

        $params = $params?:0;
        $this->display('',[
            'res' =>    $this->table->g_group->where("groupid =  $params")->getrow(),
        ]);
    }

    //根据情况进行跳转
    public function doGrouplist($params){

        //删除信息
        if($this->request->get['delete']) {
            $id = intval($this->request->get['delete']);
            $this->table->g_group->where("groupid =  $id")->delete();
            $this->redirect('/s/user/grouplist/');
        }

        //表单提交添加
        if($this->ispost){
            $res = $this->request->post;
            if(!$res['groupname']){
                echo json_encode([
                    'code' =>-200,
                    'msg' =>'请填写组名'
                ]);
                exit;
            }
            $res['groupchr'] = $res['groupchr']?:'zero';
            $res['sort']    = intval($res['sort']);
            $res['enable']  = 1;
            $this->table->g_group->insert($res);
            echo json_encode([
                'code' =>200,
                'msg' =>'ok'
            ]);
            exit;
        }

        $this->display('',[
            'rc'=> $this->table->g_group->order("sort desc,groupid desc ")->getall(),
            'title'=>'用户列表'
        ]);
    }

}
