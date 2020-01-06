<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>guestbook</title>
    <script src="jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php include 'statusBar.php' ?>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">會員登入</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="checkpwd.php">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">帳號</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" name="memberAC" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">密碼</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword" name="memberPW" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                            <button type="submit" class="btn btn-primary">登入</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <?php
    // 資料處理
    require_once("db_connect.php");
    $recordPerPage = 5;
    if (isset($_GET["page"]))
        $page = $_GET["page"];
    else
        $page = 1;

    $database = "guestbook";
    $link = create_connection();
    $sql = "SELECT * FROM message ORDER BY id DESC";
    $result = execute_db($link, "guestbook", $sql);
    $totalRecords = mysqli_num_rows($result);
    $totalPages = ceil($totalRecords / $recordPerPage);
    $startedRecord = $recordPerPage * ($page - 1);
    mysqli_data_seek($result, $startedRecord);

    // 繪製表格
    echo "<table width='800' align='center' cellspacing='3'>";
    $j = 1;
    while ($row = mysqli_fetch_assoc($result) and $j <= $recordPerPage) {
        echo "<tr>";
        echo "<td>作者：" . $row["author"] . "<br>";
        echo "主題：" . $row["subject"] . "<br>";
        echo "時間：" . $row["date"] . "<hr>";
        echo $row["content"] . "</td></tr>";
        $j++;
    }
    echo "</table>";

    // 跳頁
    echo "<hr>";
    echo "<p align='center'>";
    if ($page > 1) {
        echo "<a href='index.php?page=" . ($page - 1) . "'>上一頁</a> ";
    }

    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $page) {
            echo "$i ";
        } else {
            echo "<a href='index.php?page=$i'>$i</a> ";
        }
    }

    if ($page < $totalPages) {
        echo "<a href='index.php?page=" . ($page + 1) . "'>下一頁</a> ";
    }
    echo "</p>";
    ?>

    <!-- 填寫表單 -->
    <form name="myForm" method="post" action="post.php">
        <table border="0" width="800" align="center" cellspacing="0">
            <tr bgcolor="#0084CA" align="center">
                <td colspan="2">
                    <font color="#FFFFFF">請在此輸入新的留言</font>
                </td>
            </tr>
            <tr bgcolor="#D9F2FF">
                <td width="15%">作者</td>
                <?php
                if (isset($_COOKIE['memberName'])) {
                    echo "<td width='85%'><input name='author' readonly type='text' size='50' value='" . $memberName . "'></td>";
                } else {
                    echo '<td width="85%"><input name="author" type="text" size="50"></td>';
                }
                ?>
            </tr>
            <tr bgcolor="#84D7FF">
                <td width="15%">主題</td>
                <td width="85%"><input name="subject" type="text" size="50"></td>
            </tr>
            <tr bgcolor="#D9F2FF">
                <td width="15%">內容</td>
                <td width="85%"><textarea name="content" cols="50" rows="5"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="button" value="張貼留言" class='btn btn-outline-primary' onClick="checkForm()">　
                    <input type="reset" class='btn btn-outline-primary' value="重新輸入">
                </td>
            </tr>
        </table>
    </form>

    <script>
        function checkForm() {
            if (document.myForm.author.value.length == 0) {
                alert("請留名字");
            } else if (document.myForm.subject.value.length == 0) {
                alert("請給主題");
            } else if (document.myForm.content.value.length == 0) {
                alert("請給內容");
            } else {
                myForm.submit();
            }
        }
    </script>
</body>

</html>