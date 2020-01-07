<?php
    require_once "db_connect.php";
    $memberID = $_COOKIE['memberID'];
    $pwl = (int) $_COOKIE['memberPWL'];
    $pw = "";
    for ($i = 0; $i < $pwl; $i++) {
        $pw = $pw . "*";
    }
    if (isset($_COOKIE['passed'])) {
        $link = create_connection();
        $sql = "SELECT * from member WHERE memberID = '$memberID'";
        $result = execute_db($link, 'guestbook', $sql);
        $member = mysqli_fetch_array($result);
        $memberAC = $member['memberAC'];
        $memberName = $member['memberName'];
        $email = $member['email'];
        mysqli_close($link);
    } else {
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員中心</title>
    <script src="jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist\css\bootstrap.css">
    <script src="bootstrap-4.4.1-dist\js\bootstrap.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <style>
        td {
            border: 1px solid black;
            width: 200px;
            text-align: center;
        }

        .content {
            width: 200px;
        }
    </style>
</head>

<body>
    <?php include_once "statusBar.php"; ?>
    <div style="display:flex">
        <div class="col-md-5 mb-3" style="position:relative;display:inline-block;margin-top:20px">
            <form method="POST" action="modifyMember.php">
                <div class="col-md-9 mb-3">
                    <label for="validationServer01">帳號</label>
                    <input type="text" class="form-control" id="validationServer01" name="memberAC" id="newAC" readonly value="<?php echo $memberAC ?>">
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer02">密碼</label>
                    <input type="password" class="form-control" id="validationServer02" name="memberPW" onblur="checkPW()" required placeholder="<?php echo $pw ?>">
                    <h6 style="visibility: hidden" id="checkPW">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer03">確認密碼</label>
                    <input type="password" class="form-control" id="validationServer03" onblur="reCheckPW()" required>
                    <h6 style="visibility: hidden" id="reCheckPW">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer04">暱稱</label>
                    <input type="text" class="form-control" id="validationServer04" name="memberName" onblur="checkName()" value="<?php echo $memberName ?>" required>
                    <h6 style="visibility: hidden" id="checkName">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer05">電子信箱</label>
                    <input type="text" class="form-control" id="validationServer05" name="memberMail" onblur="checkMail()" value="<?php echo $email ?>" required>
                    <h6 style="visibility: hidden" id="checkMail">.</h6>
                </div>
                <div style="margin:15px" onmouseover="McheckForm()">
                    <button class="btn btn-primary" type="submit" style="margin-right:10px" id="submitBtn" disabled>修改</button>
                </div>
            </form>
        </div>

        <div class="col-md-7 mb-3" style="position:relative;display:inline-block;margin-top:20px">
            <h4>留言列表</h4>
            <table>
                <tr>
                    <td>主題</td>
                    <td>時間</td>
                    <td class='content'>內容</td>
                    <td>修改</td>
                </tr>
            </table>
            <?php
                $recordPerPage = 100;
                if (isset($_GET["page"])) {
                    $page = $_GET["page"];
                } else {
                    $page = 1;
                    $database = "guestbook";
                    $link = create_connection();
                    $sql = "SELECT * from message WHERE memberID = '$memberID' ORDER BY id DESC";
                    $result = execute_db($link, "guestbook", $sql);
                    $totalRecords = mysqli_num_rows($result);
                    $totalPages = ceil($totalRecords / $recordPerPage);
                    $startedRecord = $recordPerPage * ($page - 1);
                    mysqli_data_seek($result, $startedRecord);
                }

                // 繪製表格
                echo "<table width='800' align='center' cellspacing='3'>";
                $j = 1;
                while ($row = mysqli_fetch_assoc($result) and $j <= $recordPerPage) {
                    echo "<table><tr><td>" . $row['subject'] . "</td><td>" . $row['date'] . "</td><td class='content'><form action='modifyContent.php' method='POST'><input type='hidden' name='contentID' value='" . $row['id'] . "'><input type='text' name='content' id='" . $row['id'] . "' value='" . $row['content'] . "'></td><td><button type='submit'>修改內容</button></form><button onclick='Delete(" . $row['id'] . ")'>刪除</button></td></tr>";
                    $j++;
                }
                echo "</table>";
            ?>
        </div>
        <script src="check.js"></script>
        <script>
            function Delete(deleteID) {
                $(document).ready(function() {
                    $.ajax({
                        async: true,
                        type: "POST",
                        url: "deleteContent.php",
                        dataType: "json",
                        data: {
                            'deleteID': deleteID
                        },
                        success: function(response) {
                            window.location = "member.php";
                        },
                        error: function() {
                            window.location = "member.php";
                        }
                    })
                });
            }
        </script>
    </div>
</body>

</html>