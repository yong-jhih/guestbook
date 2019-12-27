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
        會員帳號:<input type="text" name="memberAC" required><br>
        會員密碼:<input type="password" id="password1" name="memberPW" required><br>
        請再輸入一次密碼:<input type="password" id="password2" onblur="check()" required><span id="isShow" style="color:red;visibility:hidden">X</span><br>
        會員暱稱:<input type="text" name="memberName" required><br>
        電子郵件:<input type="email" name="memberMail" required><br>
        <button type="submit">提交</button>
        <button type="reset">清除</button>
    </form>
    <script>
        function check(){
            if(document.getElementById("password1").value != document.getElementById("password2").value){
                document.getElementById("isShow").style.visibility= "visible" ;
            }else{
                document.getElementById("isShow").style.visibility= "hidden" ;
            }
        }
    </script>
</body>
</html>