<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>guestbook</title>
</head>
<body>
    <form method="POST" action="checkpwd.php">
        會員帳號:<input type="text" name="memberAC" required><br>
        會員密碼:<input type="password" name="memberPW" required><br>
        <button type="submit">提交</button>
        <button type="reset">清除</button>
    </form>
</body>
</html>