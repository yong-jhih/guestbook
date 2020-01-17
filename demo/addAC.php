<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    ini_set('display_errors','off'); 

    $memberAC = test_input($_POST['memberAC']);
    $memberPW = (string)md5(strrev(test_input($_POST['memberPW']).$memberAC),);
    $memberName = test_input($_POST['memberName']);
    $memberMail = test_input($_POST['memberMail']);
    
    require '../libs/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 0;

    // 比對過濾前後資料
    if($memberAC == $_POST['memberAC'] && $memberName == $_POST['memberName'] && $memberMail == $_POST['memberMail']){
        $db=new StockDB('localhost','root','','guestbook');
        $qstr = "INSERT INTO member (memberAC,memberPW,memberName,email) VALUES('$memberAC','$memberPW','$memberName','$memberMail')";
        $data = $db->query($qstr);
        $smarty->display('addAC.tpl');
    }else{
        $smarty->display('error.tpl');
    }
    include_once 'footer.php';
?>