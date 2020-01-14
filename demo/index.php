<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    ini_set('display_errors','off'); 
    $db=new StockDB('localhost','root','','guestbook');
    $memberName=$_SESSION['memberName'];

    // 主文查詢
    $qstr = "SELECT * FROM message WHERE type='1' ORDER BY postID DESC";
    $data = $db->query($qstr);
    $recordPerPage = 20;
    $totalRecords = $data->num_rows;
    $totalPages = ceil($totalRecords / $recordPerPage);
    if(isset($_GET["page"])){
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

    //回覆查詢
    $s=array();
    $n=0;
    $qstr = "SELECT * FROM message WHERE type='2' ORDER BY postID";
    $data = $db->query($qstr);
    $totalRecords = $data->num_rows;
    while ($db->next_record() && $n < $totalRecords){
        $s[$n]=$db->record;
        $n++;
    }

    require_once '../libs/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 0;
    $smarty->assign("post_array",$r);
    $smarty->assign("reply_array",$s);
    $smarty->display('index.tpl');
  
?>