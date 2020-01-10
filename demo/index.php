<?php
    include_once 'statusBar.php';

    require_once 'mysqlilib.php';
    $db['AS']=new StockDB('localhost','root','','guestbook');

    $qstr = "SELECT * FROM message ORDER BY date DESC";
    $data = $db['AS']->query($qstr);

    // 頁數處理
    $recordPerPage = 5;
    $totalRecords = $data->num_rows;
    $totalPages = ceil($totalRecords / $recordPerPage);
    $startedRecord = $recordPerPage * ($page - 1);
    if (isset($_GET["page"])){
        $page = $_GET["page"];
    }else{
        $page = 1;
    }

    // 資料處理 主留言
    // require_once("db_connect.php");
    // $recordPerPage = 5;
    // if (isset($_GET["page"])){
    //     $page = $_GET["page"];
    // }else{
    //     $page = 1;
    // }
    // $link = create_connection();
    // $sql = "SELECT * FROM message ORDER BY id DESC WHERE type = 1";
    // $result = execute_db($link, "guestbook", $sql);
    // $totalRecords = mysqli_num_rows($result);
    // $totalPages = ceil($totalRecords / $recordPerPage);
    // $startedRecord = $recordPerPage * ($page - 1);
    // mysqli_data_seek($result, $startedRecord);
    
    $i =0 ;
    while($i <= $recordPerPage){
        $post_array[$i] = array(
            "mainID"=>$row["id"],
            "subject"=>$row["subject"],
            "author"=>$row["author"],
            "content"=>$row["content"],
            "date"=>$row["date"],
            "img"=>$row["img"],
            "memberID"=>$row["memberID"],);
        $i++;
    }

    while ($db['AS']->next_record()){
	    $r=$db['AS']->record;
    }

    // if (isset($_COOKIE['passed'])) {
    //     $memberName = $_COOKIE['memberName'];
    //     $a=array($_COOKIE['passed'],$_COOKIE['memberID'] ,$_COOKIE['memberName'] ,$_COOKIE['memberPWL'] );
    // }else{
    //     $a=array(null,null ,null ,null );
    // }
    //   $smarty->assign("cookie",$a);
    // $smarty->assign("message",$post_array);

        // 跳頁
        // echo "<hr>";
        // echo "<nav aria-label='Page navigation example'>";
        // echo "<ul class='pagination' style='align:center;background-color:green'>";
        // if ($page > 1) {
        //     echo "<li class='page-item'><a class='page-link' href='index.php?page=" . ($page - 1) . "'>上一頁</a></li>";
        // }

        // for ($i = 1; $i <= $totalPages; $i++) {
        //     if ($i == $page) {
        //         echo "<li class='page-item'><a class='page-link' disabled><u>$i</u></a></li>";
        //     } else {
        //         echo "<li class='page-item'><a class='page-link' href='index.php?page=$i'>$i</a></li>";
        //     }
        // }

        // if ($page < $totalPages) {
        //     echo "<li class='page-item'><a class='page-link' href='index.php?page=" . ($page + 1) . "'>下一頁</a></li>";
        // }
        // echo "</ul>";
        // echo "</nav>";
        
    require_once '../libs/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 120;
    $smarty->display('index.tpl');
  
?>