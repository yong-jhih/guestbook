<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-15 06:42:46
  from 'C:\xampp\htdocs\coding\guestbook\demo\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1ea6565e3c60_36091093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb7bda8a00003dcb36a0b75bc0c0724146a12f94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\index.tpl',
      1 => 1579065797,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5e1ea6565e3c60_36091093 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse80" aria-expanded="true" aria-controls="collapse80">
                            <h4>strhtr</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse80" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>1111111111<p>
                                                                                                                                                                                                                        <h5 style="margin:0px">abc123456 said:</h5>
                                    <p>trshsrhsrthsrhsr<p>
                                                                                                                                <h5 style="margin:0px">abc123456 said:</h5>
                                    <p>strhstrstrhtr<p>
                                                                                                                                <h5 style="margin:0px">abc123456 said:</h5>
                                    <p>hstrhsrhssr<p>
                                                                                    </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="80" hidden>
                            <input type='text' name='subject' value="RE.strhtr" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse79" aria-expanded="true" aria-controls="collapse79">
                            <h4>srthrt</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse79" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>sthrtsrt<p>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="79" hidden>
                            <input type='text' name='subject' value="RE.srthrt" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse78" aria-expanded="true" aria-controls="collapse78">
                            <h4>srthtrstr</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse78" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>srthtsrsr<p>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="78" hidden>
                            <input type='text' name='subject' value="RE.srthtrstr" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse77" aria-expanded="true" aria-controls="collapse77">
                            <h4>srthrs</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse77" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>hsrthsr<p>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="77" hidden>
                            <input type='text' name='subject' value="RE.srthrs" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse76" aria-expanded="true" aria-controls="collapse76">
                            <h4>strhrt</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse76" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>strhsrth<p>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="76" hidden>
                            <input type='text' name='subject' value="RE.strhrt" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse75" aria-expanded="true" aria-controls="collapse75">
                            <h4>srthsrth</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse75" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>srthrtsrt<p>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="75" hidden>
                            <input type='text' name='subject' value="RE.srthsrth" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse74" aria-expanded="true" aria-controls="collapse74">
                            <h4>tghrrtrt</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse74" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>hsrhssr<p>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="74" hidden>
                            <input type='text' name='subject' value="RE.tghrrtrt" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse73" aria-expanded="true" aria-controls="collapse73">
                            <h4>esrher</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse73" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>erhesrhse<p>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="73" hidden>
                            <input type='text' name='subject' value="RE.esrher" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse72" aria-expanded="true" aria-controls="collapse72">
                            <h4>sethseh</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse72" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>sehtseh<p>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="72" hidden>
                            <input type='text' name='subject' value="RE.sethseh" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse71" aria-expanded="true" aria-controls="collapse71">
                            <h4>sthsthst</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse71" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>setheet<p>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="71" hidden>
                            <input type='text' name='subject' value="RE.sthsthst" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse70" aria-expanded="true" aria-controls="collapse70">
                            <h4>htshshs</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse70" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>sttsst<p>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="70" hidden>
                            <input type='text' name='subject' value="RE.htshshs" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse69" aria-expanded="true" aria-controls="collapse69">
                            <h4>srthstr</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse69" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>strhts<p>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="69" hidden>
                            <input type='text' name='subject' value="RE.srthstr" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse68" aria-expanded="true" aria-controls="collapse68">
                            <h4>strhss</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse68" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>tstrhshs<p>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="68" hidden>
                            <input type='text' name='subject' value="RE.strhss" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse67" aria-expanded="true" aria-controls="collapse67">
                            <h4>srthsr</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse67" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>strhsrstrtr<p>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="67" hidden>
                            <input type='text' name='subject' value="RE.srthsr" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse66" aria-expanded="true" aria-controls="collapse66">
                            <h4>大吉大利明天吃雞</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse66" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>2020-01-15<p>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="66" hidden>
                            <input type='text' name='subject' value="RE.大吉大利明天吃雞" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse65" aria-expanded="true" aria-controls="collapse65">
                            <h4>今天天氣不好</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse65" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-12" style="height:400px;border:2px solid red;padding:10px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>哭哭<p>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="65" hidden>
                            <input type='text' name='subject' value="RE.今天天氣不好" hidden>
                        </form>
                    </div>
                </div>
            </div>
                                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse62" aria-expanded="true" aria-controls="collapse62">
                            <h4>今天天氣很好</h4>
                        </button>
                    </h2>
                </div>
                                <div id="collapse62" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="display:flex">
                                                <div class="col-sm-4" style="height:400px;border:2px solid red"><img src="upload/4720200115045252123.jpg" style="display: block;width: auto;height: 100%;" ></div>
                        <div class="col-sm-8" style="height:400px;border:2px solid red;padding:10px;margin-left:5px;overflow:scroll">
                            <h5 style="margin:0px">abc123456 said:</h5>
                            <p>當個網美<p>
                                                                                                <h5 style="margin:0px">cba123456 said:</h5>
                                    <p>小姐單身嗎<p>
                                                                                                                                <h5 style="margin:0px">abc123456 said:</h5>
                                    <p>喪偶 謝<p>
                                                                                                                                                                                                                                                                        </div>
                                            </div>
                                        <div style="text-align:center">
                        <form action="reply.php" method="post">
                            <div>
                                                                <input type="text" class="col-sm-11" name="reply" required>
                                                                <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                            </div>
                            <input type='text' name='subID' value="62" hidden>
                            <input type='text' name='subject' value="RE.今天天氣很好" hidden>
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
                <td width="85%"><input id='img' name="img" type="file" accept="image,.jpg,.jpeg,.png,.gif"></td>
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
