<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-10 08:52:04
  from 'C:\xampp\htdocs\coding\guestbook\demo\statusBar.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e182d245a1cf1_57739544',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '40024523b52dad8ac3c08cf634de4a15b8013b8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\statusBar.php',
      1 => 1578642717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e182d245a1cf1_57739544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6793982505e182d24584cb8_48347402';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
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
      <?php echo '/*%%SmartyNocache:6793982505e182d24584cb8_48347402%%*/<?php echo \'<?php
        \';?>
/*/%%SmartyNocache:6793982505e182d24584cb8_48347402%%*/';?>
if(isset($_COOKIE['passed'])){
          echo "<div style='text-align:right;margin-right:5px'>";
            echo "<button class='btn btn-outline-primary' onclick='logOut()' style='margin-right:5px'>"."登出</button>";
            echo "<button class='btn btn-outline-primary' onclick='redirectMember()'>會員中心</button>";
          echo "</div>";
        }else{
          echo "<div style='text-align:right'><button class='btn btn-outline-primary' style='margin-right:5px' data-toggle='modal' data-target='#staticBackdrop'>登入</button><button class='btn btn-outline-primary' onclick='redirectRegister()'>註冊</button></div>";
        }
      <?php echo '/*%%SmartyNocache:6793982505e182d24584cb8_48347402%%*/<?php echo \'?>\';?>
/*/%%SmartyNocache:6793982505e182d24584cb8_48347402%%*/';?>

    </div>
  </nav>
  <?php echo '<script'; ?>
>
    function redirectRegister() {
      window.location = "register.php";
    }

    function redirectMember() {
      window.location = "member.php";
    }

    function logOut() {
      window.location = "logout.php";
    }
  <?php echo '</script'; ?>
>
</body>

</html><?php }
}
