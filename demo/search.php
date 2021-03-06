<?php 
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    require_once 'smarty_ini.php';
    ini_set('display_errors','off');

    $keywords = test_input($_POST['keywords']);
    $searchType = test_input($_POST['searchType']);
    if($keywords == $_POST['keywords'] && $keywords != ""){
        $db=new StockDB('localhost','root','','guestbook');
        switch($searchType){
            case "subject":
                $qstr = "SELECT a.* , b.memberName FROM message AS a , member AS b WHERE a.memberID=b.memberID AND subject LIKE '%$keywords%' ORDER BY postID";
                break;
            case "content":
                $qstr = "SELECT a.* , b.memberName FROM message AS a , member AS b WHERE a.memberID=b.memberID AND content LIKE '%$keywords%' ORDER BY postID";
                break;
            case "author":
                $qstr = "SELECT a.* , b.memberName FROM message AS a , member AS b WHERE a.memberID=b.memberID AND memberName LIKE '%$keywords%' ORDER BY postID";
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
    
    $smarty->assign("post_array",$r);
    $smarty->assign("records",$totalRecords);
    $smarty->display('search.tpl');
    include_once 'footer.php';
?>