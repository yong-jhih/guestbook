<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>guestbook</title>
  <script src="jquery-3.4.1.js"></script>
  <link rel="stylesheet" href="bootstrap-4.4.1-dist\css\bootstrap.css">
  <script src="bootstrap-4.4.1-dist\js\bootstrap.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="jquery-3.4.1.js"></script>
</head>
<body>
  <?php include 'statusBar.php' ?>
  <div class="col-md-3 mb-3">
    <form method="POST" action="addAC.php">
      <div class="col-md-9 mb-3">
        <label for="validationServer01">帳號</label>
        <input type="text" class="form-control" id="validationServer01" name="memberAC" onblur="checkAC()" required>
      </div>
      <div class="col-md-9 mb-3">
        <label for="validationServer02">密碼</label>
        <input type="password" class="form-control" id="validationServer02" required>
      </div>
      <div class="col-md-9 mb-3">
        <label for="validationServer03">確認密碼</label>
        <input type="password" class="form-control" id="validationServer03" required>
      </div>
      <div class="col-md-9 mb-3">
        <label for="validationServer04">暱稱</label>
        <input type="text" class="form-control" id="validationServer04" required>
      </div>
      <div class="col-md-9 mb-3">
        <label for="validationServerUsername">電子信箱</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend3">@</span>
          </div>
          <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input is-invalid" type="checkbox" id="invalidCheck3" required>
          <label class="form-check-label" for="invalidCheck3">
            Agree to terms and conditions
          </label>
          <div class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>
      </div>
      <div>
        <button class="btn btn-primary" type="submit">註冊</button>
        <button class="btn btn-primary" type="reset">清除</button>
      </div>
    </form>
  </div>
  </div>
  <hr>
  <!-- <form method="POST" action="addAC.php">
    會員帳號:<input type="text" name="memberAC" id="newAC" onblur="checkAC()" required><span id="showContent"></span><br>
    會員密碼:<input type="password" id="password1" name="memberPW" required><br>
    請再輸入一次密碼:<input type="password" id="password2" onblur="checkPW()" required><span id="isShow"
      style="color:red;visibility:hidden">密碼不同</span><br>
    會員暱稱:<input type="text" name="memberName" required><br>
    電子郵件:<input type="email" name="memberMail" required><br>
    <button type="submit">提交</button>
    <button type="reset">清除</button>
  </form> -->
  <script>
    function checkAC() {
      let newAC = document.getElementById("validationServer01").value;
      // alert('1223');
      $.ajax({
        async: true,
        type: "POST",
        url: 'checkAC.php',
        dataType: "json",
        data: {
          'newAC': newAC
        },
        success: function(response) {
          if (newAC == response) {
            document.getElementById('validationServer01').classList.add('is-invalid');
          }else{
            document.getElementById('validationServer01').classList.add('is-valid');
          }
        },
        error: function(response) {
          
        }
      })
    }
    function checkPW() {
      if (document.getElementById("password1").value != document.getElementById("password2").value) {
        document.getElementById("isShow").style.visibility = "visible";
      } else {
        document.getElementById("isShow").style.visibility = "hidden";
      }
    }
  </script>
</body>
</html>