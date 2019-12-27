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
    require_once "db_connect.php";
    ?>
    <h1 style="text-align:center">會員中心</h1>
    <form method="PUT" action="">
        會員帳號:<input type="text" name="memberAC"><br>
        會員密碼:<input type="password" name="memberPW"><br>
        會員暱稱:<input type="text" name="memberName"><br>
        電子郵件:<input type="email" name="memberMail"><br>
        <button type="submit">修改</button>
    </form>
</body>
</html>