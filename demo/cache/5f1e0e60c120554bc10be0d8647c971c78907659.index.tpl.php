<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-09 09:21:33
  from 'C:\xampp\htdocs\coding\guestbook\demo\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e16e28ded9d12_88595712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb7bda8a00003dcb36a0b75bc0c0724146a12f94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\index.tpl',
      1 => 1578552637,
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
function content_5e16e28ded9d12_88595712 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>guestbook</title>
    <script src="jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</head>
<body>
<pre>
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
    
        <div class="accordion" id="accordionExample">

        
    </div>

        <form name="myForm" method="post" action="post.php" enctype="multipart/form-data">
        <table border="0" width="800" align="center" cellspacing="0">
            <tr bgcolor="#0084CA" align="center">
                <td colspan="2">
                    <font color="#FFFFFF" id="enter">請在此輸入新的留言</font>
                </td>
            </tr>
            <tr bgcolor="#D9F2FF">
                <td width="15%">作者</td>
                <br />
<b>Notice</b>:  Undefined index: passed in <b>C:\xampp\htdocs\coding\guestbook\demo\templates_c\fb7bda8a00003dcb36a0b75bc0c0724146a12f94_0.file.index.tpl.cache.php</b> on line <b>148</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\coding\guestbook\demo\templates_c\fb7bda8a00003dcb36a0b75bc0c0724146a12f94_0.file.index.tpl.cache.php</b> on line <b>148</b><br />
 
                    <td width="85%"><input id="author" name="author" type="text" size="50"></td>
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
                    islogin = false;
        
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
</pre>
</body>
</html><?php }
}
