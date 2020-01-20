<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    require 'class_page.php';
    ini_set('display_errors','off');

    // 查詢會員資料
    $memberID= $_SESSION['memberID'];
    $db=new StockDB('localhost','root','','guestbook');
    $qstr = "SELECT * FROM member WHERE memberID='$memberID'";
    $data = $db->query($qstr);
    while ($db->next_record()){
        $r=$db->record;
    }

    // 會員文章筆數查詢
    $qstr = "SELECT a.* , b.memberName FROM message as a , member as b where a.memberID = b.memberID ORDER BY postID";
    $data = $db->query($qstr);
    $totalRecords = $data->num_rows;
    $RecordsPerPage=10;
    $totalPages = ceil($totalRecords / $RecordsPerPage);
    for($m=0;$m<$totalPages;$m++){
        $num[$m]=$m+1;
    }
    //會員文章查詢(分頁)
    $sql_column="a.* , b.memberName";
    $sql_from="FROM message as a , member as b";
    $sql_where="WHERE a.memberID = b.memberID";
    $sql_order="ORDER BY postID";
    $page_obj=new Page($db,$_REQUEST['page'],$RecordsPerPage,$sql_column,$sql_from,$sql_where,$sql_order);
    $data=$db->query($page_obj->_SQL);
    $j=0;
    while ($db->next_record() && $j < $RecordsPerPage){
        $p[$j]=$db->record;
        $j++;
    }

    require '../libs/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 0;

    if($_SESSION['permission']==0){
        // 會員資料smarty
        $memberName = $r['memberName'];
        $memberAC = $r['memberAC'];
        $email = $r['email'];
        $Face = $r['Face'];
        $pwl = (int)$_SESSION['memberPWL'];
        $pw = "";
        for ($i = 0; $i < $pwl; $i++) {
            $pw = $pw . "*";
        }
        $member=array($memberAC,$pw,$memberName,$email,$Face);
        $smarty->assign("member",$member);
        $smarty->assign("pages",$num);

        // 會員文章smarty
        $smarty->assign("post_array",$p);
    }else{
        header("location:index.php");
    }
    $smarty->display('manager.tpl');
    include_once 'footer.php';
?>
