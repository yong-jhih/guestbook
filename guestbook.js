function checkForm(){
    if (document.myForm.author.value.length == 0){
        alert("請留名字");
    }else if (document.myForm.subject.value.length == 0){
        alert("請給主題");
    }else if (document.myForm.content.value.length == 0){
        alert("請給內容");
    }else{
        myForm.submit();
    }
}