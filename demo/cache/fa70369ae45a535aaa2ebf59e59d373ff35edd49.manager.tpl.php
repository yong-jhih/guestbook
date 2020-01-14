<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 10:13:50
  from 'C:\xampp\htdocs\coding\guestbook\demo\templates\manager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1d864e14d970_26375408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b6b329ffce519dac003def6ef05f9a69a3e51a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\manager.tpl',
      1 => 1578985363,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5e1d864e14d970_26375408 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理中心</title>
    <script src="jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist\css\bootstrap.css">
    <script src="../bootstrap-4.4.1-dist\js\bootstrap.js"></script>
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
    <div style="display:flex">

                <div class="col-md-5 mb-3" style="position:relative;display:inline-block;margin-top:20px">
            <form method="POST" action="modifyMember.php">
                <div class="col-md-9 mb-3">
                    <label for="validationServer01">帳號</label>
                    <input type="text" class="form-control" id="validationServer01" name="memberAC" id="newAC" readonly value="abc123456">
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer02">密碼</label>
                    <input type="password" class="form-control" id="validationServer02" name="memberPW" onblur="checkPW()" required placeholder="*********">
                    <h6 style="visibility: hidden" id="checkPW">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer03">確認密碼</label>
                    <input type="password" class="form-control" id="validationServer03" onblur="reCheckPW()" required>
                    <h6 style="visibility: hidden" id="reCheckPW">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer04">暱稱</label>
                    <input type="text" class="form-control" id="validationServer04" name="memberName" onblur="checkName()" value="abc123456" required>
                    <h6 style="visibility: hidden" id="checkName">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer05">電子信箱</label>
                    <input type="text" class="form-control" id="validationServer05" name="memberMail" onblur="checkMail()" value="abc123456@aaa.bbb" required>
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

                        <table width='800' cellspacing='3'>
                <tr>
                    <td></td>
                    <td>2020-01-14 10:11:06</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="55">
                        <input type='text' name='content' id="55" value="45242452452">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(55)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td></td>
                    <td>2020-01-14 10:04:55</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="54">
                        <input type='text' name='content' id="54" value="4444444444444444444">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(54)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td></td>
                    <td>2020-01-14 10:04:50</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="53">
                        <input type='text' name='content' id="53" value="3333333333">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(53)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>22222222</td>
                    <td>2020-01-14 10:03:36</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="52">
                        <input type='text' name='content' id="52" value="22222222">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(52)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>111111111111</td>
                    <td>2020-01-14 10:03:25</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="51">
                        <input type='text' name='content' id="51" value="111111111111">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(51)'>刪除</button>
                    </td>
                </tr>
            </table>
            
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
</html><?php }
}
