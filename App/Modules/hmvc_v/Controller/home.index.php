<?php


/**
 * ?  “访客”
 * @  “已授权“
 */
class home extends BaseController {

    /**
     * 综合页
     */
    public function doIndex(){
        echo json_encode([
            'code'=>-200,
            'msg'=>'miss'
        ]);
        exit;
    }



}
