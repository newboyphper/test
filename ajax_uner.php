<?php

    header("Content-type: text/html; charset=utf-8");
    date_default_timezone_set("PRC");
echo '';
   $data = array();
    $data['status'] = 1;
    if ($data['status'] == 1) {


        $data['info'][] = '清华大学';
        $data['info'][] = '北京大学';
        $data['info'][] = '南开大学';
        $data['info'][] = '厦门大学';
        $data['info'][] = '武汉大学';
        $data['info'][] = '麻省理工大学';
        $data['msg'] = 'success';
    } else {
        $data['info'] = array();
        $data['msg'] = 'no data';
    }
    echo json_encode($data);
    
