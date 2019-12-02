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
    <h1 align="center">留言版</h1>
    <hr>
    <?php

        // 資料處理
        require_once("db_connect.php");
        $recordPerPage = 5 ;
        if(isset($_GET["page"]))
            $page = $_GET["page"];
        else
            $page = 1 ;
        $database = "guestbook";
        $link = create_connection();
        $sql = "SELECT * FROM message ORDER BY id DESC";
        $result = execute_db($link,"guestbook",$sql);
        $totalRecords = mysqli_num_rows($result);
        $totalPages = ceil($totalRecords/$recordPerPage);
        $startedRecord = $recordPerPage * ($page - 1);
        mysqli_data_seek($result, $startedRecord);

        // 繪製表格
        echo "<table width='800' align='center' cellspacing='3'>";
            $j = 1;
            while ($row = mysqli_fetch_assoc($result) and $j <= $recordPerPage){
                echo "<tr>";
                echo "<td>作者：" . $row["author"] . "<br>";
                echo "主題：" . $row["subject"] . "<br>";
                echo "時間：" . $row["date"] . "<hr>";
                echo $row["content"] . "</td></tr>";
                $j++;
            }
        echo "</table>" ;
        
        // 跳頁
        echo "<hr>";
        echo "<p align='center'>";
            if ($page > 1){
                echo "<a href='index.php?page=". ($page - 1) . "'>上一頁</a> ";
            }

            for ($i = 1; $i <= $totalPages; $i++){
                if ($i == $page){
                    echo "$i ";
                }else{
                    echo "<a href='index.php?page=$i'>$i</a> ";
                } 
            }
            
            if ($page < $totalPages){
                echo "<a href='index.php?page=". ($page + 1) . "'>下一頁</a> ";
            }
        echo "</p>";

    ?>
    
    <!-- 填寫表單 -->
    <form name="myForm" method="post" action="post.php">
        <table border="0" width="800" align="center" cellspacing="0">
            <tr bgcolor="#0084CA" align="center">
                <td colspan="2"><font color="#FFFFFF">請在此輸入新的留言</font></td>
            </tr>
            <tr bgcolor="#D9F2FF">
                <td width="15%">作者</td><td width="85%"><input name="author" type="text" size="50"></td>
            </tr>
            <tr bgcolor="#84D7FF">
                <td width="15%">主題</td><td width="85%"><input name="subject" type="text" size="50"></td>
            </tr>
            <tr bgcolor="#D9F2FF">
                <td width="15%">內容</td><td width="85%"><textarea name="content" cols="50" rows="5"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="button" value="張貼留言" onClick="checkForm()">　
                    <input type="reset" value="重新輸入">
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>