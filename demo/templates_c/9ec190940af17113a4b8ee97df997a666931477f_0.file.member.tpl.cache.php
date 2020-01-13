<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-13 10:38:46
  from 'C:\xampp\htdocs\coding\guestbook\demo\templates\member.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1c3aa682d645_51789321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ec190940af17113a4b8ee97df997a666931477f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\member.tpl',
      1 => 1578908320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1c3aa682d645_51789321 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13865824325e1c3aa67ea8b9_20720278';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員中心</title>
    <?php echo '<script'; ?>
 src="jquery-3.4.1.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist\css\bootstrap.css">
    <?php echo '<script'; ?>
 src="../bootstrap-4.4.1-dist\js\bootstrap.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
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
                    <input type="text" class="form-control" id="validationServer01" name="memberAC" id="newAC" readonly value="<?php echo $_smarty_tpl->tpl_vars['member']->value[0];?>
">
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer02">密碼</label>
                    <input type="password" class="form-control" id="validationServer02" name="memberPW" onblur="checkPW()" required placeholder="<?php echo $_smarty_tpl->tpl_vars['member']->value[1];?>
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
                    <input type="text" class="form-control" id="validationServer04" name="memberName" onblur="checkName()" value="<?php echo $_smarty_tpl->tpl_vars['member']->value[2];?>
" required>
                    <h6 style="visibility: hidden" id="checkName">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer05">電子信箱</label>
                    <input type="text" class="form-control" id="validationServer05" name="memberMail" onblur="checkMail()" value="<?php echo $_smarty_tpl->tpl_vars['member']->value[3];?>
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

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post_array']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
            <table width='800' cellspacing='3'>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</td>
                    <td class='content'>
                        <form action='modifyContent.php' method='POST'>
                        <input type='hidden' name='contentID' value="<?php echo $_smarty_tpl->tpl_vars['post']->value['postID'];?>
">
                        <input type='text' name='content' id="<?php echo $_smarty_tpl->tpl_vars['post']->value['postID'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
">
                    </td>
                    <td>
                        <button type='submit'>修改內容</button>
                        </form><button onclick='Delete(<?php echo $_smarty_tpl->tpl_vars['post']->value['postID'];?>
)'>刪除</button>
                    </td>
                </tr>
            </table>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
        <?php echo '<script'; ?>
 src="check.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            function Delete(deleteID) {
                alert(deleteID);
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
        <?php echo '</script'; ?>
>
    </div>

</body>
</html><?php }
}
