<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    ini_set('display_errors','off');
    $deleteID = $_POST['deleteID'];
    $db=new StockDB('localhost','root','','guestbook');

    if(isset($_SESSION['passed'])){
        // 刪除圖片檔
        $qstr = "SELECT * FROM message where postID='$deleteID'";
        $data = $db->query($qstr);
        while ($db->next_record()){
            $r=$db->record;
        }
        if(is_file($r['img'])){
            unlink($r['img']);
        }

        // 刪除文章資料
        $qstr = "DELETE FROM message where postID='$deleteID' OR subID='$deleteID'";
        $data = $db->query($qstr);
        echo json_encode($deleteID);
        if($_SESSION['permission']==0){
            header("location:manager.php");
          }
        header("location:member.php");
    }else{
        header("location:index.php");
    }
?>