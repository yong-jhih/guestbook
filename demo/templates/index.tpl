<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>guestbook</title>
    <script src="js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</head>
<body>
    {* 登入頁ok *}
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">會員登入</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="checkpwd.php">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">帳號</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" name="memberAC" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">密碼</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword" name="memberPW" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                            <button type="submit" class="btn btn-primary">登入</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <hr>
    <div class="container">
        {* 留言表ok *}
        <div class="accordion" id="accordionExample">
            {foreach item=post from=$post_array}
                {* 文章列表 *}
                <div class="card">
                    <div class="card-header" id="headingOne" style="block-inline">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{$post.postID}" aria-expanded="true" aria-controls="collapse{$post.postID}">
                                <h4>{$post.subject}</h4>
                            </button>
                        </h2>
                        <div>
                            <div style="text-align:right">{$post.memberName}  於  {$post.date}  發表</div>
                        </div>
                    </div>
                    {* 內文 *}
                    <div id="collapse{$post.postID}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body" style="display:flex">
                            {* 主留言附圖 *}
                            {if $post.img} 
                                <div class="col-sm-6" style="height:300px;"><img src="{$post.img}" style="display: block;width: auto;height: 100%;" ></div>
                                <div class="col-sm-6" style="height:300px;padding:10px;margin-left:5px;overflow:scroll">
                                    <h5 style="margin:0px">
                                        {* 主留言者有無大頭照 *}
                                        {if $post.Face}
                                            <img src="{$post.Face}" style="width:auto;height:30px" title="{$post.memberName}"> said:
                                        {else}
                                            {$post.memberName} said:
                                        {/if}
                                    </h5>
                                    <p class="text-break mt-1">{$post.content}<p>
                                    {foreach item=reply from=$reply_array}
                                        {* 回覆者有無大頭照 *}
                                        {if $reply.subID==$post.postID}
                                            <h5 style="margin:0px">
                                            {if $reply.Face}
                                                <img src="{$reply.Face}" style="width:auto;height:30px" title="{$reply.memberName}"> said:
                                            {else}
                                                {$reply.memberName} said:
                                            {/if}
                                            </h5>
                                            <p class="text-break mt-1">{$reply.content}<p>
                                        {/if}
                                    {/foreach}
                                </div>
                            {* 主留言留言不附圖 *}
                            {else}
                                <div class="col-sm-12" style="height:300px;padding:10px;overflow:scroll">
                                    <h5 style="margin:0px">
                                    {* 主留言者有無大頭照 *}
                                    {if $post.Face}
                                        <img src="{$post.Face}" style="width:auto;height:30px" title="{$post.memberName}"> said:
                                    {else}
                                        {$post.memberName} said:
                                    {/if}
                                    <p class="text-break mt-1">{$post.content}<p>
                                    {foreach item=reply from=$reply_array}
                                        {if $reply.subID==$post.postID}
                                            <h5 style="margin:0px">
                                            {* 回覆者有無大頭照 *}
                                            {if $reply.Face}
                                                <img src="{$reply.Face}" style="width:auto;height:30px" title="{$reply.memberName}"> said:
                                            {else}
                                                {$reply.memberName} said:
                                            {/if}
                                            </h5>
                                            <p class="text-break mt-1">{$reply.content}<p>
                                        {/if}
                                    {/foreach}
                                </div>
                            {/if}
                        </div>
                        {* 回覆 *}
                        <div style="text-align:center">
                            <form action="reply.php" method="post">
                                <div>
                                    {if $passed}
                                    <input type="text" class="col-sm-11" name="reply" required>
                                    {else}
                                    <input type="text" class="col-sm-11" name="reply" disabled required>
                                    {/if}
                                    <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                                </div>
                                <input type='text' name='subID' value="{$post.postID}" hidden>
                                <input type='text' name='subject' value="RE.{$post.subject}" hidden>
                            </form>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                {foreach item=page from=$pages}
                    <li class="page-item"><a class="page-link" href="?page={$page}">{$page}</a></li>
                {/foreach}                  
            </ul>
        <nav>
    </div>
    <hr>

    {* 主留言區ok *}
    <form name="myForm" method="post" action="post.php" enctype="multipart/form-data">
        <table border="0" width="800" align="center" cellspacing="0">
            <tr bgcolor="#0084CA" align="center">
                <td colspan="2">
                    <font color="#FFFFFF" id="enter">請在此輸入新的留言</font>
                </td>
            </tr>
            <tr bgcolor="#D9F2FF">
                <td width="15%">發文者</td>
                    <td width='85%'><input class="form-control" id='author' name='author' readonly type='text' size='50'></td>
            </tr>
            <tr bgcolor="#84D7FF">
                <td width="15%">主題</td>
                <td width="85%"><input class="form-control" id='subject' name="subject" type="text" size="50"></td>
            </tr>
            <tr bgcolor="#D9F2FF">
                <td width="15%">內容</td>
                <td width="85%"><textarea class="form-control" id='content' name="content" cols="50" rows="5"></textarea></td>
            </tr>
            <tr bgcolor="#84D7FF">
                <td width="15%">上傳圖片</td>
                <td width="85%"><input id='img' name="img" type="file" accept=".image,.jpg,.jpeg,.png,.gif"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="button" value="張貼留言" class='btn btn-outline-primary' onClick="checkForm()">
                    <input type="reset" class='btn btn-outline-primary' value="重新輸入">
                </td>
            </tr>
        </table>
    </form>
    
    <script type="text/javascript">
        let passed ;
        let cookie = document.cookie.split(" ") ;
        if(cookie.length>1){
            passed = true ;
            var memberName = cookie[1].split("=")[1].replace("+"," ");
            document.getElementById('author').value = memberName.substring(0,memberName.length-1) ;
        }else{
            passed = false ;
        }
        function checkMember() {
            document.getElementById('author').disabled = !passed;
            document.getElementById('subject').disabled = !passed;
            document.getElementById('content').disabled = !passed;
            document.getElementById('enter').innerHTML = passed ? "請在此輸入新的留言" : "如要留言請先登入會員";
        }checkMember();
        function checkForm() {
            if (document.myForm.author.value.length == 0) {
                alert("請留名字");
            } else if (document.myForm.subject.value.length == 0) {
                alert("請給主題");
            } else if (document.myForm.content.value.length == 0) {
                alert("請給內容");
            } else {
                myForm.submit();
            }
        }
    </script>

</body>
</html>