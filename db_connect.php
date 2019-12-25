<?php
  function create_connection(){
    $link = mysqli_connect("localhost", "root", "") or die("無法建立資料連接: " . mysqli_connect_error());
    mysqli_query($link, "SET NAMES utf8");
    return $link;
  }
	
  function execute_db($link, $database, $sql){
    mysqli_select_db($link, $database) or die("開啟資料庫失敗: " . mysqli_error($link));				 
    $result = mysqli_query($link, $sql);
    return $result;
  }
?>


<!-- 
object(stdClass)#3 (8) 
{ 
  ["memberID"]=> string(1) "2" 
  ["memberAC"]=> string(6) "cba321" 
  ["memberPW"]=> string(6) "cba321" 
  ["memberName"]=> string(6) "cba321" 
  ["email"]=> string(9) "hit@gmail" 
  ["permission"]=> string(1) "1" 
  ["createDate"]=> string(19) "2019-12-25 19:42:23" 
  ["lastModify"]=> string(19) "2019-12-25 19:42:23" 
} -->