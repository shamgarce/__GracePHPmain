<?php


/**
 * ?  “访客”
 * @  “已授权“
 */
class home extends BaseController {

    public function doDashboard(){
        $this->display('',[
            'title'=>'主界面'
        ]);
    }


}
