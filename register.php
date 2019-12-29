<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>guestbook</title>
    <script src="jquery-3.4.1.js"></script>
</head>
<body>
    會員註冊
    <form method="POST" action="addAC.php">
        會員帳號:<input type="text" name="memberAC" id="newAC" onblur="checkAC()" required><span id="showContent"></span><br>
        會員密碼:<input type="password" id="password1" name="memberPW" required><br>
        請再輸入一次密碼:<input type="password" id="password2" onblur="checkPW()" required><span id="isShow" style="color:red;visibility:hidden">密碼不同</span><br>
        會員暱稱:<input type="text" name="memberName" required><br>
        電子郵件:<input type="email" name="memberMail" required><br>
        <button type="submit">提交</button>
        <button type="reset">清除</button>
    </form>
    <script src="check.js"></script>
</body>
</html>