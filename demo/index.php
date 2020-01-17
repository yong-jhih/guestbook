<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    ini_set('display_errors','off'); 
    $db=new StockDB('localhost','root','','guestbook');
    $memberName=$_SESSION['memberName'];
    $now_time = date("Y-m-d H:i:s");
    
    if($_POST['type']==1){
        $search = $_POST['postID'];
    }elseif($_POST['type']==2){
        $search = $_POST['subID'];
    }

    if(!isset($search)){ // 非查詢(全部貼文)
        // 主文查詢
        $qstr = "SELECT a.* , b.Face , b.memberName FROM message as a , member as b where a.memberID = b.memberID AND type='1' ORDER BY postID DESC";
        $data = $db->query($qstr);
        $recordPerPage = 20;
        $totalRecords = $data->num_rows;
        $totalPages = ceil($totalRecords / $recordPerPage);
        if(isset($_GET["page"])){
            $page = $_GET["page"];
        }else{
            $page = 1;
        }
        $startedRecord = $recordPerPage * ($page - 1);
        $r=array();
        $i=0;
        while ($db->next_record() && $i < $totalRecords){
            $r[$i]=$db->record;
            $i++;
        }

        //回覆查詢
        $s=array();
        $n=0;
        $qstr = "SELECT a.* , b.Face , b.memberName FROM message as a , member as b where a.memberID = b.memberID AND type='2' ORDER BY postID";
        $data = $db->query($qstr);
        $totalRecords = $data->num_rows;
        while ($db->next_record() && $n < $totalRecords){
            $s[$n]=$db->record;
            $n++;
        }
        // var_dump($s);

        require_once '../libs/Smarty.class.php';
        $smarty = new Smarty;
        $smarty->debugging = true;
        $smarty->caching = true;
        $smarty->cache_lifetime = 0;
        $smarty->assign("passed",$_SESSION['passed']);
        $smarty->assign("post_array",$r);
        $smarty->assign("reply_array",$s);
        $smarty->display('index.tpl');
        include_once 'footer.php';

    }else{ // 查詢(目標貼文)

        // 主文查詢
        $qstr = "SELECT a.* , b.Face , b.memberName FROM message as a , member as b where a.memberID = b.memberID AND type='1' AND postID='$search' ORDER BY postID DESC";
        $data = $db->query($qstr);
        $recordPerPage = 20;
        $totalRecords = $data->num_rows;
        $totalPages = ceil($totalRecords / $recordPerPage);
        if(isset($_GET["page"])){
            $page = $_GET["page"];
        }else{
            $page = 1;
        }
        $startedRecord = $recordPerPage * ($page - 1);
        $r=array();
        $i=0;
        while ($db->next_record() && $i < $totalRecords){
            $r[$i]=$db->record;
            $i++;
        }

        //回覆查詢
        $s=array();
        $n=0;
        $qstr = "SELECT a.* , b.Face , b.memberName FROM message as a , member as b where a.memberID = b.memberID AND type='2' ORDER BY postID";
        $data = $db->query($qstr);
        $totalRecords = $data->num_rows;
        while ($db->next_record() && $n < $totalRecords){
            $s[$n]=$db->record;
            $n++;
        }

        require_once '../libs/Smarty.class.php';
        $smarty = new Smarty;
        $smarty->debugging = true;
        $smarty->caching = true;
        $smarty->cache_lifetime = 0;
        $smarty->assign("passed",$_SESSION['passed']);
        $smarty->assign("post_array",$r);
        $smarty->assign("reply_array",$s);
        $smarty->display('index.tpl');
        include_once 'footer.php';
    }
?>

<!-- 
array(5) { 
    [0]=> array(10) { 
        ["postID"]=> string(3) "106" 
        ["subID"]=> string(3) "104" 
        ["type"]=> string(1) "2" 
        ["date"]=> string(19) "2020-01-16 10:12:02" 
        ["memberID"]=> string(2) "53" 
        ["img"]=> NULL 
        ["content"]=> string(18) "死肥豬一直吃" 
        ["subject"]=> string(27) "RE.大吉大利明天吃雞" 
        ["Face"]=> string(30) "upload/5320200116095459123.jpg" 
        ["memberName"]=> string(8) "princess" } 
    [1]=> array(10) { 
        ["postID"]=> string(3) "108" 
        ["subID"]=> string(3) "104" 
        ["type"]=> string(1) "2" 
        ["date"]=> string(19) "2020-01-16 10:13:29" 
        ["memberID"]=> string(1) "0" 
        ["img"]=> NULL 
        ["content"]=> string(18) "請勿人身攻擊" 
        ["subject"]=> string(27) "RE.大吉大利明天吃雞" 
        ["Face"]=> string(28) "upload/020200116103920GM.png" 
        ["memberName"]=> string(2) "GM" } 
    [2]=> array(10) { ["postID"]=> string(3) "111" ["subID"]=> string(3) "110" ["type"]=> string(1) "2" ["date"]=> string(19) "2020-01-17 02:53:26" ["memberID"]=> string(2) "54" ["img"]=> NULL ["content"]=> string(9) "哭屁哭" ["subject"]=> string(18) "RE.今天天氣差" ["Face"]=> string(59) "upload/5420200116095633d8df320e5ed729f438d6c758d3d68b47.jpg" ["memberName"]=> string(10) "callmebaby" } [3]=> array(10) { ["postID"]=> string(3) "112" ["subID"]=> string(3) "110" ["type"]=> string(1) "2" ["date"]=> string(19) "2020-01-17 02:54:43" ["memberID"]=> string(2) "53" ["img"]=> NULL ["content"]=> string(3) "sad" ["subject"]=> string(18) "RE.今天天氣差" ["Face"]=> string(30) "upload/5320200116095459123.jpg" ["memberName"]=> string(8) "princess" } [4]=> array(10) { ["postID"]=> string(3) "114" ["subID"]=> string(3) "113" ["type"]=> string(1) "2" ["date"]=> string(19) "2020-01-17 02:58:45" ["memberID"]=> string(2) "54" ["img"]=> NULL ["content"]=> string(6) "真瞎" ["subject"]=> string(6) "RE.嗐" ["Face"]=> string(59) "upload/5420200116095633d8df320e5ed729f438d6c758d3d68b47.jpg" ["memberName"]=> string(10) "callmebaby" } } -->