<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    require 'class_page.php';
    ini_set('display_errors','on');

    // 查詢會員資料
    $memberID= $_SESSION['memberID'];
    $db=new StockDB('localhost','root','','guestbook');
    $qstr = "SELECT * FROM member WHERE memberID='$memberID'";
    $data = $db->query($qstr);
    while ($db->next_record()){
        $r=$db->record;
    }

    // 會員文章查詢
    $qstr = "SELECT a.* , b.memberName FROM message as a , member as b where a.memberID = b.memberID ORDER BY postID";
    $data = $db->query($qstr);
    $totalRecords = $data->num_rows;
    $j=0;
    while ($db->next_record() && $j < $totalRecords){
        $p[$j]=$db->record;
        $j++;
    }
    
    //分頁
    $page_obj=new Page($db['WS'],$_REQUEST['page'],30,$sql_column,$sql_from,$sql_where,$sql_order);
    $db['WS']->query($page_obj->_SQL);


    // if(!isset($_POST['page'])){
    //     $_now_page=1;
    // }elseif($_POST['page']>$_TotalPages){
    //     $_now_page=$_TotalPages;
    // }elseif($_POST['page']<=0){
    //     $_now_page=1;
    // }else{
    //     $_now_page=$_POST['page'];
    // }

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

        // 會員文章smarty
        $smarty->assign("post_array",$p);
    }else{
        header("location:index.php");
    }
    $smarty->display('manager.tpl');
    include_once 'footer.php';
?>
