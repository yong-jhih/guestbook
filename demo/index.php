<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    ini_set('display_errors','off'); 

    $db=new StockDB('localhost','root','','guestbook');
    $qstr = "SELECT * FROM message ORDER BY postID DESC";
    $data = $db->query($qstr);  // 資料物件

    // 資料處理
    $recordPerPage = 20;  // 每頁資料筆數
    $totalRecords = $data->num_rows;  //總資料筆數
    $totalPages = ceil($totalRecords / $recordPerPage);  // 總頁數
    if (isset($_GET["page"])){
        $page = $_GET["page"];
    }else{
        $page = 1;
    }
    $startedRecord = $recordPerPage * ($page - 1);
    $r=array();

    $i=0;
    while ($db->next_record() && $i < $totalRecords){
        $r[$i]=$db->record;
        $i++;
    }

    require_once '../libs/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 120;
    $smarty->assign("post_array",$r);
    $smarty->display('index.tpl');
  
?>