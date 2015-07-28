<?php

class api extends Controller {


    //根据情况进行跳转
    public function doList(){
        $this->display('',[
            'title'=>'用户列表'
        ]);
    }


}
