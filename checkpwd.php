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
        mysqli_free_result($result);
        mysqli_close($link);
        setcookie('memberName',"$memberName");
        setcookie('memberID',"$memberID");
        setcookie('memberPWL',"$memberPWL");
        setcookie('passed',true);
        header("refresh:2;url='member.php'");
    }else{
        mysqli_close($link);
        echo "<script>alert('帳號密碼輸入錯誤,請重新輸入');history.back();</script>";
        mysqli_free_result($result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>等待跳轉</title>
    <script src="jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist\css\bootstrap.css">
    <script src="bootstrap-4.4.1-dist\js\bootstrap.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
    <div class="text-center" style="position: absolute;top:46%;left:49%">
        <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
        </div>
    </div>
</body>
</html>