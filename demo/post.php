<?php
  require_once("db_connect.php");
  $author = $_POST["author"];
  $subject = $_POST["subject"];
  $content = $_POST["content"];
  $current_time = date("Y-m-d H:i:s");
  $current_timel = date("YmdHis");
  $memberID = $_COOKIE['memberID'];
  $fileName = $memberID . $current_timel . $_FILES["img"]["name"];
  $filePath = "upload/" . $fileName;
  if ($_FILES['img']['error'] > 0) {
    $link = create_connection();
    $sql = "INSERT INTO message(author, subject, content, date, memberID ) VALUES('$author', '$subject', '$content', '$current_time', '$memberID')";
    $result = execute_db($link, "guestbook", $sql);
    mysqli_close($link);
    header("location:index.php");
  } else {
    move_uploaded_file($_FILES["img"]["tmp_name"], $filePath);
    $link = create_connection();
    $sql = "INSERT INTO message(author, subject, content, date, memberID , img) VALUES('$author', '$subject', '$content', '$current_time', '$memberID' , '$filePath' )";
    $result = execute_db($link, "guestbook", $sql);
    mysqli_close($link);
    header("location:index.php");
  }
  exit();
?>