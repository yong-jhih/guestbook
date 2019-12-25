<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>guestbook</title>
    <script src="guestbook.js"></script>
</head>
<body>
    會員註冊
    <form method="POST" action="addAC.php">
        會員帳號:<input type="text" name="memberAC"><br>
        會員密碼:<input type="password" name="memberPW"><br>
        會員暱稱:<input type="text" name="memberName"><br>
        電子郵件:<input type="email" name="memberMail"><br>
        <button type="submit">提交</button>
        <button type="reset">清除</button>
    </form>
</body>
</html>