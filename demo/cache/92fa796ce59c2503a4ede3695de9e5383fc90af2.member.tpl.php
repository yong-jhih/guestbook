<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-15 06:42:14
  from 'C:\xampp\htdocs\coding\guestbook\demo\templates\member.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1ea636b87c44_84633025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ec190940af17113a4b8ee97df997a666931477f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\member.tpl',
      1 => 1578983817,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5e1ea636b87c44_84633025 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員中心</title>
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
                    <td>RE.strhtr</td>
                    <td>2020-01-15 06:39:10</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="83">
                        <input type='text' name='content' id="83" value="hstrhsrhssr">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(83)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>RE.strhtr</td>
                    <td>2020-01-15 06:39:05</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="82">
                        <input type='text' name='content' id="82" value="strhstrstrhtr">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(82)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>RE.strhtr</td>
                    <td>2020-01-15 06:39:01</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="81">
                        <input type='text' name='content' id="81" value="trshsrhsrthsrhsr">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(81)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>strhtr</td>
                    <td>2020-01-15 13:38:48</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="80">
                        <input type='text' name='content' id="80" value="1111111111">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(80)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>srthrt</td>
                    <td>2020-01-15 06:38:25</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="79">
                        <input type='text' name='content' id="79" value="sthrtsrt">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(79)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>srthtrstr</td>
                    <td>2020-01-15 06:38:21</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="78">
                        <input type='text' name='content' id="78" value="srthtsrsr">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(78)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>srthrs</td>
                    <td>2020-01-15 06:38:18</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="77">
                        <input type='text' name='content' id="77" value="hsrthsr">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(77)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>strhrt</td>
                    <td>2020-01-15 06:38:14</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="76">
                        <input type='text' name='content' id="76" value="strhsrth">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(76)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>srthsrth</td>
                    <td>2020-01-15 06:38:11</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="75">
                        <input type='text' name='content' id="75" value="srthrtsrt">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(75)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>tghrrtrt</td>
                    <td>2020-01-15 06:38:07</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="74">
                        <input type='text' name='content' id="74" value="hsrhssr">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(74)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>esrher</td>
                    <td>2020-01-15 06:27:36</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="73">
                        <input type='text' name='content' id="73" value="erhesrhse">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(73)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>sethseh</td>
                    <td>2020-01-15 06:27:32</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="72">
                        <input type='text' name='content' id="72" value="sehtseh">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(72)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>sthsthst</td>
                    <td>2020-01-15 06:27:27</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="71">
                        <input type='text' name='content' id="71" value="setheet">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(71)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>htshshs</td>
                    <td>2020-01-15 06:27:24</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="70">
                        <input type='text' name='content' id="70" value="sttsst">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(70)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>srthstr</td>
                    <td>2020-01-15 06:27:21</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="69">
                        <input type='text' name='content' id="69" value="strhts">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(69)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>strhss</td>
                    <td>2020-01-15 06:27:19</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="68">
                        <input type='text' name='content' id="68" value="tstrhshs">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(68)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>srthsr</td>
                    <td>2020-01-15 06:27:15</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="67">
                        <input type='text' name='content' id="67" value="strhsrstrtr">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(67)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>大吉大利明天吃雞</td>
                    <td>2020-01-15 11:59:25</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="66">
                        <input type='text' name='content' id="66" value="2020-01-15">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(66)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>今天天氣不好</td>
                    <td>2020-01-15 04:54:59</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="65">
                        <input type='text' name='content' id="65" value="哭哭">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(65)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>RE.今天天氣很好</td>
                    <td>2020-01-15 11:59:37</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="64">
                        <input type='text' name='content' id="64" value="喪偶 謝">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(64)'>刪除</button>
                    </td>
                </tr>
            </table>
                        <table width='800' cellspacing='3'>
                <tr>
                    <td>今天天氣很好</td>
                    <td>2020-01-15 04:52:52</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="62">
                        <input type='text' name='content' id="62" value="當個網美">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(62)'>刪除</button>
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
