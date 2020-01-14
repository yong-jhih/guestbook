<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    ini_set('display_errors','off'); 

    $memberPWL = strlen($_POST['memberPW']);
    $memberAC = test_input($_POST['memberAC']);
    $memberPW = md5(strrev(test_input($_POST['memberPW']).$memberAC),);

    require '../libs/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 0;

    // 比對過濾前後資料
    if($memberAC == $_POST['memberAC']){
        $db=new StockDB('localhost','root','','guestbook');
        $qstr = "SELECT * from member WHERE memberAC='$memberAC' AND memberPW='$memberPW'";
        $data = $db->query($qstr);
        $totalRecords = $data->num_rows;
        if($totalRecords!=0){
            while ($db->next_record()){
                $r=$db->record;
            }
            $_SESSION['memberName']=$r['memberName'];
            $_SESSION['memberID']=$r['memberID'];
            $_SESSION['memberPWL']=$memberPWL;
            $_SESSION['passed']=true;
            setcookie('passed',true);
            setcookie('memberName',$r['memberName']);
            $smarty->assign("permisiion",$r['permission']);
            $smarty->display('checkpwd.tpl');
        }else{
            echo "<script>alert('帳號密碼輸入錯誤,請重新輸入');history.back();</script>";
        }
    }else{
        $smarty->display('error.tpl');
    }
?>