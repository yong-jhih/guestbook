<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    require 'class_page.php';
    ini_set('display_errors','off'); 
    $db=new StockDB('localhost','root','','guestbook');
    $memberName=$_SESSION['memberName'];
    $now_time = date("Y-m-d H:i:s");
    
    if($_POST['type']==1){
        $search = $_POST['postID'];
    }elseif($_POST['type']==2){
        $search = $_POST['subID'];
    }

    if(!isset($search)){ // 非查詢(全部貼文)
        
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

        //回覆查詢
        $s=array();
        $n=0;
        $qstr = "SELECT a.* , b.Face , b.memberName FROM message as a , member as b where a.memberID = b.memberID AND type='2' ORDER BY postID";
        $data = $db->query($qstr);
        $totalRecords = $data->num_rows;
        while ($db->next_record() && $n < $totalRecords){
            $s[$n]=$db->record;
            $n++;
        }

        require_once 'smarty_ini.php';
        $smarty->assign("passed",$_SESSION['passed']);
        $smarty->assign("pages",$num);
        $smarty->assign("post_array",$r);
        $smarty->assign("reply_array",$s);
        $smarty->display('index.tpl');
        include_once 'footer.php';

    }else{ // 查詢(目標貼文)

        // 主文查詢
        $qstr = "SELECT a.* , b.Face , b.memberName FROM message as a , member as b where a.memberID = b.memberID AND type='1' AND postID='$search' ORDER BY postID DESC";
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
        $qstr = "SELECT a.* , b.Face , b.memberName FROM message as a , member as b where a.memberID = b.memberID AND type='2' ORDER BY postID";
        $data = $db->query($qstr);
        $totalRecords = $data->num_rows;
        while ($db->next_record() && $n < $totalRecords){
            $s[$n]=$db->record;
            $n++;
        }

        require_once 'smarty_ini.php';
        $smarty->assign("passed",$_SESSION['passed']);
        $smarty->assign("pages",$num);
        $smarty->assign("post_array",$r);
        $smarty->assign("reply_array",$s);
        $smarty->display('index.tpl');
        include_once 'footer.php';
    }
?>