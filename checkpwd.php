<?php
    require_once 'db_connect.php';
    $memberAC = $_POST['memberAC'];
    $memberPW = $_POST['memberPW'];
    $link = create_connection();
    $sql = "SELECT * from member WHERE memberAC='$memberAC' AND memberPW='$memberPW'";
    $result = execute_db($link,'guestbook',$sql);
    if(mysqli_num_rows($result)!=0){
        // var_dump(mysqli_fetch_object($result));
        $memberID = mysqli_fetch_object($result)->memberID;
        // echo $memberID . "<br>" ;
        $memberName = mysqli_fetch_object($result)->memberName;
        // echo $memberName . "<br>" ;
        echo '登入成功,3秒後自動跳轉';
        mysqli_free_result($result);
        mysqli_close($link);
        setcookie('memberID',"$memberID");
        setcookie('memberName',"$memberName");
        setcookie('passed',true);
        header("refresh:3;url='index.php'");
    }else{
        mysqli_close($link);
        echo "<script>alert('帳號密碼輸入錯誤,請重新輸入');history.back();</script>";
        mysqli_free_result($result);
    }
    exit();
?>