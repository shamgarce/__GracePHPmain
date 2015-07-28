<?php

class user extends Controller {


    //根据情况进行跳转
    public function doUserlist(){

        $this->display('',[
            'title'=>'用户列表'
        ]);
    }

    //根据情况进行跳转
    public function doUsereditprofile(){

        $this->display('',[
            'title'=>'用户个人信息'
        ]);
    }


    //根据情况进行跳转
    public function doGrouplist(){
        $this->display('',[
            'title'=>'用户列表'
        ]);
    }

}
