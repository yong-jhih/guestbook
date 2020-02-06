<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    require 'class_page.php';
    ini_set('display_errors','off'); 
    $db=new StockDB('localhost','root','','guestbook');
    $memberName=$_SESSION['memberName'];
    // $now_time = date("Y-m-d H:i:s");

    if(isset($_SESSION['passed'])){

        // 會員文章筆數查詢
        $qstr = "SELECT a.* , b.Face , b.memberName FROM message as a , member as b WHERE a.memberID = b.memberID AND type='1' ORDER BY postID DESC";
        $data = $db->query($qstr);
        $totalRecords = $data->num_rows;
        $RecordsPerPage=5;
        $totalPages = ceil($totalRecords / $RecordsPerPage);
        for($m=0;$m<$totalPages;$m++){
            $num[$m]=$m+1;
        }
        //會員文章查詢(分頁)
        $sql_column="a.* , b.Face , b.memberName";
        $sql_from="FROM message as a , member as b";
        $sql_where="WHERE a.memberID = b.memberID AND type='1'";
        $sql_order="ORDER BY postID DESC";
        $page_obj=new Page($db,$_REQUEST['page'],$RecordsPerPage,$sql_column,$sql_from,$sql_where,$sql_order);
        $data=$db->query($page_obj->_SQL);
        $j=0;
        while ($db->next_record() && $i < $RecordsPerPage){
            $r[$i]=$db->record;
            $i++;
        }

        require_once 'smarty_ini.php';
        $smarty->assign("passed",$_SESSION['passed']);
        $smarty->assign("pages",$num);
        $smarty->assign("post_array",$r);
        $smarty->display('chat.tpl');
    }else{
        header("location:index.php");
    }
    include_once 'footer.php';

?>