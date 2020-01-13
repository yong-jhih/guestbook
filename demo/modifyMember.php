<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    ini_set('display_errors','off');

    $memberPW = md5(strrev($_POST['memberPW'].$_POST['memberAC']),);
    $memberName = $_POST['memberName'];
    $memberMail = $_POST['memberMail'];
    $memberPWL = strlen($_POST['memberPW']);
    setcookie('memberPWL',$memberPWL);

    $db=new StockDB('localhost','root','','guestbook');
    $qstr = "UPDATE member SET memberPW='$memberPW',memberName='$memberName',email='$memberMail' WHERE memberID='$memberID'";
    
    if(isset($_COOKIE['passed'])){
        $data = $db->query($qstr);
        header("location:member.php");
    }else{
        header("location:index.php");
    }
?>