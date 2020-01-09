<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-09 07:50:39
  from 'C:\xampp\htdocs\coding\guestbook\demo\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e16cd3fb8d342_21674914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb7bda8a00003dcb36a0b75bc0c0724146a12f94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\index.tpl',
      1 => 1578552637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:statusBar.tpl' => 1,
  ),
),false)) {
function content_5e16cd3fb8d342_21674914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21255021715e16cd3fb43f81_86571343';
$_smarty_tpl->_subTemplateRender("file:statusBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>guestbook</title>
    <?php echo '<script'; ?>
 src="jquery-3.4.1.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
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

        <?php
$__section_messageList_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['message']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_messageList_0_total = $__section_messageList_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_messageList'] = new Smarty_Variable(array());
if ($__section_messageList_0_total !== 0) {
for ($__section_messageList_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index'] = 0; $__section_messageList_0_iteration <= $__section_messageList_0_total; $__section_messageList_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index']++){
?>
        <?php echo $_smarty_tpl->tpl_vars['message']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index'] : null)]['id'];?>

        <?php echo $_smarty_tpl->tpl_vars['message']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index'] : null)]['subject'];?>

        <?php echo $_smarty_tpl->tpl_vars['message']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index'] : null)]['author'];?>

        <?php echo $_smarty_tpl->tpl_vars['message']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index'] : null)]['content'];?>

        <?php echo $_smarty_tpl->tpl_vars['message']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index'] : null)]['memberID'];?>



            <div class="card" bgcolor="#D9F2FF">
                <div class='card-header' style='border:2px solid #D9F2FF' id='heading<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
'>
                    <h2 class="mb-0">
                        <button class='btn btn-link' type='button' data-toggle='collapse' data-target='#collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' aria-expanded='true' aria-controls='collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
'>
                            <?php echo $_smarty_tpl->tpl_vars['message']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index'] : null)]['subject'];?>

                        </button>
                    </h2>
                </div>
                <div id='collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' class='collapse' aria-labelledby='heading<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' data-parent='#accordionExample'>
                    <div class="card-body" style="display:flex">
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['message']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_messageList']->value['index'] : null)]['img'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 != null) {?>
                        <div><img src='' style='width:400px;height:300px'></div>
                    <?php }?>
                        <div class="col-md-8" style="margin-left:20px;border:2px solid red"></div>
                    </div>
                </div>
            </div>
        <?php
}
}
?>

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
                <?php if ($_smarty_tpl->tpl_vars['passed']->value) {?>
                    <td width='85%'><input id='author' name='author' readonly type='text' size='50' value='<?php echo $_smarty_tpl->tpl_vars['memberName']->value;?>
'></td>
                <?php } else { ?> 
                    <td width="85%"><input id="author" name="author" type="text" size="50"></td>
                <?php }?>
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
    
    <?php echo '<script'; ?>
>
        <?php if ('passed' == 'true') {?>
            islogin = true;
        <?php } else { ?>
            islogin = false;
        <?php }?>

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
    <?php echo '</script'; ?>
>
</pre>
</body>
</html><?php }
}
