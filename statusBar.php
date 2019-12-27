<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <span><a href="index.php"><img src="snapshot.jpg" style="width: 50px;height:50px"></a>
    <?php if(isset($_COOKIE['passed'])){
        echo $_COOKIE['memberName'] . " 您好 歡迎回來 "."<div style='text-align:right;margin-right:5px'><button onclick='logOut()'>登出</button></div>";
    }else{
        echo "<div style='text-align:right'><button style='margin-right:5px' onclick='redirectLogIn()'>登入</button><button  onclick='redirectRegister()'>註冊</button></div>";
    } ?></span>
    <script>
        function redirectLogIn(){
            window.location = "login.php";
        }
        function redirectRegister(){
            window.location = "register.php";
        }
        function logOut(){
            window.location = "logout.php";
        }
    </script>
</body>
</html>


