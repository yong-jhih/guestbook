<?php
    require_once 'db_connect.php';
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
        echo '登入成功,3秒後自動跳轉至會員頁';
        mysqli_free_result($result);
        mysqli_close($link);
        setcookie('memberName',"$memberName");
        setcookie('memberID',"$memberID");
        setcookie('memberPWL',"$memberPWL");
        setcookie('passed',true);
        header("refresh:3;url='member.php'");
    }else{
        mysqli_close($link);
        echo "<script>alert('帳號密碼輸入錯誤,請重新輸入');history.back();</script>";
        mysqli_free_result($result);
    }
    exit();
?>