<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    ini_set('display_errors','off'); 

    $memberAC = $_POST['memberAC'];
    $memberPW = md5(strrev($_POST['memberPW'].$_POST['memberAC']),);
    $memberName = $_POST['memberName'];
    $memberMail = $_POST['memberMail'];

    $db=new StockDB('localhost','root','','guestbook');
    $qstr = "INSERT INTO member (memberAC,memberPW,memberName,email) VALUES('$memberAC','$memberPW','$memberName','$memberMail')";
    $data = $db->query($qstr);

    require '../libs/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 0;
    $smarty->display('addAC.tpl');

?>