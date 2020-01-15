<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-15 03:34:09
  from 'C:\xampp\htdocs\coding\guestbook\demo\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e7a21d1dc25_23318581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb179ef5a467c51874b32e0bae4d205d129391e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\search.tpl',
      1 => 1579055637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1e7a21d1dc25_23318581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1139385615e1e7a21ce7122_89041760';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>搜尋</title>
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
    
        <?php if ($_smarty_tpl->tpl_vars['records']->value) {?>
        <p>查詢結果:共有<?php echo $_smarty_tpl->tpl_vars['records']->value;?>
筆資料</p>
        <div>
            <h4>留言列表</h4>
            <table>
                <tr>
                    <td>留言者</td>
                    <td>主題</td>
                    <td>時間</td>
                    <td>內容</td>
                </tr>
            </table>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post_array']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
            <table>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['post']->value['memberName'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</td>
                </tr>
            </table>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php } else { ?>
        <p>查無結果:請重新確認查詢資料</p>
    <?php }?>
</body>
</html><?php }
}
