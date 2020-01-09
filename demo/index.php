<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require '../libs/Smarty.class.php';
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);
$smarty->assign("FirstName", array("John", "Mary", "James", "Henry"));
$smarty->assign("LastName", array("Doe", "Smith", "Johnson", "Case"));
$smarty->assign(
    "Class",
    array(
        array("A", "B", "C", "D"),
        array("E", "F", "G", "H"),
        array("I", "J", "K", "L"),
        array("M", "N", "O", "P")
    )
);
$smarty->assign(
    "contacts",
    array(
        array("phone" => "1", "fax" => "2", "cell" => "3"),
        array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")
    )
);
$smarty->assign("option_values", array("NY", "NE", "KS", "IA", "OK", "TX"));
$smarty->assign("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));
$smarty->assign("option_selected", "NE");
$smarty->display('index.tpl');
?>

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
    <?php // 資料處理
        require_once("db_connect.php");
        $recordPerPage = 5;
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }
        $database = "guestbook";
        $link = create_connection();
        $sql = "SELECT * FROM message ORDER BY id DESC";
        $result = execute_db($link, "guestbook", $sql);
        $totalRecords = mysqli_num_rows($result);
        $totalPages = ceil($totalRecords / $recordPerPage);
        $startedRecord = $recordPerPage * ($page - 1);
        mysqli_data_seek($result, $startedRecord);
    ?>

    <?php
    echo '<div class="accordion" id="accordionExample">';
    $j=1;
    while ($row = mysqli_fetch_assoc($result) and $j <= $recordPerPage){
        echo '<div class="card" bgcolor="#D9F2FF">';
            echo "<div class='card-header' style='border:2px solid #D9F2FF' id='heading{$j}'>";
                echo '<h2 class="mb-0">';
                    echo "<button class='btn btn-link' type='button' data-toggle='collapse' data-target='#collapse{$j}' aria-expanded='true' aria-controls='collapse{$j}'>";
                echo '主 題 : '.$row["subject"].'</button></h2></div>';
        
            echo "<div id='collapse{$j}' class='collapse' aria-labelledby='heading{$j}' data-parent='#accordionExample'>";
                echo '<div class="card-body" style="display:flex">';
        if($row["img"]!=null){
                    echo "<div><img src='".$row["img"]."' style='width:400px;height:300px'></div>";
        }
                echo '<div class="col-md-8" style="margin-left:20px;border:2px solid red"><div><div style="display:flex;border:2px solid red"><div></div><div></div></div></div>'."<input type='text' style=''>".$row["content"].'</div></div>';
            echo '</div>' ;
        echo '</div>';
        $j++;
    }
    echo '</div>';
    ?>

    <?php
        // 跳頁
        echo "<hr>";
        echo "<nav aria-label='Page navigation example'>";
        echo "<ul class='pagination' style='align:center;background-color:green'>";
        if ($page > 1) {
            echo "<li class='page-item'><a class='page-link' href='index.php?page=" . ($page - 1) . "'>上一頁</a></li>";
        }

        for ($i = 1; $i <= $totalPages; $i++) {
            if ($i == $page) {
                echo "<li class='page-item'><a class='page-link' disabled><u>$i</u></a></li>";
            } else {
                echo "<li class='page-item'><a class='page-link' href='index.php?page=$i'>$i</a></li>";
            }
        }

        if ($page < $totalPages) {
            echo "<li class='page-item'><a class='page-link' href='index.php?page=" . ($page + 1) . "'>下一頁</a></li>";
        }
        echo "</ul>";
        echo "</nav>";
    ?>

    <!-- 輸入留言 -->
    <form name="myForm" method="post" action="post.php" enctype="multipart/form-data">
        <table border="0" width="800" align="center" cellspacing="0">
            <tr bgcolor="#0084CA" align="center">
                <td colspan="2">
                    <font color="#FFFFFF" id="enter">請在此輸入新的留言</font>
                </td>
            </tr>
            <tr bgcolor="#D9F2FF">
                <td width="15%">作者</td>
                <?php
                if (isset($_COOKIE['memberName'])) {
                    echo "<td width='85%'><input id='author' name='author' readonly type='text' size='50' value='" . $memberName . "'></td>";
                } else {
                    echo '<td width="85%"><input id="author" name="author" type="text" size="50"></td>';
                }
                ?>
            </tr>
            <tr bgcolor="#84D7FF">
                <td width="15%">主題</td>
                <td width="85%"><input id='subject' name="subject" type="text" size="50"></td>
            </tr>
            <tr bgcolor="#D9F2FF">
                <td width="15%">內容</td>
                <td width="85%"><textarea id='content' name="content" cols="50" rows="5"></textarea></td>
            </tr>
            
            <tr bgcolor="#84D7FF">
                <td width="15%">上傳圖片</td>
                <td width="85%"><input id='img' name="img" type="file"></td>
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
        let islogin = <?php if (isset($_COOKIE['passed'])) {
                            echo "true";
                        } else {
                            echo "false";
                        } ?>;

        function checkMember(islogin) {
            document.getElementById('author').disabled = !islogin;
            document.getElementById('subject').disabled = !islogin;
            document.getElementById('content').disabled = !islogin;
            document.getElementById('enter').innerHTML = islogin ? "請在此輸入新的留言" : "如要留言請先登入會員";
        }

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

        checkMember(islogin);
    </script>
</body>
</html>