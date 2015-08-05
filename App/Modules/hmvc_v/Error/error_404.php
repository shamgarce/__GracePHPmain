<?php

//检索数据库，看是否能找到想匹配的模拟结果输出
$s = \Seter\Seter::getInstance();
$router = C('router');
$chr = $router['Controller'].'/'.$router['Action'];
//查询数据库
$where = "api = '$chr'";
$row = $s->table->g_userapi->where($where)->getrow();
if($row['response']) {
    $res = $row['response'];
    $res = json_decode($res,true);
    $res['getpost'] = print_r($s->request->post,true);
    $res['st'] = 'from 404';
}else{
    $res = [
        'code'=>404,
        'msg' => 'error 404',
        'st' => 'from 404page'
    ];
}
echo json_encode($res);
exit;