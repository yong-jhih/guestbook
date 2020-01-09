<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-09 09:21:50
  from 'C:\xampp\htdocs\coding\guestbook\demo\templates\member.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e16e29eb9b673_70090468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ec190940af17113a4b8ee97df997a666931477f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\member.tpl',
      1 => 1578557227,
      2 => 'file',
    ),
    'b0ab8945239f55f5e4f86807ea4ce91e91106e24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\statusBar.tpl',
      1 => 1578557787,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5e16e29eb9b673_70090468 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="jquery-3.4.1.js"></script>
  <link rel="stylesheet" href="../bootstrap-4.4.1-dist\css\bootstrap.css">
  <script src="../bootstrap-4.4.1-dist\js\bootstrap.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">留言板</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                  </a>
      </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style='margin-right:5px'>Search</button>
      </form>
                      <div style='text-align:right'><button class='btn btn-outline-primary' style='margin-right:5px' data-toggle='modal' data-target='#staticBackdrop'>登入</button><button class='btn btn-outline-primary' onclick='redirectRegister()'>註冊</button></div>
              </div>
  </nav>
  <script>
    function redirectRegister() {
      window.location = "register.php";
    }

    function redirectMember() {
      window.location = "member.php";
    }

    function logOut() {
      window.location = "logout.php";
    }
  </script>
</body>

</html>
<!DOCTYPE html>
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
<pre>
<body>
    <div style="display:flex">
        <div class="col-md-5 mb-3" style="position:relative;display:inline-block;margin-top:20px">
            <form method="POST" action="modifyMember.php">
                <div class="col-md-9 mb-3">
                    <label for="validationServer01">帳號</label>
                    <input type="text" class="form-control" id="validationServer01" name="memberAC" id="newAC" readonly value="<br />
<b>Notice</b>:  Undefined index: memberAC in <b>C:\xampp\htdocs\coding\guestbook\demo\templates_c\9ec190940af17113a4b8ee97df997a666931477f_0.file.member.tpl.cache.php</b> on line <b>69</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\coding\guestbook\demo\templates_c\9ec190940af17113a4b8ee97df997a666931477f_0.file.member.tpl.cache.php</b> on line <b>69</b><br />
">
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer02">密碼</label>
                    <input type="password" class="form-control" id="validationServer02" name="memberPW" onblur="checkPW()" required placeholder="<br />
<b>Notice</b>:  Undefined index: pw in <b>C:\xampp\htdocs\coding\guestbook\demo\templates_c\9ec190940af17113a4b8ee97df997a666931477f_0.file.member.tpl.cache.php</b> on line <b>74</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\coding\guestbook\demo\templates_c\9ec190940af17113a4b8ee97df997a666931477f_0.file.member.tpl.cache.php</b> on line <b>74</b><br />
">
                    <h6 style="visibility: hidden" id="checkPW">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer03">確認密碼</label>
                    <input type="password" class="form-control" id="validationServer03" onblur="reCheckPW()" required>
                    <h6 style="visibility: hidden" id="reCheckPW">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer04">暱稱</label>
                    <input type="text" class="form-control" id="validationServer04" name="memberName" onblur="checkName()" value="<br />
<b>Notice</b>:  Undefined index: memberName in <b>C:\xampp\htdocs\coding\guestbook\demo\templates_c\9ec190940af17113a4b8ee97df997a666931477f_0.file.member.tpl.cache.php</b> on line <b>85</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\coding\guestbook\demo\templates_c\9ec190940af17113a4b8ee97df997a666931477f_0.file.member.tpl.cache.php</b> on line <b>85</b><br />
" required>
                    <h6 style="visibility: hidden" id="checkName">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer05">電子信箱</label>
                    <input type="text" class="form-control" id="validationServer05" name="memberMail" onblur="checkMail()" value="<br />
<b>Notice</b>:  Undefined index: email in <b>C:\xampp\htdocs\coding\guestbook\demo\templates_c\9ec190940af17113a4b8ee97df997a666931477f_0.file.member.tpl.cache.php</b> on line <b>91</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\coding\guestbook\demo\templates_c\9ec190940af17113a4b8ee97df997a666931477f_0.file.member.tpl.cache.php</b> on line <b>91</b><br />
" required>
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

            <table width='800' align='center' cellspacing='3'>
                <tr>
                    <td>" . $row['subject'] . "</td>
                    <td>" . $row['date'] . "</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value='" . $row['id'] . "'>
                        <input type='text' name='content' id='" . $row['id'] . "' value='" . $row['content'] . "'>
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(" . $row['id'] . ")'>刪除</button>
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
</pre>
</body>
</html><?php }
}
