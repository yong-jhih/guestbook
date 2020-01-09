<?php
    /**
     * @package Example-application
     */
    require '../libs/Smarty.class.php';
    $smarty = new Smarty;
    //$smarty->force_compile = true;
    $smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 120;
    $smarty->display('index.tpl');

    // 資料處理 主留言
    require_once("db_connect.php");
    $recordPerPage = 5;
    if (isset($_GET["page"])){
        $page = $_GET["page"];
    }else{
        $page = 1;
    }
    $database = "guestbook";
    $link = create_connection();
    $sql = "SELECT * FROM message ORDER BY id DESC WHERE type = 1";
    $result = execute_db($link, "guestbook", $sql);
    $totalRecords = mysqli_num_rows($result);
    $totalPages = ceil($totalRecords / $recordPerPage);
    $startedRecord = $recordPerPage * ($page - 1);
    mysqli_data_seek($result, $startedRecord);
    
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
        
    $smarty->assign("message",$post_array);

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

        if(isset($_COOKIE['passed'])){
            $passed = $_COOKIE['passed'];
            $memberName = $_COOKIE['memberName'];
        }
        $smarty->assign("passed",$passed);
        $smarty->assign("memberName",$memberName);
        
?>