function checkPW(){
    if(document.getElementById("password1").value != document.getElementById("password2").value){
        document.getElementById("isShow").style.visibility= "visible" ;
    }else{
        document.getElementById("isShow").style.visibility= "hidden" ;
    }
}
function checkAC(){
    let newAC = document.getElementById("newAC").value;
    $.ajax({
        async: true,
        type:"POST",
        url:'checkAC.php',
        dataType:"json",
        data:{'newAC':newAC},
        success:function(response){
            if(newAC == response){
                document.getElementById("showContent").innerHTML= "帳號已被使用" ;
                document.getElementById("showContent").style.color = "red" ;
            }
        },
        error:function(response){
            document.getElementById("showContent").innerHTML= "帳號可以使用" ;
            document.getElementById("showContent").style.color= "green" ;
        }
    })
}