<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    ini_set('display_errors','off');

    // 查詢會員資料
    $memberID= $_SESSION['memberID'];
    $db=new StockDB('localhost','root','','guestbook');
    $qstr = "SELECT * FROM member WHERE memberID='$memberID'";
    $data = $db->query($qstr);
    while ($db->next_record()){
        $r=$db->record;
    }

    // 會員文章查詢
    $qstr = "SELECT a.* , b.memberName FROM message as a , member as b where a.memberID = b.memberID AND a.memberID = '$memberID' ORDER BY postID";
    $data = $db->query($qstr);
    $totalRecords = $data->num_rows;
    $j=0;
    while ($db->next_record() && $j < $totalRecords){
        $p[$j]=$db->record;
        $j++;
    }

    require '../libs/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 0;

    if(isset($_SESSION['passed'])){
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
    $smarty->display('member.tpl');
    include_once 'footer.php';
?>