<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 07:39:31
  from 'C:\xampp\htdocs\coding\guestbook\demo\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1d6223664370_96382825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb7bda8a00003dcb36a0b75bc0c0724146a12f94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\index.tpl',
      1 => 1578983777,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5e1d6223664370_96382825 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    
        <hr>
    <div class="accordion" id="accordionExample">
                    <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse41" aria-expanded="true" aria-controls="collapse41">
                            <h4>222222222</h4>
                        </button>
                    </h2>
                </div>
                <div id="collapse41" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-4" style="height:400px;border:2px solid red"><img src="upload/4320200114071856123.jpg" style="display: block;width: auto;height: 100%;" ></div>
                        <div class="col-sm-8" style="height:400px;border:2px solid red;padding:10px;margin-left:5px;overflow:scroll">
                            <h5 style="margin:0px">cba123456 said:</h5>
                            <p>222222222<p>
                                                                                                <h5 style="margin:0px">abc123456 said:</h5>
                                    <p>33333333333<p>
                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                    <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div><input type="text" class="col-sm-11" name="reply" id="reply"><button type="submit" style="margin-left:10px;margin-bottom:10px">submit</button></div>
                            <input type='text' name='subID' value="41" hidden>
                        </form>
                    </div>
                </div>
            </div>
                    <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse40" aria-expanded="true" aria-controls="collapse40">
                            <h4>1111111111</h4>
                        </button>
                    </h2>
                </div>
                <div id="collapse40" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">cba123456 said:</h5>
                            <p>1111111111<p>
                                                                                                                                                            <h5 style="margin:0px">abc123456 said:</h5>
                                    <p>44444444444444444<p>
                                                                                                                                <h5 style="margin:0px">abc123456 said:</h5>
                                    <p>gsnnsnsrn<p>
                                                                                                                                <h5 style="margin:0px">abc123456 said:</h5>
                                    <p>gnbsdgnsdgnsdrgns<p>
                                                                                                                                <h5 style="margin:0px">abc123456 said:</h5>
                                    <p>gfnsgnsgnsgnsg<p>
                                                                                                                                <h5 style="margin:0px">abc123456 said:</h5>
                                    <p>sgnsgnsgnfgnsfgn<p>
                                                                                    </div>
                                            </div>
                    <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div><input type="text" class="col-sm-11" name="reply" id="reply"><button type="submit" style="margin-left:10px;margin-bottom:10px">submit</button></div>
                            <input type='text' name='subID' value="40" hidden>
                        </form>
                    </div>
                </div>
            </div>
            </div>
    <hr>

        <form name="myForm" method="post" action="post.php" enctype="multipart/form-data">
        <table border="0" width="800" align="center" cellspacing="0">
            <tr bgcolor="#0084CA" align="center">
                <td colspan="2">
                    <font color="#FFFFFF" id="enter">請在此輸入新的留言</font>
                </td>
            </tr>
            <tr bgcolor="#D9F2FF">
                <td width="15%">作者</td>
                    <td width='85%'><input id='author' name='author' readonly type='text' size='50'></td>
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
        let cookie = document.cookie.split(" ");
        if(cookie[0]=="passed=1;"){
            passed=true;
            document.getElementById('author').value = cookie[1].split("=")[1];
        }else{
            passed=false;
        }

        function checkMember() {
            document.getElementById('author').disabled = !passed;
            document.getElementById('subject').disabled = !passed;
            document.getElementById('content').disabled = !passed;
            document.getElementById('enter').innerHTML = passed ? "請在此輸入新的留言" : "如要留言請先登入會員";
            document.getElementById('reply').disabled = !passed;
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
        checkMember();
    </script>

</body>
</html><?php }
}