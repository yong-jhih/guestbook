<?php
    require 'mysqlilib.php';

    $db_host_arr[WEB_CODE]['AS']='localhost';
    $db_user_arr[WEB_CODE]['AS']='root';
    $db_passwd_arr[WEB_CODE]['AS']='';
    $db_name_arr[WEB_CODE]['AS']='guestbook';

    $db['AS']=new StockDB(
        $db_host_arr[WEB_CODE]['AS'],
        $db_user_arr[WEB_CODE]['AS'],
        $db_passwd_arr[WEB_CODE]['AS'],
        $db_name_arr[WEB_CODE]['AS']
    );

    $db['AS']->query($qstr);
    while ($db['AS']->next_record()){
    	$r=$db['AS']->record;
    }

    //分頁
    $page_obj=new Page(
        $db['WS'],
        $_REQUEST['page'],
        30,$sql_column,
        $sql_from,
        $sql_where,$sql_order
    );

    $db['WS']->query($page_obj->_SQL);

?>