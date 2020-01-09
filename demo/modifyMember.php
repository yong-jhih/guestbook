<?php
    require_once 'db_connect.php';
    if(isset($_COOKIE['passed'])){
        $memberID = $_COOKIE['memberID'];
        $memberAC = $_POST['memberAC'];
        $memberPW = md5($_POST['memberPW'],);
        $memberName = $_POST['memberName'];
        $memberMail = $_POST['memberMail'];
        $memberPWL = strlen($_POST['memberPW']);

        $link = create_connection();
        $sql = "UPDATE member SET memberAC='$memberAC',memberPW='$memberPW',memberName='$memberName',email='$memberMail' WHERE memberID='$memberID'";
        $result = execute_db($link,'guestbook',$sql);
        setcookie('memberName',"$memberName");
        setcookie('memberID',"$memberID");
        setcookie('memberPWL',"$memberPWL");
        echo "修改成功,3秒後自動跳轉";
        header("refresh:3;url='member.php'");
        }else{
            header("location:index.php");
        }
        exit();
?>