function checkForm(){
    if (document.myForm.author.value.length == 0){
        alert("作者欄位不可以空白哦！");
    }else if (document.myForm.subject.value.length == 0){
        alert("主題欄位不可以空白哦！");
    }else if (document.myForm.content.value.length == 0){
        lert("內容欄位不可以空白哦！");
    } else{
        myForm.submit();
    }
}