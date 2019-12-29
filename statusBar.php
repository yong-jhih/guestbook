<span><a href="index.php"><img src="snapshot.jpg" style="width: 50px;height:50px"></a>
<?php if(isset($_COOKIE['passed'])){
    $memberName = $_COOKIE['memberName'];
    echo $_COOKIE['memberName'] . " 您好 歡迎回來 "."<div style='text-align:right;margin-right:5px'><button onclick='logOut()' style='margin-right:5px'>登出</button><button onclick='redirectMember()'>會員中心</button></div>";
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
    function redirectMember(){
        window.location = "member.php";
    }
    function logOut(){
        window.location = "logout.php";
    }
</script>
