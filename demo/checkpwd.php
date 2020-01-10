<?php
    include "statusBar.php";

    require_once 'db_connect.php';
    require '../libs/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 120;
    $smarty->display('checkpwd.tpl');

    $memberAC = $_POST['memberAC'];
    $memberPW = md5(strrev($_POST['memberPW'].$_POST['memberAC']),);
    $memberPWL = strlen($_POST['memberPW']);
    $link = create_connection();
    $sql = "SELECT * from member WHERE memberAC='$memberAC' AND memberPW='$memberPW'";
    $result = execute_db($link,'guestbook',$sql);
    if(mysqli_num_rows($result)!=0){
        $member = mysqli_fetch_array($result);
        $memberName = $member['memberName'];
        $memberID = $member['memberID'];
        mysqli_free_result($result);
        mysqli_close($link);
        setcookie('memberName',$memberName);
        setcookie('memberID',$memberID);
        setcookie('memberPWL',$memberPWL);
        setcookie('passed',true);
    }else{
        mysqli_close($link);
        echo "<script>alert('帳號密碼輸入錯誤,請重新輸入');history.back();</script>";
        mysqli_free_result($result);
    }
?>