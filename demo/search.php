<?php 
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    ini_set('display_errors','off');

    $keywords = test_input($_POST['keywords']);
    $searchType = test_input($_POST['searchType']);
    if($keywords == $_POST['keywords'] && $keywords != ""){
        $db=new StockDB('localhost','root','','guestbook');
        switch($searchType){
            case "subject":
                $qstr = "SELECT * FROM message WHERE subject LIKE '%$keywords%' ORDER BY postID";
                break;
            case "content":
                $qstr = "SELECT * FROM message WHERE content LIKE '%$keywords%' ORDER BY postID";
                break;
            case "author":
                $qstr = "SELECT * FROM message WHERE memberName LIKE '%$keywords%' ORDER BY postID";
                break;
            default;
        }
        $data = $db->query($qstr);
        $totalRecords=$data->num_rows;
        $i=0;
        while ($db->next_record() && $i < $totalRecords){
            $r[$i]=$db->record;
            $i++;
        }
    }

    require_once '../libs/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 0;
    $smarty->assign("post_array",$r);
    $smarty->assign("records",$totalRecords);
    $smarty->display('search.tpl');
    include_once 'footer.php';
?>