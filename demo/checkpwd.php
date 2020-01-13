<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    ini_set('display_errors','off'); 

    $memberAC = $_POST['memberAC'];
    $memberPW = md5(strrev($_POST['memberPW'].$_POST['memberAC']),);
    $memberPWL = strlen($_POST['memberPW']);

    $db=new StockDB('localhost','root','','guestbook');
    $qstr = "SELECT * from member WHERE memberAC='$memberAC' AND memberPW='$memberPW'";
    $data = $db->query($qstr);  // 資料物件
    $totalRecords = $data->num_rows;

    if($totalRecords!=0){
        while ($db->next_record()){
            $r=$db->record;
        }
        $memberName = $r['memberName'];
        $memberID = $r['memberID'];
        setcookie('memberName',$memberName);
        setcookie('memberID',$memberID);
        setcookie('memberPWL',$memberPWL);
        setcookie('passed',true);
    }else{
        echo "<script>alert('帳號密碼輸入錯誤,請重新輸入');history.back();</script>";
    }

    require '../libs/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 120;
    $smarty->display('checkpwd.tpl');

?>