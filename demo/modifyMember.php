<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    ini_set('display_errors','off');

    $memberPWL = strlen($_POST['memberPW']);
    $memberPW = md5(strrev(test_input($_POST['memberPW']).$memberAC),);
    $memberName = test_input($_POST['memberName']);
    $memberMail = test_input($_POST['memberMail']);
    $memberID = $_SESSION['memberID'];

    if(isset($_SESSION['passed'])){
        if($memberName == $_POST['memberName'] && $memberMail == $_POST['memberMail']){
            $db=new StockDB('localhost','root','','guestbook');
            $qstr = "UPDATE member SET memberPW='$memberPW',memberName='$memberName',email='$memberMail' WHERE memberID='$memberID'";
            $data = $db->query($qstr);
            header("location:member.php");
        }
    }else{
        header("location:index.php");
    }
?>