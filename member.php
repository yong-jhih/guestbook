<?php
    require_once "db_connect.php";
    $memberID = $_COOKIE['memberID'];
    $pwl = (int)$_COOKIE['memberPWL'];
    $pw="";
    for($i=0;$i<$pwl;$i++){
        $pw = $pw . "*";
    }
    if(isset($_COOKIE['passed'])){
    $link = create_connection();
    $sql = "SELECT * from member WHERE memberID = '$memberID'" ;
    $result = execute_db($link,'guestbook',$sql);
    $member = mysqli_fetch_array($result);
    $memberAC = $member['memberAC'];
    $memberName = $member['memberName'];
    $email = $member['email'];
    mysqli_close($link);
    }else{
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "statusBar.php";
    ?>
    <h1 style="text-align:center">會員中心</h1>
    <form method="POST" action="modifyMember.php">
        會員帳號:<input type="text" name="memberAC" id="newAC" readonly value="<?php echo $memberAC ?>"><br>
        會員密碼:<input type="password" name="memberPW" id="password1" name="memberPW" required placeholder="<?php echo $pw ?>"><br>
        請再輸入一次密碼:<input type="password" id="password2" onblur="checkPW()" required><span id="isShow" style="color:red;visibility:hidden">密碼不同</span><br>
        會員暱稱:<input type="text" name="memberName" required placeholder="<?php echo $memberName ?>"><br>
        電子郵件:<input type="email" name="memberMail" required placeholder="<?php echo $email ?>"><br>
        <button type="submit">修改</button>
    </form>
    <hr>
    留言列表<br>
    <?php
        $link = create_connection();
        $sql = "SELECT * from message WHERE memberID = '$memberID' ORDER BY date limit '5' ";
        $result = execute_db($link,'guestbook',$sql);
    ?>
    <script src="check.js"></script>
</body>
</html>