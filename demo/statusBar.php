<?php session_start(); ?>
<!DOCTYPE html>
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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">留言板</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
            <?php
              if(isset($_SESSION['passed'])){
                echo $_SESSION['memberName']." 歡迎回來";
              }
            ?>
          </a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style='margin-right:5px'>Search</button>
      </form>
      <?php
        if(isset($_SESSION['passed'])){
          echo "<div style='text-align:right;margin-right:5px'>";
            echo "<button class='btn btn-outline-primary' onclick='logOut()' style='margin-right:5px'>"."登出</button>";
            echo "<button class='btn btn-outline-primary' onclick='redirectMember()'>會員中心</button>";
          echo "</div>";
        }else{
          echo "<div style='text-align:right'>";
            echo "<button class='btn btn-outline-primary' style='margin-right:5px' data-toggle='modal' data-target='#staticBackdrop'>登入</button>";
            echo "<button class='btn btn-outline-primary' onclick='redirectRegister()'>註冊</button>";
          echo "</div>";
        }
      ?>
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