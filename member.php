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
    <script src="jquery-3.4.1.js"></script>
    <style>
        td{
            border:1px solid black;
            width: 200px;
            text-align: center;
        }
        .content {
            width: 200px;
        }
    </style>
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
    我的留言列表<br>
    <table>
        <tr>
            <td>主題</td>
            <td>時間</td>
            <td class='content'>內容</td>
            <td>修改</td>
        </tr>
    </table>
    <?php
        $recordPerPage = 100 ;
        if(isset($_GET["page"])){
            $page = $_GET["page"];
        }else{
            $page = 1 ;
            $database = "guestbook";
            $link = create_connection();
            $sql = "SELECT * from message WHERE memberID = '$memberID' ORDER BY id DESC";
            $result = execute_db($link,"guestbook",$sql);
            $totalRecords = mysqli_num_rows($result);
            $totalPages = ceil($totalRecords/$recordPerPage);
            $startedRecord = $recordPerPage * ($page - 1);
            mysqli_data_seek($result, $startedRecord);
        }
            
        // 繪製表格
        echo "<table width='800' align='center' cellspacing='3'>";
            $j = 1;
            while ($row = mysqli_fetch_assoc($result) and $j <= $recordPerPage){
                echo "<table><tr><td>".$row['subject']."</td><td>".$row['date']."</td><td class='content'><form action='modifyContent.php' method='POST'><input type='hidden' name='contentID' value='".$row['id']."'><input type='text' name='content' id='".$row['id']."' value='".$row['content']."'></td><td><button type='submit'>修改內容</button></form><button onclick='Delete(".$row['id'].")'>刪除</button></td></tr>";
                $j++;
            }
        echo "</table>" ;
    ?>
    <script src="check.js"></script>
    <script>
        function Delete(deleteID){
            $(document).ready(function(){
                $.ajax({
                    async: true,
                    type: "POST",
                    url: "deleteContent.php",
                    dataType: "json",
                    data: {'deleteID':deleteID},
                    success:function(response){
                        window.location = "member.php";
                    },
                    error:function(){
                        window.location = "member.php";
                    }
                })
            });
        }
    </script>
</body>
</html>