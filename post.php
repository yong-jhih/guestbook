<?php
  require_once("db_connect.php");
  $author = $_POST["author"];
  $subject = $_POST["subject"];
  $content = $_POST["content"];
  $current_time = date("Y-m-d H:i:s");
  $memberID = $_COOKIE['memberID'];

  $link = create_connection();
  $sql = "INSERT INTO message(author, subject, content, date,memberID) VALUES('$author', '$subject', '$content', '$current_time',$memberID)";
  $result = execute_db($link, "guestbook", $sql);
  mysqli_close($link);
  header("location:index.php");
  exit();
?>