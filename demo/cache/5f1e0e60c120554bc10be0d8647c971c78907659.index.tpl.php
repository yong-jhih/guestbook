<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-17 10:56:32
  from 'C:\xampp\htdocs\coding\guestbook\demo\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e2184d033d895_91120519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb7bda8a00003dcb36a0b75bc0c0724146a12f94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\index.tpl',
      1 => 1579227987,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5e2184d033d895_91120519 (Smarty_Internal_Template $_smarty_tpl) {
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
    
        <div class="accordion" id="accordionExample">
                                <div class="card">
                <div class="card-header" id="headingOne" style="block-inline">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse115" aria-expanded="true" aria-controls="collapse115">
                            <h4>123</h4>
                        </button>
                    </h2>
                    <div>
                        <div style="text-align:right">callmebaby  於  2020-01-17 03:14:35  發表</div>
                    </div>
                </div>
                                <div id="collapse115" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                 
                            <div class="col-sm-4" style="height:400px;border:2px solid red"><img src="upload/5420200117031435123.jpg" style="display: block;width: auto;height: 100%;" ></div>
                            <div class="col-sm-8" style="height:400px;border:2px solid red;padding:10px;margin-left:5px;overflow:scroll">
                                <h5 style="margin:0px">
                                                                                                                <img src="upload/5420200116095633d8df320e5ed729f438d6c758d3d68b47.jpg" style="width:auto;height:30px" title="callmebaby"> said:
                                                                    </h5>
                                <p class="text-break">123<p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <h5 style="margin:0px">
                                                                                    <img src="upload/5420200116095633d8df320e5ed729f438d6c758d3d68b47.jpg" style="width:auto;height:30px" title="callmebaby"> said:
                                                                                </h5>
                                        <p class="text-break">這是我的死對頭<p>
                                                                                                                                                                                    <h5 style="margin:0px">
                                                                                    <img src="upload/5320200117044904123.jpg" style="width:auto;height:30px" title="princess"> said:
                                                                                </h5>
                                        <p class="text-break">你真是讓我又愛又恨<p>
                                                                                                </div>
                                                                    </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" disabled required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="115" hidden>
                            <input type='text' name='subject' value="RE.123" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne" style="block-inline">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse113" aria-expanded="true" aria-controls="collapse113">
                            <h4>嗐</h4>
                        </button>
                    </h2>
                    <div>
                        <div style="text-align:right">callmebaby  於  2020-01-17 02:58:28  發表</div>
                    </div>
                </div>
                                <div id="collapse113" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                                            <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                                <h5 style="margin:0px">
                                                                                                    <img src="upload/5420200116095633d8df320e5ed729f438d6c758d3d68b47.jpg" style="width:auto;height:30px" title="callmebaby"> said:
                                                                <p class="text-break">瞎<p>
                                                                                                                                                                                                                                                                                                                                                                                            <h5 style="margin:0px">
                                                                                                                            <img src="upload/5420200116095633d8df320e5ed729f438d6c758d3d68b47.jpg" style="width:auto;height:30px" title="callmebaby"> said:
                                                                                </h5>
                                        <p class="text-break">真瞎<p>
                                                                                                                                                                                                                                        </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" disabled required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="113" hidden>
                            <input type='text' name='subject' value="RE.嗐" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne" style="block-inline">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse110" aria-expanded="true" aria-controls="collapse110">
                            <h4>今天天氣差</h4>
                        </button>
                    </h2>
                    <div>
                        <div style="text-align:right">princess  於  2020-01-17 02:51:59  發表</div>
                    </div>
                </div>
                                <div id="collapse110" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                                            <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                                <h5 style="margin:0px">
                                                                                                    <img src="upload/5320200117044904123.jpg" style="width:auto;height:30px" title="princess"> said:
                                                                <p class="text-break">哭哭<p>
                                                                                                                                                                                                                                                    <h5 style="margin:0px">
                                                                                                                            <img src="upload/5420200116095633d8df320e5ed729f438d6c758d3d68b47.jpg" style="width:auto;height:30px" title="callmebaby"> said:
                                                                                </h5>
                                        <p class="text-break">哭屁哭<p>
                                                                                                                                                <h5 style="margin:0px">
                                                                                                                            <img src="upload/5320200117044904123.jpg" style="width:auto;height:30px" title="princess"> said:
                                                                                </h5>
                                        <p class="text-break">sad<p>
                                                                                                                                                                                                                                                                                                            </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" disabled required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="110" hidden>
                            <input type='text' name='subject' value="RE.今天天氣差" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne" style="block-inline">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse109" aria-expanded="true" aria-controls="collapse109">
                            <h4>號外號外</h4>
                        </button>
                    </h2>
                    <div>
                        <div style="text-align:right">GM  於  2020-01-16 10:40:08  發表</div>
                    </div>
                </div>
                                <div id="collapse109" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                 
                            <div class="col-sm-4" style="height:400px;border:2px solid red"><img src="upload/020200116104008GM.png" style="display: block;width: auto;height: 100%;" ></div>
                            <div class="col-sm-8" style="height:400px;border:2px solid red;padding:10px;margin-left:5px;overflow:scroll">
                                <h5 style="margin:0px">
                                                                                                                <img src="upload/020200117044845GM.png" style="width:auto;height:30px" title="GM"> said:
                                                                    </h5>
                                <p class="text-break">即日起儲100 送1000
心動不如馬上行動<p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                    </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" disabled required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="109" hidden>
                            <input type='text' name='subject' value="RE.號外號外" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne" style="block-inline">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse107" aria-expanded="true" aria-controls="collapse107">
                            <h4>請勿人身攻擊</h4>
                        </button>
                    </h2>
                    <div>
                        <div style="text-align:right">GM  於  2020-01-16 10:13:10  發表</div>
                    </div>
                </div>
                                <div id="collapse107" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                                            <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                                <h5 style="margin:0px">
                                                                                                    <img src="upload/020200117044845GM.png" style="width:auto;height:30px" title="GM"> said:
                                                                <p class="text-break">小心ban你<p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" disabled required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="107" hidden>
                            <input type='text' name='subject' value="RE.請勿人身攻擊" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne" style="block-inline">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse104" aria-expanded="true" aria-controls="collapse104">
                            <h4>大吉大利明天吃雞</h4>
                        </button>
                    </h2>
                    <div>
                        <div style="text-align:right">callmebaby  於  2020-01-16 17:37:10  發表</div>
                    </div>
                </div>
                                <div id="collapse104" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                 
                            <div class="col-sm-4" style="height:400px;border:2px solid red"><img src="upload/5420200116095918d8df320e5ed729f438d6c758d3d68b47.jpg" style="display: block;width: auto;height: 100%;" ></div>
                            <div class="col-sm-8" style="height:400px;border:2px solid red;padding:10px;margin-left:5px;overflow:scroll">
                                <h5 style="margin:0px">
                                                                                                                <img src="upload/5420200116095633d8df320e5ed729f438d6c758d3d68b47.jpg" style="width:auto;height:30px" title="callmebaby"> said:
                                                                    </h5>
                                <p class="text-break">吃<p>
                                                                                                                                                <h5 style="margin:0px">
                                                                                    <img src="upload/5320200117044904123.jpg" style="width:auto;height:30px" title="princess"> said:
                                                                                </h5>
                                        <p class="text-break">死肥豬一直吃<p>
                                                                                                                                                                                    <h5 style="margin:0px">
                                                                                    <img src="upload/020200117044845GM.png" style="width:auto;height:30px" title="GM"> said:
                                                                                </h5>
                                        <p class="text-break">請勿人身攻擊<p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                    </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" disabled required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="104" hidden>
                            <input type='text' name='subject' value="RE.大吉大利明天吃雞" hidden>
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
                <td width="15%">發文者</td>
                    <td width='85%'><input class="form-control" id='author' name='author' readonly type='text' size='50'></td>
            </tr>
            <tr bgcolor="#84D7FF">
                <td width="15%">主題</td>
                <td width="85%"><input class="form-control" id='subject' name="subject" type="text" size="50"></td>
            </tr>
            <tr bgcolor="#D9F2FF">
                <td width="15%">內容</td>
                <td width="85%"><textarea class="form-control" id='content' name="content" cols="50" rows="5"></textarea></td>
            </tr>
            <tr bgcolor="#84D7FF">
                <td width="15%">上傳圖片</td>
                <td width="85%"><input id='img' name="img" type="file" accept=".image,.jpg,.jpeg,.png,.gif"></td>
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
        let memberName = cookie[1].split("=")[1].replace("+"," ");
        if(cookie[0]=="passed=1;"){
            passed=true;
            document.getElementById('author').value = memberName.substring(0,memberName.length-1) ;
        }else{
            passed=false;
        }
        function checkMember() {
            document.getElementById('author').disabled = !passed;
            document.getElementById('subject').disabled = !passed;
            document.getElementById('content').disabled = !passed;
            document.getElementById('enter').innerHTML = passed ? "請在此輸入新的留言" : "如要留言請先登入會員";
        }checkMember();
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
</html><?php }
}
