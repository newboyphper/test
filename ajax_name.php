<?php

    header("Content-type: text/html; charset=utf-8");
    date_default_timezone_set("PRC");
    if (!isset($_GET['username']) && $_GET['username'] == 'ly') {
        $msg = array();
        $msg['status'] = '101';
        $msg['msg'] = 'The name is haved';
    } else {
        $msg = array();
        $msg['status'] = '1';
        $msg['msg'] = 'success';
    }
    echo json_encode($msg);
    