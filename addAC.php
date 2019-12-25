<?php
    require_once 'db_connect.php';
    $memberAC = $_POST['memberAC'];
    $memberPW = $_POST['memberPW'];
    $memberName = $_POST['memberName'];
    $memberMail = $_POST['memberMail'];
    
    // 檢查帳號有無重複
    $link = create_connection();
    $sql = "SELECT * from member WHERE memberAC='$memberAC'";
    $result = execute_db($link,'guestbook',$sql);
    if(mysqli_num_rows($result)!=0){
        mysqli_free_result($result);
        echo "<script>alert('此帳號已被使用,請重新輸入帳號');history.back();</script>";
    }else{
        mysqli_free_result($result);
        $sql = "INSERT INTO member (memberAC,memberPW,memberName,email) VALUES('$memberAC','$memberPW','$memberName','$memberMail')";
        $result = execute_db($link,'guestbook',$sql);
        echo "建立帳號成功,3秒後跳轉頁面";
    }
    mysqli_close($link);
    header("refresh:3;url='index.php'");
    exit();
?>