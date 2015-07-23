<?php
/**
 * Created by PhpStorm.
 * User: 123456
 * Date: 2015/7/17
 * Time: 11:16
 */

class test extends BaseController {

    public function doIndex($param)
    {
        $rc = $this->db->getall("Select * from dy_user");
        D($rc);
        echo 123;
        print_r($param);//另外一个
    }

}
